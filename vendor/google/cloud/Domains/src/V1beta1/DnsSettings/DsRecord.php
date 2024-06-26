<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1\DnsSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a Delegation Signer (DS) record, which is needed to enable DNSSEC
 * for a domain. It contains a digest (hash) of a DNSKEY record that must be
 * present in the domain's DNS zone.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1beta1.DnsSettings.DsRecord</code>
 */
class DsRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * The key tag of the record. Must be set in range 0 -- 65535.
     *
     * Generated from protobuf field <code>int32 key_tag = 1;</code>
     */
    private $key_tag = 0;
    /**
     * The algorithm used to generate the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.Algorithm algorithm = 2;</code>
     */
    private $algorithm = 0;
    /**
     * The hash function used to generate the digest of the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.DigestType digest_type = 3;</code>
     */
    private $digest_type = 0;
    /**
     * The digest generated from the referenced DNSKEY.
     *
     * Generated from protobuf field <code>string digest = 4;</code>
     */
    private $digest = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key_tag
     *           The key tag of the record. Must be set in range 0 -- 65535.
     *     @type int $algorithm
     *           The algorithm used to generate the referenced DNSKEY.
     *     @type int $digest_type
     *           The hash function used to generate the digest of the referenced DNSKEY.
     *     @type string $digest
     *           The digest generated from the referenced DNSKEY.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Beta1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * The key tag of the record. Must be set in range 0 -- 65535.
     *
     * Generated from protobuf field <code>int32 key_tag = 1;</code>
     * @return int
     */
    public function getKeyTag()
    {
        return $this->key_tag;
    }

    /**
     * The key tag of the record. Must be set in range 0 -- 65535.
     *
     * Generated from protobuf field <code>int32 key_tag = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->key_tag = $var;

        return $this;
    }

    /**
     * The algorithm used to generate the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.Algorithm algorithm = 2;</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * The algorithm used to generate the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.Algorithm algorithm = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1beta1\DnsSettings\DsRecord\Algorithm::class);
        $this->algorithm = $var;

        return $this;
    }

    /**
     * The hash function used to generate the digest of the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.DigestType digest_type = 3;</code>
     * @return int
     */
    public function getDigestType()
    {
        return $this->digest_type;
    }

    /**
     * The hash function used to generate the digest of the referenced DNSKEY.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings.DsRecord.DigestType digest_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDigestType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Domains\V1beta1\DnsSettings\DsRecord\DigestType::class);
        $this->digest_type = $var;

        return $this;
    }

    /**
     * The digest generated from the referenced DNSKEY.
     *
     * Generated from protobuf field <code>string digest = 4;</code>
     * @return string
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * The digest generated from the referenced DNSKEY.
     *
     * Generated from protobuf field <code>string digest = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDigest($var)
    {
        GPBUtil::checkString($var, True);
        $this->digest = $var;

        return $this;
    }

}


