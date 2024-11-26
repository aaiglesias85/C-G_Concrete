<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_service.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListBudgets
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.ListBudgetsRequest</code>
 */
class ListBudgetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of billing account to list budgets under. Values
     * are of the form `billingAccounts/{billingAccountId}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of budgets to return per page.
     * The default and maximum value are 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The value returned by the last `ListBudgetsResponse` which
     * indicates that this is a continuation of a prior `ListBudgets` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of billing account to list budgets under. Values
     *           are of the form `billingAccounts/{billingAccountId}`.
     *     @type int $page_size
     *           Optional. The maximum number of budgets to return per page.
     *           The default and maximum value are 100.
     *     @type string $page_token
     *           Optional. The value returned by the last `ListBudgetsResponse` which
     *           indicates that this is a continuation of a prior `ListBudgets` call,
     *           and that the system should return the next page of data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of billing account to list budgets under. Values
     * are of the form `billingAccounts/{billingAccountId}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of billing account to list budgets under. Values
     * are of the form `billingAccounts/{billingAccountId}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of budgets to return per page.
     * The default and maximum value are 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of budgets to return per page.
     * The default and maximum value are 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The value returned by the last `ListBudgetsResponse` which
     * indicates that this is a continuation of a prior `ListBudgets` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The value returned by the last `ListBudgetsResponse` which
     * indicates that this is a continuation of a prior `ListBudgets` call,
     * and that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

