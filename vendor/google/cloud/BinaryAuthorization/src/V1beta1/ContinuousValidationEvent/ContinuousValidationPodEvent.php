<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An auditing event for one Pod.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent</code>
 */
class ContinuousValidationPodEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the Pod.
     *
     * Generated from protobuf field <code>string pod = 1;</code>
     */
    private $pod = '';
    /**
     * Deploy time of the Pod from k8s.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     */
    private $deploy_time = null;
    /**
     * Termination time of the Pod from k8s, or nothing if still running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;
    /**
     * Auditing verdict for this Pod.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.PolicyConformanceVerdict verdict = 4;</code>
     */
    private $verdict = 0;
    /**
     * List of images with auditing details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails images = 5;</code>
     */
    private $images;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pod
     *           The name of the Pod.
     *     @type \Google\Protobuf\Timestamp $deploy_time
     *           Deploy time of the Pod from k8s.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Termination time of the Pod from k8s, or nothing if still running.
     *     @type int $verdict
     *           Auditing verdict for this Pod.
     *     @type \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails[]|\Google\Protobuf\Internal\RepeatedField $images
     *           List of images with auditing details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\ContinuousValidationLogging::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the Pod.
     *
     * Generated from protobuf field <code>string pod = 1;</code>
     * @return string
     */
    public function getPod()
    {
        return $this->pod;
    }

    /**
     * The name of the Pod.
     *
     * Generated from protobuf field <code>string pod = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPod($var)
    {
        GPBUtil::checkString($var, True);
        $this->pod = $var;

        return $this;
    }

    /**
     * Deploy time of the Pod from k8s.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeployTime()
    {
        return $this->deploy_time;
    }

    public function hasDeployTime()
    {
        return isset($this->deploy_time);
    }

    public function clearDeployTime()
    {
        unset($this->deploy_time);
    }

    /**
     * Deploy time of the Pod from k8s.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp deploy_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeployTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->deploy_time = $var;

        return $this;
    }

    /**
     * Termination time of the Pod from k8s, or nothing if still running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Termination time of the Pod from k8s, or nothing if still running.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Auditing verdict for this Pod.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.PolicyConformanceVerdict verdict = 4;</code>
     * @return int
     */
    public function getVerdict()
    {
        return $this->verdict;
    }

    /**
     * Auditing verdict for this Pod.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.PolicyConformanceVerdict verdict = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setVerdict($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\PolicyConformanceVerdict::class);
        $this->verdict = $var;

        return $this;
    }

    /**
     * List of images with auditing details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails images = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * List of images with auditing details.
     *
     * Generated from protobuf field <code>repeated .google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails images = 5;</code>
     * @param \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails::class);
        $this->images = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ContinuousValidationPodEvent::class, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent_ContinuousValidationPodEvent::class);

