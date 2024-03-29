<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venue;
use  App\Http\Requests\VenueRequest;

class VenuesController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:Venue-list|Venue-create|Venue-edit|Venue-delete', ['only' => ['index','show']]);
         $this->middleware('permission:Venue-create', ['only' => ['create','store']]);
         $this->middleware('permission:Venue-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Venue-delete', ['only' => ['destroy']]);
    }

    


    public function index(){

        $venues = Venue::all();
        return view('admin/venues/index', compact('venues'));
    }

    public function create(){

        return view('admin/venues/create');
    }

    public function store(VenueRequest $request){

        Venue::create([
            'name' => $request->name,
        ]);


        return redirect()->route('venues.index');
        
    }

    public function delete($id){

        Venue::where('id', $id)->delete();

        return redirect()->route('venues.index'); 

    }

    public function edit($id = null){

        $venue = Venue::where('id', $id)->select('id','name')->first();
        return view('admin/venues/edit', compact('venue'));
    }

    public function update(VenueRequest $request, $id){

        Venue::where('id',$id)->update([
            'name'  => $request->name
        ]);
        return redirect()->route('venues.index');
    }
}
