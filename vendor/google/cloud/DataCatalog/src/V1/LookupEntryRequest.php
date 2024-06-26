<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [LookupEntry][google.cloud.datacatalog.v1.DataCatalog.LookupEntry].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.LookupEntryRequest</code>
 */
class LookupEntryRequest extends \Google\Protobuf\Internal\Message
{
    protected $target_name;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $linked_resource
     *           The full name of the Google Cloud Platform resource the Data Catalog
     *           entry represents. For more information, see [Full Resource Name]
     *           (https://cloud.google.com/apis/design/resource_names#full_resource_name).
     *           Full names are case-sensitive. For example:
     *            * `//bigquery.googleapis.com/projects/{PROJECT_ID}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *            * `//pubsub.googleapis.com/projects/{PROJECT_ID}/topics/{TOPIC_ID}`
     *     @type string $sql_resource
     *           The SQL name of the entry. SQL names are case-sensitive.
     *           Examples:
     *           * `pubsub.topic.{PROJECT_ID}.{TOPIC_ID}`
     *           * `pubsub.topic.{PROJECT_ID}.`\``{TOPIC.ID.SEPARATED.WITH.DOTS}`\`
     *           * `bigquery.table.{PROJECT_ID}.{DATASET_ID}.{TABLE_ID}`
     *           * `bigquery.dataset.{PROJECT_ID}.{DATASET_ID}`
     *           * `datacatalog.entry.{PROJECT_ID}.{LOCATION_ID}.{ENTRY_GROUP_ID}.{ENTRY_ID}`
     *           Identifiers (`*_ID`) should comply with the
     *           [Lexical structure in Standard SQL]
     *           (https://cloud.google.com/bigquery/docs/reference/standard-sql/lexical).
     *     @type string $fully_qualified_name
     *           Fully qualified name (FQN) of the resource.
     *           FQNs take two forms:
     *           * For non-regionalized resources:
     *             `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     *           * For regionalized resources:
     *             `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     *           Example for a DPMS table:
     *           `dataproc_metastore:{PROJECT_ID}.{LOCATION_ID}.{INSTANCE_ID}.{DATABASE_ID}.{TABLE_ID}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The full name of the Google Cloud Platform resource the Data Catalog
     * entry represents. For more information, see [Full Resource Name]
     * (https://cloud.google.com/apis/design/resource_names#full_resource_name).
     * Full names are case-sensitive. For example:
     *  * `//bigquery.googleapis.com/projects/{PROJECT_ID}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *  * `//pubsub.googleapis.com/projects/{PROJECT_ID}/topics/{TOPIC_ID}`
     *
     * Generated from protobuf field <code>string linked_resource = 1;</code>
     * @return string
     */
    public function getLinkedResource()
    {
        return $this->readOneof(1);
    }

    public function hasLinkedResource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The full name of the Google Cloud Platform resource the Data Catalog
     * entry represents. For more information, see [Full Resource Name]
     * (https://cloud.google.com/apis/design/resource_names#full_resource_name).
     * Full names are case-sensitive. For example:
     *  * `//bigquery.googleapis.com/projects/{PROJECT_ID}/datasets/{DATASET_ID}/tables/{TABLE_ID}`
     *  * `//pubsub.googleapis.com/projects/{PROJECT_ID}/topics/{TOPIC_ID}`
     *
     * Generated from protobuf field <code>string linked_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkedResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The SQL name of the entry. SQL names are case-sensitive.
     * Examples:
     * * `pubsub.topic.{PROJECT_ID}.{TOPIC_ID}`
     * * `pubsub.topic.{PROJECT_ID}.`\``{TOPIC.ID.SEPARATED.WITH.DOTS}`\`
     * * `bigquery.table.{PROJECT_ID}.{DATASET_ID}.{TABLE_ID}`
     * * `bigquery.dataset.{PROJECT_ID}.{DATASET_ID}`
     * * `datacatalog.entry.{PROJECT_ID}.{LOCATION_ID}.{ENTRY_GROUP_ID}.{ENTRY_ID}`
     * Identifiers (`*_ID`) should comply with the
     * [Lexical structure in Standard SQL]
     * (https://cloud.google.com/bigquery/docs/reference/standard-sql/lexical).
     *
     * Generated from protobuf field <code>string sql_resource = 3;</code>
     * @return string
     */
    public function getSqlResource()
    {
        return $this->readOneof(3);
    }

    public function hasSqlResource()
    {
        return $this->hasOneof(3);
    }

    /**
     * The SQL name of the entry. SQL names are case-sensitive.
     * Examples:
     * * `pubsub.topic.{PROJECT_ID}.{TOPIC_ID}`
     * * `pubsub.topic.{PROJECT_ID}.`\``{TOPIC.ID.SEPARATED.WITH.DOTS}`\`
     * * `bigquery.table.{PROJECT_ID}.{DATASET_ID}.{TABLE_ID}`
     * * `bigquery.dataset.{PROJECT_ID}.{DATASET_ID}`
     * * `datacatalog.entry.{PROJECT_ID}.{LOCATION_ID}.{ENTRY_GROUP_ID}.{ENTRY_ID}`
     * Identifiers (`*_ID`) should comply with the
     * [Lexical structure in Standard SQL]
     * (https://cloud.google.com/bigquery/docs/reference/standard-sql/lexical).
     *
     * Generated from protobuf field <code>string sql_resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSqlResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Fully qualified name (FQN) of the resource.
     * FQNs take two forms:
     * * For non-regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * * For regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * Example for a DPMS table:
     * `dataproc_metastore:{PROJECT_ID}.{LOCATION_ID}.{INSTANCE_ID}.{DATABASE_ID}.{TABLE_ID}`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 5;</code>
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->readOneof(5);
    }

    public function hasFullyQualifiedName()
    {
        return $this->hasOneof(5);
    }

    /**
     * Fully qualified name (FQN) of the resource.
     * FQNs take two forms:
     * * For non-regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * * For regionalized resources:
     *   `{SYSTEM}:{PROJECT}.{LOCATION_ID}.{PATH_TO_RESOURCE_SEPARATED_WITH_DOTS}`
     * Example for a DPMS table:
     * `dataproc_metastore:{PROJECT_ID}.{LOCATION_ID}.{INSTANCE_ID}.{DATABASE_ID}.{TABLE_ID}`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setFullyQualifiedName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTargetName()
    {
        return $this->whichOneof("target_name");
    }

}

