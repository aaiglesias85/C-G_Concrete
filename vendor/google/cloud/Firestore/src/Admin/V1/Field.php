<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/field.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single field in the database.
 * Fields are grouped by their "Collection Group", which represent all
 * collections in the database with the same id.
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.Field</code>
 */
class Field extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A field name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     * A field path may be a simple field name, e.g. `address` or a path to fields
     * within map_value , e.g. `address.city`,
     * or a special field path. The only valid special field is `*`, which
     * represents any field.
     * Field paths may be quoted using ` (backtick). The only character that needs
     * to be escaped within a quoted field path is the backtick character itself,
     * escaped using a backslash. Special characters in field paths that
     * must be quoted include: `*`, `.`,
     * ``` (backtick), `[`, `]`, as well as any ascii symbolic characters.
     * Examples:
     * (Note: Comments here are written in markdown syntax, so there is an
     *  additional layer of backticks to represent a code block)
     * `\`address.city\`` represents a field named `address.city`, not the map key
     * `city` in the field `address`.
     * `\`*\`` represents a field named `*`, not any field.
     * A special `Field` contains the default indexing settings for all fields.
     * This field's resource name is:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/&#42;`
     * Indexes defined on this `Field` will be applied to all fields which do not
     * have their own `Field` index configuration.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * The index configuration for this field. If unset, field indexing will
     * revert to the configuration defined by the `ancestor_field`. To
     * explicitly remove all indexes for this field, specify an index config
     * with an empty list of indexes.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.IndexConfig index_config = 2;</code>
     */
    private $index_config = null;
    /**
     * The TTL configuration for this `Field`.
     * Setting or unsetting this will enable or disable the TTL for
     * documents that have this `Field`.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig ttl_config = 3;</code>
     */
    private $ttl_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A field name of the form
     *           `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     *           A field path may be a simple field name, e.g. `address` or a path to fields
     *           within map_value , e.g. `address.city`,
     *           or a special field path. The only valid special field is `*`, which
     *           represents any field.
     *           Field paths may be quoted using ` (backtick). The only character that needs
     *           to be escaped within a quoted field path is the backtick character itself,
     *           escaped using a backslash. Special characters in field paths that
     *           must be quoted include: `*`, `.`,
     *           ``` (backtick), `[`, `]`, as well as any ascii symbolic characters.
     *           Examples:
     *           (Note: Comments here are written in markdown syntax, so there is an
     *            additional layer of backticks to represent a code block)
     *           `\`address.city\`` represents a field named `address.city`, not the map key
     *           `city` in the field `address`.
     *           `\`*\`` represents a field named `*`, not any field.
     *           A special `Field` contains the default indexing settings for all fields.
     *           This field's resource name is:
     *           `projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/&#42;`
     *           Indexes defined on this `Field` will be applied to all fields which do not
     *           have their own `Field` index configuration.
     *     @type \Google\Cloud\Firestore\Admin\V1\Field\IndexConfig $index_config
     *           The index configuration for this field. If unset, field indexing will
     *           revert to the configuration defined by the `ancestor_field`. To
     *           explicitly remove all indexes for this field, specify an index config
     *           with an empty list of indexes.
     *     @type \Google\Cloud\Firestore\Admin\V1\Field\TtlConfig $ttl_config
     *           The TTL configuration for this `Field`.
     *           Setting or unsetting this will enable or disable the TTL for
     *           documents that have this `Field`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\Field::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A field name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     * A field path may be a simple field name, e.g. `address` or a path to fields
     * within map_value , e.g. `address.city`,
     * or a special field path. The only valid special field is `*`, which
     * represents any field.
     * Field paths may be quoted using ` (backtick). The only character that needs
     * to be escaped within a quoted field path is the backtick character itself,
     * escaped using a backslash. Special characters in field paths that
     * must be quoted include: `*`, `.`,
     * ``` (backtick), `[`, `]`, as well as any ascii symbolic characters.
     * Examples:
     * (Note: Comments here are written in markdown syntax, so there is an
     *  additional layer of backticks to represent a code block)
     * `\`address.city\`` represents a field named `address.city`, not the map key
     * `city` in the field `address`.
     * `\`*\`` represents a field named `*`, not any field.
     * A special `Field` contains the default indexing settings for all fields.
     * This field's resource name is:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/&#42;`
     * Indexes defined on this `Field` will be applied to all fields which do not
     * have their own `Field` index configuration.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A field name of the form
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_path}`
     * A field path may be a simple field name, e.g. `address` or a path to fields
     * within map_value , e.g. `address.city`,
     * or a special field path. The only valid special field is `*`, which
     * represents any field.
     * Field paths may be quoted using ` (backtick). The only character that needs
     * to be escaped within a quoted field path is the backtick character itself,
     * escaped using a backslash. Special characters in field paths that
     * must be quoted include: `*`, `.`,
     * ``` (backtick), `[`, `]`, as well as any ascii symbolic characters.
     * Examples:
     * (Note: Comments here are written in markdown syntax, so there is an
     *  additional layer of backticks to represent a code block)
     * `\`address.city\`` represents a field named `address.city`, not the map key
     * `city` in the field `address`.
     * `\`*\`` represents a field named `*`, not any field.
     * A special `Field` contains the default indexing settings for all fields.
     * This field's resource name is:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/__default__/fields/&#42;`
     * Indexes defined on this `Field` will be applied to all fields which do not
     * have their own `Field` index configuration.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The index configuration for this field. If unset, field indexing will
     * revert to the configuration defined by the `ancestor_field`. To
     * explicitly remove all indexes for this field, specify an index config
     * with an empty list of indexes.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.IndexConfig index_config = 2;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Field\IndexConfig|null
     */
    public function getIndexConfig()
    {
        return $this->index_config;
    }

    public function hasIndexConfig()
    {
        return isset($this->index_config);
    }

    public function clearIndexConfig()
    {
        unset($this->index_config);
    }

    /**
     * The index configuration for this field. If unset, field indexing will
     * revert to the configuration defined by the `ancestor_field`. To
     * explicitly remove all indexes for this field, specify an index config
     * with an empty list of indexes.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.IndexConfig index_config = 2;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Field\IndexConfig $var
     * @return $this
     */
    public function setIndexConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Field\IndexConfig::class);
        $this->index_config = $var;

        return $this;
    }

    /**
     * The TTL configuration for this `Field`.
     * Setting or unsetting this will enable or disable the TTL for
     * documents that have this `Field`.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig ttl_config = 3;</code>
     * @return \Google\Cloud\Firestore\Admin\V1\Field\TtlConfig|null
     */
    public function getTtlConfig()
    {
        return $this->ttl_config;
    }

    public function hasTtlConfig()
    {
        return isset($this->ttl_config);
    }

    public function clearTtlConfig()
    {
        unset($this->ttl_config);
    }

    /**
     * The TTL configuration for this `Field`.
     * Setting or unsetting this will enable or disable the TTL for
     * documents that have this `Field`.
     *
     * Generated from protobuf field <code>.google.firestore.admin.v1.Field.TtlConfig ttl_config = 3;</code>
     * @param \Google\Cloud\Firestore\Admin\V1\Field\TtlConfig $var
     * @return $this
     */
    public function setTtlConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Admin\V1\Field\TtlConfig::class);
        $this->ttl_config = $var;

        return $this;
    }

}

