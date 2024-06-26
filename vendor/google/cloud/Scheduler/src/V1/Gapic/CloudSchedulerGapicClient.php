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
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/scheduler/v1/cloudscheduler.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Scheduler\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Scheduler\V1\CreateJobRequest;
use Google\Cloud\Scheduler\V1\DeleteJobRequest;
use Google\Cloud\Scheduler\V1\GetJobRequest;
use Google\Cloud\Scheduler\V1\Job;
use Google\Cloud\Scheduler\V1\ListJobsRequest;
use Google\Cloud\Scheduler\V1\ListJobsResponse;
use Google\Cloud\Scheduler\V1\PauseJobRequest;
use Google\Cloud\Scheduler\V1\ResumeJobRequest;
use Google\Cloud\Scheduler\V1\RunJobRequest;
use Google\Cloud\Scheduler\V1\UpdateJobRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: The Cloud Scheduler API allows external entities to reliably
 * schedule asynchronous jobs.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $cloudSchedulerClient = new CloudSchedulerClient();
 * try {
 *     $formattedParent = $cloudSchedulerClient->locationName('[PROJECT]', '[LOCATION]');
 *     $job = new Job();
 *     $response = $cloudSchedulerClient->createJob($formattedParent, $job);
 * } finally {
 *     $cloudSchedulerClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class CloudSchedulerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.scheduler.v1.CloudScheduler';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'cloudscheduler.googleapis.com';

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
    ];

    private static $jobNameTemplate;

    private static $locationNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/cloud_scheduler_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/cloud_scheduler_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/cloud_scheduler_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/cloud_scheduler_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getJobNameTemplate()
    {
        if (self::$jobNameTemplate == null) {
            self::$jobNameTemplate = new PathTemplate('projects/{project}/locations/{location}/jobs/{job}');
        }

        return self::$jobNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
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
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'job' => self::getJobNameTemplate(),
                'location' => self::getLocationNameTemplate(),
                'project' => self::getProjectNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a job
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $job
     *
     * @return string The formatted job resource.
     */
    public static function jobName($project, $location, $job)
    {
        return self::getJobNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'job' => $job,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
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
     * - job: projects/{project}/locations/{location}/jobs/{job}
     * - location: projects/{project}/locations/{location}
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
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'cloudscheduler.googleapis.com:443'.
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
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a job.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedParent = $cloudSchedulerClient->locationName('[PROJECT]', '[LOCATION]');
     *     $job = new Job();
     *     $response = $cloudSchedulerClient->createJob($formattedParent, $job);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The location name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID`.
     * @param Job    $job          Required. The job to add. The user can optionally specify a name for the
     *                             job in [name][google.cloud.scheduler.v1.Job.name]. [name][google.cloud.scheduler.v1.Job.name] cannot be the same as an
     *                             existing job. If a name is not specified then the system will
     *                             generate a random unique name that will be returned
     *                             ([name][google.cloud.scheduler.v1.Job.name]) in the response.
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
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function createJob($parent, $job, array $optionalArgs = [])
    {
        $request = new CreateJobRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setJob($job);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateJob', Job::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes a job.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedName = $cloudSchedulerClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $cloudSchedulerClient->deleteJob($formattedName);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The job name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
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
     * @throws ApiException if the remote call fails
     */
    public function deleteJob($name, array $optionalArgs = [])
    {
        $request = new DeleteJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteJob', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a job.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedName = $cloudSchedulerClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $response = $cloudSchedulerClient->getJob($formattedName);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The job name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
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
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function getJob($name, array $optionalArgs = [])
    {
        $request = new GetJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetJob', Job::class, $optionalArgs, $request)->wait();
    }

    /**
     * Lists jobs.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedParent = $cloudSchedulerClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $cloudSchedulerClient->listJobs($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $cloudSchedulerClient->listJobs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The location name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID`.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function listJobs($parent, array $optionalArgs = [])
    {
        $request = new ListJobsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListJobs', $optionalArgs, ListJobsResponse::class, $request);
    }

    /**
     * Pauses a job.
     *
     * If a job is paused then the system will stop executing the job
     * until it is re-enabled via [ResumeJob][google.cloud.scheduler.v1.CloudScheduler.ResumeJob]. The
     * state of the job is stored in [state][google.cloud.scheduler.v1.Job.state]; if paused it
     * will be set to [Job.State.PAUSED][google.cloud.scheduler.v1.Job.State.PAUSED]. A job must be in [Job.State.ENABLED][google.cloud.scheduler.v1.Job.State.ENABLED]
     * to be paused.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedName = $cloudSchedulerClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $response = $cloudSchedulerClient->pauseJob($formattedName);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The job name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
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
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function pauseJob($name, array $optionalArgs = [])
    {
        $request = new PauseJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('PauseJob', Job::class, $optionalArgs, $request)->wait();
    }

    /**
     * Resume a job.
     *
     * This method reenables a job after it has been [Job.State.PAUSED][google.cloud.scheduler.v1.Job.State.PAUSED]. The
     * state of a job is stored in [Job.state][google.cloud.scheduler.v1.Job.state]; after calling this method it
     * will be set to [Job.State.ENABLED][google.cloud.scheduler.v1.Job.State.ENABLED]. A job must be in
     * [Job.State.PAUSED][google.cloud.scheduler.v1.Job.State.PAUSED] to be resumed.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedName = $cloudSchedulerClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $response = $cloudSchedulerClient->resumeJob($formattedName);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The job name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
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
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function resumeJob($name, array $optionalArgs = [])
    {
        $request = new ResumeJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ResumeJob', Job::class, $optionalArgs, $request)->wait();
    }

    /**
     * Forces a job to run now.
     *
     * When this method is called, Cloud Scheduler will dispatch the job, even
     * if the job is already running.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $formattedName = $cloudSchedulerClient->jobName('[PROJECT]', '[LOCATION]', '[JOB]');
     *     $response = $cloudSchedulerClient->runJob($formattedName);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The job name. For example:
     *                             `projects/PROJECT_ID/locations/LOCATION_ID/jobs/JOB_ID`.
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
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function runJob($name, array $optionalArgs = [])
    {
        $request = new RunJobRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('RunJob', Job::class, $optionalArgs, $request)->wait();
    }

    /**
     * Updates a job.
     *
     * If successful, the updated [Job][google.cloud.scheduler.v1.Job] is returned. If the job does
     * not exist, `NOT_FOUND` is returned.
     *
     * If UpdateJob does not successfully return, it is possible for the
     * job to be in an [Job.State.UPDATE_FAILED][google.cloud.scheduler.v1.Job.State.UPDATE_FAILED] state. A job in this state may
     * not be executed. If this happens, retry the UpdateJob request
     * until a successful response is received.
     *
     * Sample code:
     * ```
     * $cloudSchedulerClient = new CloudSchedulerClient();
     * try {
     *     $job = new Job();
     *     $updateMask = new FieldMask();
     *     $response = $cloudSchedulerClient->updateJob($job, $updateMask);
     * } finally {
     *     $cloudSchedulerClient->close();
     * }
     * ```
     *
     * @param Job       $job          Required. The new job properties. [name][google.cloud.scheduler.v1.Job.name] must be specified.
     *
     *                                Output only fields cannot be modified using UpdateJob.
     *                                Any value specified for an output only field will be ignored.
     * @param FieldMask $updateMask   A  mask used to specify which fields of the job are being updated.
     * @param array     $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Scheduler\V1\Job
     *
     * @throws ApiException if the remote call fails
     */
    public function updateJob($job, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateJobRequest();
        $requestParamHeaders = [];
        $request->setJob($job);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['job.name'] = $job->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateJob', Job::class, $optionalArgs, $request)->wait();
    }
}
