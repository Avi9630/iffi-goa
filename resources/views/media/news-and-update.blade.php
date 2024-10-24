@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-news py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">News And Updates</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row ">

                @foreach ($newsUpdates as $newsUpdate)
                    <div class="col-md-5 col-sm-6 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/' . $newsUpdate->img_src) }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-6 col-12 mb-4">
                        <h3>{!! $newsUpdate->title !!}</h3>
                        <p class="mb-0">
                            {!! $newsUpdate->description !!}


                        </p>
                        <p class="news-update-date"><a class="text-underline"
                                style="font-weight: 600; text-decoration: underline;" href="{{ $newsUpdate->link }}"
                                target="_blank">
                                {{ $newsUpdate->link_title }}
                            </a><span>Date :- {{ \Carbon\Carbon::parse($newsUpdate->updated_at)->format('d F Y') }}</p>
                    </div>
                @endforeach

                {{-- @foreach ($newsUpdates as $newsUpdate)
                    @php
                        $updatedAt = \Carbon\Carbon::parse($newsUpdate->updated_at);
                        $sixMonthsAgo = \Carbon\Carbon::now()->subMonths(6);
                    @endphp

                    @if ($updatedAt->greaterThanOrEqualTo($sixMonthsAgo))
                        <div class="col-md-5 col-sm-6 col-12 mb-4">
                            <p class="newsupdatesView-block-img">
                                <img src="{{ asset('public/images/desktop-image/' . $newsUpdate->img_src) }}" alt="image"
                                    class="img-fluid img-radius">
                            </p>
                        </div>
                        <div class="col-md-7 col-sm-6 col-12 mb-4">
                            <h3>{!! $newsUpdate->title !!}</h3>
                            <p class="mb-0">
                                {!! $newsUpdate->description !!}
                            </p>
                            <p class="news-update-date">
                                <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                                    href="{{ $newsUpdate->link }}" target="_blank">
                                    {{ $newsUpdate->link_title }}
                                </a>
                                <span>Date :- {{ $updatedAt->format('d F Y') }}</span>
                            </p>
                        </div>
                    @else
                        <p></p>
                    @endif
                @endforeach --}}


                <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/strategizing.jpg') }}" alt="image"
                            class="img-fluid img-radius">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h3>Strategizing IFFI 2024 at NMIC Mumbai</h3>
                    <p class="mb-0">
                        IFFI 2024 introduces the Best Indian Debut Director Award for the first time to showcase the
                        brilliant works by first-time filmmakers from India. The new initiative would be an important
                        one to recognize and encourage fresh talent in the Indian film industry, providing an
                        opportunity to gain greater access to the global platform. With the spotlight on the films of
                        debut directors, IFFI 2024 once again confirms its commitment to fostering youth creativity for
                        the Indian Cinema.
                        <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a>
                    </p>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Strategizing IFFI 2024 at NMIC Mumbai</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>
                                    Catch a glimpse of NFDC productive meeting at the National Museum of Indian
                                    Cinema(NMIC) in Mumbai,
                                    where we strategized on enhancing awareness for IFFI 2024. The discussions
                                    were centered on innovative approaches to engage audiences and planning
                                    exciting ancillary activities that will elevate the festival experience,
                                    making it more memorable and impactful for all participants.
                                </p>
                                <p>
                                    In the below video, you will find the highlights of the productive meet
                                    that happened in NMIC Mumbai.
                                </p>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <video style="width:100%" loop="" autoplay="" muted=""
                                            playsinline="">
                                            <source src="{{ asset('public/images/news-update/nmic meet.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            IFFI Festival Director, Shri Shekhar Kapoor, delivered an inspiring keynote
                                            address,
                                            recounting his
                                            journey in the film industry and his deep, enduring connection with the
                                            festival.
                                            NFDC
                                            General
                                            Manager, Shri D. Ramakrishnan, highlighted key initiatives and unveiled
                                            exciting
                                            highlights
                                            for the
                                            upcoming IFFI, including the much-anticipated Film Bazaar, designed to
                                            foster
                                            international
                                            collaborations and celebrate outstanding film projects.
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <p>The 55th edition is set to expand the festival's global presence, encouraging
                                            international
                                            partnerships and presenting the finest in Indian and world cinema.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('public/images/news-update/nmic-meet.jpg') }}"
                                            alt="nmic meet ">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <img class="img-fluid"
                                            src="{{ asset('public/images/news-update/nmic-meet2.jfif') }}" alt="nmic meet ">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid"
                                            src="{{ asset('public/images/news-update/nmic-meet1.jfif') }}" alt="nmic meet ">
                                    </div>
                                </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
