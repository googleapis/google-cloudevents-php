<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/firebase/analytics/v1/data.proto

namespace Google\Events\Firebase\Analytics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Value for Event Params and UserProperty can be of type string or int or
 * float or double.
 *
 * Generated from protobuf message <code>google.events.firebase.analytics.v1.AnalyticsValue</code>
 */
class AnalyticsValue extends \Google\Protobuf\Internal\Message
{
    protected $param_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $string_value
     *     @type int|string $int_value
     *     @type float $float_value
     *     @type float $double_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Firebase\Analytics\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>float float_value = 3;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>float float_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getParamValue()
    {
        return $this->whichOneof("param_value");
    }

}
