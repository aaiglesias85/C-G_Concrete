<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1\StreamingPullResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Subscription properties sent as part of the response.
 *
 * Generated from protobuf message <code>google.pubsub.v1.StreamingPullResponse.SubscriptionProperties</code>
 */
class SubscriptionProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * True iff exactly once delivery is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool exactly_once_delivery_enabled = 1;</code>
     */
    private $exactly_once_delivery_enabled = false;
    /**
     * True iff message ordering is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool message_ordering_enabled = 2;</code>
     */
    private $message_ordering_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $exactly_once_delivery_enabled
     *           True iff exactly once delivery is enabled for this subscription.
     *     @type bool $message_ordering_enabled
     *           True iff message ordering is enabled for this subscription.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * True iff exactly once delivery is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool exactly_once_delivery_enabled = 1;</code>
     * @return bool
     */
    public function getExactlyOnceDeliveryEnabled()
    {
        return $this->exactly_once_delivery_enabled;
    }

    /**
     * True iff exactly once delivery is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool exactly_once_delivery_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExactlyOnceDeliveryEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->exactly_once_delivery_enabled = $var;

        return $this;
    }

    /**
     * True iff message ordering is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool message_ordering_enabled = 2;</code>
     * @return bool
     */
    public function getMessageOrderingEnabled()
    {
        return $this->message_ordering_enabled;
    }

    /**
     * True iff message ordering is enabled for this subscription.
     *
     * Generated from protobuf field <code>bool message_ordering_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setMessageOrderingEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->message_ordering_enabled = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SubscriptionProperties::class, \Google\Cloud\PubSub\V1\StreamingPullResponse_SubscriptionProperties::class);

