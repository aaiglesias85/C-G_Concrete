<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_io.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies all documents on Cloud Storage with a common prefix.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.GcsPrefix</code>
 */
class GcsPrefix extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI prefix.
     *
     * Generated from protobuf field <code>string gcs_uri_prefix = 1;</code>
     */
    private $gcs_uri_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_uri_prefix
     *           The URI prefix.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentIo::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI prefix.
     *
     * Generated from protobuf field <code>string gcs_uri_prefix = 1;</code>
     * @return string
     */
    public function getGcsUriPrefix()
    {
        return $this->gcs_uri_prefix;
    }

    /**
     * The URI prefix.
     *
     * Generated from protobuf field <code>string gcs_uri_prefix = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_uri_prefix = $var;

        return $this;
    }

}

