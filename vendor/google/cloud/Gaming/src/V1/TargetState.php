<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/common.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates the Target state.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.TargetState</code>
 */
class TargetState extends \Google\Protobuf\Internal\Message
{
    /**
     * Details about Agones fleets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.TargetDetails details = 1;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1\TargetDetails[]|\Google\Protobuf\Internal\RepeatedField $details
     *           Details about Agones fleets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Details about Agones fleets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.TargetDetails details = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Details about Agones fleets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.TargetDetails details = 1;</code>
     * @param \Google\Cloud\Gaming\V1\TargetDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\TargetDetails::class);
        $this->details = $arr;

        return $this;
    }

}

