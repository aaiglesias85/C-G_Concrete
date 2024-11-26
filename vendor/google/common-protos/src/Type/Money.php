<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/money.proto

namespace Google\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an amount of money with its currency type.
 *
 * Generated from protobuf message <code>google.type.Money</code>
 */
class Money extends \Google\Protobuf\Internal\Message
{
    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     */
    private $currency_code = '';
    /**
     * The whole units of the amount.
     * For example if `currencyCode` is `"USD"`, then 1 unit is one US dollar.
     *
     * Generated from protobuf field <code>int64 units = 2;</code>
     */
    private $units = 0;
    /**
     * Number of nano (10^-9) units of the amount.
     * The value must be between -999,999,999 and +999,999,999 inclusive.
     * If `units` is positive, `nanos` must be positive or zero.
     * If `units` is zero, `nanos` can be positive, zero, or negative.
     * If `units` is negative, `nanos` must be negative or zero.
     * For example $-1.75 is represented as `units`=-1 and `nanos`=-750,000,000.
     *
     * Generated from protobuf field <code>int32 nanos = 3;</code>
     */
    private $nanos = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $currency_code
     *           The 3-letter currency code defined in ISO 4217.
     *     @type int|string $units
     *           The whole units of the amount.
     *           For example if `currencyCode` is `"USD"`, then 1 unit is one US dollar.
     *     @type int $nanos
     *           Number of nano (10^-9) units of the amount.
     *           The value must be between -999,999,999 and +999,999,999 inclusive.
     *           If `units` is positive, `nanos` must be positive or zero.
     *           If `units` is zero, `nanos` can be positive, zero, or negative.
     *           If `units` is negative, `nanos` must be negative or zero.
     *           For example $-1.75 is represented as `units`=-1 and `nanos`=-750,000,000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Type\Money::initOnce();
        parent::__construct($data);
    }

    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The 3-letter currency code defined in ISO 4217.
     *
     * Generated from protobuf field <code>string currency_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * The whole units of the amount.
     * For example if `currencyCode` is `"USD"`, then 1 unit is one US dollar.
     *
     * Generated from protobuf field <code>int64 units = 2;</code>
     * @return int|string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * The whole units of the amount.
     * For example if `currencyCode` is `"USD"`, then 1 unit is one US dollar.
     *
     * Generated from protobuf field <code>int64 units = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUnits($var)
    {
        GPBUtil::checkInt64($var);
        $this->units = $var;

        return $this;
    }

    /**
     * Number of nano (10^-9) units of the amount.
     * The value must be between -999,999,999 and +999,999,999 inclusive.
     * If `units` is positive, `nanos` must be positive or zero.
     * If `units` is zero, `nanos` can be positive, zero, or negative.
     * If `units` is negative, `nanos` must be negative or zero.
     * For example $-1.75 is represented as `units`=-1 and `nanos`=-750,000,000.
     *
     * Generated from protobuf field <code>int32 nanos = 3;</code>
     * @return int
     */
    public function getNanos()
    {
        return $this->nanos;
    }

    /**
     * Number of nano (10^-9) units of the amount.
     * The value must be between -999,999,999 and +999,999,999 inclusive.
     * If `units` is positive, `nanos` must be positive or zero.
     * If `units` is zero, `nanos` can be positive, zero, or negative.
     * If `units` is negative, `nanos` must be negative or zero.
     * For example $-1.75 is represented as `units`=-1 and `nanos`=-750,000,000.
     *
     * Generated from protobuf field <code>int32 nanos = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;

        return $this;
    }

}

