<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/pubsub/v1/data.proto

namespace Google\Events\Cloud\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data received in an event when a message is published to a topic.
 *
 * Generated from protobuf message <code>google.events.cloud.pubsub.v1.MessagePublishedData</code>
 */
class MessagePublishedData extends \Google\Protobuf\Internal\Message
{
    /**
     * The message that was published.
     *
     * Generated from protobuf field <code>.google.events.cloud.pubsub.v1.PubsubMessage message = 1;</code>
     */
    protected $message = null;
    /**
     * The resource name of the subscription for which this event was
     * generated. The format of the value is
     * `projects/{project-id}/subscriptions/{subscription-id}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     */
    protected $subscription = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Events\Cloud\Pubsub\V1\PubsubMessage $message
     *           The message that was published.
     *     @type string $subscription
     *           The resource name of the subscription for which this event was
     *           generated. The format of the value is
     *           `projects/{project-id}/subscriptions/{subscription-id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Pubsub\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The message that was published.
     *
     * Generated from protobuf field <code>.google.events.cloud.pubsub.v1.PubsubMessage message = 1;</code>
     * @return \Google\Events\Cloud\Pubsub\V1\PubsubMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The message that was published.
     *
     * Generated from protobuf field <code>.google.events.cloud.pubsub.v1.PubsubMessage message = 1;</code>
     * @param \Google\Events\Cloud\Pubsub\V1\PubsubMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \Google\Events\Cloud\Pubsub\V1\PubsubMessage::class);
        $this->message = $var;

        return $this;
    }

    /**
     * The resource name of the subscription for which this event was
     * generated. The format of the value is
     * `projects/{project-id}/subscriptions/{subscription-id}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The resource name of the subscription for which this event was
     * generated. The format of the value is
     * `projects/{project-id}/subscriptions/{subscription-id}`.
     *
     * Generated from protobuf field <code>string subscription = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

}
