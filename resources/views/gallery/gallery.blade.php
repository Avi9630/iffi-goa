@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa Precious Moments Captured')
@section('site_description',
    'Discover the vibrant moments of the IFFI Goa Festival in our gallery. Browse through
    captivating photos & relive the excitement of Indias premier film festival.')
@section('site_keywords',
    'IFFI photo gallery, IFFI Goa pictures, film festival photos, IFFI Goa moments, IFFI Goa
    photography, IFFI Goa visuals')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-Gallery-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Gallery of 2023 IFFI Festival</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="mt-5 mb-4">
                <div id="lightgallery" class="gallery">
                    @foreach ($gallery as $gall)
                        <div class="grid-item">
                            <a href="{{ asset('public/images/gallery/' . $gall->image) }}"
                                data-src="{{ asset('public/images/gallery/' . $gall->image) }}">
                                <img src="{{ asset('public/images/gallery/' . $gall->image) }}" alt="{{ $gall->image }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <nav aria-label="Page navigation pb-4">
                <ul class="pagination">
                    {{ $gallery->withQueryString()->links() }}
                </ul>
            </nav>
        </div>
    </div>
@endsection
