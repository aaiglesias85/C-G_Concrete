<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A lake is a centralized repository for managing enterprise data across the
 * organization distributed across many cloud projects, and stored in a variety
 * of storage services such as Google Cloud Storage and BigQuery. The resources
 * attached to a lake are referred to as managed resources. Data within these
 * managed resources can be structured or unstructured. A lake provides data
 * admins with tools to organize, secure and manage their data at scale, and
 * provides data scientists and data engineers an integrated experience to
 * easily search, discover, analyze and transform data and associated metadata.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Lake</code>
 */
class Lake extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the lake, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Output only. System generated globally unique ID for the lake. This ID will be
     * different if the lake is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The time when the lake was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the lake was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. User-defined labels for the lake.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of the lake.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. Current state of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Service account associated with this lake. This service account must be
     * authorized to access or operate on resources managed by the lake.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_account = '';
    /**
     * Optional. Settings to manage lake and Dataproc Metastore service instance
     * association.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.Metastore metastore = 102 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metastore = null;
    /**
     * Output only. Aggregated status of the underlying assets of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AssetStatus asset_status = 103 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $asset_status = null;
    /**
     * Output only. Metastore status of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.MetastoreStatus metastore_status = 104 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $metastore_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the lake, of the form:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}`.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the lake. This ID will be
     *           different if the lake is deleted and re-created with the same name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the lake was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the lake was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the lake.
     *     @type string $description
     *           Optional. Description of the lake.
     *     @type int $state
     *           Output only. Current state of the lake.
     *     @type string $service_account
     *           Output only. Service account associated with this lake. This service account must be
     *           authorized to access or operate on resources managed by the lake.
     *     @type \Google\Cloud\Dataplex\V1\Lake\Metastore $metastore
     *           Optional. Settings to manage lake and Dataproc Metastore service instance
     *           association.
     *     @type \Google\Cloud\Dataplex\V1\AssetStatus $asset_status
     *           Output only. Aggregated status of the underlying assets of the lake.
     *     @type \Google\Cloud\Dataplex\V1\Lake\MetastoreStatus $metastore_status
     *           Output only. Metastore status of the lake.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the lake, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the lake, of the form:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. System generated globally unique ID for the lake. This ID will be
     * different if the lake is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the lake. This ID will be
     * different if the lake is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the lake was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the lake was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the lake was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the lake was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the lake.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the lake.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Description of the lake.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the lake.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Output only. Current state of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Service account associated with this lake. This service account must be
     * authorized to access or operate on resources managed by the lake.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Output only. Service account associated with this lake. This service account must be
     * authorized to access or operate on resources managed by the lake.
     *
     * Generated from protobuf field <code>string service_account = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. Settings to manage lake and Dataproc Metastore service instance
     * association.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.Metastore metastore = 102 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\Lake\Metastore|null
     */
    public function getMetastore()
    {
        return $this->metastore;
    }

    public function hasMetastore()
    {
        return isset($this->metastore);
    }

    public function clearMetastore()
    {
        unset($this->metastore);
    }

    /**
     * Optional. Settings to manage lake and Dataproc Metastore service instance
     * association.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.Metastore metastore = 102 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\Lake\Metastore $var
     * @return $this
     */
    public function setMetastore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Lake\Metastore::class);
        $this->metastore = $var;

        return $this;
    }

    /**
     * Output only. Aggregated status of the underlying assets of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AssetStatus asset_status = 103 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\AssetStatus|null
     */
    public function getAssetStatus()
    {
        return $this->asset_status;
    }

    public function hasAssetStatus()
    {
        return isset($this->asset_status);
    }

    public function clearAssetStatus()
    {
        unset($this->asset_status);
    }

    /**
     * Output only. Aggregated status of the underlying assets of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AssetStatus asset_status = 103 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\AssetStatus $var
     * @return $this
     */
    public function setAssetStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AssetStatus::class);
        $this->asset_status = $var;

        return $this;
    }

    /**
     * Output only. Metastore status of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.MetastoreStatus metastore_status = 104 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\Lake\MetastoreStatus|null
     */
    public function getMetastoreStatus()
    {
        return $this->metastore_status;
    }

    public function hasMetastoreStatus()
    {
        return isset($this->metastore_status);
    }

    public function clearMetastoreStatus()
    {
        unset($this->metastore_status);
    }

    /**
     * Output only. Metastore status of the lake.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Lake.MetastoreStatus metastore_status = 104 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\Lake\MetastoreStatus $var
     * @return $this
     */
    public function setMetastoreStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Lake\MetastoreStatus::class);
        $this->metastore_status = $var;

        return $this;
    }

}

