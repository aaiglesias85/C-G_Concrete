<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/company.proto

namespace Google\Cloud\Talent\V4\Company;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Derived details about the company.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.Company.DerivedInfo</code>
 */
class DerivedInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4.Company.headquarters_address] if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Location headquarters_location = 1;</code>
     */
    private $headquarters_location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4\Location $headquarters_location
     *           A structured headquarters location of the company, resolved from
     *           [Company.headquarters_address][google.cloud.talent.v4.Company.headquarters_address] if provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\Company::initOnce();
        parent::__construct($data);
    }

    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4.Company.headquarters_address] if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Location headquarters_location = 1;</code>
     * @return \Google\Cloud\Talent\V4\Location|null
     */
    public function getHeadquartersLocation()
    {
        return $this->headquarters_location;
    }

    public function hasHeadquartersLocation()
    {
        return isset($this->headquarters_location);
    }

    public function clearHeadquartersLocation()
    {
        unset($this->headquarters_location);
    }

    /**
     * A structured headquarters location of the company, resolved from
     * [Company.headquarters_address][google.cloud.talent.v4.Company.headquarters_address] if provided.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4.Location headquarters_location = 1;</code>
     * @param \Google\Cloud\Talent\V4\Location $var
     * @return $this
     */
    public function setHeadquartersLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4\Location::class);
        $this->headquarters_location = $var;

        return $this;
    }

}


