<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListDnsAuthorizations` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.ListDnsAuthorizationsResponse</code>
 */
class ListDnsAuthorizationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of dns authorizations for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.DnsAuthorization dns_authorizations = 1;</code>
     */
    private $dns_authorizations;
    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';
    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CertificateManager\V1\DnsAuthorization[]|\Google\Protobuf\Internal\RepeatedField $dns_authorizations
     *           A list of dns authorizations for the parent resource.
     *     @type string $next_page_token
     *           If there might be more results than those appearing in this response, then
     *           `next_page_token` is included. To get the next set of results, call this
     *           method again using the value of `next_page_token` as `page_token`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of dns authorizations for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.DnsAuthorization dns_authorizations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDnsAuthorizations()
    {
        return $this->dns_authorizations;
    }

    /**
     * A list of dns authorizations for the parent resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.certificatemanager.v1.DnsAuthorization dns_authorizations = 1;</code>
     * @param \Google\Cloud\CertificateManager\V1\DnsAuthorization[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDnsAuthorizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\CertificateManager\V1\DnsAuthorization::class);
        $this->dns_authorizations = $arr;

        return $this;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

