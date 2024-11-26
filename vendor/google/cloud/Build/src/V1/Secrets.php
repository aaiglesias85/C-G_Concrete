<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Secrets and secret environment variables.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.Secrets</code>
 */
class Secrets extends \Google\Protobuf\Internal\Message
{
    /**
     * Secrets in Secret Manager and associated secret environment variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.SecretManagerSecret secret_manager = 1;</code>
     */
    private $secret_manager;
    /**
     * Secrets encrypted with KMS key and the associated secret environment
     * variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.InlineSecret inline = 2;</code>
     */
    private $inline;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Build\V1\SecretManagerSecret[]|\Google\Protobuf\Internal\RepeatedField $secret_manager
     *           Secrets in Secret Manager and associated secret environment variable.
     *     @type \Google\Cloud\Build\V1\InlineSecret[]|\Google\Protobuf\Internal\RepeatedField $inline
     *           Secrets encrypted with KMS key and the associated secret environment
     *           variable.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Secrets in Secret Manager and associated secret environment variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.SecretManagerSecret secret_manager = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecretManager()
    {
        return $this->secret_manager;
    }

    /**
     * Secrets in Secret Manager and associated secret environment variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.SecretManagerSecret secret_manager = 1;</code>
     * @param \Google\Cloud\Build\V1\SecretManagerSecret[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecretManager($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Build\V1\SecretManagerSecret::class);
        $this->secret_manager = $arr;

        return $this;
    }

    /**
     * Secrets encrypted with KMS key and the associated secret environment
     * variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.InlineSecret inline = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInline()
    {
        return $this->inline;
    }

    /**
     * Secrets encrypted with KMS key and the associated secret environment
     * variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.InlineSecret inline = 2;</code>
     * @param \Google\Cloud\Build\V1\InlineSecret[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInline($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Build\V1\InlineSecret::class);
        $this->inline = $arr;

        return $this;
    }

}

