@extends('layouts.app')

@section('content')
<section class="vh-100" style="background-color: black;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-light">
                <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                </div>
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
                    </form>
                </div>
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="{{ asset('Image4.jpg') }}" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>

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
