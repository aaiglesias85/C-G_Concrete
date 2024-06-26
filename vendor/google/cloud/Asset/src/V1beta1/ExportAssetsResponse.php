<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/asset_service.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The export asset response. This message is returned by the
 * [google.longrunning.Operations.GetOperation][google.longrunning.Operations.GetOperation]
 * method in the returned
 * [google.longrunning.Operation.response][google.longrunning.Operation.response]
 * field.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.ExportAssetsResponse</code>
 */
class ExportAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     */
    private $read_time = null;
    /**
     * Output configuration indicating where the results were output to.
     * All results are in JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 2;</code>
     */
    private $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time the snapshot was taken.
     *     @type \Google\Cloud\Asset\V1beta1\OutputConfig $output_config
     *           Output configuration indicating where the results were output to.
     *           All results are in JSON format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * Output configuration indicating where the results were output to.
     * All results are in JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 2;</code>
     * @return \Google\Cloud\Asset\V1beta1\OutputConfig
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    /**
     * Output configuration indicating where the results were output to.
     * All results are in JSON format.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1beta1.OutputConfig output_config = 2;</code>
     * @param \Google\Cloud\Asset\V1beta1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1beta1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

