<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ReservationService.SearchAllAssignments][google.cloud.bigquery.reservation.v1.ReservationService.SearchAllAssignments].
 * Note: "bigquery.reservationAssignments.search" permission is required on the
 * related assignee.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.SearchAllAssignmentsRequest</code>
 */
class SearchAllAssignmentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name with location (project name could be the wildcard '-'),
     * e.g.:
     *   `projects/-/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Please specify resource name as assignee in the query.
     * Examples:
     * * `assignee=projects/myproject`
     * * `assignee=folders/123`
     * * `assignee=organizations/456`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     */
    private $query = '';
    /**
     * The maximum number of items to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name with location (project name could be the wildcard '-'),
     *           e.g.:
     *             `projects/-/locations/US`.
     *     @type string $query
     *           Please specify resource name as assignee in the query.
     *           Examples:
     *           * `assignee=projects/myproject`
     *           * `assignee=folders/123`
     *           * `assignee=organizations/456`
     *     @type int $page_size
     *           The maximum number of items to return per page.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name with location (project name could be the wildcard '-'),
     * e.g.:
     *   `projects/-/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name with location (project name could be the wildcard '-'),
     * e.g.:
     *   `projects/-/locations/US`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Please specify resource name as assignee in the query.
     * Examples:
     * * `assignee=projects/myproject`
     * * `assignee=folders/123`
     * * `assignee=organizations/456`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Please specify resource name as assignee in the query.
     * Examples:
     * * `assignee=projects/myproject`
     * * `assignee=folders/123`
     * * `assignee=organizations/456`
     *
     * Generated from protobuf field <code>string query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * The maximum number of items to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return per page.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

