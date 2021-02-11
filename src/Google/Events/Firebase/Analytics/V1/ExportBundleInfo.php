<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/firebase/analytics/v1/data.proto

namespace Google\Events\Firebase\Analytics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message containing information regarding the bundle in which these
 * events were uploaded.
 *
 * Generated from protobuf message <code>google.events.firebase.analytics.v1.ExportBundleInfo</code>
 */
class ExportBundleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Monotonically increasing index for each bundle set by SDK.
     *
     * Generated from protobuf field <code>int32 bundle_sequence_id = 1;</code>
     */
    protected $bundle_sequence_id = 0;
    /**
     * Timestamp offset between collection time and upload time.
     *
     * Generated from protobuf field <code>int64 server_timestamp_offset_micros = 2;</code>
     */
    protected $server_timestamp_offset_micros = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bundle_sequence_id
     *           Monotonically increasing index for each bundle set by SDK.
     *     @type int|string $server_timestamp_offset_micros
     *           Timestamp offset between collection time and upload time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Firebase\Analytics\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Monotonically increasing index for each bundle set by SDK.
     *
     * Generated from protobuf field <code>int32 bundle_sequence_id = 1;</code>
     * @return int
     */
    public function getBundleSequenceId()
    {
        return $this->bundle_sequence_id;
    }

    /**
     * Monotonically increasing index for each bundle set by SDK.
     *
     * Generated from protobuf field <code>int32 bundle_sequence_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBundleSequenceId($var)
    {
        GPBUtil::checkInt32($var);
        $this->bundle_sequence_id = $var;

        return $this;
    }

    /**
     * Timestamp offset between collection time and upload time.
     *
     * Generated from protobuf field <code>int64 server_timestamp_offset_micros = 2;</code>
     * @return int|string
     */
    public function getServerTimestampOffsetMicros()
    {
        return $this->server_timestamp_offset_micros;
    }

    /**
     * Timestamp offset between collection time and upload time.
     *
     * Generated from protobuf field <code>int64 server_timestamp_offset_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setServerTimestampOffsetMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->server_timestamp_offset_micros = $var;

        return $this;
    }

}
