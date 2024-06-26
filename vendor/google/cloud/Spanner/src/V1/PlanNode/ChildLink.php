<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Cloud\Spanner\V1\PlanNode;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata associated with a parent-child relationship appearing in a
 * [PlanNode][google.spanner.v1.PlanNode].
 *
 * Generated from protobuf message <code>google.spanner.v1.PlanNode.ChildLink</code>
 */
class ChildLink extends \Google\Protobuf\Internal\Message
{
    /**
     * The node to which the link points.
     *
     * Generated from protobuf field <code>int32 child_index = 1;</code>
     */
    private $child_index = 0;
    /**
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     *
     * Generated from protobuf field <code>string variable = 3;</code>
     */
    private $variable = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $child_index
     *           The node to which the link points.
     *     @type string $type
     *           The type of the link. For example, in Hash Joins this could be used to
     *           distinguish between the build child and the probe child, or in the case
     *           of the child being an output variable, to represent the tag associated
     *           with the output variable.
     *     @type string $variable
     *           Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     *           to an output variable of the parent node. The field carries the name of
     *           the output variable.
     *           For example, a `TableScan` operator that reads rows from a table will
     *           have child links to the `SCALAR` nodes representing the output variables
     *           created for each column that is read by the operator. The corresponding
     *           `variable` fields will be set to the variable names assigned to the
     *           columns.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * The node to which the link points.
     *
     * Generated from protobuf field <code>int32 child_index = 1;</code>
     * @return int
     */
    public function getChildIndex()
    {
        return $this->child_index;
    }

    /**
     * The node to which the link points.
     *
     * Generated from protobuf field <code>int32 child_index = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setChildIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->child_index = $var;

        return $this;
    }

    /**
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     *
     * Generated from protobuf field <code>string variable = 3;</code>
     * @return string
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     *
     * Generated from protobuf field <code>string variable = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVariable($var)
    {
        GPBUtil::checkString($var, True);
        $this->variable = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChildLink::class, \Google\Cloud\Spanner\V1\PlanNode_ChildLink::class);

