@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa 2024 International Festival Venues')
@section('site_description',
    'Discover the vibrant festival venues of IFFI Goa 2024. Get detailed information on
    locations, facilities, and events happening at each venue.')
@section('site_keywords',
    'IFFI Goa information, IFFI event venue, About IFFI venue, Festival location details, IFFI
    history and venue, Film festival India, Film festival venue, IFFI international film festival')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury <br>Non-Feature</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Subbiah Nallamuthu</h2>
                                <h5>Jury Chairperson</h5>
                                <p>
                                    Ashutosh Gowariker, an actor turned filmmaker from India, gained cinematic immortality
                                    with
                                    the cross-cultural period sports drama Lagaan, which earned worldwide acclaim and an
                                    Oscar
                                    nomination. He founded Ashutosh Gowariker Productions, producing acclaimed films like
                                    Swades
                                    and Jodhaa Akbar. His diverse repertoire includes romantic comedies, patriotic
                                    thrillers,
                                    and war epics like Mohenjo Daro and Panipat. Gowariker's films address nationalism,
                                    patriarchy, religious tolerance, and women's empowerment. A member of the Director's
                                    Branch
                                    in the Academy in Los Angeles, he is known for both historical epics and contemporary
                                    stories with profound themes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/indian-panorama-jury/Shri. Subbiah Nallamuthu.jpg') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = [
                    'Shri. Rajnikant Acharya, Producer and Film Director',
                    'Shri. Ronel Haobam, Film Director',
                    'Ms. Usha Deshpande, Film Director and Producer',
                    'Ms. Vandana Kohli, Film Director and Writer',
                    'Shri. Mithunchandra Chaudhari, Film Director',
                    'Ms. Shalini Shah, Film Director',
                ];
            @endphp

            <div class="card">
                <div class="card-body">
                    <ol>
                        @foreach ($features as $key => $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ol>
                    {{-- <div class="row  align-items-center ">
                    </div> --}}
                </div>
            </div>


        </div>
    </div>
@endsection