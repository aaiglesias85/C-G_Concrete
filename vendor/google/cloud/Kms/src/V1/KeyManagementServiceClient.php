<?php
/*
 * Copyright 2018 Google LLC
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
 * https://github.com/google/googleapis/blob/master/google/cloud/kms/v1/service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Kms\V1;

use Google\Cloud\Kms\V1\Gapic\KeyManagementServiceGapicClient;
use Google\ApiCore\PathTemplate;

/** {@inheritdoc} */
class KeyManagementServiceClient extends KeyManagementServiceGapicClient
{
    /**
     * Formats a string containing the fully-qualified path to represent
     * a crypto_key_path resource.
     *
     * @param string $project
     * @param string $location
     * @param string $keyRing
     * @param string $cryptoKeyPath
     *
     * @return string The formatted crypto_key_path resource.
     * @deprecated Use cryptoKeyName instead
     */
    public static function cryptoKeyPathName($project, $location, $keyRing, $cryptoKeyPath)
    {
        return (new PathTemplate('projects/{project}/locations/{location}/keyRings/{key_ring}/cryptoKeys/{crypto_key_path=**}'))->render([
            'project' => $project,
            'location' => $location,
            'key_ring' => $keyRing,
            'crypto_key_path' => $cryptoKeyPath,
        ]);
    }
}
