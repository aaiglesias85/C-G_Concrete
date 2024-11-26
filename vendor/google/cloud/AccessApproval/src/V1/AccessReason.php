<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.AccessReason</code>
 */
class AccessReason extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of access justification.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessReason.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * More detail about certain reason types. See comments for each type above.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     */
    private $detail = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of access justification.
     *     @type string $detail
     *           More detail about certain reason types. See comments for each type above.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of access justification.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessReason.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of access justification.
     *
     * Generated from protobuf field <code>.google.cloud.accessapproval.v1.AccessReason.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AccessApproval\V1\AccessReason\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * More detail about certain reason types. See comments for each type above.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * More detail about certain reason types. See comments for each type above.
     *
     * Generated from protobuf field <code>string detail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDetail($var)
    {
        GPBUtil::checkString($var, True);
        $this->detail = $var;

        return $this;
    }

}

