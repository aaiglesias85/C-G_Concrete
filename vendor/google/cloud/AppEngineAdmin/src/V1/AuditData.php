<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/audit_data.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App Engine admin service audit log.
 *
 * Generated from protobuf message <code>google.appengine.v1.AuditData</code>
 */
class AuditData extends \Google\Protobuf\Internal\Message
{
    protected $method;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AppEngine\V1\UpdateServiceMethod $update_service
     *           Detailed information about UpdateService call.
     *     @type \Google\Cloud\AppEngine\V1\CreateVersionMethod $create_version
     *           Detailed information about CreateVersion call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AuditData::initOnce();
        parent::__construct($data);
    }

    /**
     * Detailed information about UpdateService call.
     *
     * Generated from protobuf field <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     * @return \Google\Cloud\AppEngine\V1\UpdateServiceMethod|null
     */
    public function getUpdateService()
    {
        return $this->readOneof(1);
    }

    public function hasUpdateService()
    {
        return $this->hasOneof(1);
    }

    /**
     * Detailed information about UpdateService call.
     *
     * Generated from protobuf field <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     * @param \Google\Cloud\AppEngine\V1\UpdateServiceMethod $var
     * @return $this
     */
    public function setUpdateService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\UpdateServiceMethod::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Detailed information about CreateVersion call.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     * @return \Google\Cloud\AppEngine\V1\CreateVersionMethod|null
     */
    public function getCreateVersion()
    {
        return $this->readOneof(2);
    }

    public function hasCreateVersion()
    {
        return $this->hasOneof(2);
    }

    /**
     * Detailed information about CreateVersion call.
     *
     * Generated from protobuf field <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     * @param \Google\Cloud\AppEngine\V1\CreateVersionMethod $var
     * @return $this
     */
    public function setCreateVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\CreateVersionMethod::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->whichOneof("method");
    }

}

