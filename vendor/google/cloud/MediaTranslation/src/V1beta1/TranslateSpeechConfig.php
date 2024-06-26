<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/mediatranslation/v1beta1/media_translation.proto

namespace Google\Cloud\MediaTranslation\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides information to the speech translation that specifies how to process
 * the request.
 *
 * Generated from protobuf message <code>google.cloud.mediatranslation.v1beta1.TranslateSpeechConfig</code>
 */
class TranslateSpeechConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Encoding of audio data.
     * Supported formats:
     * - `linear16`
     *   Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * - `flac`
     *   `flac` (Free Lossless Audio Codec) is the recommended encoding
     *   because it is lossless--therefore recognition is not compromised--and
     *   requires only about half the bandwidth of `linear16`.
     * - `mulaw`
     *   8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     * - `amr`
     *   Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     * - `amr-wb`
     *   Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     * - `ogg-opus`
     *   Opus encoded audio frames in [Ogg](https://wikipedia.org/wiki/Ogg)
     *   container. `sample_rate_hertz` must be one of 8000, 12000, 16000, 24000,
     *   or 48000.
     * - `mp3`
     *   MP3 audio. Support all standard MP3 bitrates (which range from 32-320
     *   kbps). When using this encoding, `sample_rate_hertz` has to match the
     *   sample rate of the file being used.
     *
     * Generated from protobuf field <code>string audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $audio_encoding = '';
    /**
     * Required. Source language code (BCP-47) of the input audio.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $source_language_code = '';
    /**
     * Required. Target language code (BCP-47) of the output.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_language_code = '';
    /**
     * Optional. Sample rate in Hertz of the audio data. Valid values are:
     * 8000-48000. 16000 is optimal. For best results, set the sampling rate of
     * the audio source to 16000 Hz. If that's not possible, use the native sample
     * rate of the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $sample_rate_hertz = 0;
    /**
     * Optional. `google-provided-model/video` and
     * `google-provided-model/enhanced-phone-call` are premium models.
     * `google-provided-model/phone-call` is not premium model.
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $audio_encoding
     *           Required. Encoding of audio data.
     *           Supported formats:
     *           - `linear16`
     *             Uncompressed 16-bit signed little-endian samples (Linear PCM).
     *           - `flac`
     *             `flac` (Free Lossless Audio Codec) is the recommended encoding
     *             because it is lossless--therefore recognition is not compromised--and
     *             requires only about half the bandwidth of `linear16`.
     *           - `mulaw`
     *             8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     *           - `amr`
     *             Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     *           - `amr-wb`
     *             Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     *           - `ogg-opus`
     *             Opus encoded audio frames in [Ogg](https://wikipedia.org/wiki/Ogg)
     *             container. `sample_rate_hertz` must be one of 8000, 12000, 16000, 24000,
     *             or 48000.
     *           - `mp3`
     *             MP3 audio. Support all standard MP3 bitrates (which range from 32-320
     *             kbps). When using this encoding, `sample_rate_hertz` has to match the
     *             sample rate of the file being used.
     *     @type string $source_language_code
     *           Required. Source language code (BCP-47) of the input audio.
     *     @type string $target_language_code
     *           Required. Target language code (BCP-47) of the output.
     *     @type int $sample_rate_hertz
     *           Optional. Sample rate in Hertz of the audio data. Valid values are:
     *           8000-48000. 16000 is optimal. For best results, set the sampling rate of
     *           the audio source to 16000 Hz. If that's not possible, use the native sample
     *           rate of the audio source (instead of re-sampling).
     *     @type string $model
     *           Optional. `google-provided-model/video` and
     *           `google-provided-model/enhanced-phone-call` are premium models.
     *           `google-provided-model/phone-call` is not premium model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Mediatranslation\V1Beta1\MediaTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Encoding of audio data.
     * Supported formats:
     * - `linear16`
     *   Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * - `flac`
     *   `flac` (Free Lossless Audio Codec) is the recommended encoding
     *   because it is lossless--therefore recognition is not compromised--and
     *   requires only about half the bandwidth of `linear16`.
     * - `mulaw`
     *   8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     * - `amr`
     *   Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     * - `amr-wb`
     *   Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     * - `ogg-opus`
     *   Opus encoded audio frames in [Ogg](https://wikipedia.org/wiki/Ogg)
     *   container. `sample_rate_hertz` must be one of 8000, 12000, 16000, 24000,
     *   or 48000.
     * - `mp3`
     *   MP3 audio. Support all standard MP3 bitrates (which range from 32-320
     *   kbps). When using this encoding, `sample_rate_hertz` has to match the
     *   sample rate of the file being used.
     *
     * Generated from protobuf field <code>string audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAudioEncoding()
    {
        return $this->audio_encoding;
    }

    /**
     * Required. Encoding of audio data.
     * Supported formats:
     * - `linear16`
     *   Uncompressed 16-bit signed little-endian samples (Linear PCM).
     * - `flac`
     *   `flac` (Free Lossless Audio Codec) is the recommended encoding
     *   because it is lossless--therefore recognition is not compromised--and
     *   requires only about half the bandwidth of `linear16`.
     * - `mulaw`
     *   8-bit samples that compand 14-bit audio samples using G.711 PCMU/mu-law.
     * - `amr`
     *   Adaptive Multi-Rate Narrowband codec. `sample_rate_hertz` must be 8000.
     * - `amr-wb`
     *   Adaptive Multi-Rate Wideband codec. `sample_rate_hertz` must be 16000.
     * - `ogg-opus`
     *   Opus encoded audio frames in [Ogg](https://wikipedia.org/wiki/Ogg)
     *   container. `sample_rate_hertz` must be one of 8000, 12000, 16000, 24000,
     *   or 48000.
     * - `mp3`
     *   MP3 audio. Support all standard MP3 bitrates (which range from 32-320
     *   kbps). When using this encoding, `sample_rate_hertz` has to match the
     *   sample rate of the file being used.
     *
     * Generated from protobuf field <code>string audio_encoding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAudioEncoding($var)
    {
        GPBUtil::checkString($var, True);
        $this->audio_encoding = $var;

        return $this;
    }

    /**
     * Required. Source language code (BCP-47) of the input audio.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Required. Source language code (BCP-47) of the input audio.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Target language code (BCP-47) of the output.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetLanguageCode()
    {
        return $this->target_language_code;
    }

    /**
     * Required. Target language code (BCP-47) of the output.
     *
     * Generated from protobuf field <code>string target_language_code = 3 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Sample rate in Hertz of the audio data. Valid values are:
     * 8000-48000. 16000 is optimal. For best results, set the sampling rate of
     * the audio source to 16000 Hz. If that's not possible, use the native sample
     * rate of the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getSampleRateHertz()
    {
        return $this->sample_rate_hertz;
    }

    /**
     * Optional. Sample rate in Hertz of the audio data. Valid values are:
     * 8000-48000. 16000 is optimal. For best results, set the sampling rate of
     * the audio source to 16000 Hz. If that's not possible, use the native sample
     * rate of the audio source (instead of re-sampling).
     *
     * Generated from protobuf field <code>int32 sample_rate_hertz = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setSampleRateHertz($var)
    {
        GPBUtil::checkInt32($var);
        $this->sample_rate_hertz = $var;

        return $this;
    }

    /**
     * Optional. `google-provided-model/video` and
     * `google-provided-model/enhanced-phone-call` are premium models.
     * `google-provided-model/phone-call` is not premium model.
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. `google-provided-model/video` and
     * `google-provided-model/enhanced-phone-call` are premium models.
     * `google-provided-model/phone-call` is not premium model.
     *
     * Generated from protobuf field <code>string model = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

