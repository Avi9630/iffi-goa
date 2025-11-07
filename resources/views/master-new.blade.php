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
            <h1 class="page-title-header">MASTERCLASS AND <br> IN- CONVERSATION SESSION</h1>
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
                @foreach ($dates as $date)
                    @php
                        $dateKey =
                            strtolower(\Carbon\Carbon::parse($date->date)->format('M')) .
                            \Carbon\Carbon::parse($date->date)->format('d');
                    @endphp
                    @foreach ($topics->where('master_date_id', $date->id)->values() as $i => $topic)
                        @include("master-class-new.{$dateKey}", ['topic' => $topic, 'index' => $i])
                    @endforeach
                @endforeach
            </div>

            {{-- Date - wise --}}
            @foreach ($dates as $date)
                @php
                    $formattedId =
                        strtolower(\Carbon\Carbon::parse($date->date)->format('M')) .
                        \Carbon\Carbon::parse($date->date)->format('d');
                @endphp
                <div class="tab-pane fade" id="{{ $formattedId }}" role="tabpanel"
                    aria-labelledby="{{ $formattedId }}-tab">

                    @foreach ($topics->where('master_date_id', $date->id)->values() as $i => $topic)
                        @include("master-class-new.{$formattedId}", ['topic' => $topic, 'index' => $i])
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


    <script>
        const modalData = {!! $modalData !!};

        document.addEventListener("DOMContentLoaded", function() {
            let hash = window.location.hash;
            const defaultTab = document.querySelector('a[href="#all"]');

            if (!hash && defaultTab) {
                let tab = new bootstrap.Tab(defaultTab);
                tab.show();
                history.replaceState(null, null, '#all');
            }

            if (hash) {
                let tabTrigger = document.querySelector(`a[href="${hash}"]`);
                if (tabTrigger) {
                    let tab = new bootstrap.Tab(tabTrigger);
                    tab.show();
                    setTimeout(() => window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    }), 300);
                }
            }
            let tabLinks = document.querySelectorAll('.nav-tabs a[data-bs-toggle="tab"]');
            tabLinks.forEach(function(link) {
                link.addEventListener('shown.bs.tab', function(event) {
                    history.replaceState(null, null, event.target.getAttribute('href'));
                });
            });
        });

        // document.addEventListener("DOMContentLoaded", function() {
        //     let hash = window.location.hash;
        //     if (hash) {
        //         let tabTrigger = document.querySelector(`a[href="${hash}"]`);
        //         if (tabTrigger) {
        //             let tab = new bootstrap.Tab(tabTrigger);
        //             tab.show();
        //             setTimeout(() => window.scrollTo({
        //                 top: 0,
        //                 behavior: 'smooth'
        //             }), 300);
        //         }
        //     }
        //     let tabLinks = document.querySelectorAll('.nav-tabs a[data-bs-toggle="tab"]');
        //     tabLinks.forEach(function(link) {
        //         link.addEventListener('shown.bs.tab', function(event) {
        //             history.replaceState(null, null, event.target.getAttribute('href'));
        //         });
        //     });
        // });

        document.querySelectorAll('.title-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                let [dateId, sessionIndex] = this.id.split('-');
                sessionIndex = parseInt(sessionIndex);
                const dayData = modalData[dateId] || [];
                if (!dayData.length) return;
                if (sessionIndex >= dayData.length) sessionIndex = dayData.length - 1;
                const data = dayData[sessionIndex];

                // Reset modal fields first
                document.getElementById('exampleModalLabel').innerText = '';
                document.getElementById('modalDate').innerText = '';
                document.getElementById('modalModerator').innerText = '';
                document.getElementById('panel').innerText = '';
                document.getElementById('modalSpeakers').innerHTML = '';
                if (!data) return;

                // Populate modal with data
                document.getElementById('exampleModalLabel').innerText = data.title || 'No Title';
                document.getElementById('modalDate').innerText = data.date || 'No Date';
                document.getElementById('modalModerator').innerText = data.moderator || 'No Moderator';
                document.getElementById('panel').innerText = data.panel || 'No Panel';
                const speakersList = document.getElementById('modalSpeakers');
                speakersList.innerHTML = '';

                if (data.speakers && data.speakers.length > 0) {
                    data.speakers.forEach(speaker => {
                        const li = document.createElement('li');
                        li.className =
                            'list-group-item d-flex justify-content-between align-items-start title-tab';
                        li.style.cursor = 'pointer';
                        li.onclick = function() {
                            showSpeakerDetails(
                                speaker.name || '',
                                (speaker.description || '').replace(/\\/g, ''),
                                speaker.image || ''
                            );
                        };
                        li.innerHTML = `
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">${speaker.name || ''}</div>
                        </div>
                        <span>
                            <img src="${(speaker.image || '').replace('/master-class/', '/master-class/webp/')}" 
                                 class="img-circle" 
                                 alt="${speaker.name || ''}">
                        </span>
                    `;
                        speakersList.appendChild(li);
                    });
                } else {
                    const li = document.createElement('li');
                    li.className = 'list-group-item text-muted';
                    li.innerText = "No speakers available";
                    speakersList.appendChild(li);
                }
            });
        });

        function showSpeakerDetails(name, description, image) {
            document.getElementById('speakerDetailsLabel').innerText = '';
            document.getElementById('speakerDescription').innerHTML = '';
            document.getElementById('speakerImage').src = '';
            document.getElementById('speakerDetailsLabel').innerText = name || '';
            document.getElementById('speakerDescription').innerHTML = description || '';

            if (image) {
                document.getElementById('speakerImage').src = image.replace('/master-class/', '/master-class/webp/');
            } else {
                document.getElementById('speakerImage').src = '/images/default-speaker.png'; // fallback image
            }
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
