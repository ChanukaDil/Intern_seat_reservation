<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Crud;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;


class AttendanceController extends Controller
{

    public function index()
    {
        $users = Crud::all();

        return view('attendance', compact('users'));
    }

public function store(Request $request)
{
    $request->validate([
        'attendance.*.username' => 'required|string',
        'attendance.*.date' => 'required|date',
        'attendance.*.present' => 'boolean',
    ]);

    foreach ($request->attendance as $attendanceData) {
        Attendance::create([
            'username' => $attendanceData['username'],
            'date' => $attendanceData['date'],
            'present' => isset($attendanceData['present']) ? $attendanceData['present'] : false,
        ]);
    }

    return redirect()->back()->with('success', 'Attendance marked successfully!');
}
public function search(Request $request)
    {
        // Validate the request input
        $validated = $request->validate([
            'date' => 'required|date',
        ]);

        // Retrieve the validated date
        $date = $validated['date'];

        // Fetch attendance records for the specified date
        $attendances = Attendance::whereDate('date', $date)->get();

        // Return the search view with attendance records and the date
        return view('search', compact('attendances', 'date'));
    }


}
