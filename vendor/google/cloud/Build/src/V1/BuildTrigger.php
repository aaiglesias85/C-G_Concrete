<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for an automated build in response to source repository
 * changes.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuildTrigger</code>
 */
class BuildTrigger extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Unique identifier of the trigger.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $id = '';
    /**
     * Human-readable description of this trigger.
     *
     * Generated from protobuf field <code>string description = 10;</code>
     */
    private $description = '';
    /**
     * User-assigned name of the trigger. Must be unique within the project.
     * Trigger names must meet the following requirements:
     * + They must contain only alphanumeric characters and dashes.
     * + They can be 1-64 characters long.
     * + They must begin and end with an alphanumeric character.
     *
     * Generated from protobuf field <code>string name = 21;</code>
     */
    private $name = '';
    /**
     * Tags for annotation of a `BuildTrigger`
     *
     * Generated from protobuf field <code>repeated string tags = 19;</code>
     */
    private $tags;
    /**
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * Mutually exclusive with `github`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     */
    private $trigger_template = null;
    /**
     * GitHubEventsConfig describes the configuration of a trigger that creates
     * a build whenever a GitHub event is received.
     * Mutually exclusive with `trigger_template`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitHubEventsConfig github = 13;</code>
     */
    private $github = null;
    /**
     * Optional. PubsubConfig describes the configuration of a trigger that
     * creates a build whenever a Pub/Sub message is published.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig pubsub_config = 29 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $pubsub_config = null;
    /**
     * Output only. Time when the trigger was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * If true, the trigger will never automatically execute a build.
     *
     * Generated from protobuf field <code>bool disabled = 9;</code>
     */
    private $disabled = false;
    /**
     * Substitutions for Build resource. The keys must match the following
     * regular expression: `^_[A-Z0-9_]+$`.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 11;</code>
     */
    private $substitutions;
    /**
     * ignored_files and included_files are file glob matches using
     * https://golang.org/pkg/path/filepath/#Match extended with support for "**".
     * If ignored_files and changed files are both empty, then they are
     * not used to determine whether or not to trigger a build.
     * If ignored_files is not empty, then we ignore any files that match
     * any of the ignored_file globs. If the change has no files that are
     * outside of the ignored_files globs, then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string ignored_files = 15;</code>
     */
    private $ignored_files;
    /**
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is empty, then as far as this filter is
     * concerned, we should trigger the build.
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is not empty, then we make sure that at
     * least one of those files matches a included_files glob. If not,
     * then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string included_files = 16;</code>
     */
    private $included_files;
    /**
     * Optional. A Common Expression Language string.
     *
     * Generated from protobuf field <code>string filter = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    protected $build_template;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Output only. Unique identifier of the trigger.
     *     @type string $description
     *           Human-readable description of this trigger.
     *     @type string $name
     *           User-assigned name of the trigger. Must be unique within the project.
     *           Trigger names must meet the following requirements:
     *           + They must contain only alphanumeric characters and dashes.
     *           + They can be 1-64 characters long.
     *           + They must begin and end with an alphanumeric character.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $tags
     *           Tags for annotation of a `BuildTrigger`
     *     @type \Google\Cloud\Build\V1\RepoSource $trigger_template
     *           Template describing the types of source changes to trigger a build.
     *           Branch and tag names in trigger templates are interpreted as regular
     *           expressions. Any branch or tag change that matches that regular expression
     *           will trigger a build.
     *           Mutually exclusive with `github`.
     *     @type \Google\Cloud\Build\V1\GitHubEventsConfig $github
     *           GitHubEventsConfig describes the configuration of a trigger that creates
     *           a build whenever a GitHub event is received.
     *           Mutually exclusive with `trigger_template`.
     *     @type \Google\Cloud\Build\V1\PubsubConfig $pubsub_config
     *           Optional. PubsubConfig describes the configuration of a trigger that
     *           creates a build whenever a Pub/Sub message is published.
     *     @type \Google\Cloud\Build\V1\Build $build
     *           Contents of the build template.
     *     @type string $filename
     *           Path, from the source root, to the build configuration file
     *           (i.e. cloudbuild.yaml).
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the trigger was created.
     *     @type bool $disabled
     *           If true, the trigger will never automatically execute a build.
     *     @type array|\Google\Protobuf\Internal\MapField $substitutions
     *           Substitutions for Build resource. The keys must match the following
     *           regular expression: `^_[A-Z0-9_]+$`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ignored_files
     *           ignored_files and included_files are file glob matches using
     *           https://golang.org/pkg/path/filepath/#Match extended with support for "**".
     *           If ignored_files and changed files are both empty, then they are
     *           not used to determine whether or not to trigger a build.
     *           If ignored_files is not empty, then we ignore any files that match
     *           any of the ignored_file globs. If the change has no files that are
     *           outside of the ignored_files globs, then we do not trigger a build.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $included_files
     *           If any of the files altered in the commit pass the ignored_files
     *           filter and included_files is empty, then as far as this filter is
     *           concerned, we should trigger the build.
     *           If any of the files altered in the commit pass the ignored_files
     *           filter and included_files is not empty, then we make sure that at
     *           least one of those files matches a included_files glob. If not,
     *           then we do not trigger a build.
     *     @type string $filter
     *           Optional. A Common Expression Language string.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Unique identifier of the trigger.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. Unique identifier of the trigger.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Human-readable description of this trigger.
     *
     * Generated from protobuf field <code>string description = 10;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of this trigger.
     *
     * Generated from protobuf field <code>string description = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * User-assigned name of the trigger. Must be unique within the project.
     * Trigger names must meet the following requirements:
     * + They must contain only alphanumeric characters and dashes.
     * + They can be 1-64 characters long.
     * + They must begin and end with an alphanumeric character.
     *
     * Generated from protobuf field <code>string name = 21;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * User-assigned name of the trigger. Must be unique within the project.
     * Trigger names must meet the following requirements:
     * + They must contain only alphanumeric characters and dashes.
     * + They can be 1-64 characters long.
     * + They must begin and end with an alphanumeric character.
     *
     * Generated from protobuf field <code>string name = 21;</code>
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
     * Tags for annotation of a `BuildTrigger`
     *
     * Generated from protobuf field <code>repeated string tags = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Tags for annotation of a `BuildTrigger`
     *
     * Generated from protobuf field <code>repeated string tags = 19;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

    /**
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * Mutually exclusive with `github`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     * @return \Google\Cloud\Build\V1\RepoSource|null
     */
    public function getTriggerTemplate()
    {
        return isset($this->trigger_template) ? $this->trigger_template : null;
    }

    public function hasTriggerTemplate()
    {
        return isset($this->trigger_template);
    }

    public function clearTriggerTemplate()
    {
        unset($this->trigger_template);
    }

    /**
     * Template describing the types of source changes to trigger a build.
     * Branch and tag names in trigger templates are interpreted as regular
     * expressions. Any branch or tag change that matches that regular expression
     * will trigger a build.
     * Mutually exclusive with `github`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource trigger_template = 7;</code>
     * @param \Google\Cloud\Build\V1\RepoSource $var
     * @return $this
     */
    public function setTriggerTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\RepoSource::class);
        $this->trigger_template = $var;

        return $this;
    }

    /**
     * GitHubEventsConfig describes the configuration of a trigger that creates
     * a build whenever a GitHub event is received.
     * Mutually exclusive with `trigger_template`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitHubEventsConfig github = 13;</code>
     * @return \Google\Cloud\Build\V1\GitHubEventsConfig|null
     */
    public function getGithub()
    {
        return isset($this->github) ? $this->github : null;
    }

    public function hasGithub()
    {
        return isset($this->github);
    }

    public function clearGithub()
    {
        unset($this->github);
    }

    /**
     * GitHubEventsConfig describes the configuration of a trigger that creates
     * a build whenever a GitHub event is received.
     * Mutually exclusive with `trigger_template`.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.GitHubEventsConfig github = 13;</code>
     * @param \Google\Cloud\Build\V1\GitHubEventsConfig $var
     * @return $this
     */
    public function setGithub($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\GitHubEventsConfig::class);
        $this->github = $var;

        return $this;
    }

    /**
     * Optional. PubsubConfig describes the configuration of a trigger that
     * creates a build whenever a Pub/Sub message is published.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig pubsub_config = 29 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Build\V1\PubsubConfig|null
     */
    public function getPubsubConfig()
    {
        return isset($this->pubsub_config) ? $this->pubsub_config : null;
    }

    public function hasPubsubConfig()
    {
        return isset($this->pubsub_config);
    }

    public function clearPubsubConfig()
    {
        unset($this->pubsub_config);
    }

    /**
     * Optional. PubsubConfig describes the configuration of a trigger that
     * creates a build whenever a Pub/Sub message is published.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.PubsubConfig pubsub_config = 29 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Build\V1\PubsubConfig $var
     * @return $this
     */
    public function setPubsubConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\PubsubConfig::class);
        $this->pubsub_config = $var;

        return $this;
    }

    /**
     * Contents of the build template.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 4;</code>
     * @return \Google\Cloud\Build\V1\Build|null
     */
    public function getBuild()
    {
        return $this->readOneof(4);
    }

    public function hasBuild()
    {
        return $this->hasOneof(4);
    }

    /**
     * Contents of the build template.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build build = 4;</code>
     * @param \Google\Cloud\Build\V1\Build $var
     * @return $this
     */
    public function setBuild($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\Build::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Path, from the source root, to the build configuration file
     * (i.e. cloudbuild.yaml).
     *
     * Generated from protobuf field <code>string filename = 8;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->readOneof(8);
    }

    public function hasFilename()
    {
        return $this->hasOneof(8);
    }

    /**
     * Path, from the source root, to the build configuration file
     * (i.e. cloudbuild.yaml).
     *
     * Generated from protobuf field <code>string filename = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Time when the trigger was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the trigger was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * If true, the trigger will never automatically execute a build.
     *
     * Generated from protobuf field <code>bool disabled = 9;</code>
     * @return bool
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * If true, the trigger will never automatically execute a build.
     *
     * Generated from protobuf field <code>bool disabled = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * Substitutions for Build resource. The keys must match the following
     * regular expression: `^_[A-Z0-9_]+$`.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSubstitutions()
    {
        return $this->substitutions;
    }

    /**
     * Substitutions for Build resource. The keys must match the following
     * regular expression: `^_[A-Z0-9_]+$`.
     *
     * Generated from protobuf field <code>map<string, string> substitutions = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSubstitutions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->substitutions = $arr;

        return $this;
    }

    /**
     * ignored_files and included_files are file glob matches using
     * https://golang.org/pkg/path/filepath/#Match extended with support for "**".
     * If ignored_files and changed files are both empty, then they are
     * not used to determine whether or not to trigger a build.
     * If ignored_files is not empty, then we ignore any files that match
     * any of the ignored_file globs. If the change has no files that are
     * outside of the ignored_files globs, then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string ignored_files = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIgnoredFiles()
    {
        return $this->ignored_files;
    }

    /**
     * ignored_files and included_files are file glob matches using
     * https://golang.org/pkg/path/filepath/#Match extended with support for "**".
     * If ignored_files and changed files are both empty, then they are
     * not used to determine whether or not to trigger a build.
     * If ignored_files is not empty, then we ignore any files that match
     * any of the ignored_file globs. If the change has no files that are
     * outside of the ignored_files globs, then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string ignored_files = 15;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIgnoredFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ignored_files = $arr;

        return $this;
    }

    /**
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is empty, then as far as this filter is
     * concerned, we should trigger the build.
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is not empty, then we make sure that at
     * least one of those files matches a included_files glob. If not,
     * then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string included_files = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludedFiles()
    {
        return $this->included_files;
    }

    /**
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is empty, then as far as this filter is
     * concerned, we should trigger the build.
     * If any of the files altered in the commit pass the ignored_files
     * filter and included_files is not empty, then we make sure that at
     * least one of those files matches a included_files glob. If not,
     * then we do not trigger a build.
     *
     * Generated from protobuf field <code>repeated string included_files = 16;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludedFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->included_files = $arr;

        return $this;
    }

    /**
     * Optional. A Common Expression Language string.
     *
     * Generated from protobuf field <code>string filter = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A Common Expression Language string.
     *
     * Generated from protobuf field <code>string filter = 30 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getBuildTemplate()
    {
        return $this->whichOneof("build_template");
    }

}

