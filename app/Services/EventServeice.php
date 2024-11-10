<?php

namespace App\Services;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class EventService
{
    public static function checkEventDuplication($eventDate,$statTime,$endTime)
    {
        return DB::table('events')
            ->whereDate('start_date', $eventDate)
            ->whereTime('end_date', '>', $statTime)
            ->whereTime('start_date', '<', $endTime)
            ->exists();
            
    }

    public static function joinDateAndTime($date , $time)
    {
        $join = $date . " " . $time;
        return Carbon::createFromFormat('Y-m-d H:i', $join);
    }
}
