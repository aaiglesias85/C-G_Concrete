<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/enums.proto

namespace Google\Cloud\EssentialContacts\V1;

use UnexpectedValueException;

/**
 * A contact's validation state indicates whether or not it is the correct
 * contact to be receiving notifications for a particular resource.
 *
 * Protobuf type <code>google.cloud.essentialcontacts.v1.ValidationState</code>
 */
class ValidationState
{
    /**
     * The validation state is unknown or unspecified.
     *
     * Generated from protobuf enum <code>VALIDATION_STATE_UNSPECIFIED = 0;</code>
     */
    const VALIDATION_STATE_UNSPECIFIED = 0;
    /**
     * The contact is marked as valid. This is usually done manually by the
     * contact admin. All new contacts begin in the valid state.
     *
     * Generated from protobuf enum <code>VALID = 1;</code>
     */
    const VALID = 1;
    /**
     * The contact is considered invalid. This may become the state if the
     * contact's email is found to be unreachable.
     *
     * Generated from protobuf enum <code>INVALID = 2;</code>
     */
    const INVALID = 2;

    private static $valueToName = [
        self::VALIDATION_STATE_UNSPECIFIED => 'VALIDATION_STATE_UNSPECIFIED',
        self::VALID => 'VALID',
        self::INVALID => 'INVALID',
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

