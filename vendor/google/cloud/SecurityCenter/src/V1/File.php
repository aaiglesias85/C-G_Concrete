<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/file.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * File information about the related binary/library used by an executable, or
 * the script used by a script interpreter
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.File</code>
 */
class File extends \Google\Protobuf\Internal\Message
{
    /**
     * Absolute path of the file as a JSON encoded string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     */
    private $path = '';
    /**
     * Size of the file in bytes.
     *
     * Generated from protobuf field <code>int64 size = 2;</code>
     */
    private $size = 0;
    /**
     * SHA256 hash of the first hashed_size bytes of the file encoded as a
     * hex string.  If hashed_size == size, hash_sha256 represents the SHA256 hash
     * of the entire file.
     *
     * Generated from protobuf field <code>string sha256 = 3;</code>
     */
    private $sha256 = '';
    /**
     * The length in bytes of the file prefix that was hashed.  If
     * hashed_size == size, any hashes reported represent the entire
     * file.
     *
     * Generated from protobuf field <code>int64 hashed_size = 4;</code>
     */
    private $hashed_size = 0;
    /**
     * True when the hash covers only a prefix of the file.
     *
     * Generated from protobuf field <code>bool partially_hashed = 5;</code>
     */
    private $partially_hashed = false;
    /**
     * Prefix of the file contents as a JSON encoded string.
     * (Currently only populated for Malicious Script Executed findings.)
     *
     * Generated from protobuf field <code>string contents = 6;</code>
     */
    private $contents = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           Absolute path of the file as a JSON encoded string.
     *     @type int|string $size
     *           Size of the file in bytes.
     *     @type string $sha256
     *           SHA256 hash of the first hashed_size bytes of the file encoded as a
     *           hex string.  If hashed_size == size, hash_sha256 represents the SHA256 hash
     *           of the entire file.
     *     @type int|string $hashed_size
     *           The length in bytes of the file prefix that was hashed.  If
     *           hashed_size == size, any hashes reported represent the entire
     *           file.
     *     @type bool $partially_hashed
     *           True when the hash covers only a prefix of the file.
     *     @type string $contents
     *           Prefix of the file contents as a JSON encoded string.
     *           (Currently only populated for Malicious Script Executed findings.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\File::initOnce();
        parent::__construct($data);
    }

    /**
     * Absolute path of the file as a JSON encoded string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Absolute path of the file as a JSON encoded string.
     *
     * Generated from protobuf field <code>string path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Size of the file in bytes.
     *
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Size of the file in bytes.
     *
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * SHA256 hash of the first hashed_size bytes of the file encoded as a
     * hex string.  If hashed_size == size, hash_sha256 represents the SHA256 hash
     * of the entire file.
     *
     * Generated from protobuf field <code>string sha256 = 3;</code>
     * @return string
     */
    public function getSha256()
    {
        return $this->sha256;
    }

    /**
     * SHA256 hash of the first hashed_size bytes of the file encoded as a
     * hex string.  If hashed_size == size, hash_sha256 represents the SHA256 hash
     * of the entire file.
     *
     * Generated from protobuf field <code>string sha256 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSha256($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha256 = $var;

        return $this;
    }

    /**
     * The length in bytes of the file prefix that was hashed.  If
     * hashed_size == size, any hashes reported represent the entire
     * file.
     *
     * Generated from protobuf field <code>int64 hashed_size = 4;</code>
     * @return int|string
     */
    public function getHashedSize()
    {
        return $this->hashed_size;
    }

    /**
     * The length in bytes of the file prefix that was hashed.  If
     * hashed_size == size, any hashes reported represent the entire
     * file.
     *
     * Generated from protobuf field <code>int64 hashed_size = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setHashedSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->hashed_size = $var;

        return $this;
    }

    /**
     * True when the hash covers only a prefix of the file.
     *
     * Generated from protobuf field <code>bool partially_hashed = 5;</code>
     * @return bool
     */
    public function getPartiallyHashed()
    {
        return $this->partially_hashed;
    }

    /**
     * True when the hash covers only a prefix of the file.
     *
     * Generated from protobuf field <code>bool partially_hashed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setPartiallyHashed($var)
    {
        GPBUtil::checkBool($var);
        $this->partially_hashed = $var;

        return $this;
    }

    /**
     * Prefix of the file contents as a JSON encoded string.
     * (Currently only populated for Malicious Script Executed findings.)
     *
     * Generated from protobuf field <code>string contents = 6;</code>
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Prefix of the file contents as a JSON encoded string.
     * (Currently only populated for Malicious Script Executed findings.)
     *
     * Generated from protobuf field <code>string contents = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setContents($var)
    {
        GPBUtil::checkString($var, True);
        $this->contents = $var;

        return $this;
    }

}

