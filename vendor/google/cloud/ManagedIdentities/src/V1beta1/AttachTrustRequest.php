<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [AttachTrust][google.cloud.managedidentities.v1beta1.AttachTrust]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1beta1.AttachTrustRequest</code>
 */
class AttachTrustRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The domain trust resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $trust = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource domain name, project name and location using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type \Google\Cloud\ManagedIdentities\V1beta1\Trust $trust
     *           Required. The domain trust resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource domain name, project name and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The domain trust resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedIdentities\V1beta1\Trust|null
     */
    public function getTrust()
    {
        return $this->trust;
    }

    public function hasTrust()
    {
        return isset($this->trust);
    }

    public function clearTrust()
    {
        unset($this->trust);
    }

    /**
     * Required. The domain trust resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedIdentities\V1beta1\Trust $var
     * @return $this
     */
    public function setTrust($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1beta1\Trust::class);
        $this->trust = $var;

        return $this;
    }

}

