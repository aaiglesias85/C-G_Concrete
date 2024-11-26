<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Results of re-identifying a item.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ReidentifyContentResponse</code>
 */
class ReidentifyContentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The re-identified item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     */
    private $item = null;
    /**
     * An overview of the changes that were made to the `item`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationOverview overview = 2;</code>
     */
    private $overview = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\ContentItem $item
     *           The re-identified item.
     *     @type \Google\Cloud\Dlp\V2\TransformationOverview $overview
     *           An overview of the changes that were made to the `item`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The re-identified item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem|null
     */
    public function getItem()
    {
        return $this->item;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * The re-identified item.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * An overview of the changes that were made to the `item`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationOverview overview = 2;</code>
     * @return \Google\Cloud\Dlp\V2\TransformationOverview|null
     */
    public function getOverview()
    {
        return $this->overview;
    }

    public function hasOverview()
    {
        return isset($this->overview);
    }

    public function clearOverview()
    {
        unset($this->overview);
    }

    /**
     * An overview of the changes that were made to the `item`.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TransformationOverview overview = 2;</code>
     * @param \Google\Cloud\Dlp\V2\TransformationOverview $var
     * @return $this
     */
    public function setOverview($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\TransformationOverview::class);
        $this->overview = $var;

        return $this;
    }

}

