<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkmanagement/v1/trace.proto

namespace Google\Cloud\NetworkManagement\V1\FirewallInfo;

use UnexpectedValueException;

/**
 * The firewall rule's type.
 *
 * Protobuf type <code>google.cloud.networkmanagement.v1.FirewallInfo.FirewallRuleType</code>
 */
class FirewallRuleType
{
    /**
     * Unspecified type.
     *
     * Generated from protobuf enum <code>FIREWALL_RULE_TYPE_UNSPECIFIED = 0;</code>
     */
    const FIREWALL_RULE_TYPE_UNSPECIFIED = 0;
    /**
     * Hierarchical firewall policy rule. For details, see
     * [Hierarchical firewall policies
     * overview](https://cloud.google.com/vpc/docs/firewall-policies).
     *
     * Generated from protobuf enum <code>HIERARCHICAL_FIREWALL_POLICY_RULE = 1;</code>
     */
    const HIERARCHICAL_FIREWALL_POLICY_RULE = 1;
    /**
     * VPC firewall rule. For details, see
     * [VPC firewall rules
     * overview](https://cloud.google.com/vpc/docs/firewalls).
     *
     * Generated from protobuf enum <code>VPC_FIREWALL_RULE = 2;</code>
     */
    const VPC_FIREWALL_RULE = 2;
    /**
     * Implied VPC firewall rule. For details, see
     * [Implied
     * rules](https://cloud.google.com/vpc/docs/firewalls#default_firewall_rules).
     *
     * Generated from protobuf enum <code>IMPLIED_VPC_FIREWALL_RULE = 3;</code>
     */
    const IMPLIED_VPC_FIREWALL_RULE = 3;

    private static $valueToName = [
        self::FIREWALL_RULE_TYPE_UNSPECIFIED => 'FIREWALL_RULE_TYPE_UNSPECIFIED',
        self::HIERARCHICAL_FIREWALL_POLICY_RULE => 'HIERARCHICAL_FIREWALL_POLICY_RULE',
        self::VPC_FIREWALL_RULE => 'VPC_FIREWALL_RULE',
        self::IMPLIED_VPC_FIREWALL_RULE => 'IMPLIED_VPC_FIREWALL_RULE',
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
class_alias(FirewallRuleType::class, \Google\Cloud\NetworkManagement\V1\FirewallInfo_FirewallRuleType::class);

