<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Opaque filter criteria used by load balancers to restrict routing configuration to a limited set of load balancing proxies. Proxies and sidecars involved in load balancing would typically present metadata to the load balancers that need to match criteria specified here. If a match takes place, the relevant configuration is made available to those proxies. For each metadataFilter in this list, if its filterMatchCriteria is set to MATCH_ANY, at least one of the filterLabels must match the corresponding label provided in the metadata. If its filterMatchCriteria is set to MATCH_ALL, then all of its filterLabels must match with corresponding labels provided in the metadata. An example for using metadataFilters would be: if load balancing involves Envoys, they receive routing configuration when values in metadataFilters match values supplied in of their XDS requests to loadbalancers.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.MetadataFilter</code>
 */
class MetadataFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of label value pairs that must match labels in the provided metadata based on filterMatchCriteria This list must not be empty and can have at the most 64 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilterLabelMatch filter_labels = 307903142;</code>
     */
    private $filter_labels;
    /**
     * Specifies how individual filter label matches within the list of filterLabels and contributes toward the overall metadataFilter match. Supported values are: - MATCH_ANY: at least one of the filterLabels must have a matching label in the provided metadata. - MATCH_ALL: all filterLabels must have matching labels in the provided metadata.
     * Check the FilterMatchCriteria enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string filter_match_criteria = 239970368;</code>
     */
    private $filter_match_criteria = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\MetadataFilterLabelMatch[]|\Google\Protobuf\Internal\RepeatedField $filter_labels
     *           The list of label value pairs that must match labels in the provided metadata based on filterMatchCriteria This list must not be empty and can have at the most 64 entries.
     *     @type string $filter_match_criteria
     *           Specifies how individual filter label matches within the list of filterLabels and contributes toward the overall metadataFilter match. Supported values are: - MATCH_ANY: at least one of the filterLabels must have a matching label in the provided metadata. - MATCH_ALL: all filterLabels must have matching labels in the provided metadata.
     *           Check the FilterMatchCriteria enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of label value pairs that must match labels in the provided metadata based on filterMatchCriteria This list must not be empty and can have at the most 64 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilterLabelMatch filter_labels = 307903142;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilterLabels()
    {
        return $this->filter_labels;
    }

    /**
     * The list of label value pairs that must match labels in the provided metadata based on filterMatchCriteria This list must not be empty and can have at the most 64 entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.MetadataFilterLabelMatch filter_labels = 307903142;</code>
     * @param \Google\Cloud\Compute\V1\MetadataFilterLabelMatch[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilterLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\MetadataFilterLabelMatch::class);
        $this->filter_labels = $arr;

        return $this;
    }

    /**
     * Specifies how individual filter label matches within the list of filterLabels and contributes toward the overall metadataFilter match. Supported values are: - MATCH_ANY: at least one of the filterLabels must have a matching label in the provided metadata. - MATCH_ALL: all filterLabels must have matching labels in the provided metadata.
     * Check the FilterMatchCriteria enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string filter_match_criteria = 239970368;</code>
     * @return string
     */
    public function getFilterMatchCriteria()
    {
        return isset($this->filter_match_criteria) ? $this->filter_match_criteria : '';
    }

    public function hasFilterMatchCriteria()
    {
        return isset($this->filter_match_criteria);
    }

    public function clearFilterMatchCriteria()
    {
        unset($this->filter_match_criteria);
    }

    /**
     * Specifies how individual filter label matches within the list of filterLabels and contributes toward the overall metadataFilter match. Supported values are: - MATCH_ANY: at least one of the filterLabels must have a matching label in the provided metadata. - MATCH_ALL: all filterLabels must have matching labels in the provided metadata.
     * Check the FilterMatchCriteria enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string filter_match_criteria = 239970368;</code>
     * @param string $var
     * @return $this
     */
    public function setFilterMatchCriteria($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter_match_criteria = $var;

        return $this;
    }

}

