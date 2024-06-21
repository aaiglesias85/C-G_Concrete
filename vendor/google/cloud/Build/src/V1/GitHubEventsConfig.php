<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GitHubEventsConfig describes the configuration of a trigger that creates a
 * build whenever a GitHub event is received.
 * This message is experimental.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.GitHubEventsConfig</code>
 */
class GitHubEventsConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The installationID that emits the GitHub event.
     *
     * Generated from protobuf field <code>int64 installation_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $installation_id = 0;
    /**
     * Owner of the repository. For example: The owner for
     * https://github.com/googlecloudplatform/cloud-builders is
     * "googlecloudplatform".
     *
     * Generated from protobuf field <code>string owner = 6;</code>
     */
    private $owner = '';
    /**
     * Name of the repository. For example: The name for
     * https://github.com/googlecloudplatform/cloud-builders is "cloud-builders".
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    private $name = '';
    protected $event;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $installation_id
     *           The installationID that emits the GitHub event.
     *     @type string $owner
     *           Owner of the repository. For example: The owner for
     *           https://github.com/googlecloudplatform/cloud-builders is
     *           "googlecloudplatform".
     *     @type string $name
     *           Name of the repository. For example: The name for
     *           https://github.com/googlecloudplatform/cloud-builders is "cloud-builders".
     *     @type \Google\Cloud\Build\V1\PullRequestFilter $pull_request
     *           filter to match changes in pull requests.
     *     @type \Google\Cloud\Build\V1\PushFilter $push
     *           filter to match changes in refs like branches, tags.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The installationID that emits the GitHub event.
     *
     * Generated from protobuf field <code>int64 installation_id = 1 [deprecated = true];</code>
     * @return int|string
     * @deprecated
     */
    public function getInstallationId()
    {
        @trigger_error('installation_id is deprecated.', E_USER_DEPRECATED);
        return $this->installation_id;
    }

    /**
     * The installationID that emits the GitHub event.
     *
     * Generated from protobuf field <code>int64 installation_id = 1 [deprecated = true];</code>
     * @param int|string $var
     * @return $this
     * @deprecated
     */
    public function setInstallationId($var)
    {
        @trigger_error('installation_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkInt64($var);
        $this->installation_id = $var;

        return $this;
    }

    /**
     * Owner of the repository. For example: The owner for
     * https://github.com/googlecloudplatform/cloud-builders is
     * "googlecloudplatform".
     *
     * Generated from protobuf field <code>string owner = 6;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Owner of the repository. For example: The owner for
     * https://github.com/googlecloudplatform/cloud-builders is
     * "googlecloudplatform".
     *
     * Generated from protobuf field <code>string owner = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Name of the repository. For example: The name for
     * https://github.com/googlecloudplatform/cloud-builders is "cloud-builders".
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the repository. For example: The name for
     * https://github.com/googlecloudplatform/cloud-builders is "cloud-builders".
     *
     * Generated from protobuf field <code>string name = 7;</code>
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
     * filter to match changes in pull requests.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PullRequestFilter pull_request = 4;</code>
     * @return \Google\Cloud\Build\V1\PullRequestFilter|null
     */
    public function getPullRequest()
    {
        return $this->readOneof(4);
    }

    public function hasPullRequest()
    {
        return $this->hasOneof(4);
    }

    /**
     * filter to match changes in pull requests.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PullRequestFilter pull_request = 4;</code>
     * @param \Google\Cloud\Build\V1\PullRequestFilter $var
     * @return $this
     */
    public function setPullRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\PullRequestFilter::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * filter to match changes in refs like branches, tags.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PushFilter push = 5;</code>
     * @return \Google\Cloud\Build\V1\PushFilter|null
     */
    public function getPush()
    {
        return $this->readOneof(5);
    }

    public function hasPush()
    {
        return $this->hasOneof(5);
    }

    /**
     * filter to match changes in refs like branches, tags.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PushFilter push = 5;</code>
     * @param \Google\Cloud\Build\V1\PushFilter $var
     * @return $this
     */
    public function setPush($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\PushFilter::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->whichOneof("event");
    }

}

