<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.CreateDataset][google.cloud.automl.v1beta1.AutoMl.CreateDataset].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.CreateDatasetRequest</code>
 */
class CreateDatasetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project to create the dataset for.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The dataset to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $dataset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the project to create the dataset for.
     *     @type \Google\Cloud\AutoMl\V1beta1\Dataset $dataset
     *           Required. The dataset to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project to create the dataset for.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the project to create the dataset for.
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
     * Required. The dataset to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1beta1\Dataset|null
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    public function hasDataset()
    {
        return isset($this->dataset);
    }

    public function clearDataset()
    {
        unset($this->dataset);
    }

    /**
     * Required. The dataset to create.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.Dataset dataset = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1beta1\Dataset $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\Dataset::class);
        $this->dataset = $var;

        return $this;
    }

}

