@extends('layouts.app1')

@section('content')
<div class="container">
    <h1 class="text-center " style="background-color: #1d8b37; ">Attendance Records for  {{ $date }}</h1>

    @if($attendances->isEmpty())
        <p>No attendance records found for this date.</p>
    @else
        <table class="table" style="background-color: lightgreen;">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Date</th>
                    <th>Present</th>
                </tr>
            </thead>
            <tbody>
                @foreach($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->username }}</td>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->present ? 'Present' : 'Absent' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('Viewattendance') }}'">
        back
    </button>
</div>
@endsection