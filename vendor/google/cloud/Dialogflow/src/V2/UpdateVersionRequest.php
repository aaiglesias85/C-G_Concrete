<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/version.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Versions.UpdateVersion][google.cloud.dialogflow.v2.Versions.UpdateVersion].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.UpdateVersionRequest</code>
 */
class UpdateVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The version to update.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $version = null;
    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2\Version $version
     *           Required. The version to update.
     *           Supported formats:
     *           - `projects/<Project ID>/agent/versions/<Version ID>`
     *           - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *             ID>`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The mask to control which fields get updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The version to update.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\Version|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Required. The version to update.
     * Supported formats:
     * - `projects/<Project ID>/agent/versions/<Version ID>`
     * - `projects/<Project ID>/locations/<Location ID>/agent/versions/<Version
     *   ID>`
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Version version = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\Version $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The mask to control which fields get updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

