<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/app_yaml.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Executes a script to handle the request that matches the URL pattern.
 *
 * Generated from protobuf message <code>google.appengine.v1.ScriptHandler</code>
 */
class ScriptHandler extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script_path = 1;</code>
     */
    private $script_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $script_path
     *           Path to the script from the application root directory.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\AppYaml::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script_path = 1;</code>
     * @return string
     */
    public function getScriptPath()
    {
        return $this->script_path;
    }

    /**
     * Path to the script from the application root directory.
     *
     * Generated from protobuf field <code>string script_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScriptPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->script_path = $var;

        return $this;
    }

}

