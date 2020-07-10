<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/firestore/v1/data.proto

namespace Google\Events\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of field paths on a document.
 *
 * Generated from protobuf message <code>google.events.cloud.firestore.v1.DocumentMask</code>
 */
class DocumentMask extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of field paths in the mask.
     * See [Document.fields][google.cloud.firestore.v1.events.Document.fields]
     * for a field path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     */
    private $field_paths;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $field_paths
     *           The list of field paths in the mask.
     *           See [Document.fields][google.cloud.firestore.v1.events.Document.fields]
     *           for a field path syntax reference.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Firestore\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of field paths in the mask.
     * See [Document.fields][google.cloud.firestore.v1.events.Document.fields]
     * for a field path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFieldPaths()
    {
        return $this->field_paths;
    }

    /**
     * The list of field paths in the mask.
     * See [Document.fields][google.cloud.firestore.v1.events.Document.fields]
     * for a field path syntax reference.
     *
     * Generated from protobuf field <code>repeated string field_paths = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFieldPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->field_paths = $arr;

        return $this;
    }

}
