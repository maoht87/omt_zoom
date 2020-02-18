<?php


namespace Omt\ZoomAPI\Model;


class MeetingRecurrence extends AbstractModel
{

    protected static $properties = [
        'type',
        'repeat_interval',
        'weekly_days',
        'monthly_day',
        'monthly_week',
        'monthly_week_day',
        'end_times',
        'end_date_time',
    ];
}