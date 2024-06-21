<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] represents an
 * individual cryptographic key, and the associated key material.
 * An
 * [ENABLED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.ENABLED]
 * version can be used for cryptographic operations.
 * For security reasons, the raw cryptographic key material represented by a
 * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] can never be viewed
 * or exported. It can only be used to encrypt, decrypt, or sign data when an
 * authorized user or application invokes Cloud KMS.
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CryptoKeyVersion</code>
 */
class CryptoKeyVersion extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * The current state of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     */
    private $state = 0;
    /**
     * Output only. The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel]
     * describing how crypto operations are performed with this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $protection_level = 0;
    /**
     * Output only. The
     * [CryptoKeyVersionAlgorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * that this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * supports.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $algorithm = 0;
    /**
     * Output only. Statement that was generated and signed by the HSM at key
     * creation time. Use this statement to verify attributes of the key as stored
     * on the HSM, independently of Google. Only provided for key versions with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersion.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyOperationAttestation attestation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $attestation = null;
    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $generate_time = null;
    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is
     * scheduled for destruction. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $destroy_time = null;
    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $destroy_event_time = null;
    /**
     * Output only. The name of the [ImportJob][google.cloud.kms.v1.ImportJob]
     * used in the most recent import of this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Only present if
     * the underlying key material was imported.
     *
     * Generated from protobuf field <code>string import_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $import_job = '';
    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * most recently imported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp import_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $import_time = null;
    /**
     * Output only. The root cause of the most recent import failure. Only present
     * if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED].
     *
     * Generated from protobuf field <code>string import_failure_reason = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $import_failure_reason = '';
    /**
     * ExternalProtectionLevelOptions stores a group of additional fields for
     * configuring a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that
     * are specific to the
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] protection level
     * and [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC]
     * protection levels.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ExternalProtectionLevelOptions external_protection_level_options = 17;</code>
     */
    private $external_protection_level_options = null;
    /**
     * Output only. Whether or not this key version is eligible for reimport, by
     * being specified as a target in
     * [ImportCryptoKeyVersionRequest.crypto_key_version][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.crypto_key_version].
     *
     * Generated from protobuf field <code>bool reimport_eligible = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reimport_eligible = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *     @type int $state
     *           The current state of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *     @type int $protection_level
     *           Output only. The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel]
     *           describing how crypto operations are performed with this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *     @type int $algorithm
     *           Output only. The
     *           [CryptoKeyVersionAlgorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     *           that this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     *           supports.
     *     @type \Google\Cloud\Kms\V1\KeyOperationAttestation $attestation
     *           Output only. Statement that was generated and signed by the HSM at key
     *           creation time. Use this statement to verify attributes of the key as stored
     *           on the HSM, independently of Google. Only provided for key versions with
     *           [protection_level][google.cloud.kms.v1.CryptoKeyVersion.protection_level]
     *           [HSM][google.cloud.kms.v1.ProtectionLevel.HSM].
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *     @type \Google\Protobuf\Timestamp $generate_time
     *           Output only. The time this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     *           generated.
     *     @type \Google\Protobuf\Timestamp $destroy_time
     *           Output only. The time this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is
     *           scheduled for destruction. Only present if
     *           [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     *           [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *     @type \Google\Protobuf\Timestamp $destroy_event_time
     *           Output only. The time this CryptoKeyVersion's key material was
     *           destroyed. Only present if
     *           [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     *           [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *     @type string $import_job
     *           Output only. The name of the [ImportJob][google.cloud.kms.v1.ImportJob]
     *           used in the most recent import of this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Only present if
     *           the underlying key material was imported.
     *     @type \Google\Protobuf\Timestamp $import_time
     *           Output only. The time at which this
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     *           most recently imported.
     *     @type string $import_failure_reason
     *           Output only. The root cause of the most recent import failure. Only present
     *           if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     *           [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED].
     *     @type \Google\Cloud\Kms\V1\ExternalProtectionLevelOptions $external_protection_level_options
     *           ExternalProtectionLevelOptions stores a group of additional fields for
     *           configuring a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that
     *           are specific to the
     *           [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] protection level
     *           and [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC]
     *           protection levels.
     *     @type bool $reimport_eligible
     *           Output only. Whether or not this key version is eligible for reimport, by
     *           being specified as a target in
     *           [ImportCryptoKeyVersionRequest.crypto_key_version][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.crypto_key_version].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;&#47;cryptoKeyVersions/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The current state of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKeyVersion\CryptoKeyVersionState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel]
     * describing how crypto operations are performed with this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProtectionLevel()
    {
        return $this->protection_level;
    }

    /**
     * Output only. The [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel]
     * describing how crypto operations are performed with this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ProtectionLevel protection_level = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProtectionLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\ProtectionLevel::class);
        $this->protection_level = $var;

        return $this;
    }

    /**
     * Output only. The
     * [CryptoKeyVersionAlgorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * that this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * supports.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Output only. The
     * [CryptoKeyVersionAlgorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * that this [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * supports.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setAlgorithm($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKeyVersion\CryptoKeyVersionAlgorithm::class);
        $this->algorithm = $var;

        return $this;
    }

    /**
     * Output only. Statement that was generated and signed by the HSM at key
     * creation time. Use this statement to verify attributes of the key as stored
     * on the HSM, independently of Google. Only provided for key versions with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersion.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyOperationAttestation attestation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Kms\V1\KeyOperationAttestation|null
     */
    public function getAttestation()
    {
        return $this->attestation;
    }

    public function hasAttestation()
    {
        return isset($this->attestation);
    }

    public function clearAttestation()
    {
        unset($this->attestation);
    }

    /**
     * Output only. Statement that was generated and signed by the HSM at key
     * creation time. Use this statement to verify attributes of the key as stored
     * on the HSM, independently of Google. Only provided for key versions with
     * [protection_level][google.cloud.kms.v1.CryptoKeyVersion.protection_level]
     * [HSM][google.cloud.kms.v1.ProtectionLevel.HSM].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.KeyOperationAttestation attestation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Kms\V1\KeyOperationAttestation $var
     * @return $this
     */
    public function setAttestation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\KeyOperationAttestation::class);
        $this->attestation = $var;

        return $this;
    }

    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getGenerateTime()
    {
        return $this->generate_time;
    }

    public function hasGenerateTime()
    {
        return isset($this->generate_time);
    }

    public function clearGenerateTime()
    {
        unset($this->generate_time);
    }

    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp generate_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setGenerateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->generate_time = $var;

        return $this;
    }

    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is
     * scheduled for destruction. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDestroyTime()
    {
        return $this->destroy_time;
    }

    public function hasDestroyTime()
    {
        return isset($this->destroy_time);
    }

    public function clearDestroyTime()
    {
        unset($this->destroy_time);
    }

    /**
     * Output only. The time this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material is
     * scheduled for destruction. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_time = $var;

        return $this;
    }

    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDestroyEventTime()
    {
        return $this->destroy_event_time;
    }

    public function hasDestroyEventTime()
    {
        return isset($this->destroy_event_time);
    }

    public function clearDestroyEventTime()
    {
        unset($this->destroy_event_time);
    }

    /**
     * Output only. The time this CryptoKeyVersion's key material was
     * destroyed. Only present if
     * [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp destroy_event_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDestroyEventTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->destroy_event_time = $var;

        return $this;
    }

    /**
     * Output only. The name of the [ImportJob][google.cloud.kms.v1.ImportJob]
     * used in the most recent import of this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Only present if
     * the underlying key material was imported.
     *
     * Generated from protobuf field <code>string import_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getImportJob()
    {
        return $this->import_job;
    }

    /**
     * Output only. The name of the [ImportJob][google.cloud.kms.v1.ImportJob]
     * used in the most recent import of this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. Only present if
     * the underlying key material was imported.
     *
     * Generated from protobuf field <code>string import_job = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setImportJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_job = $var;

        return $this;
    }

    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * most recently imported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp import_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getImportTime()
    {
        return $this->import_time;
    }

    public function hasImportTime()
    {
        return isset($this->import_time);
    }

    public function clearImportTime()
    {
        unset($this->import_time);
    }

    /**
     * Output only. The time at which this
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]'s key material was
     * most recently imported.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp import_time = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setImportTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->import_time = $var;

        return $this;
    }

    /**
     * Output only. The root cause of the most recent import failure. Only present
     * if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED].
     *
     * Generated from protobuf field <code>string import_failure_reason = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getImportFailureReason()
    {
        return $this->import_failure_reason;
    }

    /**
     * Output only. The root cause of the most recent import failure. Only present
     * if [state][google.cloud.kms.v1.CryptoKeyVersion.state] is
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED].
     *
     * Generated from protobuf field <code>string import_failure_reason = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setImportFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_failure_reason = $var;

        return $this;
    }

    /**
     * ExternalProtectionLevelOptions stores a group of additional fields for
     * configuring a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that
     * are specific to the
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] protection level
     * and [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC]
     * protection levels.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ExternalProtectionLevelOptions external_protection_level_options = 17;</code>
     * @return \Google\Cloud\Kms\V1\ExternalProtectionLevelOptions|null
     */
    public function getExternalProtectionLevelOptions()
    {
        return $this->external_protection_level_options;
    }

    public function hasExternalProtectionLevelOptions()
    {
        return isset($this->external_protection_level_options);
    }

    public function clearExternalProtectionLevelOptions()
    {
        unset($this->external_protection_level_options);
    }

    /**
     * ExternalProtectionLevelOptions stores a group of additional fields for
     * configuring a [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that
     * are specific to the
     * [EXTERNAL][google.cloud.kms.v1.ProtectionLevel.EXTERNAL] protection level
     * and [EXTERNAL_VPC][google.cloud.kms.v1.ProtectionLevel.EXTERNAL_VPC]
     * protection levels.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ExternalProtectionLevelOptions external_protection_level_options = 17;</code>
     * @param \Google\Cloud\Kms\V1\ExternalProtectionLevelOptions $var
     * @return $this
     */
    public function setExternalProtectionLevelOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\ExternalProtectionLevelOptions::class);
        $this->external_protection_level_options = $var;

        return $this;
    }

    /**
     * Output only. Whether or not this key version is eligible for reimport, by
     * being specified as a target in
     * [ImportCryptoKeyVersionRequest.crypto_key_version][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.crypto_key_version].
     *
     * Generated from protobuf field <code>bool reimport_eligible = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getReimportEligible()
    {
        return $this->reimport_eligible;
    }

    /**
     * Output only. Whether or not this key version is eligible for reimport, by
     * being specified as a target in
     * [ImportCryptoKeyVersionRequest.crypto_key_version][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.crypto_key_version].
     *
     * Generated from protobuf field <code>bool reimport_eligible = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setReimportEligible($var)
    {
        GPBUtil::checkBool($var);
        $this->reimport_eligible = $var;

        return $this;
    }

}

