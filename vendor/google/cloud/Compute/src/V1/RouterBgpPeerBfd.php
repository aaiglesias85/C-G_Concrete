<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RouterBgpPeerBfd</code>
 */
class RouterBgpPeerBfd extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum interval, in milliseconds, between BFD control packets received from the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the transmit interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_receive_interval = 186981614;</code>
     */
    private $min_receive_interval = null;
    /**
     * The minimum interval, in milliseconds, between BFD control packets transmitted to the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the corresponding receive interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_transmit_interval = 523282631;</code>
     */
    private $min_transmit_interval = null;
    /**
     * The number of consecutive BFD packets that must be missed before BFD declares that a peer is unavailable. If set, the value must be a value between 5 and 16. The default is 5.
     *
     * Generated from protobuf field <code>optional uint32 multiplier = 191331777;</code>
     */
    private $multiplier = null;
    /**
     * The BFD session initialization mode for this BGP peer. If set to ACTIVE, the Cloud Router will initiate the BFD session for this BGP peer. If set to PASSIVE, the Cloud Router will wait for the peer router to initiate the BFD session for this BGP peer. If set to DISABLED, BFD is disabled for this BGP peer. The default is DISABLED.
     * Check the SessionInitializationMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string session_initialization_mode = 105957049;</code>
     */
    private $session_initialization_mode = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_receive_interval
     *           The minimum interval, in milliseconds, between BFD control packets received from the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the transmit interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *     @type int $min_transmit_interval
     *           The minimum interval, in milliseconds, between BFD control packets transmitted to the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the corresponding receive interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *     @type int $multiplier
     *           The number of consecutive BFD packets that must be missed before BFD declares that a peer is unavailable. If set, the value must be a value between 5 and 16. The default is 5.
     *     @type string $session_initialization_mode
     *           The BFD session initialization mode for this BGP peer. If set to ACTIVE, the Cloud Router will initiate the BFD session for this BGP peer. If set to PASSIVE, the Cloud Router will wait for the peer router to initiate the BFD session for this BGP peer. If set to DISABLED, BFD is disabled for this BGP peer. The default is DISABLED.
     *           Check the SessionInitializationMode enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum interval, in milliseconds, between BFD control packets received from the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the transmit interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_receive_interval = 186981614;</code>
     * @return int
     */
    public function getMinReceiveInterval()
    {
        return isset($this->min_receive_interval) ? $this->min_receive_interval : 0;
    }

    public function hasMinReceiveInterval()
    {
        return isset($this->min_receive_interval);
    }

    public function clearMinReceiveInterval()
    {
        unset($this->min_receive_interval);
    }

    /**
     * The minimum interval, in milliseconds, between BFD control packets received from the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the transmit interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_receive_interval = 186981614;</code>
     * @param int $var
     * @return $this
     */
    public function setMinReceiveInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_receive_interval = $var;

        return $this;
    }

    /**
     * The minimum interval, in milliseconds, between BFD control packets transmitted to the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the corresponding receive interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_transmit_interval = 523282631;</code>
     * @return int
     */
    public function getMinTransmitInterval()
    {
        return isset($this->min_transmit_interval) ? $this->min_transmit_interval : 0;
    }

    public function hasMinTransmitInterval()
    {
        return isset($this->min_transmit_interval);
    }

    public function clearMinTransmitInterval()
    {
        unset($this->min_transmit_interval);
    }

    /**
     * The minimum interval, in milliseconds, between BFD control packets transmitted to the peer router. The actual value is negotiated between the two routers and is equal to the greater of this value and the corresponding receive interval of the other router. If set, this value must be between 1000 and 30000. The default is 1000.
     *
     * Generated from protobuf field <code>optional uint32 min_transmit_interval = 523282631;</code>
     * @param int $var
     * @return $this
     */
    public function setMinTransmitInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_transmit_interval = $var;

        return $this;
    }

    /**
     * The number of consecutive BFD packets that must be missed before BFD declares that a peer is unavailable. If set, the value must be a value between 5 and 16. The default is 5.
     *
     * Generated from protobuf field <code>optional uint32 multiplier = 191331777;</code>
     * @return int
     */
    public function getMultiplier()
    {
        return isset($this->multiplier) ? $this->multiplier : 0;
    }

    public function hasMultiplier()
    {
        return isset($this->multiplier);
    }

    public function clearMultiplier()
    {
        unset($this->multiplier);
    }

    /**
     * The number of consecutive BFD packets that must be missed before BFD declares that a peer is unavailable. If set, the value must be a value between 5 and 16. The default is 5.
     *
     * Generated from protobuf field <code>optional uint32 multiplier = 191331777;</code>
     * @param int $var
     * @return $this
     */
    public function setMultiplier($var)
    {
        GPBUtil::checkUint32($var);
        $this->multiplier = $var;

        return $this;
    }

    /**
     * The BFD session initialization mode for this BGP peer. If set to ACTIVE, the Cloud Router will initiate the BFD session for this BGP peer. If set to PASSIVE, the Cloud Router will wait for the peer router to initiate the BFD session for this BGP peer. If set to DISABLED, BFD is disabled for this BGP peer. The default is DISABLED.
     * Check the SessionInitializationMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string session_initialization_mode = 105957049;</code>
     * @return string
     */
    public function getSessionInitializationMode()
    {
        return isset($this->session_initialization_mode) ? $this->session_initialization_mode : '';
    }

    public function hasSessionInitializationMode()
    {
        return isset($this->session_initialization_mode);
    }

    public function clearSessionInitializationMode()
    {
        unset($this->session_initialization_mode);
    }

    /**
     * The BFD session initialization mode for this BGP peer. If set to ACTIVE, the Cloud Router will initiate the BFD session for this BGP peer. If set to PASSIVE, the Cloud Router will wait for the peer router to initiate the BFD session for this BGP peer. If set to DISABLED, BFD is disabled for this BGP peer. The default is DISABLED.
     * Check the SessionInitializationMode enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string session_initialization_mode = 105957049;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionInitializationMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_initialization_mode = $var;

        return $this;
    }

}

