<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeatController extends Controller
{
    public function index(Request $request)
    {
        // Get selected date or default to today's date
        $date = $request->input('date', now()->format('Y-m-d'));

        // Fetch seats for the selected date
        $seats = Seat::where('date', $date)->get();
    
        
        // Pass the seats and date to the view
        return view('pages.home.res', compact('seats', 'date'));

        dd($seats); // Add this line

    }

    public function bookSeat(Request $request)
    {
        $seat = Seat::where('id', $request->seat_id)->first();

        if ($seat->booked) {
            return back()->withErrors('Seat already booked');
        }

        if (Seat::where('date', $seat->date)->where('user_id', Auth::id())->exists()) {
            return back()->withErrors('You have already booked a seat for this date');
        }

        $seat->update([
            'booked' => true,
            'user_id' => Auth::id(),
        ]);

        return back()->with('success', 'Seat booked successfully');
    }
}
