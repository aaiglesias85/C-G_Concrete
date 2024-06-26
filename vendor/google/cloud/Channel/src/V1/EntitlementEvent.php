<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/subscriber_event.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents Pub/Sub message content describing entitlement update.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.EntitlementEvent</code>
 */
class EntitlementEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of an entitlement of the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.resource_reference) = {</code>
     */
    private $entitlement = '';
    /**
     * Type of event which happened on the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementEvent.Type event_type = 2;</code>
     */
    private $event_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entitlement
     *           Resource name of an entitlement of the form:
     *           accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *     @type int $event_type
     *           Type of event which happened on the entitlement.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\SubscriberEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of an entitlement of the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEntitlement()
    {
        return $this->entitlement;
    }

    /**
     * Resource name of an entitlement of the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}
     *
     * Generated from protobuf field <code>string entitlement = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEntitlement($var)
    {
        GPBUtil::checkString($var, True);
        $this->entitlement = $var;

        return $this;
    }

    /**
     * Type of event which happened on the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementEvent.Type event_type = 2;</code>
     * @return int
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Type of event which happened on the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.EntitlementEvent.Type event_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\EntitlementEvent\Type::class);
        $this->event_type = $var;

        return $this;
    }

}

