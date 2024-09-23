@extends('layouts.app')
@section('content')
<div class="container">
    <div class="raw">
        <div class="col-lg-12 text-center">
            <h1 class="text-bg-primary p-3">Registration Page</h1>
        </div><br/>
        <div class="col-lg-12">
            <form action='{{ route("crud.store") }}' method='post' novalidate>
                @csrf
                <div class="row">
                    <div class="col-lg-100">
                        <div class="form-group">
                            <input class="form-control @error('Username') is-invalid @enderror" type="text" placeholder="Enter Username" name="Username" required>
                            @error('Username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('Password') is-invalid @enderror" type="password" placeholder="Enter Password" name="Password" required>
                            @error('Password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('Email') is-invalid @enderror" type="email" placeholder="Enter Email Address" name="Email" required>
                            @error('Email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('NIC') is-invalid @enderror" type="text" placeholder="Enter NIC Number" name="NIC" required>
                            @error('NIC')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('Birth') is-invalid @enderror" type="text" placeholder="Enter Birth Year" name="Birth" required>
                            @error('Birth')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <select class="form-select @error('university') is-invalid @enderror" name="university" id="validationCustom04" required>
                                <option selected disabled value="">Please select your university</option>
                                <option value="IIT">Informatics Institute of Technology (IIT)</option>
                                <option value="SLIIT">Sri Lanka Institute of Information Technology (SLIIT)</option>
                                <option value="Moratuwa">University Of Moratuwa</option>
                                <option value="Peradeniya">University Of Peradeniya</option>
                                <option value="Ruhuna">University Of Ruhuna</option>
                                <option value="Uva">University Of Uva</option>
                            </select>
                            @error('university')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('Uni_ID') is-invalid @enderror" type="text" placeholder="Enter University ID" name="Uni_ID" required>
                            @error('Uni_ID')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div class="form-group">
                            <input class="form-control @error('Position') is-invalid @enderror" type="text" placeholder="Enter your specialization" name="Position" required>
                            @error('Position')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div><br/>

                        <div>
                            <button class="btn btn-primary d-flex justify-content-center" type="submit">Submit</button>
                        </div><br/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
