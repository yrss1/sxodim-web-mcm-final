<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function main()
    {
        $events = Event::all();
        return view('main', compact('events'));
    }
    public function tickets()
    {
        return view('tickets');
    }
    public function paymentsShow(Event $event)
    {
        return view('payments.show', compact('event'));
    }
    public function cabinet()
    {
        $tickets = DB::table('tickets')
            ->where('user_id', Auth::user()->id)
            ->get();

        return view('cabinet', compact('tickets'));
    }
    public function cert()
    {
        return view('cert');
    }

    public function setCert(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->bonuses += $request->amount;
            $user->save();

            return redirect()->route('event.index');
        } else {
            return redirect()->back()->with('error', 'Пользователь не найден');
        }
    }
}
