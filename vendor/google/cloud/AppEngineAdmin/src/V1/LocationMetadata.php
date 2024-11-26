<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/location.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for the given [google.cloud.location.Location][google.cloud.location.Location].
 *
 * Generated from protobuf message <code>google.appengine.v1.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * App Engine standard environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     */
    private $standard_environment_available = false;
    /**
     * App Engine flexible environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     */
    private $flexible_environment_available = false;
    /**
     * Output only. [Search API](https://cloud.google.com/appengine/docs/standard/python/search)
     * is available in the given location.
     *
     * Generated from protobuf field <code>bool search_api_available = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $search_api_available = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $standard_environment_available
     *           App Engine standard environment is available in the given location.
     *           &#64;OutputOnly
     *     @type bool $flexible_environment_available
     *           App Engine flexible environment is available in the given location.
     *           &#64;OutputOnly
     *     @type bool $search_api_available
     *           Output only. [Search API](https://cloud.google.com/appengine/docs/standard/python/search)
     *           is available in the given location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Location::initOnce();
        parent::__construct($data);
    }

    /**
     * App Engine standard environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     * @return bool
     */
    public function getStandardEnvironmentAvailable()
    {
        return $this->standard_environment_available;
    }

    /**
     * App Engine standard environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool standard_environment_available = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setStandardEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->standard_environment_available = $var;

        return $this;
    }

    /**
     * App Engine flexible environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     * @return bool
     */
    public function getFlexibleEnvironmentAvailable()
    {
        return $this->flexible_environment_available;
    }

    /**
     * App Engine flexible environment is available in the given location.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>bool flexible_environment_available = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setFlexibleEnvironmentAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->flexible_environment_available = $var;

        return $this;
    }

    /**
     * Output only. [Search API](https://cloud.google.com/appengine/docs/standard/python/search)
     * is available in the given location.
     *
     * Generated from protobuf field <code>bool search_api_available = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSearchApiAvailable()
    {
        return $this->search_api_available;
    }

    /**
     * Output only. [Search API](https://cloud.google.com/appengine/docs/standard/python/search)
     * is available in the given location.
     *
     * Generated from protobuf field <code>bool search_api_available = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSearchApiAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->search_api_available = $var;

        return $this;
    }

}

