<?php
/**
 * Copyright 2018, Google LLC All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable\Filter;

use Google\Cloud\Bigtable\Filter\Builder\Range;
use Google\Cloud\Bigtable\V2\RowFilter;
use Google\Cloud\Bigtable\V2\TimestampRange;

/**
 * Matches only cells with microsecond timestamps within the given range.
 *
 * Example:
 * ```
 * use Google\Cloud\Bigtable\Filter;
 *
 * $rangeFilter = Filter::timestamp()
 *     ->range();
 * ```
 */
class TimestampRangeFilter extends Range implements FilterInterface
{
    /**
     * Get the proto representation of the filter.
     *
     * @internal
     * @access private
     * @return RowFilter
     */
    public function toProto()
    {
        $timestampRange = new TimestampRange();

        switch ($this->getStartBound()) {
            case Range::BOUND_TYPE_CLOSED:
                $timestampRange->setStartTimestampMicros($this->getStart());
                break;
            case Range::BOUND_TYPE_OPEN:
                $timestampRange->setStartTimestampMicros($this->getStart() + 1);
                break;
            case Range::BOUND_TYPE_UNBOUNDED:
                break;
        }
        switch ($this->getEndBound()) {
            case Range::BOUND_TYPE_CLOSED:
                $timestampRange->setEndTimestampMicros($this->getEnd() + 1);
                break;
            case Range::BOUND_TYPE_OPEN:
                $timestampRange->setEndTimestampMicros($this->getEnd());
                break;
            case Range::BOUND_TYPE_UNBOUNDED:
                break;
        }
        $rowFilter = new RowFilter();
        $rowFilter->setTimestampRangeFilter($timestampRange);
        return $rowFilter;
    }
}
