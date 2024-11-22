@extends('layouts.app')
@section('site_title', 'IFFI Goa 2024 Press Releases | Latest Updates')
@section('site_description',
    'Stay updated with the latest press releases from IFFI Goa 2024. Get the newest
    announcements, news, and media coverage here.')
@section('site_keywords',
    'IFFI GOA Press Release, IFFI news update, IFFI announcements, official IFFI statements,
    Latest IFFI news, IFFI press coverage, IFFI media releases, IFFI event news')
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
            <h1 class="page-title-header">The Peacock {{ $year }}</h1>
        </div>
    </div>


    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($thepeacock as $value)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <a href="{{ asset('public/images/thePeacock/' . $value->img_src) }}" target="_blank"
                            class="text-decoration-none">
                            <div class="card shadow-sm w-100">
                                <div class="card-image min-size-img">
                                    <img src="{{ asset('public/images/thePeacock/poster/' . $value->poster) }}"
                                        alt="{{ $value->title }} image" class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <div class="card-text d-flex">
                                        <div class="iCinema-content">
                                            {{-- <h6 class="title"> {{ $value->title }} </h6> --}}
                                            <h6 class="text-uppercase"> {{ $value->title }} </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Inner Page Banner Section -->
    {{-- <div class="container press">
        <div class="table-responsive">
            <table id="example" class="table table-hover mt-3">
                <tbody>
                    @foreach ($thepeacock as $value)
                        <tr>
                            <td>
                                <p>{{ $value->title }}</p>
                            </td>
                            <td class="text-end">
                                <a href="{{ asset('public/images/thePeacock/' . $value->img_src) }}" class="btn btn-primary"
                                    target="_blank">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="container">
            <nav aria-label="Page navigation pb-4">
                <ul class="pagination overflow-hidden">
                    {{ $thepeacock->withQueryString()->links() }}
                </ul>
            </nav>
        </div>
    </div> --}}
@endsection
