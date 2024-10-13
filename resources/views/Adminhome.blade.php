@extends('layouts.app2')

<header>
    <style>
      #intro {
        background-image: url("Image13.jpg");
        height: 100vh;
      }
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
      .custom-btn {
        width: 500px;
    }
    </style>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('logo.png') }}" alt="Home" style="height: 60px; width: 80px;">
    </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Admin') }}" >Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container d-flex align-items-center justify-content-center text-center h-100">
          <div class="text-white" data-mdb-theme="dark">
            <h1 class="mb-3">SLT Mobitel </h1>
            <h5 class="mb-4"> Intern Seat Reservation System for efficient seat booking</h5>
            <div class="text-center">
                <button class="btn btn-primary btn-lg custom-btn mb-3" type="button" onclick="window.location.href='{{ route('Addseat') }}'">
                    Add Seats
                </button>
                <br/>
                <button class="btn btn-primary btn-lg custom-btn" type="button" onclick="window.location.href='{{ route('booked.seats') }}'">
                    View Booked Seats
                </button> &nbsp;&nbsp;

                <button class="btn btn-primary btn-lg custom-btn" type="button" onclick="window.location.href='{{ route('attendance.index') }}'">
                    Attendance
                </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="mt-5">
    <div class="container">
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="Image4.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4 style="color: white;"><strong>Advance Booking</strong></h4>
            <p  style="color: white;">
                Advance booking allows users to reserve seats
                before the actual time of use, ensuring their spot
                is secured. Commonly used in offices, transportation,
                 cinemas, and event venues, this system eliminates uncertainty
                  about seat availability and helps users plan their schedules
                  more efficiently.
            </p>
            <p style="color: white;"><strong>Availability Management</strong></p>
            <p  style="color: white;">
                Availability management in a seat reservation system displays which
                 seats are currently available for booking, ensuring a user-friendly
                 experience. It features real-time updates to reflect the latest availability,
                  a user-friendly interface with color coding for easy identification of available
                   and booked seats, and search and filter options for specific criteria like location
                   or amenities. This system aids administrators in capacity planning, helping optimize
                   space usage and resource allocation while minimizing the risk of double-booking. Additionally,
                    some systems allow users to view their booking history, making it easier to reserve their preferred
                    seats in the future.
            </p>
          </div>
        </div>
      </section>
      <hr class="my-5" />
      <section class="text-center">
        <h2 style="color: white;"><strong>Our Services</strong></h2></br></br>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Fair Allocation</h5>
                <p class="card-text">
                    Fair allocation ensures equitable distribution of available seats among users,
                    promoting accessibility and preventing favoritism in reservations and bookings.
                </p>
                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>See more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Reduces Overcrowding</h5>
                <p class="card-text">
                    Reduces overcrowding by managing seat availability, preventing excessive bookings,
                     and ensuring a comfortable environment for users in shared spaces.
                </p>
                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>See more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Workspace Organization</h5>
                <p class="card-text">
                    Workspace organization optimizes seating arrangements, enhances productivity,
                    and fosters collaboration by effectively managing available seats in shared environments.
                </p>
                <a href="#!" class="btn btn-primary" data-mdb-ripple-init>See more</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="my-5" />
    </div>
  </main>




























































