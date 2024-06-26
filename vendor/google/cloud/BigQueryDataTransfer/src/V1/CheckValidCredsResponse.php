<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response indicating whether the credentials exist and are valid.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.CheckValidCredsResponse</code>
 */
class CheckValidCredsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * If set to `true`, the credentials exist and are valid.
     *
     * Generated from protobuf field <code>bool has_valid_creds = 1;</code>
     */
    private $has_valid_creds = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $has_valid_creds
     *           If set to `true`, the credentials exist and are valid.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * If set to `true`, the credentials exist and are valid.
     *
     * Generated from protobuf field <code>bool has_valid_creds = 1;</code>
     * @return bool
     */
    public function getHasValidCreds()
    {
        return $this->has_valid_creds;
    }

    /**
     * If set to `true`, the credentials exist and are valid.
     *
     * Generated from protobuf field <code>bool has_valid_creds = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasValidCreds($var)
    {
        GPBUtil::checkBool($var);
        $this->has_valid_creds = $var;

        return $this;
    }

}

