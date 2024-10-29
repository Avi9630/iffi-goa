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
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs custom-tab-list nav-justified" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"
                        aria-controls="home" aria-selected="true">All</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov20-tab" data-bs-toggle="tab" href="#nov20" role="tab"
                        aria-controls="nov20" aria-selected="false">Nov 20
                        @include('master-class.20th')
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov21-tab" data-bs-toggle="tab" href="#nov21" role="tab"
                        aria-controls="nov21" aria-selected="false">Nov 21</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov22-tab" data-bs-toggle="tab" href="#nov22" role="tab"
                        aria-controls="nov22" aria-selected="false">Nov 22</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov23-tab" data-bs-toggle="tab" href="#nov23" role="tab"
                        aria-controls="nov23" aria-selected="false">Nov 23</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov24-tab" data-bs-toggle="tab" href="#nov24" role="tab"
                        aria-controls="nov24" aria-selected="false">Nov 24</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov25-tab" data-bs-toggle="tab" href="#nov25" role="tab"
                        aria-controls="nov25" aria-selected="false">Nov 25</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov26-tab" data-bs-toggle="tab" href="#nov26" role="tab"
                        aria-controls="nov26" aria-selected="false">Nov 26</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov27-tab" data-bs-toggle="tab" href="#nov27" role="tab"
                        aria-controls="nov27" aria-selected="false">Nov 27</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov28-tab" data-bs-toggle="tab" href="#nov28" role="tab"
                        aria-controls="nov28" aria-selected="false">Nov 28</a>
                </li>

            </ul>

            <!-- Tab content -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 20,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="  mt-4 mb-4">

                        <h2 class="pb-3">November 17,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov20" role="tabpanel" aria-labelledby="nov20-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 20,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov21" role="tabpanel" aria-labelledby="nov21-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 21,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov22" role="tabpanel" aria-labelledby="nov22-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 22,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov23" role="tabpanel" aria-labelledby="nov23-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 23,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab">Beyond The
                                    Lens : Funding and Monetization in Documentary Filmmaking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov24" role="tabpanel" aria-labelledby="nov24-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 24,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov25" role="tabpanel" aria-labelledby="nov25-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 25,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov26" role="tabpanel" aria-labelledby="nov26-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 26,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov27" role="tabpanel" aria-labelledby="nov27-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 27,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nov28" role="tabpanel" aria-labelledby="nov28-tab">
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 28,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="images/user1.jpg"></li>
                                    <li><img src="images/user2.jpg"></li>
                                    <li><img src="images/user3.jpg"></li>
                                    <li><img src="images/user4.jpg"></li>
                                    <li><img src="images/user5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Beyond The Lens : Funding and Monetization in
                        Documentary Filmmaking</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-icon">
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> June 16, 2024, 4.30 Noon - 5.30 PM</li>
                        <li> <i class="fa fa-briefcase" aria-hidden="true"></i> In Conversation Panel</li>
                        <li><i class="fa fa-user" aria-hidden="true"></i> Moderator : Vani Tripathi Tikoo</li>
                    </ul>
                    <p>GoPro cameras have been game changers in the realm of action cameras, revolutionizing short-form
                        video content and enhancing vlogging and blogging with engaging visuals that retain viewers on
                        YouTube. Learning how and where to use GoPros can significantly enhance content quality, leading to
                        increased revenue through YouTube monetization. YouTube supports creators who create content with
                        more retention and gives these creators more exposure through YouTube’s way of pushing the content
                        like suggestions, home page suggestions, and next ups. This session of “GoPro and YouTube” explores
                        the opportunities of using GoPros for YouTube content and also exploring the possiblities of
                        monetisation of contents and the vast opportunities youtube is offering. The session which is high
                        in content ,creativity and technology will have it’s might to it’s zenith when it is being moderated
                        by the stalwart Ms. Vani Tripathi Tikoo!</p>
                    <h4>Speakers</h4>

                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start title-tab"
                            data-bs-toggle="modal" data-bs-target="#details-info">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Svetlana Naudiyal</div>
                                <p>Serving MUBI as the Programming Director of Asia-Pacific region, curating content for the
                                    platform. </p>
                            </div>
                            <span><img src="images/user1.jpg" class="img-circle"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start title-tab"
                            data-bs-toggle="modal" data-bs-target="#details-info">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Svetlana Naudiyal</div>
                                <p>Serving MUBI as the Programming Director of Asia-Pacific region, curating content for the
                                    platform. </p>
                            </div>
                            <span><img src="images/user1.jpg" class="img-circle"></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start title-tab"
                            data-bs-toggle="modal" data-bs-target="#details-info">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Svetlana Naudiyal</div>
                                <p>Serving MUBI as the Programming Director of Asia-Pacific region, curating content for the
                                    platform. </p>
                            </div>
                            <span><img src="images/user1.jpg" class="img-circle"></span>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- Popup End -->

    <div class="modal fade" id="details-info" tabindex="-1" aria-labelledby="details-infoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header title-boder-none">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-md-6 col-sm-4 col-xs-12 ">
                            <img src="https://miff.in/wp-content/uploads/2024/06/bejoy-arputharaj.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <h4>Bejoy Arputharaj</h4>
                            <p>Bejoy Arputharaj is the Founder and CEO at PhantomFx. He is the VFX director of Ayalaan.
                                Bejoy has worked in more than 300 movies. And have worked in many prominent blockbuster
                                movies like Baahubali and RRR and expertise in the digital film production pipeline has made
                                PhantomFx a successful VFX Studio, with more than 700 employees working phantom is
                                headquartered in Chennai, with offices in Mumbai , Hyderabad, Los Angeles, Vancouver Dubai
                                and London. Bejoy’s success continues by recently acquiring a Multiple times Oscar winning
                                Hollywood VFX Studio Tippett VFX.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style type="text/css">
        .title-tab {
            cursor: pointer;
        }

        .list-icon {
            display: flex;
            list-style: none;
            flex-direction: column-reverse;
            padding-left: 0
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
