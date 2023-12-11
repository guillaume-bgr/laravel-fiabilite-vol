<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json(Flight::all());
    }
    
    public function show($id) {
        $itinerary = Flight::findOrFail($id);
        return response()->json($itinerary); 
    }

    public function create(Request $request) {
        $this->validate($request, [
            "total_flight_time"=> 'required',
        ]);
        return response()->json(Flight::create($request->all()), 201);
    }

    public function update($id, Request $request) {
        $itinerary = Flight::findOrFail($id);
        $itinerary->update($request->all());

        return response()->json($itinerary);
    }

    public function delete($id) {
        $itinerary = Flight::findOrFail($id);
        $itinerary->delete();

        return response()->json(['message' => "Flight deleted!"], 200);
    }
    
} 