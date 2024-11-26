<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Read-only resource with the tag for sending data from a website to a
 * DataStream. Only present for web DataStream resources.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.GlobalSiteTag</code>
 */
class GlobalSiteTag extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name for this GlobalSiteTag resource.
     * Format: properties/{property_id}/dataStreams/{stream_id}/globalSiteTag
     * Example: "properties/123/dataStreams/456/globalSiteTag"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. JavaScript code snippet to be pasted as the first item into the head tag of
     * every webpage to measure.
     *
     * Generated from protobuf field <code>string snippet = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $snippet = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name for this GlobalSiteTag resource.
     *           Format: properties/{property_id}/dataStreams/{stream_id}/globalSiteTag
     *           Example: "properties/123/dataStreams/456/globalSiteTag"
     *     @type string $snippet
     *           Immutable. JavaScript code snippet to be pasted as the first item into the head tag of
     *           every webpage to measure.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name for this GlobalSiteTag resource.
     * Format: properties/{property_id}/dataStreams/{stream_id}/globalSiteTag
     * Example: "properties/123/dataStreams/456/globalSiteTag"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name for this GlobalSiteTag resource.
     * Format: properties/{property_id}/dataStreams/{stream_id}/globalSiteTag
     * Example: "properties/123/dataStreams/456/globalSiteTag"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. JavaScript code snippet to be pasted as the first item into the head tag of
     * every webpage to measure.
     *
     * Generated from protobuf field <code>string snippet = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getSnippet()
    {
        return $this->snippet;
    }

    /**
     * Immutable. JavaScript code snippet to be pasted as the first item into the head tag of
     * every webpage to measure.
     *
     * Generated from protobuf field <code>string snippet = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->snippet = $var;

        return $this;
    }

}

