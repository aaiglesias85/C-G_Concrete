<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/notification_config.proto

namespace Google\Cloud\SecurityCenter\V1\NotificationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The config for streaming-based notifications, which send each event as soon
 * as it is detected.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.NotificationConfig.StreamingConfig</code>
 */
class StreamingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Expression that defines the filter to apply across create/update events
     * of assets or findings as specified by the event type. The expression is a
     * list of zero or more restrictions combined via logical operators `AND`
     * and `OR`. Parentheses are supported, and `OR` has higher precedence than
     * `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     */
    private $filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filter
     *           Expression that defines the filter to apply across create/update events
     *           of assets or findings as specified by the event type. The expression is a
     *           list of zero or more restrictions combined via logical operators `AND`
     *           and `OR`. Parentheses are supported, and `OR` has higher precedence than
     *           `AND`.
     *           Restrictions have the form `<field> <operator> <value>` and may have a
     *           `-` character in front of them to indicate negation. The fields map to
     *           those defined in the corresponding resource.
     *           The supported operators are:
     *           * `=` for all value types.
     *           * `>`, `<`, `>=`, `<=` for integer values.
     *           * `:`, meaning substring matching, for strings.
     *           The supported value types are:
     *           * string literals in quotes.
     *           * integer literals without quotes.
     *           * boolean literals `true` and `false` without quotes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\NotificationConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Expression that defines the filter to apply across create/update events
     * of assets or findings as specified by the event type. The expression is a
     * list of zero or more restrictions combined via logical operators `AND`
     * and `OR`. Parentheses are supported, and `OR` has higher precedence than
     * `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Expression that defines the filter to apply across create/update events
     * of assets or findings as specified by the event type. The expression is a
     * list of zero or more restrictions combined via logical operators `AND`
     * and `OR`. Parentheses are supported, and `OR` has higher precedence than
     * `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a
     * `-` character in front of them to indicate negation. The fields map to
     * those defined in the corresponding resource.
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     *
     * Generated from protobuf field <code>string filter = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StreamingConfig::class, \Google\Cloud\SecurityCenter\V1\NotificationConfig_StreamingConfig::class);

