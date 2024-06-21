<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A nested protocol buffer that represents a taxonomy and the hierarchy of its
 * policy tags. Used for taxonomy replacement, import, and
 * export.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SerializedTaxonomy</code>
 */
class SerializedTaxonomy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Display name of the taxonomy. At most 200 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Description of the serialized taxonomy. At most 2000 bytes when
     * encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Top level policy tags associated with the taxonomy, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SerializedPolicyTag policy_tags = 3;</code>
     */
    private $policy_tags;
    /**
     * A list of policy types that are activated per taxonomy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 4;</code>
     */
    private $activated_policy_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Required. Display name of the taxonomy. At most 200 bytes when encoded in UTF-8.
     *     @type string $description
     *           Description of the serialized taxonomy. At most 2000 bytes when
     *           encoded in UTF-8. If not set, defaults to an empty description.
     *     @type \Google\Cloud\DataCatalog\V1\SerializedPolicyTag[]|\Google\Protobuf\Internal\RepeatedField $policy_tags
     *           Top level policy tags associated with the taxonomy, if any.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $activated_policy_types
     *           A list of policy types that are activated per taxonomy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanagerserialization::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Display name of the taxonomy. At most 200 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Display name of the taxonomy. At most 200 bytes when encoded in UTF-8.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Description of the serialized taxonomy. At most 2000 bytes when
     * encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the serialized taxonomy. At most 2000 bytes when
     * encoded in UTF-8. If not set, defaults to an empty description.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * Top level policy tags associated with the taxonomy, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SerializedPolicyTag policy_tags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyTags()
    {
        return $this->policy_tags;
    }

    /**
     * Top level policy tags associated with the taxonomy, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.SerializedPolicyTag policy_tags = 3;</code>
     * @param \Google\Cloud\DataCatalog\V1\SerializedPolicyTag[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\SerializedPolicyTag::class);
        $this->policy_tags = $arr;

        return $this;
    }

    /**
     * A list of policy types that are activated per taxonomy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActivatedPolicyTypes()
    {
        return $this->activated_policy_types;
    }

    /**
     * A list of policy types that are activated per taxonomy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy.PolicyType activated_policy_types = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActivatedPolicyTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\DataCatalog\V1\Taxonomy\PolicyType::class);
        $this->activated_policy_types = $arr;

        return $this;
    }

}

