<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for running asset discovery for an organization.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.RunAssetDiscoveryRequest</code>
 */
class RunAssetDiscoveryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the organization to run asset discovery for. Its format is
     * "organizations/[organization_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the organization to run asset discovery for. Its format is
     *           "organizations/[organization_id]".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the organization to run asset discovery for. Its format is
     * "organizations/[organization_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the organization to run asset discovery for. Its format is
     * "organizations/[organization_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

