<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InspectConfig\FindingLimits;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Max findings configuration per infoType, per content item or long
 * running DlpJob.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InspectConfig.FindingLimits.InfoTypeLimit</code>
 */
class InfoTypeLimit extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that
     * are found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     */
    private $info_type = null;
    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     */
    private $max_findings = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\InfoType $info_type
     *           Type of information the findings limit applies to. Only one limit per
     *           info_type should be provided. If InfoTypeLimit does not have an
     *           info_type, the DLP API applies the limit against all info_types that
     *           are found but not specified in another InfoTypeLimit.
     *     @type int $max_findings
     *           Max findings limit for the given infoType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that
     * are found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @return \Google\Cloud\Dlp\V2\InfoType|null
     */
    public function getInfoType()
    {
        return $this->info_type;
    }

    public function hasInfoType()
    {
        return isset($this->info_type);
    }

    public function clearInfoType()
    {
        unset($this->info_type);
    }

    /**
     * Type of information the findings limit applies to. Only one limit per
     * info_type should be provided. If InfoTypeLimit does not have an
     * info_type, the DLP API applies the limit against all info_types that
     * are found but not specified in another InfoTypeLimit.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InfoType info_type = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType $var
     * @return $this
     */
    public function setInfoType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_type = $var;

        return $this;
    }

    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     * @return int
     */
    public function getMaxFindings()
    {
        return $this->max_findings;
    }

    /**
     * Max findings limit for the given infoType.
     *
     * Generated from protobuf field <code>int32 max_findings = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFindings($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_findings = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InfoTypeLimit::class, \Google\Cloud\Dlp\V2\InspectConfig_FindingLimits_InfoTypeLimit::class);

