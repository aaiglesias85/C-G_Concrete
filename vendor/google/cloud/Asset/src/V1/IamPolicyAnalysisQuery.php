<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ## IAM policy analysis query message.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisQuery</code>
 */
class IamPolicyAnalysisQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scope = '';
    /**
     * Optional. Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_selector = null;
    /**
     * Optional. Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $identity_selector = null;
    /**
     * Optional. Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $access_selector = null;
    /**
     * Optional. The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $options = null;
    /**
     * Optional. The hypothetical context for IAM conditions evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ConditionContext condition_context = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $condition_context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scope
     *           Required. The relative name of the root asset. Only resources and IAM policies within
     *           the scope will be analyzed.
     *           This can only be an organization number (such as "organizations/123"), a
     *           folder number (such as "folders/123"), a project ID (such as
     *           "projects/my-project-id"), or a project number (such as "projects/12345").
     *           To know how to get organization id, visit [here
     *           ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     *           To know how to get folder or project id, visit [here
     *           ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector $resource_selector
     *           Optional. Specifies a resource for analysis.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector $identity_selector
     *           Optional. Specifies an identity for analysis.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector $access_selector
     *           Optional. Specifies roles or permissions for analysis. This is optional.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options $options
     *           Optional. The query options.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ConditionContext $condition_context
     *           Optional. The hypothetical context for IAM conditions evaluation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Required. The relative name of the root asset. Only resources and IAM policies within
     * the scope will be analyzed.
     * This can only be an organization number (such as "organizations/123"), a
     * folder number (such as "folders/123"), a project ID (such as
     * "projects/my-project-id"), or a project number (such as "projects/12345").
     * To know how to get organization id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).
     * To know how to get folder or project id, visit [here
     * ](https://cloud.google.com/resource-manager/docs/creating-managing-folders#viewing_or_listing_folders_and_projects).
     *
     * Generated from protobuf field <code>string scope = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope = $var;

        return $this;
    }

    /**
     * Optional. Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector|null
     */
    public function getResourceSelector()
    {
        return $this->resource_selector;
    }

    public function hasResourceSelector()
    {
        return isset($this->resource_selector);
    }

    public function clearResourceSelector()
    {
        unset($this->resource_selector);
    }

    /**
     * Optional. Specifies a resource for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ResourceSelector resource_selector = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector $var
     * @return $this
     */
    public function setResourceSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ResourceSelector::class);
        $this->resource_selector = $var;

        return $this;
    }

    /**
     * Optional. Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector|null
     */
    public function getIdentitySelector()
    {
        return $this->identity_selector;
    }

    public function hasIdentitySelector()
    {
        return isset($this->identity_selector);
    }

    public function clearIdentitySelector()
    {
        unset($this->identity_selector);
    }

    /**
     * Optional. Specifies an identity for analysis.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.IdentitySelector identity_selector = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector $var
     * @return $this
     */
    public function setIdentitySelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\IdentitySelector::class);
        $this->identity_selector = $var;

        return $this;
    }

    /**
     * Optional. Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector|null
     */
    public function getAccessSelector()
    {
        return $this->access_selector;
    }

    public function hasAccessSelector()
    {
        return isset($this->access_selector);
    }

    public function clearAccessSelector()
    {
        unset($this->access_selector);
    }

    /**
     * Optional. Specifies roles or permissions for analysis. This is optional.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.AccessSelector access_selector = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector $var
     * @return $this
     */
    public function setAccessSelector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\AccessSelector::class);
        $this->access_selector = $var;

        return $this;
    }

    /**
     * Optional. The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Optional. The query options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.Options options = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\Options::class);
        $this->options = $var;

        return $this;
    }

    /**
     * Optional. The hypothetical context for IAM conditions evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ConditionContext condition_context = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ConditionContext|null
     */
    public function getConditionContext()
    {
        return $this->condition_context;
    }

    public function hasConditionContext()
    {
        return isset($this->condition_context);
    }

    public function clearConditionContext()
    {
        unset($this->condition_context);
    }

    /**
     * Optional. The hypothetical context for IAM conditions evaluation.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery.ConditionContext condition_context = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ConditionContext $var
     * @return $this
     */
    public function setConditionContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery\ConditionContext::class);
        $this->condition_context = $var;

        return $this;
    }

}

