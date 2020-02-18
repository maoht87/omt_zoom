<?php


namespace Omt\ZoomAPI;


class ConstantDefine
{
    const MEETING_TYPE_INSTALL = 1;
    const MEETING_TYPE_SCHEDULED = 2;
    const MEETING_TYPE_NO_FIX_TIME = 3;
    const MEETING_TYPE_FIX_TIME = 8;

    const WEEK_DAY_SUN = 1;
    const WEEK_DAY_MON = 2;
    const WEEK_DAY_TUE = 3;
    const WEEK_DAY_WED = 4;
    const WEEK_DAY_THU = 5;
    const WEEK_DAY_FRI = 6;
    const WEEK_DAY_SAT = 7;

    const RECURRENCE_TYPE_DAILY = 1;
    const RECURRENCE_TYPE_WEEKLY = 2;
    const RECURRENCE_TYPE_MONTHLY = 3;

    const MONTHLY_WEEK_LAST = -1;
    const MONTHLY_WEEK_FIRST = 1;
    const MONTHLY_WEEK_SECOND = 2;
    const MONTHLY_WEEK_THIRD = 3;
    const MONTHLY_WEEK_FOURTH = 4;
}