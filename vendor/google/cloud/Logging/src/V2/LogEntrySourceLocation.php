<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/log_entry.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information about the source code location that produced the log
 * entry.
 *
 * Generated from protobuf message <code>google.logging.v2.LogEntrySourceLocation</code>
 */
class LogEntrySourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $file = '';
    /**
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $line = 0;
    /**
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $function = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file
     *           Optional. Source file name. Depending on the runtime environment, this
     *           might be a simple name or a fully-qualified name.
     *     @type int|string $line
     *           Optional. Line within the source file. 1-based; 0 indicates no line number
     *           available.
     *     @type string $function
     *           Optional. Human-readable name of the function or method being invoked, with
     *           optional context such as the class or package name. This information may be
     *           used in contexts such as the logs viewer, where a file and line number are
     *           less meaningful. The format can vary by language. For example:
     *           `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     *           (Python).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LogEntry::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Optional. Source file name. Depending on the runtime environment, this
     * might be a simple name or a fully-qualified name.
     *
     * Generated from protobuf field <code>string file = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

    /**
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Optional. Line within the source file. 1-based; 0 indicates no line number
     * available.
     *
     * Generated from protobuf field <code>int64 line = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt64($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Optional. Human-readable name of the function or method being invoked, with
     * optional context such as the class or package name. This information may be
     * used in contexts such as the logs viewer, where a file and line number are
     * less meaningful. The format can vary by language. For example:
     * `qual.if.ied.Class.method` (Java), `dir/package.func` (Go), `function`
     * (Python).
     *
     * Generated from protobuf field <code>string function = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->function = $var;

        return $this;
    }

}

