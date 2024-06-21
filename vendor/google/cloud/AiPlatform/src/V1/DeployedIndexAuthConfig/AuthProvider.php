<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/index_endpoint.proto

namespace Google\Cloud\AIPlatform\V1\DeployedIndexAuthConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an authentication provider, including support for
 * [JSON Web Token
 * (JWT)](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32).
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DeployedIndexAuthConfig.AuthProvider</code>
 */
class AuthProvider extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted.
     *
     * Generated from protobuf field <code>repeated string audiences = 1;</code>
     */
    private $audiences;
    /**
     * A list of allowed JWT issuers. Each entry must be a valid Google
     * service account, in the following format:
     * `service-account-name&#64;project-id.iam.gserviceaccount.com`
     *
     * Generated from protobuf field <code>repeated string allowed_issuers = 2;</code>
     */
    private $allowed_issuers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $audiences
     *           The list of JWT
     *           [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     *           that are allowed to access. A JWT containing any of these audiences will
     *           be accepted.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_issuers
     *           A list of allowed JWT issuers. Each entry must be a valid Google
     *           service account, in the following format:
     *           `service-account-name&#64;project-id.iam.gserviceaccount.com`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\IndexEndpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted.
     *
     * Generated from protobuf field <code>repeated string audiences = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAudiences()
    {
        return $this->audiences;
    }

    /**
     * The list of JWT
     * [audiences](https://tools.ietf.org/html/draft-ietf-oauth-json-web-token-32#section-4.1.3).
     * that are allowed to access. A JWT containing any of these audiences will
     * be accepted.
     *
     * Generated from protobuf field <code>repeated string audiences = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAudiences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->audiences = $arr;

        return $this;
    }

    /**
     * A list of allowed JWT issuers. Each entry must be a valid Google
     * service account, in the following format:
     * `service-account-name&#64;project-id.iam.gserviceaccount.com`
     *
     * Generated from protobuf field <code>repeated string allowed_issuers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedIssuers()
    {
        return $this->allowed_issuers;
    }

    /**
     * A list of allowed JWT issuers. Each entry must be a valid Google
     * service account, in the following format:
     * `service-account-name&#64;project-id.iam.gserviceaccount.com`
     *
     * Generated from protobuf field <code>repeated string allowed_issuers = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedIssuers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_issuers = $arr;

        return $this;
    }

}


