@extends('layouts.app')
@section('site_title', '3rd Edition Gala Premier | IFFI Goa - Celebrating Excellence in Global Cinema')
@section('site_description',
    'Experience the 3rd Edition of the Gala Premier at IFFI Goa, showcasing the best of
    international and Indian cinema. Join us for exclusive screenings, star-studded events, and celebrate cinematic
    excellence in a vibrant festival atmosphere.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Banner Section -->
    <div class="container-fluid page-header bannerBg-56th_edition py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">56th IFFI Film Festival</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class=" mt-5 ">
                <div class="section-heading title-line mb-4">
                    <h2>56th IFFI Gala Premiere</h2>
                </div>
                <div class="mt-4">
                    <p>
                        In its fourth edition, the Gala Premieres and Red-Carpet segment at IFFI continues to grow bigger
                        and better. With a spectacular line-up of renowned names from the world of cinema, Gala Premieres in
                        the past three years have created tremendous buzz, making the red carpet one of the most glamorous
                        and sought-after highlights of the festival. Conceived with the idea of bridging the gap between
                        audiences and stars, Gala Premieres and the Red-Carpet segment offer cinephiles an opportunity to
                        see and engage with artists up close as they attend the festival for the World, Asia, and India
                        premieres of their respective films.
                    </p>

                    <p>
                        Over the last three editions, IFFI has showcased an impressive mix of films and series such as
                        Drishyam 2, Ae Watan Mere Watan, Bhediya, Gandhi Talks, Qala, Lost, Goldfish, Kadak Singh, Farrey,
                        Rauta Ka Raaz, Telugu series Dhootha, international series Fauda (Season 4), and international
                        documentary Interactions, among several others. These screenings were graced by leading celebrities
                        including Salman Khan, Ajay Devgn, Aditi Rao Hydari, Nawazuddin Siddiqui, Manoj Bajpayee, Varun
                        Dhawan, A.R. Rahman, Sunny Deol, Vijay Sethupathi, Karan Johar, Naga Chaitanya, Sara Ali Khan,
                        Pankaj Tripathi, and Nushrat Bharucha, making the red carpet a truly star-studded affair.
                    </p>



                    <ul class="list-block">
                        <p>
                            <b>
                            For the 56th IFFI Gala Premieres, the tentative line-up promises an exciting mix of genres and
                            languages, further raising the bar. Probable titles under consideration include:
                            </b>
                        </p>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Tere Ishk Mein - World Premiere (Hindi Feature) *ing Dhanush, Kriti Sanon.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Rahu Ketu - World Premiere (Hindi Feature) *ing Pulkit Samrat, Varun Sharma, Shalini Pandey.
                        </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Hanti Hanti Pa Pa - World Premiere (Bengali Feature) *ing Rukmini Maitra, Chiranjeet
                            Chakraborty.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Bindusagar - World Premiere (Odia Feature) *ing Prakruti Mishra, Sukant Rath.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Asambhav - World Premiere (Marathi Feature) *ing Sachit Patil,Mukta Barve,Priya Bapat.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Rudhirvana - World Premiere (Kannada Feature) *ing Paavana Gowda,Apoorva, Krishna Hebbale.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Sholay - Special Showcase (4K Restored Classic Hindi Feature) *ing Amitabh Bacchaan, Dharmendra.
                        </li>
                    </ul>

                    <p>This diverse selection, ranging from big-banner Hindi releases to regional cinema, international
                        showcases, and global OTT premieres, will once again make the Gala Premieres and Red-Carpet segment
                        a marquee attraction of the 56th IFFI.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
