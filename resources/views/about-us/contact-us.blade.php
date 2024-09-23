@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-ContactUs py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Contact Us</h1>
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">

        <div class="container">

            <div class="section-heading title-line mb-4">
                <h2>Our Locations</h2>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-4">

                    <div class=" card text-center">

                        <div class="contact-card mb-3 mx-auto mt-4">
                            <img class="m-auto" src="{{ asset('public/images/location-icon.svg') }}" alt="">
                        </div>

                        <div class="card-body">
                            <h4 class="text-center contact-content">National Film Development Corporation, 24, Pedder Rd, IT
                                Colony,
                                Cumballa Hill, Mumbai, Maharashtra 400026
                            </h4>
                            <hr>
                            <h4 class="text-center contact-content">Entertainment Society of Goa Maquinez Palace Complex,
                                Dayanand Bandodkar Marg, Campal Panaji, GA 403001</h4>
                        </div>

                    </div>

                    <div class=" card text-center">

                        <div class="contact-card mb-3 mx-auto mt-4">
                            <img class="m-auto" src="{{ asset('public/images/Email-icon.svg') }}" alt="">
                        </div>

                        <div class="card-body">

                            <div class="contact-content">

                                <h4 class="text-center contact-content d-flex flex-column gap-1">
                                    <span>
                                        <a href="http:/iffigoa@nfdcindia.com" target="_blank">iffigoa@nfdcindia.com</a>
                                    </span>
                                    <span>
                                        <a
                                            href="http:/registration@iffigoa.org"
                                            target="_blank">registration@iffigoa.org</a>
                                    </span>
                                    <span>
                                        <a href="http:/registration@iffigoa.org"
                                            target="_blank">digitalteam@nfdcindia.com</a><br>
                                        (For Website related Technical issues)
                                    </span>
                                </h4>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-8 col-sm-8">
                    @foreach (['success', 'info', 'danger', 'warning'] as $msg)
                        @if (Session::has($msg))
                            <div id="flash-message" class="alert alert-{{ $msg }}" role="alert">
                                {{ Session::get($msg) }}
                            </div> @endif
                    @endforeach
                    <div class="contact-form">
                                            <form action="{{ route('contact-us') }}" method="post">@csrf
                                                <div class="row">

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                What Is This Regarding?
                                                                <span class=" text-danger"></span>*
                                                            </label>
                                                            <input type="text" id="formControlLg" name="purpose"
                                                                class="form-control  @error('purpose') is-invalid @enderror">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                Title <span class="text-danger"></span>*
                                                            </label>

                                                            <input type="text" id="formControlLg" name="title"
                                                                class="form-control @error('title') is-invalid @enderror">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                First Name <span class="text-danger"></span>*
                                                            </label>
                                                            <input type="text" id="formControlLg" name="fname"
                                                                class="form-control @error('fname') is-invalid @enderror">
                                                        </div>
                                                        @error('fname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                Last Name <span class="text-danger"></span>*
                                                            </label>
                                                            <input type="text" id="formControlLg" name="lname"
                                                                class="form-control @error('lname') is-invalid @enderror">
                                                        </div>
                                                        @error('lname')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                Email ID <span class="text-danger"></span>*
                                                            </label>
                                                            <input type="text" id="formControlLg" name="email"
                                                                class="form-control @error('email') is-invalid @enderror">
                                                        </div>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-4 col-sm-4 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                Contact<span class="text-danger"></span>*
                                                            </label>
                                                            <input type="text" name="mobile" id="formControlLg"
                                                                class="form-control  @error('mobile') is-invalid @enderror">
                                                        </div>
                                                        @error('mobile')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12 col-sm-12 col-12">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label" for="formControlLg">
                                                                Country <span class="text-danger"></span>*
                                                            </label>
                                                            <input type="text" name="country" id="formControlLg"
                                                                class="form-control @error('country') is-invalid @enderror">
                                                        </div>
                                                        @error('country')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label"
                                                                for="textAreaExample">Message</label>
                                                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="textAreaExample"
                                                                rows="7"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mt-3">
                                                        <div class="w-75 m-auto text-center">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg cus-contact-btn w-50"
                                                                data-mdb-ripple-init="">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
