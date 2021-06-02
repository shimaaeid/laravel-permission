<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venue;
use  App\Http\Requests\VenueRequest;

class VenuesController extends Controller
{
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


        return redirect()->route('venus.index');

        
    }
}
