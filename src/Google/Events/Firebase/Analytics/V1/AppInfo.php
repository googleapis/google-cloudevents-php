<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/events/firebase/analytics/v1/data.proto

namespace Google\Events\Firebase\Analytics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message which contains App Information.
 *
 * Generated from protobuf message <code>google.events.firebase.analytics.v1.AppInfo</code>
 */
class AppInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The app's version name
     * Examples: "1.0", "4.3.1.1.213361", "2.3 (1824253)", "v1.8b22p6"
     *
     * Generated from protobuf field <code>string app_version = 1;</code>
     */
    protected $app_version = '';
    /**
     * Unique id for this instance of the app.
     * Example: "71683BF9FA3B4B0D9535A1F05188BAF3"
     *
     * Generated from protobuf field <code>string app_instance_id = 2;</code>
     */
    protected $app_instance_id = '';
    /**
     * The identifier of the store that installed the app.
     * Eg. "com.sec.android.app.samsungapps", "com.amazon.venezia",
     * "com.nokia.nstore"
     *
     * Generated from protobuf field <code>string app_store = 3;</code>
     */
    protected $app_store = '';
    /**
     * The app platform.
     * Eg "ANDROID", "IOS".
     *
     * Generated from protobuf field <code>string app_platform = 4;</code>
     */
    protected $app_platform = '';
    /**
     * Unique application identifier within an app store.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     */
    protected $app_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_version
     *           The app's version name
     *           Examples: "1.0", "4.3.1.1.213361", "2.3 (1824253)", "v1.8b22p6"
     *     @type string $app_instance_id
     *           Unique id for this instance of the app.
     *           Example: "71683BF9FA3B4B0D9535A1F05188BAF3"
     *     @type string $app_store
     *           The identifier of the store that installed the app.
     *           Eg. "com.sec.android.app.samsungapps", "com.amazon.venezia",
     *           "com.nokia.nstore"
     *     @type string $app_platform
     *           The app platform.
     *           Eg "ANDROID", "IOS".
     *     @type string $app_id
     *           Unique application identifier within an app store.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Events\Firebase\Analytics\V1\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The app's version name
     * Examples: "1.0", "4.3.1.1.213361", "2.3 (1824253)", "v1.8b22p6"
     *
     * Generated from protobuf field <code>string app_version = 1;</code>
     * @return string
     */
    public function getAppVersion()
    {
        return $this->app_version;
    }

    /**
     * The app's version name
     * Examples: "1.0", "4.3.1.1.213361", "2.3 (1824253)", "v1.8b22p6"
     *
     * Generated from protobuf field <code>string app_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAppVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_version = $var;

        return $this;
    }

    /**
     * Unique id for this instance of the app.
     * Example: "71683BF9FA3B4B0D9535A1F05188BAF3"
     *
     * Generated from protobuf field <code>string app_instance_id = 2;</code>
     * @return string
     */
    public function getAppInstanceId()
    {
        return $this->app_instance_id;
    }

    /**
     * Unique id for this instance of the app.
     * Example: "71683BF9FA3B4B0D9535A1F05188BAF3"
     *
     * Generated from protobuf field <code>string app_instance_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_instance_id = $var;

        return $this;
    }

    /**
     * The identifier of the store that installed the app.
     * Eg. "com.sec.android.app.samsungapps", "com.amazon.venezia",
     * "com.nokia.nstore"
     *
     * Generated from protobuf field <code>string app_store = 3;</code>
     * @return string
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The identifier of the store that installed the app.
     * Eg. "com.sec.android.app.samsungapps", "com.amazon.venezia",
     * "com.nokia.nstore"
     *
     * Generated from protobuf field <code>string app_store = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_store = $var;

        return $this;
    }

    /**
     * The app platform.
     * Eg "ANDROID", "IOS".
     *
     * Generated from protobuf field <code>string app_platform = 4;</code>
     * @return string
     */
    public function getAppPlatform()
    {
        return $this->app_platform;
    }

    /**
     * The app platform.
     * Eg "ANDROID", "IOS".
     *
     * Generated from protobuf field <code>string app_platform = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAppPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_platform = $var;

        return $this;
    }

    /**
     * Unique application identifier within an app store.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Unique application identifier within an app store.
     *
     * Generated from protobuf field <code>string app_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

}

