@extends('layouts.app1')

@section('content')
<div>
&nbsp;<br/>
<h1 class="text-center" style="background-color: #1d8b37;">Your Booked Seats</h1>
&nbsp;<br/>

<div class="row">
  @if(isset($bookedSeats) && $bookedSeats->isNotEmpty())
      @foreach($bookedSeats as $seat)
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="card-header" style="background-color: #1d8b37; color: white;">
            Seat Reservation
          </div>
          <div class="card-body">
            <h5 class="card-title">Seat Number: {{ $seat->seat_number }}</h5>
            <p class="card-text">Date: {{ $seat->date }}</p>
            <form action="{{ route('seats.cancel', $seat->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this reservation?');">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger">Cancel Reservation</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
  @else
      <div class="col-md-12 text-center">
        <p>You haven't booked any seats yet.</p>
      </div>
  @endif
</div>

<button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('res') }}'">
  Back to Reservation Page
</button>
&nbsp;<br/>
&nbsp;<br/>
</div>
@endsection
