@extends('layouts.app')
@section('site_title', 'Get in touch with us | IFFI GOA')
@section('site_description',
    'Find contact details for inquiries, support, and information about the International Film
    Festival of India.')
@section('site_keywords',
    'IFFI Goa inquiries, IFFI Goa assistance, contact us, IFFI Goa office location, IFFI Goa phone
    number, IFFI Goa email address')
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
            <h1 class="page-title-header">Faqs</h1>
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
