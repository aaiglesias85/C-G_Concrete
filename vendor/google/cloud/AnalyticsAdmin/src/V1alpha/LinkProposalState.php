<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use UnexpectedValueException;

/**
 * The state of a link proposal resource.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.LinkProposalState</code>
 */
class LinkProposalState
{
    /**
     * Unspecified state
     *
     * Generated from protobuf enum <code>LINK_PROPOSAL_STATE_UNSPECIFIED = 0;</code>
     */
    const LINK_PROPOSAL_STATE_UNSPECIFIED = 0;
    /**
     * This proposal is awaiting review from a Google Analytics user. This
     * proposal will automatically expire after some time.
     *
     * Generated from protobuf enum <code>AWAITING_REVIEW_FROM_GOOGLE_ANALYTICS = 1;</code>
     */
    const AWAITING_REVIEW_FROM_GOOGLE_ANALYTICS = 1;
    /**
     * This proposal is awaiting review from a user of a linked product. This
     * proposal will automatically expire after some time.
     *
     * Generated from protobuf enum <code>AWAITING_REVIEW_FROM_LINKED_PRODUCT = 2;</code>
     */
    const AWAITING_REVIEW_FROM_LINKED_PRODUCT = 2;
    /**
     * This proposal has been withdrawn by an admin on the initiating product.
     * This proposal will be automatically deleted after some time.
     *
     * Generated from protobuf enum <code>WITHDRAWN = 3;</code>
     */
    const WITHDRAWN = 3;
    /**
     * This proposal has been declined by an admin on the receiving product. This
     * proposal will be automatically deleted after some time.
     *
     * Generated from protobuf enum <code>DECLINED = 4;</code>
     */
    const DECLINED = 4;
    /**
     * This proposal expired due to lack of response from an admin on the
     * receiving product. This proposal will be automatically deleted after some
     * time.
     *
     * Generated from protobuf enum <code>EXPIRED = 5;</code>
     */
    const EXPIRED = 5;
    /**
     * This proposal has become obsolete because a link was directly created to
     * the same external product resource that this proposal specifies. This
     * proposal will be automatically deleted after some time.
     *
     * Generated from protobuf enum <code>OBSOLETE = 6;</code>
     */
    const OBSOLETE = 6;

    private static $valueToName = [
        self::LINK_PROPOSAL_STATE_UNSPECIFIED => 'LINK_PROPOSAL_STATE_UNSPECIFIED',
        self::AWAITING_REVIEW_FROM_GOOGLE_ANALYTICS => 'AWAITING_REVIEW_FROM_GOOGLE_ANALYTICS',
        self::AWAITING_REVIEW_FROM_LINKED_PRODUCT => 'AWAITING_REVIEW_FROM_LINKED_PRODUCT',
        self::WITHDRAWN => 'WITHDRAWN',
        self::DECLINED => 'DECLINED',
        self::EXPIRED => 'EXPIRED',
        self::OBSOLETE => 'OBSOLETE',
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

