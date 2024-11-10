@extends('layouts.guest')

@section('content')
@include('components.header')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="{{route('home')}}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="doctor.html" class="nav-link">Doctor</a></li>
                    <li class="nav-item active"><a href="department.html" class="nav-link">Treatments</a></li>
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

    <section class="hero-wrap hero-wrap-2" style="background-color: #ab4e52;">
        <div class="overlay" style="background: none;"></div> <!-- Make the overlay transparent -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Our Treatments & Services</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('home')}}">Home <i class="fas fa-arrow-right"></i></a>
                        </span>
                        <span>
                            <a href="pricing.html">Next <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services" style="background-color: #7b1113;">
        <center>
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <span class="subheading" style="color: white;">Services</span>
                        <h2 class="mb-4" style="color: white;">Our Clinic Services</h2>
                        <p style="color: white;">Our clinic offers a range of services including outpatient treatment,
                            vaccinations, basic health care, dental scaling, minor surgeries, boarding (cat’s hotel),
                            grooming, and spaying/neutering.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#128137</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Vaccinations</h3>
                                <p style="color: #d3d3d3;">Essential immunizations to protect your pet from common diseases.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#9986</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;"">Grooming</h3>
                                <p style="color: #d3d3d3;">Animals involves a series of activities aimed at maintaining
                                    their cleanliness, health, and overall well-being</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#128138</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Basic Treatment</h3>
                                <p style="color: #d3d3d3;">Diagnostic tests and screenings to detect early signs of health
                                    issues.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#129463</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Dental scaling </h3>
                                <p style="color: #d3d3d3;"> Procedure that involves the removal of plaque and tartar
                                    buildup from the teeth</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#128657</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Outpatient Treatment</h3>
                                <p style="color: #d3d3d3;">Medical services provided to patients who visit a clinic for
                                    treatment, or follow-up care but do not require an overnight stay</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#128716</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Minor Surgery & Boarding</h3>
                                <p style="color: #d3d3d3;"> Less complex surgical procedures that are typically performed
                                    under general anesthesia with a relatively straightforward recovery process.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#127973</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Spaying or neutering animals
                                    (Pemandulan)</h3>
                                <p style="color: #d3d3d3;">Common practice for controlling pet populations and preventing
                                    unwanted litters</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                        <div class="media block-6 d-block text-center">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="">&#128106</span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading" style="color: white; font-size: 25px;">Consultation</h3>
                                <p style="color: #d3d3d3;">Consultation refers to a meeting or discussion between a
                                    professional and a client or patient, where advice, guidance, or recommendations are
                                    provided based on the client's needs or concerns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </section>

    @include('components.testimony')

    @include('components.footer')

@endsection
