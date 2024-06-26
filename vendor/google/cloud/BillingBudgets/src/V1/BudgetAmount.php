<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The budgeted amount for each usage period.
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.BudgetAmount</code>
 */
class BudgetAmount extends \Google\Protobuf\Internal\Message
{
    protected $budget_amount;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Money $specified_amount
     *           A specified amount to use as the budget.
     *           `currency_code` is optional. If specified when creating a budget, it must
     *           match the currency of the billing account. If specified when updating a
     *           budget, it must match the currency_code of the existing budget.
     *           The `currency_code` is provided on output.
     *     @type \Google\Cloud\Billing\Budgets\V1\LastPeriodAmount $last_period_amount
     *           Use the last period's actual spend as the budget for the present period.
     *           LastPeriodAmount can only be set when the budget's time period is a
     *           [Filter.calendar_period][google.cloud.billing.budgets.v1.Filter.calendar_period].
     *           It cannot be set in combination with
     *           [Filter.custom_period][google.cloud.billing.budgets.v1.Filter.custom_period].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

    /**
     * A specified amount to use as the budget.
     * `currency_code` is optional. If specified when creating a budget, it must
     * match the currency of the billing account. If specified when updating a
     * budget, it must match the currency_code of the existing budget.
     * The `currency_code` is provided on output.
     *
     * Generated from protobuf field <code>.google.type.Money specified_amount = 1;</code>
     * @return \Google\Type\Money|null
     */
    public function getSpecifiedAmount()
    {
        return $this->readOneof(1);
    }

    public function hasSpecifiedAmount()
    {
        return $this->hasOneof(1);
    }

    /**
     * A specified amount to use as the budget.
     * `currency_code` is optional. If specified when creating a budget, it must
     * match the currency of the billing account. If specified when updating a
     * budget, it must match the currency_code of the existing budget.
     * The `currency_code` is provided on output.
     *
     * Generated from protobuf field <code>.google.type.Money specified_amount = 1;</code>
     * @param \Google\Type\Money $var
     * @return $this
     */
    public function setSpecifiedAmount($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Money::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Use the last period's actual spend as the budget for the present period.
     * LastPeriodAmount can only be set when the budget's time period is a
     * [Filter.calendar_period][google.cloud.billing.budgets.v1.Filter.calendar_period].
     * It cannot be set in combination with
     * [Filter.custom_period][google.cloud.billing.budgets.v1.Filter.custom_period].
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.LastPeriodAmount last_period_amount = 2;</code>
     * @return \Google\Cloud\Billing\Budgets\V1\LastPeriodAmount|null
     */
    public function getLastPeriodAmount()
    {
        return $this->readOneof(2);
    }

    public function hasLastPeriodAmount()
    {
        return $this->hasOneof(2);
    }

    /**
     * Use the last period's actual spend as the budget for the present period.
     * LastPeriodAmount can only be set when the budget's time period is a
     * [Filter.calendar_period][google.cloud.billing.budgets.v1.Filter.calendar_period].
     * It cannot be set in combination with
     * [Filter.custom_period][google.cloud.billing.budgets.v1.Filter.custom_period].
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.LastPeriodAmount last_period_amount = 2;</code>
     * @param \Google\Cloud\Billing\Budgets\V1\LastPeriodAmount $var
     * @return $this
     */
    public function setLastPeriodAmount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\Budgets\V1\LastPeriodAmount::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getBudgetAmount()
    {
        return $this->whichOneof("budget_amount");
    }

}

