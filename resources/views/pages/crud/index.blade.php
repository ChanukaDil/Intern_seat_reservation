@extends('layouts.app')
@section('content')
<div class="container">
    <div class="raw">
        <div class="col-lg-12 text-center">
            <h1 class = "text-bg-primary p-3">Registration Page</h1>
        </div><br/>
        <div class="col-lg-12 ">
            <form action='{{ route("crud.store") }}' method='post'>
                @csrf
                <div class="row">
                    <div class="col-lg-100">
                        <div class="form-group">
                            <input class="form-control " type="text" placeholder="Enter Username" name = "Username">
                        </div><br/>
                        <div class="form-group">
                            <input class="form-control" type="password" placeholder="Enter Password" name = "Password">
                        </div></br>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter Email Address" name = "Email">
                        </div><br/>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter NIC Number" name = "NIC">
                        </div></br>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter Birth Year" name = "Birth">
                        </div><br/>
                        <div class="form-group">
                            <select class="form-select" name="university" id="validationCustom04" required>
                                <option selected disabled value="">Please select your university</option>
                                <option value="IIT">Informatics Institute of Technology (IIT)</option>
                                <option value="SLIIT">Sri Lanka Institute of Information Technology (SLIIT)</option>
                                <option value="Moratuwa">University Of Moratuwa</option>
                                <option value="Peradeniya">University Of Peradeniya</option>
                                <option value="Ruhuna">University Of Ruhuna</option>
                                <option value="Uva">University Of Uva</option>
                            </select>
                        </div><br/>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter University ID" name = "Uni_ID">
                        </div><br/>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter your specialisation" name = "Position">
                        </div><br/>
                        <div>
                            <button class = "btn btn-primary d-flex justify-content-center">Submit</button>
                        </div><br/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('css')
    <style>
.title{
            padding-top : 8vh;
            font-size : 4rem;
            color : red;
        }
    </style>

@endpush
