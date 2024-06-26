<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
 *
 * Generated from protobuf message <code>google.datastore.v1.BeginTransactionResponse</code>
 */
class BeginTransactionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The transaction identifier (always present).
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     */
    private $transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction
     *           The transaction identifier (always present).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The transaction identifier (always present).
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * The transaction identifier (always present).
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

}

