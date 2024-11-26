<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/cloudtasks.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing tasks using [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks].
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.ListTasksRequest</code>
 */
class ListTasksRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta3.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta3.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta3.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View response_view = 2;</code>
     */
    private $response_view = 0;
    /**
     * Maximum page size.
     * Fewer tasks than requested might be returned, even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] in the response to
     * determine if more tasks exist.
     * The maximum page size is 1000. If unspecified, the page size will be the
     * maximum.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
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
     *           Required. The queue name. For example:
     *           `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *     @type int $response_view
     *           The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] will be
     *           returned.
     *           By default response_view is [BASIC][google.cloud.tasks.v2beta3.Task.View.BASIC]; not all
     *           information is retrieved by default because some data, such as
     *           payloads, might be desirable to return only when needed because
     *           of its large size or because of the sensitivity of data that it
     *           contains.
     *           Authorization for [FULL][google.cloud.tasks.v2beta3.Task.View.FULL] requires
     *           `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     *           permission on the [Task][google.cloud.tasks.v2beta3.Task] resource.
     *     @type int $page_size
     *           Maximum page size.
     *           Fewer tasks than requested might be returned, even if more tasks exist; use
     *           [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] in the response to
     *           determine if more tasks exist.
     *           The maximum page size is 1000. If unspecified, the page size will be the
     *           maximum.
     *     @type string $page_token
     *           A token identifying the page of results to return.
     *           To request the first page results, page_token must be empty. To
     *           request the next page of results, page_token must be the value of
     *           [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] returned
     *           from the previous call to [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks]
     *           method.
     *           The page token is valid for only 2 hours.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Cloudtasks::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The queue name. For example:
     * `projects/PROJECT_ID/locations/LOCATION_ID/queues/QUEUE_ID`
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
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta3.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta3.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta3.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View response_view = 2;</code>
     * @return int
     */
    public function getResponseView()
    {
        return $this->response_view;
    }

    /**
     * The response_view specifies which subset of the [Task][google.cloud.tasks.v2beta3.Task] will be
     * returned.
     * By default response_view is [BASIC][google.cloud.tasks.v2beta3.Task.View.BASIC]; not all
     * information is retrieved by default because some data, such as
     * payloads, might be desirable to return only when needed because
     * of its large size or because of the sensitivity of data that it
     * contains.
     * Authorization for [FULL][google.cloud.tasks.v2beta3.Task.View.FULL] requires
     * `cloudtasks.tasks.fullView` [Google IAM](https://cloud.google.com/iam/)
     * permission on the [Task][google.cloud.tasks.v2beta3.Task] resource.
     *
     * Generated from protobuf field <code>.google.cloud.tasks.v2beta3.Task.View response_view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Tasks\V2beta3\Task\View::class);
        $this->response_view = $var;

        return $this;
    }

    /**
     * Maximum page size.
     * Fewer tasks than requested might be returned, even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] in the response to
     * determine if more tasks exist.
     * The maximum page size is 1000. If unspecified, the page size will be the
     * maximum.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum page size.
     * Fewer tasks than requested might be returned, even if more tasks exist; use
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] in the response to
     * determine if more tasks exist.
     * The maximum page size is 1000. If unspecified, the page size will be the
     * maximum.
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
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying the page of results to return.
     * To request the first page results, page_token must be empty. To
     * request the next page of results, page_token must be the value of
     * [next_page_token][google.cloud.tasks.v2beta3.ListTasksResponse.next_page_token] returned
     * from the previous call to [ListTasks][google.cloud.tasks.v2beta3.CloudTasks.ListTasks]
     * method.
     * The page token is valid for only 2 hours.
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

