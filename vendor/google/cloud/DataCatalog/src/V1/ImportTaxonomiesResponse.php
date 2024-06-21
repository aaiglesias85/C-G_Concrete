<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/policytagmanagerserialization.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [ImportTaxonomies][google.cloud.datacatalog.v1.PolicyTagManagerSerialization.ImportTaxonomies].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ImportTaxonomiesResponse</code>
 */
class ImportTaxonomiesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Imported taxonomies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy taxonomies = 1;</code>
     */
    private $taxonomies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataCatalog\V1\Taxonomy[]|\Google\Protobuf\Internal\RepeatedField $taxonomies
     *           Imported taxonomies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Policytagmanagerserialization::initOnce();
        parent::__construct($data);
    }

    /**
     * Imported taxonomies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy taxonomies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaxonomies()
    {
        return $this->taxonomies;
    }

    /**
     * Imported taxonomies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.v1.Taxonomy taxonomies = 1;</code>
     * @param \Google\Cloud\DataCatalog\V1\Taxonomy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaxonomies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1\Taxonomy::class);
        $this->taxonomies = $arr;

        return $this;
    }

}

