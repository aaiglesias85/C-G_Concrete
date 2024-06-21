<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/cdn_keys.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an Akamai CDN key.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.AkamaiCdnKey</code>
 */
class AkamaiCdnKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. Token key for the Akamai CDN edge configuration.
     *
     * Generated from protobuf field <code>bytes token_key = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $token_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token_key
     *           Input only. Token key for the Akamai CDN edge configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\CdnKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. Token key for the Akamai CDN edge configuration.
     *
     * Generated from protobuf field <code>bytes token_key = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return string
     */
    public function getTokenKey()
    {
        return $this->token_key;
    }

    /**
     * Input only. Token key for the Akamai CDN edge configuration.
     *
     * Generated from protobuf field <code>bytes token_key = 1 [(.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTokenKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->token_key = $var;

        return $this;
    }

}

