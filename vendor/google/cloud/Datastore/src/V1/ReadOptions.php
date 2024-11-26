<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The options shared by read requests.
 *
 * Generated from protobuf message <code>google.datastore.v1.ReadOptions</code>
 */
class ReadOptions extends \Google\Protobuf\Internal\Message
{
    protected $consistency_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $read_consistency
     *           The non-transactional read consistency to use.
     *           Cannot be set to `STRONG` for global queries.
     *     @type string $transaction
     *           The identifier of the transaction in which to read. A
     *           transaction identifier is returned by a call to
     *           [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads entities as they were at the given time. This may not be older
     *           than 270 seconds.  This value is only supported for Cloud Firestore in
     *           Datastore mode.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions.ReadConsistency read_consistency = 1;</code>
     * @return int
     */
    public function getReadConsistency()
    {
        return $this->readOneof(1);
    }

    public function hasReadConsistency()
    {
        return $this->hasOneof(1);
    }

    /**
     * The non-transactional read consistency to use.
     * Cannot be set to `STRONG` for global queries.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ReadOptions.ReadConsistency read_consistency = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReadConsistency($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1\ReadOptions\ReadConsistency::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(2);
    }

    public function hasTransaction()
    {
        return $this->hasOneof(2);
    }

    /**
     * The identifier of the transaction in which to read. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Reads entities as they were at the given time. This may not be older
     * than 270 seconds.  This value is only supported for Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(4);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(4);
    }

    /**
     * Reads entities as they were at the given time. This may not be older
     * than 270 seconds.  This value is only supported for Cloud Firestore in
     * Datastore mode.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencyType()
    {
        return $this->whichOneof("consistency_type");
    }

}

