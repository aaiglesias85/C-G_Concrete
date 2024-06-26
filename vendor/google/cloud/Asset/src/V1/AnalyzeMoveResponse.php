<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for resource move analysis.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeMoveResponse</code>
 */
class AnalyzeMoveResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of analyses returned from performing the intended resource move
     * analysis. The analysis is grouped by different Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.MoveAnalysis move_analysis = 1;</code>
     */
    private $move_analysis;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\MoveAnalysis[]|\Google\Protobuf\Internal\RepeatedField $move_analysis
     *           The list of analyses returned from performing the intended resource move
     *           analysis. The analysis is grouped by different Cloud services.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of analyses returned from performing the intended resource move
     * analysis. The analysis is grouped by different Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.MoveAnalysis move_analysis = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMoveAnalysis()
    {
        return $this->move_analysis;
    }

    /**
     * The list of analyses returned from performing the intended resource move
     * analysis. The analysis is grouped by different Cloud services.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.MoveAnalysis move_analysis = 1;</code>
     * @param \Google\Cloud\Asset\V1\MoveAnalysis[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMoveAnalysis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\MoveAnalysis::class);
        $this->move_analysis = $arr;

        return $this;
    }

}

