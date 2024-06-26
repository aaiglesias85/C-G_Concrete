<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/gcs.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Google Cloud Storage location for the inputs.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.GcsSources</code>
 */
class GcsSources extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Google Cloud Storage URIs for the inputs. A URI is of the form:
     *   gs://bucket/object-prefix-or-name
     * Whether a prefix or name is used depends on the use case.
     *
     * Generated from protobuf field <code>repeated string uris = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $uris;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $uris
     *           Required. Google Cloud Storage URIs for the inputs. A URI is of the form:
     *             gs://bucket/object-prefix-or-name
     *           Whether a prefix or name is used depends on the use case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Gcs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Google Cloud Storage URIs for the inputs. A URI is of the form:
     *   gs://bucket/object-prefix-or-name
     * Whether a prefix or name is used depends on the use case.
     *
     * Generated from protobuf field <code>repeated string uris = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUris()
    {
        return $this->uris;
    }

    /**
     * Required. Google Cloud Storage URIs for the inputs. A URI is of the form:
     *   gs://bucket/object-prefix-or-name
     * Whether a prefix or name is used depends on the use case.
     *
     * Generated from protobuf field <code>repeated string uris = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uris = $arr;

        return $this;
    }

}

