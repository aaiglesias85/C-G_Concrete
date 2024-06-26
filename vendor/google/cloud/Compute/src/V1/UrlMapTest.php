<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for the expected URL mappings.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.UrlMapTest</code>
 */
class UrlMapTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * The expected output URL evaluated by the load balancer containing the scheme, host, path and query parameters. For rules that forward requests to backends, the test passes only when expectedOutputUrl matches the request forwarded by the load balancer to backends. For rules with urlRewrite, the test verifies that the forwarded request matches hostRewrite and pathPrefixRewrite in the urlRewrite action. When service is specified, expectedOutputUrl`s scheme is ignored. For rules with urlRedirect, the test passes only if expectedOutputUrl matches the URL in the load balancer's redirect response. If urlRedirect specifies https_redirect, the test passes only if the scheme in expectedOutputUrl is also set to HTTPS. If urlRedirect specifies strip_query, the test passes only if expectedOutputUrl does not contain any query parameters. expectedOutputUrl is optional when service is specified.
     *
     * Generated from protobuf field <code>optional string expected_output_url = 433967384;</code>
     */
    private $expected_output_url = null;
    /**
     * For rules with urlRedirect, the test passes only if expectedRedirectResponseCode matches the HTTP status code in load balancer's redirect response. expectedRedirectResponseCode cannot be set when service is set.
     *
     * Generated from protobuf field <code>optional int32 expected_redirect_response_code = 18888047;</code>
     */
    private $expected_redirect_response_code = null;
    /**
     * HTTP headers for this request. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMapTestHeader headers = 258436998;</code>
     */
    private $headers;
    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     */
    private $host = null;
    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     */
    private $path = null;
    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to. The service field cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     */
    private $service = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           Description of this test case.
     *     @type string $expected_output_url
     *           The expected output URL evaluated by the load balancer containing the scheme, host, path and query parameters. For rules that forward requests to backends, the test passes only when expectedOutputUrl matches the request forwarded by the load balancer to backends. For rules with urlRewrite, the test verifies that the forwarded request matches hostRewrite and pathPrefixRewrite in the urlRewrite action. When service is specified, expectedOutputUrl`s scheme is ignored. For rules with urlRedirect, the test passes only if expectedOutputUrl matches the URL in the load balancer's redirect response. If urlRedirect specifies https_redirect, the test passes only if the scheme in expectedOutputUrl is also set to HTTPS. If urlRedirect specifies strip_query, the test passes only if expectedOutputUrl does not contain any query parameters. expectedOutputUrl is optional when service is specified.
     *     @type int $expected_redirect_response_code
     *           For rules with urlRedirect, the test passes only if expectedRedirectResponseCode matches the HTTP status code in load balancer's redirect response. expectedRedirectResponseCode cannot be set when service is set.
     *     @type \Google\Cloud\Compute\V1\UrlMapTestHeader[]|\Google\Protobuf\Internal\RepeatedField $headers
     *           HTTP headers for this request. If headers contains a host header, then host must also match the header value.
     *     @type string $host
     *           Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *     @type string $path
     *           Path portion of the URL.
     *     @type string $service
     *           Expected BackendService or BackendBucket resource the given URL should be mapped to. The service field cannot be set if expectedRedirectResponseCode is set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Description of this test case.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The expected output URL evaluated by the load balancer containing the scheme, host, path and query parameters. For rules that forward requests to backends, the test passes only when expectedOutputUrl matches the request forwarded by the load balancer to backends. For rules with urlRewrite, the test verifies that the forwarded request matches hostRewrite and pathPrefixRewrite in the urlRewrite action. When service is specified, expectedOutputUrl`s scheme is ignored. For rules with urlRedirect, the test passes only if expectedOutputUrl matches the URL in the load balancer's redirect response. If urlRedirect specifies https_redirect, the test passes only if the scheme in expectedOutputUrl is also set to HTTPS. If urlRedirect specifies strip_query, the test passes only if expectedOutputUrl does not contain any query parameters. expectedOutputUrl is optional when service is specified.
     *
     * Generated from protobuf field <code>optional string expected_output_url = 433967384;</code>
     * @return string
     */
    public function getExpectedOutputUrl()
    {
        return isset($this->expected_output_url) ? $this->expected_output_url : '';
    }

    public function hasExpectedOutputUrl()
    {
        return isset($this->expected_output_url);
    }

    public function clearExpectedOutputUrl()
    {
        unset($this->expected_output_url);
    }

    /**
     * The expected output URL evaluated by the load balancer containing the scheme, host, path and query parameters. For rules that forward requests to backends, the test passes only when expectedOutputUrl matches the request forwarded by the load balancer to backends. For rules with urlRewrite, the test verifies that the forwarded request matches hostRewrite and pathPrefixRewrite in the urlRewrite action. When service is specified, expectedOutputUrl`s scheme is ignored. For rules with urlRedirect, the test passes only if expectedOutputUrl matches the URL in the load balancer's redirect response. If urlRedirect specifies https_redirect, the test passes only if the scheme in expectedOutputUrl is also set to HTTPS. If urlRedirect specifies strip_query, the test passes only if expectedOutputUrl does not contain any query parameters. expectedOutputUrl is optional when service is specified.
     *
     * Generated from protobuf field <code>optional string expected_output_url = 433967384;</code>
     * @param string $var
     * @return $this
     */
    public function setExpectedOutputUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->expected_output_url = $var;

        return $this;
    }

    /**
     * For rules with urlRedirect, the test passes only if expectedRedirectResponseCode matches the HTTP status code in load balancer's redirect response. expectedRedirectResponseCode cannot be set when service is set.
     *
     * Generated from protobuf field <code>optional int32 expected_redirect_response_code = 18888047;</code>
     * @return int
     */
    public function getExpectedRedirectResponseCode()
    {
        return isset($this->expected_redirect_response_code) ? $this->expected_redirect_response_code : 0;
    }

    public function hasExpectedRedirectResponseCode()
    {
        return isset($this->expected_redirect_response_code);
    }

    public function clearExpectedRedirectResponseCode()
    {
        unset($this->expected_redirect_response_code);
    }

    /**
     * For rules with urlRedirect, the test passes only if expectedRedirectResponseCode matches the HTTP status code in load balancer's redirect response. expectedRedirectResponseCode cannot be set when service is set.
     *
     * Generated from protobuf field <code>optional int32 expected_redirect_response_code = 18888047;</code>
     * @param int $var
     * @return $this
     */
    public function setExpectedRedirectResponseCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->expected_redirect_response_code = $var;

        return $this;
    }

    /**
     * HTTP headers for this request. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMapTestHeader headers = 258436998;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * HTTP headers for this request. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.UrlMapTestHeader headers = 258436998;</code>
     * @param \Google\Cloud\Compute\V1\UrlMapTestHeader[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\UrlMapTestHeader::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @return string
     */
    public function getHost()
    {
        return isset($this->host) ? $this->host : '';
    }

    public function hasHost()
    {
        return isset($this->host);
    }

    public function clearHost()
    {
        unset($this->host);
    }

    /**
     * Host portion of the URL. If headers contains a host header, then host must also match the header value.
     *
     * Generated from protobuf field <code>optional string host = 3208616;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     * @return string
     */
    public function getPath()
    {
        return isset($this->path) ? $this->path : '';
    }

    public function hasPath()
    {
        return isset($this->path);
    }

    public function clearPath()
    {
        unset($this->path);
    }

    /**
     * Path portion of the URL.
     *
     * Generated from protobuf field <code>optional string path = 3433509;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to. The service field cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Expected BackendService or BackendBucket resource the given URL should be mapped to. The service field cannot be set if expectedRedirectResponseCode is set.
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

}

