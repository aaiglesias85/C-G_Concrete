<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/analyze.proto

namespace Google\Cloud\Dataplex\V1\Content\Notebook;

use UnexpectedValueException;

/**
 * Kernel Type of the Jupyter notebook.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.Content.Notebook.KernelType</code>
 */
class KernelType
{
    /**
     * Kernel Type unspecified.
     *
     * Generated from protobuf enum <code>KERNEL_TYPE_UNSPECIFIED = 0;</code>
     */
    const KERNEL_TYPE_UNSPECIFIED = 0;
    /**
     * Python 3 Kernel.
     *
     * Generated from protobuf enum <code>PYTHON3 = 1;</code>
     */
    const PYTHON3 = 1;

    private static $valueToName = [
        self::KERNEL_TYPE_UNSPECIFIED => 'KERNEL_TYPE_UNSPECIFIED',
        self::PYTHON3 => 'PYTHON3',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


