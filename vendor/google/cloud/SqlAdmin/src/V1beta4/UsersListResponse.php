<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1beta4/cloud_sql_users.proto

namespace Google\Cloud\Sql\V1beta4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User list response.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1beta4.UsersListResponse</code>
 */
class UsersListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * This is always <b>sql#usersList</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     */
    private $kind = '';
    /**
     * List of user resources in the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.User items = 2;</code>
     */
    private $items;
    /**
     * An identifier that uniquely identifies the operation. You can use this
     * identifier to retrieve the Operations resource that has information about
     * the operation.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           This is always <b>sql#usersList</b>.
     *     @type \Google\Cloud\Sql\V1beta4\User[]|\Google\Protobuf\Internal\RepeatedField $items
     *           List of user resources in the instance.
     *     @type string $next_page_token
     *           An identifier that uniquely identifies the operation. You can use this
     *           identifier to retrieve the Operations resource that has information about
     *           the operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1Beta4\CloudSqlUsers::initOnce();
        parent::__construct($data);
    }

    /**
     * This is always <b>sql#usersList</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * This is always <b>sql#usersList</b>.
     *
     * Generated from protobuf field <code>string kind = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * List of user resources in the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.User items = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * List of user resources in the instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.sql.v1beta4.User items = 2;</code>
     * @param \Google\Cloud\Sql\V1beta4\User[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Sql\V1beta4\User::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * An identifier that uniquely identifies the operation. You can use this
     * identifier to retrieve the Operations resource that has information about
     * the operation.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * An identifier that uniquely identifies the operation. You can use this
     * identifier to retrieve the Operations resource that has information about
     * the operation.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

