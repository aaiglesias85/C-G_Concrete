<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_deployment_monitoring_job.proto

namespace Google\Cloud\AIPlatform\V1;

use UnexpectedValueException;

/**
 * The Model Monitoring Objective types.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.ModelDeploymentMonitoringObjectiveType</code>
 */
class ModelDeploymentMonitoringObjectiveType
{
    /**
     * Default value, should not be set.
     *
     * Generated from protobuf enum <code>MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED = 0;</code>
     */
    const MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED = 0;
    /**
     * Raw feature values' stats to detect skew between Training-Prediction
     * datasets.
     *
     * Generated from protobuf enum <code>RAW_FEATURE_SKEW = 1;</code>
     */
    const RAW_FEATURE_SKEW = 1;
    /**
     * Raw feature values' stats to detect drift between Serving-Prediction
     * datasets.
     *
     * Generated from protobuf enum <code>RAW_FEATURE_DRIFT = 2;</code>
     */
    const RAW_FEATURE_DRIFT = 2;
    /**
     * Feature attribution scores to detect skew between Training-Prediction
     * datasets.
     *
     * Generated from protobuf enum <code>FEATURE_ATTRIBUTION_SKEW = 3;</code>
     */
    const FEATURE_ATTRIBUTION_SKEW = 3;
    /**
     * Feature attribution scores to detect skew between Prediction datasets
     * collected within different time windows.
     *
     * Generated from protobuf enum <code>FEATURE_ATTRIBUTION_DRIFT = 4;</code>
     */
    const FEATURE_ATTRIBUTION_DRIFT = 4;

    private static $valueToName = [
        self::MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED => 'MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED',
        self::RAW_FEATURE_SKEW => 'RAW_FEATURE_SKEW',
        self::RAW_FEATURE_DRIFT => 'RAW_FEATURE_DRIFT',
        self::FEATURE_ATTRIBUTION_SKEW => 'FEATURE_ATTRIBUTION_SKEW',
        self::FEATURE_ATTRIBUTION_DRIFT => 'FEATURE_ATTRIBUTION_DRIFT',
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

