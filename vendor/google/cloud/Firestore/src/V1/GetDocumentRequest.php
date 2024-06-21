<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/firestore.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Firestore.GetDocument][google.firestore.v1.Firestore.GetDocument].
 *
 * Generated from protobuf message <code>google.firestore.v1.GetDocumentRequest</code>
 */
class GetDocumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Document to get. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 2;</code>
     */
    private $mask = null;
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Document to get. In the format:
     *           `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *     @type \Google\Cloud\Firestore\V1\DocumentMask $mask
     *           The fields to return. If not set, returns all fields.
     *           If the document has a field that is not present in this mask, that field
     *           will not be returned in the response.
     *     @type string $transaction
     *           Reads the document in a transaction.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads the version of the document at the given time.
     *           This may not be older than 270 seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Firestore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Document to get. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Document to get. In the format:
     * `projects/{project_id}/databases/{database_id}/documents/{document_path}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 2;</code>
     * @return \Google\Cloud\Firestore\V1\DocumentMask|null
     */
    public function getMask()
    {
        return $this->mask;
    }

    public function hasMask()
    {
        return isset($this->mask);
    }

    public function clearMask()
    {
        unset($this->mask);
    }

    /**
     * The fields to return. If not set, returns all fields.
     * If the document has a field that is not present in this mask, that field
     * will not be returned in the response.
     *
     * Generated from protobuf field <code>.google.firestore.v1.DocumentMask mask = 2;</code>
     * @param \Google\Cloud\Firestore\V1\DocumentMask $var
     * @return $this
     */
    public function setMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\DocumentMask::class);
        $this->mask = $var;

        return $this;
    }

    /**
     * Reads the document in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 3;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(3);
    }

    public function hasTransaction()
    {
        return $this->hasOneof(3);
    }

    /**
     * Reads the document in a transaction.
     *
     * Generated from protobuf field <code>bytes transaction = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Reads the version of the document at the given time.
     * This may not be older than 270 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->readOneof(5);
    }

    public function hasReadTime()
    {
        return $this->hasOneof(5);
    }

    /**
     * Reads the version of the document at the given time.
     * This may not be older than 270 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

