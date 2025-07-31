@extends('layouts.app')
@section('content')
    @include('layouts.header')
    @include('pages.navigation-slide')

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
                            @if (!empty($newsUpdate->img_src))
                                {{-- <img src="{{ asset('public/images/news-update/' . $newsUpdate->img_src) }}" alt="news image"
                                    class="img-fluid img-radius"> --}}
                                <img src="{{ !empty($newsUpdate->img_src) ? asset('public/images/news-update/' . $newsUpdate->img_src) : $newsUpdate->image_url }}"
                                    alt="image" class="img-fluid">
                            @else
                                {{-- <img src="{{ asset('public/images/news-update/default-image.webp') }}" alt="default image"
                                    class="img-fluid img-radius"> --}}
                                <img src="{{ empty($newsUpdate->image_url) ? asset('public/images/news-update/default-image.webp') : $newsUpdate->image_url }}"
                                    alt="image" class="img-fluid">
                            @endif
                        </p>
                    </div>

                    <div class="col-md-7 col-sm-6 col-12 mb-4">
                        <h3>{!! $newsUpdate->title !!}</h3>
                        <p class="mb-0">
                            {!! $newsUpdate->description !!}
                        </p>
                        <p class="news-update-date">
                            @if ($newsUpdate->have_popup == 1)
                                <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                    data-bs-toggle="modal" data-bs-target="#modal_{{ $newsUpdate->id }}">
                                    Read More
                                </a>
                            @else
                                <a class="text-decoration-underline" style="font-weight: 600;"
                                    href="{{ $newsUpdate->link }}" target="_blank">
                                    {{ $newsUpdate->link_title }}
                                </a>
                            @endif
                            <span>Date: {{ \Carbon\Carbon::parse($newsUpdate->updated_at)->format('d F Y') }}</span>
                        </p>

                        <div class="modal fade" id="modal_{{ $newsUpdate->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">{!! $newsUpdate->pop_up_header !!}</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <div class="modal-content-inn">
                                            {!! html_entity_decode(
                                                preg_replace(
                                                    '/<p>\s*<\/p>/',
                                                    '',
                                                    preg_replace('/<br\s*\/?>/', '', preg_replace('/\s+/', ' ', $newsUpdate->pop_up_content)),
                                                ),
                                            ) !!}
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
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
