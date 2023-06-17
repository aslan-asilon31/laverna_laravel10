<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function search(Request $request)
    {
        // dd($request);
        // Retrieve search parameters from the request
        $checkIn = $request->input('check_in');
        $checkOut = $request->input('check_out');
        $children = $request->input('children');
        $rooms = $request->input('rooms');

        $convertcheckIn = Carbon::createFromFormat('m/d/Y', $checkIn)->format('Y-m-d');
        $convertcheckkOut = Carbon::createFromFormat('m/d/Y', $checkOut)->format('Y-m-d');

        // dd($convertcheckIn);
        
        // Perform the search logic and retrieve the results
        $results = Room::whereBetween('check_in', [$convertcheckIn, $convertcheckkOut])
        ->orWhereBetween('check_out', [$convertcheckIn, $convertcheckkOut])
        ->get();
        
        
        
        // dd($results);
        
        // Pass the results to the view
        return view('visitor.result', compact('results'));
    }
}
