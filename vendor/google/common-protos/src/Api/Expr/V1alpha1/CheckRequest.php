<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/conformance_service.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the Check method.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.CheckRequest</code>
 */
class CheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parsed representation of the CEL program.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ParsedExpr parsed_expr = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parsed_expr = null;
    /**
     * Declarations of types for external variables and functions.
     * Required if program uses external variables or functions
     * not in the default environment.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl type_env = 2;</code>
     */
    private $type_env;
    /**
     * The protocol buffer context.  See "Name Resolution" in the
     * Language Definition.
     *
     * Generated from protobuf field <code>string container = 3;</code>
     */
    private $container = '';
    /**
     * If true, use only the declarations in [type_env][google.api.expr.v1alpha1.CheckRequest.type_env].  If false (default),
     * add declarations for the standard definitions to the type environment.  See
     * "Standard Definitions" in the Language Definition.
     *
     * Generated from protobuf field <code>bool no_std_env = 4;</code>
     */
    private $no_std_env = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1alpha1\ParsedExpr $parsed_expr
     *           Required. The parsed representation of the CEL program.
     *     @type \Google\Api\Expr\V1alpha1\Decl[]|\Google\Protobuf\Internal\RepeatedField $type_env
     *           Declarations of types for external variables and functions.
     *           Required if program uses external variables or functions
     *           not in the default environment.
     *     @type string $container
     *           The protocol buffer context.  See "Name Resolution" in the
     *           Language Definition.
     *     @type bool $no_std_env
     *           If true, use only the declarations in [type_env][google.api.expr.v1alpha1.CheckRequest.type_env].  If false (default),
     *           add declarations for the standard definitions to the type environment.  See
     *           "Standard Definitions" in the Language Definition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\ConformanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parsed representation of the CEL program.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ParsedExpr parsed_expr = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Api\Expr\V1alpha1\ParsedExpr
     */
    public function getParsedExpr()
    {
        return $this->parsed_expr;
    }

    /**
     * Required. The parsed representation of the CEL program.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.ParsedExpr parsed_expr = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Api\Expr\V1alpha1\ParsedExpr $var
     * @return $this
     */
    public function setParsedExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\ParsedExpr::class);
        $this->parsed_expr = $var;

        return $this;
    }

    /**
     * Declarations of types for external variables and functions.
     * Required if program uses external variables or functions
     * not in the default environment.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl type_env = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypeEnv()
    {
        return $this->type_env;
    }

    /**
     * Declarations of types for external variables and functions.
     * Required if program uses external variables or functions
     * not in the default environment.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Decl type_env = 2;</code>
     * @param \Google\Api\Expr\V1alpha1\Decl[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypeEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1alpha1\Decl::class);
        $this->type_env = $arr;

        return $this;
    }

    /**
     * The protocol buffer context.  See "Name Resolution" in the
     * Language Definition.
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The protocol buffer context.  See "Name Resolution" in the
     * Language Definition.
     *
     * Generated from protobuf field <code>string container = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->container = $var;

        return $this;
    }

    /**
     * If true, use only the declarations in [type_env][google.api.expr.v1alpha1.CheckRequest.type_env].  If false (default),
     * add declarations for the standard definitions to the type environment.  See
     * "Standard Definitions" in the Language Definition.
     *
     * Generated from protobuf field <code>bool no_std_env = 4;</code>
     * @return bool
     */
    public function getNoStdEnv()
    {
        return $this->no_std_env;
    }

    /**
     * If true, use only the declarations in [type_env][google.api.expr.v1alpha1.CheckRequest.type_env].  If false (default),
     * add declarations for the standard definitions to the type environment.  See
     * "Standard Definitions" in the Language Definition.
     *
     * Generated from protobuf field <code>bool no_std_env = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoStdEnv($var)
    {
        GPBUtil::checkBool($var);
        $this->no_std_env = $var;

        return $this;
    }

}

