<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata about the request.
 *
 * Generated from protobuf message <code>google.cloud.audit.RequestMetadata</code>
 */
class RequestMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The IP address of the caller.
     * For caller from internet, this will be public IPv4 or IPv6 address.
     * For caller from a Compute Engine VM with external IP address, this
     * will be the VM's external IP address. For caller from a Compute
     * Engine VM without external IP address, if the VM is in the same
     * organization (or project) as the accessed resource, `caller_ip` will
     * be the VM's internal IPv4 address, otherwise the `caller_ip` will be
     * redacted to "gce-internal-ip".
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     *
     * Generated from protobuf field <code>string caller_ip = 1;</code>
     */
    protected $caller_ip = '';
    /**
     * The user agent of the caller.
     * This information is not authenticated and should be treated accordingly.
     * For example:
     * +   `google-api-python-client/1.4.0`:
     *     The request was made by the Google API client for Python.
     * +   `Cloud SDK Command Line Tool apitools-client/1.0 gcloud/0.9.62`:
     *     The request was made by the Google Cloud SDK CLI (gcloud).
     * +   `AppEngine-Google; (+http://code.google.com/appengine; appid:
     * s~my-project`:
     *     The request was made from the `my-project` App Engine app.
     *
     * Generated from protobuf field <code>string caller_supplied_user_agent = 2;</code>
     */
    protected $caller_supplied_user_agent = '';
    /**
     * The network of the caller.
     * Set only if the network host project is part of the same GCP organization
     * (or project) as the accessed resource.
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     * This is a scheme-less URI full resource name. For example:
     *     "//compute.googleapis.com/projects/PROJECT_ID/global/networks/NETWORK_ID"
     *
     * Generated from protobuf field <code>string caller_network = 3;</code>
     */
    protected $caller_network = '';
    /**
     * Request attributes used in IAM condition evaluation. This field contains
     * request attributes like request time and access levels associated with
     * the request.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.authentication_info.resource_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Request request_attributes = 7;</code>
     */
    protected $request_attributes = null;
    /**
     * The destination of a network activity, such as accepting a TCP connection.
     * In a multi hop network activity, the destination represents the receiver of
     * the last hop. Only two fields are used in this message, Peer.port and
     * Peer.ip. These fields are optionally populated by those services utilizing
     * the IAM condition feature.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Peer destination_attributes = 8;</code>
     */
    protected $destination_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $caller_ip
     *           The IP address of the caller.
     *           For caller from internet, this will be public IPv4 or IPv6 address.
     *           For caller from a Compute Engine VM with external IP address, this
     *           will be the VM's external IP address. For caller from a Compute
     *           Engine VM without external IP address, if the VM is in the same
     *           organization (or project) as the accessed resource, `caller_ip` will
     *           be the VM's internal IPv4 address, otherwise the `caller_ip` will be
     *           redacted to "gce-internal-ip".
     *           See https://cloud.google.com/compute/docs/vpc/ for more information.
     *     @type string $caller_supplied_user_agent
     *           The user agent of the caller.
     *           This information is not authenticated and should be treated accordingly.
     *           For example:
     *           +   `google-api-python-client/1.4.0`:
     *               The request was made by the Google API client for Python.
     *           +   `Cloud SDK Command Line Tool apitools-client/1.0 gcloud/0.9.62`:
     *               The request was made by the Google Cloud SDK CLI (gcloud).
     *           +   `AppEngine-Google; (+http://code.google.com/appengine; appid:
     *           s~my-project`:
     *               The request was made from the `my-project` App Engine app.
     *     @type string $caller_network
     *           The network of the caller.
     *           Set only if the network host project is part of the same GCP organization
     *           (or project) as the accessed resource.
     *           See https://cloud.google.com/compute/docs/vpc/ for more information.
     *           This is a scheme-less URI full resource name. For example:
     *               "//compute.googleapis.com/projects/PROJECT_ID/global/networks/NETWORK_ID"
     *     @type \Google\Rpc\Context\AttributeContext\Request $request_attributes
     *           Request attributes used in IAM condition evaluation. This field contains
     *           request attributes like request time and access levels associated with
     *           the request.
     *           To get the whole view of the attributes used in IAM
     *           condition evaluation, the user must also look into
     *           `AuditLog.authentication_info.resource_attributes`.
     *     @type \Google\Rpc\Context\AttributeContext\Peer $destination_attributes
     *           The destination of a network activity, such as accepting a TCP connection.
     *           In a multi hop network activity, the destination represents the receiver of
     *           the last hop. Only two fields are used in this message, Peer.port and
     *           Peer.ip. These fields are optionally populated by those services utilizing
     *           the IAM condition feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct($data);
    }

    /**
     * The IP address of the caller.
     * For caller from internet, this will be public IPv4 or IPv6 address.
     * For caller from a Compute Engine VM with external IP address, this
     * will be the VM's external IP address. For caller from a Compute
     * Engine VM without external IP address, if the VM is in the same
     * organization (or project) as the accessed resource, `caller_ip` will
     * be the VM's internal IPv4 address, otherwise the `caller_ip` will be
     * redacted to "gce-internal-ip".
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     *
     * Generated from protobuf field <code>string caller_ip = 1;</code>
     * @return string
     */
    public function getCallerIp()
    {
        return $this->caller_ip;
    }

    /**
     * The IP address of the caller.
     * For caller from internet, this will be public IPv4 or IPv6 address.
     * For caller from a Compute Engine VM with external IP address, this
     * will be the VM's external IP address. For caller from a Compute
     * Engine VM without external IP address, if the VM is in the same
     * organization (or project) as the accessed resource, `caller_ip` will
     * be the VM's internal IPv4 address, otherwise the `caller_ip` will be
     * redacted to "gce-internal-ip".
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     *
     * Generated from protobuf field <code>string caller_ip = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerIp($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_ip = $var;

        return $this;
    }

    /**
     * The user agent of the caller.
     * This information is not authenticated and should be treated accordingly.
     * For example:
     * +   `google-api-python-client/1.4.0`:
     *     The request was made by the Google API client for Python.
     * +   `Cloud SDK Command Line Tool apitools-client/1.0 gcloud/0.9.62`:
     *     The request was made by the Google Cloud SDK CLI (gcloud).
     * +   `AppEngine-Google; (+http://code.google.com/appengine; appid:
     * s~my-project`:
     *     The request was made from the `my-project` App Engine app.
     *
     * Generated from protobuf field <code>string caller_supplied_user_agent = 2;</code>
     * @return string
     */
    public function getCallerSuppliedUserAgent()
    {
        return $this->caller_supplied_user_agent;
    }

    /**
     * The user agent of the caller.
     * This information is not authenticated and should be treated accordingly.
     * For example:
     * +   `google-api-python-client/1.4.0`:
     *     The request was made by the Google API client for Python.
     * +   `Cloud SDK Command Line Tool apitools-client/1.0 gcloud/0.9.62`:
     *     The request was made by the Google Cloud SDK CLI (gcloud).
     * +   `AppEngine-Google; (+http://code.google.com/appengine; appid:
     * s~my-project`:
     *     The request was made from the `my-project` App Engine app.
     *
     * Generated from protobuf field <code>string caller_supplied_user_agent = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerSuppliedUserAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_supplied_user_agent = $var;

        return $this;
    }

    /**
     * The network of the caller.
     * Set only if the network host project is part of the same GCP organization
     * (or project) as the accessed resource.
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     * This is a scheme-less URI full resource name. For example:
     *     "//compute.googleapis.com/projects/PROJECT_ID/global/networks/NETWORK_ID"
     *
     * Generated from protobuf field <code>string caller_network = 3;</code>
     * @return string
     */
    public function getCallerNetwork()
    {
        return $this->caller_network;
    }

    /**
     * The network of the caller.
     * Set only if the network host project is part of the same GCP organization
     * (or project) as the accessed resource.
     * See https://cloud.google.com/compute/docs/vpc/ for more information.
     * This is a scheme-less URI full resource name. For example:
     *     "//compute.googleapis.com/projects/PROJECT_ID/global/networks/NETWORK_ID"
     *
     * Generated from protobuf field <code>string caller_network = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_network = $var;

        return $this;
    }

    /**
     * Request attributes used in IAM condition evaluation. This field contains
     * request attributes like request time and access levels associated with
     * the request.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.authentication_info.resource_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Request request_attributes = 7;</code>
     * @return \Google\Rpc\Context\AttributeContext\Request|null
     */
    public function getRequestAttributes()
    {
        return isset($this->request_attributes) ? $this->request_attributes : null;
    }

    public function hasRequestAttributes()
    {
        return isset($this->request_attributes);
    }

    public function clearRequestAttributes()
    {
        unset($this->request_attributes);
    }

    /**
     * Request attributes used in IAM condition evaluation. This field contains
     * request attributes like request time and access levels associated with
     * the request.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLog.authentication_info.resource_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Request request_attributes = 7;</code>
     * @param \Google\Rpc\Context\AttributeContext\Request $var
     * @return $this
     */
    public function setRequestAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Context\AttributeContext\Request::class);
        $this->request_attributes = $var;

        return $this;
    }

    /**
     * The destination of a network activity, such as accepting a TCP connection.
     * In a multi hop network activity, the destination represents the receiver of
     * the last hop. Only two fields are used in this message, Peer.port and
     * Peer.ip. These fields are optionally populated by those services utilizing
     * the IAM condition feature.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Peer destination_attributes = 8;</code>
     * @return \Google\Rpc\Context\AttributeContext\Peer|null
     */
    public function getDestinationAttributes()
    {
        return isset($this->destination_attributes) ? $this->destination_attributes : null;
    }

    public function hasDestinationAttributes()
    {
        return isset($this->destination_attributes);
    }

    public function clearDestinationAttributes()
    {
        unset($this->destination_attributes);
    }

    /**
     * The destination of a network activity, such as accepting a TCP connection.
     * In a multi hop network activity, the destination represents the receiver of
     * the last hop. Only two fields are used in this message, Peer.port and
     * Peer.ip. These fields are optionally populated by those services utilizing
     * the IAM condition feature.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Peer destination_attributes = 8;</code>
     * @param \Google\Rpc\Context\AttributeContext\Peer $var
     * @return $this
     */
    public function setDestinationAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Context\AttributeContext\Peer::class);
        $this->destination_attributes = $var;

        return $this;
    }

}

