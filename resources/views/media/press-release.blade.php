@extends('layouts.app')
@section('site_title', 'IFFI Goa 2024 Press Releases | Latest Updates')
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
    <div class="container-fluid page-header bannerBg-news py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Press Release</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="container press">
        <div class="table-responsive">
            <table id="example" class="table table-hover mt-3">
                <tbody>

                    <tr>
                        <td>
                            <p>Lights, Camera, Goa! Dive into IFFI 2024</p>
                        </td>
                        <td>
                            <a href="https://www.iffigoa.org/public/press_release/Lights, Camera, Goa! Dive into IFFI 2024.pdf"
                                class="btn  btn-primary" target="_blank">View</a>
                        </td>
                    </tr>
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
        {{-- Paginations --}}
        <div class="container">
            <nav aria-label="Page navigation pb-4">
                <ul class="pagination overflow-hidden">
                    {{ $press->withQueryString()->links() }}
                </ul>
            </nav>
        </div>
    </div>
@endsection
