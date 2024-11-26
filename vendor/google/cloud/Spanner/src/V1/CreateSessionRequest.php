<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [CreateSession][google.spanner.v1.Spanner.CreateSession].
 *
 * Generated from protobuf message <code>google.spanner.v1.CreateSessionRequest</code>
 */
class CreateSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The database in which the new session is created.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $database = '';
    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $session = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required. The database in which the new session is created.
     *     @type \Google\Cloud\Spanner\V1\Session $session
     *           Required. The session to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The database in which the new session is created.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. The database in which the new session is created.
     *
     * Generated from protobuf field <code>string database = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\V1\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Required. The session to create.
     *
     * Generated from protobuf field <code>.google.spanner.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\V1\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\Session::class);
        $this->session = $var;

        return $this;
    }

}

