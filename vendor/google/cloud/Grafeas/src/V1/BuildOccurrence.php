<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/build.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of a build occurrence.
 *
 * Generated from protobuf message <code>grafeas.v1.BuildOccurrence</code>
 */
class BuildOccurrence extends \Google\Protobuf\Internal\Message
{
    /**
     * The actual provenance for the build.
     *
     * Generated from protobuf field <code>.grafeas.v1.BuildProvenance provenance = 1;</code>
     */
    private $provenance = null;
    /**
     * Serialized JSON representation of the provenance, used in generating the
     * build signature in the corresponding build note. After verifying the
     * signature, `provenance_bytes` can be unmarshalled and compared to the
     * provenance to confirm that it is unchanged. A base64-encoded string
     * representation of the provenance bytes is used for the signature in order
     * to interoperate with openssl which expects this format for signature
     * verification.
     * The serialized form is captured both to avoid ambiguity in how the
     * provenance is marshalled to json as well to prevent incompatibilities with
     * future changes.
     *
     * Generated from protobuf field <code>string provenance_bytes = 2;</code>
     */
    private $provenance_bytes = '';
    /**
     * Deprecated. See InTotoStatement for the replacement.
     * In-toto Provenance representation as defined in spec.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoProvenance intoto_provenance = 3;</code>
     */
    private $intoto_provenance = null;
    /**
     * In-toto Statement representation as defined in spec.
     * The intoto_statement can contain any type of provenance. The serialized
     * payload of the statement can be stored and signed in the Occurrence's
     * envelope.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoStatement intoto_statement = 4;</code>
     */
    private $intoto_statement = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grafeas\V1\BuildProvenance $provenance
     *           The actual provenance for the build.
     *     @type string $provenance_bytes
     *           Serialized JSON representation of the provenance, used in generating the
     *           build signature in the corresponding build note. After verifying the
     *           signature, `provenance_bytes` can be unmarshalled and compared to the
     *           provenance to confirm that it is unchanged. A base64-encoded string
     *           representation of the provenance bytes is used for the signature in order
     *           to interoperate with openssl which expects this format for signature
     *           verification.
     *           The serialized form is captured both to avoid ambiguity in how the
     *           provenance is marshalled to json as well to prevent incompatibilities with
     *           future changes.
     *     @type \Grafeas\V1\InTotoProvenance $intoto_provenance
     *           Deprecated. See InTotoStatement for the replacement.
     *           In-toto Provenance representation as defined in spec.
     *     @type \Grafeas\V1\InTotoStatement $intoto_statement
     *           In-toto Statement representation as defined in spec.
     *           The intoto_statement can contain any type of provenance. The serialized
     *           payload of the statement can be stored and signed in the Occurrence's
     *           envelope.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Build::initOnce();
        parent::__construct($data);
    }

    /**
     * The actual provenance for the build.
     *
     * Generated from protobuf field <code>.grafeas.v1.BuildProvenance provenance = 1;</code>
     * @return \Grafeas\V1\BuildProvenance|null
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    public function hasProvenance()
    {
        return isset($this->provenance);
    }

    public function clearProvenance()
    {
        unset($this->provenance);
    }

    /**
     * The actual provenance for the build.
     *
     * Generated from protobuf field <code>.grafeas.v1.BuildProvenance provenance = 1;</code>
     * @param \Grafeas\V1\BuildProvenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\BuildProvenance::class);
        $this->provenance = $var;

        return $this;
    }

    /**
     * Serialized JSON representation of the provenance, used in generating the
     * build signature in the corresponding build note. After verifying the
     * signature, `provenance_bytes` can be unmarshalled and compared to the
     * provenance to confirm that it is unchanged. A base64-encoded string
     * representation of the provenance bytes is used for the signature in order
     * to interoperate with openssl which expects this format for signature
     * verification.
     * The serialized form is captured both to avoid ambiguity in how the
     * provenance is marshalled to json as well to prevent incompatibilities with
     * future changes.
     *
     * Generated from protobuf field <code>string provenance_bytes = 2;</code>
     * @return string
     */
    public function getProvenanceBytes()
    {
        return $this->provenance_bytes;
    }

    /**
     * Serialized JSON representation of the provenance, used in generating the
     * build signature in the corresponding build note. After verifying the
     * signature, `provenance_bytes` can be unmarshalled and compared to the
     * provenance to confirm that it is unchanged. A base64-encoded string
     * representation of the provenance bytes is used for the signature in order
     * to interoperate with openssl which expects this format for signature
     * verification.
     * The serialized form is captured both to avoid ambiguity in how the
     * provenance is marshalled to json as well to prevent incompatibilities with
     * future changes.
     *
     * Generated from protobuf field <code>string provenance_bytes = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProvenanceBytes($var)
    {
        GPBUtil::checkString($var, True);
        $this->provenance_bytes = $var;

        return $this;
    }

    /**
     * Deprecated. See InTotoStatement for the replacement.
     * In-toto Provenance representation as defined in spec.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoProvenance intoto_provenance = 3;</code>
     * @return \Grafeas\V1\InTotoProvenance|null
     */
    public function getIntotoProvenance()
    {
        return $this->intoto_provenance;
    }

    public function hasIntotoProvenance()
    {
        return isset($this->intoto_provenance);
    }

    public function clearIntotoProvenance()
    {
        unset($this->intoto_provenance);
    }

    /**
     * Deprecated. See InTotoStatement for the replacement.
     * In-toto Provenance representation as defined in spec.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoProvenance intoto_provenance = 3;</code>
     * @param \Grafeas\V1\InTotoProvenance $var
     * @return $this
     */
    public function setIntotoProvenance($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\InTotoProvenance::class);
        $this->intoto_provenance = $var;

        return $this;
    }

    /**
     * In-toto Statement representation as defined in spec.
     * The intoto_statement can contain any type of provenance. The serialized
     * payload of the statement can be stored and signed in the Occurrence's
     * envelope.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoStatement intoto_statement = 4;</code>
     * @return \Grafeas\V1\InTotoStatement|null
     */
    public function getIntotoStatement()
    {
        return $this->intoto_statement;
    }

    public function hasIntotoStatement()
    {
        return isset($this->intoto_statement);
    }

    public function clearIntotoStatement()
    {
        unset($this->intoto_statement);
    }

    /**
     * In-toto Statement representation as defined in spec.
     * The intoto_statement can contain any type of provenance. The serialized
     * payload of the statement can be stored and signed in the Occurrence's
     * envelope.
     *
     * Generated from protobuf field <code>.grafeas.v1.InTotoStatement intoto_statement = 4;</code>
     * @param \Grafeas\V1\InTotoStatement $var
     * @return $this
     */
    public function setIntotoStatement($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\InTotoStatement::class);
        $this->intoto_statement = $var;

        return $this;
    }

}

