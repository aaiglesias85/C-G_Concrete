<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/trigger.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a target of an invocation over HTTP.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.Destination</code>
 */
class Destination extends \Google\Protobuf\Internal\Message
{
    protected $descriptor;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Eventarc\V1\CloudRun $cloud_run
     *           Cloud Run fully-managed resource that receives the events. The resource
     *           should be in the same project as the trigger.
     *     @type string $cloud_function
     *           The Cloud Function resource name. Only Cloud Functions V2 is supported.
     *           Format: `projects/{project}/locations/{location}/functions/{function}`
     *     @type \Google\Cloud\Eventarc\V1\GKE $gke
     *           A GKE service capable of receiving events. The service should be running
     *           in the same project as the trigger.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Trigger::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Run fully-managed resource that receives the events. The resource
     * should be in the same project as the trigger.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.CloudRun cloud_run = 1;</code>
     * @return \Google\Cloud\Eventarc\V1\CloudRun|null
     */
    public function getCloudRun()
    {
        return $this->readOneof(1);
    }

    public function hasCloudRun()
    {
        return $this->hasOneof(1);
    }

    /**
     * Cloud Run fully-managed resource that receives the events. The resource
     * should be in the same project as the trigger.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.CloudRun cloud_run = 1;</code>
     * @param \Google\Cloud\Eventarc\V1\CloudRun $var
     * @return $this
     */
    public function setCloudRun($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\CloudRun::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The Cloud Function resource name. Only Cloud Functions V2 is supported.
     * Format: `projects/{project}/locations/{location}/functions/{function}`
     *
     * Generated from protobuf field <code>string cloud_function = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCloudFunction()
    {
        return $this->readOneof(2);
    }

    public function hasCloudFunction()
    {
        return $this->hasOneof(2);
    }

    /**
     * The Cloud Function resource name. Only Cloud Functions V2 is supported.
     * Format: `projects/{project}/locations/{location}/functions/{function}`
     *
     * Generated from protobuf field <code>string cloud_function = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCloudFunction($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A GKE service capable of receiving events. The service should be running
     * in the same project as the trigger.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.GKE gke = 3;</code>
     * @return \Google\Cloud\Eventarc\V1\GKE|null
     */
    public function getGke()
    {
        return $this->readOneof(3);
    }

    public function hasGke()
    {
        return $this->hasOneof(3);
    }

    /**
     * A GKE service capable of receiving events. The service should be running
     * in the same project as the trigger.
     *
     * Generated from protobuf field <code>.google.cloud.eventarc.v1.GKE gke = 3;</code>
     * @param \Google\Cloud\Eventarc\V1\GKE $var
     * @return $this
     */
    public function setGke($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Eventarc\V1\GKE::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDescriptor()
    {
        return $this->whichOneof("descriptor");
    }

}

