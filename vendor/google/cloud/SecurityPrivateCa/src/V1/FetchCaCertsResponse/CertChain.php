<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/service.proto

namespace Google\Cloud\Security\PrivateCA\V1\FetchCaCertsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.FetchCaCertsResponse.CertChain</code>
 */
class CertChain extends \Google\Protobuf\Internal\Message
{
    /**
     * The certificates that form the CA chain, from leaf to root order.
     *
     * Generated from protobuf field <code>repeated string certificates = 1;</code>
     */
    private $certificates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $certificates
     *           The certificates that form the CA chain, from leaf to root order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The certificates that form the CA chain, from leaf to root order.
     *
     * Generated from protobuf field <code>repeated string certificates = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificates()
    {
        return $this->certificates;
    }

    /**
     * The certificates that form the CA chain, from leaf to root order.
     *
     * Generated from protobuf field <code>repeated string certificates = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->certificates = $arr;

        return $this;
    }

}


