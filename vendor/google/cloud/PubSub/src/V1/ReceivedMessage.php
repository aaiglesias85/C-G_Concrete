<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message and its corresponding acknowledgment ID.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ReceivedMessage</code>
 */
class ReceivedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     */
    private $ack_id = '';
    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     */
    private $message = null;
    /**
     * The approximate number of times that Cloud Pub/Sub has attempted to deliver
     * the associated message to a subscriber.
     * More precisely, this is 1 + (number of NACKs) +
     * (number of ack_deadline exceeds) for this message.
     * A NACK is any call to ModifyAckDeadline with a 0 deadline. An ack_deadline
     * exceeds event is whenever a message is not acknowledged within
     * ack_deadline. Note that ack_deadline is initially
     * Subscription.ackDeadlineSeconds, but may get extended automatically by
     * the client library.
     * Upon the first delivery of a given message, `delivery_attempt` will have a
     * value of 1. The value is calculated at best effort and is approximate.
     * If a DeadLetterPolicy is not set on the subscription, this will be 0.
     *
     * Generated from protobuf field <code>int32 delivery_attempt = 3;</code>
     */
    private $delivery_attempt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ack_id
     *           This ID can be used to acknowledge the received message.
     *     @type \Google\Cloud\PubSub\V1\PubsubMessage $message
     *           The message.
     *     @type int $delivery_attempt
     *           The approximate number of times that Cloud Pub/Sub has attempted to deliver
     *           the associated message to a subscriber.
     *           More precisely, this is 1 + (number of NACKs) +
     *           (number of ack_deadline exceeds) for this message.
     *           A NACK is any call to ModifyAckDeadline with a 0 deadline. An ack_deadline
     *           exceeds event is whenever a message is not acknowledged within
     *           ack_deadline. Note that ack_deadline is initially
     *           Subscription.ackDeadlineSeconds, but may get extended automatically by
     *           the client library.
     *           Upon the first delivery of a given message, `delivery_attempt` will have a
     *           value of 1. The value is calculated at best effort and is approximate.
     *           If a DeadLetterPolicy is not set on the subscription, this will be 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @return string
     */
    public function getAckId()
    {
        return $this->ack_id;
    }

    /**
     * This ID can be used to acknowledge the received message.
     *
     * Generated from protobuf field <code>string ack_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_id = $var;

        return $this;
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @return \Google\Cloud\PubSub\V1\PubsubMessage|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    public function hasMessage()
    {
        return isset($this->message);
    }

    public function clearMessage()
    {
        unset($this->message);
    }

    /**
     * The message.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PubsubMessage message = 2;</code>
     * @param \Google\Cloud\PubSub\V1\PubsubMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\PubsubMessage::class);
        $this->message = $var;

        return $this;
    }

    /**
     * The approximate number of times that Cloud Pub/Sub has attempted to deliver
     * the associated message to a subscriber.
     * More precisely, this is 1 + (number of NACKs) +
     * (number of ack_deadline exceeds) for this message.
     * A NACK is any call to ModifyAckDeadline with a 0 deadline. An ack_deadline
     * exceeds event is whenever a message is not acknowledged within
     * ack_deadline. Note that ack_deadline is initially
     * Subscription.ackDeadlineSeconds, but may get extended automatically by
     * the client library.
     * Upon the first delivery of a given message, `delivery_attempt` will have a
     * value of 1. The value is calculated at best effort and is approximate.
     * If a DeadLetterPolicy is not set on the subscription, this will be 0.
     *
     * Generated from protobuf field <code>int32 delivery_attempt = 3;</code>
     * @return int
     */
    public function getDeliveryAttempt()
    {
        return $this->delivery_attempt;
    }

    /**
     * The approximate number of times that Cloud Pub/Sub has attempted to deliver
     * the associated message to a subscriber.
     * More precisely, this is 1 + (number of NACKs) +
     * (number of ack_deadline exceeds) for this message.
     * A NACK is any call to ModifyAckDeadline with a 0 deadline. An ack_deadline
     * exceeds event is whenever a message is not acknowledged within
     * ack_deadline. Note that ack_deadline is initially
     * Subscription.ackDeadlineSeconds, but may get extended automatically by
     * the client library.
     * Upon the first delivery of a given message, `delivery_attempt` will have a
     * value of 1. The value is calculated at best effort and is approximate.
     * If a DeadLetterPolicy is not set on the subscription, this will be 0.
     *
     * Generated from protobuf field <code>int32 delivery_attempt = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDeliveryAttempt($var)
    {
        GPBUtil::checkInt32($var);
        $this->delivery_attempt = $var;

        return $this;
    }

}

