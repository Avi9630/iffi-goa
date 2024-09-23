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
                {{-- <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div> --}}

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
                                {{-- <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the
                                collapse plugin adds the appropriate classes that we use to style each element. These
                                classes
                                control the overall appearance, as well as the showing and hiding via CSS transitions. You
                                can
                                modify any of this with custom CSS or overriding our default variables. It's also worth
                                noting
                                that just about any HTML can go within the <code>.accordion-body</code>, though the
                                transition
                                does limit overflow. --}}
                                {{ $faq->description }}
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse plugin adds the appropriate classes that we use to style each element. These classes
                            control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                            modify any of this with custom CSS or overriding our default variables. It's also worth noting
                            that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                            does limit overflow.
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
