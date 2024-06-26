<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace Google\Cloud\Talent\V4beta1;

use UnexpectedValueException;

/**
 * An enum that specifies the job attributes that are returned in the
 * [MatchingJob.job][google.cloud.talent.v4beta1.SearchJobsResponse.MatchingJob.job] or
 * [ListJobsResponse.jobs][google.cloud.talent.v4beta1.ListJobsResponse.jobs] fields.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.JobView</code>
 */
class JobView
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>JOB_VIEW_UNSPECIFIED = 0;</code>
     */
    const JOB_VIEW_UNSPECIFIED = 0;
    /**
     * A ID only view of job, with following attributes:
     * [Job.name][google.cloud.talent.v4beta1.Job.name], [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id], [Job.language_code][google.cloud.talent.v4beta1.Job.language_code].
     *
     * Generated from protobuf enum <code>JOB_VIEW_ID_ONLY = 1;</code>
     */
    const JOB_VIEW_ID_ONLY = 1;
    /**
     * A minimal view of the job, with the following attributes:
     * [Job.name][google.cloud.talent.v4beta1.Job.name], [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id], [Job.title][google.cloud.talent.v4beta1.Job.title],
     * [Job.company][google.cloud.talent.v4beta1.Job.company], [Job.DerivedInfo.locations][google.cloud.talent.v4beta1.Job.DerivedInfo.locations], [Job.language_code][google.cloud.talent.v4beta1.Job.language_code].
     *
     * Generated from protobuf enum <code>JOB_VIEW_MINIMAL = 2;</code>
     */
    const JOB_VIEW_MINIMAL = 2;
    /**
     * A small view of the job, with the following attributes in the search
     * results: [Job.name][google.cloud.talent.v4beta1.Job.name], [Job.requisition_id][google.cloud.talent.v4beta1.Job.requisition_id], [Job.title][google.cloud.talent.v4beta1.Job.title],
     * [Job.company][google.cloud.talent.v4beta1.Job.company], [Job.DerivedInfo.locations][google.cloud.talent.v4beta1.Job.DerivedInfo.locations], [Job.visibility][google.cloud.talent.v4beta1.Job.visibility],
     * [Job.language_code][google.cloud.talent.v4beta1.Job.language_code], [Job.description][google.cloud.talent.v4beta1.Job.description].
     *
     * Generated from protobuf enum <code>JOB_VIEW_SMALL = 3;</code>
     */
    const JOB_VIEW_SMALL = 3;
    /**
     * All available attributes are included in the search results.
     *
     * Generated from protobuf enum <code>JOB_VIEW_FULL = 4;</code>
     */
    const JOB_VIEW_FULL = 4;

    private static $valueToName = [
        self::JOB_VIEW_UNSPECIFIED => 'JOB_VIEW_UNSPECIFIED',
        self::JOB_VIEW_ID_ONLY => 'JOB_VIEW_ID_ONLY',
        self::JOB_VIEW_MINIMAL => 'JOB_VIEW_MINIMAL',
        self::JOB_VIEW_SMALL => 'JOB_VIEW_SMALL',
        self::JOB_VIEW_FULL => 'JOB_VIEW_FULL',
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

