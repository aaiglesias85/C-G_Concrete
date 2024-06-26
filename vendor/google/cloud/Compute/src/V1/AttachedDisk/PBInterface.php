<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\AttachedDisk;

use UnexpectedValueException;

/**
 * Specifies the disk interface to use for attaching this disk, which is either SCSI or NVME. The default is SCSI. Persistent disks must always use SCSI and the request will fail if you attempt to attach a persistent disk in any other format than SCSI. Local SSDs can use either NVME or SCSI. For performance characteristics of SCSI over NVMe, see Local SSD performance.
 *
 * Protobuf type <code>google.cloud.compute.v1.AttachedDisk.Interface</code>
 */
class PBInterface
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_INTERFACE = 0;</code>
     */
    const UNDEFINED_INTERFACE = 0;
    /**
     * Generated from protobuf enum <code>NVME = 2408800;</code>
     */
    const NVME = 2408800;
    /**
     * Generated from protobuf enum <code>SCSI = 2539686;</code>
     */
    const SCSI = 2539686;

    private static $valueToName = [
        self::UNDEFINED_INTERFACE => 'UNDEFINED_INTERFACE',
        self::NVME => 'NVME',
        self::SCSI => 'SCSI',
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


