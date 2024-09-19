@extends('layouts.app1')
@section('content')

<section class="vh-100"  style="background-color: black;">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-light">

          <div class="px-5 ms-xl-4">
            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          </div>

          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

            <form style="width: 23rem;"  method="POST" action="{{ route('AdminloginProcess') }}">
                @csrf
              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> Admin Log in</h3>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="username" id="form2Example18" class="form-control form-control-lg" name = "username"/>
                <label class="form-label" for="form2Example18">Username</label>
              </div>

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" name = "password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block" type="submit"><a> Login</a></button>
              </div>

            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="{{ asset('Image12.png') }}"
            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>
  @endsection
</a></
