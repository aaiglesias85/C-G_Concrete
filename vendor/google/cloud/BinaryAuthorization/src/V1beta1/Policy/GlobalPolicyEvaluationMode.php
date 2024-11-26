<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/resources.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\Policy;

use UnexpectedValueException;

/**
 * Protobuf type <code>google.cloud.binaryauthorization.v1beta1.Policy.GlobalPolicyEvaluationMode</code>
 */
class GlobalPolicyEvaluationMode
{
    /**
     * Not specified: DISABLE is assumed.
     *
     * Generated from protobuf enum <code>GLOBAL_POLICY_EVALUATION_MODE_UNSPECIFIED = 0;</code>
     */
    const GLOBAL_POLICY_EVALUATION_MODE_UNSPECIFIED = 0;
    /**
     * Enables system policy evaluation.
     *
     * Generated from protobuf enum <code>ENABLE = 1;</code>
     */
    const ENABLE = 1;
    /**
     * Disables system policy evaluation.
     *
     * Generated from protobuf enum <code>DISABLE = 2;</code>
     */
    const DISABLE = 2;

    private static $valueToName = [
        self::GLOBAL_POLICY_EVALUATION_MODE_UNSPECIFIED => 'GLOBAL_POLICY_EVALUATION_MODE_UNSPECIFIED',
        self::ENABLE => 'ENABLE',
        self::DISABLE => 'DISABLE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GlobalPolicyEvaluationMode::class, \Google\Cloud\BinaryAuthorization\V1beta1\Policy_GlobalPolicyEvaluationMode::class);

