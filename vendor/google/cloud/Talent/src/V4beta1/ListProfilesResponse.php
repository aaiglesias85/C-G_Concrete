<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The List profiles response object.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ListProfilesResponse</code>
 */
class ListProfilesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Profiles for the specific tenant.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Profile profiles = 1;</code>
     */
    private $profiles;
    /**
     * A token to retrieve the next page of results. This is empty if there are no
     * more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Talent\V4beta1\Profile[]|\Google\Protobuf\Internal\RepeatedField $profiles
     *           Profiles for the specific tenant.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results. This is empty if there are no
     *           more results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\ProfileService::initOnce();
        parent::__construct($data);
    }

    /**
     * Profiles for the specific tenant.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Profile profiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Profiles for the specific tenant.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Profile profiles = 1;</code>
     * @param \Google\Cloud\Talent\V4beta1\Profile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4beta1\Profile::class);
        $this->profiles = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results. This is empty if there are no
     * more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results. This is empty if there are no
     * more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

