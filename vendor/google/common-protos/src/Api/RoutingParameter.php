<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/routing.proto

namespace Google\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A projection from an input message to the GRPC or REST header.
 *
 * Generated from protobuf message <code>google.api.RoutingParameter</code>
 */
class RoutingParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * A request field to extract the header key-value pair from.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * A pattern matching the key-value field. Optional.
     * If not specified, the whole field specified in the `field` field will be
     * taken as value, and its name used as key. If specified, it MUST contain
     * exactly one named segment (along with any number of unnamed segments) The
     * pattern will be matched over the field specified in the `field` field, then
     * if the match is successful:
     * - the name of the single named segment will be used as a header name,
     * - the match value of the segment will be used as a header value;
     * if the match is NOT successful, nothing will be sent.
     * Example:
     *               -- This is a field in the request message
     *              |   that the header value will be extracted from.
     *              |
     *              |                     -- This is the key name in the
     *              |                    |   routing header.
     *              V                    |
     *     field: "table_name"           v
     *     path_template: "projects/&#42;&#47;{table_location=instances/&#42;}/tables/&#42;"
     *                                                ^            ^
     *                                                |            |
     *       In the {} brackets is the pattern that --             |
     *       specifies what to extract from the                    |
     *       field as a value to be sent.                          |
     *                                                             |
     *      The string in the field must match the whole pattern --
     *      before brackets, inside brackets, after brackets.
     * When looking at this specific example, we can see that:
     * - A key-value pair with the key `table_location`
     *   and the value matching `instances/&#42;` should be added
     *   to the x-goog-request-params routing header.
     * - The value is extracted from the request message's `table_name` field
     *   if it matches the full pattern specified:
     *   `projects/&#42;&#47;instances/&#42;&#47;tables/&#42;`.
     * **NB:** If the `path_template` field is not provided, the key name is
     * equal to the field name, and the whole field should be sent as a value.
     * This makes the pattern for the field and the value functionally equivalent
     * to `**`, and the configuration
     *     {
     *       field: "table_name"
     *     }
     * is a functionally equivalent shorthand to:
     *     {
     *       field: "table_name"
     *       path_template: "{table_name=**}"
     *     }
     * See Example 1 for more details.
     *
     * Generated from protobuf field <code>string path_template = 2;</code>
     */
    protected $path_template = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           A request field to extract the header key-value pair from.
     *     @type string $path_template
     *           A pattern matching the key-value field. Optional.
     *           If not specified, the whole field specified in the `field` field will be
     *           taken as value, and its name used as key. If specified, it MUST contain
     *           exactly one named segment (along with any number of unnamed segments) The
     *           pattern will be matched over the field specified in the `field` field, then
     *           if the match is successful:
     *           - the name of the single named segment will be used as a header name,
     *           - the match value of the segment will be used as a header value;
     *           if the match is NOT successful, nothing will be sent.
     *           Example:
     *                         -- This is a field in the request message
     *                        |   that the header value will be extracted from.
     *                        |
     *                        |                     -- This is the key name in the
     *                        |                    |   routing header.
     *                        V                    |
     *               field: "table_name"           v
     *               path_template: "projects/&#42;&#47;{table_location=instances/&#42;}/tables/&#42;"
     *                                                          ^            ^
     *                                                          |            |
     *                 In the {} brackets is the pattern that --             |
     *                 specifies what to extract from the                    |
     *                 field as a value to be sent.                          |
     *                                                                       |
     *                The string in the field must match the whole pattern --
     *                before brackets, inside brackets, after brackets.
     *           When looking at this specific example, we can see that:
     *           - A key-value pair with the key `table_location`
     *             and the value matching `instances/&#42;` should be added
     *             to the x-goog-request-params routing header.
     *           - The value is extracted from the request message's `table_name` field
     *             if it matches the full pattern specified:
     *             `projects/&#42;&#47;instances/&#42;&#47;tables/&#42;`.
     *           **NB:** If the `path_template` field is not provided, the key name is
     *           equal to the field name, and the whole field should be sent as a value.
     *           This makes the pattern for the field and the value functionally equivalent
     *           to `**`, and the configuration
     *               {
     *                 field: "table_name"
     *               }
     *           is a functionally equivalent shorthand to:
     *               {
     *                 field: "table_name"
     *                 path_template: "{table_name=**}"
     *               }
     *           See Example 1 for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Routing::initOnce();
        parent::__construct($data);
    }

    /**
     * A request field to extract the header key-value pair from.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * A request field to extract the header key-value pair from.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * A pattern matching the key-value field. Optional.
     * If not specified, the whole field specified in the `field` field will be
     * taken as value, and its name used as key. If specified, it MUST contain
     * exactly one named segment (along with any number of unnamed segments) The
     * pattern will be matched over the field specified in the `field` field, then
     * if the match is successful:
     * - the name of the single named segment will be used as a header name,
     * - the match value of the segment will be used as a header value;
     * if the match is NOT successful, nothing will be sent.
     * Example:
     *               -- This is a field in the request message
     *              |   that the header value will be extracted from.
     *              |
     *              |                     -- This is the key name in the
     *              |                    |   routing header.
     *              V                    |
     *     field: "table_name"           v
     *     path_template: "projects/&#42;&#47;{table_location=instances/&#42;}/tables/&#42;"
     *                                                ^            ^
     *                                                |            |
     *       In the {} brackets is the pattern that --             |
     *       specifies what to extract from the                    |
     *       field as a value to be sent.                          |
     *                                                             |
     *      The string in the field must match the whole pattern --
     *      before brackets, inside brackets, after brackets.
     * When looking at this specific example, we can see that:
     * - A key-value pair with the key `table_location`
     *   and the value matching `instances/&#42;` should be added
     *   to the x-goog-request-params routing header.
     * - The value is extracted from the request message's `table_name` field
     *   if it matches the full pattern specified:
     *   `projects/&#42;&#47;instances/&#42;&#47;tables/&#42;`.
     * **NB:** If the `path_template` field is not provided, the key name is
     * equal to the field name, and the whole field should be sent as a value.
     * This makes the pattern for the field and the value functionally equivalent
     * to `**`, and the configuration
     *     {
     *       field: "table_name"
     *     }
     * is a functionally equivalent shorthand to:
     *     {
     *       field: "table_name"
     *       path_template: "{table_name=**}"
     *     }
     * See Example 1 for more details.
     *
     * Generated from protobuf field <code>string path_template = 2;</code>
     * @return string
     */
    public function getPathTemplate()
    {
        return $this->path_template;
    }

    /**
     * A pattern matching the key-value field. Optional.
     * If not specified, the whole field specified in the `field` field will be
     * taken as value, and its name used as key. If specified, it MUST contain
     * exactly one named segment (along with any number of unnamed segments) The
     * pattern will be matched over the field specified in the `field` field, then
     * if the match is successful:
     * - the name of the single named segment will be used as a header name,
     * - the match value of the segment will be used as a header value;
     * if the match is NOT successful, nothing will be sent.
     * Example:
     *               -- This is a field in the request message
     *              |   that the header value will be extracted from.
     *              |
     *              |                     -- This is the key name in the
     *              |                    |   routing header.
     *              V                    |
     *     field: "table_name"           v
     *     path_template: "projects/&#42;&#47;{table_location=instances/&#42;}/tables/&#42;"
     *                                                ^            ^
     *                                                |            |
     *       In the {} brackets is the pattern that --             |
     *       specifies what to extract from the                    |
     *       field as a value to be sent.                          |
     *                                                             |
     *      The string in the field must match the whole pattern --
     *      before brackets, inside brackets, after brackets.
     * When looking at this specific example, we can see that:
     * - A key-value pair with the key `table_location`
     *   and the value matching `instances/&#42;` should be added
     *   to the x-goog-request-params routing header.
     * - The value is extracted from the request message's `table_name` field
     *   if it matches the full pattern specified:
     *   `projects/&#42;&#47;instances/&#42;&#47;tables/&#42;`.
     * **NB:** If the `path_template` field is not provided, the key name is
     * equal to the field name, and the whole field should be sent as a value.
     * This makes the pattern for the field and the value functionally equivalent
     * to `**`, and the configuration
     *     {
     *       field: "table_name"
     *     }
     * is a functionally equivalent shorthand to:
     *     {
     *       field: "table_name"
     *       path_template: "{table_name=**}"
     *     }
     * See Example 1 for more details.
     *
     * Generated from protobuf field <code>string path_template = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPathTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->path_template = $var;

        return $this;
    }

}

