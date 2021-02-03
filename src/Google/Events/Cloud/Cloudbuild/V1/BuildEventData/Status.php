<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/cloudbuild/v1/data.proto

namespace Google\Events\Cloud\Cloudbuild\V1\BuildEventData;

use UnexpectedValueException;

/**
 * Possible status of a build or build step.
 *
 * Protobuf type <code>google.events.cloud.cloudbuild.v1.BuildEventData.Status</code>
 */
class Status
{
    /**
     * Status of the build is unknown.
     *
     * Generated from protobuf enum <code>STATUS_UNKNOWN = 0;</code>
     */
    const STATUS_UNKNOWN = 0;
    /**
     * Build or step is queued; work has not yet begun.
     *
     * Generated from protobuf enum <code>QUEUED = 1;</code>
     */
    const QUEUED = 1;
    /**
     * Build or step is being executed.
     *
     * Generated from protobuf enum <code>WORKING = 2;</code>
     */
    const WORKING = 2;
    /**
     * Build or step finished successfully.
     *
     * Generated from protobuf enum <code>SUCCESS = 3;</code>
     */
    const SUCCESS = 3;
    /**
     * Build or step failed to complete successfully.
     *
     * Generated from protobuf enum <code>FAILURE = 4;</code>
     */
    const FAILURE = 4;
    /**
     * Build or step failed due to an internal cause.
     *
     * Generated from protobuf enum <code>INTERNAL_ERROR = 5;</code>
     */
    const INTERNAL_ERROR = 5;
    /**
     * Build or step took longer than was allowed.
     *
     * Generated from protobuf enum <code>TIMEOUT = 6;</code>
     */
    const TIMEOUT = 6;
    /**
     * Build or step was canceled by a user.
     *
     * Generated from protobuf enum <code>CANCELLED = 7;</code>
     */
    const CANCELLED = 7;
    /**
     * Build was enqueued for longer than the value of `queue_ttl`.
     *
     * Generated from protobuf enum <code>EXPIRED = 9;</code>
     */
    const EXPIRED = 9;

    private static $valueToName = [
        self::STATUS_UNKNOWN => 'STATUS_UNKNOWN',
        self::QUEUED => 'QUEUED',
        self::WORKING => 'WORKING',
        self::SUCCESS => 'SUCCESS',
        self::FAILURE => 'FAILURE',
        self::INTERNAL_ERROR => 'INTERNAL_ERROR',
        self::TIMEOUT => 'TIMEOUT',
        self::CANCELLED => 'CANCELLED',
        self::EXPIRED => 'EXPIRED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Google\Events\Cloud\Cloudbuild\V1\BuildEventData_Status::class);

