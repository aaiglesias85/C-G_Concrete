<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data that will be profiled.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DataProfileLocation</code>
 */
class DataProfileLocation extends \Google\Protobuf\Internal\Message
{
    protected $location;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $organization_id
     *           The ID of an organization to scan.
     *     @type int|string $folder_id
     *           The ID of the Folder within an organization to scan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of an organization to scan.
     *
     * Generated from protobuf field <code>int64 organization_id = 1;</code>
     * @return int|string
     */
    public function getOrganizationId()
    {
        return $this->readOneof(1);
    }

    public function hasOrganizationId()
    {
        return $this->hasOneof(1);
    }

    /**
     * The ID of an organization to scan.
     *
     * Generated from protobuf field <code>int64 organization_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The ID of the Folder within an organization to scan.
     *
     * Generated from protobuf field <code>int64 folder_id = 2;</code>
     * @return int|string
     */
    public function getFolderId()
    {
        return $this->readOneof(2);
    }

    public function hasFolderId()
    {
        return $this->hasOneof(2);
    }

    /**
     * The ID of the Folder within an organization to scan.
     *
     * Generated from protobuf field <code>int64 folder_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFolderId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->whichOneof("location");
    }

}

