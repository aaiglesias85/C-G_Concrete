<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response to CommitServicePerimetersRequest. This will be put inside of
 * Operation.response field.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.CommitServicePerimetersResponse</code>
 */
class CommitServicePerimetersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of all the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances in
     * the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 1;</code>
     */
    private $service_perimeters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Identity\AccessContextManager\V1\ServicePerimeter[]|\Google\Protobuf\Internal\RepeatedField $service_perimeters
     *           List of all the [Service Perimeter]
     *           [google.identity.accesscontextmanager.v1.ServicePerimeter] instances in
     *           the [Access Policy]
     *           [google.identity.accesscontextmanager.v1.AccessPolicy].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * List of all the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances in
     * the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServicePerimeters()
    {
        return $this->service_perimeters;
    }

    /**
     * List of all the [Service Perimeter]
     * [google.identity.accesscontextmanager.v1.ServicePerimeter] instances in
     * the [Access Policy]
     * [google.identity.accesscontextmanager.v1.AccessPolicy].
     *
     * Generated from protobuf field <code>repeated .google.identity.accesscontextmanager.v1.ServicePerimeter service_perimeters = 1;</code>
     * @param \Google\Identity\AccessContextManager\V1\ServicePerimeter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServicePerimeters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Identity\AccessContextManager\V1\ServicePerimeter::class);
        $this->service_perimeters = $arr;

        return $this;
    }

}

