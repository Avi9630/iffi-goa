@extends('layouts.app')
@section('site_title', 'Master Classes at IFFI Goa - Learn from Cinema Experts')
@section('site_description',
    'Join exclusive master classes at IFFI Goa, where renowned filmmakers and industry experts
    share insights, techniques, and the art of cinematic storytelling.')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">MASTERCLASS AND IN- CONVERSATION SESSION</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="container mt-5 static-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="master-nav-bar">
                    <ul class="nav nav-tabs custom-tab-list nav-justified" id="myTabD" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"
                                aria-controls="all" aria-selected="true">All</a>
                        </li>

                        @foreach ($dates as $index => $date)
                            @php
                                $formattedId = \Carbon\Carbon::parse($date->date)->format('M_d');
                                $formattedLabel = \Carbon\Carbon::parse($date->date)->format('M d');
                            @endphp

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="{{ $formattedId }}-tab" data-bs-toggle="tab"
                                    href="#{{ $formattedId }}" role="tab" aria-controls="{{ $formattedId }}"
                                    aria-selected="false">
                                    {{ $formattedLabel }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="myTabContent">

            {{-- All Tab --}}
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                @foreach ($topics as $topic)
                    @include('partials.masterclass-card', ['topic' => $topic])
                @endforeach
            </div>
            
            {{-- Tabs for each date --}}
            @foreach ($dates as $date)
                @php
                    $formattedId = \Carbon\Carbon::parse($date->date)->format('M_d');
                @endphp

                <div class="tab-pane fade" id="{{ $formattedId }}" role="tabpanel">
                    @foreach ($topics->where('master_date_id', $date->id) as $topic)
                        @include('partials.masterclass-card', ['topic' => $topic])
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
