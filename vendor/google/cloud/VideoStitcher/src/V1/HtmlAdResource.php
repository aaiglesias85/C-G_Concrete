<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/companions.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for an HTML ad resource.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.HtmlAdResource</code>
 */
class HtmlAdResource extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTML to display for the ad resource.
     *
     * Generated from protobuf field <code>string html_source = 1;</code>
     */
    private $html_source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $html_source
     *           The HTML to display for the ad resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\Companions::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTML to display for the ad resource.
     *
     * Generated from protobuf field <code>string html_source = 1;</code>
     * @return string
     */
    public function getHtmlSource()
    {
        return $this->html_source;
    }

    /**
     * The HTML to display for the ad resource.
     *
     * Generated from protobuf field <code>string html_source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHtmlSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->html_source = $var;

        return $this;
    }

}

