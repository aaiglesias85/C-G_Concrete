<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains details of the Publisher.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.Publisher</code>
 */
class Publisher extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Name of the listing Publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Optional. Email or URL of the listing Publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $primary_contact = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. Name of the listing Publisher.
     *     @type string $primary_contact
     *           Optional. Email or URL of the listing Publisher.
     *           Max Length: 1000 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Name of the listing Publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. Name of the listing Publisher.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Email or URL of the listing Publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->primary_contact;
    }

    /**
     * Optional. Email or URL of the listing Publisher.
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryContact($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_contact = $var;

        return $this;
    }

}

