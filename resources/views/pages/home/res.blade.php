@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ticket Booking</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <style>
       body {
        width: 100%;
        height: 100vh;
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
      }
      .center {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(
          to right,
          rgb(162, 216, 162),
          rgb(102, 194, 102)
        );
      }
      .tickets {
        width: 550px;
        height: fit-content;
        border: 0.4mm solid rgba(0, 0, 0, 0.08);
        border-radius: 3mm;
        box-sizing: border-box;
        padding: 10px;
        font-family: poppins;
        font-size: 15px;
        max-height: 96vh;
        overflow: auto;
        background: white;
        box-shadow: 0px 25px 50px -12px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease;
      }
      .tickets:hover {
        transform: translateY(-5px);
      }
      .ticket-selector {
        background: rgb(243, 243, 243);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        box-sizing: border-box;
        padding: 20px;
        border-radius: 5mm;
      }
      .head {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
      }
      .title {
        font-size: 18px;
        font-weight: 700;
        color: #2d2d2d;
        letter-spacing: 1px;
      }
      .seats {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        min-height: 150px;
        position: relative;
      }
      .status {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin-bottom: 15px;
      }
      .seats::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%, 0);
        width: 220px;
        height: 7px;
        background: rgb(141, 198, 255);
        border-radius: 0 0 3mm 3mm;
        border-top: 0.3mm solid rgb(180, 180, 180);
      }
      .item {
        font-size: 12px;
        position: relative;
        color: #333;
      }
      .item::before {
        content: "";
        position: absolute;
        top: 50%;
        left: -12px;
        transform: translate(0, -50%);
        width: 10px;
        height: 10px;
        background: rgb(255, 255, 255);
        outline: 0.2mm solid rgb(120, 120, 120);
        border-radius: 0.3mm;
      }
      .item:nth-child(2)::before {
        background: rgb(180, 180, 180);
        outline: none;
      }
      .item:nth-child(3)::before {
        background: rgb(28, 185, 120);
        outline: none;
      }
      .all-seats {
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        grid-gap: 18px;
        margin: 60px 0;
        margin-top: 20px;
        position: relative;
        font-size: 15px;
        text-align: center;
      }
      .seat {
        width: 30px;
        height: 30px;
        background: white;
        border-radius: 0.5mm;
        outline: 0.3mm solid rgb(180, 180, 180);
        cursor: pointer;
        transition: all 0.3s ease;
      }
      .seat:hover {
        outline-color: #4caf50;
        transform: scale(1.1);
      }
      .all-seats input:checked + label {
        background: rgb(28, 185, 120);
        outline: none;
      }
      .seat.booked {
        background: rgb(180, 180, 180);
        outline: none;
        cursor: not-allowed;
      }
      input {
        display: none;
      }
      .timings {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 30px;
      }
      .dates {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .dates-item {
        width: 50px;
        height: 40px;
        background: rgb(233, 233, 233);
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 10px 0;
        border-radius: 2mm;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
        font-size: 14px;
      }
      .dates-item:hover {
        background: #6bbf59;
        transform: translateY(-5px);
        color: white;
      }

      .times {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 10px;
      }
      .time {
        font-size: 14px;
        width: fit-content;
        padding: 7px 14px;
        background: rgb(233, 233, 233);
        border-radius: 2mm;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
      }
      .time:hover {
        background: #6bbf59;
        color: white;
        transform: translateY(-5px);
      }
      .timings input:checked + label {
        background: rgb(28, 185, 120);
        color: white;
      }
      .price {
        width: 100%;
        box-sizing: border-box;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid #ddd;
        margin-top: 20px;
        padding-top: 20px;
      }
      .total {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        font-size: 16px;
        font-weight: 500;
        color: #2d2d2d;
      }
      .total span {
        font-size: 11px;
        font-weight: 400;
        color: #888;
      }
      .price button {
        background: rgb(60, 60, 60);
        color: white;
        font-family: poppins;
        font-size: 14px;
        padding: 7px 14px;
        border-radius: 2mm;
        outline: none;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease, transform 0.3s ease;
      }
      .price button:hover {
        background: #4caf50;
        transform: translateY(-3px);
      }
    </style>

</head>
<body>
<div class="center">
    <div class="tickets">

     <!-- Display error messages if any -->
     @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="ticket-selector">
            <div class="head">
                <div class="title">SLT Intern Seat Reservation System</div>
            </div>
            <div class="seats">
                <div class="status">
                    <div class="item">Available</div>
                    <div class="item">Booked</div>
                    <div class="item">Selected</div>
                </div>

                <div class="all-seats">
                    @if(isset($seats) && $seats->isNotEmpty())
                        @foreach($seats as $seat)
                            <input type="radio" name="seat" id="{{ $seat->id }}" value="{{ $seat->id }}"
                                   {{ $seat->booked ? 'disabled' : '' }}>
                            <label for="{{ $seat->id }}" class="{{ $seat->booked ? 'seat booked' : 'seat' }}">
                              {{ $seat->seat_number }}
                            </label>
                        @endforeach
                    @else
                        <p>No seats available for the selected date.</p>
                    @endif
                </div>
    </div>

            @php
            $date = $date ?? now()->format('Y-m-d');
            @endphp

<div class="timings">
    <div class="dates">
        @for($i = 0; $i < 7; $i++)
            <button
                type="button"
                class="dates-item"
                data-date="{{ now()->addDays($i)->format('Y-m-d') }}"
                {{ $date == now()->addDays($i)->format('Y-m-d') ? 'data-selected="true"' : '' }}>
                {{ now()->addDays($i)->format('D d') }}
            </button>
        @endfor
    </div>
</div>

<script>
    document.querySelectorAll('.dates-item').forEach(button => {
        button.addEventListener('click', function() {
            const selectedDate = this.getAttribute('data-date');
            // Redirect to the new date URL
            window.location.href = `{{ route('seats.index') }}?date=${selectedDate}`;
        });
    });
</script>



        </div>



        <div class="price">

            <div class="total">
                <span>Selected Seat Number:</span>
                <div class="count"></div>
            </div>


            <form method="POST" action="{{ route('seats.book') }}">
                @csrf
                <input type="hidden" name="seat_id" id="seatId"/>
                <a href="{{ route('userbooked.seats') }}" class="btn btn-primary">View Booked Seats</a>
                <button type="submit">Book</button>
            </form>
        </div>
    </div>
</div>

<script>
    let seats = document.querySelectorAll("input[name='seat']");
    let seatIdInput = document.getElementById('seatId');
    let countElement = document.querySelector(".count");

    seats.forEach((seat) => {
        seat.addEventListener("change", function () {
            if (this.checked) {
                seatIdInput.value = this.value;
                countElement.textContent = this.labels[0].textContent;
            }
        });
    });
</script>

</body>
</html>
@endsection
