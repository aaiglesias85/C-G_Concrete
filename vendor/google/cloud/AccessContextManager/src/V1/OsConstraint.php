<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_level.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A restriction on the OS type and version of devices making requests.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.OsConstraint</code>
 */
class OsConstraint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The allowed OS type.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.type.OsType os_type = 1;</code>
     */
    private $os_type = 0;
    /**
     * The minimum allowed OS version. If not set, any version of this OS
     * satisfies the constraint. Format: `"major.minor.patch"`.
     * Examples: `"10.5.301"`, `"9.2.1"`.
     *
     * Generated from protobuf field <code>string minimum_version = 2;</code>
     */
    private $minimum_version = '';
    /**
     * Only allows requests from devices with a verified Chrome OS.
     * Verifications includes requirements that the device is enterprise-managed,
     * conformant to domain policies, and the caller has permission to call
     * the API targeted by the request.
     *
     * Generated from protobuf field <code>bool require_verified_chrome_os = 3;</code>
     */
    private $require_verified_chrome_os = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $os_type
     *           Required. The allowed OS type.
     *     @type string $minimum_version
     *           The minimum allowed OS version. If not set, any version of this OS
     *           satisfies the constraint. Format: `"major.minor.patch"`.
     *           Examples: `"10.5.301"`, `"9.2.1"`.
     *     @type bool $require_verified_chrome_os
     *           Only allows requests from devices with a verified Chrome OS.
     *           Verifications includes requirements that the device is enterprise-managed,
     *           conformant to domain policies, and the caller has permission to call
     *           the API targeted by the request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessLevel::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The allowed OS type.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.type.OsType os_type = 1;</code>
     * @return int
     */
    public function getOsType()
    {
        return $this->os_type;
    }

    /**
     * Required. The allowed OS type.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.type.OsType os_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOsType($var)
    {
        GPBUtil::checkEnum($var, \Google\Identity\AccessContextManager\Type\OsType::class);
        $this->os_type = $var;

        return $this;
    }

    /**
     * The minimum allowed OS version. If not set, any version of this OS
     * satisfies the constraint. Format: `"major.minor.patch"`.
     * Examples: `"10.5.301"`, `"9.2.1"`.
     *
     * Generated from protobuf field <code>string minimum_version = 2;</code>
     * @return string
     */
    public function getMinimumVersion()
    {
        return $this->minimum_version;
    }

    /**
     * The minimum allowed OS version. If not set, any version of this OS
     * satisfies the constraint. Format: `"major.minor.patch"`.
     * Examples: `"10.5.301"`, `"9.2.1"`.
     *
     * Generated from protobuf field <code>string minimum_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMinimumVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->minimum_version = $var;

        return $this;
    }

    /**
     * Only allows requests from devices with a verified Chrome OS.
     * Verifications includes requirements that the device is enterprise-managed,
     * conformant to domain policies, and the caller has permission to call
     * the API targeted by the request.
     *
     * Generated from protobuf field <code>bool require_verified_chrome_os = 3;</code>
     * @return bool
     */
    public function getRequireVerifiedChromeOs()
    {
        return $this->require_verified_chrome_os;
    }

    /**
     * Only allows requests from devices with a verified Chrome OS.
     * Verifications includes requirements that the device is enterprise-managed,
     * conformant to domain policies, and the caller has permission to call
     * the API targeted by the request.
     *
     * Generated from protobuf field <code>bool require_verified_chrome_os = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireVerifiedChromeOs($var)
    {
        GPBUtil::checkBool($var);
        $this->require_verified_chrome_os = $var;

        return $this;
    }

}

