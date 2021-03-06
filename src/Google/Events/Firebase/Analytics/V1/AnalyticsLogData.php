<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/firebase/analytics/v1/data.proto

namespace Google\Events\Firebase\Analytics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data within Firebase Analytics log events.
 *
 * Generated from protobuf message <code>google.events.firebase.analytics.v1.AnalyticsLogData</code>
 */
class AnalyticsLogData extends \Google\Protobuf\Internal\Message
{
    /**
     * User related dimensions.
     *
     * Generated from protobuf field <code>.google.events.firebase.analytics.v1.UserDimensions user_dim = 1;</code>
     */
    protected $user_dim = null;
    /**
     * A repeated record of event related dimensions.
     *
     * Generated from protobuf field <code>repeated .google.events.firebase.analytics.v1.EventDimensions event_dim = 2;</code>
     */
    private $event_dim;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Events\Firebase\Analytics\V1\UserDimensions $user_dim
     *           User related dimensions.
     *     @type \Google\Events\Firebase\Analytics\V1\EventDimensions[]|\Google\Protobuf\Internal\RepeatedField $event_dim
     *           A repeated record of event related dimensions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Firebase\Analytics\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * User related dimensions.
     *
     * Generated from protobuf field <code>.google.events.firebase.analytics.v1.UserDimensions user_dim = 1;</code>
     * @return \Google\Events\Firebase\Analytics\V1\UserDimensions
     */
    public function getUserDim()
    {
        return $this->user_dim;
    }

    /**
     * User related dimensions.
     *
     * Generated from protobuf field <code>.google.events.firebase.analytics.v1.UserDimensions user_dim = 1;</code>
     * @param \Google\Events\Firebase\Analytics\V1\UserDimensions $var
     * @return $this
     */
    public function setUserDim($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Firebase\Analytics\V1\UserDimensions::class);
        $this->user_dim = $var;

        return $this;
    }

    /**
     * A repeated record of event related dimensions.
     *
     * Generated from protobuf field <code>repeated .google.events.firebase.analytics.v1.EventDimensions event_dim = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventDim()
    {
        return $this->event_dim;
    }

    /**
     * A repeated record of event related dimensions.
     *
     * Generated from protobuf field <code>repeated .google.events.firebase.analytics.v1.EventDimensions event_dim = 2;</code>
     * @param \Google\Events\Firebase\Analytics\V1\EventDimensions[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventDim($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Events\Firebase\Analytics\V1\EventDimensions::class);
        $this->event_dim = $arr;

        return $this;
    }

}

