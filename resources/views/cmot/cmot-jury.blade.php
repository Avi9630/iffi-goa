@extends('layouts.app')
@section('site_title', 'Creative Minds of Tomorrow Selection Jury | IFFI Goa')
@section('site_description',
    'Explore the distinguished jury of IFFI Goa. Discover their backgrounds, expertise, and
    dedication to celebrating excellence in international cinema. ')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-cmot py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Creative Minds Of Tomorrow Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            {{-- <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Santosh Sivan</h2>
                                <h5>Chairperson</h5>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/debut-director-jury/Santosh Sivan.jpg') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            @php
                $features = [
                    'Shri. Manish Sharma, Direction',
                    'Shri. Manish Sain, Direction',
                    'Shri. Utkarshini Vashishtha, Scriptwriting',
                    'Shri. Charudutt Acharya, Scriptwriting',
                    'Shri. Vijay Vikram Singh, Voiceover/Dubbing',
                    'Shri. Sonal Kaushal, Voiceover/Dubbing',
                    'Shri. Bimal Poddar, Animation, Visual Effects (VFX), Augmented Reality (AR) and Virtual reality (VR)',
                    'Shri. Joshy Benedict, Voiceover/Dubbing',
                    'Shri. Nagendra K Ujjani, Editing and Subtitling',
                    'Shri. Girija Oak Godbole, Acting',
                    'Shri. Amol Gole, Cinematography',
                    'Shri. Sudeep Chatterjee, Cinematography',
                    'Shri. Ajay Bedi, Sound Recording',
                    'Shri. Shashwat Sachdev, Music Composition',
                    'Ms. Savaniee Ravindrra, Playback Singing',
                    'Ms. Archana Rao, Costume Design',
                    'Shri. Nachiket Barve, Hair and Makeup and Costume Design',
                    'Shri. Ranjith Ambady, Hair and Makeup',
                    'Shri. Nilesh Eknath Wagh, Art Direction',
                ];
            @endphp

            @foreach ($features as $key => $feature)
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $feature }}</h3>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
