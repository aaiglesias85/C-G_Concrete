<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation_spec_set.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container of information related to one possible annotation that can be used
 * in a labeling task. For example, an image classification task where images
 * are labeled as `dog` or `cat` must reference an AnnotationSpec for `dog` and
 * an AnnotationSpec for `cat`.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.AnnotationSpec</code>
 */
class AnnotationSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The display name of the AnnotationSpec. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * Optional. User-provided description of the annotation specification.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Required. The display name of the AnnotationSpec. Maximum of 64 characters.
     *     @type string $description
     *           Optional. User-provided description of the annotation specification.
     *           The description can be up to 10,000 characters long.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\AnnotationSpecSet::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The display name of the AnnotationSpec. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The display name of the AnnotationSpec. Maximum of 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
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
     * Optional. User-provided description of the annotation specification.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. User-provided description of the annotation specification.
     * The description can be up to 10,000 characters long.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

