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
        $date = $request->input('date', now()->format('Y-m-d'));

        $seats = Seat::where('date', $date)->get();

        return view('pages.home.res', compact('seats', 'date'));

        dd($seats);

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'numSeats' => 'required|integer|min:1',
            'reservationDate' => 'required|date',
        ]);

        $numSeats = $validated['numSeats'];
        $reservationDate = $validated['reservationDate'];
        for ($i = 1; $i <= $numSeats; $i++) {

            $seatNumber = 'A' . $i;
            Seat::create([
                'seat_number' => $seatNumber,
                'date' => $reservationDate,
                'booked' => false,
                'user_id' => null,
            ]);
        }
        return redirect()->back()->with('success', 'Seats added successfully!');
    }
    public function viewuser(){

        return view('viewuser');
    }

    public function viewBookedSeats(Request $request){

    $bookedSeats = Seat::where('booked', true)->get();

    return view('viewuser', compact('bookedSeats'));
}


public function viewBookedLoggedUserSeats(Request $request)
{
    $userId = auth()->id();

    $currentDate = now()->toDateString();

    $bookedSeats = Seat::where('booked', true)
                       ->where('user_id', $userId)
                       ->where('date', '>=', $currentDate)
                       ->get();

    return view('viewUserBookedSeats', compact('bookedSeats'));
}

public function cancelSeatReservation(Request $request, $seatId)
{
    $userId = auth()->id();

    $seat = Seat::where('id', $seatId)
                ->where('user_id', $userId)
                ->first();

    if (!$seat) {
        return back()->with('error', 'You do not have permission to cancel this reservation.');
    }
    $currentDate = now()->toDateString();
    $currentTime = now()->toTimeString();

    if ($seat->date > $currentDate || ($seat->date == $currentDate && $currentTime < '06:00:00')) {

        $seat->user_id = null;
        $seat->booked = false;
        $seat->save();

        return back()->with('success', 'Your seat reservation has been successfully canceled.');
    }
    return back()->with('error', 'You can only cancel today\'s reservations before 6:00 AM.');
}
public function Attendance(){

    return view('Attendance');
}
}
