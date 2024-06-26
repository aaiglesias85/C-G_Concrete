<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1\AccessReason;

use UnexpectedValueException;

/**
 * Type of access justification.
 *
 * Protobuf type <code>google.cloud.accessapproval.v1.AccessReason.Type</code>
 */
class Type
{
    /**
     * Default value for proto, shouldn't be used.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Customer made a request or raised an issue that required the principal to
     * access customer data. `detail` is of the form ("#####" is the issue ID):
     *   * "Feedback Report: #####"
     *   * "Case Number: #####"
     *   * "Case ID: #####"
     *   * "E-PIN Reference: #####"
     *   * "Google-#####"
     *   * "T-#####"
     *
     * Generated from protobuf enum <code>CUSTOMER_INITIATED_SUPPORT = 1;</code>
     */
    const CUSTOMER_INITIATED_SUPPORT = 1;
    /**
     * The principal accessed customer data in order to diagnose or resolve a
     * suspected issue in services. Often this access is used to confirm that
     * customers are not affected by a suspected service issue or to remediate a
     * reversible system issue.
     *
     * Generated from protobuf enum <code>GOOGLE_INITIATED_SERVICE = 2;</code>
     */
    const GOOGLE_INITIATED_SERVICE = 2;
    /**
     * Google initiated service for security, fraud, abuse, or compliance
     * purposes.
     *
     * Generated from protobuf enum <code>GOOGLE_INITIATED_REVIEW = 3;</code>
     */
    const GOOGLE_INITIATED_REVIEW = 3;
    /**
     * The principal was compelled to access customer data in order to respond
     * to a legal third party data request or process, including legal processes
     * from customers themselves.
     *
     * Generated from protobuf enum <code>THIRD_PARTY_DATA_REQUEST = 4;</code>
     */
    const THIRD_PARTY_DATA_REQUEST = 4;
    /**
     * The principal accessed customer data in order to diagnose or resolve a
     * suspected issue in services or a known outage.
     *
     * Generated from protobuf enum <code>GOOGLE_RESPONSE_TO_PRODUCTION_ALERT = 5;</code>
     */
    const GOOGLE_RESPONSE_TO_PRODUCTION_ALERT = 5;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::CUSTOMER_INITIATED_SUPPORT => 'CUSTOMER_INITIATED_SUPPORT',
        self::GOOGLE_INITIATED_SERVICE => 'GOOGLE_INITIATED_SERVICE',
        self::GOOGLE_INITIATED_REVIEW => 'GOOGLE_INITIATED_REVIEW',
        self::THIRD_PARTY_DATA_REQUEST => 'THIRD_PARTY_DATA_REQUEST',
        self::GOOGLE_RESPONSE_TO_PRODUCTION_ALERT => 'GOOGLE_RESPONSE_TO_PRODUCTION_ALERT',
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
class_alias(Type::class, \Google\Cloud\AccessApproval\V1\AccessReason_Type::class);

