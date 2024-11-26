<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/finding_addon.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about vulnerable request parameters.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.VulnerableParameters</code>
 */
class VulnerableParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * The vulnerable parameter names.
     *
     * Generated from protobuf field <code>repeated string parameter_names = 1;</code>
     */
    private $parameter_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $parameter_names
     *           The vulnerable parameter names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\FindingAddon::initOnce();
        parent::__construct($data);
    }

    /**
     * The vulnerable parameter names.
     *
     * Generated from protobuf field <code>repeated string parameter_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameterNames()
    {
        return $this->parameter_names;
    }

    /**
     * The vulnerable parameter names.
     *
     * Generated from protobuf field <code>repeated string parameter_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameterNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->parameter_names = $arr;

        return $this;
    }

}

