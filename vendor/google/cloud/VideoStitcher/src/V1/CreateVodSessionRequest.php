<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.createVodSession
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CreateVodSessionRequest</code>
 */
class CreateVodSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location in which the VOD session should be created, in the
     * form of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Parameters for creating a session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodSession vod_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vod_session = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location in which the VOD session should be created, in the
     *           form of `projects/{project_number}/locations/{location}`.
     *     @type \Google\Cloud\Video\Stitcher\V1\VodSession $vod_session
     *           Required. Parameters for creating a session.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location in which the VOD session should be created, in the
     * form of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location in which the VOD session should be created, in the
     * form of `projects/{project_number}/locations/{location}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Parameters for creating a session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodSession vod_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\VodSession|null
     */
    public function getVodSession()
    {
        return $this->vod_session;
    }

    public function hasVodSession()
    {
        return isset($this->vod_session);
    }

    public function clearVodSession()
    {
        unset($this->vod_session);
    }

    /**
     * Required. Parameters for creating a session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.VodSession vod_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\VodSession $var
     * @return $this
     */
    public function setVodSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\VodSession::class);
        $this->vod_session = $var;

        return $this;
    }

}

