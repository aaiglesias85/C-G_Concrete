<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/metric.proto

namespace Google\Api\MetricDescriptor;

use UnexpectedValueException;

/**
 * The kind of measurement. It describes how the data is reported.
 *
 * Protobuf type <code>google.api.MetricDescriptor.MetricKind</code>
 */
class MetricKind
{
    /**
     * Do not use this default value.
     *
     * Generated from protobuf enum <code>METRIC_KIND_UNSPECIFIED = 0;</code>
     */
    const METRIC_KIND_UNSPECIFIED = 0;
    /**
     * An instantaneous measurement of a value.
     *
     * Generated from protobuf enum <code>GAUGE = 1;</code>
     */
    const GAUGE = 1;
    /**
     * The change in a value during a time interval.
     *
     * Generated from protobuf enum <code>DELTA = 2;</code>
     */
    const DELTA = 2;
    /**
     * A value accumulated over a time interval.  Cumulative
     * measurements in a time series should have the same start time
     * and increasing end times, until an event resets the cumulative
     * value to zero and sets a new start time for the following
     * points.
     *
     * Generated from protobuf enum <code>CUMULATIVE = 3;</code>
     */
    const CUMULATIVE = 3;

    private static $valueToName = [
        self::METRIC_KIND_UNSPECIFIED => 'METRIC_KIND_UNSPECIFIED',
        self::GAUGE => 'GAUGE',
        self::DELTA => 'DELTA',
        self::CUMULATIVE => 'CUMULATIVE',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricKind::class, \Google\Api\MetricDescriptor_MetricKind::class);

