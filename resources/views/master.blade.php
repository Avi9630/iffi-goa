@extends('layouts.app')
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
        {{-- <div class="container"> --}}

        <!-- Nav tabs -->
        {{-- <ul class="nav nav-tabs custom-tab-list nav-justified" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"
                        aria-controls="home" aria-selected="true">All</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov20-tab" data-bs-toggle="tab" href="#nov20" role="tab"
                        aria-controls="nov20" aria-selected="false">Nov 20

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov21-tab" data-bs-toggle="tab" href="#nov21" role="tab"
                        aria-controls="nov21" aria-selected="false">Nov 21

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov22-tab" data-bs-toggle="tab" href="#nov22" role="tab"
                        aria-controls="nov22" aria-selected="false">Nov 22

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov23-tab" data-bs-toggle="tab" href="#nov23" role="tab"
                        aria-controls="nov23" aria-selected="false">Nov 23

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov24-tab" data-bs-toggle="tab" href="#nov24" role="tab"
                        aria-controls="nov24" aria-selected="false">Nov 24

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov25-tab" data-bs-toggle="tab" href="#nov25" role="tab"
                        aria-controls="nov25" aria-selected="false">Nov 25

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov26-tab" data-bs-toggle="tab" href="#nov26" role="tab"
                        aria-controls="nov26" aria-selected="false">Nov 26

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov27-tab" data-bs-toggle="tab" href="#nov27" role="tab"
                        aria-controls="nov27" aria-selected="false">Nov 27

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov28-tab" data-bs-toggle="tab" href="#nov28" role="tab"
                        aria-controls="nov28" aria-selected="false">Nov 28

                    </a>
                </li>

            </ul> --}}
        <div class="row">
            <div class="col-sm-12">
                <div class="master-nav-bar">
                    <ul class="nav nav-tabs custom-tab-list nav-justified " id="myTabD" role="tablist">
                        @foreach (['all' => 'All', 'nov20' => 'Nov 20', 'nov21' => 'Nov 21', 'nov22' => 'Nov 22', 'nov23' => 'Nov 23', 'nov24' => 'Nov 24', 'nov25' => 'Nov 25', 'nov26' => 'Nov 26', 'nov27' => 'Nov 27', 'nov28' => 'Nov 28'] as $date => $label)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $date === 'all' ? 'active' : '' }}" id="{{ $date }}-tab"
                                    data-bs-toggle="tab" href="#{{ $date }}" role="tab"
                                    aria-controls="{{ $date }}"
                                    aria-selected="{{ $date === 'all' ? 'true' : 'false' }}">{{ $label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <!-- Tab content -->
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                @foreach (['nov20', 'nov21', 'nov22', 'nov23', 'nov24', 'nov25', 'nov26', 'nov27', 'nov28'] as $date)
                    @include("master-class.{$date}")
                @endforeach
            </div>

            @foreach (['nov20', 'nov21', 'nov22', 'nov23', 'nov24', 'nov25', 'nov26', 'nov27', 'nov28'] as $date)
                <div class="tab-pane fade" id="{{ $date }}" role="tabpanel"
                    aria-labelledby="{{ $date }}-tab">
                    @include("master-class.{$date}")
                </div>
            @endforeach
        </div>

        {{-- </div> --}}
    </div>

    {{-- POPUP --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-icon">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="modalDate"></span></li>
                        <li><i class="fa fa-briefcase" aria-hidden="true"></i> In Conversation Panel</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> Moderator: <span id="modalModerator"></span>
                        </li>
                    </ul>
                    <p id="modalDescription"></p>
                    <h4>Speakers</h4>
                    <ol class="list-group list-group-numbered" id="modalSpeakers"></ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup for Speaker Details -->
    {{-- <div class="modal fade" id="details-info" tabindex="-1" aria-labelledby="details-infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header title-boder-none">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                            <img id="speakerImage" src="" class="img-fluid" alt="Speaker Image">
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <h4 id="speakerName"></h4>
                            <p id="speakerDescription"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Popup End -->

    {{-- Script Start --}}
    <script>
        // const modalData = {
        //     nov20: {
        //         title: "Beyond The Lens: Funding and Monetization in Documentary Filmmaking",
        //         date: "June 16th, 2024, 04.30 PM TO 05.30 PM",
        //         moderator: "Vani Tripathi Tikoo",
        //         description: "Detailed description for Nov 20.",
        //         speakers: [{
        //             name: "Svetlana Naudiyal",
        //             description: "Serving MUBI as the Programming Director of Asia-Pacific region.",
        //             image: "images/user1.jpg"
        //         }]
        //     },
        //     nov21: {
        //         title: "Women Safety and Cinema",
        //         date: "Nov 21st, 2024, 11.00 AM TO 12.00 PM",
        //         moderator: "Vani Tripathi Tikoo",
        //         description: "Explores the evolution of female characters and the impact of films on societal attitudes towards women's safety.",
        //         speakers: [{
        //                 name: "Imtiaz Ali",
        //                 description: "Indian film director and screenwriter, known for films like Jab We Met.",
        //                 image: "{{ asset('public/images/master-class/Imtiaz_Ali.avif') }}"
        //             },
        //             {
        //                 name: "Suhasini Manirathnam",
        //                 description: "Actress and director with notable films in Telugu, Tamil, and Malayalam cinema.",
        //                 image: "{{ asset('public/images/master-class/Suhasini Manirathnam.jfif') }}"
        //             },
        //             {
        //                 name: "Kushboo Sundar",
        //                 description: "Actress and politician, prominent in Tamil cinema.",
        //                 image: "{{ asset('public/images/master-class/Kushboo Sundar.jpg') }}"
        //             }
        //         ]
        //     },
        // };


        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener('click', function() {
                const dateId = this.id.split('-')[0]; // Get the ID part before '-tab'
                const data = modalData[dateId];
                // console.log(data);
                if (data) {
                    document.getElementById('exampleModalLabel').innerText = data.title;
                    document.getElementById('modalDate').innerText = data.date;
                    document.getElementById('modalModerator').innerText = data.moderator;
                    document.getElementById('modalDescription').innerText = data.description;
                    const speakersList = document.getElementById('modalSpeakers');
                    speakersList.innerHTML = '';
                    data.speakers.forEach(speaker => {
                        const li = document.createElement('li');
                        li.className =
                            'list-group-item d-flex justify-content-between align-items-start title-tab';
                        li.innerHTML = `
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">${speaker.name}</div>
                                <p>${speaker.description}</p>
                            </div>
                            <span>
                                <img src="${speaker.image}" class="img-circle" style="cursor: pointer;" onclick="showSpeakerDetails('${speaker.name}', '${speaker.description}', '${speaker.image}')">
                            </span>
                        `;
                        speakersList.appendChild(li);
                    });
                }
            });
        });

        // function showSpeakerDetails(name, description, image) {
        //     document.getElementById('speakerName').innerText = name;
        //     document.getElementById('speakerDescription').innerText = description;
        //     document.getElementById('speakerImage').src = image;
        //     // Show the speaker details modal
        //     const speakerDetailsModal = new bootstrap.Modal(document.getElementById('details-info'));
        //     speakerDetailsModal.show();
        // }
    </script>
    {{-- Script End --}}

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
