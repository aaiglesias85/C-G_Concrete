<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\BigQuery;

/**
 * Represents a value with a data type of
 * [Date](https://cloud.google.com/bigquery/docs/reference/standard-sql/data-types#date_type).
 *
 * Example:
 * ```
 * use Google\Cloud\BigQuery\BigQueryClient;
 *
 * $bigQuery = new BigQueryClient();
 *
 * $date = $bigQuery->date(new \DateTime('1995-02-04'));
 * ```
 */
class Date implements ValueInterface
{
    const FORMAT = 'Y-m-d';

    /**
     * @var \DateTimeInterface
     */
    protected $value;

    /**
     * @param \DateTimeInterface $value The date value.
     */
    public function __construct(\DateTimeInterface $value)
    {
        $this->value = $value;
    }

    /**
     * Get the underlying `\DateTimeInterface` implementation.
     *
     * @return \DateTimeInterface
     */
    public function get()
    {
        return $this->value;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function type()
    {
        return ValueMapper::TYPE_DATE;
    }

    /**
     * Format the value as a string.
     *
     * @return string
     */
    public function formatAsString()
    {
        return $this->value->format(self::FORMAT);
    }

    /**
     * Format the value as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->formatAsString();
    }
}
