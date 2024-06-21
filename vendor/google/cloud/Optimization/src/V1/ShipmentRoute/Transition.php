<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/optimization/v1/fleet_routing.proto

namespace Google\Cloud\Optimization\V1\ShipmentRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transition between two events on the route. See the description of
 * [ShipmentRoute][google.cloud.optimization.v1.ShipmentRoute].
 * If the vehicle does not have a `start_location` and/or `end_location`, the
 * corresponding travel metrics are 0.
 *
 * Generated from protobuf message <code>google.cloud.optimization.v1.ShipmentRoute.Transition</code>
 */
class Transition extends \Google\Protobuf\Internal\Message
{
    /**
     * Travel duration during this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration travel_duration = 1;</code>
     */
    private $travel_duration = null;
    /**
     * Distance traveled during the transition.
     *
     * Generated from protobuf field <code>double travel_distance_meters = 2;</code>
     */
    private $travel_distance_meters = 0.0;
    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic]
     * [google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a `Transition`, this
     * boolean is set to true. This may be temporary (rare hiccup in the
     * realtime traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     */
    private $traffic_info_unavailable = false;
    /**
     * Sum of the delay durations applied to this transition. If any, the delay
     * starts exactly `delay_duration` seconds before the next event (visit or
     * vehicle end). See
     * [TransitionAttributes.delay][google.cloud.optimization.v1.TransitionAttributes.delay].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay_duration = 4;</code>
     */
    private $delay_duration = null;
    /**
     * Sum of the duration of the breaks occurring during this transition, if
     * any. Details about each break's start time and duration are stored in
     * [ShipmentRoute.breaks][google.cloud.optimization.v1.ShipmentRoute.breaks].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration break_duration = 5;</code>
     */
    private $break_duration = null;
    /**
     * Time spent waiting during this transition. Wait duration corresponds to
     * idle time and does not include break time. Also note that this wait time
     * may be split into several non-contiguous intervals.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait_duration = 6;</code>
     */
    private $wait_duration = null;
    /**
     * Total duration of the transition, provided for convenience. It is equal
     * to:
     * * next visit `start_time` (or `vehicle_end_time` if this is the last
     * transition) - this transition's `start_time`;
     * * if `ShipmentRoute.has_traffic_infeasibilities` is false, the following
     * additionally holds: `total_duration = travel_duration + delay_duration
     * + break_duration + wait_duration`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_duration = 7;</code>
     */
    private $total_duration = null;
    /**
     * Start time of this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8;</code>
     */
    private $start_time = null;
    /**
     * The encoded polyline representation of the route followed during the
     * transition.
     * This field is only populated if [populate_transition_polylines]
     * [google.cloud.optimization.v1.OptimizeToursRequest.populate_transition_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 9;</code>
     */
    private $route_polyline = null;
    /**
     * Vehicle loads during this transition, for each type that either appears
     * in this vehicle's [Vehicle.load_limits][google.cloud.optimization.v1.Vehicle.load_limits], or that have non-zero
     * [Shipment.load_demands][google.cloud.optimization.v1.Shipment.load_demands] on some shipment performed on this route.
     * The loads during the first transition are the starting loads of the
     * vehicle route. Then, after each visit, the visit's `load_demands` are
     * either added or subtracted to get the next transition's loads, depending
     * on whether the visit was a pickup or a delivery.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.ShipmentRoute.VehicleLoad> vehicle_loads = 11;</code>
     */
    private $vehicle_loads;
    /**
     * Deprecated: Use [Transition.vehicle_loads][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity loads = 10 [deprecated = true];</code>
     * @deprecated
     */
    private $loads;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $travel_duration
     *           Travel duration during this transition.
     *     @type float $travel_distance_meters
     *           Distance traveled during the transition.
     *     @type bool $traffic_info_unavailable
     *           When traffic is requested via
     *           [OptimizeToursRequest.consider_road_traffic]
     *           [google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     *           and the traffic info couldn't be retrieved for a `Transition`, this
     *           boolean is set to true. This may be temporary (rare hiccup in the
     *           realtime traffic servers) or permanent (no data for this location).
     *     @type \Google\Protobuf\Duration $delay_duration
     *           Sum of the delay durations applied to this transition. If any, the delay
     *           starts exactly `delay_duration` seconds before the next event (visit or
     *           vehicle end). See
     *           [TransitionAttributes.delay][google.cloud.optimization.v1.TransitionAttributes.delay].
     *     @type \Google\Protobuf\Duration $break_duration
     *           Sum of the duration of the breaks occurring during this transition, if
     *           any. Details about each break's start time and duration are stored in
     *           [ShipmentRoute.breaks][google.cloud.optimization.v1.ShipmentRoute.breaks].
     *     @type \Google\Protobuf\Duration $wait_duration
     *           Time spent waiting during this transition. Wait duration corresponds to
     *           idle time and does not include break time. Also note that this wait time
     *           may be split into several non-contiguous intervals.
     *     @type \Google\Protobuf\Duration $total_duration
     *           Total duration of the transition, provided for convenience. It is equal
     *           to:
     *           * next visit `start_time` (or `vehicle_end_time` if this is the last
     *           transition) - this transition's `start_time`;
     *           * if `ShipmentRoute.has_traffic_infeasibilities` is false, the following
     *           additionally holds: `total_duration = travel_duration + delay_duration
     *           + break_duration + wait_duration`.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Start time of this transition.
     *     @type \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline $route_polyline
     *           The encoded polyline representation of the route followed during the
     *           transition.
     *           This field is only populated if [populate_transition_polylines]
     *           [google.cloud.optimization.v1.OptimizeToursRequest.populate_transition_polylines]
     *           is set to true.
     *     @type array|\Google\Protobuf\Internal\MapField $vehicle_loads
     *           Vehicle loads during this transition, for each type that either appears
     *           in this vehicle's [Vehicle.load_limits][google.cloud.optimization.v1.Vehicle.load_limits], or that have non-zero
     *           [Shipment.load_demands][google.cloud.optimization.v1.Shipment.load_demands] on some shipment performed on this route.
     *           The loads during the first transition are the starting loads of the
     *           vehicle route. Then, after each visit, the visit's `load_demands` are
     *           either added or subtracted to get the next transition's loads, depending
     *           on whether the visit was a pickup or a delivery.
     *     @type \Google\Cloud\Optimization\V1\CapacityQuantity[]|\Google\Protobuf\Internal\RepeatedField $loads
     *           Deprecated: Use [Transition.vehicle_loads][] instead.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Optimization\V1\FleetRouting::initOnce();
        parent::__construct($data);
    }

    /**
     * Travel duration during this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration travel_duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTravelDuration()
    {
        return $this->travel_duration;
    }

    public function hasTravelDuration()
    {
        return isset($this->travel_duration);
    }

    public function clearTravelDuration()
    {
        unset($this->travel_duration);
    }

    /**
     * Travel duration during this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration travel_duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTravelDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->travel_duration = $var;

        return $this;
    }

    /**
     * Distance traveled during the transition.
     *
     * Generated from protobuf field <code>double travel_distance_meters = 2;</code>
     * @return float
     */
    public function getTravelDistanceMeters()
    {
        return $this->travel_distance_meters;
    }

    /**
     * Distance traveled during the transition.
     *
     * Generated from protobuf field <code>double travel_distance_meters = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTravelDistanceMeters($var)
    {
        GPBUtil::checkDouble($var);
        $this->travel_distance_meters = $var;

        return $this;
    }

    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic]
     * [google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a `Transition`, this
     * boolean is set to true. This may be temporary (rare hiccup in the
     * realtime traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     * @return bool
     */
    public function getTrafficInfoUnavailable()
    {
        return $this->traffic_info_unavailable;
    }

    /**
     * When traffic is requested via
     * [OptimizeToursRequest.consider_road_traffic]
     * [google.cloud.optimization.v1.OptimizeToursRequest.consider_road_traffic],
     * and the traffic info couldn't be retrieved for a `Transition`, this
     * boolean is set to true. This may be temporary (rare hiccup in the
     * realtime traffic servers) or permanent (no data for this location).
     *
     * Generated from protobuf field <code>bool traffic_info_unavailable = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrafficInfoUnavailable($var)
    {
        GPBUtil::checkBool($var);
        $this->traffic_info_unavailable = $var;

        return $this;
    }

    /**
     * Sum of the delay durations applied to this transition. If any, the delay
     * starts exactly `delay_duration` seconds before the next event (visit or
     * vehicle end). See
     * [TransitionAttributes.delay][google.cloud.optimization.v1.TransitionAttributes.delay].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay_duration = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDelayDuration()
    {
        return $this->delay_duration;
    }

    public function hasDelayDuration()
    {
        return isset($this->delay_duration);
    }

    public function clearDelayDuration()
    {
        unset($this->delay_duration);
    }

    /**
     * Sum of the delay durations applied to this transition. If any, the delay
     * starts exactly `delay_duration` seconds before the next event (visit or
     * vehicle end). See
     * [TransitionAttributes.delay][google.cloud.optimization.v1.TransitionAttributes.delay].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay_duration = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDelayDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->delay_duration = $var;

        return $this;
    }

    /**
     * Sum of the duration of the breaks occurring during this transition, if
     * any. Details about each break's start time and duration are stored in
     * [ShipmentRoute.breaks][google.cloud.optimization.v1.ShipmentRoute.breaks].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration break_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getBreakDuration()
    {
        return $this->break_duration;
    }

    public function hasBreakDuration()
    {
        return isset($this->break_duration);
    }

    public function clearBreakDuration()
    {
        unset($this->break_duration);
    }

    /**
     * Sum of the duration of the breaks occurring during this transition, if
     * any. Details about each break's start time and duration are stored in
     * [ShipmentRoute.breaks][google.cloud.optimization.v1.ShipmentRoute.breaks].
     *
     * Generated from protobuf field <code>.google.protobuf.Duration break_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setBreakDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->break_duration = $var;

        return $this;
    }

    /**
     * Time spent waiting during this transition. Wait duration corresponds to
     * idle time and does not include break time. Also note that this wait time
     * may be split into several non-contiguous intervals.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait_duration = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWaitDuration()
    {
        return $this->wait_duration;
    }

    public function hasWaitDuration()
    {
        return isset($this->wait_duration);
    }

    public function clearWaitDuration()
    {
        unset($this->wait_duration);
    }

    /**
     * Time spent waiting during this transition. Wait duration corresponds to
     * idle time and does not include break time. Also note that this wait time
     * may be split into several non-contiguous intervals.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration wait_duration = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWaitDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->wait_duration = $var;

        return $this;
    }

    /**
     * Total duration of the transition, provided for convenience. It is equal
     * to:
     * * next visit `start_time` (or `vehicle_end_time` if this is the last
     * transition) - this transition's `start_time`;
     * * if `ShipmentRoute.has_traffic_infeasibilities` is false, the following
     * additionally holds: `total_duration = travel_duration + delay_duration
     * + break_duration + wait_duration`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_duration = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTotalDuration()
    {
        return $this->total_duration;
    }

    public function hasTotalDuration()
    {
        return isset($this->total_duration);
    }

    public function clearTotalDuration()
    {
        unset($this->total_duration);
    }

    /**
     * Total duration of the transition, provided for convenience. It is equal
     * to:
     * * next visit `start_time` (or `vehicle_end_time` if this is the last
     * transition) - this transition's `start_time`;
     * * if `ShipmentRoute.has_traffic_infeasibilities` is false, the following
     * additionally holds: `total_duration = travel_duration + delay_duration
     * + break_duration + wait_duration`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_duration = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTotalDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->total_duration = $var;

        return $this;
    }

    /**
     * Start time of this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Start time of this transition.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The encoded polyline representation of the route followed during the
     * transition.
     * This field is only populated if [populate_transition_polylines]
     * [google.cloud.optimization.v1.OptimizeToursRequest.populate_transition_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 9;</code>
     * @return \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline|null
     */
    public function getRoutePolyline()
    {
        return $this->route_polyline;
    }

    public function hasRoutePolyline()
    {
        return isset($this->route_polyline);
    }

    public function clearRoutePolyline()
    {
        unset($this->route_polyline);
    }

    /**
     * The encoded polyline representation of the route followed during the
     * transition.
     * This field is only populated if [populate_transition_polylines]
     * [google.cloud.optimization.v1.OptimizeToursRequest.populate_transition_polylines]
     * is set to true.
     *
     * Generated from protobuf field <code>.google.cloud.optimization.v1.ShipmentRoute.EncodedPolyline route_polyline = 9;</code>
     * @param \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline $var
     * @return $this
     */
    public function setRoutePolyline($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Optimization\V1\ShipmentRoute\EncodedPolyline::class);
        $this->route_polyline = $var;

        return $this;
    }

    /**
     * Vehicle loads during this transition, for each type that either appears
     * in this vehicle's [Vehicle.load_limits][google.cloud.optimization.v1.Vehicle.load_limits], or that have non-zero
     * [Shipment.load_demands][google.cloud.optimization.v1.Shipment.load_demands] on some shipment performed on this route.
     * The loads during the first transition are the starting loads of the
     * vehicle route. Then, after each visit, the visit's `load_demands` are
     * either added or subtracted to get the next transition's loads, depending
     * on whether the visit was a pickup or a delivery.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.ShipmentRoute.VehicleLoad> vehicle_loads = 11;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getVehicleLoads()
    {
        return $this->vehicle_loads;
    }

    /**
     * Vehicle loads during this transition, for each type that either appears
     * in this vehicle's [Vehicle.load_limits][google.cloud.optimization.v1.Vehicle.load_limits], or that have non-zero
     * [Shipment.load_demands][google.cloud.optimization.v1.Shipment.load_demands] on some shipment performed on this route.
     * The loads during the first transition are the starting loads of the
     * vehicle route. Then, after each visit, the visit's `load_demands` are
     * either added or subtracted to get the next transition's loads, depending
     * on whether the visit was a pickup or a delivery.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.optimization.v1.ShipmentRoute.VehicleLoad> vehicle_loads = 11;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setVehicleLoads($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\ShipmentRoute\VehicleLoad::class);
        $this->vehicle_loads = $arr;

        return $this;
    }

    /**
     * Deprecated: Use [Transition.vehicle_loads][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity loads = 10 [deprecated = true];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     * @deprecated
     */
    public function getLoads()
    {
        @trigger_error('loads is deprecated.', E_USER_DEPRECATED);
        return $this->loads;
    }

    /**
     * Deprecated: Use [Transition.vehicle_loads][] instead.
     *
     * Generated from protobuf field <code>repeated .google.cloud.optimization.v1.CapacityQuantity loads = 10 [deprecated = true];</code>
     * @param \Google\Cloud\Optimization\V1\CapacityQuantity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     * @deprecated
     */
    public function setLoads($var)
    {
        @trigger_error('loads is deprecated.', E_USER_DEPRECATED);
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Optimization\V1\CapacityQuantity::class);
        $this->loads = $arr;

        return $this;
    }

}


