<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/entity_type.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [EntityTypes.BatchUpdateEntityTypes][google.cloud.dialogflow.v2.EntityTypes.BatchUpdateEntityTypes].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.BatchUpdateEntityTypesResponse</code>
 */
class BatchUpdateEntityTypesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The collection of updated or created entity types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     */
    private $entity_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\EntityType[]|\Google\Protobuf\Internal\RepeatedField $entity_types
     *           The collection of updated or created entity types.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\EntityType::initOnce();
        parent::__construct($data);
    }

    /**
     * The collection of updated or created entity types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntityTypes()
    {
        return $this->entity_types;
    }

    /**
     * The collection of updated or created entity types.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.EntityType entity_types = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2\EntityType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntityTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\EntityType::class);
        $this->entity_types = $arr;

        return $this;
    }

}

