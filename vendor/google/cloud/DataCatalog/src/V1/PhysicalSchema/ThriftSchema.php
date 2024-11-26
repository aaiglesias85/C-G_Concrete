<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/physical_schema.proto

namespace Google\Cloud\DataCatalog\V1\PhysicalSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Schema in Thrift format.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.PhysicalSchema.ThriftSchema</code>
 */
class ThriftSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Thrift IDL source of the schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Thrift IDL source of the schema.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\PhysicalSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * Thrift IDL source of the schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Thrift IDL source of the schema.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThriftSchema::class, \Google\Cloud\DataCatalog\V1\PhysicalSchema_ThriftSchema::class);

