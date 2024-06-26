<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `Seek` method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.SeekRequest</code>
 */
class SeekRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The subscription to affect.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $subscription = '';
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription
     *           Required. The subscription to affect.
     *     @type \Google\Protobuf\Timestamp $time
     *           The time to seek to.
     *           Messages retained in the subscription that were published before this
     *           time are marked as acknowledged, and messages retained in the
     *           subscription that were published after this time are marked as
     *           unacknowledged. Note that this operation affects only those messages
     *           retained in the subscription (configured by the combination of
     *           `message_retention_duration` and `retain_acked_messages`). For example,
     *           if `time` corresponds to a point before the message retention
     *           window (or to a point before the system's notion of the subscription
     *           creation time), only retained messages will be marked as unacknowledged,
     *           and already-expunged messages will not be restored.
     *     @type string $snapshot
     *           The snapshot to seek to. The snapshot's topic must be the same as that of
     *           the provided subscription.
     *           Format is `projects/{project}/snapshots/{snap}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The subscription to affect.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. The subscription to affect.
     *
     * Generated from protobuf field <code>string subscription = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * The time to seek to.
     * Messages retained in the subscription that were published before this
     * time are marked as acknowledged, and messages retained in the
     * subscription that were published after this time are marked as
     * unacknowledged. Note that this operation affects only those messages
     * retained in the subscription (configured by the combination of
     * `message_retention_duration` and `retain_acked_messages`). For example,
     * if `time` corresponds to a point before the message retention
     * window (or to a point before the system's notion of the subscription
     * creation time), only retained messages will be marked as unacknowledged,
     * and already-expunged messages will not be restored.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->readOneof(2);
    }

    public function hasTime()
    {
        return $this->hasOneof(2);
    }

    /**
     * The time to seek to.
     * Messages retained in the subscription that were published before this
     * time are marked as acknowledged, and messages retained in the
     * subscription that were published after this time are marked as
     * unacknowledged. Note that this operation affects only those messages
     * retained in the subscription (configured by the combination of
     * `message_retention_duration` and `retain_acked_messages`). For example,
     * if `time` corresponds to a point before the message retention
     * window (or to a point before the system's notion of the subscription
     * creation time), only retained messages will be marked as unacknowledged,
     * and already-expunged messages will not be restored.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The snapshot to seek to. The snapshot's topic must be the same as that of
     * the provided subscription.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSnapshot()
    {
        return $this->readOneof(3);
    }

    public function hasSnapshot()
    {
        return $this->hasOneof(3);
    }

    /**
     * The snapshot to seek to. The snapshot's topic must be the same as that of
     * the provided subscription.
     * Format is `projects/{project}/snapshots/{snap}`.
     *
     * Generated from protobuf field <code>string snapshot = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

