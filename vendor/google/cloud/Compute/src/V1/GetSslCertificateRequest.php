<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for SslCertificates.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetSslCertificateRequest</code>
 */
class GetSslCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * Name of the SslCertificate resource to return.
     *
     * Generated from protobuf field <code>string ssl_certificate = 46443492 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ssl_certificate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $ssl_certificate
     *           Name of the SslCertificate resource to return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the SslCertificate resource to return.
     *
     * Generated from protobuf field <code>string ssl_certificate = 46443492 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSslCertificate()
    {
        return $this->ssl_certificate;
    }

    /**
     * Name of the SslCertificate resource to return.
     *
     * Generated from protobuf field <code>string ssl_certificate = 46443492 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSslCertificate($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssl_certificate = $var;

        return $this;
    }

}

