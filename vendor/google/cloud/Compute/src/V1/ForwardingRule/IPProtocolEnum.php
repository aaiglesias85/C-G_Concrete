<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\ForwardingRule;

use UnexpectedValueException;

/**
 * The IP protocol to which this rule applies. For protocol forwarding, valid options are TCP, UDP, ESP, AH, SCTP, ICMP and L3_DEFAULT. The valid IP protocols are different for different load balancing products as described in [Load balancing features](https://cloud.google.com/load-balancing/docs/features#protocols_from_the_load_balancer_to_the_backends).
 *
 * Protobuf type <code>google.cloud.compute.v1.ForwardingRule.IPProtocolEnum</code>
 */
class IPProtocolEnum
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_I_P_PROTOCOL_ENUM = 0;</code>
     */
    const UNDEFINED_I_P_PROTOCOL_ENUM = 0;
    /**
     * Generated from protobuf enum <code>AH = 2087;</code>
     */
    const AH = 2087;
    /**
     * Generated from protobuf enum <code>ESP = 68962;</code>
     */
    const ESP = 68962;
    /**
     * Generated from protobuf enum <code>ICMP = 2241597;</code>
     */
    const ICMP = 2241597;
    /**
     * Generated from protobuf enum <code>L3_DEFAULT = 48151369;</code>
     */
    const L3_DEFAULT = 48151369;
    /**
     * Generated from protobuf enum <code>SCTP = 2539724;</code>
     */
    const SCTP = 2539724;
    /**
     * Generated from protobuf enum <code>TCP = 82881;</code>
     */
    const TCP = 82881;
    /**
     * Generated from protobuf enum <code>UDP = 83873;</code>
     */
    const UDP = 83873;

    private static $valueToName = [
        self::UNDEFINED_I_P_PROTOCOL_ENUM => 'UNDEFINED_I_P_PROTOCOL_ENUM',
        self::AH => 'AH',
        self::ESP => 'ESP',
        self::ICMP => 'ICMP',
        self::L3_DEFAULT => 'L3_DEFAULT',
        self::SCTP => 'SCTP',
        self::TCP => 'TCP',
        self::UDP => 'UDP',
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


