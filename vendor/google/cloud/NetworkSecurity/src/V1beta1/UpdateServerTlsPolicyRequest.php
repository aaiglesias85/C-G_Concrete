<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/server_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by UpdateServerTlsPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.UpdateServerTlsPolicyRequest</code>
 */
class UpdateServerTlsPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * ServerTlsPolicy resource by the update.  The fields
     * specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the
     * mask. If the user does not provide a mask then all fields will be
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;
    /**
     * Required. Updated ServerTlsPolicy resource.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy server_tls_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $server_tls_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Field mask is used to specify the fields to be overwritten in the
     *           ServerTlsPolicy resource by the update.  The fields
     *           specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the
     *           mask. If the user does not provide a mask then all fields will be
     *           overwritten.
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy $server_tls_policy
     *           Required. Updated ServerTlsPolicy resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\ServerTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * ServerTlsPolicy resource by the update.  The fields
     * specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the
     * mask. If the user does not provide a mask then all fields will be
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Field mask is used to specify the fields to be overwritten in the
     * ServerTlsPolicy resource by the update.  The fields
     * specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the
     * mask. If the user does not provide a mask then all fields will be
     * overwritten.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. Updated ServerTlsPolicy resource.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy server_tls_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy|null
     */
    public function getServerTlsPolicy()
    {
        return $this->server_tls_policy;
    }

    public function hasServerTlsPolicy()
    {
        return isset($this->server_tls_policy);
    }

    public function clearServerTlsPolicy()
    {
        unset($this->server_tls_policy);
    }

    /**
     * Required. Updated ServerTlsPolicy resource.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy server_tls_policy = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy $var
     * @return $this
     */
    public function setServerTlsPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy::class);
        $this->server_tls_policy = $var;

        return $this;
    }

}

