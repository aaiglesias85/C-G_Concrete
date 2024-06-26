<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateTaxonomy][google.cloud.datacatalog.v1.PolicyTagManager.CreateTaxonomy].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.CreateTaxonomyRequest</code>
 */
class CreateTaxonomyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the project that the taxonomy will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The taxonomy to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 2;</code>
     */
    private $taxonomy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the project that the taxonomy will belong to.
     *     @type \Google\Cloud\DataCatalog\V1\Taxonomy $taxonomy
     *           The taxonomy to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the project that the taxonomy will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the project that the taxonomy will belong to.
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

    /**
     * The taxonomy to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 2;</code>
     * @return \Google\Cloud\DataCatalog\V1\Taxonomy|null
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    public function hasTaxonomy()
    {
        return isset($this->taxonomy);
    }

    public function clearTaxonomy()
    {
        unset($this->taxonomy);
    }

    /**
     * The taxonomy to create.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 2;</code>
     * @param \Google\Cloud\DataCatalog\V1\Taxonomy $var
     * @return $this
     */
    public function setTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\Taxonomy::class);
        $this->taxonomy = $var;

        return $this;
    }

}

