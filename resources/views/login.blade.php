@extends('layouts.app')
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

@section('content')
<section class="vh-100" style="background-color: black;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-light">
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form style="width: 23rem;" method="POST" action="{{ route('loginProcess') }}">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                        <div class="form-outline mb-4">
                            <input type="text" id="form2Example18" class="form-control form-control-lg" name="username"/>
                            <label class="form-label" for="form2Example18">Username</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example28" class="form-control form-control-lg" name="password"/>
                            <label class="form-label" for="form2Example28">Password</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                        <p>Don't have an account? <a href="{{ route('crud') }}" class="link-info">Register here</a></p>

                        <!-- Facebook Login Button -->
                        <div class="pt-1 mb-4">
                            <a href="{{ route('auth.facebook') }}" class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998;">
                                <i class="fab fa-facebook-f me-2"></i> Login with Facebook
                            </a>
                        </div>

                        <!-- Google Sign-In Button -->
                        <a href="{{ route('google-auth') }}" class="btn btn-google d-flex align-items-center">
                            <i class="fab fa-google me-2"></i>
                            Continue with Google
                        </a>

                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('Image4.jpg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>

<!-- Styling for the google button -->
<style>
    .btn-google {
        display: inline-block;
        width: 254px;
        padding: 10px;
        background-color: white;
        color: #333;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 18px;
        text-align: center;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-google:hover {
        background-color: #f8f8f8;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-color: #ccc;
        color: #777; /* Changes font color on hover */
    }

    .btn-google i {
        font-size: 25px;
        color: #4285f4; /* Google's blue color */
        margin-right: 10px;
        padding-left:5px;
        padding-right:5px;
    }

    .d-flex {
        display: flex;
    }

    .align-items-center {
        align-items: center;
    }

    .me-2 {
        margin-right: 10px;
    }

</style>

<!-- JS Alerts for Login Status -->
@if(session('login_success'))
    <script>
        alert('{{ session('login_success') }}');
    </script>
@endif

@if(session('login_error'))
    <script>
        alert('{{ session('login_error') }}');
    </script>
@endif

@endsection
