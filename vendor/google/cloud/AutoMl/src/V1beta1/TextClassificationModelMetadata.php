<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/text.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model metadata that is specific to text classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TextClassificationModelMetadata</code>
 */
class TextClassificationModelMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Classification type of the dataset used to train this model.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ClassificationType classification_type = 3;</code>
     */
    private $classification_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $classification_type
     *           Output only. Classification type of the dataset used to train this model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Text::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Classification type of the dataset used to train this model.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ClassificationType classification_type = 3;</code>
     * @return int
     */
    public function getClassificationType()
    {
        return $this->classification_type;
    }

    /**
     * Output only. Classification type of the dataset used to train this model.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ClassificationType classification_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setClassificationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AutoMl\V1beta1\ClassificationType::class);
        $this->classification_type = $var;

        return $this;
    }

}

