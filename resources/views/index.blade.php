@extends('layouts.guest')

@section('content')
    
@include('components.header')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>MENU
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>
                    <li class="nav-item"><a href="department.html" class="nav-link">Treatments</a></li>
                    <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="http://localhost/Employee-management-system/booking.php"
                            class="nav-link">Booking</a></li>
                    <li class="nav-item"><a href="http://localhost/Employee-management-system/index.php" class="nav-link">
                            Staff Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <!-- First Slide with Image -->
        <div class="slider-item" style="background-image: url('{{ asset('images/logo3.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start"
                    data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate">
                        <h1 class="mb-4">"Kindly Treat Every Patient with Love"</h1> <!-- Removed extra </span> -->
                        <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
                        <p><a href="about.html" class="btn btn-secondary px-4 py-3 mt-3"
                                style="background-color: #7b1113;">Booking Now!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Slide with Image -->
        <div class="slider-item" style="background-image: url('{{ asset('images/logo4.jpg') }}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                    <div class="col-md-6 text ftco-animate">
                        <h1 class="mb-4">"Treat All the Same"</h1>
                        <h3 class="subheading">Dedicated to Your Pet's Well-Being with Expert, Affordable Care.</h3>
                        <p><a href="department.html" class="btn btn-secondary px-4 py-3 mt-3"
                                style="background-color: #7b1113;">Our Services</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
                    style="background-image: url('{{ asset('images/bgclinic3.jpg') }}');">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5 ml-md-5 pt-md-5">
                            <span class="subheading mb-2">Welcome to Animal Clinic's Dr.Dann</span>
                            <h2 class="mb-2" style="font-size: 32px;">Specializing in Consultation and Basic Animal
                                Health Care</h2>
                            <p>Klinik Haiwan Dr. Dann is a clinic that was rebranded in 2024. Operating under the name
                                Dr. Dann Animal Clinic since January 1, 2024, this clinic employs four staff members,
                                including two doctors and two clinic assistants. The services offered at this clinic
                                include minor surgery, consultation, grooming, and more.</p>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5">
                        <p>At our pet clinic, we focus on providing expert consultation, essential animal health care,
                            and a range of additional services. Our dedicated team of veterinarians is committed to
                            offering personalized advice and care to meet your pet’s needs.</p>
                        <p> Whether it's routine check-ups, vaccinations, or preventive care, we ensure your pet
                            receives high-quality treatment in a friendly and professional environment. Experience the
                            comprehensive care and attention that makes us your go-to clinic for all your pet's health
                            needs.</p>
                        <div class="founder d-flex align-items-center mt-5">
                            <div class="img" style="background-image: url('{{ asset('images/rasydan.jpg') }}');">
                            </div>
                            <div class="text pl-3">
                                <h3 class="mb-0">Dr. Rasydan</h3>
                                <span class="position">Manager, Doctor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.testimony')

    @include('components.footer')

    </body>
@endsection
