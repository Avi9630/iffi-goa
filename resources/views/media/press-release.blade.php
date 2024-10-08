@extends('layouts.app')
@section('site_title', 'IFFI Goa 2024 Press Releases | Latest Updates')
@section('site_description',
    'Stay updated with the latest press releases from IFFI Goa 2024. Get the newest
    announcements, news, and media coverage here.')
@section('site_keywords',
    'IFFI GOA Press Release, IFFI news update, IFFI announcements, official IFFI statements,
    Latest IFFI news, IFFI press coverage, IFFI media releases, IFFI event news')

    <style>
        table p {
            font-weight: 500;
            margin: 0;
            margin-top: 6px;
        }
    </style>
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
    <div class="container press">
        <div class="table-responsive">
            <table id="example" class="table table-hover mt-3">
                <thead>

                </thead>
                <tbody>
                    @foreach ($press as $key => $value)
                        @if (isset($value->link) && !empty($value->link) && $value->link != '')
                            <tr>
                                <td>
                                    <p>{{ $value->title }}</p>
                                </td>
                                <td>
                                    <a href="{{ $value->link }}" class="btn  btn-primary" target="_blank">View</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pull-right d-flex justify-content-center">
            {{ $press->withQueryString()->links() }}
        </div>
    </div>
@endsection
