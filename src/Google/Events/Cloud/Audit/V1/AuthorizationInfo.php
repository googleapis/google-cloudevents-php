<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/cloud/audit/v1/data.proto

namespace Google\Events\Cloud\Audit\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Authorization information for the operation.
 *
 * Generated from protobuf message <code>google.events.cloud.audit.v1.AuthorizationInfo</code>
 */
class AuthorizationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     */
    protected $resource = '';
    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     */
    protected $permission = '';
    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     */
    protected $granted = false;
    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLogData.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     */
    protected $resource_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource
     *           The resource being accessed, as a REST-style string. For example:
     *               bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     *     @type string $permission
     *           The required IAM permission.
     *     @type bool $granted
     *           Whether or not authorization for `resource` and `permission`
     *           was granted.
     *     @type \Google\Rpc\Context\AttributeContext\Resource $resource_attributes
     *           Resource attributes used in IAM condition evaluation. This field contains
     *           resource attributes like resource type and resource name.
     *           To get the whole view of the attributes used in IAM
     *           condition evaluation, the user must also look into
     *           `AuditLogData.request_metadata.request_attributes`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Cloud\Audit\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The resource being accessed, as a REST-style string. For example:
     *     bigquery.googleapis.com/projects/PROJECTID/datasets/DATASETID
     *
     * Generated from protobuf field <code>string resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource = $var;

        return $this;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * The required IAM permission.
     *
     * Generated from protobuf field <code>string permission = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @return bool
     */
    public function getGranted()
    {
        return $this->granted;
    }

    /**
     * Whether or not authorization for `resource` and `permission`
     * was granted.
     *
     * Generated from protobuf field <code>bool granted = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setGranted($var)
    {
        GPBUtil::checkBool($var);
        $this->granted = $var;

        return $this;
    }

    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLogData.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     * @return \Google\Rpc\Context\AttributeContext\Resource
     */
    public function getResourceAttributes()
    {
        return $this->resource_attributes;
    }

    /**
     * Resource attributes used in IAM condition evaluation. This field contains
     * resource attributes like resource type and resource name.
     * To get the whole view of the attributes used in IAM
     * condition evaluation, the user must also look into
     * `AuditLogData.request_metadata.request_attributes`.
     *
     * Generated from protobuf field <code>.google.rpc.context.AttributeContext.Resource resource_attributes = 5;</code>
     * @param \Google\Rpc\Context\AttributeContext\Resource $var
     * @return $this
     */
    public function setResourceAttributes($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Context\AttributeContext_Resource::class);
        $this->resource_attributes = $var;

        return $this;
    }

}

