<?php
/*
 * GeniusReferralsLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GeniusReferralsLib\Controllers;

use GeniusReferralsLib\APIException;
use GeniusReferralsLib\APIHelper;
use GeniusReferralsLib\Configuration;
use GeniusReferralsLib\Models;
use GeniusReferralsLib\Exceptions;
use GeniusReferralsLib\Http\HttpRequest;
use GeniusReferralsLib\Http\HttpResponse;
use GeniusReferralsLib\Http\HttpMethod;
use GeniusReferralsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class BonusesController extends BaseController
{
    /**
     * @var BonusesController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return BonusesController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get the list of bonuses for a given account.
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $page         (optional) Page number, e.g. 1 would start at the first result, and 10 would start
     *                              at the tenth result.
     * @param integer $limit        (optional) Maximum number of results to return in the response. Default (10),
     *                              threshold (100)
     * @param string  $filter       (optional) Allowed fields: name, lastname, email, campaign_slug, from, to, created.
     *                              Use the following delimiters to build your filters params. The vertical bar ('\|')
     *                              to separate individual filter phrases and a double colon ('::') to separate the
     *                              names and values. The delimiter of the double colon (':') separates the property
     *                              name from the comparison value, enabling the comparison value to contain spaces.
     *                              Example: www.example.com/users?filter='name::todd\|city::denver\|title::grand
     *                              poobah'
     * @param string  $sort         (optional) Allowed fields: name, lastname, email, created. Use sort query-string
     *                              parameter that contains a delimited set of property names. For each property name,
     *                              sort in ascending order, and for each property prefixed with a dash ('-') sort in
     *                              descending order. Separate each property name with a vertical bar ('\|'), which is
     *                              consistent with the separation of the name\|value pairs in filtering, above. For
     *                              example, if we want to retrieve users in order of their last name (ascending),
     *                              first name (ascending) and hire date (descending), the request might look like this
     *                              www.example.com/users?sort='last_name\|first_name\|-hire_date'
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBonuses(
        $accountSlug,
        $page = 1,
        $limit = 10,
        $filter = null,
        $sort = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'         => (null != $page) ? $page : 1,
            'limit'        => (null != $limit) ? $limit : 10,
            'filter'       => $filter,
            'sort'         => $sort,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Make an attempt to give a bonus for to the advocate's referrer. The system processes the given
     * advocate (referral) and creates a bonus for the advocate's referrer if is needed. All restrictions
     * set on the campaigns for this account will be check out before giving the bonus to the advocate's
     * referrer.
     *
     * @param string             $accountSlug  The account identifier
     * @param Models\BonusesForm $bonusesForm  The body of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postBonus(
        $accountSlug,
        $bonusesForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($bonusesForm));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Check if there is a bonus to be given to the advocate. Allows the clients to check if there is a
     * bonus to be given, it simulates the behaivor of a POST request to /accounts/{account_slug}/bonuses
     * resource. This resource is idempotent.
     *
     * @param string $accountSlug    The account identifier
     * @param string $advocateToken  The referral's token. Usually the one that completed the purchase, or trigger an
     *                               event.
     * @param string $reference      The reference number for this request. Usually the order_id, payment_id, or
     *                               timestamp.
     * @param double $paymentAmount  The payment amount the referrals has made. Required for a percentage based
     *                               campaign.
     * @return string response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBonusCheckup(
        $accountSlug,
        $advocateToken,
        $reference,
        $paymentAmount
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/checkup';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug'   => $accountSlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'advocate_token' => $advocateToken,
            'reference'      => $reference,
            'payment_amount' => $paymentAmount,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Force the system to give a bonus to an advocate. The system will not take into account the
     * restriccions specified on the campaigns.
     *
     * @param string                  $accountSlug  The account identifier
     * @param Models\ForceBonusesForm $bonusForm    The body of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postForceBonus(
        $accountSlug,
        $bonusForm
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/force';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($bonusForm));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get a bonus request trace.
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $traceId      The trace id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBonusTrace(
        $accountSlug,
        $traceId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/traces/{trace_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            'trace_id'     => $traceId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Delete a bonus
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $bonusId      The bonus id
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteBonus(
        $accountSlug,
        $bonusId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/{bonus_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            'bonus_id'     => $bonusId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Get a bonus by a given id.
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $bonusId      The bonus id
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBonus(
        $accountSlug,
        $bonusId
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/{bonus_id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            'bonus_id'     => $bonusId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }

    /**
     * Get the list of bonuses traces (audit trail). Every time the system tries to give a bonus the an
     * advocate a new trace is created.
     *
     * @param string  $accountSlug  The account identifier
     * @param integer $page         (optional) Page number, e.g. 1 would start at the first result, and 10 would start
     *                              at the tenth result.
     * @param integer $limit        (optional) Maximum number of results to return in the response. Default (10),
     *                              threshold (100)
     * @param string  $filter       (optional) Allowed fields: reference, result, bonus_amount, advocate_token,
     *                              advocate_referrer_token, campaign_slug, from, to, created. Use the following
     *                              delimiters to build your filters params. The vertical bar ('\|') to separate
     *                              individual filter phrases and a double colon ('::') to separate the names and
     *                              values. The delimiter of the double colon (':') separates the property name from
     *                              the comparison value, enabling the comparison value to contain spaces. Example: www.
     *                              example.com/users?filter='name::todd\|city::denver\|title::grand poobah'
     * @param string  $sort         (optional) Allowed fields: created. Use sort query-string parameter that contains a
     *                              delimited set of property names. For each property name, sort in ascending order,
     *                              and for each property prefixed with a dash ('-') sort in descending order. Separate
     *                              each property name with a vertical bar ('\|'), which is consistent with the
     *                              separation of the name\|value pairs in filtering, above. For example, if we want to
     *                              retrieve users in order of their last name (ascending), first name (ascending) and
     *                              hire date (descending), the request might look like this www.example.com/users?
     *                              sort='last_name\|first_name\|-hire_date'
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBonusTraces(
        $accountSlug,
        $page = 1,
        $limit = 10,
        $filter = null,
        $sort = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/accounts/{account_slug}/bonuses/traces';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'account_slug' => $accountSlug,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'page'         => (null != $page) ? $page : 1,
            'limit'        => (null != $limit) ? $limit : 10,
            'filter'       => $filter,
            'sort'         => $sort,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json',
            'Content-Type' => Configuration::$contentType,
            'X-Auth-Token' => Configuration::$xAuthToken
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        return $response->body;
    }
}
