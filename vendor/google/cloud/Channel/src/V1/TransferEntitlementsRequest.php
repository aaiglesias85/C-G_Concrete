<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.TransferEntitlements][google.cloud.channel.v1.CloudChannelService.TransferEntitlements].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.TransferEntitlementsRequest</code>
 */
class TransferEntitlementsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller's customer account that will receive
     * transferred entitlements.
     * Parent uses the format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Required. The new entitlements to create or transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $entitlements;
    /**
     * The super admin of the resold customer generates this token to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. You can omit this token after authorization.
     * See https://support.google.com/a/answer/7643790 for more details.
     *
     * Generated from protobuf field <code>string auth_token = 4;</code>
     */
    private $auth_token = '';
    /**
     * Optional. You can specify an optional unique request ID, and if you need to retry
     * your request, the server will know to ignore the request if it's complete.
     * For example, you make an initial request and the request times out. If you
     * make the request again with the same request ID, the server can check if
     * it received the original operation with the same request ID. If it did, it
     * will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the reseller's customer account that will receive
     *           transferred entitlements.
     *           Parent uses the format: accounts/{account_id}/customers/{customer_id}
     *     @type \Google\Cloud\Channel\V1\Entitlement[]|\Google\Protobuf\Internal\RepeatedField $entitlements
     *           Required. The new entitlements to create or transfer.
     *     @type string $auth_token
     *           The super admin of the resold customer generates this token to
     *           authorize a reseller to access their Cloud Identity and purchase
     *           entitlements on their behalf. You can omit this token after authorization.
     *           See https://support.google.com/a/answer/7643790 for more details.
     *     @type string $request_id
     *           Optional. You can specify an optional unique request ID, and if you need to retry
     *           your request, the server will know to ignore the request if it's complete.
     *           For example, you make an initial request and the request times out. If you
     *           make the request again with the same request ID, the server can check if
     *           it received the original operation with the same request ID. If it did, it
     *           will ignore the second request.
     *           The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     *           with the exception that zero UUID is not supported
     *           (`00000000-0000-0000-0000-000000000000`).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the reseller's customer account that will receive
     * transferred entitlements.
     * Parent uses the format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller's customer account that will receive
     * transferred entitlements.
     * Parent uses the format: accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The new entitlements to create or transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntitlements()
    {
        return $this->entitlements;
    }

    /**
     * Required. The new entitlements to create or transfer.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement entitlements = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\Entitlement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntitlements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Entitlement::class);
        $this->entitlements = $arr;

        return $this;
    }

    /**
     * The super admin of the resold customer generates this token to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. You can omit this token after authorization.
     * See https://support.google.com/a/answer/7643790 for more details.
     *
     * Generated from protobuf field <code>string auth_token = 4;</code>
     * @return string
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * The super admin of the resold customer generates this token to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. You can omit this token after authorization.
     * See https://support.google.com/a/answer/7643790 for more details.
     *
     * Generated from protobuf field <code>string auth_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_token = $var;

        return $this;
    }

    /**
     * Optional. You can specify an optional unique request ID, and if you need to retry
     * your request, the server will know to ignore the request if it's complete.
     * For example, you make an initial request and the request times out. If you
     * make the request again with the same request ID, the server can check if
     * it received the original operation with the same request ID. If it did, it
     * will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. You can specify an optional unique request ID, and if you need to retry
     * your request, the server will know to ignore the request if it's complete.
     * For example, you make an initial request and the request times out. If you
     * make the request again with the same request ID, the server can check if
     * it received the original operation with the same request ID. If it did, it
     * will ignore the second request.
     * The request ID must be a valid [UUID](https://tools.ietf.org/html/rfc4122)
     * with the exception that zero UUID is not supported
     * (`00000000-0000-0000-0000-000000000000`).
     *
     * Generated from protobuf field <code>string request_id = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
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

