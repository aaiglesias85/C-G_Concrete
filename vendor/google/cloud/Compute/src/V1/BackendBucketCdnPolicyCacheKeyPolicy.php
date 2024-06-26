<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing what to include in the cache key for a request for Cloud CDN.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendBucketCdnPolicyCacheKeyPolicy</code>
 */
class BackendBucketCdnPolicyCacheKeyPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     */
    private $include_http_headers;
    /**
     * Names of query string parameters to include in cache keys. Default parameters are always included. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     */
    private $query_string_whitelist;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_http_headers
     *           Allows HTTP request headers (by name) to be used in the cache key.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $query_string_whitelist
     *           Names of query string parameters to include in cache keys. Default parameters are always included. '&' and '=' will be percent encoded and not treated as delimiters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeHttpHeaders()
    {
        return $this->include_http_headers;
    }

    /**
     * Allows HTTP request headers (by name) to be used in the cache key.
     *
     * Generated from protobuf field <code>repeated string include_http_headers = 2489606;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeHttpHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_http_headers = $arr;

        return $this;
    }

    /**
     * Names of query string parameters to include in cache keys. Default parameters are always included. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryStringWhitelist()
    {
        return $this->query_string_whitelist;
    }

    /**
     * Names of query string parameters to include in cache keys. Default parameters are always included. '&' and '=' will be percent encoded and not treated as delimiters.
     *
     * Generated from protobuf field <code>repeated string query_string_whitelist = 52456496;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryStringWhitelist($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->query_string_whitelist = $arr;

        return $this;
    }

}

