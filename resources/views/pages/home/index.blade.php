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

       <div class="d-grid gap-3 col-10 mx-auto" style="background-image: url('Image13.jpg');background-size: ; background-position: center; height: 80vh;">
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>

        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('login') }}'">
        Seat Reservation
        </button>

        <button class="btn btn-primary btn-lg btn-block" type="button" onclick="window.location.href='{{ route('Admin') }}'">Admin</button>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
        &nbsp;<br/>
      </div><br/><br/>
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
