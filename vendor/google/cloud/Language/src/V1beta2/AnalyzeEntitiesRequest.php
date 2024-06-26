<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1beta2/language_service.proto

namespace Google\Cloud\Language\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entity analysis request message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1beta2.AnalyzeEntitiesRequest</code>
 */
class AnalyzeEntitiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $document = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     */
    private $encoding_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1beta2\Document $document
     *           Required. Input document.
     *     @type int $encoding_type
     *           The encoding type used by the API to calculate offsets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1Beta2\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Language\V1beta2\Document|null
     */
    public function getDocument()
    {
        return $this->document;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * Required. Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Language\V1beta2\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1beta2\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1beta2.EncodingType encoding_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1beta2\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

