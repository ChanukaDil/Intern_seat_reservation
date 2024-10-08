@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function updateDateForAllRows() {
            const selectedDate = document.getElementById('attendanceDate').value;
            const dateInputs = document.querySelectorAll('.attendanceDate');
            dateInputs.forEach(input => {
                input.value = selectedDate;
            });
        }
        document.addEventListener("DOMContentLoaded", function() {
            const datePicker = document.getElementById('attendanceDate');
            datePicker.addEventListener('change', updateDateForAllRows);
        });
    </script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center" style="background-color: #1d8b37;">Attendance Table</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('attendance.store') }}">
            @csrf
            <div class="form-group">
                <label for="attendanceDate" style="color: white;">Select Date:</label>
                <input type="date" id="attendanceDate" class="form-control" value="{{ date('Y-m-d') }}" max="{{ date('Y-m-d') }}">
            </div>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Date</th>
                        <th scope="col">Attendance Marking</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td><input type="text" name="attendance[{{ $index }}][username]" value="{{ $user->username }}" readonly></td>
                        <td><input type="date" class="attendanceDate" name="attendance[{{ $index }}][date]" value="{{ date('Y-m-d') }}" readonly></td>
                        <td>
                            <input type="checkbox" name="attendance[{{ $index }}][present]" value="1" {{ old('attendance.' . $index . '.present') ? 'checked' : '' }}>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Submit Attendance</button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('Viewattendance') }}'">View Attendance</button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('Adminhome') }}'">Back</button>
        </form>
    </div>
</body>
</html>
@endsection

