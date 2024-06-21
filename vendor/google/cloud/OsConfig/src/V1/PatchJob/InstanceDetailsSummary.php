<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1\PatchJob;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A summary of the current patch state across all instances that this patch
 * job affects. Contains counts of instances in different states. These states
 * map to `InstancePatchState`. List patch job instance details to see the
 * specific states of each instance.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.PatchJob.InstanceDetailsSummary</code>
 */
class InstanceDetailsSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of instances pending patch job.
     *
     * Generated from protobuf field <code>int64 pending_instance_count = 1;</code>
     */
    private $pending_instance_count = 0;
    /**
     * Number of instances that are inactive.
     *
     * Generated from protobuf field <code>int64 inactive_instance_count = 2;</code>
     */
    private $inactive_instance_count = 0;
    /**
     * Number of instances notified about patch job.
     *
     * Generated from protobuf field <code>int64 notified_instance_count = 3;</code>
     */
    private $notified_instance_count = 0;
    /**
     * Number of instances that have started.
     *
     * Generated from protobuf field <code>int64 started_instance_count = 4;</code>
     */
    private $started_instance_count = 0;
    /**
     * Number of instances that are downloading patches.
     *
     * Generated from protobuf field <code>int64 downloading_patches_instance_count = 5;</code>
     */
    private $downloading_patches_instance_count = 0;
    /**
     * Number of instances that are applying patches.
     *
     * Generated from protobuf field <code>int64 applying_patches_instance_count = 6;</code>
     */
    private $applying_patches_instance_count = 0;
    /**
     * Number of instances rebooting.
     *
     * Generated from protobuf field <code>int64 rebooting_instance_count = 7;</code>
     */
    private $rebooting_instance_count = 0;
    /**
     * Number of instances that have completed successfully.
     *
     * Generated from protobuf field <code>int64 succeeded_instance_count = 8;</code>
     */
    private $succeeded_instance_count = 0;
    /**
     * Number of instances that require reboot.
     *
     * Generated from protobuf field <code>int64 succeeded_reboot_required_instance_count = 9;</code>
     */
    private $succeeded_reboot_required_instance_count = 0;
    /**
     * Number of instances that failed.
     *
     * Generated from protobuf field <code>int64 failed_instance_count = 10;</code>
     */
    private $failed_instance_count = 0;
    /**
     * Number of instances that have acked and will start shortly.
     *
     * Generated from protobuf field <code>int64 acked_instance_count = 11;</code>
     */
    private $acked_instance_count = 0;
    /**
     * Number of instances that exceeded the time out while applying the patch.
     *
     * Generated from protobuf field <code>int64 timed_out_instance_count = 12;</code>
     */
    private $timed_out_instance_count = 0;
    /**
     * Number of instances that are running the pre-patch step.
     *
     * Generated from protobuf field <code>int64 pre_patch_step_instance_count = 13;</code>
     */
    private $pre_patch_step_instance_count = 0;
    /**
     * Number of instances that are running the post-patch step.
     *
     * Generated from protobuf field <code>int64 post_patch_step_instance_count = 14;</code>
     */
    private $post_patch_step_instance_count = 0;
    /**
     * Number of instances that do not appear to be running the agent. Check to
     * ensure that the agent is installed, running, and able to communicate with
     * the service.
     *
     * Generated from protobuf field <code>int64 no_agent_detected_instance_count = 15;</code>
     */
    private $no_agent_detected_instance_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $pending_instance_count
     *           Number of instances pending patch job.
     *     @type int|string $inactive_instance_count
     *           Number of instances that are inactive.
     *     @type int|string $notified_instance_count
     *           Number of instances notified about patch job.
     *     @type int|string $started_instance_count
     *           Number of instances that have started.
     *     @type int|string $downloading_patches_instance_count
     *           Number of instances that are downloading patches.
     *     @type int|string $applying_patches_instance_count
     *           Number of instances that are applying patches.
     *     @type int|string $rebooting_instance_count
     *           Number of instances rebooting.
     *     @type int|string $succeeded_instance_count
     *           Number of instances that have completed successfully.
     *     @type int|string $succeeded_reboot_required_instance_count
     *           Number of instances that require reboot.
     *     @type int|string $failed_instance_count
     *           Number of instances that failed.
     *     @type int|string $acked_instance_count
     *           Number of instances that have acked and will start shortly.
     *     @type int|string $timed_out_instance_count
     *           Number of instances that exceeded the time out while applying the patch.
     *     @type int|string $pre_patch_step_instance_count
     *           Number of instances that are running the pre-patch step.
     *     @type int|string $post_patch_step_instance_count
     *           Number of instances that are running the post-patch step.
     *     @type int|string $no_agent_detected_instance_count
     *           Number of instances that do not appear to be running the agent. Check to
     *           ensure that the agent is installed, running, and able to communicate with
     *           the service.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchJobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of instances pending patch job.
     *
     * Generated from protobuf field <code>int64 pending_instance_count = 1;</code>
     * @return int|string
     */
    public function getPendingInstanceCount()
    {
        return $this->pending_instance_count;
    }

    /**
     * Number of instances pending patch job.
     *
     * Generated from protobuf field <code>int64 pending_instance_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPendingInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->pending_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that are inactive.
     *
     * Generated from protobuf field <code>int64 inactive_instance_count = 2;</code>
     * @return int|string
     */
    public function getInactiveInstanceCount()
    {
        return $this->inactive_instance_count;
    }

    /**
     * Number of instances that are inactive.
     *
     * Generated from protobuf field <code>int64 inactive_instance_count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInactiveInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->inactive_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances notified about patch job.
     *
     * Generated from protobuf field <code>int64 notified_instance_count = 3;</code>
     * @return int|string
     */
    public function getNotifiedInstanceCount()
    {
        return $this->notified_instance_count;
    }

    /**
     * Number of instances notified about patch job.
     *
     * Generated from protobuf field <code>int64 notified_instance_count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNotifiedInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->notified_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that have started.
     *
     * Generated from protobuf field <code>int64 started_instance_count = 4;</code>
     * @return int|string
     */
    public function getStartedInstanceCount()
    {
        return $this->started_instance_count;
    }

    /**
     * Number of instances that have started.
     *
     * Generated from protobuf field <code>int64 started_instance_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartedInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->started_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that are downloading patches.
     *
     * Generated from protobuf field <code>int64 downloading_patches_instance_count = 5;</code>
     * @return int|string
     */
    public function getDownloadingPatchesInstanceCount()
    {
        return $this->downloading_patches_instance_count;
    }

    /**
     * Number of instances that are downloading patches.
     *
     * Generated from protobuf field <code>int64 downloading_patches_instance_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDownloadingPatchesInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->downloading_patches_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that are applying patches.
     *
     * Generated from protobuf field <code>int64 applying_patches_instance_count = 6;</code>
     * @return int|string
     */
    public function getApplyingPatchesInstanceCount()
    {
        return $this->applying_patches_instance_count;
    }

    /**
     * Number of instances that are applying patches.
     *
     * Generated from protobuf field <code>int64 applying_patches_instance_count = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplyingPatchesInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->applying_patches_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances rebooting.
     *
     * Generated from protobuf field <code>int64 rebooting_instance_count = 7;</code>
     * @return int|string
     */
    public function getRebootingInstanceCount()
    {
        return $this->rebooting_instance_count;
    }

    /**
     * Number of instances rebooting.
     *
     * Generated from protobuf field <code>int64 rebooting_instance_count = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRebootingInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->rebooting_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that have completed successfully.
     *
     * Generated from protobuf field <code>int64 succeeded_instance_count = 8;</code>
     * @return int|string
     */
    public function getSucceededInstanceCount()
    {
        return $this->succeeded_instance_count;
    }

    /**
     * Number of instances that have completed successfully.
     *
     * Generated from protobuf field <code>int64 succeeded_instance_count = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSucceededInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->succeeded_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that require reboot.
     *
     * Generated from protobuf field <code>int64 succeeded_reboot_required_instance_count = 9;</code>
     * @return int|string
     */
    public function getSucceededRebootRequiredInstanceCount()
    {
        return $this->succeeded_reboot_required_instance_count;
    }

    /**
     * Number of instances that require reboot.
     *
     * Generated from protobuf field <code>int64 succeeded_reboot_required_instance_count = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSucceededRebootRequiredInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->succeeded_reboot_required_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that failed.
     *
     * Generated from protobuf field <code>int64 failed_instance_count = 10;</code>
     * @return int|string
     */
    public function getFailedInstanceCount()
    {
        return $this->failed_instance_count;
    }

    /**
     * Number of instances that failed.
     *
     * Generated from protobuf field <code>int64 failed_instance_count = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailedInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->failed_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that have acked and will start shortly.
     *
     * Generated from protobuf field <code>int64 acked_instance_count = 11;</code>
     * @return int|string
     */
    public function getAckedInstanceCount()
    {
        return $this->acked_instance_count;
    }

    /**
     * Number of instances that have acked and will start shortly.
     *
     * Generated from protobuf field <code>int64 acked_instance_count = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAckedInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->acked_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that exceeded the time out while applying the patch.
     *
     * Generated from protobuf field <code>int64 timed_out_instance_count = 12;</code>
     * @return int|string
     */
    public function getTimedOutInstanceCount()
    {
        return $this->timed_out_instance_count;
    }

    /**
     * Number of instances that exceeded the time out while applying the patch.
     *
     * Generated from protobuf field <code>int64 timed_out_instance_count = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimedOutInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->timed_out_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that are running the pre-patch step.
     *
     * Generated from protobuf field <code>int64 pre_patch_step_instance_count = 13;</code>
     * @return int|string
     */
    public function getPrePatchStepInstanceCount()
    {
        return $this->pre_patch_step_instance_count;
    }

    /**
     * Number of instances that are running the pre-patch step.
     *
     * Generated from protobuf field <code>int64 pre_patch_step_instance_count = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPrePatchStepInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->pre_patch_step_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that are running the post-patch step.
     *
     * Generated from protobuf field <code>int64 post_patch_step_instance_count = 14;</code>
     * @return int|string
     */
    public function getPostPatchStepInstanceCount()
    {
        return $this->post_patch_step_instance_count;
    }

    /**
     * Number of instances that are running the post-patch step.
     *
     * Generated from protobuf field <code>int64 post_patch_step_instance_count = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPostPatchStepInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->post_patch_step_instance_count = $var;

        return $this;
    }

    /**
     * Number of instances that do not appear to be running the agent. Check to
     * ensure that the agent is installed, running, and able to communicate with
     * the service.
     *
     * Generated from protobuf field <code>int64 no_agent_detected_instance_count = 15;</code>
     * @return int|string
     */
    public function getNoAgentDetectedInstanceCount()
    {
        return $this->no_agent_detected_instance_count;
    }

    /**
     * Number of instances that do not appear to be running the agent. Check to
     * ensure that the agent is installed, running, and able to communicate with
     * the service.
     *
     * Generated from protobuf field <code>int64 no_agent_detected_instance_count = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNoAgentDetectedInstanceCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->no_agent_detected_instance_count = $var;

        return $this;
    }

}


