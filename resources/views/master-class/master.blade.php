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
                    <ul class="nav nav-tabs custom-tab-list nav-justified " id="myTabD" role="tablist">
                        @foreach ($masterClasses as $masterClass)
                            <!-- Loop through dynamic data -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                    id="master-class-{{ $masterClass->id }}-tab" data-bs-toggle="tab"
                                    href="#master-class-{{ $masterClass->id }}" role="tab"
                                    aria-controls="master-class-{{ $masterClass->id }}"
                                    aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $masterClass->date }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            @foreach ($masterClasses as $masterClass)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="master-class-{{ $masterClass->id }}"
                    role="tabpanel" aria-labelledby="master-class-{{ $masterClass->id }}-tab">
                    <h5>{{ $masterClass->title }}</h5>
                    <p>{{ $masterClass->description }}</p>
                    <ul class="list-icon">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span>{{ $masterClass->start_time }} - {{ $masterClass->end_time }}</span>
                        </li>
                        <li><i class="fa fa-briefcase" aria-hidden="true"></i>
                            <span>{{ $masterClass->agenda }}</span>
                        </li>
                        <li><i class="fa fa-user" aria-hidden="true"></i>
                            Moderator: <span>{{ $masterClass->moderator }}</span></li>
                    </ul>

                    <h4>Speakers</h4>
                    <ol class="list-group list-group-numbered">
                        @foreach ($masterClass->speakers as $speaker)
                            <li class="list-group-item d-flex justify-content-between align-items-start title-tab"
                                style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                onclick="showSpeakerDetails('{{ $speaker->name }}', '{{ $speaker->description }}', '{{ $speaker->profile_img }}')">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $speaker->name }}</div>
                                </div>
                                <span><img src="{{ $speaker->profile_img }}" class="img-circle"></span>
                            </li>
                        @endforeach
                    </ol>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Speaker Details Modal -->
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

    <script>
        function showSpeakerDetails(name, description, image) {
            document.getElementById('exampleModalLabel').innerText = name;
            document.getElementById('speakerDescription').innerText = description;
            document.getElementById('speakerImage').src = image;
            const speakerDetailsModal = new bootstrap.Modal(document.getElementById('speakerDetailsModal'));
            speakerDetailsModal.show();
        }
    </script>


@endsection
