<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/table_spec.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Table view specification.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ViewSpec</code>
 */
class ViewSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The query that defines the table view.
     *
     * Generated from protobuf field <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $view_query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $view_query
     *           Output only. The query that defines the table view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\TableSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The query that defines the table view.
     *
     * Generated from protobuf field <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getViewQuery()
    {
        return $this->view_query;
    }

    /**
     * Output only. The query that defines the table view.
     *
     * Generated from protobuf field <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setViewQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->view_query = $var;

        return $this;
    }

}

