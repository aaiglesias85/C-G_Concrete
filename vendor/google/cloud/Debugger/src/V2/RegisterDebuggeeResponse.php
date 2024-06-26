<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/controller.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for registering a debuggee.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.RegisterDebuggeeResponse</code>
 */
class RegisterDebuggeeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Debuggee resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fields).
     * If the field `is_disabled` is set to `true`, the agent should disable
     * itself by removing all breakpoints and detaching from the application.
     * It should however continue to poll `RegisterDebuggee` until reenabled.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Debuggee debuggee = 1;</code>
     */
    private $debuggee = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Debugger\V2\Debuggee $debuggee
     *           Debuggee resource.
     *           The field `id` is guaranteed to be set (in addition to the echoed fields).
     *           If the field `is_disabled` is set to `true`, the agent should disable
     *           itself by removing all breakpoints and detaching from the application.
     *           It should however continue to poll `RegisterDebuggee` until reenabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * Debuggee resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fields).
     * If the field `is_disabled` is set to `true`, the agent should disable
     * itself by removing all breakpoints and detaching from the application.
     * It should however continue to poll `RegisterDebuggee` until reenabled.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Debuggee debuggee = 1;</code>
     * @return \Google\Cloud\Debugger\V2\Debuggee|null
     */
    public function getDebuggee()
    {
        return $this->debuggee;
    }

    public function hasDebuggee()
    {
        return isset($this->debuggee);
    }

    public function clearDebuggee()
    {
        unset($this->debuggee);
    }

    /**
     * Debuggee resource.
     * The field `id` is guaranteed to be set (in addition to the echoed fields).
     * If the field `is_disabled` is set to `true`, the agent should disable
     * itself by removing all breakpoints and detaching from the application.
     * It should however continue to poll `RegisterDebuggee` until reenabled.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Debuggee debuggee = 1;</code>
     * @param \Google\Cloud\Debugger\V2\Debuggee $var
     * @return $this
     */
    public function setDebuggee($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\Debuggee::class);
        $this->debuggee = $var;

        return $this;
    }

}

