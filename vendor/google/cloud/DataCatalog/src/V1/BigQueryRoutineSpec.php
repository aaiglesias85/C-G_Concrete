<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/bigquery.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fields specific for BigQuery routines.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.BigQueryRoutineSpec</code>
 */
class BigQueryRoutineSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Paths of the imported libraries.
     *
     * Generated from protobuf field <code>repeated string imported_libraries = 1;</code>
     */
    private $imported_libraries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $imported_libraries
     *           Paths of the imported libraries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Bigquery::initOnce();
        parent::__construct($data);
    }

    /**
     * Paths of the imported libraries.
     *
     * Generated from protobuf field <code>repeated string imported_libraries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImportedLibraries()
    {
        return $this->imported_libraries;
    }

    /**
     * Paths of the imported libraries.
     *
     * Generated from protobuf field <code>repeated string imported_libraries = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImportedLibraries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->imported_libraries = $arr;

        return $this;
    }

}

