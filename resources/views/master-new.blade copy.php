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
                                $formattedId =
                                    strtolower(\Carbon\Carbon::parse($date->date)->format('M')) .
                                    \Carbon\Carbon::parse($date->date)->format('d');
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
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                @foreach ($topics as $topic)
                    @php
                        $dateKey =
                            strtolower(\Carbon\Carbon::parse($topic->masterDate->date)->format('M')) .
                            \Carbon\Carbon::parse($topic->masterDate->date)->format('d');
                    @endphp
                    @include("master-class-new.{$dateKey}", ['topic' => $topic])
                @endforeach
            </div>

            {{-- Per Date Tabs --}}
            @foreach ($dates as $date)
                @php
                    $formattedId =
                        strtolower(\Carbon\Carbon::parse($date->date)->format('M')) .
                        \Carbon\Carbon::parse($date->date)->format('d');
                @endphp
                <div class="tab-pane fade" id="{{ $formattedId }}" role="tabpanel"
                    aria-labelledby="{{ $formattedId }}-tab">
                    @foreach ($topics->where('master_date_id', $date->id) as $topic)
                        @include("master-class-new.{$formattedId}", ['topic' => $topic])
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    {{-- POPUP --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <ul class="list-icon">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="modalDate"></span></li>
                        <li><i class="fa fa-briefcase" aria-hidden="true"></i><span id="panel"></span></li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> Moderator :- <span id="modalModerator"></span>
                        </li>
                    </ul>
                    <h4>Speakers</h4>
                    <ol class="list-group list-group-numbered" id="modalSpeakers"></ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Speaker Details Modal -->
    <div class="modal fade" id="speakerDetailsModal" tabindex="-1" aria-labelledby="speakerDetailsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="speakerDetailsLabel"></h5>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body">
                    <img id="speakerImage" src="" alt="Speaker Image" class="img-fluid mb-3" height="200px"
                        width="400px" />
                    <p id="speakerDescription"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Speakers Popup End -->

    {{-- Script Start --}}
    <script>
        const modalData = {!! $modalData !!};
        document.querySelectorAll('.title-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const [dateId, sessionIndex] = this.id.split('-');
                const data = modalData[dateId][sessionIndex];

                if (data) {
                    document.getElementById('exampleModalLabel').innerText = data.title;
                    document.getElementById('modalDate').innerText = data.date;
                    document.getElementById('modalModerator').innerText = data.moderator;
                    document.getElementById('panel').innerText = data.panel;

                    // Clear existing speakers and add new ones
                    const speakersList = document.getElementById('modalSpeakers');
                    speakersList.innerHTML = '';
                    data.speakers.forEach(speaker => {
                        const li = document.createElement('li');
                        li.className =
                            'list-group-item d-flex justify-content-between align-items-start title-tab';
                        li.style.cursor = 'pointer';

                        // Add onclick event to li for opening the modal
                        li.onclick = function() {
                            showSpeakerDetails(
                                speaker.name.replace(/'/g, "\\'"),
                                speaker.description.replace(/\\/g, ''),
                                speaker.image.replace(/'/g, "\\'")
                            );
                        };
                        // Populate the speaker list item
                        li.innerHTML =
                            `<div class="ms-2 me-auto">
                                <div class="fw-bold">${speaker.name}</div>
                            </div>
                            <span>
                                <img src="${speaker.image.replace('/master-class/', '/master-class/webp/')}" class="img-circle" alt="${speaker.name}">
                            </span>
                            `;
                        speakersList.appendChild(li);
                    });
                }
            });
        });

        function showSpeakerDetails(name, description, image) {
            document.getElementById('speakerDetailsLabel').innerText = name;
            document.getElementById('speakerDescription').innerText = description;
            // document.getElementById('speakerImage').src =image;
            document.getElementById('speakerImage').src = image.replace('/master-class/', '/master-class/webp/');
            const speakerDetailsModal = new bootstrap.Modal(document.getElementById('speakerDetailsModal'));
            speakerDetailsModal.show();
        }
    </script>

    <style type="text/css">
        .title-tab {
            cursor: pointer;
        }

        .list-icon {
            display: flex;
            list-style: none;
            flex-direction: column-reverse;
            padding-left: 0;
        }

        .list-icon li {
            display: flex;
            list-style: none;
            column-gap: 10px;
            align-items: center;
        }

        .img-circle {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        .title-boder-none {
            border-bottom: none;
        }
    </style>
@endsection
