<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.FieldType</code>
 */
class FieldType extends \Google\Protobuf\Internal\Message
{
    protected $type_decl;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $primitive_type
     *           Primitive types, such as string, boolean, etc.
     *     @type \Google\Cloud\DataCatalog\V1\FieldType\EnumType $enum_type
     *           An enum type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * Primitive types, such as string, boolean, etc.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType.PrimitiveType primitive_type = 1;</code>
     * @return int
     */
    public function getPrimitiveType()
    {
        return $this->readOneof(1);
    }

    public function hasPrimitiveType()
    {
        return $this->hasOneof(1);
    }

    /**
     * Primitive types, such as string, boolean, etc.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType.PrimitiveType primitive_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrimitiveType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\FieldType\PrimitiveType::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An enum type.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType.EnumType enum_type = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\FieldType\EnumType|null
     */
    public function getEnumType()
    {
        return $this->readOneof(2);
    }

    public function hasEnumType()
    {
        return $this->hasOneof(2);
    }

    /**
     * An enum type.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.FieldType.EnumType enum_type = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\FieldType\EnumType $var
     * @return $this
     */
    public function setEnumType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\FieldType\EnumType::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTypeDecl()
    {
        return $this->whichOneof("type_decl");
    }

}

