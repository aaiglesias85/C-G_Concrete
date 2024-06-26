<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Google Cloud Armor security policy resource. Only external backend services that use load balancers can reference a security policy. For more information, see Google Cloud Armor security policy overview.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SecurityPolicy</code>
 */
class SecurityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdaptiveProtectionConfig adaptive_protection_config = 150240735;</code>
     */
    private $adaptive_protection_config = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdvancedOptionsConfig advanced_options_config = 449276352;</code>
     */
    private $advanced_options_config = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyDdosProtectionConfig ddos_protection_config = 50315853;</code>
     */
    private $ddos_protection_config = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the security policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output only] Type of the resource. Always compute#securityPolicyfor security policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRecaptchaOptionsConfig recaptcha_options_config = 519006811;</code>
     */
    private $recaptcha_options_config = null;
    /**
     * [Output Only] URL of the region where the regional security policy resides. This field is not applicable to global security policies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a security policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRule rules = 108873975;</code>
     */
    private $rules;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * The type indicates the intended use of the security policy. - CLOUD_ARMOR: Cloud Armor backend security policies can be configured to filter incoming HTTP requests targeting backend services. They filter requests before they hit the origin servers. - CLOUD_ARMOR_EDGE: Cloud Armor edge security policies can be configured to filter incoming HTTP requests targeting backend services (including Cloud CDN-enabled) as well as backend buckets (Cloud Storage). They filter requests before the request is served from Google's cache. - CLOUD_ARMOR_INTERNAL_SERVICE: Cloud Armor internal service policies can be configured to filter HTTP requests targeting services managed by Traffic Director in a service mesh. They filter requests before the request is served from the application. This field can be set only at resource creation time.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyAdaptiveProtectionConfig $adaptive_protection_config
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyAdvancedOptionsConfig $advanced_options_config
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyDdosProtectionConfig $ddos_protection_config
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $fingerprint
     *           Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the security policy.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output only] Type of the resource. Always compute#securityPolicyfor security policies
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRecaptchaOptionsConfig $recaptcha_options_config
     *     @type string $region
     *           [Output Only] URL of the region where the regional security policy resides. This field is not applicable to global security policies.
     *     @type \Google\Cloud\Compute\V1\SecurityPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a security policy, a default rule with action "allow" will be added.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $type
     *           The type indicates the intended use of the security policy. - CLOUD_ARMOR: Cloud Armor backend security policies can be configured to filter incoming HTTP requests targeting backend services. They filter requests before they hit the origin servers. - CLOUD_ARMOR_EDGE: Cloud Armor edge security policies can be configured to filter incoming HTTP requests targeting backend services (including Cloud CDN-enabled) as well as backend buckets (Cloud Storage). They filter requests before the request is served from Google's cache. - CLOUD_ARMOR_INTERNAL_SERVICE: Cloud Armor internal service policies can be configured to filter HTTP requests targeting services managed by Traffic Director in a service mesh. They filter requests before the request is served from the application. This field can be set only at resource creation time.
     *           Check the Type enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdaptiveProtectionConfig adaptive_protection_config = 150240735;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyAdaptiveProtectionConfig|null
     */
    public function getAdaptiveProtectionConfig()
    {
        return $this->adaptive_protection_config;
    }

    public function hasAdaptiveProtectionConfig()
    {
        return isset($this->adaptive_protection_config);
    }

    public function clearAdaptiveProtectionConfig()
    {
        unset($this->adaptive_protection_config);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdaptiveProtectionConfig adaptive_protection_config = 150240735;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyAdaptiveProtectionConfig $var
     * @return $this
     */
    public function setAdaptiveProtectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyAdaptiveProtectionConfig::class);
        $this->adaptive_protection_config = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdvancedOptionsConfig advanced_options_config = 449276352;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyAdvancedOptionsConfig|null
     */
    public function getAdvancedOptionsConfig()
    {
        return $this->advanced_options_config;
    }

    public function hasAdvancedOptionsConfig()
    {
        return isset($this->advanced_options_config);
    }

    public function clearAdvancedOptionsConfig()
    {
        unset($this->advanced_options_config);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyAdvancedOptionsConfig advanced_options_config = 449276352;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyAdvancedOptionsConfig $var
     * @return $this
     */
    public function setAdvancedOptionsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyAdvancedOptionsConfig::class);
        $this->advanced_options_config = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyDdosProtectionConfig ddos_protection_config = 50315853;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyDdosProtectionConfig|null
     */
    public function getDdosProtectionConfig()
    {
        return $this->ddos_protection_config;
    }

    public function hasDdosProtectionConfig()
    {
        return isset($this->ddos_protection_config);
    }

    public function clearDdosProtectionConfig()
    {
        unset($this->ddos_protection_config);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyDdosProtectionConfig ddos_protection_config = 50315853;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyDdosProtectionConfig $var
     * @return $this
     */
    public function setDdosProtectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyDdosProtectionConfig::class);
        $this->ddos_protection_config = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the security policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Specifies a fingerprint for this resource, which is essentially a hash of the metadata's contents and used for optimistic locking. The fingerprint is initially generated by Compute Engine and changes after every request to modify or update metadata. You must always provide an up-to-date fingerprint hash in order to update or change metadata, otherwise the request will fail with error 412 conditionNotMet. To see the latest fingerprint, make get() request to the security policy.
     *
     * Generated from protobuf field <code>optional string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output only] Type of the resource. Always compute#securityPolicyfor security policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output only] Type of the resource. Always compute#securityPolicyfor security policies
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRecaptchaOptionsConfig recaptcha_options_config = 519006811;</code>
     * @return \Google\Cloud\Compute\V1\SecurityPolicyRecaptchaOptionsConfig|null
     */
    public function getRecaptchaOptionsConfig()
    {
        return $this->recaptcha_options_config;
    }

    public function hasRecaptchaOptionsConfig()
    {
        return isset($this->recaptcha_options_config);
    }

    public function clearRecaptchaOptionsConfig()
    {
        unset($this->recaptcha_options_config);
    }

    /**
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.SecurityPolicyRecaptchaOptionsConfig recaptcha_options_config = 519006811;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRecaptchaOptionsConfig $var
     * @return $this
     */
    public function setRecaptchaOptionsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SecurityPolicyRecaptchaOptionsConfig::class);
        $this->recaptcha_options_config = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the regional security policy resides. This field is not applicable to global security policies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] URL of the region where the regional security policy resides. This field is not applicable to global security policies.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a security policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * A list of rules that belong to this policy. There must always be a default rule (rule with priority 2147483647 and match "*"). If no rules are provided when creating a security policy, a default rule with action "allow" will be added.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SecurityPolicyRule rules = 108873975;</code>
     * @param \Google\Cloud\Compute\V1\SecurityPolicyRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SecurityPolicyRule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The type indicates the intended use of the security policy. - CLOUD_ARMOR: Cloud Armor backend security policies can be configured to filter incoming HTTP requests targeting backend services. They filter requests before they hit the origin servers. - CLOUD_ARMOR_EDGE: Cloud Armor edge security policies can be configured to filter incoming HTTP requests targeting backend services (including Cloud CDN-enabled) as well as backend buckets (Cloud Storage). They filter requests before the request is served from Google's cache. - CLOUD_ARMOR_INTERNAL_SERVICE: Cloud Armor internal service policies can be configured to filter HTTP requests targeting services managed by Traffic Director in a service mesh. They filter requests before the request is served from the application. This field can be set only at resource creation time.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @return string
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : '';
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The type indicates the intended use of the security policy. - CLOUD_ARMOR: Cloud Armor backend security policies can be configured to filter incoming HTTP requests targeting backend services. They filter requests before they hit the origin servers. - CLOUD_ARMOR_EDGE: Cloud Armor edge security policies can be configured to filter incoming HTTP requests targeting backend services (including Cloud CDN-enabled) as well as backend buckets (Cloud Storage). They filter requests before the request is served from Google's cache. - CLOUD_ARMOR_INTERNAL_SERVICE: Cloud Armor internal service policies can be configured to filter HTTP requests targeting services managed by Traffic Director in a service mesh. They filter requests before the request is served from the application. This field can be set only at resource creation time.
     * Check the Type enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string type = 3575610;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

