<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/folders.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The MoveFolder request message.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.MoveFolderRequest</code>
 */
class MoveFolderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Folder to move.
     * Must be of the form folders/{folder_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The resource name of the folder or organization which should be the
     * folder's new parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $destination_parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the Folder to move.
     *           Must be of the form folders/{folder_id}
     *     @type string $destination_parent
     *           Required. The resource name of the folder or organization which should be the
     *           folder's new parent.
     *           Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Folder to move.
     * Must be of the form folders/{folder_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the Folder to move.
     * Must be of the form folders/{folder_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The resource name of the folder or organization which should be the
     * folder's new parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDestinationParent()
    {
        return $this->destination_parent;
    }

    /**
     * Required. The resource name of the folder or organization which should be the
     * folder's new parent.
     * Must be of the form `folders/{folder_id}` or `organizations/{org_id}`.
     *
     * Generated from protobuf field <code>string destination_parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_parent = $var;

        return $this;
    }

}

