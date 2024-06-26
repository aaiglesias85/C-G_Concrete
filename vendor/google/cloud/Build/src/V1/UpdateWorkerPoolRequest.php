<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a `WorkerPool`.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.UpdateWorkerPoolRequest</code>
 */
class UpdateWorkerPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The field will contain name of the resource requested, for example:
     * "projects/project-1/workerPools/workerpool-name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * `WorkerPool` resource to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.WorkerPool worker_pool = 3;</code>
     */
    private $worker_pool = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The field will contain name of the resource requested, for example:
     *           "projects/project-1/workerPools/workerpool-name"
     *     @type \Google\Cloud\Build\V1\WorkerPool $worker_pool
     *           `WorkerPool` resource to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * The field will contain name of the resource requested, for example:
     * "projects/project-1/workerPools/workerpool-name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The field will contain name of the resource requested, for example:
     * "projects/project-1/workerPools/workerpool-name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * `WorkerPool` resource to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.WorkerPool worker_pool = 3;</code>
     * @return \Google\Cloud\Build\V1\WorkerPool|null
     */
    public function getWorkerPool()
    {
        return isset($this->worker_pool) ? $this->worker_pool : null;
    }

    public function hasWorkerPool()
    {
        return isset($this->worker_pool);
    }

    public function clearWorkerPool()
    {
        unset($this->worker_pool);
    }

    /**
     * `WorkerPool` resource to update.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.WorkerPool worker_pool = 3;</code>
     * @param \Google\Cloud\Build\V1\WorkerPool $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\WorkerPool::class);
        $this->worker_pool = $var;

        return $this;
    }

}

