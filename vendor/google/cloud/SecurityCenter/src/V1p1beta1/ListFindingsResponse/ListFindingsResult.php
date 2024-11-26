<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result containing the Finding and its StateChange.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult</code>
 */
class ListFindingsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding finding = 1;</code>
     */
    private $finding = null;
    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     */
    private $state_change = 0;
    /**
     * Output only. Resource that is associated with this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.Resource resource = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\Finding $finding
     *           Finding matching the search request.
     *     @type int $state_change
     *           State change of the finding between the points in time.
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse\ListFindingsResult\Resource $resource
     *           Output only. Resource that is associated with this finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding finding = 1;</code>
     * @return \Google\Cloud\SecurityCenter\V1p1beta1\Finding|null
     */
    public function getFinding()
    {
        return $this->finding;
    }

    public function hasFinding()
    {
        return isset($this->finding);
    }

    public function clearFinding()
    {
        unset($this->finding);
    }

    /**
     * Finding matching the search request.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.Finding finding = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\Finding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1p1beta1\Finding::class);
        $this->finding = $var;

        return $this;
    }

    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     * @return int
     */
    public function getStateChange()
    {
        return $this->state_change;
    }

    /**
     * State change of the finding between the points in time.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.StateChange state_change = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStateChange($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse\ListFindingsResult\StateChange::class);
        $this->state_change = $var;

        return $this;
    }

    /**
     * Output only. Resource that is associated with this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.Resource resource = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse\ListFindingsResult\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Output only. Resource that is associated with this finding.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1p1beta1.ListFindingsResponse.ListFindingsResult.Resource resource = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse\ListFindingsResult\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse\ListFindingsResult\Resource::class);
        $this->resource = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListFindingsResult::class, \Google\Cloud\SecurityCenter\V1p1beta1\ListFindingsResponse_ListFindingsResult::class);

