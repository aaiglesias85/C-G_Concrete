<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/eval.proto

namespace Google\Api\Expr\V1alpha1\EvalState;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single evalution result.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.EvalState.Result</code>
 */
class Result extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the expression this result if for.
     *
     * Generated from protobuf field <code>int64 expr = 1;</code>
     */
    private $expr = 0;
    /**
     * The index in `values` of the resulting value.
     *
     * Generated from protobuf field <code>int64 value = 2;</code>
     */
    private $value = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $expr
     *           The id of the expression this result if for.
     *     @type int|string $value
     *           The index in `values` of the resulting value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\PBEval::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the expression this result if for.
     *
     * Generated from protobuf field <code>int64 expr = 1;</code>
     * @return int|string
     */
    public function getExpr()
    {
        return $this->expr;
    }

    /**
     * The id of the expression this result if for.
     *
     * Generated from protobuf field <code>int64 expr = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpr($var)
    {
        GPBUtil::checkInt64($var);
        $this->expr = $var;

        return $this;
    }

    /**
     * The index in `values` of the resulting value.
     *
     * Generated from protobuf field <code>int64 value = 2;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The index in `values` of the resulting value.
     *
     * Generated from protobuf field <code>int64 value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Result::class, \Google\Api\Expr\V1alpha1\EvalState_Result::class);

