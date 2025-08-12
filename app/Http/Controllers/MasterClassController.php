<?php

namespace App\Http\Controllers;

use App\Models\MasterClassTopic;
use App\Models\MasterDate;

class MasterClassController extends Controller
{
    function index()
    {
        $dates = MasterDate::orderBy('date')->get();
        $topics = MasterClassTopic::with(['masterClass', 'speakers', 'moderators', 'masterDate'])->get();
        $modalData = [];
        foreach ($dates as $date) {
            $key = strtolower(date('M', strtotime($date->date))) . date('d', strtotime($date->date));
            $modalData[$key] = [];
            foreach ($topics->where('master_date_id', $date->id) as $topic) {
                $eventDate = $topic->masterDate->date;
                $startDateTime = $eventDate . ' ' . $topic->masterClass->start_time;
                $endDateTime = $eventDate . ' ' . $topic->masterClass->end_time;
                $fullDate = date('F jS, Y', strtotime($eventDate));
                $timeRange = date('h.i A', strtotime($startDateTime)) . ' TO ' . date('h.i A', strtotime($endDateTime));
                $modalData[$key][] = [
                    'title' => $topic->title,
                    'moderator' => optional($topic->moderators->first())->moderator_name ?: '',
                    'panel' => $topic->masterClass->format,
                    'date' => $fullDate . ' ' . $timeRange,
                    'speakers' => $topic->speakers
                        ->map(
                            fn($s) => [
                                'name' => $s->speaker_name,
                                'description' => $s->speaker_detail,
                                'image' => asset("public/images/master-class/{$s->image_name}"),
                            ],
                        )
                        ->toArray(),
                ];
            }
        }
        return view('master', [
            'dates' => $dates,
            'topics' => $topics,
            'modalData' => json_encode($modalData, JSON_PRETTY_PRINT),
        ]);
    }
}
