<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset identify in Google Cloud which contains its name, type and
 * ancestors. An asset can be any resource in the Google Cloud [resource
 * hierarchy](https://cloud.google.com/resource-manager/docs/cloud-platform-resource-hierarchy),
 * a resource outside the Google Cloud resource hierarchy (such as Google
 * Kubernetes Engine clusters and objects), or a policy (e.g. Cloud IAM policy).
 * See [Supported asset
 * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
 * for more information.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.RelatedAsset</code>
 */
class RelatedAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * The full name of the asset. Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`
     * See [Resource
     * names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     *
     * Generated from protobuf field <code>string asset = 1 [(.google.api.resource_reference) = {</code>
     */
    private $asset = '';
    /**
     * The type of the asset. Example: `compute.googleapis.com/Disk`
     * See [Supported asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * for more information.
     *
     * Generated from protobuf field <code>string asset_type = 2;</code>
     */
    private $asset_type = '';
    /**
     * The ancestors of an asset in Google Cloud [resource
     * hierarchy](https://cloud.google.com/resource-manager/docs/cloud-platform-resource-hierarchy),
     * represented as a list of relative resource names. An ancestry path starts
     * with the closest ancestor in the hierarchy and ends at root.
     * Example: `["projects/123456789", "folders/5432", "organizations/1234"]`
     *
     * Generated from protobuf field <code>repeated string ancestors = 3;</code>
     */
    private $ancestors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $asset
     *           The full name of the asset. Example:
     *           `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`
     *           See [Resource
     *           names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     *           for more information.
     *     @type string $asset_type
     *           The type of the asset. Example: `compute.googleapis.com/Disk`
     *           See [Supported asset
     *           types](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     *           for more information.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ancestors
     *           The ancestors of an asset in Google Cloud [resource
     *           hierarchy](https://cloud.google.com/resource-manager/docs/cloud-platform-resource-hierarchy),
     *           represented as a list of relative resource names. An ancestry path starts
     *           with the closest ancestor in the hierarchy and ends at root.
     *           Example: `["projects/123456789", "folders/5432", "organizations/1234"]`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The full name of the asset. Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`
     * See [Resource
     * names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     *
     * Generated from protobuf field <code>string asset = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * The full name of the asset. Example:
     * `//compute.googleapis.com/projects/my_project_123/zones/zone1/instances/instance1`
     * See [Resource
     * names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     *
     * Generated from protobuf field <code>string asset = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset = $var;

        return $this;
    }

    /**
     * The type of the asset. Example: `compute.googleapis.com/Disk`
     * See [Supported asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * for more information.
     *
     * Generated from protobuf field <code>string asset_type = 2;</code>
     * @return string
     */
    public function getAssetType()
    {
        return $this->asset_type;
    }

    /**
     * The type of the asset. Example: `compute.googleapis.com/Disk`
     * See [Supported asset
     * types](https://cloud.google.com/asset-inventory/docs/supported-asset-types)
     * for more information.
     *
     * Generated from protobuf field <code>string asset_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetType($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_type = $var;

        return $this;
    }

    /**
     * The ancestors of an asset in Google Cloud [resource
     * hierarchy](https://cloud.google.com/resource-manager/docs/cloud-platform-resource-hierarchy),
     * represented as a list of relative resource names. An ancestry path starts
     * with the closest ancestor in the hierarchy and ends at root.
     * Example: `["projects/123456789", "folders/5432", "organizations/1234"]`
     *
     * Generated from protobuf field <code>repeated string ancestors = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAncestors()
    {
        return $this->ancestors;
    }

    /**
     * The ancestors of an asset in Google Cloud [resource
     * hierarchy](https://cloud.google.com/resource-manager/docs/cloud-platform-resource-hierarchy),
     * represented as a list of relative resource names. An ancestry path starts
     * with the closest ancestor in the hierarchy and ends at root.
     * Example: `["projects/123456789", "folders/5432", "organizations/1234"]`
     *
     * Generated from protobuf field <code>repeated string ancestors = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAncestors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ancestors = $arr;

        return $this;
    }

}

