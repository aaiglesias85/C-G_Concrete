<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2\Intent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an example that the agent is trained on.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.TrainingPhrase</code>
 */
class TrainingPhrase extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The unique identifier of this training phrase.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The type of the training phrase.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.TrainingPhrase.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = 0;
    /**
     * Required. The ordered list of training phrase parts.
     * The parts are concatenated in order to form the training phrase.
     * Note: The API does not automatically annotate training phrases like the
     * Dialogflow Console does.
     * Note: Do not forget to include whitespace at part boundaries,
     * so the training phrase is well formatted when the parts are concatenated.
     * If the training phrase does not need to be annotated with parameters,
     * you just need a single part with only the [Part.text][google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part.text] field set.
     * If you want to annotate the training phrase, you must create multiple
     * parts, where the fields of each part are populated in one of two ways:
     * -   `Part.text` is set to a part of the phrase that has no parameters.
     * -   `Part.text` is set to a part of the phrase that you want to annotate,
     *     and the `entity_type`, `alias`, and `user_defined` fields are all
     *     set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part parts = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parts;
    /**
     * Optional. Indicates how many times this example was added to
     * the intent. Each time a developer adds an existing sample by editing an
     * intent or training, this counter is increased.
     *
     * Generated from protobuf field <code>int32 times_added_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $times_added_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The unique identifier of this training phrase.
     *     @type int $type
     *           Required. The type of the training phrase.
     *     @type \Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase\Part[]|\Google\Protobuf\Internal\RepeatedField $parts
     *           Required. The ordered list of training phrase parts.
     *           The parts are concatenated in order to form the training phrase.
     *           Note: The API does not automatically annotate training phrases like the
     *           Dialogflow Console does.
     *           Note: Do not forget to include whitespace at part boundaries,
     *           so the training phrase is well formatted when the parts are concatenated.
     *           If the training phrase does not need to be annotated with parameters,
     *           you just need a single part with only the [Part.text][google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part.text] field set.
     *           If you want to annotate the training phrase, you must create multiple
     *           parts, where the fields of each part are populated in one of two ways:
     *           -   `Part.text` is set to a part of the phrase that has no parameters.
     *           -   `Part.text` is set to a part of the phrase that you want to annotate,
     *               and the `entity_type`, `alias`, and `user_defined` fields are all
     *               set.
     *     @type int $times_added_count
     *           Optional. Indicates how many times this example was added to
     *           the intent. Each time a developer adds an existing sample by editing an
     *           intent or training, this counter is increased.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The unique identifier of this training phrase.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The unique identifier of this training phrase.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The type of the training phrase.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.TrainingPhrase.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of the training phrase.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Intent.TrainingPhrase.Type type = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. The ordered list of training phrase parts.
     * The parts are concatenated in order to form the training phrase.
     * Note: The API does not automatically annotate training phrases like the
     * Dialogflow Console does.
     * Note: Do not forget to include whitespace at part boundaries,
     * so the training phrase is well formatted when the parts are concatenated.
     * If the training phrase does not need to be annotated with parameters,
     * you just need a single part with only the [Part.text][google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part.text] field set.
     * If you want to annotate the training phrase, you must create multiple
     * parts, where the fields of each part are populated in one of two ways:
     * -   `Part.text` is set to a part of the phrase that has no parameters.
     * -   `Part.text` is set to a part of the phrase that you want to annotate,
     *     and the `entity_type`, `alias`, and `user_defined` fields are all
     *     set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part parts = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParts()
    {
        return $this->parts;
    }

    /**
     * Required. The ordered list of training phrase parts.
     * The parts are concatenated in order to form the training phrase.
     * Note: The API does not automatically annotate training phrases like the
     * Dialogflow Console does.
     * Note: Do not forget to include whitespace at part boundaries,
     * so the training phrase is well formatted when the parts are concatenated.
     * If the training phrase does not need to be annotated with parameters,
     * you just need a single part with only the [Part.text][google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part.text] field set.
     * If you want to annotate the training phrase, you must create multiple
     * parts, where the fields of each part are populated in one of two ways:
     * -   `Part.text` is set to a part of the phrase that has no parameters.
     * -   `Part.text` is set to a part of the phrase that you want to annotate,
     *     and the `entity_type`, `alias`, and `user_defined` fields are all
     *     set.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Intent.TrainingPhrase.Part parts = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase\Part[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Intent\TrainingPhrase\Part::class);
        $this->parts = $arr;

        return $this;
    }

    /**
     * Optional. Indicates how many times this example was added to
     * the intent. Each time a developer adds an existing sample by editing an
     * intent or training, this counter is increased.
     *
     * Generated from protobuf field <code>int32 times_added_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTimesAddedCount()
    {
        return $this->times_added_count;
    }

    /**
     * Optional. Indicates how many times this example was added to
     * the intent. Each time a developer adds an existing sample by editing an
     * intent or training, this counter is increased.
     *
     * Generated from protobuf field <code>int32 times_added_count = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTimesAddedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->times_added_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TrainingPhrase::class, \Google\Cloud\Dialogflow\V2\Intent_TrainingPhrase::class);

