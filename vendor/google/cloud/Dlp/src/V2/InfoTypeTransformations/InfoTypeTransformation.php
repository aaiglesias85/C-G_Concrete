<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\InfoTypeTransformations;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transformation to apply to text that is identified as a specific
 * info_type.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.InfoTypeTransformations.InfoTypeTransformation</code>
 */
class InfoTypeTransformation extends \Google\Protobuf\Internal\Message
{
    /**
     * InfoTypes to apply the transformation to. An empty list will cause
     * this transformation to apply to all findings that correspond to
     * infoTypes that were requested in `InspectConfig`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     */
    private $info_types;
    /**
     * Required. Primitive transformation to apply to the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrimitiveTransformation primitive_transformation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $primitive_transformation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\InfoType[]|\Google\Protobuf\Internal\RepeatedField $info_types
     *           InfoTypes to apply the transformation to. An empty list will cause
     *           this transformation to apply to all findings that correspond to
     *           infoTypes that were requested in `InspectConfig`.
     *     @type \Google\Cloud\Dlp\V2\PrimitiveTransformation $primitive_transformation
     *           Required. Primitive transformation to apply to the infoType.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * InfoTypes to apply the transformation to. An empty list will cause
     * this transformation to apply to all findings that correspond to
     * infoTypes that were requested in `InspectConfig`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfoTypes()
    {
        return $this->info_types;
    }

    /**
     * InfoTypes to apply the transformation to. An empty list will cause
     * this transformation to apply to all findings that correspond to
     * infoTypes that were requested in `InspectConfig`.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoType info_types = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InfoType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfoTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InfoType::class);
        $this->info_types = $arr;

        return $this;
    }

    /**
     * Required. Primitive transformation to apply to the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrimitiveTransformation primitive_transformation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dlp\V2\PrimitiveTransformation|null
     */
    public function getPrimitiveTransformation()
    {
        return $this->primitive_transformation;
    }

    public function hasPrimitiveTransformation()
    {
        return isset($this->primitive_transformation);
    }

    public function clearPrimitiveTransformation()
    {
        unset($this->primitive_transformation);
    }

    /**
     * Required. Primitive transformation to apply to the infoType.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PrimitiveTransformation primitive_transformation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dlp\V2\PrimitiveTransformation $var
     * @return $this
     */
    public function setPrimitiveTransformation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\PrimitiveTransformation::class);
        $this->primitive_transformation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InfoTypeTransformation::class, \Google\Cloud\Dlp\V2\InfoTypeTransformations_InfoTypeTransformation::class);

