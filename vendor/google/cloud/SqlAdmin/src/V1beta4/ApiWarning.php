<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Admin API warning message.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.ApiWarning</code>
 */
class ApiWarning extends \Google\Protobuf\Internal\Message
{
    /**
     * Code to uniquely identify the warning type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.ApiWarning.SqlApiWarningCode code = 1;</code>
     */
    private $code = 0;
    /**
     * The warning message.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    private $message = '';
    /**
     * The region name for REGION_UNREACHABLE warning.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     */
    private $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Code to uniquely identify the warning type.
     *     @type string $message
     *           The warning message.
     *     @type string $region
     *           The region name for REGION_UNREACHABLE warning.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Code to uniquely identify the warning type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.ApiWarning.SqlApiWarningCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Code to uniquely identify the warning type.
     *
     * Generated from protobuf field <code>.google.cloud.sql.v1beta4.ApiWarning.SqlApiWarningCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Sql\V1beta4\ApiWarning\SqlApiWarningCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * The warning message.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The warning message.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The region name for REGION_UNREACHABLE warning.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region name for REGION_UNREACHABLE warning.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

