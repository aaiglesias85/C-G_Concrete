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

namespace Google\Cloud\Language\Connection;

/**
 * Represents a connection to
 * [Google Natural Language](https://cloud.google.com/natural-language/).
 */
interface ConnectionInterface
{
    /**
     * @param array $args
     * @return array
     */
    public function analyzeEntities(array $args = []);

    /**
     * @param array $args
     * @return array
     */
    public function analyzeSentiment(array $args = []);

    /**
     * @param array $args
     * @return array
     */
    public function analyzeEntitySentiment(array $args = []);

    /**
     * @param array $args
     * @return array
     */
    public function analyzeSyntax(array $args = []);

    /**
     * @param array $args
     * @return array
     */
    public function annotateText(array $args = []);

    /**
     * @param array $args
     * @return array
     */
    public function classifyText(array $args = []);
}
