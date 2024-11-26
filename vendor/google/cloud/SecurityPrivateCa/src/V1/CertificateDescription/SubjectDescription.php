<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CertificateDescription;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These values describe fields in an issued X.509 certificate such as the
 * distinguished name, subject alternative names, serial number, and lifetime.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CertificateDescription.SubjectDescription</code>
 */
class SubjectDescription extends \Google\Protobuf\Internal\Message
{
    /**
     * Contains distinguished name fields such as the common name, location and
     * / organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1;</code>
     */
    private $subject = null;
    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2;</code>
     */
    private $subject_alt_name = null;
    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 3;</code>
     */
    private $hex_serial_number = '';
    /**
     * For convenience, the actual lifetime of an issued certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4;</code>
     */
    private $lifetime = null;
    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 5;</code>
     */
    private $not_before_time = null;
    /**
     * The time after which the certificate is expired.
     * Per RFC 5280, the validity period for a certificate is the period of time
     * from not_before_time through not_after_time, inclusive.
     * Corresponds to 'not_before_time' + 'lifetime' - 1 second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 6;</code>
     */
    private $not_after_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1\Subject $subject
     *           Contains distinguished name fields such as the common name, location and
     *           / organization.
     *     @type \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames $subject_alt_name
     *           The subject alternative name fields.
     *     @type string $hex_serial_number
     *           The serial number encoded in lowercase hexadecimal.
     *     @type \Google\Protobuf\Duration $lifetime
     *           For convenience, the actual lifetime of an issued certificate.
     *     @type \Google\Protobuf\Timestamp $not_before_time
     *           The time at which the certificate becomes valid.
     *     @type \Google\Protobuf\Timestamp $not_after_time
     *           The time after which the certificate is expired.
     *           Per RFC 5280, the validity period for a certificate is the period of time
     *           from not_before_time through not_after_time, inclusive.
     *           Corresponds to 'not_before_time' + 'lifetime' - 1 second.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Contains distinguished name fields such as the common name, location and
     * / organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\Subject|null
     */
    public function getSubject()
    {
        return $this->subject;
    }

    public function hasSubject()
    {
        return isset($this->subject);
    }

    public function clearSubject()
    {
        unset($this->subject);
    }

    /**
     * Contains distinguished name fields such as the common name, location and
     * / organization.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.Subject subject = 1;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\Subject $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\Subject::class);
        $this->subject = $var;

        return $this;
    }

    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2;</code>
     * @return \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames|null
     */
    public function getSubjectAltName()
    {
        return $this->subject_alt_name;
    }

    public function hasSubjectAltName()
    {
        return isset($this->subject_alt_name);
    }

    public function clearSubjectAltName()
    {
        unset($this->subject_alt_name);
    }

    /**
     * The subject alternative name fields.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1.SubjectAltNames subject_alt_name = 2;</code>
     * @param \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames $var
     * @return $this
     */
    public function setSubjectAltName($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1\SubjectAltNames::class);
        $this->subject_alt_name = $var;

        return $this;
    }

    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 3;</code>
     * @return string
     */
    public function getHexSerialNumber()
    {
        return $this->hex_serial_number;
    }

    /**
     * The serial number encoded in lowercase hexadecimal.
     *
     * Generated from protobuf field <code>string hex_serial_number = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHexSerialNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->hex_serial_number = $var;

        return $this;
    }

    /**
     * For convenience, the actual lifetime of an issued certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function hasLifetime()
    {
        return isset($this->lifetime);
    }

    public function clearLifetime()
    {
        unset($this->lifetime);
    }

    /**
     * For convenience, the actual lifetime of an issued certificate.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration lifetime = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->lifetime = $var;

        return $this;
    }

    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNotBeforeTime()
    {
        return $this->not_before_time;
    }

    public function hasNotBeforeTime()
    {
        return isset($this->not_before_time);
    }

    public function clearNotBeforeTime()
    {
        unset($this->not_before_time);
    }

    /**
     * The time at which the certificate becomes valid.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_before_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNotBeforeTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->not_before_time = $var;

        return $this;
    }

    /**
     * The time after which the certificate is expired.
     * Per RFC 5280, the validity period for a certificate is the period of time
     * from not_before_time through not_after_time, inclusive.
     * Corresponds to 'not_before_time' + 'lifetime' - 1 second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNotAfterTime()
    {
        return $this->not_after_time;
    }

    public function hasNotAfterTime()
    {
        return isset($this->not_after_time);
    }

    public function clearNotAfterTime()
    {
        unset($this->not_after_time);
    }

    /**
     * The time after which the certificate is expired.
     * Per RFC 5280, the validity period for a certificate is the period of time
     * from not_before_time through not_after_time, inclusive.
     * Corresponds to 'not_before_time' + 'lifetime' - 1 second.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp not_after_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNotAfterTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->not_after_time = $var;

        return $this;
    }

}


