<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/import.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The input config source.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.InputConfig</code>
 */
class InputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\CatalogInlineSource $catalog_inline_source
     *           The Inline source for the input content for Catalog items.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\GcsSource $gcs_source
     *           Google Cloud Storage location for the input content.
     *     @type \Google\Cloud\RecommendationEngine\V1beta1\UserEventInlineSource $user_event_inline_source
     *           The Inline source for the input content for UserEvents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Import::initOnce();
        parent::__construct($data);
    }

    /**
     * The Inline source for the input content for Catalog items.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.CatalogInlineSource catalog_inline_source = 1;</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\CatalogInlineSource|null
     */
    public function getCatalogInlineSource()
    {
        return $this->readOneof(1);
    }

    public function hasCatalogInlineSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Inline source for the input content for Catalog items.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.CatalogInlineSource catalog_inline_source = 1;</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\CatalogInlineSource $var
     * @return $this
     */
    public function setCatalogInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\CatalogInlineSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.GcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Google Cloud Storage location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.GcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.UserEventInlineSource user_event_inline_source = 3;</code>
     * @return \Google\Cloud\RecommendationEngine\V1beta1\UserEventInlineSource|null
     */
    public function getUserEventInlineSource()
    {
        return $this->readOneof(3);
    }

    public function hasUserEventInlineSource()
    {
        return $this->hasOneof(3);
    }

    /**
     * The Inline source for the input content for UserEvents.
     *
     * Generated from protobuf field <code>.google.cloud.recommendationengine.v1beta1.UserEventInlineSource user_event_inline_source = 3;</code>
     * @param \Google\Cloud\RecommendationEngine\V1beta1\UserEventInlineSource $var
     * @return $this
     */
    public function setUserEventInlineSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecommendationEngine\V1beta1\UserEventInlineSource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

