<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use UnexpectedValueException;

/**
 * The format used in an `AccessLevel`.
 *
 * Protobuf type <code>google.identity.accesscontextmanager.v1.LevelFormat</code>
 */
class LevelFormat
{
    /**
     * The format was not specified.
     *
     * Generated from protobuf enum <code>LEVEL_FORMAT_UNSPECIFIED = 0;</code>
     */
    const LEVEL_FORMAT_UNSPECIFIED = 0;
    /**
     * Uses the format the resource was defined in. BasicLevels are returned as
     * BasicLevels, CustomLevels are returned as CustomLevels.
     *
     * Generated from protobuf enum <code>AS_DEFINED = 1;</code>
     */
    const AS_DEFINED = 1;
    /**
     * Use Cloud Common Expression Language when returning the resource.  Both
     * BasicLevels and CustomLevels are returned as CustomLevels.
     *
     * Generated from protobuf enum <code>CEL = 2;</code>
     */
    const CEL = 2;

    private static $valueToName = [
        self::LEVEL_FORMAT_UNSPECIFIED => 'LEVEL_FORMAT_UNSPECIFIED',
        self::AS_DEFINED => 'AS_DEFINED',
        self::CEL => 'CEL',
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

