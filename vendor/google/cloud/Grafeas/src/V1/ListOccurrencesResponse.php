<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/grafeas.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for listing occurrences.
 *
 * Generated from protobuf message <code>grafeas.v1.ListOccurrencesResponse</code>
 */
class ListOccurrencesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The occurrences requested.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Occurrence occurrences = 1;</code>
     */
    private $occurrences;
    /**
     * The next pagination token in the list response. It should be used as
     * `page_token` for the following request. An empty value means no more
     * results.
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
     *     @type \Grafeas\V1\Occurrence[]|\Google\Protobuf\Internal\RepeatedField $occurrences
     *           The occurrences requested.
     *     @type string $next_page_token
     *           The next pagination token in the list response. It should be used as
     *           `page_token` for the following request. An empty value means no more
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The occurrences requested.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Occurrence occurrences = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOccurrences()
    {
        return $this->occurrences;
    }

    /**
     * The occurrences requested.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.Occurrence occurrences = 1;</code>
     * @param \Grafeas\V1\Occurrence[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOccurrences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Occurrence::class);
        $this->occurrences = $arr;

        return $this;
    }

    /**
     * The next pagination token in the list response. It should be used as
     * `page_token` for the following request. An empty value means no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The next pagination token in the list response. It should be used as
     * `page_token` for the following request. An empty value means no more
     * results.
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

