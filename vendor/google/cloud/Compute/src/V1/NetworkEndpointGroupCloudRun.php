<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for a Cloud Run network endpoint group (NEG). The service must be provided explicitly or in the URL mask. The tag is optional, may be provided explicitly or in the URL mask. Note: Cloud Run service must be in the same project and located in the same region as the Serverless NEG.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworkEndpointGroupCloudRun</code>
 */
class NetworkEndpointGroupCloudRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud Run service is the main resource of Cloud Run. The service must be 1-63 characters long, and comply with RFC1035. Example value: "run-service".
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     */
    private $service = null;
    /**
     * Optional Cloud Run tag represents the "named-revision" to provide additional fine-grained traffic routing information. The tag must be 1-63 characters long, and comply with RFC1035. Example value: "revision-0010".
     *
     * Generated from protobuf field <code>optional string tag = 114586;</code>
     */
    private $tag = null;
    /**
     * A template to parse <service> and <tag> fields from a request URL. URL mask allows for routing to multiple Run services without having to create multiple network endpoint groups and backend services. For example, request URLs "foo1.domain.com/bar1" and "foo1.domain.com/bar2" can be backed by the same Serverless Network Endpoint Group (NEG) with URL mask "<tag>.domain.com/<service>". The URL mask will parse them to { service="bar1", tag="foo1" } and { service="bar2", tag="foo2" } respectively.
     *
     * Generated from protobuf field <code>optional string url_mask = 103352252;</code>
     */
    private $url_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Cloud Run service is the main resource of Cloud Run. The service must be 1-63 characters long, and comply with RFC1035. Example value: "run-service".
     *     @type string $tag
     *           Optional Cloud Run tag represents the "named-revision" to provide additional fine-grained traffic routing information. The tag must be 1-63 characters long, and comply with RFC1035. Example value: "revision-0010".
     *     @type string $url_mask
     *           A template to parse <service> and <tag> fields from a request URL. URL mask allows for routing to multiple Run services without having to create multiple network endpoint groups and backend services. For example, request URLs "foo1.domain.com/bar1" and "foo1.domain.com/bar2" can be backed by the same Serverless Network Endpoint Group (NEG) with URL mask "<tag>.domain.com/<service>". The URL mask will parse them to { service="bar1", tag="foo1" } and { service="bar2", tag="foo2" } respectively.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud Run service is the main resource of Cloud Run. The service must be 1-63 characters long, and comply with RFC1035. Example value: "run-service".
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @return string
     */
    public function getService()
    {
        return isset($this->service) ? $this->service : '';
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Cloud Run service is the main resource of Cloud Run. The service must be 1-63 characters long, and comply with RFC1035. Example value: "run-service".
     *
     * Generated from protobuf field <code>optional string service = 373540533;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional Cloud Run tag represents the "named-revision" to provide additional fine-grained traffic routing information. The tag must be 1-63 characters long, and comply with RFC1035. Example value: "revision-0010".
     *
     * Generated from protobuf field <code>optional string tag = 114586;</code>
     * @return string
     */
    public function getTag()
    {
        return isset($this->tag) ? $this->tag : '';
    }

    public function hasTag()
    {
        return isset($this->tag);
    }

    public function clearTag()
    {
        unset($this->tag);
    }

    /**
     * Optional Cloud Run tag represents the "named-revision" to provide additional fine-grained traffic routing information. The tag must be 1-63 characters long, and comply with RFC1035. Example value: "revision-0010".
     *
     * Generated from protobuf field <code>optional string tag = 114586;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * A template to parse <service> and <tag> fields from a request URL. URL mask allows for routing to multiple Run services without having to create multiple network endpoint groups and backend services. For example, request URLs "foo1.domain.com/bar1" and "foo1.domain.com/bar2" can be backed by the same Serverless Network Endpoint Group (NEG) with URL mask "<tag>.domain.com/<service>". The URL mask will parse them to { service="bar1", tag="foo1" } and { service="bar2", tag="foo2" } respectively.
     *
     * Generated from protobuf field <code>optional string url_mask = 103352252;</code>
     * @return string
     */
    public function getUrlMask()
    {
        return isset($this->url_mask) ? $this->url_mask : '';
    }

    public function hasUrlMask()
    {
        return isset($this->url_mask);
    }

    public function clearUrlMask()
    {
        unset($this->url_mask);
    }

    /**
     * A template to parse <service> and <tag> fields from a request URL. URL mask allows for routing to multiple Run services without having to create multiple network endpoint groups and backend services. For example, request URLs "foo1.domain.com/bar1" and "foo1.domain.com/bar2" can be backed by the same Serverless Network Endpoint Group (NEG) with URL mask "<tag>.domain.com/<service>". The URL mask will parse them to { service="bar1", tag="foo1" } and { service="bar2", tag="foo2" } respectively.
     *
     * Generated from protobuf field <code>optional string url_mask = 103352252;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMask($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_mask = $var;

        return $this;
    }

}

