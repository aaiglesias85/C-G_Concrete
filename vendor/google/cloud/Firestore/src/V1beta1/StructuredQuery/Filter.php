<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/query.proto

namespace Google\Cloud\Firestore\V1beta1\StructuredQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A filter.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.StructuredQuery.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    protected $filter_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1beta1\StructuredQuery\CompositeFilter $composite_filter
     *           A composite filter.
     *     @type \Google\Cloud\Firestore\V1beta1\StructuredQuery\FieldFilter $field_filter
     *           A filter on a document field.
     *     @type \Google\Cloud\Firestore\V1beta1\StructuredQuery\UnaryFilter $unary_filter
     *           A filter that takes exactly one argument.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * A composite filter.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.CompositeFilter composite_filter = 1;</code>
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery\CompositeFilter
     */
    public function getCompositeFilter()
    {
        return $this->readOneof(1);
    }

    /**
     * A composite filter.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.CompositeFilter composite_filter = 1;</code>
     * @param \Google\Cloud\Firestore\V1beta1\StructuredQuery\CompositeFilter $var
     * @return $this
     */
    public function setCompositeFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\StructuredQuery_CompositeFilter::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A filter on a document field.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.FieldFilter field_filter = 2;</code>
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery\FieldFilter
     */
    public function getFieldFilter()
    {
        return $this->readOneof(2);
    }

    /**
     * A filter on a document field.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.FieldFilter field_filter = 2;</code>
     * @param \Google\Cloud\Firestore\V1beta1\StructuredQuery\FieldFilter $var
     * @return $this
     */
    public function setFieldFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldFilter::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A filter that takes exactly one argument.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.UnaryFilter unary_filter = 3;</code>
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery\UnaryFilter
     */
    public function getUnaryFilter()
    {
        return $this->readOneof(3);
    }

    /**
     * A filter that takes exactly one argument.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StructuredQuery.UnaryFilter unary_filter = 3;</code>
     * @param \Google\Cloud\Firestore\V1beta1\StructuredQuery\UnaryFilter $var
     * @return $this
     */
    public function setUnaryFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\StructuredQuery_UnaryFilter::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFilterType()
    {
        return $this->whichOneof("filter_type");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Filter::class, \Google\Cloud\Firestore\V1beta1\StructuredQuery_Filter::class);

