<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/schema.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the GetSchema method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.GetSchemaRequest</code>
 */
class GetSchemaRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the schema to get.
     * Format is `projects/{project}/schemas/{schema}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * The set of fields to return in the response. If not set, returns a Schema
     * with `name` and `type`, but not `definition`. Set to `FULL` to retrieve all
     * fields.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaView view = 2;</code>
     */
    private $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the schema to get.
     *           Format is `projects/{project}/schemas/{schema}`.
     *     @type int $view
     *           The set of fields to return in the response. If not set, returns a Schema
     *           with `name` and `type`, but not `definition`. Set to `FULL` to retrieve all
     *           fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the schema to get.
     * Format is `projects/{project}/schemas/{schema}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the schema to get.
     * Format is `projects/{project}/schemas/{schema}`.
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

    /**
     * The set of fields to return in the response. If not set, returns a Schema
     * with `name` and `type`, but not `definition`. Set to `FULL` to retrieve all
     * fields.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaView view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The set of fields to return in the response. If not set, returns a Schema
     * with `name` and `type`, but not `definition`. Set to `FULL` to retrieve all
     * fields.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.SchemaView view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\PubSub\V1\SchemaView::class);
        $this->view = $var;

        return $this;
    }

}

