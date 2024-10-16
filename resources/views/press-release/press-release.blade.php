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
            <h1 class="page-title-header">Press Release</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row ">
                <div class="container press">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover">
                            <thead>
                            </thead>
                            <tbody>
                                @foreach ($press as $key => $value)
                                    @php
                                        $filename = basename($value->link);
                                    @endphp
                                    <tr>
                                        <td>
                                            <p>{{ $value->title }}</p>
                                        </td>
                                        <td>

                                            <a href="{{ asset('press-release/' . $filename) }}" class="btn  btn-primary"
                                                target="_blank">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="pull-right d-flex justify-content-center">
                        {{ $press->withQueryString()->links() }}
                    </div> --}}
                    <div class="container">
                        <nav aria-label="Page navigation pb-4">
                            <ul class="pagination overflow-hidden">
                                {{ $press->withQueryString()->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
