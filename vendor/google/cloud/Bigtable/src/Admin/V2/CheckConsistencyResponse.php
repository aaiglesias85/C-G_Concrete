<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency][google.bigtable.admin.v2.BigtableTableAdmin.CheckConsistency]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CheckConsistencyResponse</code>
 */
class CheckConsistencyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     */
    private $consistent = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $consistent
     *           True only if the token is consistent. A token is consistent if replication
     *           has caught up with the restrictions specified in the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     * @return bool
     */
    public function getConsistent()
    {
        return $this->consistent;
    }

    /**
     * True only if the token is consistent. A token is consistent if replication
     * has caught up with the restrictions specified in the request.
     *
     * Generated from protobuf field <code>bool consistent = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setConsistent($var)
    {
        GPBUtil::checkBool($var);
        $this->consistent = $var;

        return $this;
    }

}

