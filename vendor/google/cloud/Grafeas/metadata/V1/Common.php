<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/common.proto

namespace GPBMetadata\Grafeas\V1;

class Common
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
grafeas/v1/common.proto
grafeas.v1"(

RelatedUrl
url (	
label (	"5
	Signature
	signature (
public_key_id (	"d
Envelope
payload (
payload_type (	1

signatures (2.grafeas.v1.EnvelopeSignature"/
EnvelopeSignature
sig (
keyid (	*�
NoteKind
NOTE_KIND_UNSPECIFIED 
VULNERABILITY	
BUILD	
IMAGE
PACKAGE

DEPLOYMENT
	DISCOVERY
ATTESTATION
UPGRADE

COMPLIANCE	
DSSE_ATTESTATION
BQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

