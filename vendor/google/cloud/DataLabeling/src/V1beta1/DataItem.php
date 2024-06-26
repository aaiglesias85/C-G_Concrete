<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DataItem is a piece of data, without annotation. For example, an image.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.DataItem</code>
 */
class DataItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the data item, in format of:
     * projects/{project_id}/datasets/{dataset_id}/dataItems/{data_item_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\ImagePayload $image_payload
     *           The image payload, a container of the image bytes/uri.
     *     @type \Google\Cloud\DataLabeling\V1beta1\TextPayload $text_payload
     *           The text payload, a container of text content.
     *     @type \Google\Cloud\DataLabeling\V1beta1\VideoPayload $video_payload
     *           The video payload, a container of the video uri.
     *     @type string $name
     *           Output only. Name of the data item, in format of:
     *           projects/{project_id}/datasets/{dataset_id}/dataItems/{data_item_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * The image payload, a container of the image bytes/uri.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ImagePayload image_payload = 2;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\ImagePayload|null
     */
    public function getImagePayload()
    {
        return $this->readOneof(2);
    }

    public function hasImagePayload()
    {
        return $this->hasOneof(2);
    }

    /**
     * The image payload, a container of the image bytes/uri.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.ImagePayload image_payload = 2;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\ImagePayload $var
     * @return $this
     */
    public function setImagePayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\ImagePayload::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The text payload, a container of text content.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextPayload text_payload = 3;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\TextPayload|null
     */
    public function getTextPayload()
    {
        return $this->readOneof(3);
    }

    public function hasTextPayload()
    {
        return $this->hasOneof(3);
    }

    /**
     * The text payload, a container of text content.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.TextPayload text_payload = 3;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\TextPayload $var
     * @return $this
     */
    public function setTextPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\TextPayload::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * The video payload, a container of the video uri.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.VideoPayload video_payload = 4;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\VideoPayload|null
     */
    public function getVideoPayload()
    {
        return $this->readOneof(4);
    }

    public function hasVideoPayload()
    {
        return $this->hasOneof(4);
    }

    /**
     * The video payload, a container of the video uri.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.VideoPayload video_payload = 4;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\VideoPayload $var
     * @return $this
     */
    public function setVideoPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\VideoPayload::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Name of the data item, in format of:
     * projects/{project_id}/datasets/{dataset_id}/dataItems/{data_item_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the data item, in format of:
     * projects/{project_id}/datasets/{dataset_id}/dataItems/{data_item_id}
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
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

