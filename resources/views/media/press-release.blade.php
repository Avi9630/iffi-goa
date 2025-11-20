@extends('layouts.app')
@section('site_title', 'IFFI Goa Press Releases | Latest Updates')
@section('site_description',
    'Stay updated with the latest press releases from IFFI Goa 2024. Get the newest
    announcements, news, and media coverage here.')
@section('site_keywords',
    'IFFI GOA Press Release, IFFI news update, IFFI announcements, official IFFI statements,
    Latest IFFI news, IFFI press coverage, IFFI media releases, IFFI event news')
@section('content')
    @include('layouts.header')
    @include('pages.navigation-slide')

    <!-- Inner Page Banner Section -->
    {{-- <div class="container-fluid page-header bannerBg-news py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Press Release</h1>
        </div>
    </div> --}}

    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Press Release</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container press mt-4 mb-4">
            <div class="table-responsive ">
                <table id="example" class="table table-hover mt-3">
                    <tbody>
                        @foreach ($press as $key => $value)
                            <tr>
                                <td>
                                    <p>{{ $value->title }}</p>
                                </td>
                                <td>
                                    @if (isset($value->link) && !empty($value->link))
                                        {{-- <a href="{{ $value->link }}" class="btn  btn-primary" target="_blank">View</a> --}}
                                        <a href="{{ preg_match('/^https?:\/\//', $value->link) ? $value->link : 'https://' . $value->link }}"
                                            class="btn btn-primary" target="_blank">View</a>
                                    @elseif(isset($value->image_url) && !empty($value->image_url))
                                        <a href="{{ $value->image_url }}" class="btn  btn-primary" target="_blank">View</a>
                                    @else
                                        <a href="{{ asset('public/press_release/' . $value->img_src) }}"
                                            class="btn  btn-primary" target="_blank">View</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-4">
                {{ $press->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
<style>
    .press {
        background: #fff;
        padding: 20px 40px;
    }
</style>
