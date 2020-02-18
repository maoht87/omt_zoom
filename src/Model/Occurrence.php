<?php


namespace Omt\ZoomAPI\Model;


class Occurrence extends AbstractModel
{
    protected static $properties = [
        'occurrence_id',
        'start_time',
        'duration',
        'status'
    ];
}