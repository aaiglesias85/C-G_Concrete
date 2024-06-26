<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data for an entity annotation.
 * Represents a phrase in the conversation that is a known entity, such
 * as a person, an organization, or location.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * The representative name for the entity.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     */
    private $display_name = '';
    /**
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Entity.Type type = 2;</code>
     */
    private $type = 0;
    /**
     * Metadata associated with the entity.
     * For most entity types, the metadata is a Wikipedia URL (`wikipedia_url`)
     * and Knowledge Graph MID (`mid`), if they are available. For the metadata
     * associated with other entity types, see the Type table below.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;
    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     */
    private $salience = 0.0;
    /**
     * The aggregate sentiment expressed for this entity in the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 5;</code>
     */
    private $sentiment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           The representative name for the entity.
     *     @type int $type
     *           The entity type.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Metadata associated with the entity.
     *           For most entity types, the metadata is a Wikipedia URL (`wikipedia_url`)
     *           and Knowledge Graph MID (`mid`), if they are available. For the metadata
     *           associated with other entity types, see the Type table below.
     *     @type float $salience
     *           The salience score associated with the entity in the [0, 1.0] range.
     *           The salience score for an entity provides information about the
     *           importance or centrality of that entity to the entire document text.
     *           Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     *           salient.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SentimentData $sentiment
     *           The aggregate sentiment expressed for this entity in the conversation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The representative name for the entity.
     *
     * Generated from protobuf field <code>string display_name = 1;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The representative name for the entity.
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
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Entity.Type type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The entity type.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Entity.Type type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\Entity\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Metadata associated with the entity.
     * For most entity types, the metadata is a Wikipedia URL (`wikipedia_url`)
     * and Knowledge Graph MID (`mid`), if they are available. For the metadata
     * associated with other entity types, see the Type table below.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata associated with the entity.
     * For most entity types, the metadata is a Wikipedia URL (`wikipedia_url`)
     * and Knowledge Graph MID (`mid`), if they are available. For the metadata
     * associated with other entity types, see the Type table below.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     * @return float
     */
    public function getSalience()
    {
        return $this->salience;
    }

    /**
     * The salience score associated with the entity in the [0, 1.0] range.
     * The salience score for an entity provides information about the
     * importance or centrality of that entity to the entire document text.
     * Scores closer to 0 are less salient, while scores closer to 1.0 are highly
     * salient.
     *
     * Generated from protobuf field <code>float salience = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setSalience($var)
    {
        GPBUtil::checkFloat($var);
        $this->salience = $var;

        return $this;
    }

    /**
     * The aggregate sentiment expressed for this entity in the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 5;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SentimentData|null
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }

    public function hasSentiment()
    {
        return isset($this->sentiment);
    }

    public function clearSentiment()
    {
        unset($this->sentiment);
    }

    /**
     * The aggregate sentiment expressed for this entity in the conversation.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 5;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SentimentData $var
     * @return $this
     */
    public function setSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SentimentData::class);
        $this->sentiment = $var;

        return $this;
    }

}

