<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update an `AccessPolicy`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.UpdateAccessPolicyRequest</code>
 */
class UpdateAccessPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated AccessPolicy.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.AccessPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $policy = null;
    /**
     * Required. Mask to control which fields get updated. Must be non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Identity\AccessContextManager\V1\AccessPolicy $policy
     *           Required. The updated AccessPolicy.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask to control which fields get updated. Must be non-empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated AccessPolicy.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.AccessPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Identity\AccessContextManager\V1\AccessPolicy|null
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    public function hasPolicy()
    {
        return isset($this->policy);
    }

    public function clearPolicy()
    {
        unset($this->policy);
    }

    /**
     * Required. The updated AccessPolicy.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.AccessPolicy policy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Identity\AccessContextManager\V1\AccessPolicy $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\AccessPolicy::class);
        $this->policy = $var;

        return $this;
    }

    /**
     * Required. Mask to control which fields get updated. Must be non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask to control which fields get updated. Must be non-empty.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

