<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1/operations.proto

namespace Google\Cloud\AutoMl\V1\ExportModelOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Further describes the output of model export.
 * Supplements
 * [ModelExportOutputConfig][google.cloud.automl.v1.ModelExportOutputConfig].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1.ExportModelOperationMetadata.ExportModelOutputInfo</code>
 */
class ExportModelOutputInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The full path of the Google Cloud Storage directory created, into which
     * the model will be exported.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1;</code>
     */
    private $gcs_output_directory = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gcs_output_directory
     *           The full path of the Google Cloud Storage directory created, into which
     *           the model will be exported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The full path of the Google Cloud Storage directory created, into which
     * the model will be exported.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1;</code>
     * @return string
     */
    public function getGcsOutputDirectory()
    {
        return $this->gcs_output_directory;
    }

    /**
     * The full path of the Google Cloud Storage directory created, into which
     * the model will be exported.
     *
     * Generated from protobuf field <code>string gcs_output_directory = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsOutputDirectory($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_output_directory = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportModelOutputInfo::class, \Google\Cloud\AutoMl\V1\ExportModelOperationMetadata_ExportModelOutputInfo::class);

