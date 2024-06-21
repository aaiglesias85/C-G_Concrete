<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cluster that is managed by the workflow.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ManagedCluster</code>
 */
class ManagedCluster extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The cluster name prefix. A unique cluster name will be formed by
     * appending a random suffix.
     * The name must contain only lower-case letters (a-z), numbers (0-9),
     * and hyphens (-). Must begin with a letter. Cannot begin or end with
     * hyphen. Must consist of between 2 and 35 characters.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_name = '';
    /**
     * Required. The cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $config = null;
    /**
     * Optional. The labels to associate with this cluster.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cluster_name
     *           Required. The cluster name prefix. A unique cluster name will be formed by
     *           appending a random suffix.
     *           The name must contain only lower-case letters (a-z), numbers (0-9),
     *           and hyphens (-). Must begin with a letter. Cannot begin or end with
     *           hyphen. Must consist of between 2 and 35 characters.
     *     @type \Google\Cloud\Dataproc\V1\ClusterConfig $config
     *           Required. The cluster configuration.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. The labels to associate with this cluster.
     *           Label keys must be between 1 and 63 characters long, and must conform to
     *           the following PCRE regular expression:
     *           [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     *           Label values must be between 1 and 63 characters long, and must conform to
     *           the following PCRE regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     *           No more than 32 labels can be associated with a given cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The cluster name prefix. A unique cluster name will be formed by
     * appending a random suffix.
     * The name must contain only lower-case letters (a-z), numbers (0-9),
     * and hyphens (-). Must begin with a letter. Cannot begin or end with
     * hyphen. Must consist of between 2 and 35 characters.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Required. The cluster name prefix. A unique cluster name will be formed by
     * appending a random suffix.
     * The name must contain only lower-case letters (a-z), numbers (0-9),
     * and hyphens (-). Must begin with a letter. Cannot begin or end with
     * hyphen. Must consist of between 2 and 35 characters.
     *
     * Generated from protobuf field <code>string cluster_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Required. The cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\ClusterConfig|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Required. The cluster configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.ClusterConfig config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\ClusterConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\ClusterConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Optional. The labels to associate with this cluster.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. The labels to associate with this cluster.
     * Label keys must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression:
     * [\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}
     * Label values must be between 1 and 63 characters long, and must conform to
     * the following PCRE regular expression: [\p{Ll}\p{Lo}\p{N}_-]{0,63}
     * No more than 32 labels can be associated with a given cluster.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

