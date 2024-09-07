@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="raw">
            <div class="col-lg-12 text-center">
               <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('Image1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Collaborative and Supportive Culture</h5>
                      <p>A good office environment fosters collaboration and teamwork,
                         where employees feel supported by their colleagues and management.
                          Open communication, mutual respect, and a willingness to help one
                           another contribute to a positive atmosphere.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('Image2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> Comfortable and Functional Workspace</h5>
                      <p>The physical setup of the office plays a significant role in productivity
                         and well-being. A well-designed office is clean, comfortable, and equipped
                          with the necessary tools and technology. Ergonomic furniture, adequate lighting,
                           and a quiet workspace help employees stay focused and comfortable.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('Image3.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Opportunities for Growth and Development</h5>
                      <p>An environment that encourages professional growth and development
                        is essential for employee satisfaction. Offering training programs,
                        career advancement opportunities, and regular feedback helps employees
                        feel valued and motivated to contribute to the organization’s success.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


            </div>
        </div><br/><br/>
        <section class="vh-100"  style="background-color: black;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 text-light">

                  <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                  </div>

                  <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;">

                      <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form2Example18" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example18">Email address</label>
                      </div>

                      <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" id="form2Example28" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example28">Password</label>
                      </div>

                      <div class="pt-1 mb-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-info btn-lg btn-block"type="button"><a href="{{ route('Reservation') }}"> Login</a></button>
                      </div>

                      <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
                      <p>Don't have an account? <a  href="{{ route('crud') }}" class="link-info">Register here</a></p>

                    </form>

                  </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="{{ asset('Image4.jpg') }}"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
              </div>
            </div>
          </section><br/><br/>
          <div class="card-group" style="background-color: white; ">
            <div class="card" style="background-color: black; color: white; ">
              <img class="card-img-top"  src="{{ asset('Image5.jpg') }}"alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Comfort and Ergonomics</h5>
                <p class="card-text">A well-designed office prioritizes comfort and ergonomics.
                    This includes adjustable chairs, proper desk heights, and adequate lighting to
                     reduce strain and prevent injury. A comfortable workspace enhances productivity
                      and employee satisfaction.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>&nbsp;&nbsp;&nbsp;
            <div class="card" style="background-color: black; color: white;">
              <img class="card-img-top"  src="{{ asset('Image6.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Effective Layout and Design</h5>
                <p class="card-text">A good office has a layout that promotes collaboration and efficiency.
                     This often means open spaces for teamwork, private areas for focused work, and clear,
                      organized areas for different tasks. Thoughtful design also includes good acoustics
                      and ventilation to maintain a pleasant atmosphere.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>&nbsp;&nbsp;&nbsp;
            <div class="card" style="background-color: black; color: white;">
              <img class="card-img-top"  src="{{ asset('Image7.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Amenities and Resources</h5>
                <p class="card-text">Access to essential amenities and resources is crucial. This
                    includes high-speed internet, modern technology, meeting rooms, kitchen facilities,
                     and relaxation areas. Providing these resources helps employees perform their tasks
                      effectively and maintains their well-being.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div><br/><br/>

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
