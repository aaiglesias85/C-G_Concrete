<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.SqlInstancesListRequest</code>
 */
class SqlInstancesListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * A filter expression that filters resources listed in the response.
     * The expression is in the form of field:value. For example,
     * 'instanceType:CLOUD_SQL_INSTANCE'. Fields can be nested as needed as per
     * their JSON representation, such as 'settings.userLabels.auto_start:true'.
     * Multiple filter queries are space-separated. For example.
     * 'state:RUNNABLE instanceType:CLOUD_SQL_INSTANCE'. By default, each
     * expression is an AND expression. However, you can include AND and OR
     * expressions explicitly.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     */
    private $filter = '';
    /**
     * The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>uint32 max_results = 2;</code>
     */
    private $max_results = 0;
    /**
     * A previously-returned page token representing part of the larger set of
     * results to view.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Project ID of the project for which to list Cloud SQL instances.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     */
    private $project = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filter
     *           A filter expression that filters resources listed in the response.
     *           The expression is in the form of field:value. For example,
     *           'instanceType:CLOUD_SQL_INSTANCE'. Fields can be nested as needed as per
     *           their JSON representation, such as 'settings.userLabels.auto_start:true'.
     *           Multiple filter queries are space-separated. For example.
     *           'state:RUNNABLE instanceType:CLOUD_SQL_INSTANCE'. By default, each
     *           expression is an AND expression. However, you can include AND and OR
     *           expressions explicitly.
     *     @type int $max_results
     *           The maximum number of results to return per response.
     *     @type string $page_token
     *           A previously-returned page token representing part of the larger set of
     *           results to view.
     *     @type string $project
     *           Project ID of the project for which to list Cloud SQL instances.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSql::initOnce();
        parent::__construct($data);
    }

    /**
     * A filter expression that filters resources listed in the response.
     * The expression is in the form of field:value. For example,
     * 'instanceType:CLOUD_SQL_INSTANCE'. Fields can be nested as needed as per
     * their JSON representation, such as 'settings.userLabels.auto_start:true'.
     * Multiple filter queries are space-separated. For example.
     * 'state:RUNNABLE instanceType:CLOUD_SQL_INSTANCE'. By default, each
     * expression is an AND expression. However, you can include AND and OR
     * expressions explicitly.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter expression that filters resources listed in the response.
     * The expression is in the form of field:value. For example,
     * 'instanceType:CLOUD_SQL_INSTANCE'. Fields can be nested as needed as per
     * their JSON representation, such as 'settings.userLabels.auto_start:true'.
     * Multiple filter queries are space-separated. For example.
     * 'state:RUNNABLE instanceType:CLOUD_SQL_INSTANCE'. By default, each
     * expression is an AND expression. However, you can include AND and OR
     * expressions explicitly.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>uint32 max_results = 2;</code>
     * @return int
     */
    public function getMaxResults()
    {
        return $this->max_results;
    }

    /**
     * The maximum number of results to return per response.
     *
     * Generated from protobuf field <code>uint32 max_results = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxResults($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_results = $var;

        return $this;
    }

    /**
     * A previously-returned page token representing part of the larger set of
     * results to view.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A previously-returned page token representing part of the larger set of
     * results to view.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Project ID of the project for which to list Cloud SQL instances.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project for which to list Cloud SQL instances.
     *
     * Generated from protobuf field <code>string project = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

}

