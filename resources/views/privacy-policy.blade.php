@extends('layouts.app')
@section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us')
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
            <h1 class="page-title-header">Privacy Policy</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">
                    <p>We at ESG and IFFI recognize the importance of maintaining your privacy. We value your privacy and
                        appreciate your trust in us. This Policy describes how we treat user information we collect on
                        my.iffigoa.org. This Privacy Policy applies to current and former visitors to our website. By
                        creating MYIFFI account, you agree to this Privacy Policy.
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="section-heading  mt-5 ">
                        <h2>Information we collect</h2>
                        <h4 class="mb-2">.</h4>
                    </div>
                    <div class="policy-page">
                        <ul>
                            <li>
                                <p>Information we collect</p>
                                <p>We might collect your name, email, mobile number, phone number, street, city, state, Pin
                                    /Zip
                                    code,country.</p>
                            </li>
                            <li>
                                <p>Payment and billing information</p>
                                <p>We might collect your billing name, billing address and payment method when you pay the
                                    necessary fee towards delegate registration. We NEVER collect your credit/debit card
                                    number or credit/debit card expiry date or other details pertaining to your credit/debit
                                    card on our website. Credit/debit card information will be obtained and processed by our
                                    online payment partner.</p>
                            </li>
                            <li>
                                <p>Activity information</p>
                                <p>We may collect information regarding the tickets you booked and any other information
                                    provided by you during the use of our website. We might collect this information as a
                                    part of survey and to improve delegate experience for the next edition of the festival.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="section-heading  mt-5 ">
                        <h2>Use of your personal information</h2>
                        <h4 class="mb-2">.</h4>
                    </div>
                    <div class="policy-page">
                        <ul>
                            <li>
                                <p>We use information to contact you</p>
                                <p>We might use the information you provide to contact you for confirmation of registration,
                                    send event updates, newsletters, etc.</p>
                            </li>
                            <li>
                                <p>We use information for security purposes</p>
                                <p>We may use information to protect our company, our customers, or our websites.</p>
                            </li>
                            <li>
                                <p>We use information for promotional and Invitation purposes</p>
                                <p>We might send you information about other festivals and events we think you might find
                                    interesting.</p>
                            </li>
                            <li>
                                <p>We use information to send you transactional communications</p>
                                <p>We might send you emails or SMS about your account or ticket booking.We use information
                                    as otherwise permitted by law.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-12 col-12">
                    <p>We use information as otherwise permitted by law. </p>
                    <p>If you have any queries regarding our privacy policy, please contact us by e-mail at
                        <strong>info@iffigoa.org</strong>
                        or write to us at The Entertainment Society of Goa, Maquinez Palace Complex, Dayanand Bandodkar
                        Marg, Campal Panaji Goa.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
