<?php

namespace Laminas\Code\Reflection\DocBlock\Tag;

use function explode;
use function implode;
use function preg_match;

class ThrowsTag implements TagInterface, PhpDocTypedTagInterface
{
    /**
     * @var string[]
     * @psalm-var list<string>
     */
    protected $types = [];

    /** @var string|null */
    protected $description;

    /**
     * @return string
     */
    public function getName()
    {
        return 'throws';
    }

    /** @inheritDoc */
    public function initialize($content)
    {
        $matches = [];
        preg_match('#([\w|\\\]+)(?:\s+(.*))?#', $content, $matches);

        $this->types = explode('|', $matches[1]);

        if (isset($matches[2])) {
            $this->description = $matches[2];
        }
    }

    /**
     * Get return variable type
     *
     * @deprecated 2.0.4 use getTypes instead
     *
     * @return string
     */
    public function getType()
    {
        return implode('|', $this->getTypes());
    }

    /** @inheritDoc */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
}
