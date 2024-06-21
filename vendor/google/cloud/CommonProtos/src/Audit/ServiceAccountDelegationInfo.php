<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/audit/audit_log.proto

namespace Google\Cloud\Audit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identity delegation history of an authenticated service account.
 *
 * Generated from protobuf message <code>google.cloud.audit.ServiceAccountDelegationInfo</code>
 */
class ServiceAccountDelegationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A string representing the principal_subject associated with the identity.
     * For most identities, the format will be
     * `principal://iam.googleapis.com/{identity pool name}/subject/{subject)`
     * except for some GKE identities (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD)
     * that are still in the legacy format `serviceAccount:{identity pool
     * name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 3;</code>
     */
    protected $principal_subject = '';
    protected $Authority;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $principal_subject
     *           A string representing the principal_subject associated with the identity.
     *           For most identities, the format will be
     *           `principal://iam.googleapis.com/{identity pool name}/subject/{subject)`
     *           except for some GKE identities (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD)
     *           that are still in the legacy format `serviceAccount:{identity pool
     *           name}[{subject}]`
     *     @type \Google\Cloud\Audit\ServiceAccountDelegationInfo\FirstPartyPrincipal $first_party_principal
     *           First party (Google) identity as the real authority.
     *     @type \Google\Cloud\Audit\ServiceAccountDelegationInfo\ThirdPartyPrincipal $third_party_principal
     *           Third party identity as the real authority.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        parent::__construct($data);
    }

    /**
     * A string representing the principal_subject associated with the identity.
     * For most identities, the format will be
     * `principal://iam.googleapis.com/{identity pool name}/subject/{subject)`
     * except for some GKE identities (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD)
     * that are still in the legacy format `serviceAccount:{identity pool
     * name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 3;</code>
     * @return string
     */
    public function getPrincipalSubject()
    {
        return $this->principal_subject;
    }

    /**
     * A string representing the principal_subject associated with the identity.
     * For most identities, the format will be
     * `principal://iam.googleapis.com/{identity pool name}/subject/{subject)`
     * except for some GKE identities (GKE_WORKLOAD, FREEFORM, GKE_HUB_WORKLOAD)
     * that are still in the legacy format `serviceAccount:{identity pool
     * name}[{subject}]`
     *
     * Generated from protobuf field <code>string principal_subject = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPrincipalSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->principal_subject = $var;

        return $this;
    }

    /**
     * First party (Google) identity as the real authority.
     *
     * Generated from protobuf field <code>.google.cloud.audit.ServiceAccountDelegationInfo.FirstPartyPrincipal first_party_principal = 1;</code>
     * @return \Google\Cloud\Audit\ServiceAccountDelegationInfo\FirstPartyPrincipal|null
     */
    public function getFirstPartyPrincipal()
    {
        return $this->readOneof(1);
    }

    public function hasFirstPartyPrincipal()
    {
        return $this->hasOneof(1);
    }

    /**
     * First party (Google) identity as the real authority.
     *
     * Generated from protobuf field <code>.google.cloud.audit.ServiceAccountDelegationInfo.FirstPartyPrincipal first_party_principal = 1;</code>
     * @param \Google\Cloud\Audit\ServiceAccountDelegationInfo\FirstPartyPrincipal $var
     * @return $this
     */
    public function setFirstPartyPrincipal($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\ServiceAccountDelegationInfo\FirstPartyPrincipal::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Third party identity as the real authority.
     *
     * Generated from protobuf field <code>.google.cloud.audit.ServiceAccountDelegationInfo.ThirdPartyPrincipal third_party_principal = 2;</code>
     * @return \Google\Cloud\Audit\ServiceAccountDelegationInfo\ThirdPartyPrincipal|null
     */
    public function getThirdPartyPrincipal()
    {
        return $this->readOneof(2);
    }

    public function hasThirdPartyPrincipal()
    {
        return $this->hasOneof(2);
    }

    /**
     * Third party identity as the real authority.
     *
     * Generated from protobuf field <code>.google.cloud.audit.ServiceAccountDelegationInfo.ThirdPartyPrincipal third_party_principal = 2;</code>
     * @param \Google\Cloud\Audit\ServiceAccountDelegationInfo\ThirdPartyPrincipal $var
     * @return $this
     */
    public function setThirdPartyPrincipal($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Audit\ServiceAccountDelegationInfo\ThirdPartyPrincipal::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthority()
    {
        return $this->whichOneof("Authority");
    }

}

