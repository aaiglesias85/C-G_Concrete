<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace GPBMetadata\Google\Cloud\Recaptchaenterprise\V1;

class Recaptchaenterprise
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
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�Q
=google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto#google.cloud.recaptchaenterprise.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
CreateAssessmentRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH

assessment (2/.google.cloud.recaptchaenterprise.v1.AssessmentB�A"�
AnnotateAssessmentRequestC
name (	B5�A�A/
-recaptchaenterprise.googleapis.com/Assessmentb

annotation (2I.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.AnnotationB�A[
reasons (2E.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest.ReasonB�A
hashed_account_id (B�A"~

Annotation
ANNOTATION_UNSPECIFIED 

LEGITIMATE

FRAUDULENT
PASSWORD_CORRECT
PASSWORD_INCORRECT"�
Reason
REASON_UNSPECIFIED 

CHARGEBACK
CHARGEBACK_FRAUD
CHARGEBACK_DISPUTE	
PAYMENT_HEURISTICS
INITIATED_TWO_FACTOR
PASSED_TWO_FACTOR
FAILED_TWO_FACTOR
CORRECT_PASSWORD
INCORRECT_PASSWORD"
AnnotateAssessmentResponse"�

Assessment
name (	B�A9
event (2*.google.cloud.recaptchaenterprise.v1.EventM
risk_analysis (21.google.cloud.recaptchaenterprise.v1.RiskAnalysisB�AS
token_properties (24.google.cloud.recaptchaenterprise.v1.TokenPropertiesB�Ac
account_defender_assessment (2>.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment:_�A\\
-recaptchaenterprise.googleapis.com/Assessment+projects/{project}/assessments/{assessment}"�
Event
token (	B�A
site_key (	B�A

user_agent (	B�A
user_ip_address (	B�A
expected_action (	B�A
hashed_account_id (B�A"�
RiskAnalysis
score (W
reasons (2F.google.cloud.recaptchaenterprise.v1.RiskAnalysis.ClassificationReason"�
ClassificationReason%
!CLASSIFICATION_REASON_UNSPECIFIED 

AUTOMATION
UNEXPECTED_ENVIRONMENT
TOO_MUCH_TRAFFIC
UNEXPECTED_USAGE_PATTERNS
LOW_CONFIDENCE_SCORE"�
TokenProperties
valid (Z
invalid_reason (2B.google.cloud.recaptchaenterprise.v1.TokenProperties.InvalidReason/
create_time (2.google.protobuf.Timestamp
hostname (	
action (	"�
InvalidReason
INVALID_REASON_UNSPECIFIED 
UNKNOWN_INVALID_REASON
	MALFORMED
EXPIRED
DUPE
MISSING
BROWSER_ERROR"�
AccountDefenderAssessmentc
labels (2S.google.cloud.recaptchaenterprise.v1.AccountDefenderAssessment.AccountDefenderLabel"�
AccountDefenderLabel&
"ACCOUNT_DEFENDER_LABEL_UNSPECIFIED 
PROFILE_MATCH
SUSPICIOUS_LOGIN_ACTIVITY
SUSPICIOUS_ACCOUNT_CREATION 
RELATED_ACCOUNTS_NUMBER_HIGH"�
CreateKeyRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A"�
ListKeysRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project
	page_size (B�A

page_token (	B�A"c
ListKeysResponse6
keys (2(.google.cloud.recaptchaenterprise.v1.Key
next_page_token (	"M
GetKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"�
UpdateKeyRequest:
key (2(.google.cloud.recaptchaenterprise.v1.KeyB�A4
update_mask (2.google.protobuf.FieldMaskB�A"P
DeleteKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"Q
MigrateKeyRequest<
name (	B.�A�A(
&recaptchaenterprise.googleapis.com/Key"U
GetMetricsRequest@
name (	B2�A�A,
*recaptchaenterprise.googleapis.com/Metrics"�
Metrics
name (	B�A.

start_time (2.google.protobuf.TimestampH
score_metrics (21.google.cloud.recaptchaenterprise.v1.ScoreMetricsP
challenge_metrics (25.google.cloud.recaptchaenterprise.v1.ChallengeMetrics:V�AS
*recaptchaenterprise.googleapis.com/Metrics%projects/{project}/keys/{key}/metrics"�
Key
name (	
display_name (	K
web_settings (23.google.cloud.recaptchaenterprise.v1.WebKeySettingsH S
android_settings (27.google.cloud.recaptchaenterprise.v1.AndroidKeySettingsH K
ios_settings (23.google.cloud.recaptchaenterprise.v1.IOSKeySettingsH D
labels (24.google.cloud.recaptchaenterprise.v1.Key.LabelsEntry/
create_time (2.google.protobuf.TimestampL
testing_options	 (23.google.cloud.recaptchaenterprise.v1.TestingOptions-
LabelsEntry
key (	
value (	:8:J�AG
&recaptchaenterprise.googleapis.com/Keyprojects/{project}/keys/{key}B
platform_settings"�
TestingOptions
testing_score (_
testing_challenge (2D.google.cloud.recaptchaenterprise.v1.TestingOptions.TestingChallenge"^
TestingChallenge!
TESTING_CHALLENGE_UNSPECIFIED 
	NOCAPTCHA
UNSOLVABLE_CHALLENGE"�
WebKeySettings
allow_all_domains (
allowed_domains (	
allow_amp_traffic (b
integration_type (2C.google.cloud.recaptchaenterprise.v1.WebKeySettings.IntegrationTypeB�Av
challenge_security_preference (2O.google.cloud.recaptchaenterprise.v1.WebKeySettings.ChallengeSecurityPreference"[
IntegrationType 
INTEGRATION_TYPE_UNSPECIFIED 	
SCORE
CHECKBOX
	INVISIBLE"v
ChallengeSecurityPreference-
)CHALLENGE_SECURITY_PREFERENCE_UNSPECIFIED 
	USABILITY
BALANCE
SECURITY"T
AndroidKeySettings
allow_all_package_names (
allowed_package_names (	"J
IOSKeySettings
allow_all_bundle_ids (
allowed_bundle_ids (	"�
ScoreDistribution_
score_buckets (2H.google.cloud.recaptchaenterprise.v1.ScoreDistribution.ScoreBucketsEntry3
ScoreBucketsEntry
key (
value (:8"�
ScoreMetricsO
overall_metrics (26.google.cloud.recaptchaenterprise.v1.ScoreDistribution\\
action_metrics (2D.google.cloud.recaptchaenterprise.v1.ScoreMetrics.ActionMetricsEntryl
ActionMetricsEntry
key (	E
value (26.google.cloud.recaptchaenterprise.v1.ScoreDistribution:8"o
ChallengeMetrics
pageload_count (
nocaptcha_count (
failed_count (
passed_count ("�
)ListRelatedAccountGroupMembershipsRequestX
parent (	BH�A�AB@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembership
	page_size (B�A

page_token (	B�A"�
*ListRelatedAccountGroupMembershipsResponsem
!related_account_group_memberships (2B.google.cloud.recaptchaenterprise.v1.RelatedAccountGroupMembership
next_page_token (	"�
ListRelatedAccountGroupsRequestN
parent (	B>�A�A86recaptchaenterprise.googleapis.com/RelatedAccountGroup
	page_size (B�A

page_token (	B�A"�
 ListRelatedAccountGroupsResponseX
related_account_groups (28.google.cloud.recaptchaenterprise.v1.RelatedAccountGroup
next_page_token (	"�
+SearchRelatedAccountGroupMembershipsRequestX
parent (	BH�A�AB@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembership
hashed_account_id (B�A
	page_size (B�A

page_token (	B�A"�
,SearchRelatedAccountGroupMembershipsResponsem
!related_account_group_memberships (2B.google.cloud.recaptchaenterprise.v1.RelatedAccountGroupMembership
next_page_token (	"�
RelatedAccountGroupMembershipV
name (	BH�A�AB
@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembership
hashed_account_id (:��A�
@recaptchaenterprise.googleapis.com/RelatedAccountGroupMembershipVprojects/{project}/relatedaccountgroups/{relatedaccountgroup}/memberships/{membership}"�
RelatedAccountGroupL
name (	B>�A�A8
6recaptchaenterprise.googleapis.com/RelatedAccountGroup:z�Aw
6recaptchaenterprise.googleapis.com/RelatedAccountGroup=projects/{project}/relatedaccountgroups/{relatedaccountgroup}2�
RecaptchaEnterpriseService�
CreateAssessment<.google.cloud.recaptchaenterprise.v1.CreateAssessmentRequest/.google.cloud.recaptchaenterprise.v1.Assessment"K���1"#/v1/{parent=projects/*}/assessments:
assessment�Aparent,assessment�
AnnotateAssessment>.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentRequest?.google.cloud.recaptchaenterprise.v1.AnnotateAssessmentResponse"I���1",/v1/{name=projects/*/assessments/*}:annotate:*�Aname,annotation�
	CreateKey5.google.cloud.recaptchaenterprise.v1.CreateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key")���#"/v1/{parent=projects/*}/keys:key�
ListKeys4.google.cloud.recaptchaenterprise.v1.ListKeysRequest5.google.cloud.recaptchaenterprise.v1.ListKeysResponse"$���/v1/{parent=projects/*}/keys�
GetKey2.google.cloud.recaptchaenterprise.v1.GetKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"$���/v1/{name=projects/*/keys/*}�
	UpdateKey5.google.cloud.recaptchaenterprise.v1.UpdateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"-���\'2 /v1/{key.name=projects/*/keys/*}:key�
	DeleteKey5.google.cloud.recaptchaenterprise.v1.DeleteKeyRequest.google.protobuf.Empty"$���*/v1/{name=projects/*/keys/*}�

MigrateKey6.google.cloud.recaptchaenterprise.v1.MigrateKeyRequest(.google.cloud.recaptchaenterprise.v1.Key"/���)"$/v1/{name=projects/*/keys/*}:migrate:*�

GetMetrics6.google.cloud.recaptchaenterprise.v1.GetMetricsRequest,.google.cloud.recaptchaenterprise.v1.Metrics"3���&$/v1/{name=projects/*/keys/*/metrics}�Aname�
ListRelatedAccountGroupsD.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupsRequestE.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupsResponse"=���.,/v1/{parent=projects/*}/relatedaccountgroups�Aparent�
"ListRelatedAccountGroupMembershipsN.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupMembershipsRequestO.google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupMembershipsResponse"K���<:/v1/{parent=projects/*/relatedaccountgroups/*}/memberships�Aparent�
$SearchRelatedAccountGroupMembershipsP.google.cloud.recaptchaenterprise.v1.SearchRelatedAccountGroupMembershipsRequestQ.google.cloud.recaptchaenterprise.v1.SearchRelatedAccountGroupMembershipsResponse"c���B"=/v1/{parent=projects/*}/relatedaccountgroupmemberships:search:*�Aparent,hashed_account_idV�A"recaptchaenterprise.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
!com.google.recaptchaenterprise.v1BRecaptchaEnterpriseProtoPZVgoogle.golang.org/genproto/googleapis/cloud/recaptchaenterprise/v1;recaptchaenterprise�GCRE�#Google.Cloud.RecaptchaEnterprise.V1�#Google\\Cloud\\RecaptchaEnterprise\\V1�&Google::Cloud::RecaptchaEnterprise::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

