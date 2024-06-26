<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/analyze.proto

namespace Google\Cloud\Dataplex\V1\Environment;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Environment.Endpoints</code>
 */
class Endpoints extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. URI to serve notebook APIs
     *
     * Generated from protobuf field <code>string notebooks = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $notebooks = '';
    /**
     * Output only. URI to serve SQL APIs
     *
     * Generated from protobuf field <code>string sql = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $sql = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $notebooks
     *           Output only. URI to serve notebook APIs
     *     @type string $sql
     *           Output only. URI to serve SQL APIs
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Analyze::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. URI to serve notebook APIs
     *
     * Generated from protobuf field <code>string notebooks = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getNotebooks()
    {
        return $this->notebooks;
    }

    /**
     * Output only. URI to serve notebook APIs
     *
     * Generated from protobuf field <code>string notebooks = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setNotebooks($var)
    {
        GPBUtil::checkString($var, True);
        $this->notebooks = $var;

        return $this;
    }

    /**
     * Output only. URI to serve SQL APIs
     *
     * Generated from protobuf field <code>string sql = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Output only. URI to serve SQL APIs
     *
     * Generated from protobuf field <code>string sql = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSql($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql = $var;

        return $this;
    }

}


