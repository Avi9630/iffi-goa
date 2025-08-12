<?php

namespace App\Http\Controllers;

use App\Models\MasterClassTopic;
use App\Models\MasterDate;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MasterClassController extends Controller
{
    function index()
    {
        $dates = MasterDate::orderBy('date')->get();
        $topics = MasterClassTopic::with(['masterClass', 'speakers', 'moderators', 'masterDate'])->get();
        
        foreach ($dates as $date) {
            $formattedDateKey = strtolower(date('M', strtotime($date->date))) . date('d', strtotime($date->date));
            $modalData[$formattedDateKey] = [];

            foreach ($topics->where('master_date_id', $date->id) as $topic) {
                $modalData[$formattedDateKey][] = [
                    'title' => $topic->title,
                    'moderator' => optional($topic->moderators->first())->moderator_name ?? 'TBD',
                    'panel' => $topic->panel_type,
                    'date' => date('M jS, Y, h.i A', strtotime($date->date)) . ' TO ' . date('h.i A', strtotime($topic->end_time)),
                    'speakers' => $topic->speakers
                        ->map(function ($speaker) {
                            return [
                                'name' => $speaker->speaker_name,
                                'description' => $speaker->speaker_detail,
                                'image' => asset('public/images/master-class/' . $speaker->image_name),
                            ];
                        })
                        ->toArray(),
                ];
            }
        }

        // dd(json_encode($modalData, true));

        // dd($topics);
        // return view('master', compact('dates', 'topics'));
        return view('master',[
            'modalData' => json_encode($modalData),
            'dates' => $dates,
            'topics' => $topics,
        ]);
    }
}
