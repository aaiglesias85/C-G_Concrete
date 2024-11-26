<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/analyze.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Content represents a user-visible notebook or a sql script
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Content</code>
 */
class Content extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the content, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/content/{content_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Output only. System generated globally unique ID for the content. This ID will be
     * different if the content is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Required. The path for the Content file, represented as directory structure.
     * Unique within a lake.
     * Limited to alphanumerics, hyphens, underscores, dots and slashes.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $path = '';
    /**
     * Output only. Content creation time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time when the content was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Optional. User defined labels for the content.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of the content.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    protected $data;
    protected $content;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the content, of the form:
     *           projects/{project_id}/locations/{location_id}/lakes/{lake_id}/content/{content_id}
     *     @type string $uid
     *           Output only. System generated globally unique ID for the content. This ID will be
     *           different if the content is deleted and re-created with the same name.
     *     @type string $path
     *           Required. The path for the Content file, represented as directory structure.
     *           Unique within a lake.
     *           Limited to alphanumerics, hyphens, underscores, dots and slashes.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Content creation time.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the content was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User defined labels for the content.
     *     @type string $description
     *           Optional. Description of the content.
     *     @type string $data_text
     *           Required. Content data in string format.
     *     @type \Google\Cloud\Dataplex\V1\Content\SqlScript $sql_script
     *           Sql Script related configurations.
     *     @type \Google\Cloud\Dataplex\V1\Content\Notebook $notebook
     *           Notebook related configurations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Analyze::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the content, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/content/{content_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the content, of the form:
     * projects/{project_id}/locations/{location_id}/lakes/{lake_id}/content/{content_id}
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
     * Output only. System generated globally unique ID for the content. This ID will be
     * different if the content is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the content. This ID will be
     * different if the content is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. The path for the Content file, represented as directory structure.
     * Unique within a lake.
     * Limited to alphanumerics, hyphens, underscores, dots and slashes.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Required. The path for the Content file, represented as directory structure.
     * Unique within a lake.
     * Limited to alphanumerics, hyphens, underscores, dots and slashes.
     *
     * Generated from protobuf field <code>string path = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Output only. Content creation time.
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
     * Output only. Content creation time.
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
     * Output only. The time when the content was last updated.
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
     * Output only. The time when the content was last updated.
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
     * Optional. User defined labels for the content.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User defined labels for the content.
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
     * Optional. Description of the content.
     *
     * Generated from protobuf field <code>string description = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the content.
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
     * Required. Content data in string format.
     *
     * Generated from protobuf field <code>string data_text = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataText()
    {
        return $this->readOneof(9);
    }

    public function hasDataText()
    {
        return $this->hasOneof(9);
    }

    /**
     * Required. Content data in string format.
     *
     * Generated from protobuf field <code>string data_text = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Sql Script related configurations.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Content.SqlScript sql_script = 100;</code>
     * @return \Google\Cloud\Dataplex\V1\Content\SqlScript|null
     */
    public function getSqlScript()
    {
        return $this->readOneof(100);
    }

    public function hasSqlScript()
    {
        return $this->hasOneof(100);
    }

    /**
     * Sql Script related configurations.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Content.SqlScript sql_script = 100;</code>
     * @param \Google\Cloud\Dataplex\V1\Content\SqlScript $var
     * @return $this
     */
    public function setSqlScript($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Content\SqlScript::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Notebook related configurations.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Content.Notebook notebook = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\Content\Notebook|null
     */
    public function getNotebook()
    {
        return $this->readOneof(101);
    }

    public function hasNotebook()
    {
        return $this->hasOneof(101);
    }

    /**
     * Notebook related configurations.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Content.Notebook notebook = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\Content\Notebook $var
     * @return $this
     */
    public function setNotebook($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Content\Notebook::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->whichOneof("content");
    }

}

