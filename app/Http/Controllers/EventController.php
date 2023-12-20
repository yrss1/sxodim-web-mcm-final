<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {
        $events = DB::table('events')->get();
        $random = Event::inRandomOrder()->take(3)->get();

        return view('event.index', compact('events', 'random'));
    }
    public function show(Event $event)
    {
        return view('event.show', compact('event'));
    }
    public function search(Request $request)
    {
        $query = Event::query();

        // Check if the date is provided in the request
        if ($request->has('date') and $request->date != '') {
            $query->whereDate('date_time', '=', $request->date);
        }

        if ($request->has('name') && $request->name != '') {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->date == '' and $request->name == ''){
            $events = Event::all();
        }else {
            $events = $query->get();
        }
        $random = Event::inRandomOrder()->take(3)->get();



        return view('event.index', compact('events', 'random'));
    }
}
