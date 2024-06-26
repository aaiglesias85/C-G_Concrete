<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/environments.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the selection and configuration of software inside the environment.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.SoftwareConfig</code>
 */
class SoftwareConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The version of the software running in the environment.
     * This encapsulates both the version of Cloud Composer functionality and the
     * version of Apache Airflow. It must match the regular expression
     * `composer-([0-9]+\.[0-9]+\.[0-9]+|latest)-airflow-[0-9]+\.[0-9]+(\.[0-9]+.*)?`.
     * When used as input, the server also checks if the provided version is
     * supported and denies the request for an unsupported version.
     * The Cloud Composer portion of the version is a
     * [semantic version](https://semver.org) or `latest`. When the patch version
     * is omitted, the current Cloud Composer patch version is selected.
     * When `latest` is provided instead of an explicit version number,
     * the server replaces `latest` with the current Cloud Composer version
     * and stores that version number in the same field.
     * The portion of the image version that follows *airflow-* is an
     * official Apache Airflow repository
     * [release name](https://github.com/apache/incubator-airflow/releases).
     * See also [Version
     * List](https://cloud.google.com/composer/docs/concepts/versioning/composer-versions).
     *
     * Generated from protobuf field <code>string image_version = 1;</code>
     */
    private $image_version = '';
    /**
     * Optional. Apache Airflow configuration properties to override.
     * Property keys contain the section and property names, separated by a
     * hyphen, for example "core-dags_are_paused_at_creation". Section names must
     * not contain hyphens ("-"), opening square brackets ("["),  or closing
     * square brackets ("]"). The property name must not be empty and must not
     * contain an equals sign ("=") or semicolon (";"). Section and property names
     * must not contain a period ("."). Apache Airflow configuration property
     * names must be written in
     * [snake_case](https://en.wikipedia.org/wiki/Snake_case). Property values can
     * contain any character, and can be written in any lower/upper case format.
     * Certain Apache Airflow configuration property values are
     * [blocked](https://cloud.google.com/composer/docs/concepts/airflow-configurations),
     * and cannot be overridden.
     *
     * Generated from protobuf field <code>map<string, string> airflow_config_overrides = 2;</code>
     */
    private $airflow_config_overrides;
    /**
     * Optional. Custom Python Package Index (PyPI) packages to be installed in
     * the environment.
     * Keys refer to the lowercase package name such as "numpy"
     * and values are the lowercase extras and version specifier such as
     * "==1.12.0", "[devel,gcp_api]", or "[devel]>=1.8.2, <1.9.2". To specify a
     * package without pinning it to a version specifier, use the empty string as
     * the value.
     *
     * Generated from protobuf field <code>map<string, string> pypi_packages = 3;</code>
     */
    private $pypi_packages;
    /**
     * Optional. Additional environment variables to provide to the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Environment variable names must match the regular expression
     * `[a-zA-Z_][a-zA-Z0-9_]*`. They cannot specify Apache Airflow
     * software configuration overrides (they cannot match the regular expression
     * `AIRFLOW__[A-Z0-9_]+__[A-Z0-9_]+`), and they cannot match any of the
     * following reserved names:
     * * `AIRFLOW_HOME`
     * * `C_FORCE_ROOT`
     * * `CONTAINER_NAME`
     * * `DAGS_FOLDER`
     * * `GCP_PROJECT`
     * * `GCS_BUCKET`
     * * `GKE_CLUSTER_NAME`
     * * `SQL_DATABASE`
     * * `SQL_INSTANCE`
     * * `SQL_PASSWORD`
     * * `SQL_PROJECT`
     * * `SQL_REGION`
     * * `SQL_USER`
     *
     * Generated from protobuf field <code>map<string, string> env_variables = 4;</code>
     */
    private $env_variables;
    /**
     * Optional. The major version of Python used to run the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Can be set to '2' or '3'. If not specified, the default is '3'. Cannot be
     * updated.
     *
     * Generated from protobuf field <code>string python_version = 6;</code>
     */
    private $python_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $image_version
     *           The version of the software running in the environment.
     *           This encapsulates both the version of Cloud Composer functionality and the
     *           version of Apache Airflow. It must match the regular expression
     *           `composer-([0-9]+\.[0-9]+\.[0-9]+|latest)-airflow-[0-9]+\.[0-9]+(\.[0-9]+.*)?`.
     *           When used as input, the server also checks if the provided version is
     *           supported and denies the request for an unsupported version.
     *           The Cloud Composer portion of the version is a
     *           [semantic version](https://semver.org) or `latest`. When the patch version
     *           is omitted, the current Cloud Composer patch version is selected.
     *           When `latest` is provided instead of an explicit version number,
     *           the server replaces `latest` with the current Cloud Composer version
     *           and stores that version number in the same field.
     *           The portion of the image version that follows *airflow-* is an
     *           official Apache Airflow repository
     *           [release name](https://github.com/apache/incubator-airflow/releases).
     *           See also [Version
     *           List](https://cloud.google.com/composer/docs/concepts/versioning/composer-versions).
     *     @type array|\Google\Protobuf\Internal\MapField $airflow_config_overrides
     *           Optional. Apache Airflow configuration properties to override.
     *           Property keys contain the section and property names, separated by a
     *           hyphen, for example "core-dags_are_paused_at_creation". Section names must
     *           not contain hyphens ("-"), opening square brackets ("["),  or closing
     *           square brackets ("]"). The property name must not be empty and must not
     *           contain an equals sign ("=") or semicolon (";"). Section and property names
     *           must not contain a period ("."). Apache Airflow configuration property
     *           names must be written in
     *           [snake_case](https://en.wikipedia.org/wiki/Snake_case). Property values can
     *           contain any character, and can be written in any lower/upper case format.
     *           Certain Apache Airflow configuration property values are
     *           [blocked](https://cloud.google.com/composer/docs/concepts/airflow-configurations),
     *           and cannot be overridden.
     *     @type array|\Google\Protobuf\Internal\MapField $pypi_packages
     *           Optional. Custom Python Package Index (PyPI) packages to be installed in
     *           the environment.
     *           Keys refer to the lowercase package name such as "numpy"
     *           and values are the lowercase extras and version specifier such as
     *           "==1.12.0", "[devel,gcp_api]", or "[devel]>=1.8.2, <1.9.2". To specify a
     *           package without pinning it to a version specifier, use the empty string as
     *           the value.
     *     @type array|\Google\Protobuf\Internal\MapField $env_variables
     *           Optional. Additional environment variables to provide to the Apache Airflow
     *           scheduler, worker, and webserver processes.
     *           Environment variable names must match the regular expression
     *           `[a-zA-Z_][a-zA-Z0-9_]*`. They cannot specify Apache Airflow
     *           software configuration overrides (they cannot match the regular expression
     *           `AIRFLOW__[A-Z0-9_]+__[A-Z0-9_]+`), and they cannot match any of the
     *           following reserved names:
     *           * `AIRFLOW_HOME`
     *           * `C_FORCE_ROOT`
     *           * `CONTAINER_NAME`
     *           * `DAGS_FOLDER`
     *           * `GCP_PROJECT`
     *           * `GCS_BUCKET`
     *           * `GKE_CLUSTER_NAME`
     *           * `SQL_DATABASE`
     *           * `SQL_INSTANCE`
     *           * `SQL_PASSWORD`
     *           * `SQL_PROJECT`
     *           * `SQL_REGION`
     *           * `SQL_USER`
     *     @type string $python_version
     *           Optional. The major version of Python used to run the Apache Airflow
     *           scheduler, worker, and webserver processes.
     *           Can be set to '2' or '3'. If not specified, the default is '3'. Cannot be
     *           updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\Environments::initOnce();
        parent::__construct($data);
    }

    /**
     * The version of the software running in the environment.
     * This encapsulates both the version of Cloud Composer functionality and the
     * version of Apache Airflow. It must match the regular expression
     * `composer-([0-9]+\.[0-9]+\.[0-9]+|latest)-airflow-[0-9]+\.[0-9]+(\.[0-9]+.*)?`.
     * When used as input, the server also checks if the provided version is
     * supported and denies the request for an unsupported version.
     * The Cloud Composer portion of the version is a
     * [semantic version](https://semver.org) or `latest`. When the patch version
     * is omitted, the current Cloud Composer patch version is selected.
     * When `latest` is provided instead of an explicit version number,
     * the server replaces `latest` with the current Cloud Composer version
     * and stores that version number in the same field.
     * The portion of the image version that follows *airflow-* is an
     * official Apache Airflow repository
     * [release name](https://github.com/apache/incubator-airflow/releases).
     * See also [Version
     * List](https://cloud.google.com/composer/docs/concepts/versioning/composer-versions).
     *
     * Generated from protobuf field <code>string image_version = 1;</code>
     * @return string
     */
    public function getImageVersion()
    {
        return $this->image_version;
    }

    /**
     * The version of the software running in the environment.
     * This encapsulates both the version of Cloud Composer functionality and the
     * version of Apache Airflow. It must match the regular expression
     * `composer-([0-9]+\.[0-9]+\.[0-9]+|latest)-airflow-[0-9]+\.[0-9]+(\.[0-9]+.*)?`.
     * When used as input, the server also checks if the provided version is
     * supported and denies the request for an unsupported version.
     * The Cloud Composer portion of the version is a
     * [semantic version](https://semver.org) or `latest`. When the patch version
     * is omitted, the current Cloud Composer patch version is selected.
     * When `latest` is provided instead of an explicit version number,
     * the server replaces `latest` with the current Cloud Composer version
     * and stores that version number in the same field.
     * The portion of the image version that follows *airflow-* is an
     * official Apache Airflow repository
     * [release name](https://github.com/apache/incubator-airflow/releases).
     * See also [Version
     * List](https://cloud.google.com/composer/docs/concepts/versioning/composer-versions).
     *
     * Generated from protobuf field <code>string image_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setImageVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_version = $var;

        return $this;
    }

    /**
     * Optional. Apache Airflow configuration properties to override.
     * Property keys contain the section and property names, separated by a
     * hyphen, for example "core-dags_are_paused_at_creation". Section names must
     * not contain hyphens ("-"), opening square brackets ("["),  or closing
     * square brackets ("]"). The property name must not be empty and must not
     * contain an equals sign ("=") or semicolon (";"). Section and property names
     * must not contain a period ("."). Apache Airflow configuration property
     * names must be written in
     * [snake_case](https://en.wikipedia.org/wiki/Snake_case). Property values can
     * contain any character, and can be written in any lower/upper case format.
     * Certain Apache Airflow configuration property values are
     * [blocked](https://cloud.google.com/composer/docs/concepts/airflow-configurations),
     * and cannot be overridden.
     *
     * Generated from protobuf field <code>map<string, string> airflow_config_overrides = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAirflowConfigOverrides()
    {
        return $this->airflow_config_overrides;
    }

    /**
     * Optional. Apache Airflow configuration properties to override.
     * Property keys contain the section and property names, separated by a
     * hyphen, for example "core-dags_are_paused_at_creation". Section names must
     * not contain hyphens ("-"), opening square brackets ("["),  or closing
     * square brackets ("]"). The property name must not be empty and must not
     * contain an equals sign ("=") or semicolon (";"). Section and property names
     * must not contain a period ("."). Apache Airflow configuration property
     * names must be written in
     * [snake_case](https://en.wikipedia.org/wiki/Snake_case). Property values can
     * contain any character, and can be written in any lower/upper case format.
     * Certain Apache Airflow configuration property values are
     * [blocked](https://cloud.google.com/composer/docs/concepts/airflow-configurations),
     * and cannot be overridden.
     *
     * Generated from protobuf field <code>map<string, string> airflow_config_overrides = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAirflowConfigOverrides($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->airflow_config_overrides = $arr;

        return $this;
    }

    /**
     * Optional. Custom Python Package Index (PyPI) packages to be installed in
     * the environment.
     * Keys refer to the lowercase package name such as "numpy"
     * and values are the lowercase extras and version specifier such as
     * "==1.12.0", "[devel,gcp_api]", or "[devel]>=1.8.2, <1.9.2". To specify a
     * package without pinning it to a version specifier, use the empty string as
     * the value.
     *
     * Generated from protobuf field <code>map<string, string> pypi_packages = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPypiPackages()
    {
        return $this->pypi_packages;
    }

    /**
     * Optional. Custom Python Package Index (PyPI) packages to be installed in
     * the environment.
     * Keys refer to the lowercase package name such as "numpy"
     * and values are the lowercase extras and version specifier such as
     * "==1.12.0", "[devel,gcp_api]", or "[devel]>=1.8.2, <1.9.2". To specify a
     * package without pinning it to a version specifier, use the empty string as
     * the value.
     *
     * Generated from protobuf field <code>map<string, string> pypi_packages = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPypiPackages($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pypi_packages = $arr;

        return $this;
    }

    /**
     * Optional. Additional environment variables to provide to the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Environment variable names must match the regular expression
     * `[a-zA-Z_][a-zA-Z0-9_]*`. They cannot specify Apache Airflow
     * software configuration overrides (they cannot match the regular expression
     * `AIRFLOW__[A-Z0-9_]+__[A-Z0-9_]+`), and they cannot match any of the
     * following reserved names:
     * * `AIRFLOW_HOME`
     * * `C_FORCE_ROOT`
     * * `CONTAINER_NAME`
     * * `DAGS_FOLDER`
     * * `GCP_PROJECT`
     * * `GCS_BUCKET`
     * * `GKE_CLUSTER_NAME`
     * * `SQL_DATABASE`
     * * `SQL_INSTANCE`
     * * `SQL_PASSWORD`
     * * `SQL_PROJECT`
     * * `SQL_REGION`
     * * `SQL_USER`
     *
     * Generated from protobuf field <code>map<string, string> env_variables = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnvVariables()
    {
        return $this->env_variables;
    }

    /**
     * Optional. Additional environment variables to provide to the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Environment variable names must match the regular expression
     * `[a-zA-Z_][a-zA-Z0-9_]*`. They cannot specify Apache Airflow
     * software configuration overrides (they cannot match the regular expression
     * `AIRFLOW__[A-Z0-9_]+__[A-Z0-9_]+`), and they cannot match any of the
     * following reserved names:
     * * `AIRFLOW_HOME`
     * * `C_FORCE_ROOT`
     * * `CONTAINER_NAME`
     * * `DAGS_FOLDER`
     * * `GCP_PROJECT`
     * * `GCS_BUCKET`
     * * `GKE_CLUSTER_NAME`
     * * `SQL_DATABASE`
     * * `SQL_INSTANCE`
     * * `SQL_PASSWORD`
     * * `SQL_PROJECT`
     * * `SQL_REGION`
     * * `SQL_USER`
     *
     * Generated from protobuf field <code>map<string, string> env_variables = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnvVariables($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env_variables = $arr;

        return $this;
    }

    /**
     * Optional. The major version of Python used to run the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Can be set to '2' or '3'. If not specified, the default is '3'. Cannot be
     * updated.
     *
     * Generated from protobuf field <code>string python_version = 6;</code>
     * @return string
     */
    public function getPythonVersion()
    {
        return $this->python_version;
    }

    /**
     * Optional. The major version of Python used to run the Apache Airflow
     * scheduler, worker, and webserver processes.
     * Can be set to '2' or '3'. If not specified, the default is '3'. Cannot be
     * updated.
     *
     * Generated from protobuf field <code>string python_version = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPythonVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->python_version = $var;

        return $this;
    }

}

