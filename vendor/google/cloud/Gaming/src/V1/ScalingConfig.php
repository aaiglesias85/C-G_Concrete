<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1/game_server_configs.proto

namespace Google\Cloud\Gaming\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Autoscaling config for an Agones fleet.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1.ScalingConfig</code>
 */
class ScalingConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Scaling Config
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. Agones fleet autoscaler spec. Example spec:
     * https://agones.dev/site/docs/reference/fleetautoscaler/
     *
     * Generated from protobuf field <code>string fleet_autoscaler_spec = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fleet_autoscaler_spec = '';
    /**
     * Labels used to identify the game server clusters to which this Agones
     * scaling config applies. A game server cluster is subject to this Agones
     * scaling config if its labels match any of the selector entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.LabelSelector selectors = 4;</code>
     */
    private $selectors;
    /**
     * The schedules to which this Scaling Config applies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.Schedule schedules = 5;</code>
     */
    private $schedules;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Scaling Config
     *     @type string $fleet_autoscaler_spec
     *           Required. Agones fleet autoscaler spec. Example spec:
     *           https://agones.dev/site/docs/reference/fleetautoscaler/
     *     @type \Google\Cloud\Gaming\V1\LabelSelector[]|\Google\Protobuf\Internal\RepeatedField $selectors
     *           Labels used to identify the game server clusters to which this Agones
     *           scaling config applies. A game server cluster is subject to this Agones
     *           scaling config if its labels match any of the selector entries.
     *     @type \Google\Cloud\Gaming\V1\Schedule[]|\Google\Protobuf\Internal\RepeatedField $schedules
     *           The schedules to which this Scaling Config applies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1\GameServerConfigs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Scaling Config
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Scaling Config
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Agones fleet autoscaler spec. Example spec:
     * https://agones.dev/site/docs/reference/fleetautoscaler/
     *
     * Generated from protobuf field <code>string fleet_autoscaler_spec = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFleetAutoscalerSpec()
    {
        return $this->fleet_autoscaler_spec;
    }

    /**
     * Required. Agones fleet autoscaler spec. Example spec:
     * https://agones.dev/site/docs/reference/fleetautoscaler/
     *
     * Generated from protobuf field <code>string fleet_autoscaler_spec = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFleetAutoscalerSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->fleet_autoscaler_spec = $var;

        return $this;
    }

    /**
     * Labels used to identify the game server clusters to which this Agones
     * scaling config applies. A game server cluster is subject to this Agones
     * scaling config if its labels match any of the selector entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.LabelSelector selectors = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSelectors()
    {
        return $this->selectors;
    }

    /**
     * Labels used to identify the game server clusters to which this Agones
     * scaling config applies. A game server cluster is subject to this Agones
     * scaling config if its labels match any of the selector entries.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.LabelSelector selectors = 4;</code>
     * @param \Google\Cloud\Gaming\V1\LabelSelector[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSelectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\LabelSelector::class);
        $this->selectors = $arr;

        return $this;
    }

    /**
     * The schedules to which this Scaling Config applies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.Schedule schedules = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    /**
     * The schedules to which this Scaling Config applies.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1.Schedule schedules = 5;</code>
     * @param \Google\Cloud\Gaming\V1\Schedule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSchedules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1\Schedule::class);
        $this->schedules = $arr;

        return $this;
    }

}

