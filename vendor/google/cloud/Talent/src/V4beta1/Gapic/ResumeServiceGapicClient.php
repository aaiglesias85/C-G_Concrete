<?php
/*
 * Copyright 2019 Google LLC
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
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/talent/v4beta1/resume_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Talent\V4beta1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Talent\V4beta1\ParseResumeRequest;
use Google\Cloud\Talent\V4beta1\ParseResumeResponse;

/**
 * Service Description: A service that handles resume parsing.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $resumeServiceClient = new ResumeServiceClient();
 * try {
 *     $formattedParent = $resumeServiceClient->projectName('[PROJECT]');
 *     $resume = '';
 *     $response = $resumeServiceClient->parseResume($formattedParent, $resume);
 * } finally {
 *     $resumeServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class ResumeServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.talent.v4beta1.ResumeService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'jobs.googleapis.com';

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
        'https://www.googleapis.com/auth/jobs',
    ];
    private static $projectNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/resume_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/resume_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/resume_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/resume_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getProjectNameTemplate()
    {
        if (null == self::$projectNameTemplate) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'project' => self::getProjectNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     * @experimental
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - project: projects/{project}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();

        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
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
        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'jobs.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Parses a resume into a [Profile][google.cloud.talent.v4beta1.Profile]. The API attempts to fill out the
     * following profile fields if present within the resume:.
     *
     * * personNames
     * * addresses
     * * emailAddress
     * * phoneNumbers
     * * personalUris
     * * employmentRecords
     * * educationRecords
     * * skills
     *
     * Note that some attributes in these fields may not be populated if they're
     * not present within the resume or unrecognizable by the resume parser.
     *
     * This API does not save the resume or profile. To create a profile from this
     * resume, clients need to call the CreateProfile method again with the
     * profile returned.
     *
     * This API supports the following list of formats:
     *
     * * PDF
     * * TXT
     * * DOC
     * * RTF
     * * DOCX
     *
     * An error is thrown if the input format is not supported.
     *
     * Sample code:
     * ```
     * $resumeServiceClient = new ResumeServiceClient();
     * try {
     *     $formattedParent = $resumeServiceClient->projectName('[PROJECT]');
     *     $resume = '';
     *     $response = $resumeServiceClient->parseResume($formattedParent, $resume);
     * } finally {
     *     $resumeServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required.
     *
     * The resource name of the project.
     *
     * The format is "projects/{project_id}", for example,
     * "projects/api-test-project".
     * @param string $resume Required.
     *
     * The bytes of the resume file in common format. Currently the API supports
     * the following formats:
     * PDF, TXT, DOC, RTF and DOCX.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type string $regionCode
     *          Optional.
     *
     *          The region code indicating where the resume is from. Values
     *          are as per the ISO-3166-2 format. For example, US, FR, DE.
     *
     *          This value is optional, but providing this value improves the resume
     *          parsing quality and performance.
     *
     *          An error is thrown if the regionCode is invalid.
     *     @type string $languageCode
     *          Optional.
     *
     *          The language code of contents in the resume.
     *
     *          Language codes must be in BCP-47 format, such as "en-US" or "sr-Latn".
     *          For more information, see
     *          [Tags for Identifying Languages](https://tools.ietf.org/html/bcp47){:
     *          class="external" target="_blank" }.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Talent\V4beta1\ParseResumeResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function parseResume($parent, $resume, array $optionalArgs = [])
    {
        $request = new ParseResumeRequest();
        $request->setParent($parent);
        $request->setResume($resume);
        if (isset($optionalArgs['regionCode'])) {
            $request->setRegionCode($optionalArgs['regionCode']);
        }
        if (isset($optionalArgs['languageCode'])) {
            $request->setLanguageCode($optionalArgs['languageCode']);
        }

        return $this->startCall(
            'ParseResume',
            ParseResumeResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
