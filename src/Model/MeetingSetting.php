<?php


namespace Omt\ZoomAPI\Model;


class MeetingSetting extends AbstractModel
{
    protected static $properties = [
        'host_video',
        'participant_video',
        'cn_meeting',
        'in_meeting',
        'join_before_host',
        'mute_upon_entry',
        'watermark',
        'use_pmi',
        'approval_type',
        'registration_type',
        'audio',
        'audio_recording',
        'enforce_login',
        'enforce_login_domains',
        'alternative_hosts',
        'close_registration',
        'waiting_room',
        'global_dial_in_countries',
        'global_dial_in_numbers',
        'contact_name',
        'contact_email',
        'registrants_confirmation_email',
        'registrants_email_notification',
        'meeting_authentication',
        'authentication_option',
        'authentication_domains',
    ];
}
