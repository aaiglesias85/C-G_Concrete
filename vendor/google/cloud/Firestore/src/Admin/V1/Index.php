<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/index.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Firestore indexes enable simple and complex queries against
 * documents in a database.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Index</code>
 */
class Index extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A server defined name for this index.
     * The form of this name for composite indexes will be:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/indexes/{composite_index_id}`
     * For single field indexes, this field will be empty.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Indexes with a collection query scope specified allow queries
     * against a collection that is the child of a specific document, specified at
     * query time, and that has the same collection id.
     * Indexes with a collection group query scope specified allow queries against
     * all collections descended from a specific document, specified at query
     * time, and that have the same collection id as this index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.QueryScope query_scope = 2;</code>
     */
    private $query_scope = 0;
    /**
     * The fields supported by this index.
     * For composite indexes, this is always 2 or more fields.
     * The last field entry is always for the field path `__name__`. If, on
     * creation, `__name__` was not specified as the last field, it will be added
     * automatically with the same direction as that of the last field defined. If
     * the final field in a composite index is not directional, the `__name__`
     * will be ordered ASCENDING (unless explicitly specified).
     * For single field indexes, this will always be exactly one entry with a
     * field path equal to the field path of the associated field.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index.IndexField fields = 3;</code>
     */
    private $fields;
    /**
     * Output only. The serving state of the index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.State state = 4;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. A server defined name for this index.
     *           The form of this name for composite indexes will be:
     *           `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/indexes/{composite_index_id}`
     *           For single field indexes, this field will be empty.
     *     @type int $query_scope
     *           Indexes with a collection query scope specified allow queries
     *           against a collection that is the child of a specific document, specified at
     *           query time, and that has the same collection id.
     *           Indexes with a collection group query scope specified allow queries against
     *           all collections descended from a specific document, specified at query
     *           time, and that have the same collection id as this index.
     *     @type \Google\Cloud\Firestore\Admin\V1\Index\IndexField[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           The fields supported by this index.
     *           For composite indexes, this is always 2 or more fields.
     *           The last field entry is always for the field path `__name__`. If, on
     *           creation, `__name__` was not specified as the last field, it will be added
     *           automatically with the same direction as that of the last field defined. If
     *           the final field in a composite index is not directional, the `__name__`
     *           will be ordered ASCENDING (unless explicitly specified).
     *           For single field indexes, this will always be exactly one entry with a
     *           field path equal to the field path of the associated field.
     *     @type int $state
     *           Output only. The serving state of the index.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Index::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A server defined name for this index.
     * The form of this name for composite indexes will be:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/indexes/{composite_index_id}`
     * For single field indexes, this field will be empty.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. A server defined name for this index.
     * The form of this name for composite indexes will be:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/indexes/{composite_index_id}`
     * For single field indexes, this field will be empty.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Indexes with a collection query scope specified allow queries
     * against a collection that is the child of a specific document, specified at
     * query time, and that has the same collection id.
     * Indexes with a collection group query scope specified allow queries against
     * all collections descended from a specific document, specified at query
     * time, and that have the same collection id as this index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.QueryScope query_scope = 2;</code>
     * @return int
     */
    public function getQueryScope()
    {
        return $this->query_scope;
    }

    /**
     * Indexes with a collection query scope specified allow queries
     * against a collection that is the child of a specific document, specified at
     * query time, and that has the same collection id.
     * Indexes with a collection group query scope specified allow queries against
     * all collections descended from a specific document, specified at query
     * time, and that have the same collection id as this index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.QueryScope query_scope = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setQueryScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Index\QueryScope::class);
        $this->query_scope = $var;

        return $this;
    }

    /**
     * The fields supported by this index.
     * For composite indexes, this is always 2 or more fields.
     * The last field entry is always for the field path `__name__`. If, on
     * creation, `__name__` was not specified as the last field, it will be added
     * automatically with the same direction as that of the last field defined. If
     * the final field in a composite index is not directional, the `__name__`
     * will be ordered ASCENDING (unless explicitly specified).
     * For single field indexes, this will always be exactly one entry with a
     * field path equal to the field path of the associated field.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index.IndexField fields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The fields supported by this index.
     * For composite indexes, this is always 2 or more fields.
     * The last field entry is always for the field path `__name__`. If, on
     * creation, `__name__` was not specified as the last field, it will be added
     * automatically with the same direction as that of the last field defined. If
     * the final field in a composite index is not directional, the `__name__`
     * will be ordered ASCENDING (unless explicitly specified).
     * For single field indexes, this will always be exactly one entry with a
     * field path equal to the field path of the associated field.
     *
     * Generated from protobuf field <code>repeated .google.firestore.admin.v1.Index.IndexField fields = 3;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Index\IndexField[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Admin\V1\Index\IndexField::class);
        $this->fields = $arr;

        return $this;
    }

    /**
     * Output only. The serving state of the index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.State state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The serving state of the index.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Index.State state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Admin\V1\Index\State::class);
        $this->state = $var;

        return $this;
    }

}

