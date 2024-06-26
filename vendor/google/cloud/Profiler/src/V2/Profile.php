<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Cloud\Profiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Profile resource.
 *
 * Generated from protobuf message <code>google.devtools.cloudprofiler.v2.Profile</code>
 */
class Profile extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Opaque, server-assigned, unique ID for this profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Type of profile.
     * For offline mode, this must be specified when creating the profile. For
     * online mode it is assigned and returned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.ProfileType profile_type = 2;</code>
     */
    private $profile_type = 0;
    /**
     * Deployment this profile corresponds to.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Deployment deployment = 3;</code>
     */
    private $deployment = null;
    /**
     * Duration of the profiling session.
     * Input (for the offline mode) or output (for the online mode).
     * The field represents requested profiling duration. It may slightly differ
     * from the effective profiling duration, which is recorded in the profile
     * data, in case the profiling can't be stopped immediately (e.g. in case
     * stopping the profiling is handled asynchronously).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     */
    private $duration = null;
    /**
     * Input only. Profile bytes, as a gzip compressed serialized proto, the
     * format is https://github.com/google/pprof/blob/master/proto/profile.proto.
     *
     * Generated from protobuf field <code>bytes profile_bytes = 5;</code>
     */
    private $profile_bytes = '';
    /**
     * Input only. Labels associated to this specific profile. These labels will
     * get merged with the deployment labels for the final data set.  See
     * documentation on deployment labels for validation rules and limits.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Opaque, server-assigned, unique ID for this profile.
     *     @type int $profile_type
     *           Type of profile.
     *           For offline mode, this must be specified when creating the profile. For
     *           online mode it is assigned and returned by the server.
     *     @type \Google\Cloud\Profiler\V2\Deployment $deployment
     *           Deployment this profile corresponds to.
     *     @type \Google\Protobuf\Duration $duration
     *           Duration of the profiling session.
     *           Input (for the offline mode) or output (for the online mode).
     *           The field represents requested profiling duration. It may slightly differ
     *           from the effective profiling duration, which is recorded in the profile
     *           data, in case the profiling can't be stopped immediately (e.g. in case
     *           stopping the profiling is handled asynchronously).
     *     @type string $profile_bytes
     *           Input only. Profile bytes, as a gzip compressed serialized proto, the
     *           format is https://github.com/google/pprof/blob/master/proto/profile.proto.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Input only. Labels associated to this specific profile. These labels will
     *           get merged with the deployment labels for the final data set.  See
     *           documentation on deployment labels for validation rules and limits.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Opaque, server-assigned, unique ID for this profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Opaque, server-assigned, unique ID for this profile.
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
     * Type of profile.
     * For offline mode, this must be specified when creating the profile. For
     * online mode it is assigned and returned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.ProfileType profile_type = 2;</code>
     * @return int
     */
    public function getProfileType()
    {
        return $this->profile_type;
    }

    /**
     * Type of profile.
     * For offline mode, this must be specified when creating the profile. For
     * online mode it is assigned and returned by the server.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.ProfileType profile_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setProfileType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Profiler\V2\ProfileType::class);
        $this->profile_type = $var;

        return $this;
    }

    /**
     * Deployment this profile corresponds to.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Deployment deployment = 3;</code>
     * @return \Google\Cloud\Profiler\V2\Deployment|null
     */
    public function getDeployment()
    {
        return $this->deployment;
    }

    public function hasDeployment()
    {
        return isset($this->deployment);
    }

    public function clearDeployment()
    {
        unset($this->deployment);
    }

    /**
     * Deployment this profile corresponds to.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Deployment deployment = 3;</code>
     * @param \Google\Cloud\Profiler\V2\Deployment $var
     * @return $this
     */
    public function setDeployment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Profiler\V2\Deployment::class);
        $this->deployment = $var;

        return $this;
    }

    /**
     * Duration of the profiling session.
     * Input (for the offline mode) or output (for the online mode).
     * The field represents requested profiling duration. It may slightly differ
     * from the effective profiling duration, which is recorded in the profile
     * data, in case the profiling can't be stopped immediately (e.g. in case
     * stopping the profiling is handled asynchronously).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration of the profiling session.
     * Input (for the offline mode) or output (for the online mode).
     * The field represents requested profiling duration. It may slightly differ
     * from the effective profiling duration, which is recorded in the profile
     * data, in case the profiling can't be stopped immediately (e.g. in case
     * stopping the profiling is handled asynchronously).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

    /**
     * Input only. Profile bytes, as a gzip compressed serialized proto, the
     * format is https://github.com/google/pprof/blob/master/proto/profile.proto.
     *
     * Generated from protobuf field <code>bytes profile_bytes = 5;</code>
     * @return string
     */
    public function getProfileBytes()
    {
        return $this->profile_bytes;
    }

    /**
     * Input only. Profile bytes, as a gzip compressed serialized proto, the
     * format is https://github.com/google/pprof/blob/master/proto/profile.proto.
     *
     * Generated from protobuf field <code>bytes profile_bytes = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProfileBytes($var)
    {
        GPBUtil::checkString($var, False);
        $this->profile_bytes = $var;

        return $this;
    }

    /**
     * Input only. Labels associated to this specific profile. These labels will
     * get merged with the deployment labels for the final data set.  See
     * documentation on deployment labels for validation rules and limits.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Input only. Labels associated to this specific profile. These labels will
     * get merged with the deployment labels for the final data set.  See
     * documentation on deployment labels for validation rules and limits.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

