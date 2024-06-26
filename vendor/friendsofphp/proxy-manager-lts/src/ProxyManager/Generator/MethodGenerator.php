<?php

declare(strict_types=1);

namespace ProxyManager\Generator;

use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\MethodGenerator as LaminasMethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;
use Laminas\Code\Reflection\MethodReflection;
use ReflectionException;
use ReflectionMethod;
use ReflectionParameter;

/**
 * Method generator that fixes minor quirks in ZF2's method generator
 */
class MethodGenerator extends LaminasMethodGenerator
{
    protected $hasTentativeReturnType = false;

    /**
     * @return static
     */
    public static function fromReflectionWithoutBodyAndDocBlock(MethodReflection $reflectionMethod): self
    {
        /** @var static $method */
        $method = static::copyMethodSignature($reflectionMethod);

        $method->setInterface(false);
        $method->setBody('');

        if (\PHP_VERSION_ID < 80100) {
            return $method;
        }

        /** @var callable(ReflectionMethod) : ReflectionMethod $getPrototype */
        $getPrototype = \Closure::fromCallable([new ReflectionMethod(ReflectionMethod::class, 'getPrototype'), 'invoke']);

        while (true) {
            if ($reflectionMethod->hasTentativeReturnType()) {
                $method->hasTentativeReturnType = true;
                break;
            }

            if ($reflectionMethod->isAbstract()) {
                break;
            }

            try {
                $reflectionMethod = $getPrototype($reflectionMethod);
            } catch (ReflectionException $e) {
                break;
            }
        }

        return $method;
    }

    public static function copyMethodSignature(MethodReflection $reflectionMethod): parent
    {
        $method = parent::copyMethodSignature($reflectionMethod);

        foreach ($reflectionMethod->getParameters() as $reflectionParameter) {
            $parameter = ParameterGenerator::fromReflection($reflectionParameter);
            $default = $parameter->getDefaultValue();

            if ($default !== null) {
                $parameter->setDefaultValue(new ValueGenerator($default, $reflectionParameter));
            }

            $method->setParameter($parameter);
        }

        return $method;
    }

    public function getDocBlock(): ?DocBlockGenerator
    {
        $docBlock = parent::getDocBlock();

        if (! $this->hasTentativeReturnType) {
            return $docBlock;
        }

        if ($docBlock === null) {
            return new class ($this->getIndentation()) extends DocBlockGenerator {
                public function __construct(string $indentation)
                {
                    $this->setIndentation($indentation);
                }

                public function generate(): string
                {
                    return $this->getIndentation() . '#[\ReturnTypeWillChange]' . self::LINE_FEED;
                }
            };
        }

        return new class ($docBlock) extends DocBlockGenerator {
            public function __construct(DocBlockGenerator $docBlock)
            {
                $this->setShortDescription($docBlock->getShortDescription());
                $this->setLongDescription($docBlock->getLongDescription());
                $this->setTags($docBlock->getTags());
                $this->setWordWrap($docBlock->getWordWrap());
                $this->setSourceDirty($docBlock->isSourceDirty());
                $this->setIndentation($docBlock->getIndentation());
                $this->setSourceContent($docBlock->getSourceContent());
            }

            public function generate(): string
            {
                return parent::generate() . $this->getIndentation() . '#[\ReturnTypeWillChange]' . self::LINE_FEED;
            }
        };
    }

    /**
     * {@inheritDoc} override needed to specify type in more detail
     */
    public function getSourceContent(): ?string
    {
        return parent::getSourceContent();
    }
}
