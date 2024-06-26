<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.ImportCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.ImportCryptoKeyVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.ImportCryptoKeyVersionRequest</code>
 */
class ImportCryptoKeyVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to be imported into.
     * The create permission is only required on this key when creating a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The optional [name][google.cloud.kms.v1.CryptoKeyVersion.name] of
     * an existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to
     * target for an import operation. If this field is not present, a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] containing the
     * supplied key material is created.
     * If this field is present, the supplied key material is imported into
     * the existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. To
     * import into an existing
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] must be a child of
     * [ImportCryptoKeyVersionRequest.parent][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.parent],
     * have been previously created via [ImportCryptoKeyVersion][], and be in
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED]
     * or
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED]
     * state. The key material and algorithm must match the previous
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] exactly if the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] has ever contained
     * key material.
     *
     * Generated from protobuf field <code>string crypto_key_version = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $crypto_key_version = '';
    /**
     * Required. The
     * [algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * of the key being imported. This does not need to match the
     * [version_template][google.cloud.kms.v1.CryptoKey.version_template] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] this version imports into.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $algorithm = 0;
    /**
     * Required. The [name][google.cloud.kms.v1.ImportJob.name] of the
     * [ImportJob][google.cloud.kms.v1.ImportJob] that was used to wrap this key
     * material.
     *
     * Generated from protobuf field <code>string import_job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $import_job = '';
    protected $wrapped_key_material;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] to be imported into.
     *           The create permission is only required on this key when creating a new
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *     @type string $crypto_key_version
     *           Optional. The optional [name][google.cloud.kms.v1.CryptoKeyVersion.name] of
     *           an existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to
     *           target for an import operation. If this field is not present, a new
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] containing the
     *           supplied key material is created.
     *           If this field is present, the supplied key material is imported into
     *           the existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. To
     *           import into an existing
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] must be a child of
     *           [ImportCryptoKeyVersionRequest.parent][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.parent],
     *           have been previously created via [ImportCryptoKeyVersion][], and be in
     *           [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED]
     *           or
     *           [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED]
     *           state. The key material and algorithm must match the previous
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] exactly if the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] has ever contained
     *           key material.
     *     @type int $algorithm
     *           Required. The
     *           [algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     *           of the key being imported. This does not need to match the
     *           [version_template][google.cloud.kms.v1.CryptoKey.version_template] of the
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] this version imports into.
     *     @type string $import_job
     *           Required. The [name][google.cloud.kms.v1.ImportJob.name] of the
     *           [ImportJob][google.cloud.kms.v1.ImportJob] that was used to wrap this key
     *           material.
     *     @type string $rsa_aes_wrapped_key
     *           Wrapped key material produced with
     *           [RSA_OAEP_3072_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_3072_SHA1_AES_256]
     *           or
     *           [RSA_OAEP_4096_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_4096_SHA1_AES_256].
     *           This field contains the concatenation of two wrapped keys:
     *           <ol>
     *             <li>An ephemeral AES-256 wrapping key wrapped with the
     *                 [public_key][google.cloud.kms.v1.ImportJob.public_key] using
     *                 RSAES-OAEP with SHA-1/SHA-256, MGF1 with SHA-1/SHA-256, and an
     *                 empty label.
     *             </li>
     *             <li>The key to be imported, wrapped with the ephemeral AES-256 key
     *                 using AES-KWP (RFC 5649).
     *             </li>
     *           </ol>
     *           If importing symmetric key material, it is expected that the unwrapped
     *           key contains plain bytes. If importing asymmetric key material, it is
     *           expected that the unwrapped key is in PKCS#8-encoded DER format (the
     *           PrivateKeyInfo structure from RFC 5208).
     *           This format is the same as the format produced by PKCS#11 mechanism
     *           CKM_RSA_AES_KEY_WRAP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to be imported into.
     * The create permission is only required on this key when creating a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.CryptoKey.name] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] to be imported into.
     * The create permission is only required on this key when creating a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion].
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. The optional [name][google.cloud.kms.v1.CryptoKeyVersion.name] of
     * an existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to
     * target for an import operation. If this field is not present, a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] containing the
     * supplied key material is created.
     * If this field is present, the supplied key material is imported into
     * the existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. To
     * import into an existing
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] must be a child of
     * [ImportCryptoKeyVersionRequest.parent][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.parent],
     * have been previously created via [ImportCryptoKeyVersion][], and be in
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED]
     * or
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED]
     * state. The key material and algorithm must match the previous
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] exactly if the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] has ever contained
     * key material.
     *
     * Generated from protobuf field <code>string crypto_key_version = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCryptoKeyVersion()
    {
        return $this->crypto_key_version;
    }

    /**
     * Optional. The optional [name][google.cloud.kms.v1.CryptoKeyVersion.name] of
     * an existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to
     * target for an import operation. If this field is not present, a new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] containing the
     * supplied key material is created.
     * If this field is present, the supplied key material is imported into
     * the existing [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]. To
     * import into an existing
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion], the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] must be a child of
     * [ImportCryptoKeyVersionRequest.parent][google.cloud.kms.v1.ImportCryptoKeyVersionRequest.parent],
     * have been previously created via [ImportCryptoKeyVersion][], and be in
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED]
     * or
     * [IMPORT_FAILED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.IMPORT_FAILED]
     * state. The key material and algorithm must match the previous
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] exactly if the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] has ever contained
     * key material.
     *
     * Generated from protobuf field <code>string crypto_key_version = 6 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_version = $var;

        return $this;
    }

    /**
     * Required. The
     * [algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * of the key being imported. This does not need to match the
     * [version_template][google.cloud.kms.v1.CryptoKey.version_template] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] this version imports into.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Required. The
     * [algorithm][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm]
     * of the key being imported. This does not need to match the
     * [version_template][google.cloud.kms.v1.CryptoKey.version_template] of the
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] this version imports into.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionAlgorithm algorithm = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The [name][google.cloud.kms.v1.ImportJob.name] of the
     * [ImportJob][google.cloud.kms.v1.ImportJob] that was used to wrap this key
     * material.
     *
     * Generated from protobuf field <code>string import_job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImportJob()
    {
        return $this->import_job;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.ImportJob.name] of the
     * [ImportJob][google.cloud.kms.v1.ImportJob] that was used to wrap this key
     * material.
     *
     * Generated from protobuf field <code>string import_job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Wrapped key material produced with
     * [RSA_OAEP_3072_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_3072_SHA1_AES_256]
     * or
     * [RSA_OAEP_4096_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_4096_SHA1_AES_256].
     * This field contains the concatenation of two wrapped keys:
     * <ol>
     *   <li>An ephemeral AES-256 wrapping key wrapped with the
     *       [public_key][google.cloud.kms.v1.ImportJob.public_key] using
     *       RSAES-OAEP with SHA-1/SHA-256, MGF1 with SHA-1/SHA-256, and an
     *       empty label.
     *   </li>
     *   <li>The key to be imported, wrapped with the ephemeral AES-256 key
     *       using AES-KWP (RFC 5649).
     *   </li>
     * </ol>
     * If importing symmetric key material, it is expected that the unwrapped
     * key contains plain bytes. If importing asymmetric key material, it is
     * expected that the unwrapped key is in PKCS#8-encoded DER format (the
     * PrivateKeyInfo structure from RFC 5208).
     * This format is the same as the format produced by PKCS#11 mechanism
     * CKM_RSA_AES_KEY_WRAP.
     *
     * Generated from protobuf field <code>bytes rsa_aes_wrapped_key = 5;</code>
     * @return string
     */
    public function getRsaAesWrappedKey()
    {
        return $this->readOneof(5);
    }

    public function hasRsaAesWrappedKey()
    {
        return $this->hasOneof(5);
    }

    /**
     * Wrapped key material produced with
     * [RSA_OAEP_3072_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_3072_SHA1_AES_256]
     * or
     * [RSA_OAEP_4096_SHA1_AES_256][google.cloud.kms.v1.ImportJob.ImportMethod.RSA_OAEP_4096_SHA1_AES_256].
     * This field contains the concatenation of two wrapped keys:
     * <ol>
     *   <li>An ephemeral AES-256 wrapping key wrapped with the
     *       [public_key][google.cloud.kms.v1.ImportJob.public_key] using
     *       RSAES-OAEP with SHA-1/SHA-256, MGF1 with SHA-1/SHA-256, and an
     *       empty label.
     *   </li>
     *   <li>The key to be imported, wrapped with the ephemeral AES-256 key
     *       using AES-KWP (RFC 5649).
     *   </li>
     * </ol>
     * If importing symmetric key material, it is expected that the unwrapped
     * key contains plain bytes. If importing asymmetric key material, it is
     * expected that the unwrapped key is in PKCS#8-encoded DER format (the
     * PrivateKeyInfo structure from RFC 5208).
     * This format is the same as the format produced by PKCS#11 mechanism
     * CKM_RSA_AES_KEY_WRAP.
     *
     * Generated from protobuf field <code>bytes rsa_aes_wrapped_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRsaAesWrappedKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getWrappedKeyMaterial()
    {
        return $this->whichOneof("wrapped_key_material");
    }

}

