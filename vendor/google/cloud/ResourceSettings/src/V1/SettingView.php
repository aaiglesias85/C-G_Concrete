<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcesettings/v1/resource_settings.proto

namespace Google\Cloud\ResourceSettings\V1;

use UnexpectedValueException;

/**
 * View options for Settings.
 *
 * Protobuf type <code>google.cloud.resourcesettings.v1.SettingView</code>
 */
class SettingView
{
    /**
     * The default / unset value.
     * The API will default to the SETTING_VIEW_BASIC view.
     *
     * Generated from protobuf enum <code>SETTING_VIEW_UNSPECIFIED = 0;</code>
     */
    const SETTING_VIEW_UNSPECIFIED = 0;
    /**
     * Include [Setting.metadata][google.cloud.resourcesettings.v1.Setting.metadata], but nothing else.
     * This is the default value (for both ListSettings and GetSetting).
     *
     * Generated from protobuf enum <code>SETTING_VIEW_BASIC = 1;</code>
     */
    const SETTING_VIEW_BASIC = 1;
    /**
     * Include [Setting.effective_value][google.cloud.resourcesettings.v1.Setting.effective_value], but nothing else.
     *
     * Generated from protobuf enum <code>SETTING_VIEW_EFFECTIVE_VALUE = 2;</code>
     */
    const SETTING_VIEW_EFFECTIVE_VALUE = 2;
    /**
     * Include [Setting.local_value][google.cloud.resourcesettings.v1.Setting.local_value], but nothing else.
     *
     * Generated from protobuf enum <code>SETTING_VIEW_LOCAL_VALUE = 3;</code>
     */
    const SETTING_VIEW_LOCAL_VALUE = 3;

    private static $valueToName = [
        self::SETTING_VIEW_UNSPECIFIED => 'SETTING_VIEW_UNSPECIFIED',
        self::SETTING_VIEW_BASIC => 'SETTING_VIEW_BASIC',
        self::SETTING_VIEW_EFFECTIVE_VALUE => 'SETTING_VIEW_EFFECTIVE_VALUE',
        self::SETTING_VIEW_LOCAL_VALUE => 'SETTING_VIEW_LOCAL_VALUE',
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

