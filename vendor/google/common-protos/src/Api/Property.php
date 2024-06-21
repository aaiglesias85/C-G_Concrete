<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/consumer.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines project properties.
 * API services can define properties that can be assigned to consumer projects
 * so that backends can perform response customization without having to make
 * additional calls or maintain additional storage. For example, Maps API
 * defines properties that controls map tile cache period, or whether to embed a
 * watermark in a result.
 * These values can be set via API producer console. Only API providers can
 * define and set these properties.
 *
 * Generated from protobuf message <code>google.api.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the property (a.k.a key).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The type of this property.
     *
     * Generated from protobuf field <code>.google.api.Property.PropertyType type = 2;</code>
     */
    private $type = 0;
    /**
     * The description of the property
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the property (a.k.a key).
     *     @type int $type
     *           The type of this property.
     *     @type string $description
     *           The description of the property
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Consumer::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the property (a.k.a key).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the property (a.k.a key).
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The type of this property.
     *
     * Generated from protobuf field <code>.google.api.Property.PropertyType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this property.
     *
     * Generated from protobuf field <code>.google.api.Property.PropertyType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Property_PropertyType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The description of the property
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the property
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

