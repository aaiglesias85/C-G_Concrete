<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1beta\ScanConfig\Authentication;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes authentication configuration that uses a Google account.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanConfig.Authentication.GoogleAccount</code>
 */
class GoogleAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The user name of the Google account.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $username = '';
    /**
     * Required. Input only. The password of the Google account. The credential is stored encrypted
     * and not returned in any response nor included in audit logs.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           Required. The user name of the Google account.
     *     @type string $password
     *           Required. Input only. The password of the Google account. The credential is stored encrypted
     *           and not returned in any response nor included in audit logs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The user name of the Google account.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. The user name of the Google account.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Required. Input only. The password of the Google account. The credential is stored encrypted
     * and not returned in any response nor included in audit logs.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Required. Input only. The password of the Google account. The credential is stored encrypted
     * and not returned in any response nor included in audit logs.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAccount::class, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig_Authentication_GoogleAccount::class);

