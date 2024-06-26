<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ThresholdRule contains a definition of a threshold which triggers
 * an alert (a notification of a threshold being crossed) to be sent when
 * spend goes above the specified amount.
 * Alerts are automatically e-mailed to users with the Billing Account
 * Administrator role or the Billing Account User role.
 * The thresholds here have no effect on notifications sent to anything
 * configured under `Budget.all_updates_rule`.
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.ThresholdRule</code>
 */
class ThresholdRule extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $threshold_percent = 0.0;
    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $spend_basis = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $threshold_percent
     *           Required. Send an alert when this threshold is exceeded.
     *           This is a 1.0-based percentage, so 0.5 = 50%.
     *           Validation: non-negative number.
     *     @type int $spend_basis
     *           Optional. The type of basis used to determine if spend has passed the
     *           threshold. Behavior defaults to CURRENT_SPEND if not set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return float
     */
    public function getThresholdPercent()
    {
        return $this->threshold_percent;
    }

    /**
     * Required. Send an alert when this threshold is exceeded.
     * This is a 1.0-based percentage, so 0.5 = 50%.
     * Validation: non-negative number.
     *
     * Generated from protobuf field <code>double threshold_percent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float $var
     * @return $this
     */
    public function setThresholdPercent($var)
    {
        GPBUtil::checkDouble($var);
        $this->threshold_percent = $var;

        return $this;
    }

    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSpendBasis()
    {
        return $this->spend_basis;
    }

    /**
     * Optional. The type of basis used to determine if spend has passed the
     * threshold. Behavior defaults to CURRENT_SPEND if not set.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.ThresholdRule.Basis spend_basis = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSpendBasis($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Billing\Budgets\V1\ThresholdRule\Basis::class);
        $this->spend_basis = $var;

        return $this;
    }

}

