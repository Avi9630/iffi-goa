@extends('layouts.app')
@section('site_title', 'Film Bazaar Marriott Programme')
@section('site_description',
    'Join the exclusive Film Bazaar Marriott Programme, a premier platform for filmmakers and
    industry professionals to network, collaborate, and explore opportunities in the global film market. ')
@section('site_keywords',
    'Film Bazaar Marriott Programme, networking for filmmakers, global film market, industry
    collaboration, cinematic opportunities, Film Bazaar events, filmmaker networking, film industry programmes.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-marriott py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">FILMBAZAAR MARRIOTT STAGE PROGRAMME</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container mt-5 static-content">
            <div class="row">
                <div class="col-sm-12">
                    <h3> MARRIOTT STAGE PROGRAMME</h3>
                    <p>The Film Bazaar Marriott Stage (former Chef Pillai Restaurant) is being set up as an exclusive event
                        area for participants at Film Bazaar for small presentations, panel discussions and networking
                        events. </p>
                    <hr>
                    <div class="master-nav-bar">
                        <ul class="nav nav-tabs custom-tab-list nav-justified " id="myTabD" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"
                                    aria-controls="all" aria-selected="true">Nov 21</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="nov20-tab" data-bs-toggle="tab" href="#nov20" role="tab"
                                    aria-controls="nov20" aria-selected="false" tabindex="-1">Nov 22</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="nov21-tab" data-bs-toggle="tab" href="#nov21" role="tab"
                                    aria-controls="nov21" aria-selected="false" tabindex="-1">Nov 23</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="nov22-tab" data-bs-toggle="tab" href="#nov22" role="tab"
                                    aria-controls="nov22" aria-selected="false" tabindex="-1">Nov 24</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="mt-4 mb-4">
                        <h2 class="pb-3">November 21st, 2024</h2>
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">10:00 AM</h4>
                                    <h5 class="time-div">11:30 AM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        India Cine Hub Round Table with State Nodal Officers (Closed Door)
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">11:30 AM</h4>
                                    <h5 class="time-div">12:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 id="nov21-0-trigger">
                                        FICCI Networking
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">12:30 PM</h4>
                                    <h5 class="time-div">13:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        The new universe of Indian filmmaking Hyderabad
                                        Shri Jayesh Ranjan, IAS Chief Secretary, Telangana
                                        Shri Prakash Buyyala
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">14:00 PM</h4>
                                    <h5 class="time-div">16:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Japan Presentation
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">16:30 PM</h4>
                                    <h5 class="time-div">17:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Madhya Pradesh Round Table
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov20" role="tabpanel" aria-labelledby="nov20-tab">
                    <div class="mt-4 mb-4">
                        <h1 style="font-size: 24px;">AUSTRALIA DAY</h1>
                        <div class="row">
                            <h2 class="pb-3">November 22nd, 2024</h2>
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">10:00 AM</h4>
                                    <h5 class="time-div">11:30 AM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        DOING BUSINESS WITH AUSTRALIA
                                    </h4>
                                    <p>
                                        Australia is the official country of Focus at IFFI this year and is committed on
                                        growing film sector ties between Australia and India. Join this session to hear from
                                        Australia’s Consul General to Western India and experts from Screen Australia and
                                        Ausfilm as they provide an overview of various facilities available for film and TV
                                        makers wanting to find out how to work with Australia.
                                    </p>
                                    <ol>
                                        <li> Australian Consul-General to Western India - Paul Murphy</li>
                                        <li>COO, Screen Australia – Grainne Brunsdon</li>
                                        <li>CEO, Ausfilm – Kate Marks</li>
                                        <li>Senior Manager, Producer Offset and Co Production, Screen Australia – Michele
                                            McDonald</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">12:00 PM</h4>
                                    <h5 class="time-div">12:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Australia’s Love Affair with India- Discussion with the creators of FOUR YEARS LATER
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">13:00 PM</h4>
                                    <h5 class="time-div">13:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        FICCI NETWORKING
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">14:00 PM</h4>
                                    <h5 class="time-div">16:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Australia Speed Dating (By Invitation)
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">16:30 PM</h4>
                                    <h5 class="time-div">17:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Networking/ High Tea
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov21" role="tabpanel" aria-labelledby="nov21-tab">
                    <div class="mt-4 mb-4">
                        <h2 class="pb-3">November 23rd, 2024</h2>
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">10:00 AM</h4>
                                    <h5 class="time-div">11:30 AM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Round Table with International Film Commissions
                                    </h4>
                                    <p><b>Agenda:</b> </p>
                                    <ol>
                                        <li> To discuss advantage co-production treaty. </li>
                                        <li> How to leverage each other policies to help the industry.</li>
                                        <li> Initiatives taken by the Governments to support co -productions and local film
                                            industry in their respective country</li>
                                        <li> Briefing on WAVES 2025</li>
                                    </ol>
                                    <p>Moderated by Shruti Rajkumar, VP, India Cine Hub</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">12:00 PM</h4>
                                    <h5 class="time-div">13:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        FICCI Buyers Seller Meet
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">14:30 PM</h4>
                                    <h5 class="time-div">16:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Incentives Workshop
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">16:30 PM</h4>
                                    <h5 class="time-div">17:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Working with Germany. A presentation Simone Baumann, CEO Germany films
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov22" role="tabpanel" aria-labelledby="nov22-tab">
                    <div class="mt-4 mb-4">
                        <h2 class="pb-3">November 24th, 2024</h2>
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">10:00 AM</h4>
                                    <h5 class="time-div">11:30 AM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Producers Round Table (NFDC)
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">12:00 PM</h4>
                                    <h5 class="time-div">13:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        FICCI Buyers Sellers Meet
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <div class="row">
                            <div class="col-md-2 col-3">
                                <div class="master-time">
                                    <h4 class="time-div">14:00 PM</h4>
                                    <h5 class="time-div">16:30 PM</h5>
                                </div>
                            </div>
                            <div class="col-md-10 col-9">
                                <div class="callout">
                                    <h4 class="title-tab" id="nov21-0-trigger">
                                        Sony Workshop
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    <div class="mt-4 mb-4">
                                                         <div class="row">
                                                            <div class="col-md-2 col-3">
                                                               <div class="master-time">
                                                                  <h4 class="time-div">16:30 PM</h4>
                                                                  <h5 class="time-div">17:30 PM</h5>
                                                               </div>
                                                            </div>
                                                            <div class="col-md-10 col-9">
                                                               <div class="callout">
                                                                  <h4 class="title-tab" id="nov21-0-trigger">
                                                          ll
                                                                  </h4>
                                                                
                                                               </div>
                                                            </div>
                                                           
                                                         </div>
                                                         </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
