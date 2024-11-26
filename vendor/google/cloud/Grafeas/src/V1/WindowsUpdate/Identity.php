<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/upgrade.proto

namespace Grafeas\V1\WindowsUpdate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The unique identifier of the update.
 *
 * Generated from protobuf message <code>grafeas.v1.WindowsUpdate.Identity</code>
 */
class Identity extends \Google\Protobuf\Internal\Message
{
    /**
     * The revision independent identifier of the update.
     *
     * Generated from protobuf field <code>string update_id = 1;</code>
     */
    private $update_id = '';
    /**
     * The revision number of the update.
     *
     * Generated from protobuf field <code>int32 revision = 2;</code>
     */
    private $revision = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $update_id
     *           The revision independent identifier of the update.
     *     @type int $revision
     *           The revision number of the update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Upgrade::initOnce();
        parent::__construct($data);
    }

    /**
     * The revision independent identifier of the update.
     *
     * Generated from protobuf field <code>string update_id = 1;</code>
     * @return string
     */
    public function getUpdateId()
    {
        return $this->update_id;
    }

    /**
     * The revision independent identifier of the update.
     *
     * Generated from protobuf field <code>string update_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->update_id = $var;

        return $this;
    }

    /**
     * The revision number of the update.
     *
     * Generated from protobuf field <code>int32 revision = 2;</code>
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * The revision number of the update.
     *
     * Generated from protobuf field <code>int32 revision = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkInt32($var);
        $this->revision = $var;

        return $this;
    }

}


