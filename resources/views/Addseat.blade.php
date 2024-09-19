@extends('layouts.app1')

@section('content')
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seat Reservation Form</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: #333333;">
    <div class="container mt-5" style="background-image: url('{{ asset('Image14.jpg') }}'); background-position: center;>

        <form method="POST">
         &nbsp;<br/>
         &nbsp;<br/>
         &nbsp;<br/>
         &nbsp;<br/>
            @csrf
            <div class="mb-4">
                <label class="form-label" for="numSeats"><b>Enter Number of Seats :</b></label>
                <input type="number" id="numSeats" class="form-control form-control-lg" name="numSeats" required/>
            </div>

            <div class="mb-4">
                <label class="form-label" for="datepicker"><b>Select Date :</b></label>
                <input id="datepicker" class="form-control form-control-lg" name="reservationDate" required/>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Seats</button>
            &nbsp;<br/>
            &nbsp;<br/>
            &nbsp;<br/>
        </form>
            &nbsp;<br/>
            &nbsp;<br/>
            &nbsp;<br/>
    </div>
           &nbsp;<br/>
           &nbsp;<br/>
           &nbsp;<br/>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5',
            format: 'yyyy-mm-dd'
        });
    </script>
</body>
</html>
@endsection
