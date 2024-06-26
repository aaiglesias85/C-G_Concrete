<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1\TransactionOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options specific to read / write transactions.
 *
 * Generated from protobuf message <code>google.datastore.v1.TransactionOptions.ReadWrite</code>
 */
class ReadWrite extends \Google\Protobuf\Internal\Message
{
    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     */
    private $previous_transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $previous_transaction
     *           The transaction identifier of the transaction being retried.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     * @return string
     */
    public function getPreviousTransaction()
    {
        return $this->previous_transaction;
    }

    /**
     * The transaction identifier of the transaction being retried.
     *
     * Generated from protobuf field <code>bytes previous_transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->previous_transaction = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadWrite::class, \Google\Cloud\Datastore\V1\TransactionOptions_ReadWrite::class);

