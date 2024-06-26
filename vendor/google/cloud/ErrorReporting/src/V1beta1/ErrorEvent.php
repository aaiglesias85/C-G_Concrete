<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/common.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An error event which is returned by the Error Reporting system.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.ErrorEvent</code>
 */
class ErrorEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Time when the event occurred as provided in the error report.
     * If the report did not contain a timestamp, the time the error was received
     * by the Error Reporting system is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     */
    private $event_time = null;
    /**
     * The `ServiceContext` for which this error was reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContext service_context = 2;</code>
     */
    private $service_context = null;
    /**
     * The stack trace that was reported or logged by the service.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';
    /**
     * Data about the context in which the error occurred.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorContext context = 5;</code>
     */
    private $context = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $event_time
     *           Time when the event occurred as provided in the error report.
     *           If the report did not contain a timestamp, the time the error was received
     *           by the Error Reporting system is used.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ServiceContext $service_context
     *           The `ServiceContext` for which this error was reported.
     *     @type string $message
     *           The stack trace that was reported or logged by the service.
     *     @type \Google\Cloud\ErrorReporting\V1beta1\ErrorContext $context
     *           Data about the context in which the error occurred.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Time when the event occurred as provided in the error report.
     * If the report did not contain a timestamp, the time the error was received
     * by the Error Reporting system is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEventTime()
    {
        return $this->event_time;
    }

    public function hasEventTime()
    {
        return isset($this->event_time);
    }

    public function clearEventTime()
    {
        unset($this->event_time);
    }

    /**
     * Time when the event occurred as provided in the error report.
     * If the report did not contain a timestamp, the time the error was received
     * by the Error Reporting system is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp event_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->event_time = $var;

        return $this;
    }

    /**
     * The `ServiceContext` for which this error was reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContext service_context = 2;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ServiceContext|null
     */
    public function getServiceContext()
    {
        return $this->service_context;
    }

    public function hasServiceContext()
    {
        return isset($this->service_context);
    }

    public function clearServiceContext()
    {
        unset($this->service_context);
    }

    /**
     * The `ServiceContext` for which this error was reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ServiceContext service_context = 2;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ServiceContext $var
     * @return $this
     */
    public function setServiceContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ServiceContext::class);
        $this->service_context = $var;

        return $this;
    }

    /**
     * The stack trace that was reported or logged by the service.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The stack trace that was reported or logged by the service.
     *
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Data about the context in which the error occurred.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorContext context = 5;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ErrorContext|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Data about the context in which the error occurred.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ErrorContext context = 5;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ErrorContext $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ErrorContext::class);
        $this->context = $var;

        return $this;
    }

}

