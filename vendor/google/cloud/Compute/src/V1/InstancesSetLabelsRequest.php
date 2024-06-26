<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetLabelsRequest</code>
 */
class InstancesSetLabelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Fingerprint of the previous set of labels for this resource, used to prevent conflicts. Provide the latest fingerprint value when making a request to add or change labels.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     */
    private $label_fingerprint = null;
    /**
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $label_fingerprint
     *           Fingerprint of the previous set of labels for this resource, used to prevent conflicts. Provide the latest fingerprint value when making a request to add or change labels.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Fingerprint of the previous set of labels for this resource, used to prevent conflicts. Provide the latest fingerprint value when making a request to add or change labels.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     * @return string
     */
    public function getLabelFingerprint()
    {
        return isset($this->label_fingerprint) ? $this->label_fingerprint : '';
    }

    public function hasLabelFingerprint()
    {
        return isset($this->label_fingerprint);
    }

    public function clearLabelFingerprint()
    {
        unset($this->label_fingerprint);
    }

    /**
     * Fingerprint of the previous set of labels for this resource, used to prevent conflicts. Provide the latest fingerprint value when making a request to add or change labels.
     *
     * Generated from protobuf field <code>optional string label_fingerprint = 178124825;</code>
     * @param string $var
     * @return $this
     */
    public function setLabelFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->label_fingerprint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Generated from protobuf field <code>map<string, string> labels = 500195327;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

