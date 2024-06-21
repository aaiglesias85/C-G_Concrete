<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BfdPacket</code>
 */
class BfdPacket extends \Google\Protobuf\Internal\Message
{
    /**
     * The Authentication Present bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool authentication_present = 105974260;</code>
     */
    private $authentication_present = null;
    /**
     * The Control Plane Independent bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool control_plane_independent = 62363573;</code>
     */
    private $control_plane_independent = null;
    /**
     * The demand bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool demand = 275180107;</code>
     */
    private $demand = null;
    /**
     * The diagnostic code specifies the local system's reason for the last change in session state. This allows remote systems to determine the reason that the previous session failed, for example. These diagnostic codes are specified in section 4.1 of RFC5880
     * Check the Diagnostic enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string diagnostic = 62708647;</code>
     */
    private $diagnostic = null;
    /**
     * The Final bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool final = 97436022;</code>
     */
    private $final = null;
    /**
     * The length of the BFD Control packet in bytes. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 length = 504249062;</code>
     */
    private $length = null;
    /**
     * The Required Min Echo RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_echo_rx_interval_ms = 97286868;</code>
     */
    private $min_echo_rx_interval_ms = null;
    /**
     * The Required Min RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_rx_interval_ms = 463399028;</code>
     */
    private $min_rx_interval_ms = null;
    /**
     * The Desired Min TX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_tx_interval_ms = 526023602;</code>
     */
    private $min_tx_interval_ms = null;
    /**
     * The detection time multiplier of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 multiplier = 191331777;</code>
     */
    private $multiplier = null;
    /**
     * The multipoint bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool multipoint = 191421431;</code>
     */
    private $multipoint = null;
    /**
     * The My Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 my_discriminator = 76663113;</code>
     */
    private $my_discriminator = null;
    /**
     * The Poll bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool poll = 3446719;</code>
     */
    private $poll = null;
    /**
     * The current BFD session state as seen by the transmitting system. These states are specified in section 4.1 of RFC5880
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     */
    private $state = null;
    /**
     * The version number of the BFD protocol, as specified in section 4.1 of RFC5880.
     *
     * Generated from protobuf field <code>optional uint32 version = 351608024;</code>
     */
    private $version = null;
    /**
     * The Your Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 your_discriminator = 515634064;</code>
     */
    private $your_discriminator = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $authentication_present
     *           The Authentication Present bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type bool $control_plane_independent
     *           The Control Plane Independent bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type bool $demand
     *           The demand bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type string $diagnostic
     *           The diagnostic code specifies the local system's reason for the last change in session state. This allows remote systems to determine the reason that the previous session failed, for example. These diagnostic codes are specified in section 4.1 of RFC5880
     *           Check the Diagnostic enum for the list of possible values.
     *     @type bool $final
     *           The Final bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type int $length
     *           The length of the BFD Control packet in bytes. This is specified in section 4.1 of RFC5880
     *     @type int $min_echo_rx_interval_ms
     *           The Required Min Echo RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type int $min_rx_interval_ms
     *           The Required Min RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type int $min_tx_interval_ms
     *           The Desired Min TX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type int $multiplier
     *           The detection time multiplier of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type bool $multipoint
     *           The multipoint bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type int $my_discriminator
     *           The My Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type bool $poll
     *           The Poll bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *     @type string $state
     *           The current BFD session state as seen by the transmitting system. These states are specified in section 4.1 of RFC5880
     *           Check the State enum for the list of possible values.
     *     @type int $version
     *           The version number of the BFD protocol, as specified in section 4.1 of RFC5880.
     *     @type int $your_discriminator
     *           The Your Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The Authentication Present bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool authentication_present = 105974260;</code>
     * @return bool
     */
    public function getAuthenticationPresent()
    {
        return isset($this->authentication_present) ? $this->authentication_present : false;
    }

    public function hasAuthenticationPresent()
    {
        return isset($this->authentication_present);
    }

    public function clearAuthenticationPresent()
    {
        unset($this->authentication_present);
    }

    /**
     * The Authentication Present bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool authentication_present = 105974260;</code>
     * @param bool $var
     * @return $this
     */
    public function setAuthenticationPresent($var)
    {
        GPBUtil::checkBool($var);
        $this->authentication_present = $var;

        return $this;
    }

    /**
     * The Control Plane Independent bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool control_plane_independent = 62363573;</code>
     * @return bool
     */
    public function getControlPlaneIndependent()
    {
        return isset($this->control_plane_independent) ? $this->control_plane_independent : false;
    }

    public function hasControlPlaneIndependent()
    {
        return isset($this->control_plane_independent);
    }

    public function clearControlPlaneIndependent()
    {
        unset($this->control_plane_independent);
    }

    /**
     * The Control Plane Independent bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool control_plane_independent = 62363573;</code>
     * @param bool $var
     * @return $this
     */
    public function setControlPlaneIndependent($var)
    {
        GPBUtil::checkBool($var);
        $this->control_plane_independent = $var;

        return $this;
    }

    /**
     * The demand bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool demand = 275180107;</code>
     * @return bool
     */
    public function getDemand()
    {
        return isset($this->demand) ? $this->demand : false;
    }

    public function hasDemand()
    {
        return isset($this->demand);
    }

    public function clearDemand()
    {
        unset($this->demand);
    }

    /**
     * The demand bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool demand = 275180107;</code>
     * @param bool $var
     * @return $this
     */
    public function setDemand($var)
    {
        GPBUtil::checkBool($var);
        $this->demand = $var;

        return $this;
    }

    /**
     * The diagnostic code specifies the local system's reason for the last change in session state. This allows remote systems to determine the reason that the previous session failed, for example. These diagnostic codes are specified in section 4.1 of RFC5880
     * Check the Diagnostic enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string diagnostic = 62708647;</code>
     * @return string
     */
    public function getDiagnostic()
    {
        return isset($this->diagnostic) ? $this->diagnostic : '';
    }

    public function hasDiagnostic()
    {
        return isset($this->diagnostic);
    }

    public function clearDiagnostic()
    {
        unset($this->diagnostic);
    }

    /**
     * The diagnostic code specifies the local system's reason for the last change in session state. This allows remote systems to determine the reason that the previous session failed, for example. These diagnostic codes are specified in section 4.1 of RFC5880
     * Check the Diagnostic enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string diagnostic = 62708647;</code>
     * @param string $var
     * @return $this
     */
    public function setDiagnostic($var)
    {
        GPBUtil::checkString($var, True);
        $this->diagnostic = $var;

        return $this;
    }

    /**
     * The Final bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool final = 97436022;</code>
     * @return bool
     */
    public function getFinal()
    {
        return isset($this->final) ? $this->final : false;
    }

    public function hasFinal()
    {
        return isset($this->final);
    }

    public function clearFinal()
    {
        unset($this->final);
    }

    /**
     * The Final bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool final = 97436022;</code>
     * @param bool $var
     * @return $this
     */
    public function setFinal($var)
    {
        GPBUtil::checkBool($var);
        $this->final = $var;

        return $this;
    }

    /**
     * The length of the BFD Control packet in bytes. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 length = 504249062;</code>
     * @return int
     */
    public function getLength()
    {
        return isset($this->length) ? $this->length : 0;
    }

    public function hasLength()
    {
        return isset($this->length);
    }

    public function clearLength()
    {
        unset($this->length);
    }

    /**
     * The length of the BFD Control packet in bytes. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 length = 504249062;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkUint32($var);
        $this->length = $var;

        return $this;
    }

    /**
     * The Required Min Echo RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_echo_rx_interval_ms = 97286868;</code>
     * @return int
     */
    public function getMinEchoRxIntervalMs()
    {
        return isset($this->min_echo_rx_interval_ms) ? $this->min_echo_rx_interval_ms : 0;
    }

    public function hasMinEchoRxIntervalMs()
    {
        return isset($this->min_echo_rx_interval_ms);
    }

    public function clearMinEchoRxIntervalMs()
    {
        unset($this->min_echo_rx_interval_ms);
    }

    /**
     * The Required Min Echo RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_echo_rx_interval_ms = 97286868;</code>
     * @param int $var
     * @return $this
     */
    public function setMinEchoRxIntervalMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_echo_rx_interval_ms = $var;

        return $this;
    }

    /**
     * The Required Min RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_rx_interval_ms = 463399028;</code>
     * @return int
     */
    public function getMinRxIntervalMs()
    {
        return isset($this->min_rx_interval_ms) ? $this->min_rx_interval_ms : 0;
    }

    public function hasMinRxIntervalMs()
    {
        return isset($this->min_rx_interval_ms);
    }

    public function clearMinRxIntervalMs()
    {
        unset($this->min_rx_interval_ms);
    }

    /**
     * The Required Min RX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_rx_interval_ms = 463399028;</code>
     * @param int $var
     * @return $this
     */
    public function setMinRxIntervalMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_rx_interval_ms = $var;

        return $this;
    }

    /**
     * The Desired Min TX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_tx_interval_ms = 526023602;</code>
     * @return int
     */
    public function getMinTxIntervalMs()
    {
        return isset($this->min_tx_interval_ms) ? $this->min_tx_interval_ms : 0;
    }

    public function hasMinTxIntervalMs()
    {
        return isset($this->min_tx_interval_ms);
    }

    public function clearMinTxIntervalMs()
    {
        unset($this->min_tx_interval_ms);
    }

    /**
     * The Desired Min TX Interval value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 min_tx_interval_ms = 526023602;</code>
     * @param int $var
     * @return $this
     */
    public function setMinTxIntervalMs($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_tx_interval_ms = $var;

        return $this;
    }

    /**
     * The detection time multiplier of the BFD packet. This is specified in section 4.1 of RFC5880
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
     * The detection time multiplier of the BFD packet. This is specified in section 4.1 of RFC5880
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
     * The multipoint bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool multipoint = 191421431;</code>
     * @return bool
     */
    public function getMultipoint()
    {
        return isset($this->multipoint) ? $this->multipoint : false;
    }

    public function hasMultipoint()
    {
        return isset($this->multipoint);
    }

    public function clearMultipoint()
    {
        unset($this->multipoint);
    }

    /**
     * The multipoint bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool multipoint = 191421431;</code>
     * @param bool $var
     * @return $this
     */
    public function setMultipoint($var)
    {
        GPBUtil::checkBool($var);
        $this->multipoint = $var;

        return $this;
    }

    /**
     * The My Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 my_discriminator = 76663113;</code>
     * @return int
     */
    public function getMyDiscriminator()
    {
        return isset($this->my_discriminator) ? $this->my_discriminator : 0;
    }

    public function hasMyDiscriminator()
    {
        return isset($this->my_discriminator);
    }

    public function clearMyDiscriminator()
    {
        unset($this->my_discriminator);
    }

    /**
     * The My Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 my_discriminator = 76663113;</code>
     * @param int $var
     * @return $this
     */
    public function setMyDiscriminator($var)
    {
        GPBUtil::checkUint32($var);
        $this->my_discriminator = $var;

        return $this;
    }

    /**
     * The Poll bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool poll = 3446719;</code>
     * @return bool
     */
    public function getPoll()
    {
        return isset($this->poll) ? $this->poll : false;
    }

    public function hasPoll()
    {
        return isset($this->poll);
    }

    public function clearPoll()
    {
        unset($this->poll);
    }

    /**
     * The Poll bit of the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional bool poll = 3446719;</code>
     * @param bool $var
     * @return $this
     */
    public function setPoll($var)
    {
        GPBUtil::checkBool($var);
        $this->poll = $var;

        return $this;
    }

    /**
     * The current BFD session state as seen by the transmitting system. These states are specified in section 4.1 of RFC5880
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @return string
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : '';
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * The current BFD session state as seen by the transmitting system. These states are specified in section 4.1 of RFC5880
     * Check the State enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string state = 109757585;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * The version number of the BFD protocol, as specified in section 4.1 of RFC5880.
     *
     * Generated from protobuf field <code>optional uint32 version = 351608024;</code>
     * @return int
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : 0;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * The version number of the BFD protocol, as specified in section 4.1 of RFC5880.
     *
     * Generated from protobuf field <code>optional uint32 version = 351608024;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

    /**
     * The Your Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 your_discriminator = 515634064;</code>
     * @return int
     */
    public function getYourDiscriminator()
    {
        return isset($this->your_discriminator) ? $this->your_discriminator : 0;
    }

    public function hasYourDiscriminator()
    {
        return isset($this->your_discriminator);
    }

    public function clearYourDiscriminator()
    {
        unset($this->your_discriminator);
    }

    /**
     * The Your Discriminator value in the BFD packet. This is specified in section 4.1 of RFC5880
     *
     * Generated from protobuf field <code>optional uint32 your_discriminator = 515634064;</code>
     * @param int $var
     * @return $this
     */
    public function setYourDiscriminator($var)
    {
        GPBUtil::checkUint32($var);
        $this->your_discriminator = $var;

        return $this;
    }

}

