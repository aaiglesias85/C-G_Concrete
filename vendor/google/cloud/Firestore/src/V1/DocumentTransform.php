<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transformation of a document.
 *
 * Generated from protobuf message <code>google.firestore.v1.DocumentTransform</code>
 */
class DocumentTransform extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the document to transform.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     */
    private $document = '';
    /**
     * The list of transformations to apply to the fields of the document, in
     * order.
     * This must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.DocumentTransform.FieldTransform field_transforms = 2;</code>
     */
    private $field_transforms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $document
     *           The name of the document to transform.
     *     @type \Google\Cloud\Firestore\V1\DocumentTransform\FieldTransform[]|\Google\Protobuf\Internal\RepeatedField $field_transforms
     *           The list of transformations to apply to the fields of the document, in
     *           order.
     *           This must not be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the document to transform.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * The name of the document to transform.
     *
     * Generated from protobuf field <code>string document = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkString($var, True);
        $this->document = $var;

        return $this;
    }

    /**
     * The list of transformations to apply to the fields of the document, in
     * order.
     * This must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.DocumentTransform.FieldTransform field_transforms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldTransforms()
    {
        return $this->field_transforms;
    }

    /**
     * The list of transformations to apply to the fields of the document, in
     * order.
     * This must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.DocumentTransform.FieldTransform field_transforms = 2;</code>
     * @param \Google\Cloud\Firestore\V1\DocumentTransform\FieldTransform[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldTransforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\DocumentTransform\FieldTransform::class);
        $this->field_transforms = $arr;

        return $this;
    }

}

