<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Export asset request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.ExportAssetsRequest</code>
 */
class ExportAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative name of the root asset. This can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id"), a project number (such as "projects/12345"), or
     * a folder number (such as "folders/123").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between 2018-10-02 UTC (inclusive) and the current time. If not specified,
     * the current time will be used. Due to delays in resource data collection
     * and indexing, there is a volatile window during which running the same
     * query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     */
    private $read_time = null;
    /**
     * A list of asset types of which to take a snapshot for. For example:
     * "google.compute.Disk". If specified, only matching assets will be returned.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/resource-manager/docs/cloud-asset-inventory/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     */
    private $asset_types;
    /**
     * Asset content type. If not specified, no content but the asset name will be
     * returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 4;</code>
     */
    private $content_type = 0;
    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative name of the root asset. This can only be an
     *           organization number (such as "organizations/123"), a project ID (such as
     *           "projects/my-project-id"), a project number (such as "projects/12345"), or
     *           a folder number (such as "folders/123").
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Timestamp to take an asset snapshot. This can only be set to a timestamp
     *           between 2018-10-02 UTC (inclusive) and the current time. If not specified,
     *           the current time will be used. Due to delays in resource data collection
     *           and indexing, there is a volatile window during which running the same
     *           query may get different results.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           A list of asset types of which to take a snapshot for. For example:
     *           "google.compute.Disk". If specified, only matching assets will be returned.
     *           See [Introduction to Cloud Asset
     *           Inventory](https://cloud.google.com/resource-manager/docs/cloud-asset-inventory/overview)
     *           for all supported asset types.
     *     @type int $content_type
     *           Asset content type. If not specified, no content but the asset name will be
     *           returned.
     *     @type \Google\Cloud\Asset\V1beta1\OutputConfig $output_config
     *           Required. Output configuration indicating where the results will be output
     *           to. All results will be in newline delimited JSON format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative name of the root asset. This can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id"), a project number (such as "projects/12345"), or
     * a folder number (such as "folders/123").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative name of the root asset. This can only be an
     * organization number (such as "organizations/123"), a project ID (such as
     * "projects/my-project-id"), a project number (such as "projects/12345"), or
     * a folder number (such as "folders/123").
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
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between 2018-10-02 UTC (inclusive) and the current time. If not specified,
     * the current time will be used. Due to delays in resource data collection
     * and indexing, there is a volatile window during which running the same
     * query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    /**
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between 2018-10-02 UTC (inclusive) and the current time. If not specified,
     * the current time will be used. Due to delays in resource data collection
     * and indexing, there is a volatile window during which running the same
     * query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * A list of asset types of which to take a snapshot for. For example:
     * "google.compute.Disk". If specified, only matching assets will be returned.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/resource-manager/docs/cloud-asset-inventory/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * A list of asset types of which to take a snapshot for. For example:
     * "google.compute.Disk". If specified, only matching assets will be returned.
     * See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/resource-manager/docs/cloud-asset-inventory/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * Asset content type. If not specified, no content but the asset name will be
     * returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 4;</code>
     * @return int
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Asset content type. If not specified, no content but the asset name will be
     * returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.ContentType content_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1beta1\ContentType::class);
        $this->content_type = $var;

        return $this;
    }

    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1beta1\OutputConfig
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    /**
     * Required. Output configuration indicating where the results will be output
     * to. All results will be in newline delimited JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1beta1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1beta1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

