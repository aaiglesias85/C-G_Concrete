<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use UnexpectedValueException;

/**
 * An enum that represents the employment type of a job.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.EmploymentType</code>
 */
class EmploymentType
{
    /**
     * The default value if the employment type isn't specified.
     *
     * Generated from protobuf enum <code>EMPLOYMENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EMPLOYMENT_TYPE_UNSPECIFIED = 0;
    /**
     * The job requires working a number of hours that constitute full
     * time employment, typically 40 or more hours per week.
     *
     * Generated from protobuf enum <code>FULL_TIME = 1;</code>
     */
    const FULL_TIME = 1;
    /**
     * The job entails working fewer hours than a full time job,
     * typically less than 40 hours a week.
     *
     * Generated from protobuf enum <code>PART_TIME = 2;</code>
     */
    const PART_TIME = 2;
    /**
     * The job is offered as a contracted, as opposed to a salaried employee,
     * position.
     *
     * Generated from protobuf enum <code>CONTRACTOR = 3;</code>
     */
    const CONTRACTOR = 3;
    /**
     * The job is offered as a contracted position with the understanding
     * that it's converted into a full-time position at the end of the
     * contract. Jobs of this type are also returned by a search for
     * [EmploymentType.CONTRACTOR][google.cloud.talent.v4beta1.EmploymentType.CONTRACTOR] jobs.
     *
     * Generated from protobuf enum <code>CONTRACT_TO_HIRE = 4;</code>
     */
    const CONTRACT_TO_HIRE = 4;
    /**
     * The job is offered as a temporary employment opportunity, usually
     * a short-term engagement.
     *
     * Generated from protobuf enum <code>TEMPORARY = 5;</code>
     */
    const TEMPORARY = 5;
    /**
     * The job is a fixed-term opportunity for students or entry-level job
     * seekers to obtain on-the-job training, typically offered as a summer
     * position.
     *
     * Generated from protobuf enum <code>INTERN = 6;</code>
     */
    const INTERN = 6;
    /**
     * The is an opportunity for an individual to volunteer, where there's no
     * expectation of compensation for the provided services.
     *
     * Generated from protobuf enum <code>VOLUNTEER = 7;</code>
     */
    const VOLUNTEER = 7;
    /**
     * The job requires an employee to work on an as-needed basis with a
     * flexible schedule.
     *
     * Generated from protobuf enum <code>PER_DIEM = 8;</code>
     */
    const PER_DIEM = 8;
    /**
     * The job involves employing people in remote areas and flying them
     * temporarily to the work site instead of relocating employees and their
     * families permanently.
     *
     * Generated from protobuf enum <code>FLY_IN_FLY_OUT = 9;</code>
     */
    const FLY_IN_FLY_OUT = 9;
    /**
     * The job does not fit any of the other listed types.
     *
     * Generated from protobuf enum <code>OTHER_EMPLOYMENT_TYPE = 10;</code>
     */
    const OTHER_EMPLOYMENT_TYPE = 10;

    private static $valueToName = [
        self::EMPLOYMENT_TYPE_UNSPECIFIED => 'EMPLOYMENT_TYPE_UNSPECIFIED',
        self::FULL_TIME => 'FULL_TIME',
        self::PART_TIME => 'PART_TIME',
        self::CONTRACTOR => 'CONTRACTOR',
        self::CONTRACT_TO_HIRE => 'CONTRACT_TO_HIRE',
        self::TEMPORARY => 'TEMPORARY',
        self::INTERN => 'INTERN',
        self::VOLUNTEER => 'VOLUNTEER',
        self::PER_DIEM => 'PER_DIEM',
        self::FLY_IN_FLY_OUT => 'FLY_IN_FLY_OUT',
        self::OTHER_EMPLOYMENT_TYPE => 'OTHER_EMPLOYMENT_TYPE',
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

