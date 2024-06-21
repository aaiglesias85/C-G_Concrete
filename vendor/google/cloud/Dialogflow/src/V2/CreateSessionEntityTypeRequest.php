<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/session_entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [SessionEntityTypes.CreateSessionEntityType][google.cloud.dialogflow.v2.SessionEntityTypes.CreateSessionEntityType].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.CreateSessionEntityTypeRequest</code>
 */
class CreateSessionEntityTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session to create a session entity type for.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>` or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User ID>/
     * sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The session entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $session_entity_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The session to create a session entity type for.
     *           Format: `projects/<Project ID>/agent/sessions/<Session ID>` or
     *           `projects/<Project ID>/agent/environments/<Environment ID>/users/<User ID>/
     *           sessions/<Session ID>`.
     *           If `Environment ID` is not specified, we assume default 'draft'
     *           environment. If `User ID` is not specified, we assume default '-' user.
     *     @type \Google\Cloud\Dialogflow\V2\SessionEntityType $session_entity_type
     *           Required. The session entity type to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The session to create a session entity type for.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>` or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User ID>/
     * sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The session to create a session entity type for.
     * Format: `projects/<Project ID>/agent/sessions/<Session ID>` or
     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User ID>/
     * sessions/<Session ID>`.
     * If `Environment ID` is not specified, we assume default 'draft'
     * environment. If `User ID` is not specified, we assume default '-' user.
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
     * Required. The session entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\SessionEntityType|null
     */
    public function getSessionEntityType()
    {
        return $this->session_entity_type;
    }

    public function hasSessionEntityType()
    {
        return isset($this->session_entity_type);
    }

    public function clearSessionEntityType()
    {
        unset($this->session_entity_type);
    }

    /**
     * Required. The session entity type to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SessionEntityType session_entity_type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\SessionEntityType $var
     * @return $this
     */
    public function setSessionEntityType($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SessionEntityType::class);
        $this->session_entity_type = $var;

        return $this;
    }

}

