@extends('layouts.app1')

@section('content')
<div >
&nbsp;<br/>
<h1 class="text-center" style="background-color: #1d8b37;">Reservation Table</h1>
&nbsp;<br/>

<table class="table table-hover">
    <thead>
      <tr style="background-color:rgb(188, 121, 121);">
        <th scope="col">User_Id</th>
        <th scope="col">Seat_Number</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($bookedSeats) && $bookedSeats->isNotEmpty())
          @foreach($bookedSeats as $seat)
          <tr>
            <th scope="row">{{ $seat->user_id }}</th>
            <td>{{ $seat->seat_number }}</td>
            <td>{{ $seat->date }}</td>
          </tr>
          @endforeach
      @else
          <tr>
            <td colspan="3" class="text-center">No seats booked yet</td>
          </tr>
      @endif
    </tbody>
  </table>
  <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('res') }}'">
    back
    </button>
&nbsp;<br/>
&nbsp;<br/>
</div>
@endsection

