<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendee;
use  App\Http\Requests\AttendeeRequest;

class AttendeesController extends Controller
{
    public function index(){

        $attendees = Attendee::all();
        return view('admin/attendees.index', compact('attendees'));
    }

    public function create(){
        return view('admin/attendees.create');
    }

    public function store(AttendeeRequest $request){

        Attendee::create([
            'attendee_name' => $request->attendee_name,
            'mobile' => $request->mobile,
            'side' => $request->side
        ]);
        return redirect()->route('attendees.index');     
    }

    public function delete($id){

        Attendee::where('id', $id)->delete();

        return redirect()->route('attendees.index'); 

    }
}
