<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input only.
 * Filter on state of Application.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ApplicationStatusFilter</code>
 */
class ApplicationStatusFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * User entered or selected application state. The API does an exact match
     * between the application state specified in this filter and the
     * [Application.state][google.cloud.talent.v4beta1.Application.state] in
     * profiles.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState application_state = 1;</code>
     */
    private $application_state = 0;
    /**
     * Optional.
     * If true, The API excludes all candidates with any
     * [Application.state][google.cloud.talent.v4beta1.Application.state] matching
     * the state specified in the filter.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     */
    private $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $application_state
     *           Required.
     *           User entered or selected application state. The API does an exact match
     *           between the application state specified in this filter and the
     *           [Application.state][google.cloud.talent.v4beta1.Application.state] in
     *           profiles.
     *     @type bool $negated
     *           Optional.
     *           If true, The API excludes all candidates with any
     *           [Application.state][google.cloud.talent.v4beta1.Application.state] matching
     *           the state specified in the filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * User entered or selected application state. The API does an exact match
     * between the application state specified in this filter and the
     * [Application.state][google.cloud.talent.v4beta1.Application.state] in
     * profiles.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState application_state = 1;</code>
     * @return int
     */
    public function getApplicationState()
    {
        return $this->application_state;
    }

    /**
     * Required.
     * User entered or selected application state. The API does an exact match
     * between the application state specified in this filter and the
     * [Application.state][google.cloud.talent.v4beta1.Application.state] in
     * profiles.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState application_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setApplicationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Application_ApplicationState::class);
        $this->application_state = $var;

        return $this;
    }

    /**
     * Optional.
     * If true, The API excludes all candidates with any
     * [Application.state][google.cloud.talent.v4beta1.Application.state] matching
     * the state specified in the filter.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * Optional.
     * If true, The API excludes all candidates with any
     * [Application.state][google.cloud.talent.v4beta1.Application.state] matching
     * the state specified in the filter.
     *
     * Generated from protobuf field <code>bool negated = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegated($var)
    {
        GPBUtil::checkBool($var);
        $this->negated = $var;

        return $this;
    }

}

