<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/mitre_attack.proto

namespace Google\Cloud\SecurityCenter\V1\MitreAttack;

use UnexpectedValueException;

/**
 * MITRE ATT&CK techniques that can be referenced by SCC findings.
 * See: https://attack.mitre.org/techniques/enterprise/
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.MitreAttack.Technique</code>
 */
class Technique
{
    /**
     * Unspecified value.
     *
     * Generated from protobuf enum <code>TECHNIQUE_UNSPECIFIED = 0;</code>
     */
    const TECHNIQUE_UNSPECIFIED = 0;
    /**
     * T1595
     *
     * Generated from protobuf enum <code>ACTIVE_SCANNING = 1;</code>
     */
    const ACTIVE_SCANNING = 1;
    /**
     * T1595.001
     *
     * Generated from protobuf enum <code>SCANNING_IP_BLOCKS = 2;</code>
     */
    const SCANNING_IP_BLOCKS = 2;
    /**
     * T1105
     *
     * Generated from protobuf enum <code>INGRESS_TOOL_TRANSFER = 3;</code>
     */
    const INGRESS_TOOL_TRANSFER = 3;
    /**
     * T1106
     *
     * Generated from protobuf enum <code>NATIVE_API = 4;</code>
     */
    const NATIVE_API = 4;
    /**
     * T1129
     *
     * Generated from protobuf enum <code>SHARED_MODULES = 5;</code>
     */
    const SHARED_MODULES = 5;
    /**
     * T1059
     *
     * Generated from protobuf enum <code>COMMAND_AND_SCRIPTING_INTERPRETER = 6;</code>
     */
    const COMMAND_AND_SCRIPTING_INTERPRETER = 6;
    /**
     * T1059.004
     *
     * Generated from protobuf enum <code>UNIX_SHELL = 7;</code>
     */
    const UNIX_SHELL = 7;
    /**
     * T1496
     *
     * Generated from protobuf enum <code>RESOURCE_HIJACKING = 8;</code>
     */
    const RESOURCE_HIJACKING = 8;
    /**
     * T1090
     *
     * Generated from protobuf enum <code>PROXY = 9;</code>
     */
    const PROXY = 9;
    /**
     * T1090.002
     *
     * Generated from protobuf enum <code>EXTERNAL_PROXY = 10;</code>
     */
    const EXTERNAL_PROXY = 10;
    /**
     * T1090.003
     *
     * Generated from protobuf enum <code>MULTI_HOP_PROXY = 11;</code>
     */
    const MULTI_HOP_PROXY = 11;
    /**
     * T1568
     *
     * Generated from protobuf enum <code>DYNAMIC_RESOLUTION = 12;</code>
     */
    const DYNAMIC_RESOLUTION = 12;
    /**
     * T1552
     *
     * Generated from protobuf enum <code>UNSECURED_CREDENTIALS = 13;</code>
     */
    const UNSECURED_CREDENTIALS = 13;
    /**
     * T1078
     *
     * Generated from protobuf enum <code>VALID_ACCOUNTS = 14;</code>
     */
    const VALID_ACCOUNTS = 14;
    /**
     * T1078.003
     *
     * Generated from protobuf enum <code>LOCAL_ACCOUNTS = 15;</code>
     */
    const LOCAL_ACCOUNTS = 15;
    /**
     * T1078.004
     *
     * Generated from protobuf enum <code>CLOUD_ACCOUNTS = 16;</code>
     */
    const CLOUD_ACCOUNTS = 16;
    /**
     * T1498
     *
     * Generated from protobuf enum <code>NETWORK_DENIAL_OF_SERVICE = 17;</code>
     */
    const NETWORK_DENIAL_OF_SERVICE = 17;
    /**
     * T1069
     *
     * Generated from protobuf enum <code>PERMISSION_GROUPS_DISCOVERY = 18;</code>
     */
    const PERMISSION_GROUPS_DISCOVERY = 18;
    /**
     * T1069.003
     *
     * Generated from protobuf enum <code>CLOUD_GROUPS = 19;</code>
     */
    const CLOUD_GROUPS = 19;
    /**
     * T1567
     *
     * Generated from protobuf enum <code>EXFILTRATION_OVER_WEB_SERVICE = 20;</code>
     */
    const EXFILTRATION_OVER_WEB_SERVICE = 20;
    /**
     * T1567.002
     *
     * Generated from protobuf enum <code>EXFILTRATION_TO_CLOUD_STORAGE = 21;</code>
     */
    const EXFILTRATION_TO_CLOUD_STORAGE = 21;
    /**
     * T1098
     *
     * Generated from protobuf enum <code>ACCOUNT_MANIPULATION = 22;</code>
     */
    const ACCOUNT_MANIPULATION = 22;
    /**
     * T1098.004
     *
     * Generated from protobuf enum <code>SSH_AUTHORIZED_KEYS = 23;</code>
     */
    const SSH_AUTHORIZED_KEYS = 23;
    /**
     * T1543
     *
     * Generated from protobuf enum <code>CREATE_OR_MODIFY_SYSTEM_PROCESS = 24;</code>
     */
    const CREATE_OR_MODIFY_SYSTEM_PROCESS = 24;
    /**
     * T1539
     *
     * Generated from protobuf enum <code>STEAL_WEB_SESSION_COOKIE = 25;</code>
     */
    const STEAL_WEB_SESSION_COOKIE = 25;
    /**
     * T1578
     *
     * Generated from protobuf enum <code>MODIFY_CLOUD_COMPUTE_INFRASTRUCTURE = 26;</code>
     */
    const MODIFY_CLOUD_COMPUTE_INFRASTRUCTURE = 26;
    /**
     * T1190
     *
     * Generated from protobuf enum <code>EXPLOIT_PUBLIC_FACING_APPLICATION = 27;</code>
     */
    const EXPLOIT_PUBLIC_FACING_APPLICATION = 27;
    /**
     * T1556
     *
     * Generated from protobuf enum <code>MODIFY_AUTHENTICATION_PROCESS = 28;</code>
     */
    const MODIFY_AUTHENTICATION_PROCESS = 28;
    /**
     * T1485
     *
     * Generated from protobuf enum <code>DATA_DESTRUCTION = 29;</code>
     */
    const DATA_DESTRUCTION = 29;
    /**
     * T1484
     *
     * Generated from protobuf enum <code>DOMAIN_POLICY_MODIFICATION = 30;</code>
     */
    const DOMAIN_POLICY_MODIFICATION = 30;
    /**
     * T1562
     *
     * Generated from protobuf enum <code>IMPAIR_DEFENSES = 31;</code>
     */
    const IMPAIR_DEFENSES = 31;

    private static $valueToName = [
        self::TECHNIQUE_UNSPECIFIED => 'TECHNIQUE_UNSPECIFIED',
        self::ACTIVE_SCANNING => 'ACTIVE_SCANNING',
        self::SCANNING_IP_BLOCKS => 'SCANNING_IP_BLOCKS',
        self::INGRESS_TOOL_TRANSFER => 'INGRESS_TOOL_TRANSFER',
        self::NATIVE_API => 'NATIVE_API',
        self::SHARED_MODULES => 'SHARED_MODULES',
        self::COMMAND_AND_SCRIPTING_INTERPRETER => 'COMMAND_AND_SCRIPTING_INTERPRETER',
        self::UNIX_SHELL => 'UNIX_SHELL',
        self::RESOURCE_HIJACKING => 'RESOURCE_HIJACKING',
        self::PROXY => 'PROXY',
        self::EXTERNAL_PROXY => 'EXTERNAL_PROXY',
        self::MULTI_HOP_PROXY => 'MULTI_HOP_PROXY',
        self::DYNAMIC_RESOLUTION => 'DYNAMIC_RESOLUTION',
        self::UNSECURED_CREDENTIALS => 'UNSECURED_CREDENTIALS',
        self::VALID_ACCOUNTS => 'VALID_ACCOUNTS',
        self::LOCAL_ACCOUNTS => 'LOCAL_ACCOUNTS',
        self::CLOUD_ACCOUNTS => 'CLOUD_ACCOUNTS',
        self::NETWORK_DENIAL_OF_SERVICE => 'NETWORK_DENIAL_OF_SERVICE',
        self::PERMISSION_GROUPS_DISCOVERY => 'PERMISSION_GROUPS_DISCOVERY',
        self::CLOUD_GROUPS => 'CLOUD_GROUPS',
        self::EXFILTRATION_OVER_WEB_SERVICE => 'EXFILTRATION_OVER_WEB_SERVICE',
        self::EXFILTRATION_TO_CLOUD_STORAGE => 'EXFILTRATION_TO_CLOUD_STORAGE',
        self::ACCOUNT_MANIPULATION => 'ACCOUNT_MANIPULATION',
        self::SSH_AUTHORIZED_KEYS => 'SSH_AUTHORIZED_KEYS',
        self::CREATE_OR_MODIFY_SYSTEM_PROCESS => 'CREATE_OR_MODIFY_SYSTEM_PROCESS',
        self::STEAL_WEB_SESSION_COOKIE => 'STEAL_WEB_SESSION_COOKIE',
        self::MODIFY_CLOUD_COMPUTE_INFRASTRUCTURE => 'MODIFY_CLOUD_COMPUTE_INFRASTRUCTURE',
        self::EXPLOIT_PUBLIC_FACING_APPLICATION => 'EXPLOIT_PUBLIC_FACING_APPLICATION',
        self::MODIFY_AUTHENTICATION_PROCESS => 'MODIFY_AUTHENTICATION_PROCESS',
        self::DATA_DESTRUCTION => 'DATA_DESTRUCTION',
        self::DOMAIN_POLICY_MODIFICATION => 'DOMAIN_POLICY_MODIFICATION',
        self::IMPAIR_DEFENSES => 'IMPAIR_DEFENSES',
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
class_alias(Technique::class, \Google\Cloud\SecurityCenter\V1\MitreAttack_Technique::class);

