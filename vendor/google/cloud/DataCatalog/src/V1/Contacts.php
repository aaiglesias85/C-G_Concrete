<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contact people for the entry.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.Contacts</code>
 */
class Contacts extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of contact people for the entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Contacts.Person people = 1;</code>
     */
    private $people;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\Contacts\Person[]|\Google\Protobuf\Internal\RepeatedField $people
     *           The list of contact people for the entry.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of contact people for the entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Contacts.Person people = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeople()
    {
        return $this->people;
    }

    /**
     * The list of contact people for the entry.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Contacts.Person people = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\Contacts\Person[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeople($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\Contacts\Person::class);
        $this->people = $arr;

        return $this;
    }

}

