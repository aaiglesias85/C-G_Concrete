<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document.proto

namespace Google\Cloud\DocumentAI\V1\Document\Page\Layout;

use UnexpectedValueException;

/**
 * Detected human reading orientation.
 *
 * Protobuf type <code>google.cloud.documentai.v1.Document.Page.Layout.Orientation</code>
 */
class Orientation
{
    /**
     * Unspecified orientation.
     *
     * Generated from protobuf enum <code>ORIENTATION_UNSPECIFIED = 0;</code>
     */
    const ORIENTATION_UNSPECIFIED = 0;
    /**
     * Orientation is aligned with page up.
     *
     * Generated from protobuf enum <code>PAGE_UP = 1;</code>
     */
    const PAGE_UP = 1;
    /**
     * Orientation is aligned with page right.
     * Turn the head 90 degrees clockwise from upright to read.
     *
     * Generated from protobuf enum <code>PAGE_RIGHT = 2;</code>
     */
    const PAGE_RIGHT = 2;
    /**
     * Orientation is aligned with page down.
     * Turn the head 180 degrees from upright to read.
     *
     * Generated from protobuf enum <code>PAGE_DOWN = 3;</code>
     */
    const PAGE_DOWN = 3;
    /**
     * Orientation is aligned with page left.
     * Turn the head 90 degrees counterclockwise from upright to read.
     *
     * Generated from protobuf enum <code>PAGE_LEFT = 4;</code>
     */
    const PAGE_LEFT = 4;

    private static $valueToName = [
        self::ORIENTATION_UNSPECIFIED => 'ORIENTATION_UNSPECIFIED',
        self::PAGE_UP => 'PAGE_UP',
        self::PAGE_RIGHT => 'PAGE_RIGHT',
        self::PAGE_DOWN => 'PAGE_DOWN',
        self::PAGE_LEFT => 'PAGE_LEFT',
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


