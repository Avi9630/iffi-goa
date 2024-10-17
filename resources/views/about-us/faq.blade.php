@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-FAQ py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">FAQ's</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 mb-4 static-content">
        <div class="container">
            <!-- Faq -->
            <div class="accordion" id="accordionExample">
                @foreach ($faqs as $key => $faq)
                    <div class="accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse.{{ $key }}" aria-expanded="false"
                                aria-controls="collapse.{{ $key }}">
                                {{ $faq->title }}
                            </button>
                        </h2>
                        <div id="collapse.{{ $key }}" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $faq->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
