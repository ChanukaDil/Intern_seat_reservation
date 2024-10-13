@extends('layouts.app1')

@section('content')
<div class="container">
    <h1 class="text-center" style="background-color: #1d8b37;">Attendance Records for {{ $date }}</h1>

    @if($attendances->isEmpty())
        <p>No attendance records found for this date.</p>
    @else
        <table class="table table-striped table-bordered" id="attendanceTable">
            <thead>
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
        Back
    </button>

    <button class="btn btn-secondary" type="button" onclick="printTable()">
        Print
    </button>
</div>

@section('scripts')
<script>
    function printTable() {
        // Create a new window for printing
        var printWindow = window.open('', '_blank');

        // Check if the new window opened successfully
        if (!printWindow) {
            alert('Please allow popups for this website to print the table.');
            return;
        }

        // Write the HTML content to the new window
        printWindow.document.write('<html><head><title>Attendance Records</title>');
        printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
        printWindow.document.write('</head><body>');  

        printWindow.document.write('<h1 class="text-center" style="background-color: #1d8b37;">Attendance Records for {{ $date }}</h1>');

        // Append the table HTML
        var tableHTML = document.getElementById('attendanceTable').outerHTML;
        printWindow.document.write(tableHTML);

        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Trigger printing when the new window is loaded
        printWindow.onload = function() {
            printWindow.print();
            printWindow.close();
        };
    }
</script>
@endsection
@endsection
