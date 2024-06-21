<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A reference to a field, such as `max(messages.time) as max_time`.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredQuery.FieldReference</code>
 */
class FieldReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string field_path = 2;</code>
     */
    private $field_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string field_path = 2;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * Generated from protobuf field <code>string field_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldReference::class, \Google\Cloud\Firestore\V1\StructuredQuery_FieldReference::class);

