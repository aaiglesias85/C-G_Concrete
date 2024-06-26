<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for ServiceAttachments.Patch. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.PatchServiceAttachmentRequest</code>
 */
class PatchServiceAttachmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * The region scoping this request and should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The resource id of the ServiceAttachment to patch. It should conform to RFC1035 resource name or be a string form on an unsigned long number.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_attachment = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServiceAttachment service_attachment_resource = 472980256 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_attachment_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           The region scoping this request and should conform to RFC1035.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type string $service_attachment
     *           The resource id of the ServiceAttachment to patch. It should conform to RFC1035 resource name or be a string form on an unsigned long number.
     *     @type \Google\Cloud\Compute\V1\ServiceAttachment $service_attachment_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The region scoping this request and should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region scoping this request and should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>optional string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The resource id of the ServiceAttachment to patch. It should conform to RFC1035 resource name or be a string form on an unsigned long number.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceAttachment()
    {
        return $this->service_attachment;
    }

    /**
     * The resource id of the ServiceAttachment to patch. It should conform to RFC1035 resource name or be a string form on an unsigned long number.
     *
     * Generated from protobuf field <code>string service_attachment = 338957549 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAttachment($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_attachment = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServiceAttachment service_attachment_resource = 472980256 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\ServiceAttachment|null
     */
    public function getServiceAttachmentResource()
    {
        return $this->service_attachment_resource;
    }

    public function hasServiceAttachmentResource()
    {
        return isset($this->service_attachment_resource);
    }

    public function clearServiceAttachmentResource()
    {
        unset($this->service_attachment_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.ServiceAttachment service_attachment_resource = 472980256 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\ServiceAttachment $var
     * @return $this
     */
    public function setServiceAttachmentResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\ServiceAttachment::class);
        $this->service_attachment_resource = $var;

        return $this;
    }

}

