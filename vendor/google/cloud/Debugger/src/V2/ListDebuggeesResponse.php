<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing debuggees.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.ListDebuggeesResponse</code>
 */
class ListDebuggeesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of debuggees accessible to the calling user.
     * The fields `debuggee.id` and `description` are guaranteed to be set.
     * The `description` field is a human readable field provided by agents and
     * can be displayed to users.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Debuggee debuggees = 1;</code>
     */
    private $debuggees;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Debugger\V2\Debuggee[]|\Google\Protobuf\Internal\RepeatedField $debuggees
     *           List of debuggees accessible to the calling user.
     *           The fields `debuggee.id` and `description` are guaranteed to be set.
     *           The `description` field is a human readable field provided by agents and
     *           can be displayed to users.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct($data);
    }

    /**
     * List of debuggees accessible to the calling user.
     * The fields `debuggee.id` and `description` are guaranteed to be set.
     * The `description` field is a human readable field provided by agents and
     * can be displayed to users.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Debuggee debuggees = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDebuggees()
    {
        return $this->debuggees;
    }

    /**
     * List of debuggees accessible to the calling user.
     * The fields `debuggee.id` and `description` are guaranteed to be set.
     * The `description` field is a human readable field provided by agents and
     * can be displayed to users.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Debuggee debuggees = 1;</code>
     * @param \Google\Cloud\Debugger\V2\Debuggee[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDebuggees($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\Debuggee::class);
        $this->debuggees = $arr;

        return $this;
    }

}

