<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_state.proto

namespace Google\Cloud\AIPlatform\V1;

use UnexpectedValueException;

/**
 * Describes the state of a pipeline.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.PipelineState</code>
 */
class PipelineState
{
    /**
     * The pipeline state is unspecified.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_UNSPECIFIED = 0;</code>
     */
    const PIPELINE_STATE_UNSPECIFIED = 0;
    /**
     * The pipeline has been created or resumed, and processing has not yet
     * begun.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_QUEUED = 1;</code>
     */
    const PIPELINE_STATE_QUEUED = 1;
    /**
     * The service is preparing to run the pipeline.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_PENDING = 2;</code>
     */
    const PIPELINE_STATE_PENDING = 2;
    /**
     * The pipeline is in progress.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_RUNNING = 3;</code>
     */
    const PIPELINE_STATE_RUNNING = 3;
    /**
     * The pipeline completed successfully.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_SUCCEEDED = 4;</code>
     */
    const PIPELINE_STATE_SUCCEEDED = 4;
    /**
     * The pipeline failed.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_FAILED = 5;</code>
     */
    const PIPELINE_STATE_FAILED = 5;
    /**
     * The pipeline is being cancelled. From this state, the pipeline may only go
     * to either PIPELINE_STATE_SUCCEEDED, PIPELINE_STATE_FAILED or
     * PIPELINE_STATE_CANCELLED.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_CANCELLING = 6;</code>
     */
    const PIPELINE_STATE_CANCELLING = 6;
    /**
     * The pipeline has been cancelled.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_CANCELLED = 7;</code>
     */
    const PIPELINE_STATE_CANCELLED = 7;
    /**
     * The pipeline has been stopped, and can be resumed.
     *
     * Generated from protobuf enum <code>PIPELINE_STATE_PAUSED = 8;</code>
     */
    const PIPELINE_STATE_PAUSED = 8;

    private static $valueToName = [
        self::PIPELINE_STATE_UNSPECIFIED => 'PIPELINE_STATE_UNSPECIFIED',
        self::PIPELINE_STATE_QUEUED => 'PIPELINE_STATE_QUEUED',
        self::PIPELINE_STATE_PENDING => 'PIPELINE_STATE_PENDING',
        self::PIPELINE_STATE_RUNNING => 'PIPELINE_STATE_RUNNING',
        self::PIPELINE_STATE_SUCCEEDED => 'PIPELINE_STATE_SUCCEEDED',
        self::PIPELINE_STATE_FAILED => 'PIPELINE_STATE_FAILED',
        self::PIPELINE_STATE_CANCELLING => 'PIPELINE_STATE_CANCELLING',
        self::PIPELINE_STATE_CANCELLED => 'PIPELINE_STATE_CANCELLED',
        self::PIPELINE_STATE_PAUSED => 'PIPELINE_STATE_PAUSED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

