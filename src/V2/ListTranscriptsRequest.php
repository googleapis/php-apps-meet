<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2/service.proto

namespace Google\Apps\Meet\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for ListTranscripts method.
 *
 * Generated from protobuf message <code>google.apps.meet.v2.ListTranscriptsRequest</code>
 */
class ListTranscriptsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format: `conferenceRecords/{conference_record}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of transcripts to return. The service might return fewer
     * than this value.
     * If unspecified, at most 10 transcripts are returned.
     * The maximum value is 100; values above 100 are coerced to 100.
     * Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Format: `conferenceRecords/{conference_record}`
     *                       Please see {@see ConferenceRecordsServiceClient::conferenceRecordName()} for help formatting this field.
     *
     * @return \Google\Apps\Meet\V2\ListTranscriptsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Format: `conferenceRecords/{conference_record}`
     *     @type int $page_size
     *           Maximum number of transcripts to return. The service might return fewer
     *           than this value.
     *           If unspecified, at most 10 transcripts are returned.
     *           The maximum value is 100; values above 100 are coerced to 100.
     *           Maximum might change in the future.
     *     @type string $page_token
     *           Page token returned from previous List Call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format: `conferenceRecords/{conference_record}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Format: `conferenceRecords/{conference_record}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of transcripts to return. The service might return fewer
     * than this value.
     * If unspecified, at most 10 transcripts are returned.
     * The maximum value is 100; values above 100 are coerced to 100.
     * Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of transcripts to return. The service might return fewer
     * than this value.
     * If unspecified, at most 10 transcripts are returned.
     * The maximum value is 100; values above 100 are coerced to 100.
     * Maximum might change in the future.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token returned from previous List Call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

