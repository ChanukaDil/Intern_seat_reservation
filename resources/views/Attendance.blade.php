@extends('layouts.app1')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Attendance System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center " style="background-color: #1d8b37; ">Attendance Table</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('attendance.store') }}">
            @csrf

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
                        <td><input type="date" name="attendance[{{ $index }}][date]" value="{{ date('Y-m-d') }}"></td>
                        <td>
                            <input type="checkbox" name="attendance[{{ $index }}][present]" value="1" {{ old('attendance.' . $index . '.present') ? 'checked' : '' }}>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Submit Attendance</button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('Viewattendance') }}'">
                View Attendance
            </button>&nbsp;&nbsp;&nbsp;
            <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('Adminhome') }}'">
                back
            </button>

        </form>
    </div>
</body>
</html>
@endsection