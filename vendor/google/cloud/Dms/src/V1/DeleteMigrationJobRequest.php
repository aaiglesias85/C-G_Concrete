<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'DeleteMigrationJob' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.DeleteMigrationJobRequest</code>
 */
class DeleteMigrationJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the migration job resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     */
    private $request_id = '';
    /**
     * The destination CloudSQL connection profile is always deleted with the
     * migration job. In case of force delete, the destination CloudSQL replica
     * database is also deleted.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     */
    private $force = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the migration job resource to delete.
     *     @type string $request_id
     *           A unique id used to identify the request. If the server receives two
     *           requests with the same id, then the second request will be ignored.
     *           It is recommended to always set this value to a UUID.
     *           The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     *     @type bool $force
     *           The destination CloudSQL connection profile is always deleted with the
     *           migration job. In case of force delete, the destination CloudSQL replica
     *           database is also deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the migration job resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the migration job resource to delete.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
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
     * The destination CloudSQL connection profile is always deleted with the
     * migration job. In case of force delete, the destination CloudSQL replica
     * database is also deleted.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * The destination CloudSQL connection profile is always deleted with the
     * migration job. In case of force delete, the destination CloudSQL replica
     * database is also deleted.
     *
     * Generated from protobuf field <code>bool force = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

