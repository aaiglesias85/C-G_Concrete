<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a part of a message possibly annotated with an entity. The part
 * can be an entity or purely a part of the message between two entities or
 * message start/end.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AnnotatedMessagePart</code>
 */
class AnnotatedMessagePart extends \Google\Protobuf\Internal\Message
{
    /**
     * A part of a message possibly annotated with an entity.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    private $text = '';
    /**
     * The [Dialogflow system entity
     * type](https://cloud.google.com/dialogflow/docs/reference/system-entities)
     * of this message part. If this is empty, Dialogflow could not annotate the
     * phrase part with a system entity.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     */
    private $entity_type = '';
    /**
     * The [Dialogflow system entity formatted value
     * ](https://cloud.google.com/dialogflow/docs/reference/system-entities) of
     * this message part. For example for a system entity of type
     * `&#64;sys.unit-currency`, this may contain:
     * <pre>
     * {
     *   "amount": 5,
     *   "currency": "USD"
     * }
     * </pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Value formatted_value = 3;</code>
     */
    private $formatted_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           A part of a message possibly annotated with an entity.
     *     @type string $entity_type
     *           The [Dialogflow system entity
     *           type](https://cloud.google.com/dialogflow/docs/reference/system-entities)
     *           of this message part. If this is empty, Dialogflow could not annotate the
     *           phrase part with a system entity.
     *     @type \Google\Protobuf\Value $formatted_value
     *           The [Dialogflow system entity formatted value
     *           ](https://cloud.google.com/dialogflow/docs/reference/system-entities) of
     *           this message part. For example for a system entity of type
     *           `&#64;sys.unit-currency`, this may contain:
     *           <pre>
     *           {
     *             "amount": 5,
     *             "currency": "USD"
     *           }
     *           </pre>
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * A part of a message possibly annotated with an entity.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * A part of a message possibly annotated with an entity.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The [Dialogflow system entity
     * type](https://cloud.google.com/dialogflow/docs/reference/system-entities)
     * of this message part. If this is empty, Dialogflow could not annotate the
     * phrase part with a system entity.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * The [Dialogflow system entity
     * type](https://cloud.google.com/dialogflow/docs/reference/system-entities)
     * of this message part. If this is empty, Dialogflow could not annotate the
     * phrase part with a system entity.
     *
     * Generated from protobuf field <code>string entity_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * The [Dialogflow system entity formatted value
     * ](https://cloud.google.com/dialogflow/docs/reference/system-entities) of
     * this message part. For example for a system entity of type
     * `&#64;sys.unit-currency`, this may contain:
     * <pre>
     * {
     *   "amount": 5,
     *   "currency": "USD"
     * }
     * </pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Value formatted_value = 3;</code>
     * @return \Google\Protobuf\Value|null
     */
    public function getFormattedValue()
    {
        return $this->formatted_value;
    }

    public function hasFormattedValue()
    {
        return isset($this->formatted_value);
    }

    public function clearFormattedValue()
    {
        unset($this->formatted_value);
    }

    /**
     * The [Dialogflow system entity formatted value
     * ](https://cloud.google.com/dialogflow/docs/reference/system-entities) of
     * this message part. For example for a system entity of type
     * `&#64;sys.unit-currency`, this may contain:
     * <pre>
     * {
     *   "amount": 5,
     *   "currency": "USD"
     * }
     * </pre>
     *
     * Generated from protobuf field <code>.google.protobuf.Value formatted_value = 3;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setFormattedValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->formatted_value = $var;

        return $this;
    }

}

