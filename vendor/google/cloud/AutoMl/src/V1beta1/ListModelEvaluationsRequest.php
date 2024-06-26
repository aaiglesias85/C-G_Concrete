<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.ListModelEvaluations][google.cloud.automl.v1beta1.AutoMl.ListModelEvaluations].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ListModelEvaluationsRequest</code>
 */
class ListModelEvaluationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the model to list the model evaluations for.
     * If modelId is set as "-", this will list model evaluations from across all
     * models of the parent location.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * An expression for filtering the results of the request.
     *   * `annotation_spec_id` - for =, !=  or existence. See example below for
     *                          the last.
     * Some examples of using the filter are:
     *   * `annotation_spec_id!=4` --> The model evaluation was done for
     *                             annotation spec with ID different than 4.
     *   * `NOT annotation_spec_id:*` --> The model evaluation was done for
     *                                aggregate of all annotation specs.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    private $filter = '';
    /**
     * Requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained via
     * [ListModelEvaluationsResponse.next_page_token][google.cloud.automl.v1beta1.ListModelEvaluationsResponse.next_page_token] of the previous
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1beta1.AutoMl.ListModelEvaluations] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the model to list the model evaluations for.
     *           If modelId is set as "-", this will list model evaluations from across all
     *           models of the parent location.
     *     @type string $filter
     *           An expression for filtering the results of the request.
     *             * `annotation_spec_id` - for =, !=  or existence. See example below for
     *                                    the last.
     *           Some examples of using the filter are:
     *             * `annotation_spec_id!=4` --> The model evaluation was done for
     *                                       annotation spec with ID different than 4.
     *             * `NOT annotation_spec_id:*` --> The model evaluation was done for
     *                                          aggregate of all annotation specs.
     *     @type int $page_size
     *           Requested page size.
     *     @type string $page_token
     *           A token identifying a page of results for the server to return.
     *           Typically obtained via
     *           [ListModelEvaluationsResponse.next_page_token][google.cloud.automl.v1beta1.ListModelEvaluationsResponse.next_page_token] of the previous
     *           [AutoMl.ListModelEvaluations][google.cloud.automl.v1beta1.AutoMl.ListModelEvaluations] call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the model to list the model evaluations for.
     * If modelId is set as "-", this will list model evaluations from across all
     * models of the parent location.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the model to list the model evaluations for.
     * If modelId is set as "-", this will list model evaluations from across all
     * models of the parent location.
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
     * An expression for filtering the results of the request.
     *   * `annotation_spec_id` - for =, !=  or existence. See example below for
     *                          the last.
     * Some examples of using the filter are:
     *   * `annotation_spec_id!=4` --> The model evaluation was done for
     *                             annotation spec with ID different than 4.
     *   * `NOT annotation_spec_id:*` --> The model evaluation was done for
     *                                aggregate of all annotation specs.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression for filtering the results of the request.
     *   * `annotation_spec_id` - for =, !=  or existence. See example below for
     *                          the last.
     * Some examples of using the filter are:
     *   * `annotation_spec_id!=4` --> The model evaluation was done for
     *                             annotation spec with ID different than 4.
     *   * `NOT annotation_spec_id:*` --> The model evaluation was done for
     *                                aggregate of all annotation specs.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained via
     * [ListModelEvaluationsResponse.next_page_token][google.cloud.automl.v1beta1.ListModelEvaluationsResponse.next_page_token] of the previous
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1beta1.AutoMl.ListModelEvaluations] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results for the server to return.
     * Typically obtained via
     * [ListModelEvaluationsResponse.next_page_token][google.cloud.automl.v1beta1.ListModelEvaluationsResponse.next_page_token] of the previous
     * [AutoMl.ListModelEvaluations][google.cloud.automl.v1beta1.AutoMl.ListModelEvaluations] call.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

