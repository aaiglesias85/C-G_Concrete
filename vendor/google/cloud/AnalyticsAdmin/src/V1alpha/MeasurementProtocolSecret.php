<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A secret value used for sending hits to Measurement Protocol.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.MeasurementProtocolSecret</code>
 */
class MeasurementProtocolSecret extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this secret. This secret may be a child of any type of
     * stream.
     * Format:
     * properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets/{measurementProtocolSecret}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Human-readable display name for this secret.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Output only. The measurement protocol secret value. Pass this value to the api_secret
     * field of the Measurement Protocol API when sending hits to this
     * secret's parent property.
     *
     * Generated from protobuf field <code>string secret_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $secret_value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this secret. This secret may be a child of any type of
     *           stream.
     *           Format:
     *           properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets/{measurementProtocolSecret}
     *     @type string $display_name
     *           Required. Human-readable display name for this secret.
     *     @type string $secret_value
     *           Output only. The measurement protocol secret value. Pass this value to the api_secret
     *           field of the Measurement Protocol API when sending hits to this
     *           secret's parent property.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this secret. This secret may be a child of any type of
     * stream.
     * Format:
     * properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets/{measurementProtocolSecret}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this secret. This secret may be a child of any type of
     * stream.
     * Format:
     * properties/{property}/webDataStreams/{webDataStream}/measurementProtocolSecrets/{measurementProtocolSecret}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. Human-readable display name for this secret.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name for this secret.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The measurement protocol secret value. Pass this value to the api_secret
     * field of the Measurement Protocol API when sending hits to this
     * secret's parent property.
     *
     * Generated from protobuf field <code>string secret_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSecretValue()
    {
        return $this->secret_value;
    }

    /**
     * Output only. The measurement protocol secret value. Pass this value to the api_secret
     * field of the Measurement Protocol API when sending hits to this
     * secret's parent property.
     *
     * Generated from protobuf field <code>string secret_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_value = $var;

        return $this;
    }

}

