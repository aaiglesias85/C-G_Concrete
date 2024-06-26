<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The BigQuery location for the output content.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.BigQueryDestination</code>
 */
class BigQueryDestination extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. BigQuery URI to a project, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path e.g. bq://projectId
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     */
    private $output_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_uri
     *           Required. BigQuery URI to a project, up to 2000 characters long.
     *           Accepted forms:
     *           *  BigQuery path e.g. bq://projectId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. BigQuery URI to a project, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path e.g. bq://projectId
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Required. BigQuery URI to a project, up to 2000 characters long.
     * Accepted forms:
     * *  BigQuery path e.g. bq://projectId
     *
     * Generated from protobuf field <code>string output_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

}

