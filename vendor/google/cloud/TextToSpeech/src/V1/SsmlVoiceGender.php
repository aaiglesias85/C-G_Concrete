<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1;

use UnexpectedValueException;

/**
 * Gender of the voice as described in
 * [SSML voice element](https://www.w3.org/TR/speech-synthesis11/#edef_voice).
 *
 * Protobuf type <code>google.cloud.texttospeech.v1.SsmlVoiceGender</code>
 */
class SsmlVoiceGender
{
    /**
     * An unspecified gender.
     * In VoiceSelectionParams, this means that the client doesn't care which
     * gender the selected voice will have. In the Voice field of
     * ListVoicesResponse, this may mean that the voice doesn't fit any of the
     * other categories in this enum, or that the gender of the voice isn't known.
     *
     * Generated from protobuf enum <code>SSML_VOICE_GENDER_UNSPECIFIED = 0;</code>
     */
    const SSML_VOICE_GENDER_UNSPECIFIED = 0;
    /**
     * A male voice.
     *
     * Generated from protobuf enum <code>MALE = 1;</code>
     */
    const MALE = 1;
    /**
     * A female voice.
     *
     * Generated from protobuf enum <code>FEMALE = 2;</code>
     */
    const FEMALE = 2;
    /**
     * A gender-neutral voice. This voice is not yet supported.
     *
     * Generated from protobuf enum <code>NEUTRAL = 3;</code>
     */
    const NEUTRAL = 3;

    private static $valueToName = [
        self::SSML_VOICE_GENDER_UNSPECIFIED => 'SSML_VOICE_GENDER_UNSPECIFIED',
        self::MALE => 'MALE',
        self::FEMALE => 'FEMALE',
        self::NEUTRAL => 'NEUTRAL',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

