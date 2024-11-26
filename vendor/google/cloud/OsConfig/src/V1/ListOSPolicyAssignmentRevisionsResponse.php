<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy_assignments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing all revisions for a OS policy assignment.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListOSPolicyAssignmentRevisionsResponse</code>
 */
class ListOSPolicyAssignmentRevisionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The OS policy assignment revisions
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignments = 1;</code>
     */
    private $os_policy_assignments;
    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * revisions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\OSPolicyAssignment[]|\Google\Protobuf\Internal\RepeatedField $os_policy_assignments
     *           The OS policy assignment revisions
     *     @type string $next_page_token
     *           The pagination token to retrieve the next page of OS policy assignment
     *           revisions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicyAssignments::initOnce();
        parent::__construct($data);
    }

    /**
     * The OS policy assignment revisions
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOsPolicyAssignments()
    {
        return $this->os_policy_assignments;
    }

    /**
     * The OS policy assignment revisions
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.OSPolicyAssignment os_policy_assignments = 1;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicyAssignment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOsPolicyAssignments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\OSPolicyAssignment::class);
        $this->os_policy_assignments = $arr;

        return $this;
    }

    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * revisions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The pagination token to retrieve the next page of OS policy assignment
     * revisions.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
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

