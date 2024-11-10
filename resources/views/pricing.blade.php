@extends('layouts.guest')

@section('content')
    @include('components.header')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>
                    <li class="nav-item"><a href="department.html" class="nav-link">Treatments</a></li>
                    <li class="nav-item active"><a href="pricing.html" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="http://localhost/Employee-management-system/booking.php"
                            class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="http://localhost/Employee-management-system/index.php" class="nav-link">
                            Staff Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-color: #ab4e52;">
        <div class="overlay" style="background: none;"></div> <!-- Make the overlay transparent -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Pricing</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{ route('home') }}">Home <i class="fas fa-arrow-right"></i></a>
                        </span>
                        <span>
                            <a href="contact.html">Next <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <span class="subheading">Pricing</span>
                    <h2 class="mb-4">Our Pricing</h2>
                    <p>"We believe in providing exceptional care at reasonable rates, making pet healthcare accessible to
                        all pet owners."</p>
                </div>
            </div>
            <div class="row">
                <!-- Outpatient Treatment -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Basic</h3>
                            <p><span class="price" style="color: #7b1113;">
                                    < RM100 </span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Outpatient Treatment</li>
                        </ul>
                        <p class="button text-center"><a href="https://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Lioncut -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">RM120 - RM150</span></p>
                        </div>
                        <ul>
                            <li>Lioncut</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Cat Vaccination -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">RM40</span> <span class="per">/
                                    session</span></p>
                        </div>
                        <ul>
                            <li>Cat Vaccination</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Dental Scaling -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">RM100 - RM120</span></p>
                        </div>
                        <ul>
                            <li>Dental Scaling</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Divider -->
                <div class="w-100">
                    <hr>
                </div>

                <!-- Cat Grooming -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">RM50 - RM90</span> <span class="per">/
                                    session</span></p>
                        </div>
                        <ul>
                            <li>Cat Grooming</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Minor Surgery -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">> RM100</span> <span class="per">/
                                    session</span></p>
                        </div>
                        <ul>
                            <li>Minor Surgery</li>
                            <li>Warded</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>

                <!-- Cat Neutering -->
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Standard</h3>
                            <p><span class="price" style="color: #7b1113;">RM80 - RM160</span></p>
                        </div>
                        <ul>
                            <li>Pemandulan Kucing Jantan</li>
                            <li>Pemandulan Kucing Betina</li>
                        </ul>
                        <p class="button text-center"><a href="http://localhost/Employee-management-system/booking.php"
                                class="btn btn-primary px-4 py-3" style="background-color: #7b1113;">Booking Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.testimony')
    @include('components.footer')
@endsection
