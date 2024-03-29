<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace GPBMetadata\Google\Apps\Meet\V2Beta;

class Resource
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&google/apps/meet/v2beta/resource.protogoogle.apps.meet.v2betagoogle/api/resource.protogoogle/protobuf/timestamp.proto"�
Space
name (	B�A
meeting_uri (	B�A
meeting_code (	B�A4
config (2$.google.apps.meet.v2beta.SpaceConfigD
active_conference (2).google.apps.meet.v2beta.ActiveConference:.�A+
meet.googleapis.com/Spacespaces/{space}"[
ActiveConferenceG
conference_record (	B,�A�A&
$meet.googleapis.com/ConferenceRecord"�
SpaceConfigD
access_type (2/.google.apps.meet.v2beta.SpaceConfig.AccessTypeQ
entry_point_access (25.google.apps.meet.v2beta.SpaceConfig.EntryPointAccess"P

AccessType
ACCESS_TYPE_UNSPECIFIED 
OPEN
TRUSTED

RESTRICTED"U
EntryPointAccess"
ENTRY_POINT_ACCESS_UNSPECIFIED 
ALL
CREATOR_APP_ONLY"�
ConferenceRecord
name (	B�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�A0
space (	B!�A�A
meet.googleapis.com/Space:u�Ar
$meet.googleapis.com/ConferenceRecord%conferenceRecords/{conference_record}*conferenceRecords2conferenceRecord"�
Participant>
signedin_user (2%.google.apps.meet.v2beta.SignedinUserH @
anonymous_user (2&.google.apps.meet.v2beta.AnonymousUserH 8

phone_user (2".google.apps.meet.v2beta.PhoneUserH 
name (	B�A<
earliest_start_time (2.google.protobuf.TimestampB�A8
latest_end_time (2.google.protobuf.TimestampB�A:��A~
meet.googleapis.com/Participant@conferenceRecords/{conference_record}/participants/{participant}*participants2participantB
user"�
ParticipantSession
name (	B�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A:��A�
&meet.googleapis.com/ParticipantSessionjconferenceRecords/{conference_record}/participants/{participant}/participantSessions/{participant_session}*participantSessions2participantSession"<
SignedinUser
user (	B�A
display_name (	B�A"*
AnonymousUser
display_name (	B�A"&
	PhoneUser
display_name (	B�A"�
	RecordingK
drive_destination (2).google.apps.meet.v2beta.DriveDestinationB�AH 
name (	B�A<
state (2(.google.apps.meet.v2beta.Recording.StateB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"J
State
STATE_UNSPECIFIED 
STARTED	
ENDED
FILE_GENERATED:w�At
meet.googleapis.com/Recording<conferenceRecords/{conference_record}/recordings/{recording}*
recordings2	recordingB
destination">
DriveDestination
file (	B�A

export_uri (	B�A"�

TranscriptI
docs_destination (2(.google.apps.meet.v2beta.DocsDestinationB�AH 
name (	B�A=
state (2).google.apps.meet.v2beta.Transcript.StateB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"J
State
STATE_UNSPECIFIED 
STARTED	
ENDED
FILE_GENERATED:|�Ay
meet.googleapis.com/Transcript>conferenceRecords/{conference_record}/transcripts/{transcript}*transcripts2
transcriptB
destination"A
DocsDestination
document (	B�A

export_uri (	B�A"�
TranscriptEntry
name (	B�A<
participant (	B\'�A�A!
meet.googleapis.com/Participant
text (	B�A
language_code (	B�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A:��A�
#meet.googleapis.com/TranscriptEntryNconferenceRecords/{conference_record}/transcripts/{transcript}/entries/{entry}*transcriptEntries2transcriptEntryB�
com.google.apps.meet.v2betaBResourceProtoPZ5cloud.google.com/go/apps/meet/apiv2beta/meetpb;meetpb�Google.Apps.Meet.V2Beta�Google\\Apps\\Meet\\V2beta�Google::Apps::Meet::V2betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

