<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response Message for UnregisterSubscriber.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.UnregisterSubscriberResponse</code>
 */
class UnregisterSubscriberResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the topic the service account subscriber access was removed from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Name of the topic the service account subscriber access was removed from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the topic the service account subscriber access was removed from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Name of the topic the service account subscriber access was removed from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

}

