<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/operation.proto

namespace Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about an TTL configuration change.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta</code>
 */
class TtlConfigDelta extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies how the TTL configuration is changing.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta.ChangeType change_type = 1;</code>
     */
    private $change_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $change_type
     *           Specifies how the TTL configuration is changing.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies how the TTL configuration is changing.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta.ChangeType change_type = 1;</code>
     * @return int
     */
    public function getChangeType()
    {
        return $this->change_type;
    }

    /**
     * Specifies how the TTL configuration is changing.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.FieldOperationMetadata.TtlConfigDelta.ChangeType change_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChangeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata\TtlConfigDelta\ChangeType::class);
        $this->change_type = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TtlConfigDelta::class, \Google\Cloud\Firestore\Admin\V1\FieldOperationMetadata_TtlConfigDelta::class);

