
@extends('layouts.app1')

@section('content')
<form class="row domain-search bg-pblue" action="{{ route('search') }}" method="POST">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="form-title">Search <strong>Attendance Date</strong></h2>
            </div>
            <div class="col-md-9">
                <div class="input-group">
                    <input type="date" name="date" class="form-control" required>
                    <span class="input-group-addon">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </span>
                </div>
            </div>
        </div>
    </div>
</form>
</br>
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
