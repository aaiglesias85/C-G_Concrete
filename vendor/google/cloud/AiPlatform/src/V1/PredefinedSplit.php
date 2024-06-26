<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/training_pipeline.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Assigns input data to training, validation, and test sets based on the
 * value of a provided key.
 * Supported only for tabular Datasets.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PredefinedSplit</code>
 */
class PredefinedSplit extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The value of the key (either the label's value or value in the column)
     * must be one of {`training`, `validation`, `test`}, and it defines to which
     * set the given piece of data is assigned. If for a piece of data the key
     * is not present or has an invalid value, that piece is ignored by the
     * pipeline.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. The key is a name of one of the Dataset's data columns.
     *           The value of the key (either the label's value or value in the column)
     *           must be one of {`training`, `validation`, `test`}, and it defines to which
     *           set the given piece of data is assigned. If for a piece of data the key
     *           is not present or has an invalid value, that piece is ignored by the
     *           pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\TrainingPipeline::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The value of the key (either the label's value or value in the column)
     * must be one of {`training`, `validation`, `test`}, and it defines to which
     * set the given piece of data is assigned. If for a piece of data the key
     * is not present or has an invalid value, that piece is ignored by the
     * pipeline.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The value of the key (either the label's value or value in the column)
     * must be one of {`training`, `validation`, `test`}, and it defines to which
     * set the given piece of data is assigned. If for a piece of data the key
     * is not present or has an invalid value, that piece is ignored by the
     * pipeline.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}

