<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to delete a `ServicePerimeter`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.DeleteServicePerimeterRequest</code>
 */
class DeleteServicePerimeterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format:
     * `accessPolicies/{policy_id}/servicePerimeters/{service_perimeter_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name for the [Service Perimeter]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter].
     *           Format:
     *           `accessPolicies/{policy_id}/servicePerimeters/{service_perimeter_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format:
     * `accessPolicies/{policy_id}/servicePerimeters/{service_perimeter_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name for the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter].
     * Format:
     * `accessPolicies/{policy_id}/servicePerimeters/{service_perimeter_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

