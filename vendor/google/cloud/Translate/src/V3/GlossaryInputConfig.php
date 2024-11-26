<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration for glossaries.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.GlossaryInputConfig</code>
 */
class GlossaryInputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Translate\V3\GcsSource $gcs_source
     *           Required. Google Cloud Storage location of glossary data.
     *           File format is determined based on the filename extension. API returns
     *           [google.rpc.Code.INVALID_ARGUMENT] for unsupported URI-s and file
     *           formats. Wildcards are not allowed. This must be a single file in one of
     *           the following formats:
     *           For unidirectional glossaries:
     *           - TSV/CSV (`.tsv`/`.csv`): 2 column file, tab- or comma-separated.
     *             The first column is source text. The second column is target text.
     *             The file must not contain headers. That is, the first row is data, not
     *             column names.
     *           - TMX (`.tmx`): TMX file with parallel data defining source/target term
     *           pairs.
     *           For equivalent term sets glossaries:
     *           - CSV (`.csv`): Multi-column CSV file defining equivalent glossary terms
     *             in multiple languages. See documentation for more information -
     *             [glossaries](https://cloud.google.com/translate/docs/advanced/glossary).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Storage location of glossary data.
     * File format is determined based on the filename extension. API returns
     * [google.rpc.Code.INVALID_ARGUMENT] for unsupported URI-s and file
     * formats. Wildcards are not allowed. This must be a single file in one of
     * the following formats:
     * For unidirectional glossaries:
     * - TSV/CSV (`.tsv`/`.csv`): 2 column file, tab- or comma-separated.
     *   The first column is source text. The second column is target text.
     *   The file must not contain headers. That is, the first row is data, not
     *   column names.
     * - TMX (`.tmx`): TMX file with parallel data defining source/target term
     * pairs.
     * For equivalent term sets glossaries:
     * - CSV (`.csv`): Multi-column CSV file defining equivalent glossary terms
     *   in multiple languages. See documentation for more information -
     *   [glossaries](https://cloud.google.com/translate/docs/advanced/glossary).
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\Translate\V3\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * Required. Google Cloud Storage location of glossary data.
     * File format is determined based on the filename extension. API returns
     * [google.rpc.Code.INVALID_ARGUMENT] for unsupported URI-s and file
     * formats. Wildcards are not allowed. This must be a single file in one of
     * the following formats:
     * For unidirectional glossaries:
     * - TSV/CSV (`.tsv`/`.csv`): 2 column file, tab- or comma-separated.
     *   The first column is source text. The second column is target text.
     *   The file must not contain headers. That is, the first row is data, not
     *   column names.
     * - TMX (`.tmx`): TMX file with parallel data defining source/target term
     * pairs.
     * For equivalent term sets glossaries:
     * - CSV (`.csv`): Multi-column CSV file defining equivalent glossary terms
     *   in multiple languages. See documentation for more information -
     *   [glossaries](https://cloud.google.com/translate/docs/advanced/glossary).
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\Translate\V3\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

