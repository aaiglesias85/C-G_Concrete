<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/environment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Environments.GetEnvironment][google.cloud.dialogflow.v2.Environments.GetEnvironment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GetEnvironmentRequest</code>
 */
class GetEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
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
     *           Required. The name of the environment.
     *           Supported formats:
     *           - `projects/<Project ID>/agent/environments/<Environment ID>`
     *           - `projects/<Project ID>/locations/<Location
     *             ID>/agent/environments/<Environment ID>`
     *           The environment ID for the default environment is `-`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Environment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the environment.
     * Supported formats:
     * - `projects/<Project ID>/agent/environments/<Environment ID>`
     * - `projects/<Project ID>/locations/<Location
     *   ID>/agent/environments/<Environment ID>`
     * The environment ID for the default environment is `-`.
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

