<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/application.proto

namespace Google\Cloud\AppEngine\V1\Application;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identity-Aware Proxy
 *
 * Generated from protobuf message <code>google.appengine.v1.Application.IdentityAwareProxy</code>
 */
class IdentityAwareProxy extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the serving infrastructure will authenticate and
     * authorize all incoming requests.
     * If true, the `oauth2_client_id` and `oauth2_client_secret`
     * fields must be non-empty.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    private $enabled = false;
    /**
     * OAuth2 client ID to use for the authentication flow.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     */
    private $oauth2_client_id = '';
    /**
     * OAuth2 client secret to use for the authentication flow.
     * For security reasons, this value cannot be retrieved via the API.
     * Instead, the SHA-256 hash of the value is returned in the
     * `oauth2_client_secret_sha256` field.
     * &#64;InputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     */
    private $oauth2_client_secret = '';
    /**
     * Hex-encoded SHA-256 hash of the client secret.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     */
    private $oauth2_client_secret_sha256 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether the serving infrastructure will authenticate and
     *           authorize all incoming requests.
     *           If true, the `oauth2_client_id` and `oauth2_client_secret`
     *           fields must be non-empty.
     *     @type string $oauth2_client_id
     *           OAuth2 client ID to use for the authentication flow.
     *     @type string $oauth2_client_secret
     *           OAuth2 client secret to use for the authentication flow.
     *           For security reasons, this value cannot be retrieved via the API.
     *           Instead, the SHA-256 hash of the value is returned in the
     *           `oauth2_client_secret_sha256` field.
     *           &#64;InputOnly
     *     @type string $oauth2_client_secret_sha256
     *           Hex-encoded SHA-256 hash of the client secret.
     *           &#64;OutputOnly
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the serving infrastructure will authenticate and
     * authorize all incoming requests.
     * If true, the `oauth2_client_id` and `oauth2_client_secret`
     * fields must be non-empty.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether the serving infrastructure will authenticate and
     * authorize all incoming requests.
     * If true, the `oauth2_client_id` and `oauth2_client_secret`
     * fields must be non-empty.
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * OAuth2 client ID to use for the authentication flow.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     * @return string
     */
    public function getOauth2ClientId()
    {
        return $this->oauth2_client_id;
    }

    /**
     * OAuth2 client ID to use for the authentication flow.
     *
     * Generated from protobuf field <code>string oauth2_client_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_id = $var;

        return $this;
    }

    /**
     * OAuth2 client secret to use for the authentication flow.
     * For security reasons, this value cannot be retrieved via the API.
     * Instead, the SHA-256 hash of the value is returned in the
     * `oauth2_client_secret_sha256` field.
     * &#64;InputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     * @return string
     */
    public function getOauth2ClientSecret()
    {
        return $this->oauth2_client_secret;
    }

    /**
     * OAuth2 client secret to use for the authentication flow.
     * For security reasons, this value cannot be retrieved via the API.
     * Instead, the SHA-256 hash of the value is returned in the
     * `oauth2_client_secret_sha256` field.
     * &#64;InputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_secret = $var;

        return $this;
    }

    /**
     * Hex-encoded SHA-256 hash of the client secret.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     * @return string
     */
    public function getOauth2ClientSecretSha256()
    {
        return $this->oauth2_client_secret_sha256;
    }

    /**
     * Hex-encoded SHA-256 hash of the client secret.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>string oauth2_client_secret_sha256 = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOauth2ClientSecretSha256($var)
    {
        GPBUtil::checkString($var, True);
        $this->oauth2_client_secret_sha256 = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentityAwareProxy::class, \Google\Cloud\AppEngine\V1\Application_IdentityAwareProxy::class);

