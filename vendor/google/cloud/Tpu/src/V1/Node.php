<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tpu/v1/cloud_tpu.proto

namespace Google\Cloud\Tpu\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TPU instance.
 *
 * Generated from protobuf message <code>google.cloud.tpu.v1.Node</code>
 */
class Node extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Immutable. The name of the TPU
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The user-supplied description of the TPU. Maximum of 512 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Required. The type of hardware accelerators associated with this node.
     *
     * Generated from protobuf field <code>string accelerator_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $accelerator_type = '';
    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network address for the TPU Node as visible to Compute Engine
     * instances.
     *
     * Generated from protobuf field <code>string ip_address = 8 [deprecated = true];</code>
     * @deprecated
     */
    protected $ip_address = '';
    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network port for the TPU Node as visible to Compute Engine instances.
     *
     * Generated from protobuf field <code>string port = 14 [deprecated = true];</code>
     * @deprecated
     */
    protected $port = '';
    /**
     * Output only. The current state for the TPU Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. If this field is populated, it contains a description of why the TPU Node
     * is unhealthy.
     *
     * Generated from protobuf field <code>string health_description = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $health_description = '';
    /**
     * Required. The version of Tensorflow running in the Node.
     *
     * Generated from protobuf field <code>string tensorflow_version = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tensorflow_version = '';
    /**
     * The name of a network they wish to peer the TPU node to. It must be a
     * preexisting Compute Engine network inside of the project on which this API
     * has been activated. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 12;</code>
     */
    private $network = '';
    /**
     * The CIDR block that the TPU node will use when selecting an IP address.
     * This CIDR block must be a /29 block; the Compute Engine networks API
     * forbids a smaller block, and using a larger block would be wasteful (a
     * node can only consume one IP address). Errors will occur if the CIDR block
     * has already been used for a currently existing TPU node, the CIDR block
     * conflicts with any subnetworks in the user's provided network, or the
     * provided network is peered with another network that is using that CIDR
     * block.
     *
     * Generated from protobuf field <code>string cidr_block = 13;</code>
     */
    private $cidr_block = '';
    /**
     * Output only. The service account used to run the tensor flow services within the node.
     * To share resources, including Google Cloud Storage data, with the
     * Tensorflow job running in the Node, this account must have permissions to
     * that data.
     *
     * Generated from protobuf field <code>string service_account = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_account = '';
    /**
     * Output only. The time when the node was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * The scheduling options for this node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.SchedulingConfig scheduling_config = 17;</code>
     */
    private $scheduling_config = null;
    /**
     * Output only. The network endpoints where TPU workers can be accessed and
     * sent work. It is recommended that Tensorflow clients of the node reach out
     * to the 0th entry in this map first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.NetworkEndpoint network_endpoints = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $network_endpoints;
    /**
     * The health status of the TPU node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.Health health = 22;</code>
     */
    private $health = 0;
    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 24;</code>
     */
    private $labels;
    /**
     * Whether the VPC peering for the node is set up through Service Networking
     * API. The VPC Peering should be set up before provisioning the node.
     * If this field is set, cidr_block field should not be specified. If the
     * network, that you want to peer the TPU Node to, is Shared VPC networks,
     * the node must be created with this this field enabled.
     *
     * Generated from protobuf field <code>bool use_service_networking = 27;</code>
     */
    private $use_service_networking = false;
    /**
     * Output only. The API version that created this Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.ApiVersion api_version = 38 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $api_version = 0;
    /**
     * Output only. The Symptoms that have occurred to the TPU Node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.Symptom symptoms = 39 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $symptoms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Immutable. The name of the TPU
     *     @type string $description
     *           The user-supplied description of the TPU. Maximum of 512 characters.
     *     @type string $accelerator_type
     *           Required. The type of hardware accelerators associated with this node.
     *     @type string $ip_address
     *           Output only. DEPRECATED! Use network_endpoints instead.
     *           The network address for the TPU Node as visible to Compute Engine
     *           instances.
     *     @type string $port
     *           Output only. DEPRECATED! Use network_endpoints instead.
     *           The network port for the TPU Node as visible to Compute Engine instances.
     *     @type int $state
     *           Output only. The current state for the TPU Node.
     *     @type string $health_description
     *           Output only. If this field is populated, it contains a description of why the TPU Node
     *           is unhealthy.
     *     @type string $tensorflow_version
     *           Required. The version of Tensorflow running in the Node.
     *     @type string $network
     *           The name of a network they wish to peer the TPU node to. It must be a
     *           preexisting Compute Engine network inside of the project on which this API
     *           has been activated. If none is provided, "default" will be used.
     *     @type string $cidr_block
     *           The CIDR block that the TPU node will use when selecting an IP address.
     *           This CIDR block must be a /29 block; the Compute Engine networks API
     *           forbids a smaller block, and using a larger block would be wasteful (a
     *           node can only consume one IP address). Errors will occur if the CIDR block
     *           has already been used for a currently existing TPU node, the CIDR block
     *           conflicts with any subnetworks in the user's provided network, or the
     *           provided network is peered with another network that is using that CIDR
     *           block.
     *     @type string $service_account
     *           Output only. The service account used to run the tensor flow services within the node.
     *           To share resources, including Google Cloud Storage data, with the
     *           Tensorflow job running in the Node, this account must have permissions to
     *           that data.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the node was created.
     *     @type \Google\Cloud\Tpu\V1\SchedulingConfig $scheduling_config
     *           The scheduling options for this node.
     *     @type \Google\Cloud\Tpu\V1\NetworkEndpoint[]|\Google\Protobuf\Internal\RepeatedField $network_endpoints
     *           Output only. The network endpoints where TPU workers can be accessed and
     *           sent work. It is recommended that Tensorflow clients of the node reach out
     *           to the 0th entry in this map first.
     *     @type int $health
     *           The health status of the TPU node.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Resource labels to represent user-provided metadata.
     *     @type bool $use_service_networking
     *           Whether the VPC peering for the node is set up through Service Networking
     *           API. The VPC Peering should be set up before provisioning the node.
     *           If this field is set, cidr_block field should not be specified. If the
     *           network, that you want to peer the TPU Node to, is Shared VPC networks,
     *           the node must be created with this this field enabled.
     *     @type int $api_version
     *           Output only. The API version that created this Node.
     *     @type \Google\Cloud\Tpu\V1\Symptom[]|\Google\Protobuf\Internal\RepeatedField $symptoms
     *           Output only. The Symptoms that have occurred to the TPU Node.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tpu\V1\CloudTpu::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Immutable. The name of the TPU
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Immutable. The name of the TPU
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The user-supplied description of the TPU. Maximum of 512 characters.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The user-supplied description of the TPU. Maximum of 512 characters.
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

    /**
     * Required. The type of hardware accelerators associated with this node.
     *
     * Generated from protobuf field <code>string accelerator_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAcceleratorType()
    {
        return $this->accelerator_type;
    }

    /**
     * Required. The type of hardware accelerators associated with this node.
     *
     * Generated from protobuf field <code>string accelerator_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAcceleratorType($var)
    {
        GPBUtil::checkString($var, True);
        $this->accelerator_type = $var;

        return $this;
    }

    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network address for the TPU Node as visible to Compute Engine
     * instances.
     *
     * Generated from protobuf field <code>string ip_address = 8 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getIpAddress()
    {
        @trigger_error('ip_address is deprecated.', E_USER_DEPRECATED);
        return $this->ip_address;
    }

    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network address for the TPU Node as visible to Compute Engine
     * instances.
     *
     * Generated from protobuf field <code>string ip_address = 8 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setIpAddress($var)
    {
        @trigger_error('ip_address is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network port for the TPU Node as visible to Compute Engine instances.
     *
     * Generated from protobuf field <code>string port = 14 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getPort()
    {
        @trigger_error('port is deprecated.', E_USER_DEPRECATED);
        return $this->port;
    }

    /**
     * Output only. DEPRECATED! Use network_endpoints instead.
     * The network port for the TPU Node as visible to Compute Engine instances.
     *
     * Generated from protobuf field <code>string port = 14 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setPort($var)
    {
        @trigger_error('port is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->port = $var;

        return $this;
    }

    /**
     * Output only. The current state for the TPU Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state for the TPU Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.State state = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tpu\V1\Node\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. If this field is populated, it contains a description of why the TPU Node
     * is unhealthy.
     *
     * Generated from protobuf field <code>string health_description = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHealthDescription()
    {
        return $this->health_description;
    }

    /**
     * Output only. If this field is populated, it contains a description of why the TPU Node
     * is unhealthy.
     *
     * Generated from protobuf field <code>string health_description = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHealthDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->health_description = $var;

        return $this;
    }

    /**
     * Required. The version of Tensorflow running in the Node.
     *
     * Generated from protobuf field <code>string tensorflow_version = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTensorflowVersion()
    {
        return $this->tensorflow_version;
    }

    /**
     * Required. The version of Tensorflow running in the Node.
     *
     * Generated from protobuf field <code>string tensorflow_version = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTensorflowVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->tensorflow_version = $var;

        return $this;
    }

    /**
     * The name of a network they wish to peer the TPU node to. It must be a
     * preexisting Compute Engine network inside of the project on which this API
     * has been activated. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 12;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The name of a network they wish to peer the TPU node to. It must be a
     * preexisting Compute Engine network inside of the project on which this API
     * has been activated. If none is provided, "default" will be used.
     *
     * Generated from protobuf field <code>string network = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The CIDR block that the TPU node will use when selecting an IP address.
     * This CIDR block must be a /29 block; the Compute Engine networks API
     * forbids a smaller block, and using a larger block would be wasteful (a
     * node can only consume one IP address). Errors will occur if the CIDR block
     * has already been used for a currently existing TPU node, the CIDR block
     * conflicts with any subnetworks in the user's provided network, or the
     * provided network is peered with another network that is using that CIDR
     * block.
     *
     * Generated from protobuf field <code>string cidr_block = 13;</code>
     * @return string
     */
    public function getCidrBlock()
    {
        return $this->cidr_block;
    }

    /**
     * The CIDR block that the TPU node will use when selecting an IP address.
     * This CIDR block must be a /29 block; the Compute Engine networks API
     * forbids a smaller block, and using a larger block would be wasteful (a
     * node can only consume one IP address). Errors will occur if the CIDR block
     * has already been used for a currently existing TPU node, the CIDR block
     * conflicts with any subnetworks in the user's provided network, or the
     * provided network is peered with another network that is using that CIDR
     * block.
     *
     * Generated from protobuf field <code>string cidr_block = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setCidrBlock($var)
    {
        GPBUtil::checkString($var, True);
        $this->cidr_block = $var;

        return $this;
    }

    /**
     * Output only. The service account used to run the tensor flow services within the node.
     * To share resources, including Google Cloud Storage data, with the
     * Tensorflow job running in the Node, this account must have permissions to
     * that data.
     *
     * Generated from protobuf field <code>string service_account = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Output only. The service account used to run the tensor flow services within the node.
     * To share resources, including Google Cloud Storage data, with the
     * Tensorflow job running in the Node, this account must have permissions to
     * that data.
     *
     * Generated from protobuf field <code>string service_account = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Output only. The time when the node was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the node was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The scheduling options for this node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.SchedulingConfig scheduling_config = 17;</code>
     * @return \Google\Cloud\Tpu\V1\SchedulingConfig|null
     */
    public function getSchedulingConfig()
    {
        return $this->scheduling_config;
    }

    public function hasSchedulingConfig()
    {
        return isset($this->scheduling_config);
    }

    public function clearSchedulingConfig()
    {
        unset($this->scheduling_config);
    }

    /**
     * The scheduling options for this node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.SchedulingConfig scheduling_config = 17;</code>
     * @param \Google\Cloud\Tpu\V1\SchedulingConfig $var
     * @return $this
     */
    public function setSchedulingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tpu\V1\SchedulingConfig::class);
        $this->scheduling_config = $var;

        return $this;
    }

    /**
     * Output only. The network endpoints where TPU workers can be accessed and
     * sent work. It is recommended that Tensorflow clients of the node reach out
     * to the 0th entry in this map first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.NetworkEndpoint network_endpoints = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkEndpoints()
    {
        return $this->network_endpoints;
    }

    /**
     * Output only. The network endpoints where TPU workers can be accessed and
     * sent work. It is recommended that Tensorflow clients of the node reach out
     * to the 0th entry in this map first.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.NetworkEndpoint network_endpoints = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Tpu\V1\NetworkEndpoint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tpu\V1\NetworkEndpoint::class);
        $this->network_endpoints = $arr;

        return $this;
    }

    /**
     * The health status of the TPU node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.Health health = 22;</code>
     * @return int
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * The health status of the TPU node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.Health health = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setHealth($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tpu\V1\Node\Health::class);
        $this->health = $var;

        return $this;
    }

    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 24;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Resource labels to represent user-provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 24;</code>
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
     * Whether the VPC peering for the node is set up through Service Networking
     * API. The VPC Peering should be set up before provisioning the node.
     * If this field is set, cidr_block field should not be specified. If the
     * network, that you want to peer the TPU Node to, is Shared VPC networks,
     * the node must be created with this this field enabled.
     *
     * Generated from protobuf field <code>bool use_service_networking = 27;</code>
     * @return bool
     */
    public function getUseServiceNetworking()
    {
        return $this->use_service_networking;
    }

    /**
     * Whether the VPC peering for the node is set up through Service Networking
     * API. The VPC Peering should be set up before provisioning the node.
     * If this field is set, cidr_block field should not be specified. If the
     * network, that you want to peer the TPU Node to, is Shared VPC networks,
     * the node must be created with this this field enabled.
     *
     * Generated from protobuf field <code>bool use_service_networking = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseServiceNetworking($var)
    {
        GPBUtil::checkBool($var);
        $this->use_service_networking = $var;

        return $this;
    }

    /**
     * Output only. The API version that created this Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.ApiVersion api_version = 38 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    /**
     * Output only. The API version that created this Node.
     *
     * Generated from protobuf field <code>.google.cloud.tpu.v1.Node.ApiVersion api_version = 38 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tpu\V1\Node\ApiVersion::class);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Output only. The Symptoms that have occurred to the TPU Node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.Symptom symptoms = 39 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }

    /**
     * Output only. The Symptoms that have occurred to the TPU Node.
     *
     * Generated from protobuf field <code>repeated .google.cloud.tpu.v1.Symptom symptoms = 39 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Tpu\V1\Symptom[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSymptoms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tpu\V1\Symptom::class);
        $this->symptoms = $arr;

        return $this;
    }

}

