@extends('layouts.guest')

@section('content')
    @include('components.header')

    <section class="hero-wrap hero-wrap-2" style="background-color: #ab4e52;">
        <div class="overlay" style="background: none;"></div> <!-- Make the overlay transparent -->
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Doctors!</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="{{route('home')}}">Home <i class="fas fa-arrow-right"></i></a>
                        </span>
                        <span>
                            <a href="{{route('department')}}">Next <i class="fas fa-arrow-right"></i></a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" style="background-color:#fddde6;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image: url('{{asset('images/rasydan.jpg')}}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Rasydan</h3>
                            <span class="position mb-2">Doctor/Manager</span>
                            <div class="faded">
                                <p>"Animals deserve respect too".</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate">
                                        <a href="https://www.facebook.com/eidanshafie/"
                                            class="d-flex align-items-center justify-content-center" target="_blank"
                                            rel="noopener noreferrer">
                                            <span class="fab fa-facebook"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style = "background-image: url('{{asset('images/dr.asrina.jpg')}}');"></div>
                        </div>
                        <div class="text pt-3 text-center">
                            <h3>Dr. Asrina</h3>
                            <span class="position mb-2">Doctor</span>
                            <div class="faded">
                                <p>"Every life matter"</p>
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate">
                                        <a href="https://www.facebook.com/norasrina.mukhelas/"
                                            class="d-flex align-items-center justify-content-center" target="_blank"
                                            rel="noopener noreferrer">
                                            <span class="fab fa-facebook"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.testimony')
    @include('components.footer')
@endsection
