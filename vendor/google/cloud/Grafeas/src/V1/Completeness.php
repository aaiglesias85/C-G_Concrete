<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_provenance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that the builder claims certain fields in this message to be
 * complete.
 *
 * Generated from protobuf message <code>grafeas.v1.Completeness</code>
 */
class Completeness extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, the builder claims that recipe.arguments is complete, meaning that
     * all external inputs are properly captured in the recipe.
     *
     * Generated from protobuf field <code>bool arguments = 1;</code>
     */
    private $arguments = false;
    /**
     * If true, the builder claims that recipe.environment is claimed to be
     * complete.
     *
     * Generated from protobuf field <code>bool environment = 2;</code>
     */
    private $environment = false;
    /**
     * If true, the builder claims that materials are complete, usually through
     * some controls to prevent network access. Sometimes called "hermetic".
     *
     * Generated from protobuf field <code>bool materials = 3;</code>
     */
    private $materials = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $arguments
     *           If true, the builder claims that recipe.arguments is complete, meaning that
     *           all external inputs are properly captured in the recipe.
     *     @type bool $environment
     *           If true, the builder claims that recipe.environment is claimed to be
     *           complete.
     *     @type bool $materials
     *           If true, the builder claims that materials are complete, usually through
     *           some controls to prevent network access. Sometimes called "hermetic".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoProvenance::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, the builder claims that recipe.arguments is complete, meaning that
     * all external inputs are properly captured in the recipe.
     *
     * Generated from protobuf field <code>bool arguments = 1;</code>
     * @return bool
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * If true, the builder claims that recipe.arguments is complete, meaning that
     * all external inputs are properly captured in the recipe.
     *
     * Generated from protobuf field <code>bool arguments = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setArguments($var)
    {
        GPBUtil::checkBool($var);
        $this->arguments = $var;

        return $this;
    }

    /**
     * If true, the builder claims that recipe.environment is claimed to be
     * complete.
     *
     * Generated from protobuf field <code>bool environment = 2;</code>
     * @return bool
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * If true, the builder claims that recipe.environment is claimed to be
     * complete.
     *
     * Generated from protobuf field <code>bool environment = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkBool($var);
        $this->environment = $var;

        return $this;
    }

    /**
     * If true, the builder claims that materials are complete, usually through
     * some controls to prevent network access. Sometimes called "hermetic".
     *
     * Generated from protobuf field <code>bool materials = 3;</code>
     * @return bool
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * If true, the builder claims that materials are complete, usually through
     * some controls to prevent network access. Sometimes called "hermetic".
     *
     * Generated from protobuf field <code>bool materials = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setMaterials($var)
    {
        GPBUtil::checkBool($var);
        $this->materials = $var;

        return $this;
    }

}

