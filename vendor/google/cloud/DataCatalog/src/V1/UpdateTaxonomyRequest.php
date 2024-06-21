<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanager.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateTaxonomy][google.cloud.datacatalog.v1.PolicyTagManager.UpdateTaxonomy].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateTaxonomyRequest</code>
 */
class UpdateTaxonomyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The taxonomy to update. You can update only its description, display name,
     * and activated policy types.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
     */
    private $taxonomy = null;
    /**
     * Specifies fields to update. If not set, defaults to all fields you can
     * update.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\Taxonomy $taxonomy
     *           The taxonomy to update. You can update only its description, display name,
     *           and activated policy types.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Specifies fields to update. If not set, defaults to all fields you can
     *           update.
     *           For more information, see [FieldMask]
     *           (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The taxonomy to update. You can update only its description, display name,
     * and activated policy types.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
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
     * The taxonomy to update. You can update only its description, display name,
     * and activated policy types.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.Taxonomy taxonomy = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\Taxonomy $var
     * @return $this
     */
    public function setTaxonomy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\Taxonomy::class);
        $this->taxonomy = $var;

        return $this;
    }

    /**
     * Specifies fields to update. If not set, defaults to all fields you can
     * update.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * Specifies fields to update. If not set, defaults to all fields you can
     * update.
     * For more information, see [FieldMask]
     * (https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask).
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

