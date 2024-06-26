<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib;

use GeniusReferralsLib\Controllers;

/**
 * GeniusReferralsLib client class
 */
class GeniusReferralsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $contentType = null,
        $xAuthToken = null
    ) {
        Configuration::$contentType = $contentType ? $contentType : Configuration::$contentType;
        Configuration::$xAuthToken = $xAuthToken ? $xAuthToken : Configuration::$xAuthToken;
    }
 
    /**
     * Singleton access to Roots controller
     * @return Controllers\RootsController The *Singleton* instance
     */
    public function getRoots()
    {
        return Controllers\RootsController::getInstance();
    }
 
    /**
     * Singleton access to Authentications controller
     * @return Controllers\AuthenticationsController The *Singleton* instance
     */
    public function getAuthentications()
    {
        return Controllers\AuthenticationsController::getInstance();
    }
 
    /**
     * Singleton access to Advocates controller
     * @return Controllers\AdvocatesController The *Singleton* instance
     */
    public function getAdvocates()
    {
        return Controllers\AdvocatesController::getInstance();
    }
 
    /**
     * Singleton access to Accounts controller
     * @return Controllers\AccountsController The *Singleton* instance
     */
    public function getAccounts()
    {
        return Controllers\AccountsController::getInstance();
    }
 
    /**
     * Singleton access to Reports controller
     * @return Controllers\ReportsController The *Singleton* instance
     */
    public function getReports()
    {
        return Controllers\ReportsController::getInstance();
    }
 
    /**
     * Singleton access to Referrals controller
     * @return Controllers\ReferralsController The *Singleton* instance
     */
    public function getReferrals()
    {
        return Controllers\ReferralsController::getInstance();
    }
 
    /**
     * Singleton access to RedemptionRequests controller
     * @return Controllers\RedemptionRequestsController The *Singleton* instance
     */
    public function getRedemptionRequests()
    {
        return Controllers\RedemptionRequestsController::getInstance();
    }
 
    /**
     * Singleton access to Bonuses controller
     * @return Controllers\BonusesController The *Singleton* instance
     */
    public function getBonuses()
    {
        return Controllers\BonusesController::getInstance();
    }
 
    /**
     * Singleton access to Campaigns controller
     * @return Controllers\CampaignsController The *Singleton* instance
     */
    public function getCampaigns()
    {
        return Controllers\CampaignsController::getInstance();
    }
}
