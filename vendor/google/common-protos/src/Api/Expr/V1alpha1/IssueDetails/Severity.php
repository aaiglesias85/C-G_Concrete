<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/conformance_service.proto

namespace Google\Api\Expr\V1alpha1\IssueDetails;

use UnexpectedValueException;

/**
 * Severities of issues.
 *
 * Protobuf type <code>google.api.expr.v1alpha1.IssueDetails.Severity</code>
 */
class Severity
{
    /**
     * An unspecified severity.
     *
     * Generated from protobuf enum <code>SEVERITY_UNSPECIFIED = 0;</code>
     */
    const SEVERITY_UNSPECIFIED = 0;
    /**
     * Deprecation issue for statements and method that may no longer be
     * supported or maintained.
     *
     * Generated from protobuf enum <code>DEPRECATION = 1;</code>
     */
    const DEPRECATION = 1;
    /**
     * Warnings such as: unused variables.
     *
     * Generated from protobuf enum <code>WARNING = 2;</code>
     */
    const WARNING = 2;
    /**
     * Errors such as: unmatched curly braces or variable redefinition.
     *
     * Generated from protobuf enum <code>ERROR = 3;</code>
     */
    const ERROR = 3;

    private static $valueToName = [
        self::SEVERITY_UNSPECIFIED => 'SEVERITY_UNSPECIFIED',
        self::DEPRECATION => 'DEPRECATION',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Severity::class, \Google\Api\Expr\V1alpha1\IssueDetails_Severity::class);

