<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authentication method for Amazon Web Services (AWS) that uses Google owned
 * Google service account to assume into customer's AWS IAM Role.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.AwsAccessRole</code>
 */
class AwsAccessRole extends \Google\Protobuf\Internal\Message
{
    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     */
    private $iam_role_id = '';
    /**
     * A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's AWS IAM Role.
     *
     * Generated from protobuf field <code>string identity = 2;</code>
     */
    private $identity = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $iam_role_id
     *           The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     *           Connection.
     *     @type string $identity
     *           A unique Google-owned and Google-generated identity for the Connection.
     *           This identity will be used to access the user's AWS IAM Role.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     * @return string
     */
    public function getIamRoleId()
    {
        return $this->iam_role_id;
    }

    /**
     * The user’s AWS IAM Role that trusts the Google-owned AWS IAM user
     * Connection.
     *
     * Generated from protobuf field <code>string iam_role_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIamRoleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->iam_role_id = $var;

        return $this;
    }

    /**
     * A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's AWS IAM Role.
     *
     * Generated from protobuf field <code>string identity = 2;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * A unique Google-owned and Google-generated identity for the Connection.
     * This identity will be used to access the user's AWS IAM Role.
     *
     * Generated from protobuf field <code>string identity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

}

