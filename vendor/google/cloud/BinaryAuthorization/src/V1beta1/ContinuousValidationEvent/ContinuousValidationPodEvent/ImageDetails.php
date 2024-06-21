<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/binaryauthorization/v1beta1/continuous_validation_logging.proto

namespace Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container image with auditing details.
 *
 * Generated from protobuf message <code>google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails</code>
 */
class ImageDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the image.
     *
     * Generated from protobuf field <code>string image = 1;</code>
     */
    private $image = '';
    /**
     * The result of the audit for this image.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails.AuditResult result = 2;</code>
     */
    private $result = 0;
    /**
     * Description of the above result.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image
     *           The name of the image.
     *     @type int $result
     *           The result of the audit for this image.
     *     @type string $description
     *           Description of the above result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Binaryauthorization\V1Beta1\ContinuousValidationLogging::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the image.
     *
     * Generated from protobuf field <code>string image = 1;</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * The name of the image.
     *
     * Generated from protobuf field <code>string image = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * The result of the audit for this image.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails.AuditResult result = 2;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * The result of the audit for this image.
     *
     * Generated from protobuf field <code>.google.cloud.binaryauthorization.v1beta1.ContinuousValidationEvent.ContinuousValidationPodEvent.ImageDetails.AuditResult result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent\ContinuousValidationPodEvent\ImageDetails\AuditResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Description of the above result.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the above result.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageDetails::class, \Google\Cloud\BinaryAuthorization\V1beta1\ContinuousValidationEvent_ContinuousValidationPodEvent_ImageDetails::class);

