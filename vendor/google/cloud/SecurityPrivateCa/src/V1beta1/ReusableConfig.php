<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] refers to a managed [ReusableConfigValues][google.cloud.security.privateca.v1beta1.ReusableConfigValues]. Those, in
 * turn, are used to describe certain fields of an X.509 certificate, such as
 * the key usage fields, fields specific to CA certificates, certificate policy
 * extensions and custom extensions.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.ReusableConfig</code>
 */
class ReusableConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource path for this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;reusableConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The config values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigValues values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values = null;
    /**
     * Optional. A human-readable description of scenarios these ReusableConfigValues may be
     * compatible with.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource path for this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;reusableConfigs/&#42;`.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigValues $values
     *           Required. The config values.
     *     @type string $description
     *           Optional. A human-readable description of scenarios these ReusableConfigValues may be
     *           compatible with.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Labels with user-defined metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource path for this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;reusableConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource path for this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;reusableConfigs/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. The config values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigValues values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigValues|null
     */
    public function getValues()
    {
        return $this->values;
    }

    public function hasValues()
    {
        return isset($this->values);
    }

    public function clearValues()
    {
        unset($this->values);
    }

    /**
     * Required. The config values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigValues values = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigValues $var
     * @return $this
     */
    public function setValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigValues::class);
        $this->values = $var;

        return $this;
    }

    /**
     * Optional. A human-readable description of scenarios these ReusableConfigValues may be
     * compatible with.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. A human-readable description of scenarios these ReusableConfigValues may be
     * compatible with.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which this [ReusableConfig][google.cloud.security.privateca.v1beta1.ReusableConfig] was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Labels with user-defined metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

