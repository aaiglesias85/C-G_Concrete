<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spell check result.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.SpellingCorrection</code>
 */
class SpellingCorrection extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates if the query was corrected by the spell checker.
     *
     * Generated from protobuf field <code>bool corrected = 1;</code>
     */
    private $corrected = false;
    /**
     * Correction output consisting of the corrected keyword string.
     *
     * Generated from protobuf field <code>string corrected_text = 2;</code>
     */
    private $corrected_text = '';
    /**
     * Corrected output with html tags to highlight the corrected words.
     * Corrected words are called out with the "<b><i>...</i></b>" html tags.
     * For example, the user input query is "software enginear", where the second
     * word, "enginear," is incorrect. It should be "engineer". When spelling
     * correction is enabled, this value is
     * "software <b><i>engineer</i></b>".
     *
     * Generated from protobuf field <code>string corrected_html = 3;</code>
     */
    private $corrected_html = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $corrected
     *           Indicates if the query was corrected by the spell checker.
     *     @type string $corrected_text
     *           Correction output consisting of the corrected keyword string.
     *     @type string $corrected_html
     *           Corrected output with html tags to highlight the corrected words.
     *           Corrected words are called out with the "<b><i>...</i></b>" html tags.
     *           For example, the user input query is "software enginear", where the second
     *           word, "enginear," is incorrect. It should be "engineer". When spelling
     *           correction is enabled, this value is
     *           "software <b><i>engineer</i></b>".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates if the query was corrected by the spell checker.
     *
     * Generated from protobuf field <code>bool corrected = 1;</code>
     * @return bool
     */
    public function getCorrected()
    {
        return $this->corrected;
    }

    /**
     * Indicates if the query was corrected by the spell checker.
     *
     * Generated from protobuf field <code>bool corrected = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCorrected($var)
    {
        GPBUtil::checkBool($var);
        $this->corrected = $var;

        return $this;
    }

    /**
     * Correction output consisting of the corrected keyword string.
     *
     * Generated from protobuf field <code>string corrected_text = 2;</code>
     * @return string
     */
    public function getCorrectedText()
    {
        return $this->corrected_text;
    }

    /**
     * Correction output consisting of the corrected keyword string.
     *
     * Generated from protobuf field <code>string corrected_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCorrectedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->corrected_text = $var;

        return $this;
    }

    /**
     * Corrected output with html tags to highlight the corrected words.
     * Corrected words are called out with the "<b><i>...</i></b>" html tags.
     * For example, the user input query is "software enginear", where the second
     * word, "enginear," is incorrect. It should be "engineer". When spelling
     * correction is enabled, this value is
     * "software <b><i>engineer</i></b>".
     *
     * Generated from protobuf field <code>string corrected_html = 3;</code>
     * @return string
     */
    public function getCorrectedHtml()
    {
        return $this->corrected_html;
    }

    /**
     * Corrected output with html tags to highlight the corrected words.
     * Corrected words are called out with the "<b><i>...</i></b>" html tags.
     * For example, the user input query is "software enginear", where the second
     * word, "enginear," is incorrect. It should be "engineer". When spelling
     * correction is enabled, this value is
     * "software <b><i>engineer</i></b>".
     *
     * Generated from protobuf field <code>string corrected_html = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCorrectedHtml($var)
    {
        GPBUtil::checkString($var, True);
        $this->corrected_html = $var;

        return $this;
    }

}

