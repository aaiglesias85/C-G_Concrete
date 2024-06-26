<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\DataProfileAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * If set, the detailed data profiles will be persisted to the location
 * of your choice whenever updated.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileAction.Export</code>
 */
class Export extends \Google\Protobuf\Internal\Message
{
    /**
     * Store all table and column profiles in an existing table or a new table
     * in an existing dataset. Each re-generation will result in a new row in
     * BigQuery.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     */
    private $profile_table = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $profile_table
     *           Store all table and column profiles in an existing table or a new table
     *           in an existing dataset. Each re-generation will result in a new row in
     *           BigQuery.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Store all table and column profiles in an existing table or a new table
     * in an existing dataset. Each re-generation will result in a new row in
     * BigQuery.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getProfileTable()
    {
        return $this->profile_table;
    }

    public function hasProfileTable()
    {
        return isset($this->profile_table);
    }

    public function clearProfileTable()
    {
        unset($this->profile_table);
    }

    /**
     * Store all table and column profiles in an existing table or a new table
     * in an existing dataset. Each re-generation will result in a new row in
     * BigQuery.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable profile_table = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setProfileTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->profile_table = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Export::class, \Google\Cloud\Dlp\V2\DataProfileAction_Export::class);

