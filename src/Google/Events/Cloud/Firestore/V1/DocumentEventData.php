<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/firestore/v1/data.proto

namespace Google\Events\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data within all Firestore document events.
 *
 * Generated from protobuf message <code>google.events.cloud.firestore.v1.DocumentEventData</code>
 */
class DocumentEventData extends \Google\Protobuf\Internal\Message
{
    /**
     * A Document object containing a post-operation document snapshot.
     * This is not populated for delete events. (TODO: check this!)
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document value = 1;</code>
     */
    protected $value = null;
    /**
     * A Document object containing a pre-operation document snapshot.
     * This is only populated for update and delete events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document old_value = 2;</code>
     */
    protected $old_value = null;
    /**
     * A DocumentMask object that lists changed fields.
     * This is only populated for update events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.DocumentMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Events\Cloud\Firestore\V1\Document $value
     *           A Document object containing a post-operation document snapshot.
     *           This is not populated for delete events. (TODO: check this!)
     *     @type \Google\Events\Cloud\Firestore\V1\Document $old_value
     *           A Document object containing a pre-operation document snapshot.
     *           This is only populated for update and delete events.
     *     @type \Google\Events\Cloud\Firestore\V1\DocumentMask $update_mask
     *           A DocumentMask object that lists changed fields.
     *           This is only populated for update events.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Firestore\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * A Document object containing a post-operation document snapshot.
     * This is not populated for delete events. (TODO: check this!)
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document value = 1;</code>
     * @return \Google\Events\Cloud\Firestore\V1\Document
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * A Document object containing a post-operation document snapshot.
     * This is not populated for delete events. (TODO: check this!)
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document value = 1;</code>
     * @param \Google\Events\Cloud\Firestore\V1\Document $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Firestore\V1\Document::class);
        $this->value = $var;

        return $this;
    }

    /**
     * A Document object containing a pre-operation document snapshot.
     * This is only populated for update and delete events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document old_value = 2;</code>
     * @return \Google\Events\Cloud\Firestore\V1\Document
     */
    public function getOldValue()
    {
        return $this->old_value;
    }

    /**
     * A Document object containing a pre-operation document snapshot.
     * This is only populated for update and delete events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.Document old_value = 2;</code>
     * @param \Google\Events\Cloud\Firestore\V1\Document $var
     * @return $this
     */
    public function setOldValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Firestore\V1\Document::class);
        $this->old_value = $var;

        return $this;
    }

    /**
     * A DocumentMask object that lists changed fields.
     * This is only populated for update events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.DocumentMask update_mask = 3;</code>
     * @return \Google\Events\Cloud\Firestore\V1\DocumentMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * A DocumentMask object that lists changed fields.
     * This is only populated for update events.
     *
     * Generated from protobuf field <code>.google.events.cloud.firestore.v1.DocumentMask update_mask = 3;</code>
     * @param \Google\Events\Cloud\Firestore\V1\DocumentMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Firestore\V1\DocumentMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

