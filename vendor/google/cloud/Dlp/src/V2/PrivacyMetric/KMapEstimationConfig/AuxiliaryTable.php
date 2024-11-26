<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\PrivacyMetric\KMapEstimationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An auxiliary table contains statistical information on the relative
 * frequency of different quasi-identifiers values. It has one or several
 * quasi-identifiers columns, and one column that indicates the relative
 * frequency of each quasi-identifier tuple.
 * If a tuple is present in the data but not in the auxiliary table, the
 * corresponding relative frequency is assumed to be zero (and thus, the
 * tuple is highly reidentifiable).
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable</code>
 */
class AuxiliaryTable extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Auxiliary table location.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $table = null;
    /**
     * Required. Quasi-identifier columns.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $quasi_ids;
    /**
     * Required. The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $relative_frequency = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\BigQueryTable $table
     *           Required. Auxiliary table location.
     *     @type \Google\Cloud\Dlp\V2\PrivacyMetric\KMapEstimationConfig\AuxiliaryTable\QuasiIdField[]|\Google\Protobuf\Internal\RepeatedField $quasi_ids
     *           Required. Quasi-identifier columns.
     *     @type \Google\Cloud\Dlp\V2\FieldId $relative_frequency
     *           Required. The relative frequency column must contain a floating-point number
     *           between 0 and 1 (inclusive). Null values are assumed to be zero.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Auxiliary table location.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable|null
     */
    public function getTable()
    {
        return $this->table;
    }

    public function hasTable()
    {
        return isset($this->table);
    }

    public function clearTable()
    {
        unset($this->table);
    }

    /**
     * Required. Auxiliary table location.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->table = $var;

        return $this;
    }

    /**
     * Required. Quasi-identifier columns.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIds()
    {
        return $this->quasi_ids;
    }

    /**
     * Required. Quasi-identifier columns.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.PrivacyMetric.KMapEstimationConfig.AuxiliaryTable.QuasiIdField quasi_ids = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\PrivacyMetric\KMapEstimationConfig\AuxiliaryTable\QuasiIdField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\PrivacyMetric\KMapEstimationConfig\AuxiliaryTable\QuasiIdField::class);
        $this->quasi_ids = $arr;

        return $this;
    }

    /**
     * Required. The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\FieldId|null
     */
    public function getRelativeFrequency()
    {
        return $this->relative_frequency;
    }

    public function hasRelativeFrequency()
    {
        return isset($this->relative_frequency);
    }

    public function clearRelativeFrequency()
    {
        unset($this->relative_frequency);
    }

    /**
     * Required. The relative frequency column must contain a floating-point number
     * between 0 and 1 (inclusive). Null values are assumed to be zero.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.FieldId relative_frequency = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\FieldId $var
     * @return $this
     */
    public function setRelativeFrequency($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->relative_frequency = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuxiliaryTable::class, \Google\Cloud\Dlp\V2\PrivacyMetric_KMapEstimationConfig_AuxiliaryTable::class);

