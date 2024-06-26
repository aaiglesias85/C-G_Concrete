<?php
/*
 * Copyright 2021 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/sql/v1beta4/cloud_sql.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Sql\V1beta4\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Sql\V1beta4\Operation;
use Google\Cloud\Sql\V1beta4\SqlSslCertsDeleteRequest;
use Google\Cloud\Sql\V1beta4\SqlSslCertsGetRequest;
use Google\Cloud\Sql\V1beta4\SqlSslCertsInsertRequest;
use Google\Cloud\Sql\V1beta4\SqlSslCertsListRequest;
use Google\Cloud\Sql\V1beta4\SslCert;
use Google\Cloud\Sql\V1beta4\SslCertsInsertRequest;
use Google\Cloud\Sql\V1beta4\SslCertsInsertResponse;
use Google\Cloud\Sql\V1beta4\SslCertsListResponse;

/**
 * Service Description:
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $sqlSslCertsServiceClient = new SqlSslCertsServiceClient();
 * try {
 *     $response = $sqlSslCertsServiceClient->delete();
 * } finally {
 *     $sqlSslCertsServiceClient->close();
 * }
 * ```
 *
 * @experimental
 */
class SqlSslCertsServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.sql.v1beta4.SqlSslCertsService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'sqladmin.googleapis.com';

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
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/sqlservice.admin',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../resources/sql_ssl_certs_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/sql_ssl_certs_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../resources/sql_ssl_certs_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/sql_ssl_certs_service_rest_client_config.php',
                ],
            ],
        ];
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
     *           as "<uri>:<port>". Default 'sqladmin.googleapis.com:443'.
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
     * Deletes the SSL certificate. For First Generation instances, the
     * certificate remains valid until the instance is restarted.
     *
     * Sample code:
     * ```
     * $sqlSslCertsServiceClient = new SqlSslCertsServiceClient();
     * try {
     *     $response = $sqlSslCertsServiceClient->delete();
     * } finally {
     *     $sqlSslCertsServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $instance
     *           Cloud SQL instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type string $sha1Fingerprint
     *           Sha1 FingerPrint.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Sql\V1beta4\Operation
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function delete(array $optionalArgs = [])
    {
        $request = new SqlSslCertsDeleteRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
            $requestParamHeaders['instance'] = $optionalArgs['instance'];
        }

        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
            $requestParamHeaders['project'] = $optionalArgs['project'];
        }

        if (isset($optionalArgs['sha1Fingerprint'])) {
            $request->setSha1Fingerprint($optionalArgs['sha1Fingerprint']);
            $requestParamHeaders['sha1_fingerprint'] =
                $optionalArgs['sha1Fingerprint'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'Delete',
            Operation::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves a particular SSL certificate.  Does not include the private key
     * (required for usage).  The private key must be saved from the response to
     * initial creation.
     *
     * Sample code:
     * ```
     * $sqlSslCertsServiceClient = new SqlSslCertsServiceClient();
     * try {
     *     $response = $sqlSslCertsServiceClient->get();
     * } finally {
     *     $sqlSslCertsServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $instance
     *           Cloud SQL instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type string $sha1Fingerprint
     *           Sha1 FingerPrint.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Sql\V1beta4\SslCert
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function get(array $optionalArgs = [])
    {
        $request = new SqlSslCertsGetRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
            $requestParamHeaders['instance'] = $optionalArgs['instance'];
        }

        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
            $requestParamHeaders['project'] = $optionalArgs['project'];
        }

        if (isset($optionalArgs['sha1Fingerprint'])) {
            $request->setSha1Fingerprint($optionalArgs['sha1Fingerprint']);
            $requestParamHeaders['sha1_fingerprint'] =
                $optionalArgs['sha1Fingerprint'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'Get',
            SslCert::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates an SSL certificate and returns it along with the private key and
     * server certificate authority.  The new certificate will not be usable until
     * the instance is restarted.
     *
     * Sample code:
     * ```
     * $sqlSslCertsServiceClient = new SqlSslCertsServiceClient();
     * try {
     *     $response = $sqlSslCertsServiceClient->insert();
     * } finally {
     *     $sqlSslCertsServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $instance
     *           Cloud SQL instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type SslCertsInsertRequest $body
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Sql\V1beta4\SslCertsInsertResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function insert(array $optionalArgs = [])
    {
        $request = new SqlSslCertsInsertRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
            $requestParamHeaders['instance'] = $optionalArgs['instance'];
        }

        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
            $requestParamHeaders['project'] = $optionalArgs['project'];
        }

        if (isset($optionalArgs['body'])) {
            $request->setBody($optionalArgs['body']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'Insert',
            SslCertsInsertResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all of the current SSL certificates for the instance.
     *
     * Sample code:
     * ```
     * $sqlSslCertsServiceClient = new SqlSslCertsServiceClient();
     * try {
     *     $response = $sqlSslCertsServiceClient->list();
     * } finally {
     *     $sqlSslCertsServiceClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $instance
     *           Cloud SQL instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Sql\V1beta4\SslCertsListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function list(array $optionalArgs = [])
    {
        $request = new SqlSslCertsListRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['instance'])) {
            $request->setInstance($optionalArgs['instance']);
            $requestParamHeaders['instance'] = $optionalArgs['instance'];
        }

        if (isset($optionalArgs['project'])) {
            $request->setProject($optionalArgs['project']);
            $requestParamHeaders['project'] = $optionalArgs['project'];
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'List',
            SslCertsListResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
