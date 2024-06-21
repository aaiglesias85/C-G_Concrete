<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/admin/v1/migration.proto

namespace Google\Cloud\Datastore\Admin\V1\MigrationProgressEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details for the `REDIRECT_WRITES` step.
 *
 * Generated from protobuf message <code>google.datastore.admin.v1.MigrationProgressEvent.RedirectWritesStepDetails</code>
 */
class RedirectWritesStepDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Ths concurrency mode for this database.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     */
    private $concurrency_mode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $concurrency_mode
     *           Ths concurrency mode for this database.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\Admin\V1\Migration::initOnce();
        parent::__construct($data);
    }

    /**
     * Ths concurrency mode for this database.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     * @return int
     */
    public function getConcurrencyMode()
    {
        return $this->concurrency_mode;
    }

    /**
     * Ths concurrency mode for this database.
     *
     * Generated from protobuf field <code>.google.datastore.admin.v1.MigrationProgressEvent.ConcurrencyMode concurrency_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConcurrencyMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\Admin\V1\MigrationProgressEvent\ConcurrencyMode::class);
        $this->concurrency_mode = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RedirectWritesStepDetails::class, \Google\Cloud\Datastore\Admin\V1\MigrationProgressEvent_RedirectWritesStepDetails::class);

