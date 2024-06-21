<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/video_stitcher_service.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for VideoStitcherService.createLiveSession.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.CreateLiveSessionRequest</code>
 */
class CreateLiveSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location in which the live session should be created,
     * in the form of `projects/{project_number}/locations/{location}`.
     * Valid locations:
     * * `-` (Video Stitcher API will pick a location that is closest to the
     * caller.)
     * * `us-east1`
     * * `us-west1`
     * * `us-central1`
     * * `europe-west1`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Parameters for creating a live session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveSession live_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $live_session = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and location in which the live session should be created,
     *           in the form of `projects/{project_number}/locations/{location}`.
     *           Valid locations:
     *           * `-` (Video Stitcher API will pick a location that is closest to the
     *           caller.)
     *           * `us-east1`
     *           * `us-west1`
     *           * `us-central1`
     *           * `europe-west1`
     *     @type \Google\Cloud\Video\Stitcher\V1\LiveSession $live_session
     *           Required. Parameters for creating a live session.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VideoStitcherService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and location in which the live session should be created,
     * in the form of `projects/{project_number}/locations/{location}`.
     * Valid locations:
     * * `-` (Video Stitcher API will pick a location that is closest to the
     * caller.)
     * * `us-east1`
     * * `us-west1`
     * * `us-central1`
     * * `europe-west1`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location in which the live session should be created,
     * in the form of `projects/{project_number}/locations/{location}`.
     * Valid locations:
     * * `-` (Video Stitcher API will pick a location that is closest to the
     * caller.)
     * * `us-east1`
     * * `us-west1`
     * * `us-central1`
     * * `europe-west1`
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
     * Required. Parameters for creating a live session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveSession live_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Video\Stitcher\V1\LiveSession|null
     */
    public function getLiveSession()
    {
        return $this->live_session;
    }

    public function hasLiveSession()
    {
        return isset($this->live_session);
    }

    public function clearLiveSession()
    {
        unset($this->live_session);
    }

    /**
     * Required. Parameters for creating a live session.
     *
     * Generated from protobuf field <code>.google.cloud.video.stitcher.v1.LiveSession live_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Video\Stitcher\V1\LiveSession $var
     * @return $this
     */
    public function setLiveSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Stitcher\V1\LiveSession::class);
        $this->live_session = $var;

        return $this;
    }

}

