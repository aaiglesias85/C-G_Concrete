<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\BatchProcessMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The status of a each individual document in the batch process.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.BatchProcessMetadata.IndividualProcessStatus</code>
 */
class IndividualProcessStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The source of the document, same as the [input_gcs_source] field in the
     * request when the batch process started. The batch process is started by
     * take snapshot of that document, since a user can move or change that
     * document during the process.
     *
     * Generated from protobuf field <code>string input_gcs_source = 1;</code>
     */
    private $input_gcs_source = '';
    /**
     * The status of the processing of the document.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     */
    private $status = null;
    /**
     * The output_gcs_destination (in the request as 'output_gcs_destination')
     * of the processed document if it was successful, otherwise empty.
     *
     * Generated from protobuf field <code>string output_gcs_destination = 3;</code>
     */
    private $output_gcs_destination = '';
    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 5;</code>
     */
    private $human_review_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $input_gcs_source
     *           The source of the document, same as the [input_gcs_source] field in the
     *           request when the batch process started. The batch process is started by
     *           take snapshot of that document, since a user can move or change that
     *           document during the process.
     *     @type \Google\Rpc\Status $status
     *           The status of the processing of the document.
     *     @type string $output_gcs_destination
     *           The output_gcs_destination (in the request as 'output_gcs_destination')
     *           of the processed document if it was successful, otherwise empty.
     *     @type \Google\Cloud\DocumentAI\V1\HumanReviewStatus $human_review_status
     *           The status of human review on the processed document.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The source of the document, same as the [input_gcs_source] field in the
     * request when the batch process started. The batch process is started by
     * take snapshot of that document, since a user can move or change that
     * document during the process.
     *
     * Generated from protobuf field <code>string input_gcs_source = 1;</code>
     * @return string
     */
    public function getInputGcsSource()
    {
        return $this->input_gcs_source;
    }

    /**
     * The source of the document, same as the [input_gcs_source] field in the
     * request when the batch process started. The batch process is started by
     * take snapshot of that document, since a user can move or change that
     * document during the process.
     *
     * Generated from protobuf field <code>string input_gcs_source = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInputGcsSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->input_gcs_source = $var;

        return $this;
    }

    /**
     * The status of the processing of the document.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The status of the processing of the document.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The output_gcs_destination (in the request as 'output_gcs_destination')
     * of the processed document if it was successful, otherwise empty.
     *
     * Generated from protobuf field <code>string output_gcs_destination = 3;</code>
     * @return string
     */
    public function getOutputGcsDestination()
    {
        return $this->output_gcs_destination;
    }

    /**
     * The output_gcs_destination (in the request as 'output_gcs_destination')
     * of the processed document if it was successful, otherwise empty.
     *
     * Generated from protobuf field <code>string output_gcs_destination = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputGcsDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_gcs_destination = $var;

        return $this;
    }

    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 5;</code>
     * @return \Google\Cloud\DocumentAI\V1\HumanReviewStatus|null
     */
    public function getHumanReviewStatus()
    {
        return $this->human_review_status;
    }

    public function hasHumanReviewStatus()
    {
        return isset($this->human_review_status);
    }

    public function clearHumanReviewStatus()
    {
        unset($this->human_review_status);
    }

    /**
     * The status of human review on the processed document.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.HumanReviewStatus human_review_status = 5;</code>
     * @param \Google\Cloud\DocumentAI\V1\HumanReviewStatus $var
     * @return $this
     */
    public function setHumanReviewStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\HumanReviewStatus::class);
        $this->human_review_status = $var;

        return $this;
    }

}


