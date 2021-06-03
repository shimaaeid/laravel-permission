<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $conference =  DB::table('conferences')
        ->leftJoin('attendees', 'attendees.id', '=', 'conferences.attendee_id')
        ->leftJoin('venues', 'venues.id', '=', 'conferences.venue_id')
        ->select('conferences.date', 'conferences.time', 'conferences.id','conferences.duration','conferences.subject','attendees.attendee_name','venues.name')
        ->get();
        return view('home', compact('conference'));
    }
}
