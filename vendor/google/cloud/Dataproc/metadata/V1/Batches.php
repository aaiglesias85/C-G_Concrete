<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/batches.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Batches
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/cloud/dataproc/v1/batches.protogoogle.cloud.dataproc.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto%google/cloud/dataproc/v1/shared.proto#google/longrunning/operations.protogoogle/protobuf/empty.protogoogle/protobuf/timestamp.proto"�
CreateBatchRequest5
parent (	B%�A�Adataproc.googleapis.com/Batch3
batch (2.google.cloud.dataproc.v1.BatchB�A
batch_id (	B�A

request_id (	B�A"F
GetBatchRequest3
name (	B%�A�A
dataproc.googleapis.com/Batch"|
ListBatchesRequest5
parent (	B%�A�Adataproc.googleapis.com/Batch
	page_size (B�A

page_token (	B�A"`
ListBatchesResponse0
batches (2.google.cloud.dataproc.v1.Batch
next_page_token (	"I
DeleteBatchRequest3
name (	B%�A�A
dataproc.googleapis.com/Batch"�

Batch
name (	B�A
uuid (	B�A4
create_time (2.google.protobuf.TimestampB�AD
pyspark_batch (2&.google.cloud.dataproc.v1.PySparkBatchB�AH @
spark_batch (2$.google.cloud.dataproc.v1.SparkBatchB�AH C
spark_r_batch (2%.google.cloud.dataproc.v1.SparkRBatchB�AH G
spark_sql_batch (2\'.google.cloud.dataproc.v1.SparkSqlBatchB�AH @
runtime_info (2%.google.cloud.dataproc.v1.RuntimeInfoB�A9
state	 (2%.google.cloud.dataproc.v1.Batch.StateB�A
state_message
 (	B�A3

state_time (2.google.protobuf.TimestampB�A
creator (	B�A@
labels (2+.google.cloud.dataproc.v1.Batch.LabelsEntryB�AD
runtime_config (2\'.google.cloud.dataproc.v1.RuntimeConfigB�AL
environment_config (2+.google.cloud.dataproc.v1.EnvironmentConfigB�A
	operation (	B�AH
state_history (2,.google.cloud.dataproc.v1.Batch.StateHistoryB�A�
StateHistory9
state (2%.google.cloud.dataproc.v1.Batch.StateB�A
state_message (	B�A9
state_start_time (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8"r
State
STATE_UNSPECIFIED 
PENDING
RUNNING

CANCELLING
	CANCELLED
	SUCCEEDED

FAILED:[�AX
dataproc.googleapis.com/Batch7projects/{project}/locations/{location}/batches/{batch}B
batch_config"�
PySparkBatch!
main_python_file_uri (	B�A
args (	B�A
python_file_uris (	B�A
jar_file_uris (	B�A
	file_uris (	B�A
archive_uris (	B�A"�

SparkBatch 
main_jar_file_uri (	B�AH 

main_class (	B�AH 
args (	B�A
jar_file_uris (	B�A
	file_uris (	B�A
archive_uris (	B�AB
driver"q
SparkRBatch
main_r_file_uri (	B�A
args (	B�A
	file_uris (	B�A
archive_uris (	B�A"�
SparkSqlBatch
query_file_uri (	B�AY
query_variables (2;.google.cloud.dataproc.v1.SparkSqlBatch.QueryVariablesEntryB�A
jar_file_uris (	B�A5
QueryVariablesEntry
key (	
value (	:82�
BatchController�
CreateBatch,.google.cloud.dataproc.v1.CreateBatchRequest.google.longrunning.Operation"����4"+/v1/{parent=projects/*/locations/*}/batches:batch�Aparent,batch,batch_id�A8
Batch/google.cloud.dataproc.v1.BatchOperationMetadata�
GetBatch).google.cloud.dataproc.v1.GetBatchRequest.google.cloud.dataproc.v1.Batch":���-+/v1/{name=projects/*/locations/*/batches/*}�Aname�
ListBatches,.google.cloud.dataproc.v1.ListBatchesRequest-.google.cloud.dataproc.v1.ListBatchesResponse"<���-+/v1/{parent=projects/*/locations/*}/batches�Aparent�
DeleteBatch,.google.cloud.dataproc.v1.DeleteBatchRequest.google.protobuf.Empty":���-*+/v1/{name=projects/*/locations/*/batches/*}�AnameK�Adataproc.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBp
com.google.cloud.dataproc.v1BBatchesProtoPZ@google.golang.org/genproto/googleapis/cloud/dataproc/v1;dataprocbproto3'
        , true);

        static::$is_initialized = true;
    }
}

