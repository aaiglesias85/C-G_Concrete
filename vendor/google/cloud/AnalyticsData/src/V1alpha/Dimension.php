<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Dimensions are attributes of your data. For example, the dimension city
 * indicates the city from which an event originates. Dimension values in report
 * responses are strings; for example, city could be "Paris" or "New York".
 * Requests are allowed up to 8 dimensions.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.Dimension</code>
 */
class Dimension extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like. For example if a `dimensionExpression` concatenates `country`
     * and `city`, you could call that dimension `countryAndCity`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DimensionExpression dimension_expression = 2;</code>
     */
    private $dimension_expression = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the dimension. See the [API
     *           Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     *           for the list of dimension names.
     *           If `dimensionExpression` is specified, `name` can be any string that you
     *           would like. For example if a `dimensionExpression` concatenates `country`
     *           and `city`, you could call that dimension `countryAndCity`.
     *           Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     *           `dimensionExpression`, and `pivots`.
     *     @type \Google\Analytics\Data\V1alpha\DimensionExpression $dimension_expression
     *           One dimension can be the result of an expression of multiple dimensions.
     *           For example, dimension "country, city": concatenate(country, ", ", city).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like. For example if a `dimensionExpression` concatenates `country`
     * and `city`, you could call that dimension `countryAndCity`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like. For example if a `dimensionExpression` concatenates `country`
     * and `city`, you could call that dimension `countryAndCity`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DimensionExpression dimension_expression = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\DimensionExpression|null
     */
    public function getDimensionExpression()
    {
        return isset($this->dimension_expression) ? $this->dimension_expression : null;
    }

    public function hasDimensionExpression()
    {
        return isset($this->dimension_expression);
    }

    public function clearDimensionExpression()
    {
        unset($this->dimension_expression);
    }

    /**
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DimensionExpression dimension_expression = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\DimensionExpression $var
     * @return $this
     */
    public function setDimensionExpression($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\DimensionExpression::class);
        $this->dimension_expression = $var;

        return $this;
    }

}

