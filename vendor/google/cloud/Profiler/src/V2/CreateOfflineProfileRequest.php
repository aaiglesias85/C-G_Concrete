<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Cloud\Profiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CreateOfflineProfileRequest describes a profile resource offline creation
 * request. Profile field must be set.
 *
 * Generated from protobuf message <code>google.devtools.cloudprofiler.v2.CreateOfflineProfileRequest</code>
 */
class CreateOfflineProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Parent project to create the profile in.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Contents of the profile to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 2;</code>
     */
    private $profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Parent project to create the profile in.
     *     @type \Google\Cloud\Profiler\V2\Profile $profile
     *           Contents of the profile to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct($data);
    }

    /**
     * Parent project to create the profile in.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Parent project to create the profile in.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Contents of the profile to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 2;</code>
     * @return \Google\Cloud\Profiler\V2\Profile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Contents of the profile to create.
     *
     * Generated from protobuf field <code>.google.devtools.cloudprofiler.v2.Profile profile = 2;</code>
     * @param \Google\Cloud\Profiler\V2\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Profiler\V2\Profile::class);
        $this->profile = $var;

        return $this;
    }

}

