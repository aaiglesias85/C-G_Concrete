<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for synchronous translation.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.TranslateTextRequest</code>
 */
class TranslateTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The content of the input in string format.
     * We recommend the total content be less than 30k codepoints. The max length
     * of this field is 1024.
     * Use BatchTranslateText for larger text.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $contents;
    /**
     * Optional. The format of the source text, for example, "text/html",
     *  "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $mime_type = '';
    /**
     * Optional. The BCP-47 language code of the input text if
     * known, for example, "en-US" or "sr-Latn". Supported language codes are
     * listed in Language Support. If the source language isn't specified, the API
     * attempts to identify the source language automatically and returns the
     * source language within the response.
     *
     * Generated from protobuf field <code>string source_language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $source_language_code = '';
    /**
     * Required. The BCP-47 language code to use for translation of the input
     * text, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_language_code = '';
    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}` or
     * `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or
     * custom glossaries.
     * Models and glossaries must be within the same region (have same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * For global (non-regionalized) requests, use `location-id` `global`.
     * For example,
     * `projects/{project-number-or-id}/locations/global/models/general/nmt`.
     * If not provided, the default Google model (NMT) will be used.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $model = '';
    /**
     * Optional. Glossary to be applied. The glossary must be
     * within the same region (have the same location-id) as the model, otherwise
     * an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $glossary_config = null;
    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $contents
     *           Required. The content of the input in string format.
     *           We recommend the total content be less than 30k codepoints. The max length
     *           of this field is 1024.
     *           Use BatchTranslateText for larger text.
     *     @type string $mime_type
     *           Optional. The format of the source text, for example, "text/html",
     *            "text/plain". If left blank, the MIME type defaults to "text/html".
     *     @type string $source_language_code
     *           Optional. The BCP-47 language code of the input text if
     *           known, for example, "en-US" or "sr-Latn". Supported language codes are
     *           listed in Language Support. If the source language isn't specified, the API
     *           attempts to identify the source language automatically and returns the
     *           source language within the response.
     *     @type string $target_language_code
     *           Required. The BCP-47 language code to use for translation of the input
     *           text, set to one of the language codes listed in Language Support.
     *     @type string $parent
     *           Required. Project or location to make a call. Must refer to a caller's
     *           project.
     *           Format: `projects/{project-number-or-id}` or
     *           `projects/{project-number-or-id}/locations/{location-id}`.
     *           For global calls, use `projects/{project-number-or-id}/locations/global` or
     *           `projects/{project-number-or-id}`.
     *           Non-global location is required for requests using AutoML models or
     *           custom glossaries.
     *           Models and glossaries must be within the same region (have same
     *           location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *     @type string $model
     *           Optional. The `model` type requested for this translation.
     *           The format depends on model type:
     *           - AutoML Translation models:
     *             `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     *           - General (built-in) models:
     *             `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     *           For global (non-regionalized) requests, use `location-id` `global`.
     *           For example,
     *           `projects/{project-number-or-id}/locations/global/models/general/nmt`.
     *           If not provided, the default Google model (NMT) will be used.
     *     @type \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $glossary_config
     *           Optional. Glossary to be applied. The glossary must be
     *           within the same region (have the same location-id) as the model, otherwise
     *           an INVALID_ARGUMENT (400) error is returned.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels with user-defined metadata for the request.
     *           Label keys and values can be no longer than 63 characters
     *           (Unicode codepoints), can only contain lowercase letters, numeric
     *           characters, underscores and dashes. International characters are allowed.
     *           Label values are optional. Label keys must start with a letter.
     *           See https://cloud.google.com/translate/docs/advanced/labels for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The content of the input in string format.
     * We recommend the total content be less than 30k codepoints. The max length
     * of this field is 1024.
     * Use BatchTranslateText for larger text.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Required. The content of the input in string format.
     * We recommend the total content be less than 30k codepoints. The max length
     * of this field is 1024.
     * Use BatchTranslateText for larger text.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contents = $arr;

        return $this;
    }

    /**
     * Optional. The format of the source text, for example, "text/html",
     *  "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Optional. The format of the source text, for example, "text/html",
     *  "text/plain". If left blank, the MIME type defaults to "text/html".
     *
     * Generated from protobuf field <code>string mime_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code of the input text if
     * known, for example, "en-US" or "sr-Latn". Supported language codes are
     * listed in Language Support. If the source language isn't specified, the API
     * attempts to identify the source language automatically and returns the
     * source language within the response.
     *
     * Generated from protobuf field <code>string source_language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Optional. The BCP-47 language code of the input text if
     * known, for example, "en-US" or "sr-Latn". Supported language codes are
     * listed in Language Support. If the source language isn't specified, the API
     * attempts to identify the source language automatically and returns the
     * source language within the response.
     *
     * Generated from protobuf field <code>string source_language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

    /**
     * Required. The BCP-47 language code to use for translation of the input
     * text, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Required. The BCP-47 language code to use for translation of the input
     * text, set to one of the language codes listed in Language Support.
     *
     * Generated from protobuf field <code>string target_language_code = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_language_code = $var;

        return $this;
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}` or
     * `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or
     * custom glossaries.
     * Models and glossaries must be within the same region (have same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}` or
     * `projects/{project-number-or-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     * Non-global location is required for requests using AutoML models or
     * custom glossaries.
     * Models and glossaries must be within the same region (have same
     * location-id), otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * For global (non-regionalized) requests, use `location-id` `global`.
     * For example,
     * `projects/{project-number-or-id}/locations/global/models/general/nmt`.
     * If not provided, the default Google model (NMT) will be used.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. The `model` type requested for this translation.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-number-or-id}/locations/{location-id}/models/general/nmt`,
     * For global (non-regionalized) requests, use `location-id` `global`.
     * For example,
     * `projects/{project-number-or-id}/locations/global/models/general/nmt`.
     * If not provided, the default Google model (NMT) will be used.
     *
     * Generated from protobuf field <code>string model = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

    /**
     * Optional. Glossary to be applied. The glossary must be
     * within the same region (have the same location-id) as the model, otherwise
     * an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig|null
     */
    public function getGlossaryConfig()
    {
        return $this->glossary_config;
    }

    public function hasGlossaryConfig()
    {
        return isset($this->glossary_config);
    }

    public function clearGlossaryConfig()
    {
        unset($this->glossary_config);
    }

    /**
     * Optional. Glossary to be applied. The glossary must be
     * within the same region (have the same location-id) as the model, otherwise
     * an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.TranslateTextGlossaryConfig glossary_config = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig $var
     * @return $this
     */
    public function setGlossaryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\TranslateTextGlossaryConfig::class);
        $this->glossary_config = $var;

        return $this;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels with user-defined metadata for the request.
     * Label keys and values can be no longer than 63 characters
     * (Unicode codepoints), can only contain lowercase letters, numeric
     * characters, underscores and dashes. International characters are allowed.
     * Label values are optional. Label keys must start with a letter.
     * See https://cloud.google.com/translate/docs/advanced/labels for more
     * information.
     *
     * Generated from protobuf field <code>map<string, string> labels = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

