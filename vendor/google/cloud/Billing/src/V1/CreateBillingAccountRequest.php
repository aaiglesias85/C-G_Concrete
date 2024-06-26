<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace Google\Cloud\Billing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `CreateBillingAccount`.
 *
 * Generated from protobuf message <code>google.cloud.billing.v1.CreateBillingAccountRequest</code>
 */
class CreateBillingAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The billing account resource to create.
     * Currently CreateBillingAccount only supports subaccount creation, so
     * any created billing accounts must be under a provided master billing
     * account.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.BillingAccount billing_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $billing_account = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Billing\V1\BillingAccount $billing_account
     *           Required. The billing account resource to create.
     *           Currently CreateBillingAccount only supports subaccount creation, so
     *           any created billing accounts must be under a provided master billing
     *           account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\V1\CloudBilling::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The billing account resource to create.
     * Currently CreateBillingAccount only supports subaccount creation, so
     * any created billing accounts must be under a provided master billing
     * account.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.BillingAccount billing_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Billing\V1\BillingAccount|null
     */
    public function getBillingAccount()
    {
        return $this->billing_account;
    }

    public function hasBillingAccount()
    {
        return isset($this->billing_account);
    }

    public function clearBillingAccount()
    {
        unset($this->billing_account);
    }

    /**
     * Required. The billing account resource to create.
     * Currently CreateBillingAccount only supports subaccount creation, so
     * any created billing accounts must be under a provided master billing
     * account.
     *
     * Generated from protobuf field <code>.google.cloud.billing.v1.BillingAccount billing_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Billing\V1\BillingAccount $var
     * @return $this
     */
    public function setBillingAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\V1\BillingAccount::class);
        $this->billing_account = $var;

        return $this;
    }

}

