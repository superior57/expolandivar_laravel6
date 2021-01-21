<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display event list
     * 
     * @return Illuminate\Http\Response
     */
    public function event()
    {
        $event_list = Event::get();
        return view('event.index', ['event_list' => $event_list]);
    }
    /**
     * Display specific event
     * 
     * @param int $id
     * @return Illuminate\Http\Response
     */
    public function eventDetails($id)
    {
        $event = Event::where(['id' => $id])->first();
        if (!$event) {
            return redirect('events')->with('error', 'Item not found');
        }
        return view('event.details', ['event' => $event]);
    }
}
