<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/external_system.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of third party SIEM/SOAR fields within SCC.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ExternalSystem</code>
 */
class ExternalSystem extends \Google\Protobuf\Internal\Message
{
    /**
     * External System Name e.g. jira, demisto, etc.
     *  e.g.:
     *  `organizations/1234/sources/5678/findings/123456/externalSystems/jira`
     * `folders/1234/sources/5678/findings/123456/externalSystems/jira`
     * `projects/1234/sources/5678/findings/123456/externalSystems/jira`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     */
    private $assignees;
    /**
     * Identifier that's used to track the given finding in the external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     */
    private $external_uid = '';
    /**
     * Most recent status of the corresponding finding's ticket/tracker in the
     * external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     */
    private $status = '';
    /**
     * The most recent time when the corresponding finding's ticket/tracker was
     * updated in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     */
    private $external_system_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           External System Name e.g. jira, demisto, etc.
     *            e.g.:
     *            `organizations/1234/sources/5678/findings/123456/externalSystems/jira`
     *           `folders/1234/sources/5678/findings/123456/externalSystems/jira`
     *           `projects/1234/sources/5678/findings/123456/externalSystems/jira`
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $assignees
     *           References primary/secondary etc assignees in the external system.
     *     @type string $external_uid
     *           Identifier that's used to track the given finding in the external system.
     *     @type string $status
     *           Most recent status of the corresponding finding's ticket/tracker in the
     *           external system.
     *     @type \Google\Protobuf\Timestamp $external_system_update_time
     *           The most recent time when the corresponding finding's ticket/tracker was
     *           updated in the external system.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\ExternalSystem::initOnce();
        parent::__construct($data);
    }

    /**
     * External System Name e.g. jira, demisto, etc.
     *  e.g.:
     *  `organizations/1234/sources/5678/findings/123456/externalSystems/jira`
     * `folders/1234/sources/5678/findings/123456/externalSystems/jira`
     * `projects/1234/sources/5678/findings/123456/externalSystems/jira`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * External System Name e.g. jira, demisto, etc.
     *  e.g.:
     *  `organizations/1234/sources/5678/findings/123456/externalSystems/jira`
     * `folders/1234/sources/5678/findings/123456/externalSystems/jira`
     * `projects/1234/sources/5678/findings/123456/externalSystems/jira`
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
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssignees()
    {
        return $this->assignees;
    }

    /**
     * References primary/secondary etc assignees in the external system.
     *
     * Generated from protobuf field <code>repeated string assignees = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssignees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->assignees = $arr;

        return $this;
    }

    /**
     * Identifier that's used to track the given finding in the external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     * @return string
     */
    public function getExternalUid()
    {
        return $this->external_uid;
    }

    /**
     * Identifier that's used to track the given finding in the external system.
     *
     * Generated from protobuf field <code>string external_uid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setExternalUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_uid = $var;

        return $this;
    }

    /**
     * Most recent status of the corresponding finding's ticket/tracker in the
     * external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Most recent status of the corresponding finding's ticket/tracker in the
     * external system.
     *
     * Generated from protobuf field <code>string status = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * The most recent time when the corresponding finding's ticket/tracker was
     * updated in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExternalSystemUpdateTime()
    {
        return $this->external_system_update_time;
    }

    public function hasExternalSystemUpdateTime()
    {
        return isset($this->external_system_update_time);
    }

    public function clearExternalSystemUpdateTime()
    {
        unset($this->external_system_update_time);
    }

    /**
     * The most recent time when the corresponding finding's ticket/tracker was
     * updated in the external system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp external_system_update_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExternalSystemUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->external_system_update_time = $var;

        return $this;
    }

}

