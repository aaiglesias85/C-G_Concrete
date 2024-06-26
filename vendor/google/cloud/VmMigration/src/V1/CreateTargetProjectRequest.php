<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmmigration/v1/vmmigration.proto

namespace Google\Cloud\VMMigration\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateTargetProject' request.
 *
 * Generated from protobuf message <code>google.cloud.vmmigration.v1.CreateTargetProjectRequest</code>
 */
class CreateTargetProjectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The TargetProject's parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The target_project identifier.
     *
     * Generated from protobuf field <code>string target_project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_project_id = '';
    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.TargetProject target_project = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_project = null;
    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The TargetProject's parent.
     *     @type string $target_project_id
     *           Required. The target_project identifier.
     *     @type \Google\Cloud\VMMigration\V1\TargetProject $target_project
     *           Required. The create request body.
     *     @type string $request_id
     *           A request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmmigration\V1\Vmmigration::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The TargetProject's parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The TargetProject's parent.
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
     * Required. The target_project identifier.
     *
     * Generated from protobuf field <code>string target_project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetProjectId()
    {
        return $this->target_project_id;
    }

    /**
     * Required. The target_project identifier.
     *
     * Generated from protobuf field <code>string target_project_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_project_id = $var;

        return $this;
    }

    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.TargetProject target_project = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VMMigration\V1\TargetProject|null
     */
    public function getTargetProject()
    {
        return $this->target_project;
    }

    public function hasTargetProject()
    {
        return isset($this->target_project);
    }

    public function clearTargetProject()
    {
        unset($this->target_project);
    }

    /**
     * Required. The create request body.
     *
     * Generated from protobuf field <code>.google.cloud.vmmigration.v1.TargetProject target_project = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VMMigration\V1\TargetProject $var
     * @return $this
     */
    public function setTargetProject($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VMMigration\V1\TargetProject::class);
        $this->target_project = $var;

        return $this;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

