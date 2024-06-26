<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/google/analytics/data/v1alpha/analytics_data_api.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Analytics\Data\V1alpha\Gapic;

use Google\Analytics\Data\V1alpha\BatchRunPivotReportsRequest;
use Google\Analytics\Data\V1alpha\BatchRunPivotReportsResponse;
use Google\Analytics\Data\V1alpha\BatchRunReportsRequest;

use Google\Analytics\Data\V1alpha\BatchRunReportsResponse;
use Google\Analytics\Data\V1alpha\CohortSpec;
use Google\Analytics\Data\V1alpha\DateRange;
use Google\Analytics\Data\V1alpha\Dimension;
use Google\Analytics\Data\V1alpha\Entity;
use Google\Analytics\Data\V1alpha\FilterExpression;
use Google\Analytics\Data\V1alpha\GetMetadataRequest;
use Google\Analytics\Data\V1alpha\Metadata;
use Google\Analytics\Data\V1alpha\Metric;
use Google\Analytics\Data\V1alpha\MetricAggregation;
use Google\Analytics\Data\V1alpha\OrderBy;
use Google\Analytics\Data\V1alpha\Pivot;
use Google\Analytics\Data\V1alpha\RunPivotReportRequest;
use Google\Analytics\Data\V1alpha\RunPivotReportResponse;
use Google\Analytics\Data\V1alpha\RunRealtimeReportRequest;
use Google\Analytics\Data\V1alpha\RunRealtimeReportResponse;
use Google\Analytics\Data\V1alpha\RunReportRequest;
use Google\Analytics\Data\V1alpha\RunReportResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;

/**
 * Service Description: Google Analytics reporting data service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
 * try {
 *     $response = $alphaAnalyticsDataClient->batchRunPivotReports();
 * } finally {
 *     $alphaAnalyticsDataClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @experimental
 */
class AlphaAnalyticsDataGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.analytics.data.v1alpha.AlphaAnalyticsData';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'analyticsdata.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/analytics',
        'https://www.googleapis.com/auth/analytics.readonly',
    ];

    private static $metadataNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/alpha_analytics_data_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/alpha_analytics_data_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/alpha_analytics_data_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/alpha_analytics_data_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getMetadataNameTemplate()
    {
        if (self::$metadataNameTemplate == null) {
            self::$metadataNameTemplate = new PathTemplate(
                'properties/{property}/metadata'
            );
        }

        return self::$metadataNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'metadata' => self::getMetadataNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a metadata
     * resource.
     *
     * @param string $property
     *
     * @return string The formatted metadata resource.
     *
     * @experimental
     */
    public static function metadataName($property)
    {
        return self::getMetadataNameTemplate()->render([
            'property' => $property,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - metadata: properties/{property}/metadata
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'analyticsdata.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Returns multiple pivot reports in a batch. All reports must be for the same
     * Entity.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $response = $alphaAnalyticsDataClient->batchRunPivotReports();
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type Entity $entity
     *           A property whose events are tracked. This entity must be specified for the
     *           batch. The entity within RunPivotReportRequest may either be unspecified or
     *           consistent with this entity.
     *     @type RunPivotReportRequest[] $requests
     *           Individual requests. Each request has a separate pivot report response.
     *           Each batch request is allowed up to 5 requests.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\BatchRunPivotReportsResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function batchRunPivotReports(array $optionalArgs = [])
    {
        $request = new BatchRunPivotReportsRequest();
        if (isset($optionalArgs['entity'])) {
            $request->setEntity($optionalArgs['entity']);
        }

        if (isset($optionalArgs['requests'])) {
            $request->setRequests($optionalArgs['requests']);
        }

        return $this->startCall(
            'BatchRunPivotReports',
            BatchRunPivotReportsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns multiple reports in a batch. All reports must be for the same
     * Entity.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $response = $alphaAnalyticsDataClient->batchRunReports();
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type Entity $entity
     *           A property whose events are tracked. This entity must be specified for the
     *           batch. The entity within RunReportRequest may either be unspecified or
     *           consistent with this entity.
     *     @type RunReportRequest[] $requests
     *           Individual requests. Each request has a separate report response. Each
     *           batch request is allowed up to 5 requests.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\BatchRunReportsResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function batchRunReports(array $optionalArgs = [])
    {
        $request = new BatchRunReportsRequest();
        if (isset($optionalArgs['entity'])) {
            $request->setEntity($optionalArgs['entity']);
        }

        if (isset($optionalArgs['requests'])) {
            $request->setRequests($optionalArgs['requests']);
        }

        return $this->startCall(
            'BatchRunReports',
            BatchRunReportsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns metadata for dimensions and metrics available in reporting methods.
     * Used to explore the dimensions and metrics. In this method, a Google
     * Analytics GA4 Property Identifier is specified in the request, and
     * the metadata response includes Custom dimensions and metrics as well as
     * Universal metadata.
     *
     * For example if a custom metric with parameter name `levels_unlocked` is
     * registered to a property, the Metadata response will contain
     * `customEvent:levels_unlocked`. Universal metadata are dimensions and
     * metrics applicable to any property such as `country` and `totalUsers`.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $formattedName = $alphaAnalyticsDataClient->metadataName('[PROPERTY]');
     *     $response = $alphaAnalyticsDataClient->getMetadata($formattedName);
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the metadata to retrieve. This name field is
     *                             specified in the URL path and not URL parameters. Property is a numeric
     *                             Google Analytics GA4 Property identifier. To learn more, see [where to find
     *                             your Property
     *                             ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *
     *                             Example: properties/1234/metadata
     *
     *                             Set the Property ID to 0 for dimensions and metrics common to all
     *                             properties. In this special mode, this method will not return custom
     *                             dimensions and metrics.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\Metadata
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getMetadata($name, array $optionalArgs = [])
    {
        $request = new GetMetadataRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetMetadata',
            Metadata::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns a customized pivot report of your Google Analytics event data.
     * Pivot reports are more advanced and expressive formats than regular
     * reports. In a pivot report, dimensions are only visible if they are
     * included in a pivot. Multiple pivots can be specified to further dissect
     * your data.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $response = $alphaAnalyticsDataClient->runPivotReport();
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type Entity $entity
     *           A property whose events are tracked. Within a batch request, this entity
     *           should either be unspecified or consistent with the batch-level entity.
     *     @type Dimension[] $dimensions
     *           The dimensions requested. All defined dimensions must be used by one of the
     *           following: dimension_expression, dimension_filter, pivots, order_bys.
     *     @type Metric[] $metrics
     *           The metrics requested, at least one metric needs to be specified. All
     *           defined metrics must be used by one of the following: metric_expression,
     *           metric_filter, order_bys.
     *     @type FilterExpression $dimensionFilter
     *           The filter clause of dimensions. Dimensions must be requested to be used in
     *           this filter. Metrics cannot be used in this filter.
     *     @type FilterExpression $metricFilter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Metrics must be requested to be used in this filter.
     *           Dimensions cannot be used in this filter.
     *     @type Pivot[] $pivots
     *           Describes the visual format of the report's dimensions in columns or rows.
     *           The union of the fieldNames (dimension names) in all pivots must be a
     *           subset of dimension names defined in Dimensions. No two pivots can share a
     *           dimension. A dimension is only visible if it appears in a pivot.
     *     @type DateRange[] $dateRanges
     *           The date range to retrieve event data for the report. If multiple date
     *           ranges are specified, event data from each date range is used in the
     *           report. A special dimension with field name "dateRange" can be included in
     *           a Pivot's field names; if included, the report compares between date
     *           ranges. In a cohort request, this `dateRanges` must be unspecified.
     *     @type string $currencyCode
     *           A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     *           If the field is empty, the report uses the entity's default currency.
     *     @type CohortSpec $cohortSpec
     *           Cohort group associated with this request. If there is a cohort group
     *           in the request the 'cohort' dimension must be present.
     *     @type bool $keepEmptyRows
     *           If false or unspecified, each row with all metrics equal to 0 will not be
     *           returned. If true, these rows will be returned if they are not separately
     *           removed by a filter.
     *     @type bool $returnPropertyQuota
     *           Toggles whether to return the current state of this Analytics Property's
     *           quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\RunPivotReportResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function runPivotReport(array $optionalArgs = [])
    {
        $request = new RunPivotReportRequest();
        if (isset($optionalArgs['entity'])) {
            $request->setEntity($optionalArgs['entity']);
        }

        if (isset($optionalArgs['dimensions'])) {
            $request->setDimensions($optionalArgs['dimensions']);
        }

        if (isset($optionalArgs['metrics'])) {
            $request->setMetrics($optionalArgs['metrics']);
        }

        if (isset($optionalArgs['dimensionFilter'])) {
            $request->setDimensionFilter($optionalArgs['dimensionFilter']);
        }

        if (isset($optionalArgs['metricFilter'])) {
            $request->setMetricFilter($optionalArgs['metricFilter']);
        }

        if (isset($optionalArgs['pivots'])) {
            $request->setPivots($optionalArgs['pivots']);
        }

        if (isset($optionalArgs['dateRanges'])) {
            $request->setDateRanges($optionalArgs['dateRanges']);
        }

        if (isset($optionalArgs['currencyCode'])) {
            $request->setCurrencyCode($optionalArgs['currencyCode']);
        }

        if (isset($optionalArgs['cohortSpec'])) {
            $request->setCohortSpec($optionalArgs['cohortSpec']);
        }

        if (isset($optionalArgs['keepEmptyRows'])) {
            $request->setKeepEmptyRows($optionalArgs['keepEmptyRows']);
        }

        if (isset($optionalArgs['returnPropertyQuota'])) {
            $request->setReturnPropertyQuota(
                $optionalArgs['returnPropertyQuota']
            );
        }

        return $this->startCall(
            'RunPivotReport',
            RunPivotReportResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * The Google Analytics Realtime API returns a customized report of realtime
     * event data for your property. These reports show events and usage from the
     * last 30 minutes.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $response = $alphaAnalyticsDataClient->runRealtimeReport();
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $property
     *           A Google Analytics GA4 property identifier whose events are tracked.
     *           Specified in the URL path and not the body. To learn more, see [where to
     *           find your Property
     *           ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *
     *           Example: properties/1234
     *     @type Dimension[] $dimensions
     *           The dimensions requested and displayed.
     *     @type Metric[] $metrics
     *           The metrics requested and displayed.
     *     @type int $limit
     *           The number of rows to return. If unspecified, 10 rows are returned. If
     *           -1, all rows are returned.
     *     @type FilterExpression $dimensionFilter
     *           The filter clause of dimensions. Dimensions must be requested to be used in
     *           this filter. Metrics cannot be used in this filter.
     *     @type FilterExpression $metricFilter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Metrics must be requested to be used in this filter.
     *           Dimensions cannot be used in this filter.
     *     @type int[] $metricAggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *           For allowed values, use constants defined on {@see \Google\Analytics\Data\V1alpha\MetricAggregation}
     *     @type OrderBy[] $orderBys
     *           Specifies how rows are ordered in the response.
     *     @type bool $returnPropertyQuota
     *           Toggles whether to return the current state of this Analytics Property's
     *           Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\RunRealtimeReportResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function runRealtimeReport(array $optionalArgs = [])
    {
        $request = new RunRealtimeReportRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['property'])) {
            $request->setProperty($optionalArgs['property']);
            $requestParamHeaders['property'] = $optionalArgs['property'];
        }

        if (isset($optionalArgs['dimensions'])) {
            $request->setDimensions($optionalArgs['dimensions']);
        }

        if (isset($optionalArgs['metrics'])) {
            $request->setMetrics($optionalArgs['metrics']);
        }

        if (isset($optionalArgs['limit'])) {
            $request->setLimit($optionalArgs['limit']);
        }

        if (isset($optionalArgs['dimensionFilter'])) {
            $request->setDimensionFilter($optionalArgs['dimensionFilter']);
        }

        if (isset($optionalArgs['metricFilter'])) {
            $request->setMetricFilter($optionalArgs['metricFilter']);
        }

        if (isset($optionalArgs['metricAggregations'])) {
            $request->setMetricAggregations(
                $optionalArgs['metricAggregations']
            );
        }

        if (isset($optionalArgs['orderBys'])) {
            $request->setOrderBys($optionalArgs['orderBys']);
        }

        if (isset($optionalArgs['returnPropertyQuota'])) {
            $request->setReturnPropertyQuota(
                $optionalArgs['returnPropertyQuota']
            );
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'RunRealtimeReport',
            RunRealtimeReportResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns a customized report of your Google Analytics event data. Reports
     * contain statistics derived from data collected by the Google Analytics
     * tracking code. The data returned from the API is as a table with columns
     * for the requested dimensions and metrics. Metrics are individual
     * measurements of user activity on your property, such as active users or
     * event count. Dimensions break down metrics across some common criteria,
     * such as country or event name.
     *
     * Sample code:
     * ```
     * $alphaAnalyticsDataClient = new AlphaAnalyticsDataClient();
     * try {
     *     $response = $alphaAnalyticsDataClient->runReport();
     * } finally {
     *     $alphaAnalyticsDataClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type Entity $entity
     *           A property whose events are tracked. Within a batch request, this entity
     *           should either be unspecified or consistent with the batch-level entity.
     *     @type Dimension[] $dimensions
     *           The dimensions requested and displayed.
     *     @type Metric[] $metrics
     *           The metrics requested and displayed.
     *     @type DateRange[] $dateRanges
     *           Date ranges of data to read. If multiple date ranges are requested, each
     *           response row will contain a zero based date range index. If two date
     *           ranges overlap, the event data for the overlapping days is included in the
     *           response rows for both date ranges. In a cohort request, this `dateRanges`
     *           must be unspecified.
     *     @type int $offset
     *           The row count of the start row. The first row is counted as row 0.
     *
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int $limit
     *           The number of rows to return. If unspecified, 10 rows are returned. If
     *           -1, all rows are returned.
     *
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int[] $metricAggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *           For allowed values, use constants defined on {@see \Google\Analytics\Data\V1alpha\MetricAggregation}
     *     @type FilterExpression $dimensionFilter
     *           The filter clause of dimensions. Dimensions must be requested to be used in
     *           this filter. Metrics cannot be used in this filter.
     *     @type FilterExpression $metricFilter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Metrics must be requested to be used in this filter.
     *           Dimensions cannot be used in this filter.
     *     @type OrderBy[] $orderBys
     *           Specifies how rows are ordered in the response.
     *     @type string $currencyCode
     *           A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     *           If the field is empty, the report uses the entity's default currency.
     *     @type CohortSpec $cohortSpec
     *           Cohort group associated with this request. If there is a cohort group
     *           in the request the 'cohort' dimension must be present.
     *     @type bool $keepEmptyRows
     *           If false or unspecified, each row with all metrics equal to 0 will not be
     *           returned. If true, these rows will be returned if they are not separately
     *           removed by a filter.
     *     @type bool $returnPropertyQuota
     *           Toggles whether to return the current state of this Analytics Property's
     *           quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Analytics\Data\V1alpha\RunReportResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function runReport(array $optionalArgs = [])
    {
        $request = new RunReportRequest();
        if (isset($optionalArgs['entity'])) {
            $request->setEntity($optionalArgs['entity']);
        }

        if (isset($optionalArgs['dimensions'])) {
            $request->setDimensions($optionalArgs['dimensions']);
        }

        if (isset($optionalArgs['metrics'])) {
            $request->setMetrics($optionalArgs['metrics']);
        }

        if (isset($optionalArgs['dateRanges'])) {
            $request->setDateRanges($optionalArgs['dateRanges']);
        }

        if (isset($optionalArgs['offset'])) {
            $request->setOffset($optionalArgs['offset']);
        }

        if (isset($optionalArgs['limit'])) {
            $request->setLimit($optionalArgs['limit']);
        }

        if (isset($optionalArgs['metricAggregations'])) {
            $request->setMetricAggregations(
                $optionalArgs['metricAggregations']
            );
        }

        if (isset($optionalArgs['dimensionFilter'])) {
            $request->setDimensionFilter($optionalArgs['dimensionFilter']);
        }

        if (isset($optionalArgs['metricFilter'])) {
            $request->setMetricFilter($optionalArgs['metricFilter']);
        }

        if (isset($optionalArgs['orderBys'])) {
            $request->setOrderBys($optionalArgs['orderBys']);
        }

        if (isset($optionalArgs['currencyCode'])) {
            $request->setCurrencyCode($optionalArgs['currencyCode']);
        }

        if (isset($optionalArgs['cohortSpec'])) {
            $request->setCohortSpec($optionalArgs['cohortSpec']);
        }

        if (isset($optionalArgs['keepEmptyRows'])) {
            $request->setKeepEmptyRows($optionalArgs['keepEmptyRows']);
        }

        if (isset($optionalArgs['returnPropertyQuota'])) {
            $request->setReturnPropertyQuota(
                $optionalArgs['returnPropertyQuota']
            );
        }

        return $this->startCall(
            'RunReport',
            RunReportResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
