<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Manifest configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Manifest</code>
 */
class Manifest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the generated file. The default is `"manifest"` with the
     * extension suffix corresponding to the `Manifest.type`.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     */
    private $file_name = '';
    /**
     * Required. Type of the manifest, can be "HLS" or "DASH".
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = 0;
    /**
     * Required. List of user given `MuxStream.key`s that should appear in this manifest.
     * When `Manifest.type` is `HLS`, a media manifest with name `MuxStream.key`
     * and `.m3u8` extension is generated for each element of the
     * `Manifest.mux_streams`.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mux_streams;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $file_name
     *           The name of the generated file. The default is `"manifest"` with the
     *           extension suffix corresponding to the `Manifest.type`.
     *     @type int $type
     *           Required. Type of the manifest, can be "HLS" or "DASH".
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $mux_streams
     *           Required. List of user given `MuxStream.key`s that should appear in this manifest.
     *           When `Manifest.type` is `HLS`, a media manifest with name `MuxStream.key`
     *           and `.m3u8` extension is generated for each element of the
     *           `Manifest.mux_streams`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the generated file. The default is `"manifest"` with the
     * extension suffix corresponding to the `Manifest.type`.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->file_name;
    }

    /**
     * The name of the generated file. The default is `"manifest"` with the
     * extension suffix corresponding to the `Manifest.type`.
     *
     * Generated from protobuf field <code>string file_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_name = $var;

        return $this;
    }

    /**
     * Required. Type of the manifest, can be "HLS" or "DASH".
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Type of the manifest, can be "HLS" or "DASH".
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Manifest.ManifestType type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Video\Transcoder\V1beta1\Manifest\ManifestType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. List of user given `MuxStream.key`s that should appear in this manifest.
     * When `Manifest.type` is `HLS`, a media manifest with name `MuxStream.key`
     * and `.m3u8` extension is generated for each element of the
     * `Manifest.mux_streams`.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMuxStreams()
    {
        return $this->mux_streams;
    }

    /**
     * Required. List of user given `MuxStream.key`s that should appear in this manifest.
     * When `Manifest.type` is `HLS`, a media manifest with name `MuxStream.key`
     * and `.m3u8` extension is generated for each element of the
     * `Manifest.mux_streams`.
     *
     * Generated from protobuf field <code>repeated string mux_streams = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMuxStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mux_streams = $arr;

        return $this;
    }

}

