<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib\Models;

use JsonSerializable;

/**
 * The advocate structure
 */
class Advocate implements JsonSerializable
{
    /**
     * The advocate's name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * The advocate's last name
     * @required
     * @var string $lastname public property
     */
    public $lastname;

    /**
     * The advocate's email
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * The total amount of bonuses that the advocate must generate before being able to create a bonus redemption request.
     * @required
     * @maps payout_threshold
     * @var integer $payoutThreshold public property
     */
    public $payoutThreshold;

    /**
     * The advocate's avatar URL
     * @maps avatar_url
     * @var string $avatarUrl public property
     */
    public $avatarUrl;

    /**
     * Useful to store extra information about the advocate. e.g, the phone number, address, etc.
     * @var string $metadata public property
     */
    public $metadata;

    /**
     * Whether or not the advocate is allowed to refer services/products (Useful when using the Full Widget template).
     * @maps can_refer
     * @var bool $canRefer public property
     */
    public $canRefer;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name            Initialization value for $this->name
     * @param string  $lastname        Initialization value for $this->lastname
     * @param string  $email           Initialization value for $this->email
     * @param integer $payoutThreshold Initialization value for $this->payoutThreshold
     * @param string  $avatarUrl       Initialization value for $this->avatarUrl
     * @param string  $metadata        Initialization value for $this->metadata
     * @param bool    $canRefer        Initialization value for $this->canRefer
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 7:
                $this->name            = func_get_arg(0);
                $this->lastname        = func_get_arg(1);
                $this->email           = func_get_arg(2);
                $this->payoutThreshold = func_get_arg(3);
                $this->avatarUrl       = func_get_arg(4);
                $this->metadata        = func_get_arg(5);
                $this->canRefer        = func_get_arg(6);
                break;

            default:
                $this->canRefer = TRUE;
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']             = $this->name;
        $json['lastname']         = $this->lastname;
        $json['email']            = $this->email;
        $json['payout_threshold'] = $this->payoutThreshold;
        $json['avatar_url']       = $this->avatarUrl;
        $json['metadata']         = $this->metadata;
        $json['can_refer']        = $this->canRefer;

        return $json;
    }
}
