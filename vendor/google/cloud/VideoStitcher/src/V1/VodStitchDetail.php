<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/stitch_details.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detailed information related to the interstitial of a VOD session.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.VodStitchDetail</code>
 */
class VodStitchDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the stitch detail in the specified VOD session, in the form of
     * `projects/{project}/locations/{location}/vodSessions/{vod_session_id}/vodStitchDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A list of ad processing details for the fetched ad playlist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdStitchDetail ad_stitch_details = 3;</code>
     */
    private $ad_stitch_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the stitch detail in the specified VOD session, in the form of
     *           `projects/{project}/locations/{location}/vodSessions/{vod_session_id}/vodStitchDetails/{id}`.
     *     @type \Google\Cloud\Video\Stitcher\V1\AdStitchDetail[]|\Google\Protobuf\Internal\RepeatedField $ad_stitch_details
     *           A list of ad processing details for the fetched ad playlist.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\StitchDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the stitch detail in the specified VOD session, in the form of
     * `projects/{project}/locations/{location}/vodSessions/{vod_session_id}/vodStitchDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the stitch detail in the specified VOD session, in the form of
     * `projects/{project}/locations/{location}/vodSessions/{vod_session_id}/vodStitchDetails/{id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * A list of ad processing details for the fetched ad playlist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdStitchDetail ad_stitch_details = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdStitchDetails()
    {
        return $this->ad_stitch_details;
    }

    /**
     * A list of ad processing details for the fetched ad playlist.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.stitcher.v1.AdStitchDetail ad_stitch_details = 3;</code>
     * @param \Google\Cloud\Video\Stitcher\V1\AdStitchDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdStitchDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Stitcher\V1\AdStitchDetail::class);
        $this->ad_stitch_details = $arr;

        return $this;
    }

}

