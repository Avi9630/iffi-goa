@extends('layouts.app')
@section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-detail-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">{{ $fetch_cinema_details->title }}</h1>
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="international-img">
                        @if (!empty($fetch_cinema_details->img_src))
                            <img src="{{ asset('public/images/cureted-section/' . $fetch_cinema_details->img_src) }}"
                                alt="{{ $fetch_cinema_details->title }} image" class="img-fluid">
                        @else
                            <img src="{{ $fetch_cinema_details->img_url }}" alt="{{ $fetch_cinema_details->title }} image"
                                class="img-fluid">
                        @endif
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="film-details-text">
                        <h2 class=" mb-20">{{ $fetch_cinema_details->title }}</h2>
                        <ul>
                            <li>
                                {{ $fetch_cinema_details->country_of_origin }} |
                                {{ $fetch_cinema_details->year }} |
                                {{ $fetch_cinema_details->language }}
                            </li>
                            <li>
                                {{-- <b>Original Title:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->original_title) && !empty($fetch_cinema_basic_details->original_title) ? 'Original Title : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->original_title) ? $fetch_cinema_basic_details->original_title : '' }}
                            </li>
                            <li>
                                {{-- <b>Director:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->director) && !empty($fetch_cinema_basic_details->director) ? 'Director : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->director) ? $fetch_cinema_basic_details->director : '' }}
                            </li>
                            <li>
                                {{-- <b>Screenplay:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->screenplay) && !empty($fetch_cinema_basic_details->screenplay) ? 'Screenplay : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->screenplay) ? $fetch_cinema_basic_details->screenplay : '' }}
                            </li>
                            {{-- <li>
                                <b>Co-Screenplay:</b>
                                {{ isset($fetch_cinema_basic_details->co_screenplay) ? $fetch_cinema_basic_details->co_screenplay : '' }}
                            </li> --}}
                            <li>
                                {{-- <b>DoP:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->dop) && !empty($fetch_cinema_basic_details->dop) ? 'DoP : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->dop) ? $fetch_cinema_basic_details->dop : '' }}
                            </li>
                            <li>
                                {{-- <b>Editor:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->editor) && !empty($fetch_cinema_basic_details->editor) ? 'Editor : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->editor) ? $fetch_cinema_basic_details->editor : '' }}
                            </li>
                            <li>
                                {{-- <b>Cast:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->cast) && !empty($fetch_cinema_basic_details->cast) ? 'Cast : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->cast) ? $fetch_cinema_basic_details->cast : '' }}
                            </li>
                            <li>
                                {{-- <b>Premiere:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->premiere) && !empty($fetch_cinema_basic_details->premiere) ? 'Premiere : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->premiere) ? $fetch_cinema_basic_details->premiere : '' }}
                            </li>
                            <li>
                                {{-- <b>Tags:</b> --}}
                                <b>{{ isset($fetch_cinema_basic_details->tags) && !empty($fetch_cinema_basic_details->tags) ? 'Tags : ' : '' }}</b>
                                {{ isset($fetch_cinema_basic_details->tags) ? $fetch_cinema_basic_details->tags : '' }}
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <h2>{{ isset($fetch_cinema_basic_details->festivals) && !empty($fetch_cinema_basic_details->festivals) ? 'Festivals : ' : '' }}
                    </h2>
                    <p>
                        @isset($fetch_cinema_basic_details->festivals)
                            @if (substr($currentURL, -3) === '/en')
                                <span>{{ $fetch_cinema_basic_details->festivals }}</span>
                            @else
                                <span>
                                    {!! $fetch_cinema_basic_details->festivals !!}
                                </span>
                            @endif
                        @endisset
                    </p>
                    <h2> {{ isset($fetch_cinema_basic_details->award) && !empty($fetch_cinema_basic_details->award) ? 'Award : ' : '' }}
                    </h2>
                    <p>
                        @isset($fetch_cinema_basic_details->award)
                            @if (substr($currentURL, -3) === '/en')
                                <span> {{ $fetch_cinema_basic_details->award }}</span>
                            @else
                                <span>
                                    {{ $fetch_cinema_basic_details->award }}
                                </span>
                            @endif
                        @endisset
                    </p>
                    <hr>
                    <h2> {{ isset($fetch_cinema_basic_details->synopsis) && !empty($fetch_cinema_basic_details->synopsis) ? 'Synopsis : ' : '' }}
                    </h2>
                    <p>
                        @isset($fetch_cinema_basic_details->synopsis)
                            @if (substr($currentURL, -3) === '/en')
                                <span>{{ $fetch_cinema_basic_details->synopsis }}</span>
                            @else
                                <span>
                                    {!! $fetch_cinema_basic_details->synopsis !!}
                                </span>
                            @endif
                        @endisset
                    </p>
                    <hr>
                    <h2> {{ isset($fetch_cinema_basic_details->director_bio) && !empty($fetch_cinema_basic_details->director_bio) ? 'Directors Bio : ' : '' }}
                    </h2>
                    <p>
                        @isset($fetch_cinema_basic_details->director_bio)
                            @if (substr($currentURL, -3) === '/en')
                                <span>{{ $fetch_cinema_basic_details->director_bio }}</span>
                            @else
                                <span>
                                    {!! $fetch_cinema_basic_details->director_bio !!}
                                </span>
                            @endif
                        @endisset
                    </p>
                    <hr>
                    <h2> {{ isset($fetch_cinema_basic_details->sales_agent) && !empty($fetch_cinema_basic_details->sales_agent) ? 'Sales' : '' }}
                    </h2>
                    <p>{!! $fetch_cinema_basic_details?->sales_agent !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
