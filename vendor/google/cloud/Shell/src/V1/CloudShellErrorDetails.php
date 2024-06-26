<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/shell/v1/cloudshell.proto

namespace Google\Cloud\Shell\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud-shell specific information that will be included as details in failure
 * responses.
 *
 * Generated from protobuf message <code>google.cloud.shell.v1.CloudShellErrorDetails</code>
 */
class CloudShellErrorDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Code indicating the specific error the occurred.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.CloudShellErrorDetails.CloudShellErrorCode code = 1;</code>
     */
    private $code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Code indicating the specific error the occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Shell\V1\Cloudshell::initOnce();
        parent::__construct($data);
    }

    /**
     * Code indicating the specific error the occurred.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.CloudShellErrorDetails.CloudShellErrorCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Code indicating the specific error the occurred.
     *
     * Generated from protobuf field <code>.google.cloud.shell.v1.CloudShellErrorDetails.CloudShellErrorCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Shell\V1\CloudShellErrorDetails\CloudShellErrorCode::class);
        $this->code = $var;

        return $this;
    }

}

