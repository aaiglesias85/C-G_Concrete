<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/image.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Model metadata for image classification.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ImageClassificationModelMetadata</code>
 */
class ImageClassificationModelMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The ID of the `base` model. If it is specified, the new model
     * will be created based on the `base` model. Otherwise, the new model will be
     * created from scratch. The `base` model must be in the same
     * `project` and `location` as the new model to create, and have the same
     * `model_type`.
     *
     * Generated from protobuf field <code>string base_model_id = 1;</code>
     */
    private $base_model_id = '';
    /**
     * Required. The train budget of creating this model, expressed in hours. The
     * actual `train_cost` will be equal or less than this value.
     *
     * Generated from protobuf field <code>int64 train_budget = 2;</code>
     */
    private $train_budget = 0;
    /**
     * Output only. The actual train cost of creating this model, expressed in
     * hours. If this model is created from a `base` model, the train cost used
     * to create the `base` model are not included.
     *
     * Generated from protobuf field <code>int64 train_cost = 3;</code>
     */
    private $train_cost = 0;
    /**
     * Output only. The reason that this create model operation stopped,
     * e.g. `BUDGET_REACHED`, `MODEL_CONVERGED`.
     *
     * Generated from protobuf field <code>string stop_reason = 5;</code>
     */
    private $stop_reason = '';
    /**
     * Optional. Type of the model. The available values are:
     * *   `cloud` - Model to be used via prediction calls to AutoML API.
     *               This is the default value.
     * *   `mobile-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards. Expected to have low latency, but
     *               may have lower prediction quality than other models.
     * *   `mobile-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.
     * *   `mobile-high-accuracy-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.  Expected to have a higher
     *               latency, but should also have a higher prediction quality
     *               than other models.
     * *   `mobile-core-ml-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards. Expected to have low latency, but may have
     *               lower prediction quality than other models.
     * *   `mobile-core-ml-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards.
     * *   `mobile-core-ml-high-accuracy-1` - A model that, in addition to
     *               providing prediction via AutoML API, can also be exported
     *               (see [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with
     *               Core ML afterwards.  Expected to have a higher latency, but
     *               should also have a higher prediction quality than other
     *               models.
     *
     * Generated from protobuf field <code>string model_type = 7;</code>
     */
    private $model_type = '';
    /**
     * Output only. An approximate number of online prediction QPS that can
     * be supported by this model per each node on which it is deployed.
     *
     * Generated from protobuf field <code>double node_qps = 13;</code>
     */
    private $node_qps = 0.0;
    /**
     * Output only. The number of nodes this model is deployed on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the node_qps field.
     *
     * Generated from protobuf field <code>int64 node_count = 14;</code>
     */
    private $node_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $base_model_id
     *           Optional. The ID of the `base` model. If it is specified, the new model
     *           will be created based on the `base` model. Otherwise, the new model will be
     *           created from scratch. The `base` model must be in the same
     *           `project` and `location` as the new model to create, and have the same
     *           `model_type`.
     *     @type int|string $train_budget
     *           Required. The train budget of creating this model, expressed in hours. The
     *           actual `train_cost` will be equal or less than this value.
     *     @type int|string $train_cost
     *           Output only. The actual train cost of creating this model, expressed in
     *           hours. If this model is created from a `base` model, the train cost used
     *           to create the `base` model are not included.
     *     @type string $stop_reason
     *           Output only. The reason that this create model operation stopped,
     *           e.g. `BUDGET_REACHED`, `MODEL_CONVERGED`.
     *     @type string $model_type
     *           Optional. Type of the model. The available values are:
     *           *   `cloud` - Model to be used via prediction calls to AutoML API.
     *                         This is the default value.
     *           *   `mobile-low-latency-1` - A model that, in addition to providing
     *                         prediction via AutoML API, can also be exported (see
     *                         [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *                         with TensorFlow afterwards. Expected to have low latency, but
     *                         may have lower prediction quality than other models.
     *           *   `mobile-versatile-1` - A model that, in addition to providing
     *                         prediction via AutoML API, can also be exported (see
     *                         [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *                         with TensorFlow afterwards.
     *           *   `mobile-high-accuracy-1` - A model that, in addition to providing
     *                         prediction via AutoML API, can also be exported (see
     *                         [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *                         with TensorFlow afterwards.  Expected to have a higher
     *                         latency, but should also have a higher prediction quality
     *                         than other models.
     *           *   `mobile-core-ml-low-latency-1` - A model that, in addition to providing
     *                         prediction via AutoML API, can also be exported (see
     *                         [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *                         ML afterwards. Expected to have low latency, but may have
     *                         lower prediction quality than other models.
     *           *   `mobile-core-ml-versatile-1` - A model that, in addition to providing
     *                         prediction via AutoML API, can also be exported (see
     *                         [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *                         ML afterwards.
     *           *   `mobile-core-ml-high-accuracy-1` - A model that, in addition to
     *                         providing prediction via AutoML API, can also be exported
     *                         (see [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with
     *                         Core ML afterwards.  Expected to have a higher latency, but
     *                         should also have a higher prediction quality than other
     *                         models.
     *     @type float $node_qps
     *           Output only. An approximate number of online prediction QPS that can
     *           be supported by this model per each node on which it is deployed.
     *     @type int|string $node_count
     *           Output only. The number of nodes this model is deployed on. A node is an
     *           abstraction of a machine resource, which can handle online prediction QPS
     *           as given in the node_qps field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Image::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The ID of the `base` model. If it is specified, the new model
     * will be created based on the `base` model. Otherwise, the new model will be
     * created from scratch. The `base` model must be in the same
     * `project` and `location` as the new model to create, and have the same
     * `model_type`.
     *
     * Generated from protobuf field <code>string base_model_id = 1;</code>
     * @return string
     */
    public function getBaseModelId()
    {
        return $this->base_model_id;
    }

    /**
     * Optional. The ID of the `base` model. If it is specified, the new model
     * will be created based on the `base` model. Otherwise, the new model will be
     * created from scratch. The `base` model must be in the same
     * `project` and `location` as the new model to create, and have the same
     * `model_type`.
     *
     * Generated from protobuf field <code>string base_model_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseModelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_model_id = $var;

        return $this;
    }

    /**
     * Required. The train budget of creating this model, expressed in hours. The
     * actual `train_cost` will be equal or less than this value.
     *
     * Generated from protobuf field <code>int64 train_budget = 2;</code>
     * @return int|string
     */
    public function getTrainBudget()
    {
        return $this->train_budget;
    }

    /**
     * Required. The train budget of creating this model, expressed in hours. The
     * actual `train_cost` will be equal or less than this value.
     *
     * Generated from protobuf field <code>int64 train_budget = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTrainBudget($var)
    {
        GPBUtil::checkInt64($var);
        $this->train_budget = $var;

        return $this;
    }

    /**
     * Output only. The actual train cost of creating this model, expressed in
     * hours. If this model is created from a `base` model, the train cost used
     * to create the `base` model are not included.
     *
     * Generated from protobuf field <code>int64 train_cost = 3;</code>
     * @return int|string
     */
    public function getTrainCost()
    {
        return $this->train_cost;
    }

    /**
     * Output only. The actual train cost of creating this model, expressed in
     * hours. If this model is created from a `base` model, the train cost used
     * to create the `base` model are not included.
     *
     * Generated from protobuf field <code>int64 train_cost = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTrainCost($var)
    {
        GPBUtil::checkInt64($var);
        $this->train_cost = $var;

        return $this;
    }

    /**
     * Output only. The reason that this create model operation stopped,
     * e.g. `BUDGET_REACHED`, `MODEL_CONVERGED`.
     *
     * Generated from protobuf field <code>string stop_reason = 5;</code>
     * @return string
     */
    public function getStopReason()
    {
        return $this->stop_reason;
    }

    /**
     * Output only. The reason that this create model operation stopped,
     * e.g. `BUDGET_REACHED`, `MODEL_CONVERGED`.
     *
     * Generated from protobuf field <code>string stop_reason = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStopReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_reason = $var;

        return $this;
    }

    /**
     * Optional. Type of the model. The available values are:
     * *   `cloud` - Model to be used via prediction calls to AutoML API.
     *               This is the default value.
     * *   `mobile-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards. Expected to have low latency, but
     *               may have lower prediction quality than other models.
     * *   `mobile-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.
     * *   `mobile-high-accuracy-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.  Expected to have a higher
     *               latency, but should also have a higher prediction quality
     *               than other models.
     * *   `mobile-core-ml-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards. Expected to have low latency, but may have
     *               lower prediction quality than other models.
     * *   `mobile-core-ml-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards.
     * *   `mobile-core-ml-high-accuracy-1` - A model that, in addition to
     *               providing prediction via AutoML API, can also be exported
     *               (see [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with
     *               Core ML afterwards.  Expected to have a higher latency, but
     *               should also have a higher prediction quality than other
     *               models.
     *
     * Generated from protobuf field <code>string model_type = 7;</code>
     * @return string
     */
    public function getModelType()
    {
        return $this->model_type;
    }

    /**
     * Optional. Type of the model. The available values are:
     * *   `cloud` - Model to be used via prediction calls to AutoML API.
     *               This is the default value.
     * *   `mobile-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards. Expected to have low latency, but
     *               may have lower prediction quality than other models.
     * *   `mobile-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.
     * *   `mobile-high-accuracy-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile or edge device
     *               with TensorFlow afterwards.  Expected to have a higher
     *               latency, but should also have a higher prediction quality
     *               than other models.
     * *   `mobile-core-ml-low-latency-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards. Expected to have low latency, but may have
     *               lower prediction quality than other models.
     * *   `mobile-core-ml-versatile-1` - A model that, in addition to providing
     *               prediction via AutoML API, can also be exported (see
     *               [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with Core
     *               ML afterwards.
     * *   `mobile-core-ml-high-accuracy-1` - A model that, in addition to
     *               providing prediction via AutoML API, can also be exported
     *               (see [AutoMl.ExportModel][google.cloud.automl.v1beta1.AutoMl.ExportModel]) and used on a mobile device with
     *               Core ML afterwards.  Expected to have a higher latency, but
     *               should also have a higher prediction quality than other
     *               models.
     *
     * Generated from protobuf field <code>string model_type = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setModelType($var)
    {
        GPBUtil::checkString($var, True);
        $this->model_type = $var;

        return $this;
    }

    /**
     * Output only. An approximate number of online prediction QPS that can
     * be supported by this model per each node on which it is deployed.
     *
     * Generated from protobuf field <code>double node_qps = 13;</code>
     * @return float
     */
    public function getNodeQps()
    {
        return $this->node_qps;
    }

    /**
     * Output only. An approximate number of online prediction QPS that can
     * be supported by this model per each node on which it is deployed.
     *
     * Generated from protobuf field <code>double node_qps = 13;</code>
     * @param float $var
     * @return $this
     */
    public function setNodeQps($var)
    {
        GPBUtil::checkDouble($var);
        $this->node_qps = $var;

        return $this;
    }

    /**
     * Output only. The number of nodes this model is deployed on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the node_qps field.
     *
     * Generated from protobuf field <code>int64 node_count = 14;</code>
     * @return int|string
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * Output only. The number of nodes this model is deployed on. A node is an
     * abstraction of a machine resource, which can handle online prediction QPS
     * as given in the node_qps field.
     *
     * Generated from protobuf field <code>int64 node_count = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->node_count = $var;

        return $this;
    }

}

