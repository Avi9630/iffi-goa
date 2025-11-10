@extends('layouts.app')
@section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Archive</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <!-- TABS -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="film-tab" data-bs-toggle="tab" data-bs-target="#film"
                            type="button" role="tab" aria-controls="film" aria-selected="true">Film Selection</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="media-tab" data-bs-toggle="tab" data-bs-target="#media" type="button"
                            role="tab" aria-controls="media" aria-selected="false">Media</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="master-tab" data-bs-toggle="tab" data-bs-target="#master"
                            type="button" role="tab" aria-controls="master" aria-selected="false">Master
                            Classes</button>
                    </li>
                </ul>

                <!-- TAB CONTENT -->
                <div class="tab-content mt-4" id="myTabContent">

                    <!-- Film -->
                    <div class="tab-pane fade show active" id="film" role="tabpanel" aria-labelledby="film-tab">
                        <div class="accordion" id="filmAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="filmHeadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#filmCollapseOne" aria-expanded="true"
                                        aria-controls="filmCollapseOne">
                                        Feature Films
                                    </button>
                                </h2>
                                <div id="filmCollapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="filmHeadingOne" data-bs-parent="#filmAccordion">
                                    <div class="accordion-body">Content for Feature Films.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="filmHeadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#filmCollapseTwo" aria-expanded="false"
                                        aria-controls="filmCollapseTwo">
                                        Short Films
                                    </button>
                                </h2>
                                <div id="filmCollapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="filmHeadingTwo" data-bs-parent="#filmAccordion">
                                    <div class="accordion-body">Content for Short Films.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Media -->
                    <div class="tab-pane fade" id="media" role="tabpanel" aria-labelledby="media-tab">
                        <div class="accordion" id="mediaAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mediaHeadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#mediaCollapseOne" aria-expanded="true"
                                        aria-controls="mediaCollapseOne">
                                        Press Releases
                                    </button>
                                </h2>
                                <div id="mediaCollapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="mediaHeadingOne" data-bs-parent="#mediaAccordion">
                                    <div class="accordion-body">Content for Press Releases.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="mediaHeadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#mediaCollapseTwo" aria-expanded="false"
                                        aria-controls="mediaCollapseTwo">
                                        Gallery
                                    </button>
                                </h2>
                                <div id="mediaCollapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="mediaHeadingTwo" data-bs-parent="#mediaAccordion">
                                    <div class="accordion-body">Content for Gallery.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Master -->
                    <div class="tab-pane fade" id="master" role="tabpanel" aria-labelledby="master-tab">
                        <div class="accordion" id="masterAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="masterHeadingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#masterCollapseOne" aria-expanded="true"
                                        aria-controls="masterCollapseOne">
                                        Day 1
                                    </button>
                                </h2>
                                <div id="masterCollapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="masterHeadingOne" data-bs-parent="#masterAccordion">
                                    <div class="accordion-body">Content for Day 1.</div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="masterHeadingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#masterCollapseTwo" aria-expanded="false"
                                        aria-controls="masterCollapseTwo">
                                        Day 2
                                    </button>
                                </h2>
                                <div id="masterCollapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="masterHeadingTwo" data-bs-parent="#masterAccordion">
                                    <div class="accordion-body">Content for Day 2.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection

<!-- Bootstrap 5 JS bundle (includes Popper) -->
  
