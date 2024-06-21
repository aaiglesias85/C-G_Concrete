<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Route creation request.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.CreateRouteRequest</code>
 */
class CreateRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent that owns the collection of Routes.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Route identifier.
     *
     * Generated from protobuf field <code>string route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $route_id = '';
    /**
     * Required. The Route resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Route route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $route = null;
    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent that owns the collection of Routes.
     *     @type string $route_id
     *           Required. The Route identifier.
     *     @type \Google\Cloud\Datastream\V1\Route $route
     *           Required. The Route resource to create.
     *     @type string $request_id
     *           Optional. A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and the
     *           request times out. If you make the request again with the same request ID,
     *           the server can check if original operation with the same request ID was
     *           received, and if so, will ignore the second request. This prevents clients
     *           from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent that owns the collection of Routes.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent that owns the collection of Routes.
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
     * Required. The Route identifier.
     *
     * Generated from protobuf field <code>string route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRouteId()
    {
        return $this->route_id;
    }

    /**
     * Required. The Route identifier.
     *
     * Generated from protobuf field <code>string route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->route_id = $var;

        return $this;
    }

    /**
     * Required. The Route resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Route route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastream\V1\Route|null
     */
    public function getRoute()
    {
        return $this->route;
    }

    public function hasRoute()
    {
        return isset($this->route);
    }

    public function clearRoute()
    {
        unset($this->route);
    }

    /**
     * Required. The Route resource to create.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Route route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastream\V1\Route $var
     * @return $this
     */
    public function setRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\Route::class);
        $this->route = $var;

        return $this;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and the
     * request times out. If you make the request again with the same request ID,
     * the server can check if original operation with the same request ID was
     * received, and if so, will ignore the second request. This prevents clients
     * from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

