<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AutoMl.UpdateTableSpec][google.cloud.automl.v1beta1.AutoMl.UpdateTableSpec]
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.UpdateTableSpecRequest</code>
 */
class UpdateTableSpecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The table spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TableSpec table_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $table_spec = null;
    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AutoMl\V1beta1\TableSpec $table_spec
     *           Required. The table spec which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask applies to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The table spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TableSpec table_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AutoMl\V1beta1\TableSpec|null
     */
    public function getTableSpec()
    {
        return $this->table_spec;
    }

    public function hasTableSpec()
    {
        return isset($this->table_spec);
    }

    public function clearTableSpec()
    {
        unset($this->table_spec);
    }

    /**
     * Required. The table spec which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TableSpec table_spec = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TableSpec $var
     * @return $this
     */
    public function setTableSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\TableSpec::class);
        $this->table_spec = $var;

        return $this;
    }

    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

