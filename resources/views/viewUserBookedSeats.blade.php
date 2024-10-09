@extends('layouts.app1')

@section('content')
<div>
&nbsp;<br/>
<h1 class="text-center" style="background-color: #1d8b37;">Your Booked Seats</h1>
&nbsp;<br/>

<table class="table table-hover">
    <thead>
      <tr style="background-color:rgb(188, 121, 121);">
        <th scope="col">Seat Number</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($bookedSeats) && $bookedSeats->isNotEmpty())
          @foreach($bookedSeats as $seat)
          <tr>
            <td>{{ $seat->seat_number }}</td>
            <td>{{ $seat->date }}</td>
            <td>
                <form action="{{ route('seats.cancel', $seat->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel this reservation?');">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>
            </td>
          </tr>
          @endforeach
      @else
          <tr>
            <td colspan="3" class="text-center">You haven't booked any seats yet</td>
          </tr>
      @endif
    </tbody>
  </table>
  <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('res') }}'">
    Back to Reservation Page
  </button>
&nbsp;<br/>
&nbsp;<br/>
</div>
@endsection
