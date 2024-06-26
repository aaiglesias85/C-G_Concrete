<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/dataexchange/v1beta1/dataexchange.proto

namespace Google\Cloud\BigQuery\DataExchange\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data exchange is a container that enables data sharing.
 * It contains a set of listings of the data sources along with descriptive
 * information of the data exchange.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.dataexchange.v1beta1.DataExchange</code>
 */
class DataExchange extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Human-readable display name of the data exchange. The display name must
     * contain only Unicode letters, numbers (0-9), underscores (_), dashes (-),
     * spaces ( ), and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Optional. Short description of the data exchange that can consist of sentences
     * or paragraphs. The description must not contain Unicode non-characters as
     * well as C0 and C1 control codes except tabs (HT), new lines (LF), carriage
     * returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. Email, URL or other reference of the primary point of contact of the data
     * exchange
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $primary_contact = '';
    /**
     * Optional. Documentation describing the data exchange.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $documentation = '';
    /**
     * Output only. Number of listings contained in the data exchange.
     *
     * Generated from protobuf field <code>int32 listing_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $listing_count = 0;
    /**
     * Optional. Base64 encoded image representing the data exchange. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $icon = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the data exchange.
     *           e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *     @type string $display_name
     *           Required. Human-readable display name of the data exchange. The display name must
     *           contain only Unicode letters, numbers (0-9), underscores (_), dashes (-),
     *           spaces ( ), and can't start or end with spaces.
     *           Default value is an empty string.
     *           Max length: 63 bytes.
     *     @type string $description
     *           Optional. Short description of the data exchange that can consist of sentences
     *           or paragraphs. The description must not contain Unicode non-characters as
     *           well as C0 and C1 control codes except tabs (HT), new lines (LF), carriage
     *           returns (CR), and page breaks (FF).
     *           Default value is an empty string.
     *           Max length: 2000 bytes.
     *     @type string $primary_contact
     *           Optional. Email, URL or other reference of the primary point of contact of the data
     *           exchange
     *           Max Length: 1000 bytes.
     *     @type string $documentation
     *           Optional. Documentation describing the data exchange.
     *     @type int $listing_count
     *           Output only. Number of listings contained in the data exchange.
     *     @type string $icon
     *           Optional. Base64 encoded image representing the data exchange. Max Size: 3.0MiB
     *           Expected image dimensions are 512x512 pixels, however the API only
     *           performs validation on size of the encoded data.
     *           Note: For byte fields, the contents of the field are base64-encoded (which
     *           increases the size of the data by 33-36%) when using JSON on the wire.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Dataexchange\V1Beta1\Dataexchange::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the data exchange.
     * e.g. `projects/myproject/locations/US/dataExchanges/123`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Human-readable display name of the data exchange. The display name must
     * contain only Unicode letters, numbers (0-9), underscores (_), dashes (-),
     * spaces ( ), and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name of the data exchange. The display name must
     * contain only Unicode letters, numbers (0-9), underscores (_), dashes (-),
     * spaces ( ), and can't start or end with spaces.
     * Default value is an empty string.
     * Max length: 63 bytes.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Short description of the data exchange that can consist of sentences
     * or paragraphs. The description must not contain Unicode non-characters as
     * well as C0 and C1 control codes except tabs (HT), new lines (LF), carriage
     * returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Short description of the data exchange that can consist of sentences
     * or paragraphs. The description must not contain Unicode non-characters as
     * well as C0 and C1 control codes except tabs (HT), new lines (LF), carriage
     * returns (CR), and page breaks (FF).
     * Default value is an empty string.
     * Max length: 2000 bytes.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Email, URL or other reference of the primary point of contact of the data
     * exchange
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPrimaryContact()
    {
        return $this->primary_contact;
    }

    /**
     * Optional. Email, URL or other reference of the primary point of contact of the data
     * exchange
     * Max Length: 1000 bytes.
     *
     * Generated from protobuf field <code>string primary_contact = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPrimaryContact($var)
    {
        GPBUtil::checkString($var, True);
        $this->primary_contact = $var;

        return $this;
    }

    /**
     * Optional. Documentation describing the data exchange.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Optional. Documentation describing the data exchange.
     *
     * Generated from protobuf field <code>string documentation = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentation($var)
    {
        GPBUtil::checkString($var, True);
        $this->documentation = $var;

        return $this;
    }

    /**
     * Output only. Number of listings contained in the data exchange.
     *
     * Generated from protobuf field <code>int32 listing_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getListingCount()
    {
        return $this->listing_count;
    }

    /**
     * Output only. Number of listings contained in the data exchange.
     *
     * Generated from protobuf field <code>int32 listing_count = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setListingCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->listing_count = $var;

        return $this;
    }

    /**
     * Optional. Base64 encoded image representing the data exchange. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Optional. Base64 encoded image representing the data exchange. Max Size: 3.0MiB
     * Expected image dimensions are 512x512 pixels, however the API only
     * performs validation on size of the encoded data.
     * Note: For byte fields, the contents of the field are base64-encoded (which
     * increases the size of the data by 33-36%) when using JSON on the wire.
     *
     * Generated from protobuf field <code>bytes icon = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, False);
        $this->icon = $var;

        return $this;
    }

}

