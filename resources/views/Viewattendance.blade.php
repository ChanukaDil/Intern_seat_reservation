@extends('layouts.app1')

@section('content')
<div class="container">
    <h2>View Attendance</h2>

    <!-- Attendance Search Form -->
    <form class="px-md-2" action="{{ route('search') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="form-title">Search <strong>Attendance Date</strong></h2>
                </div>
                <div class="col-md-9">
                    <div class="input-group">
                        <input type="date" name="date" class="form-control" required max="{{ date('Y-m-d') }}">
                        <span class="input-group-addon">
                            &nbsp;&nbsp;<input type="submit" value="Search" class="btn btn-primary">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Display Attendance Records -->
    @if(isset($attendances))
        <div class="mt-5">
            <h4>Attendance Records for {{ $date }}</h4>
            @if($attendances->isEmpty())
                <p>No attendance records found for this date.</p>
            @else
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
                        @foreach($attendances as $attendance)
                            <tr>
                                <td>{{ $attendance->id }}</td>
                                <td>{{ $attendance->username }}</td>
                                <td>{{ $attendance->date }}</td>
                                <td>{{ $attendance->present ? 'Present' : 'Absent' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    @endif
</div>
@endsection

@push('css')
<style>
    .domain-search {
        padding: 20px;
    }
    .form-title {
        font-size: 24px;
        color: #fff;
    }
</style>
@endpush
