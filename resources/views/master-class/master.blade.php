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
            <!-- Opening & Closing Venue -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs custom-tab-list nav-justified" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab"
                        aria-controls="home" aria-selected="true">All</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="nov20-tab" data-bs-toggle="tab" href="#nov20" role="tab"
                        aria-controls="nov20" aria-selected="false">Nov 20</a>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="  mt-4 mb-4">
                        <h2 class="pb-3">November 17,2024</h2>
                        <div class="d-flex tab-content-box">
                            <h4 class="time-div">02 pm</h4>
                            <div class="callout">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s</p>
                                <div><a href="#" class="btn cus-prim-btn  ">Speaker</a></div>
                            </div>
                            <div class="user-profile-icon">
                                <ul>
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
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
                                    <li><img src="{{ asset('public/images/master-class/user1.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user2.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user3.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user4.jpg') }}"></li>
                                    <li><img src="{{ asset('public/images/master-class/user5.jpg') }}"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
