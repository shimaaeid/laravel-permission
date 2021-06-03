<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendee;
use App\Models\Venue;
use App\Models\Conference;
use  App\Http\Requests\ConferenceRequest;
use Illuminate\Support\Facades\Validator;
use DB;

class ConferencesController extends Controller
{

    public function index(){
        $conference =  DB::table('conferences')
                         ->leftJoin('attendees', 'attendees.id', '=', 'conferences.attendee_id')
                         ->leftJoin('venues', 'venues.id', '=', 'conferences.venue_id')
                         ->select('conferences.date', 'conferences.time', 'conferences.id','conferences.duration','conferences.subject','attendees.attendee_name','venues.name')
                         ->get();
        return view('admin/conferences/index', compact('conference'));
    }

    public function create(){
        $venues = Venue::all();
        $attendee = Attendee::all();
        return view('admin/conferences/create', compact(['attendee','venues']));
    }

    public function store(Request $request){
        $rules = [
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'subject' => 'required',
            'venue_id' => 'required',
            'attendee_id' => 'required'
          ];

          $message = [
              'subject.required' => 'required'
          ];

          $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back('admin/conferences/create')->withErrors($validator);
        }

        Conference::create([
            'date' => $request->date,
            'time' => $request->time,
            'duration' => $request->duration,
            'subject' => $request->subject,
            'venue_id' => $request->venue_id,
            'attendee_id' => $request->attendee_id
        ]);
        return redirect()->route('conferences.index');
    }

    
    public function edit($id){
        $venues = Venue::all();
        $attendee = Attendee::all();
        $conference = Conference::where('id', $id)->select('id','date', 'time', 'duration', 'subject','venue_id', 'attendee_id')->first();
        return view('admin/conferences/edit',  compact(['attendee','venues','conference']));
    }

    public function update(Request $request, $id){

        $rules = [
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'subject' => 'required',
            'venue_id' => 'required',
            'attendee_id' => 'required'
          ];

          $message = [
              'subject.required' => 'required'
          ];

          $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()) {
            return redirect()->back('admin/conferences/create')->withErrors($validator);
        }

        Conference::where('id' , $id)->update([

            'date' => $request->date,
            'time' => $request->time,
            'duration' => $request->duration,
            'subject' => $request->subject,
            'venue_id' => $request->venue_id,
            'attendee_id' => $request->attendee_id
        ]);

        return redirect()->route('conferences.index');

    }

    public function delete($id){

        Conference::where('id', $id)->delete();

        return redirect()->route('conferences.index');

    }
}
