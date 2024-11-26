<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/resource.proto

namespace Google\Cloud\ManagedIdentities\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a managed Microsoft Active Directory domain.
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1.Domain</code>
 */
class Domain extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique name of the domain using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. Resource labels that can contain user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. The full names of the Google Compute Engine
     * [networks](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) the domain
     * instance is connected to. Networks can be added using UpdateDomain.
     * The domain is only available on networks listed in `authorized_networks`.
     * If CIDR subnets overlap between networks, domain creation will fail.
     *
     * Generated from protobuf field <code>repeated string authorized_networks = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $authorized_networks;
    /**
     * Required. The CIDR range of internal addresses that are reserved for this
     * domain. Reserved networks must be /24 or larger. Ranges must be
     * unique and non-overlapping with existing subnets in
     * [Domain].[authorized_networks].
     *
     * Generated from protobuf field <code>string reserved_ip_range = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $reserved_ip_range = '';
    /**
     * Required. Locations where domain needs to be provisioned.
     * [regions][compute/docs/regions-zones/]
     * e.g. us-west1 or us-east4
     * Service supports up to 4 locations at once. Each location will use a /26
     * block.
     *
     * Generated from protobuf field <code>repeated string locations = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $locations;
    /**
     * Optional. The name of delegated administrator account used to perform
     * Active Directory operations. If not specified, `setupadmin` will be used.
     *
     * Generated from protobuf field <code>string admin = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $admin = '';
    /**
     * Output only. The fully-qualified domain name of the exposed domain used by
     * clients to connect to the service. Similar to what would be chosen for an
     * Active Directory set up on an internal network.
     *
     * Generated from protobuf field <code>string fqdn = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $fqdn = '';
    /**
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The current state of this domain.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Additional information about the current status of this
     * domain, if available.
     *
     * Generated from protobuf field <code>string status_message = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status_message = '';
    /**
     * Output only. The current trusts associated with the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1.Trust trusts = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $trusts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique name of the domain using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels that can contain user-provided metadata.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $authorized_networks
     *           Optional. The full names of the Google Compute Engine
     *           [networks](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) the domain
     *           instance is connected to. Networks can be added using UpdateDomain.
     *           The domain is only available on networks listed in `authorized_networks`.
     *           If CIDR subnets overlap between networks, domain creation will fail.
     *     @type string $reserved_ip_range
     *           Required. The CIDR range of internal addresses that are reserved for this
     *           domain. Reserved networks must be /24 or larger. Ranges must be
     *           unique and non-overlapping with existing subnets in
     *           [Domain].[authorized_networks].
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $locations
     *           Required. Locations where domain needs to be provisioned.
     *           [regions][compute/docs/regions-zones/]
     *           e.g. us-west1 or us-east4
     *           Service supports up to 4 locations at once. Each location will use a /26
     *           block.
     *     @type string $admin
     *           Optional. The name of delegated administrator account used to perform
     *           Active Directory operations. If not specified, `setupadmin` will be used.
     *     @type string $fqdn
     *           Output only. The fully-qualified domain name of the exposed domain used by
     *           clients to connect to the service. Similar to what would be chosen for an
     *           Active Directory set up on an internal network.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update time.
     *     @type int $state
     *           Output only. The current state of this domain.
     *     @type string $status_message
     *           Output only. Additional information about the current status of this
     *           domain, if available.
     *     @type \Google\Cloud\ManagedIdentities\V1\Trust[]|\Google\Protobuf\Internal\RepeatedField $trusts
     *           Output only. The current trusts associated with the domain.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique name of the domain using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique name of the domain using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Resource labels that can contain user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels that can contain user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The full names of the Google Compute Engine
     * [networks](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) the domain
     * instance is connected to. Networks can be added using UpdateDomain.
     * The domain is only available on networks listed in `authorized_networks`.
     * If CIDR subnets overlap between networks, domain creation will fail.
     *
     * Generated from protobuf field <code>repeated string authorized_networks = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizedNetworks()
    {
        return $this->authorized_networks;
    }

    /**
     * Optional. The full names of the Google Compute Engine
     * [networks](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) the domain
     * instance is connected to. Networks can be added using UpdateDomain.
     * The domain is only available on networks listed in `authorized_networks`.
     * If CIDR subnets overlap between networks, domain creation will fail.
     *
     * Generated from protobuf field <code>repeated string authorized_networks = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizedNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->authorized_networks = $arr;

        return $this;
    }

    /**
     * Required. The CIDR range of internal addresses that are reserved for this
     * domain. Reserved networks must be /24 or larger. Ranges must be
     * unique and non-overlapping with existing subnets in
     * [Domain].[authorized_networks].
     *
     * Generated from protobuf field <code>string reserved_ip_range = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getReservedIpRange()
    {
        return $this->reserved_ip_range;
    }

    /**
     * Required. The CIDR range of internal addresses that are reserved for this
     * domain. Reserved networks must be /24 or larger. Ranges must be
     * unique and non-overlapping with existing subnets in
     * [Domain].[authorized_networks].
     *
     * Generated from protobuf field <code>string reserved_ip_range = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setReservedIpRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->reserved_ip_range = $var;

        return $this;
    }

    /**
     * Required. Locations where domain needs to be provisioned.
     * [regions][compute/docs/regions-zones/]
     * e.g. us-west1 or us-east4
     * Service supports up to 4 locations at once. Each location will use a /26
     * block.
     *
     * Generated from protobuf field <code>repeated string locations = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Required. Locations where domain needs to be provisioned.
     * [regions][compute/docs/regions-zones/]
     * e.g. us-west1 or us-east4
     * Service supports up to 4 locations at once. Each location will use a /26
     * block.
     *
     * Generated from protobuf field <code>repeated string locations = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->locations = $arr;

        return $this;
    }

    /**
     * Optional. The name of delegated administrator account used to perform
     * Active Directory operations. If not specified, `setupadmin` will be used.
     *
     * Generated from protobuf field <code>string admin = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Optional. The name of delegated administrator account used to perform
     * Active Directory operations. If not specified, `setupadmin` will be used.
     *
     * Generated from protobuf field <code>string admin = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAdmin($var)
    {
        GPBUtil::checkString($var, True);
        $this->admin = $var;

        return $this;
    }

    /**
     * Output only. The fully-qualified domain name of the exposed domain used by
     * clients to connect to the service. Similar to what would be chosen for an
     * Active Directory set up on an internal network.
     *
     * Generated from protobuf field <code>string fqdn = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFqdn()
    {
        return $this->fqdn;
    }

    /**
     * Output only. The fully-qualified domain name of the exposed domain used by
     * clients to connect to the service. Similar to what would be chosen for an
     * Active Directory set up on an internal network.
     *
     * Generated from protobuf field <code>string fqdn = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFqdn($var)
    {
        GPBUtil::checkString($var, True);
        $this->fqdn = $var;

        return $this;
    }

    /**
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The last update time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of this domain.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of this domain.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Domain.State state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ManagedIdentities\V1\Domain\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the current status of this
     * domain, if available.
     *
     * Generated from protobuf field <code>string status_message = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->status_message;
    }

    /**
     * Output only. Additional information about the current status of this
     * domain, if available.
     *
     * Generated from protobuf field <code>string status_message = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStatusMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_message = $var;

        return $this;
    }

    /**
     * Output only. The current trusts associated with the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1.Trust trusts = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrusts()
    {
        return $this->trusts;
    }

    /**
     * Output only. The current trusts associated with the domain.
     *
     * Generated from protobuf field <code>repeated .google.cloud.managedidentities.v1.Trust trusts = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ManagedIdentities\V1\Trust[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrusts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ManagedIdentities\V1\Trust::class);
        $this->trusts = $arr;

        return $this;
    }

}

