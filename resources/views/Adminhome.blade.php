@extends('layouts.app1')
@section('content')

<section class="vh-100"  style="background-color: black;">
    &nbsp;<br/>
    &nbsp;<br/>
    <div class="d-grid gap-3 col-10 mx-auto" style="background-image: url('Image13.jpg');background-size: ; background-position: center; height: 100vh;">
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>


        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('Addseat') }}'">
        Add Seats
        </button>

        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('ViewRes') }}'">View Reservations</button>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
      </div>
      &nbsp;<br/>
      &nbsp;<br/>

</section>
@endsection

