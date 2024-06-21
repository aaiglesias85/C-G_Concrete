<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SecretManagerService.DisableSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.DisableSecretVersion].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.DisableSecretVersionRequest</code>
 */
class DisableSecretVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] to disable in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. Etag of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. The request succeeds if it matches
     * the etag of the currently stored secret version object. If the etag is
     * omitted, the request succeeds.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] to disable in the format
     *           `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *     @type string $etag
     *           Optional. Etag of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. The request succeeds if it matches
     *           the etag of the currently stored secret version object. If the etag is
     *           omitted, the request succeeds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] to disable in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] to disable in the format
     * `projects/&#42;&#47;secrets/&#42;&#47;versions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Etag of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. The request succeeds if it matches
     * the etag of the currently stored secret version object. If the etag is
     * omitted, the request succeeds.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Etag of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion]. The request succeeds if it matches
     * the etag of the currently stored secret version object. If the etag is
     * omitted, the request succeeds.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

