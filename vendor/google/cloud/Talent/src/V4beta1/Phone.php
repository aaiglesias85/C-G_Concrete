<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a person's telephone number.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Phone</code>
 */
class Phone extends \Google\Protobuf\Internal\Message
{
    /**
     * The usage of the phone. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     */
    private $usage = 0;
    /**
     * The phone type. For example, LANDLINE, MOBILE, FAX.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Phone.PhoneType type = 2;</code>
     */
    private $type = 0;
    /**
     * Phone number.
     * Any phone formats are supported and only exact matches are performed on
     * searches. For example, if a phone number in profile is provided in the
     * format of "(xxx)xxx-xxxx", in profile searches the same phone format
     * has to be provided.
     * Number of characters allowed is 20.
     *
     * Generated from protobuf field <code>string number = 3;</code>
     */
    private $number = '';
    /**
     * When this number is available. Any descriptive string is expected.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string when_available = 4;</code>
     */
    private $when_available = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $usage
     *           The usage of the phone. For example, SCHOOL, WORK, PERSONAL.
     *     @type int $type
     *           The phone type. For example, LANDLINE, MOBILE, FAX.
     *     @type string $number
     *           Phone number.
     *           Any phone formats are supported and only exact matches are performed on
     *           searches. For example, if a phone number in profile is provided in the
     *           format of "(xxx)xxx-xxxx", in profile searches the same phone format
     *           has to be provided.
     *           Number of characters allowed is 20.
     *     @type string $when_available
     *           When this number is available. Any descriptive string is expected.
     *           Number of characters allowed is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * The usage of the phone. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @return int
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * The usage of the phone. For example, SCHOOL, WORK, PERSONAL.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.ContactInfoUsage usage = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\ContactInfoUsage::class);
        $this->usage = $var;

        return $this;
    }

    /**
     * The phone type. For example, LANDLINE, MOBILE, FAX.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Phone.PhoneType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The phone type. For example, LANDLINE, MOBILE, FAX.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Phone.PhoneType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Phone\PhoneType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Phone number.
     * Any phone formats are supported and only exact matches are performed on
     * searches. For example, if a phone number in profile is provided in the
     * format of "(xxx)xxx-xxxx", in profile searches the same phone format
     * has to be provided.
     * Number of characters allowed is 20.
     *
     * Generated from protobuf field <code>string number = 3;</code>
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Phone number.
     * Any phone formats are supported and only exact matches are performed on
     * searches. For example, if a phone number in profile is provided in the
     * format of "(xxx)xxx-xxxx", in profile searches the same phone format
     * has to be provided.
     * Number of characters allowed is 20.
     *
     * Generated from protobuf field <code>string number = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->number = $var;

        return $this;
    }

    /**
     * When this number is available. Any descriptive string is expected.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string when_available = 4;</code>
     * @return string
     */
    public function getWhenAvailable()
    {
        return $this->when_available;
    }

    /**
     * When this number is available. Any descriptive string is expected.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string when_available = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setWhenAvailable($var)
    {
        GPBUtil::checkString($var, True);
        $this->when_available = $var;

        return $this;
    }

}

