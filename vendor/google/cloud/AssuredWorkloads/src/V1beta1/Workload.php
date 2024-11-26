<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads_v1beta1.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Workload object for managing highly regulated workloads of cloud
 * customers.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.Workload</code>
 */
class Workload extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The resource name of the workload.
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}
     * Read-only.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $name = '';
    /**
     * Required. The user-assigned display name of the Workload.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, and spaces.
     * Example: My Workload
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Output only. The resources associated with this workload.
     * These resources will be created when creating the workload.
     * If any of the projects already exist, the workload creation will fail.
     * Always read only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $resources;
    /**
     * Required. Immutable. Compliance Regime associated with this workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ComplianceRegime compliance_regime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $compliance_regime = 0;
    /**
     * Output only. Immutable. The Workload creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $create_time = null;
    /**
     * Input only. The billing account used for the resources which are
     * direct children of workload. This billing account is initially associated
     * with the resources created as part of Workload creation.
     * After the initial creation of these resources, the customer can change
     * the assigned billing account.
     * The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string billing_account = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $billing_account = '';
    /**
     * Optional. ETag of the workload, it is calculated on the basis
     * of the Workload contents. It will be used in Update & Delete operations.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';
    /**
     * Optional. Labels applied to the workload.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Input only. The parent resource for the resources managed by this Assured
     * Workload. May be either empty or a folder resource which is a child of the
     * Workload parent. If not specified all resources are created under the
     * parent organization.
     * Format:
     * folders/{folder_id}
     *
     * Generated from protobuf field <code>string provisioned_resources_parent = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $provisioned_resources_parent = '';
    /**
     * Input only. Settings used to create a CMEK crypto key. When set a project
     * with a KMS CMEK key is provisioned. This field is mandatory for a subset of
     * Compliance Regimes.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 14 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $kms_settings = null;
    /**
     * Input only. Resource properties that are used to customize workload
     * resources. These properties (such as custom project id) will be used to
     * create workload resources if possible. This field is optional.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettings resource_settings = 15 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $resource_settings;
    /**
     * Output only. Represents the KAJ enrollment state of the given workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KajEnrollmentState kaj_enrollment_state = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $kaj_enrollment_state = 0;
    /**
     * Optional. Indicates the sovereignty status of the given workload.
     * Currently meant to be used by Europe/Canada customers.
     *
     * Generated from protobuf field <code>bool enable_sovereign_controls = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enable_sovereign_controls = false;
    /**
     * Output only. Represents the SAA enrollment response of the given workload.
     * SAA enrollment response is queried during GetWorkload call.
     * In failure cases, user friendly error message is shown in SAA details page.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse saa_enrollment_response = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $saa_enrollment_response = null;
    protected $compliance_regime_settings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Optional. The resource name of the workload.
     *           Format:
     *           organizations/{organization}/locations/{location}/workloads/{workload}
     *           Read-only.
     *     @type string $display_name
     *           Required. The user-assigned display name of the Workload.
     *           When present it must be between 4 to 30 characters.
     *           Allowed characters are: lowercase and uppercase letters, numbers,
     *           hyphen, and spaces.
     *           Example: My Workload
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceInfo[]|\Google\Protobuf\Internal\RepeatedField $resources
     *           Output only. The resources associated with this workload.
     *           These resources will be created when creating the workload.
     *           If any of the projects already exist, the workload creation will fail.
     *           Always read only.
     *     @type int $compliance_regime
     *           Required. Immutable. Compliance Regime associated with this workload.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Immutable. The Workload creation timestamp.
     *     @type string $billing_account
     *           Input only. The billing account used for the resources which are
     *           direct children of workload. This billing account is initially associated
     *           with the resources created as part of Workload creation.
     *           After the initial creation of these resources, the customer can change
     *           the assigned billing account.
     *           The resource name has the form
     *           `billingAccounts/{billing_account_id}`. For example,
     *           `billingAccounts/012345-567890-ABCDEF`.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\IL4Settings $il4_settings
     *           Required. Input only. Immutable. Settings specific to resources needed
     *           for IL4.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\CJISSettings $cjis_settings
     *           Required. Input only. Immutable. Settings specific to resources needed
     *           for CJIS.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampHighSettings $fedramp_high_settings
     *           Required. Input only. Immutable. Settings specific to resources needed
     *           for FedRAMP High.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampModerateSettings $fedramp_moderate_settings
     *           Required. Input only. Immutable. Settings specific to resources needed
     *           for FedRAMP Moderate.
     *     @type string $etag
     *           Optional. ETag of the workload, it is calculated on the basis
     *           of the Workload contents. It will be used in Update & Delete operations.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels applied to the workload.
     *     @type string $provisioned_resources_parent
     *           Input only. The parent resource for the resources managed by this Assured
     *           Workload. May be either empty or a folder resource which is a child of the
     *           Workload parent. If not specified all resources are created under the
     *           parent organization.
     *           Format:
     *           folders/{folder_id}
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $kms_settings
     *           Input only. Settings used to create a CMEK crypto key. When set a project
     *           with a KMS CMEK key is provisioned. This field is mandatory for a subset of
     *           Compliance Regimes.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceSettings[]|\Google\Protobuf\Internal\RepeatedField $resource_settings
     *           Input only. Resource properties that are used to customize workload
     *           resources. These properties (such as custom project id) will be used to
     *           create workload resources if possible. This field is optional.
     *     @type int $kaj_enrollment_state
     *           Output only. Represents the KAJ enrollment state of the given workload.
     *     @type bool $enable_sovereign_controls
     *           Optional. Indicates the sovereignty status of the given workload.
     *           Currently meant to be used by Europe/Canada customers.
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\SaaEnrollmentResponse $saa_enrollment_response
     *           Output only. Represents the SAA enrollment response of the given workload.
     *           SAA enrollment response is queried during GetWorkload call.
     *           In failure cases, user friendly error message is shown in SAA details page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\AssuredworkloadsV1Beta1::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The resource name of the workload.
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}
     * Read-only.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional. The resource name of the workload.
     * Format:
     * organizations/{organization}/locations/{location}/workloads/{workload}
     * Read-only.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Required. The user-assigned display name of the Workload.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, and spaces.
     * Example: My Workload
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The user-assigned display name of the Workload.
     * When present it must be between 4 to 30 characters.
     * Allowed characters are: lowercase and uppercase letters, numbers,
     * hyphen, and spaces.
     * Example: My Workload
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The resources associated with this workload.
     * These resources will be created when creating the workload.
     * If any of the projects already exist, the workload creation will fail.
     * Always read only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Output only. The resources associated with this workload.
     * These resources will be created when creating the workload.
     * If any of the projects already exist, the workload creation will fail.
     * Always read only.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceInfo resources = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceInfo::class);
        $this->resources = $arr;

        return $this;
    }

    /**
     * Required. Immutable. Compliance Regime associated with this workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ComplianceRegime compliance_regime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getComplianceRegime()
    {
        return $this->compliance_regime;
    }

    /**
     * Required. Immutable. Compliance Regime associated with this workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.ComplianceRegime compliance_regime = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setComplianceRegime($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ComplianceRegime::class);
        $this->compliance_regime = $var;

        return $this;
    }

    /**
     * Output only. Immutable. The Workload creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Immutable. The Workload creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Input only. The billing account used for the resources which are
     * direct children of workload. This billing account is initially associated
     * with the resources created as part of Workload creation.
     * After the initial creation of these resources, the customer can change
     * the assigned billing account.
     * The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string billing_account = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getBillingAccount()
    {
        return $this->billing_account;
    }

    /**
     * Input only. The billing account used for the resources which are
     * direct children of workload. This billing account is initially associated
     * with the resources created as part of Workload creation.
     * After the initial creation of these resources, the customer can change
     * the assigned billing account.
     * The resource name has the form
     * `billingAccounts/{billing_account_id}`. For example,
     * `billingAccounts/012345-567890-ABCDEF`.
     *
     * Generated from protobuf field <code>string billing_account = 6 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setBillingAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->billing_account = $var;

        return $this;
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for IL4.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.IL4Settings il4_settings = 7 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\IL4Settings|null
     * @deprecated
     */
    public function getIl4Settings()
    {
        @trigger_error('il4_settings is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(7);
    }

    public function hasIl4Settings()
    {
        @trigger_error('il4_settings is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(7);
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for IL4.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.IL4Settings il4_settings = 7 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\IL4Settings $var
     * @return $this
     * @deprecated
     */
    public function setIl4Settings($var)
    {
        @trigger_error('il4_settings is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\IL4Settings::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for CJIS.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.CJISSettings cjis_settings = 8 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\CJISSettings|null
     * @deprecated
     */
    public function getCjisSettings()
    {
        @trigger_error('cjis_settings is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(8);
    }

    public function hasCjisSettings()
    {
        @trigger_error('cjis_settings is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(8);
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for CJIS.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.CJISSettings cjis_settings = 8 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\CJISSettings $var
     * @return $this
     * @deprecated
     */
    public function setCjisSettings($var)
    {
        @trigger_error('cjis_settings is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\CJISSettings::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for FedRAMP High.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.FedrampHighSettings fedramp_high_settings = 11 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampHighSettings|null
     * @deprecated
     */
    public function getFedrampHighSettings()
    {
        @trigger_error('fedramp_high_settings is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(11);
    }

    public function hasFedrampHighSettings()
    {
        @trigger_error('fedramp_high_settings is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(11);
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for FedRAMP High.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.FedrampHighSettings fedramp_high_settings = 11 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampHighSettings $var
     * @return $this
     * @deprecated
     */
    public function setFedrampHighSettings($var)
    {
        @trigger_error('fedramp_high_settings is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampHighSettings::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for FedRAMP Moderate.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.FedrampModerateSettings fedramp_moderate_settings = 12 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampModerateSettings|null
     * @deprecated
     */
    public function getFedrampModerateSettings()
    {
        @trigger_error('fedramp_moderate_settings is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(12);
    }

    public function hasFedrampModerateSettings()
    {
        @trigger_error('fedramp_moderate_settings is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(12);
    }

    /**
     * Required. Input only. Immutable. Settings specific to resources needed
     * for FedRAMP Moderate.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.FedrampModerateSettings fedramp_moderate_settings = 12 [deprecated = true, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampModerateSettings $var
     * @return $this
     * @deprecated
     */
    public function setFedrampModerateSettings($var)
    {
        @trigger_error('fedramp_moderate_settings is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\FedrampModerateSettings::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Optional. ETag of the workload, it is calculated on the basis
     * of the Workload contents. It will be used in Update & Delete operations.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. ETag of the workload, it is calculated on the basis
     * of the Workload contents. It will be used in Update & Delete operations.
     *
     * Generated from protobuf field <code>string etag = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. Labels applied to the workload.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels applied to the workload.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Input only. The parent resource for the resources managed by this Assured
     * Workload. May be either empty or a folder resource which is a child of the
     * Workload parent. If not specified all resources are created under the
     * parent organization.
     * Format:
     * folders/{folder_id}
     *
     * Generated from protobuf field <code>string provisioned_resources_parent = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getProvisionedResourcesParent()
    {
        return $this->provisioned_resources_parent;
    }

    /**
     * Input only. The parent resource for the resources managed by this Assured
     * Workload. May be either empty or a folder resource which is a child of the
     * Workload parent. If not specified all resources are created under the
     * parent organization.
     * Format:
     * folders/{folder_id}
     *
     * Generated from protobuf field <code>string provisioned_resources_parent = 13 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProvisionedResourcesParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->provisioned_resources_parent = $var;

        return $this;
    }

    /**
     * Input only. Settings used to create a CMEK crypto key. When set a project
     * with a KMS CMEK key is provisioned. This field is mandatory for a subset of
     * Compliance Regimes.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 14 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings|null
     */
    public function getKmsSettings()
    {
        return $this->kms_settings;
    }

    public function hasKmsSettings()
    {
        return isset($this->kms_settings);
    }

    public function clearKmsSettings()
    {
        unset($this->kms_settings);
    }

    /**
     * Input only. Settings used to create a CMEK crypto key. When set a project
     * with a KMS CMEK key is provisioned. This field is mandatory for a subset of
     * Compliance Regimes.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 14 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $var
     * @return $this
     */
    public function setKmsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings::class);
        $this->kms_settings = $var;

        return $this;
    }

    /**
     * Input only. Resource properties that are used to customize workload
     * resources. These properties (such as custom project id) will be used to
     * create workload resources if possible. This field is optional.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettings resource_settings = 15 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceSettings()
    {
        return $this->resource_settings;
    }

    /**
     * Input only. Resource properties that are used to customize workload
     * resources. These properties (such as custom project id) will be used to
     * create workload resources if possible. This field is optional.
     *
     * Generated from protobuf field <code>repeated .google.cloud.assuredworkloads.v1beta1.Workload.ResourceSettings resource_settings = 15 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceSettings[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\ResourceSettings::class);
        $this->resource_settings = $arr;

        return $this;
    }

    /**
     * Output only. Represents the KAJ enrollment state of the given workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KajEnrollmentState kaj_enrollment_state = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getKajEnrollmentState()
    {
        return $this->kaj_enrollment_state;
    }

    /**
     * Output only. Represents the KAJ enrollment state of the given workload.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KajEnrollmentState kaj_enrollment_state = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setKajEnrollmentState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KajEnrollmentState::class);
        $this->kaj_enrollment_state = $var;

        return $this;
    }

    /**
     * Optional. Indicates the sovereignty status of the given workload.
     * Currently meant to be used by Europe/Canada customers.
     *
     * Generated from protobuf field <code>bool enable_sovereign_controls = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableSovereignControls()
    {
        return $this->enable_sovereign_controls;
    }

    /**
     * Optional. Indicates the sovereignty status of the given workload.
     * Currently meant to be used by Europe/Canada customers.
     *
     * Generated from protobuf field <code>bool enable_sovereign_controls = 18 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSovereignControls($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_sovereign_controls = $var;

        return $this;
    }

    /**
     * Output only. Represents the SAA enrollment response of the given workload.
     * SAA enrollment response is queried during GetWorkload call.
     * In failure cases, user friendly error message is shown in SAA details page.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse saa_enrollment_response = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\SaaEnrollmentResponse|null
     */
    public function getSaaEnrollmentResponse()
    {
        return $this->saa_enrollment_response;
    }

    public function hasSaaEnrollmentResponse()
    {
        return isset($this->saa_enrollment_response);
    }

    public function clearSaaEnrollmentResponse()
    {
        unset($this->saa_enrollment_response);
    }

    /**
     * Output only. Represents the SAA enrollment response of the given workload.
     * SAA enrollment response is queried during GetWorkload call.
     * In failure cases, user friendly error message is shown in SAA details page.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.SaaEnrollmentResponse saa_enrollment_response = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\SaaEnrollmentResponse $var
     * @return $this
     */
    public function setSaaEnrollmentResponse($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\SaaEnrollmentResponse::class);
        $this->saa_enrollment_response = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getComplianceRegimeSettings()
    {
        return $this->whichOneof("compliance_regime_settings");
    }

}

