<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransferableOffer represents an Offer that can be used in Transfer.
 * Read-only.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.TransferableOffer</code>
 */
class TransferableOffer extends \Google\Protobuf\Internal\Message
{
    /**
     * Offer with parameter constraints updated to allow the Transfer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     */
    private $offer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\Offer $offer
     *           Offer with parameter constraints updated to allow the Transfer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Offer with parameter constraints updated to allow the Transfer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     * @return \Google\Cloud\Channel\V1\Offer|null
     */
    public function getOffer()
    {
        return $this->offer;
    }

    public function hasOffer()
    {
        return isset($this->offer);
    }

    public function clearOffer()
    {
        unset($this->offer);
    }

    /**
     * Offer with parameter constraints updated to allow the Transfer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Offer offer = 1;</code>
     * @param \Google\Cloud\Channel\V1\Offer $var
     * @return $this
     */
    public function setOffer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Offer::class);
        $this->offer = $var;

        return $this;
    }

}

