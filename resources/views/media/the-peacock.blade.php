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

    <div class="col-lg-12 mt-5">
        <div class="container">
            <div class="section-heading mb-4 text-center mt-5 center-heading">
                <h2>Peacock</h2>
            </div>

            @php
                $years = [
                    2025 => 'active',
                    2024 => 'active',
                    2023 => 'active',
                    2022 => 'active',
                    2021 => 'active',
                    2020 => 'active',
                    2019 => 'active',
                    2018 => 'active',
                    2017 => 'active',
                ];
            @endphp

            <ul class=" mb-4 tabNavigation" id="myTab" role="tablist">

                @foreach ($years as $year => $value)
                    <li>
                        <a href="{{ route('the-peacock', ['year' => $year]) }}"
                            class=" {{ $value ?? '' }}">{{ $year }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="row">
                @foreach ($thepeacock as $value)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        @if (!empty($value->img_src))
                            <a href="{{ asset('public/images/thePeacock/' . $value->img_src) }}" target="_blank"
                                class="text-decoration-none">
                                <div class="card shadow-sm w-100">
                                    <div class="card-image min-size-img">
                                        @if (!empty($value->poster))
                                            <img src="{{ asset('public/images/thePeacock/poster/' . ($value->poster ?? 'pdf.jpg')) }}"
                                                alt="{{ $value->title }} image" class="img-fluid">
                                        @else
                                            <img src="{{ $value->poster_url }}"alt="image" class="img-fluid" loading="lazy">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <div class="card-text d-flex">
                                            <div class="iCinema-content">
                                                <h6 class="text-uppercase"> {{ $value->title }} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ $value->image_url }}" target="_blank" class="text-decoration-none">
                                <div class="card shadow-sm w-100">
                                    <div class="card-image min-size-img">
                                        @if (!empty($value->poster))
                                            <img src="{{ asset('public/images/thePeacock/poster/' . ($value->poster ?? 'pdf.jpg')) }}"
                                                alt="{{ $value->title }} image" class="img-fluid">
                                        @else
                                            <img src="{{ $value->poster_url }}"alt="image" class="img-fluid"
                                                loading="lazy">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <div class="card-text d-flex">
                                            <div class="iCinema-content">
                                                <h6 class="text-uppercase"> {{ $value->title }} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
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
<style>
    .tabNavigation {
        justify-content: center;
        margin-bottom: 15px !important;
        font-weight: bold;
        column-gap: 5px;
        row-gap: 15px;
        display: flex;
        list-style: none;
        flex-wrap: wrap;
    }

    .tabNavigation .active {
        color: #000;
        border: solid 1px #ddd !important;
        padding: 6px 15px !important;
        border-radius: 5px !important;
        text-decoration: none;
        background: #fff
    }

    .min-size-img {
        height: auto !important;
    }
</style>
