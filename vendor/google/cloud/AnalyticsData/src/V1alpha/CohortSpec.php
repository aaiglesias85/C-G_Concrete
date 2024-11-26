<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of cohorts for a cohort report.
 * Cohort reports can be used for example to create a time series of user
 * retention for the cohort. For example, you could select the cohort of users
 * that were acquired in the first week of September and follow that cohort for
 * the next six weeks. Selecting the users acquired in the first week of
 * September cohort is specified in the `cohort` object. Following that
 * cohort for the next six weeks is specified in the `cohortsRange` object.
 * The report response could show a weekly time series where say your app has
 * retained 60% of this cohort after three weeks and 25% of this cohort after
 * six weeks. These two percentages can be calculated by the metric
 * `cohortActiveUsers/cohortTotalUsers` and will be separate rows in the report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.CohortSpec</code>
 */
class CohortSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     */
    private $cohorts;
    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     */
    private $cohorts_range = null;
    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     */
    private $cohort_report_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1alpha\Cohort[]|\Google\Protobuf\Internal\RepeatedField $cohorts
     *           Defines the selection criteria to group users into cohorts.
     *           Most cohort reports define only a single cohort. If multiple cohorts are
     *           specified, each cohort can be recognized in the report by their name.
     *     @type \Google\Analytics\Data\V1alpha\CohortsRange $cohorts_range
     *           Cohort reports follow cohorts over an extended reporting date range. This
     *           range specifies an offset duration to follow the cohorts over.
     *     @type \Google\Analytics\Data\V1alpha\CohortReportSettings $cohort_report_settings
     *           Optional settings for a cohort report.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCohorts()
    {
        return $this->cohorts;
    }

    /**
     * Defines the selection criteria to group users into cohorts.
     * Most cohort reports define only a single cohort. If multiple cohorts are
     * specified, each cohort can be recognized in the report by their name.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Cohort cohorts = 1;</code>
     * @param \Google\Analytics\Data\V1alpha\Cohort[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCohorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1alpha\Cohort::class);
        $this->cohorts = $arr;

        return $this;
    }

    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\CohortsRange|null
     */
    public function getCohortsRange()
    {
        return isset($this->cohorts_range) ? $this->cohorts_range : null;
    }

    public function hasCohortsRange()
    {
        return isset($this->cohorts_range);
    }

    public function clearCohortsRange()
    {
        unset($this->cohorts_range);
    }

    /**
     * Cohort reports follow cohorts over an extended reporting date range. This
     * range specifies an offset duration to follow the cohorts over.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortsRange cohorts_range = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\CohortsRange $var
     * @return $this
     */
    public function setCohortsRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\CohortsRange::class);
        $this->cohorts_range = $var;

        return $this;
    }

    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     * @return \Google\Analytics\Data\V1alpha\CohortReportSettings|null
     */
    public function getCohortReportSettings()
    {
        return isset($this->cohort_report_settings) ? $this->cohort_report_settings : null;
    }

    public function hasCohortReportSettings()
    {
        return isset($this->cohort_report_settings);
    }

    public function clearCohortReportSettings()
    {
        unset($this->cohort_report_settings);
    }

    /**
     * Optional settings for a cohort report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortReportSettings cohort_report_settings = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\CohortReportSettings $var
     * @return $this
     */
    public function setCohortReportSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\CohortReportSettings::class);
        $this->cohort_report_settings = $var;

        return $this;
    }

}

