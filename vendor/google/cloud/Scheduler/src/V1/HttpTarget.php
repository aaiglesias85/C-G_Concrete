<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/scheduler/v1/target.proto

namespace Google\Cloud\Scheduler\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Http target. The job will be pushed to the job handler by means of
 * an HTTP request via an [http_method][google.cloud.scheduler.v1.HttpTarget.http_method] such as HTTP
 * POST, HTTP GET, etc. The job is acknowledged by means of an HTTP
 * response code in the range [200 - 299]. A failure to receive a response
 * constitutes a failed execution. For a redirected request, the response
 * returned by the redirected request is considered.
 *
 * Generated from protobuf message <code>google.cloud.scheduler.v1.HttpTarget</code>
 */
class HttpTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The full URI path that the request will be sent to. This string
     * must begin with either "http://" or "https://". Some examples of
     * valid values for [uri][google.cloud.scheduler.v1.HttpTarget.uri] are:
     * `http://acme.com` and `https://acme.com/sales:8080`. Cloud Scheduler will
     * encode some characters for safety and compatibility. The maximum allowed
     * URL length is 2083 characters after encoding.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     */
    private $uri = '';
    /**
     * Which HTTP method to use for the request.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.HttpMethod http_method = 2;</code>
     */
    private $http_method = 0;
    /**
     * The user can specify HTTP request headers to send with the job's
     * HTTP request. This map contains the header field names and
     * values. Repeated headers are not supported, but a header value can
     * contain commas. These headers represent a subset of the headers
     * that will accompany the job's HTTP request. Some HTTP request
     * headers will be ignored or replaced. A partial list of headers that
     * will be ignored or replaced is below:
     * - Host: This will be computed by Cloud Scheduler and derived from
     * [uri][google.cloud.scheduler.v1.HttpTarget.uri].
     * * `Content-Length`: This will be computed by Cloud Scheduler.
     * * `User-Agent`: This will be set to `"Google-Cloud-Scheduler"`.
     * * `X-Google-*`: Google internal use only.
     * * `X-AppEngine-*`: Google internal use only.
     * The total size of headers must be less than 80KB.
     *
     * Generated from protobuf field <code>map<string, string> headers = 3;</code>
     */
    private $headers;
    /**
     * HTTP request body. A request body is allowed only if the HTTP
     * method is POST, PUT, or PATCH. It is an error to set body on a job with an
     * incompatible [HttpMethod][google.cloud.scheduler.v1.HttpMethod].
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     */
    private $body = '';
    protected $authorization_header;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           Required. The full URI path that the request will be sent to. This string
     *           must begin with either "http://" or "https://". Some examples of
     *           valid values for [uri][google.cloud.scheduler.v1.HttpTarget.uri] are:
     *           `http://acme.com` and `https://acme.com/sales:8080`. Cloud Scheduler will
     *           encode some characters for safety and compatibility. The maximum allowed
     *           URL length is 2083 characters after encoding.
     *     @type int $http_method
     *           Which HTTP method to use for the request.
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *           The user can specify HTTP request headers to send with the job's
     *           HTTP request. This map contains the header field names and
     *           values. Repeated headers are not supported, but a header value can
     *           contain commas. These headers represent a subset of the headers
     *           that will accompany the job's HTTP request. Some HTTP request
     *           headers will be ignored or replaced. A partial list of headers that
     *           will be ignored or replaced is below:
     *           - Host: This will be computed by Cloud Scheduler and derived from
     *           [uri][google.cloud.scheduler.v1.HttpTarget.uri].
     *           * `Content-Length`: This will be computed by Cloud Scheduler.
     *           * `User-Agent`: This will be set to `"Google-Cloud-Scheduler"`.
     *           * `X-Google-*`: Google internal use only.
     *           * `X-AppEngine-*`: Google internal use only.
     *           The total size of headers must be less than 80KB.
     *     @type string $body
     *           HTTP request body. A request body is allowed only if the HTTP
     *           method is POST, PUT, or PATCH. It is an error to set body on a job with an
     *           incompatible [HttpMethod][google.cloud.scheduler.v1.HttpMethod].
     *     @type \Google\Cloud\Scheduler\V1\OAuthToken $oauth_token
     *           If specified, an
     *           [OAuth token](https://developers.google.com/identity/protocols/OAuth2)
     *           will be generated and attached as an `Authorization` header in the HTTP
     *           request.
     *           This type of authorization should generally only be used when calling
     *           Google APIs hosted on *.googleapis.com.
     *     @type \Google\Cloud\Scheduler\V1\OidcToken $oidc_token
     *           If specified, an
     *           [OIDC](https://developers.google.com/identity/protocols/OpenIDConnect)
     *           token will be generated and attached as an `Authorization` header in the
     *           HTTP request.
     *           This type of authorization can be used for many scenarios, including
     *           calling Cloud Run, or endpoints where you intend to validate the token
     *           yourself.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Scheduler\V1\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The full URI path that the request will be sent to. This string
     * must begin with either "http://" or "https://". Some examples of
     * valid values for [uri][google.cloud.scheduler.v1.HttpTarget.uri] are:
     * `http://acme.com` and `https://acme.com/sales:8080`. Cloud Scheduler will
     * encode some characters for safety and compatibility. The maximum allowed
     * URL length is 2083 characters after encoding.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Required. The full URI path that the request will be sent to. This string
     * must begin with either "http://" or "https://". Some examples of
     * valid values for [uri][google.cloud.scheduler.v1.HttpTarget.uri] are:
     * `http://acme.com` and `https://acme.com/sales:8080`. Cloud Scheduler will
     * encode some characters for safety and compatibility. The maximum allowed
     * URL length is 2083 characters after encoding.
     *
     * Generated from protobuf field <code>string uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Which HTTP method to use for the request.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.HttpMethod http_method = 2;</code>
     * @return int
     */
    public function getHttpMethod()
    {
        return $this->http_method;
    }

    /**
     * Which HTTP method to use for the request.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.HttpMethod http_method = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHttpMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Scheduler\V1\HttpMethod::class);
        $this->http_method = $var;

        return $this;
    }

    /**
     * The user can specify HTTP request headers to send with the job's
     * HTTP request. This map contains the header field names and
     * values. Repeated headers are not supported, but a header value can
     * contain commas. These headers represent a subset of the headers
     * that will accompany the job's HTTP request. Some HTTP request
     * headers will be ignored or replaced. A partial list of headers that
     * will be ignored or replaced is below:
     * - Host: This will be computed by Cloud Scheduler and derived from
     * [uri][google.cloud.scheduler.v1.HttpTarget.uri].
     * * `Content-Length`: This will be computed by Cloud Scheduler.
     * * `User-Agent`: This will be set to `"Google-Cloud-Scheduler"`.
     * * `X-Google-*`: Google internal use only.
     * * `X-AppEngine-*`: Google internal use only.
     * The total size of headers must be less than 80KB.
     *
     * Generated from protobuf field <code>map<string, string> headers = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * The user can specify HTTP request headers to send with the job's
     * HTTP request. This map contains the header field names and
     * values. Repeated headers are not supported, but a header value can
     * contain commas. These headers represent a subset of the headers
     * that will accompany the job's HTTP request. Some HTTP request
     * headers will be ignored or replaced. A partial list of headers that
     * will be ignored or replaced is below:
     * - Host: This will be computed by Cloud Scheduler and derived from
     * [uri][google.cloud.scheduler.v1.HttpTarget.uri].
     * * `Content-Length`: This will be computed by Cloud Scheduler.
     * * `User-Agent`: This will be set to `"Google-Cloud-Scheduler"`.
     * * `X-Google-*`: Google internal use only.
     * * `X-AppEngine-*`: Google internal use only.
     * The total size of headers must be less than 80KB.
     *
     * Generated from protobuf field <code>map<string, string> headers = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

    /**
     * HTTP request body. A request body is allowed only if the HTTP
     * method is POST, PUT, or PATCH. It is an error to set body on a job with an
     * incompatible [HttpMethod][google.cloud.scheduler.v1.HttpMethod].
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * HTTP request body. A request body is allowed only if the HTTP
     * method is POST, PUT, or PATCH. It is an error to set body on a job with an
     * incompatible [HttpMethod][google.cloud.scheduler.v1.HttpMethod].
     *
     * Generated from protobuf field <code>bytes body = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkString($var, False);
        $this->body = $var;

        return $this;
    }

    /**
     * If specified, an
     * [OAuth token](https://developers.google.com/identity/protocols/OAuth2)
     * will be generated and attached as an `Authorization` header in the HTTP
     * request.
     * This type of authorization should generally only be used when calling
     * Google APIs hosted on *.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.OAuthToken oauth_token = 5;</code>
     * @return \Google\Cloud\Scheduler\V1\OAuthToken|null
     */
    public function getOauthToken()
    {
        return $this->readOneof(5);
    }

    public function hasOauthToken()
    {
        return $this->hasOneof(5);
    }

    /**
     * If specified, an
     * [OAuth token](https://developers.google.com/identity/protocols/OAuth2)
     * will be generated and attached as an `Authorization` header in the HTTP
     * request.
     * This type of authorization should generally only be used when calling
     * Google APIs hosted on *.googleapis.com.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.OAuthToken oauth_token = 5;</code>
     * @param \Google\Cloud\Scheduler\V1\OAuthToken $var
     * @return $this
     */
    public function setOauthToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Scheduler\V1\OAuthToken::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * If specified, an
     * [OIDC](https://developers.google.com/identity/protocols/OpenIDConnect)
     * token will be generated and attached as an `Authorization` header in the
     * HTTP request.
     * This type of authorization can be used for many scenarios, including
     * calling Cloud Run, or endpoints where you intend to validate the token
     * yourself.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.OidcToken oidc_token = 6;</code>
     * @return \Google\Cloud\Scheduler\V1\OidcToken|null
     */
    public function getOidcToken()
    {
        return $this->readOneof(6);
    }

    public function hasOidcToken()
    {
        return $this->hasOneof(6);
    }

    /**
     * If specified, an
     * [OIDC](https://developers.google.com/identity/protocols/OpenIDConnect)
     * token will be generated and attached as an `Authorization` header in the
     * HTTP request.
     * This type of authorization can be used for many scenarios, including
     * calling Cloud Run, or endpoints where you intend to validate the token
     * yourself.
     *
     * Generated from protobuf field <code>.google.cloud.scheduler.v1.OidcToken oidc_token = 6;</code>
     * @param \Google\Cloud\Scheduler\V1\OidcToken $var
     * @return $this
     */
    public function setOidcToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Scheduler\V1\OidcToken::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationHeader()
    {
        return $this->whichOneof("authorization_header");
    }

}

