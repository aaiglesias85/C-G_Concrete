<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle\Util;

/**
 * @internal
 */
final class ClassDetails
{
    public function __construct(
        private string $fullClassName,
    ) {
    }

    /**
     * Get list of property names except "id" for use in a make:form context.
     */
    public function getFormFields(): array
    {
        $properties = $this->getProperties();

        $fields = array_diff($properties, ['id']);

        $fieldsWithTypes = [];
        foreach ($fields as $field) {
            $fieldsWithTypes[$field] = null;
        }

        return $fieldsWithTypes;
    }

    private function getProperties(): array
    {
        $reflect = new \ReflectionClass($this->fullClassName);
        $props = $reflect->getProperties();

        $propertiesList = [];

        foreach ($props as $prop) {
            $propertiesList[] = $prop->getName();
        }

        return $propertiesList;
    }

    public function getPath(): string
    {
        return (new \ReflectionClass($this->fullClassName))->getFileName();
    }

    public function hasAttribute(string $attributeClassName): bool
    {
        $reflected = new \ReflectionClass($this->fullClassName);

        foreach ($reflected->getAttributes($attributeClassName) as $reflectedAttribute) {
            if ($reflectedAttribute->getName() === $attributeClassName) {
                return true;
            }
        }

        return false;
    }
}
