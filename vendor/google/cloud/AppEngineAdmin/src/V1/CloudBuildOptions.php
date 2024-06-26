<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/deploy.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for the build operations performed as a part of the version
 * deployment. Only applicable for App Engine flexible environment when creating
 * a version using source code directly.
 *
 * Generated from protobuf message <code>google.appengine.v1.CloudBuildOptions</code>
 */
class CloudBuildOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the yaml file used in deployment, used to determine runtime
     * configuration details.
     * Required for flexible environment builds.
     * See https://cloud.google.com/appengine/docs/standard/python/config/appref
     * for more details.
     *
     * Generated from protobuf field <code>string app_yaml_path = 1;</code>
     */
    private $app_yaml_path = '';
    /**
     * The Cloud Build timeout used as part of any dependent builds performed by
     * version creation. Defaults to 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cloud_build_timeout = 2;</code>
     */
    private $cloud_build_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_yaml_path
     *           Path to the yaml file used in deployment, used to determine runtime
     *           configuration details.
     *           Required for flexible environment builds.
     *           See https://cloud.google.com/appengine/docs/standard/python/config/appref
     *           for more details.
     *     @type \Google\Protobuf\Duration $cloud_build_timeout
     *           The Cloud Build timeout used as part of any dependent builds performed by
     *           version creation. Defaults to 10 minutes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Deploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the yaml file used in deployment, used to determine runtime
     * configuration details.
     * Required for flexible environment builds.
     * See https://cloud.google.com/appengine/docs/standard/python/config/appref
     * for more details.
     *
     * Generated from protobuf field <code>string app_yaml_path = 1;</code>
     * @return string
     */
    public function getAppYamlPath()
    {
        return $this->app_yaml_path;
    }

    /**
     * Path to the yaml file used in deployment, used to determine runtime
     * configuration details.
     * Required for flexible environment builds.
     * See https://cloud.google.com/appengine/docs/standard/python/config/appref
     * for more details.
     *
     * Generated from protobuf field <code>string app_yaml_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppYamlPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_yaml_path = $var;

        return $this;
    }

    /**
     * The Cloud Build timeout used as part of any dependent builds performed by
     * version creation. Defaults to 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cloud_build_timeout = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCloudBuildTimeout()
    {
        return $this->cloud_build_timeout;
    }

    public function hasCloudBuildTimeout()
    {
        return isset($this->cloud_build_timeout);
    }

    public function clearCloudBuildTimeout()
    {
        unset($this->cloud_build_timeout);
    }

    /**
     * The Cloud Build timeout used as part of any dependent builds performed by
     * version creation. Defaults to 10 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration cloud_build_timeout = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCloudBuildTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->cloud_build_timeout = $var;

        return $this;
    }

}

