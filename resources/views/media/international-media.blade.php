@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">International Media</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="container press">
        <div class="table-responsive">
            <table id="example" class="table table-hover mt-3">
                <tbody>

                    @foreach ($internationalMedia as $media)
                        @if (isset($media->urls) && !empty($media->urls) && $media->urls != '')
                            <tr>
                                <td>
                                    <p>{{ $media->title }}</p>
                                </td>
                                <td>
                                    {{-- <a href="{{ $media->urls }}" class="btn  btn-primary" target="_blank">View</a> --}}
                                    <a href="{{ Str::startsWith($media->urls, ['http://', 'https://']) ? $media->urls : 'https://' . $media->urls }}"
                                        class="btn btn-primary" target="_blank">
                                        View
                                    </a>
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
                    {{ $internationalMedia->withQueryString()->links() }}
                </ul>
            </nav>
        </div>
    </div>
@endsection
