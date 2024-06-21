<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vizier_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message will be placed in the metadata field of a
 * google.longrunning.Operation associated with a CheckTrialEarlyStoppingState
 * request.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CheckTrialEarlyStoppingStateMetatdata</code>
 */
class CheckTrialEarlyStoppingStateMetatdata extends \Google\Protobuf\Internal\Message
{
    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     */
    private $generic_metadata = null;
    /**
     * The name of the Study that the Trial belongs to.
     *
     * Generated from protobuf field <code>string study = 2;</code>
     */
    private $study = '';
    /**
     * The Trial name.
     *
     * Generated from protobuf field <code>string trial = 3;</code>
     */
    private $trial = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $generic_metadata
     *           Operation metadata for suggesting Trials.
     *     @type string $study
     *           The name of the Study that the Trial belongs to.
     *     @type string $trial
     *           The Trial name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VizierService::initOnce();
        parent::__construct($data);
    }

    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\GenericOperationMetadata|null
     */
    public function getGenericMetadata()
    {
        return $this->generic_metadata;
    }

    public function hasGenericMetadata()
    {
        return isset($this->generic_metadata);
    }

    public function clearGenericMetadata()
    {
        unset($this->generic_metadata);
    }

    /**
     * Operation metadata for suggesting Trials.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.GenericOperationMetadata generic_metadata = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\GenericOperationMetadata $var
     * @return $this
     */
    public function setGenericMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\GenericOperationMetadata::class);
        $this->generic_metadata = $var;

        return $this;
    }

    /**
     * The name of the Study that the Trial belongs to.
     *
     * Generated from protobuf field <code>string study = 2;</code>
     * @return string
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * The name of the Study that the Trial belongs to.
     *
     * Generated from protobuf field <code>string study = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStudy($var)
    {
        GPBUtil::checkString($var, True);
        $this->study = $var;

        return $this;
    }

    /**
     * The Trial name.
     *
     * Generated from protobuf field <code>string trial = 3;</code>
     * @return string
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * The Trial name.
     *
     * Generated from protobuf field <code>string trial = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTrial($var)
    {
        GPBUtil::checkString($var, True);
        $this->trial = $var;

        return $this;
    }

}

