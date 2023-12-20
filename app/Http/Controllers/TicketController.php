<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        Ticket::create([
            'name' => $request->name,
            'date_time' => $request->date_time,
            'count' => $request->count,
            'price' => $request->price,
            'user_id' => $request->user_id,
            'event_id' => $request->event_id,
        ]);
        if ($request->bonuses) {
            Auth::user()->bonuses += $request->price * 0.01;
            Auth::user()->save();
        }

        return redirect('cabinet');
    }
    public function destroy(Request $request)
    {

        $ticket = Ticket::find($request->id);
        $event = Event::find($request->event_id);
        if ($event->bonuses) {
            Auth::user()->bonuses -= $request->price * 0.01;
            Auth::user()->save();
        }
        if ($ticket) {
            $ticket->delete();
        }
        return redirect()->route('cabinet');
    }
}
