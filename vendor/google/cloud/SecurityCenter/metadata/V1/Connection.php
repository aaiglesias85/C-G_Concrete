<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/connection.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class Connection
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
/google/cloud/securitycenter/v1/connection.protogoogle.cloud.securitycenter.v1"�

Connection
destination_ip (	
destination_port (
	source_ip (	
source_port (E
protocol (23.google.cloud.securitycenter.v1.Connection.Protocol"R
Protocol
PROTOCOL_UNSPECIFIED 
ICMP
TCP
UDP
GRE/
ESP2B�
"com.google.cloud.securitycenter.v1BConnectionProtoPZLgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1;securitycenter�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

