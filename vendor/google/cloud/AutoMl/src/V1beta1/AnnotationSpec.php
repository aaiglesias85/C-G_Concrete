<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/annotation_spec.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A definition of an annotation spec.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.AnnotationSpec</code>
 */
class AnnotationSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the annotation spec.
     * Form:
     * 'projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/annotationSpecs/{annotation_spec_id}'
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The name of the annotation spec to show in the interface. The name can be
     * up to 32 characters long and must match the regexp `[a-zA-Z0-9_]+`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Output only. The number of examples in the parent dataset
     * labeled by the annotation spec.
     *
     * Generated from protobuf field <code>int32 example_count = 9;</code>
     */
    private $example_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the annotation spec.
     *           Form:
     *           'projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/annotationSpecs/{annotation_spec_id}'
     *     @type string $display_name
     *           Required. The name of the annotation spec to show in the interface. The name can be
     *           up to 32 characters long and must match the regexp `[a-zA-Z0-9_]+`.
     *     @type int $example_count
     *           Output only. The number of examples in the parent dataset
     *           labeled by the annotation spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\AnnotationSpec::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the annotation spec.
     * Form:
     * 'projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/annotationSpecs/{annotation_spec_id}'
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the annotation spec.
     * Form:
     * 'projects/{project_id}/locations/{location_id}/datasets/{dataset_id}/annotationSpecs/{annotation_spec_id}'
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
     * Required. The name of the annotation spec to show in the interface. The name can be
     * up to 32 characters long and must match the regexp `[a-zA-Z0-9_]+`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of the annotation spec to show in the interface. The name can be
     * up to 32 characters long and must match the regexp `[a-zA-Z0-9_]+`.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The number of examples in the parent dataset
     * labeled by the annotation spec.
     *
     * Generated from protobuf field <code>int32 example_count = 9;</code>
     * @return int
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Output only. The number of examples in the parent dataset
     * labeled by the annotation spec.
     *
     * Generated from protobuf field <code>int32 example_count = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->example_count = $var;

        return $this;
    }

}

