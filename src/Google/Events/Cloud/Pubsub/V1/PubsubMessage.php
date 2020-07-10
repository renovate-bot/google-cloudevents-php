<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/pubsub/v1/data.proto

namespace Google\Events\Cloud\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message published to a topic.
 *
 * Generated from protobuf message <code>google.events.cloud.pubsub.v1.PubsubMessage</code>
 */
class PubsubMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * The binary data in the message.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     */
    protected $data = '';
    /**
     * Attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     */
    private $attributes;
    /**
     * ID of this message, assigned by the server when the message is published.
     * Guaranteed to be unique within the topic.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     */
    protected $message_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           The binary data in the message.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Attributes for this message.
     *     @type string $message_id
     *           ID of this message, assigned by the server when the message is published.
     *           Guaranteed to be unique within the topic.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Pubsub\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The binary data in the message.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The binary data in the message.
     *
     * Generated from protobuf field <code>bytes data = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Attributes for this message.
     *
     * Generated from protobuf field <code>map<string, string> attributes = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * ID of this message, assigned by the server when the message is published.
     * Guaranteed to be unique within the topic.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * ID of this message, assigned by the server when the message is published.
     * Guaranteed to be unique within the topic.
     *
     * Generated from protobuf field <code>string message_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

}

