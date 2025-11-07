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

                    <p>
                        For the 56th IFFI Gala Premieres, the line-up promises an exciting mix of genres and languages,
                        further raising the bar. The schedule is here -
                        <br>
                        <b>SCHEDULE</b><br>

                        This diverse selection, ranging from big-banner Hindi releases to regional cinema, international
                        showcases, and global OTT premieres, will once again make the Gala Premieres and Red-Carpet segment
                        a marquee attraction of the 56th IFFI.
                    </p>

                    {{-- <ul class="list-block">
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
                            Chakraborty.
                        </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Bindusagar - World Premiere (Odia Feature) *ing Prakruti Mishra, Sukant Rath.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Asambhav - World Premiere (Marathi Feature) *ing Sachit Patil,Mukta Barve,Priya Bapat.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Rudhirvana - World Premiere (Kannada Feature) *ing Paavana Gowda,Apoorva, Krishna Hebbale.</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Sholay - Special Showcase (4K Restored Classic Hindi Feature) *ing Amitabh Bacchaan, Dharmendra.
                        </li>
                    </ul> --}}

                    {{-- @php
                        $seriesList = [
                            1 => [
                                'Series_Name' => 'Bandish Bandits Season 02',
                                'Country' => 'India',
                                'Year' => 2024,
                                'Language' => 'Hindi',
                                'Duration' => 320,
                                'Colour_BW' => 'Colour',
                                'Director' => 'Anand Tiwari',
                                'Creator' => 'Amritpal Singh Bindra, Anand Tiwari',
                                'Producer' => 'Leo Media Collective Pvt. Ltd.',
                                'Screenplay' =>
                                    'Atmika Didwania, Karan Singh Tyagi, Anand Tiwari, Sejal Pachisia, Digant Patil',
                                'Cinematographer' => 'Anubhav Bansal',
                                'Editor' => 'Tanupriya Sharma',
                                'Music_Director' =>
                                    'Siddharth Pandit, Amit Sharma, Shankar Ehsaan Loy, Oaff & Savera, Souumil Shringarpure & Siddharth, Meghdeep Bose, Prithvi Gandharv, Digv, Ana Rehman, Akashdeep Sengupta',
                                'Cast' =>
                                    'Ritwik Bhowmik, Shreya Chaudhry, Rajesh Tailang, Sheeba Chadha, Divya Dutta, Kunaal Roy Kapur, Atul Kulkarni, Saurabh Nayyar, Aaliyah Qureishi (Jhalli), Yashaswini Dayama, Rohan Gurbaxani',
                                'Synopsis' =>
                                    'Circumstances force Radhe and his family to join a televised national competition, not only will they have to reinvent themselves in order to fit in, but they will also have to battle Digvijay...',
                                'OTT_Logo' => 'Amazon Prime Video',
                                'Still' => 'STILLS',
                                'Teaser_Trailer' => '',
                            ],

                            2 => [
                                'Series_Name' => 'Black Warrant',
                                'Country' => 'India',
                                'Year' => 2025,
                                'Language' => 'Hindi',
                                'Duration' => 308,
                                'Colour_BW' => 'Colour',
                                'Director' => 'Vikramaditya Motwane',
                                'Creator' => 'Vikramaditya Motwane, Satyanshu Singh',
                                'Producer' =>
                                    'Applause Entertainment, Andolan Films, Netflix Entertainment Services India LLP',
                                'Screenplay' => 'Satyanshu Singh, Arkesh Ajay',
                                'Cinematographer' => 'Saumyananda Sahi',
                                'Editor' => 'Tanya Chhabria',
                                'Music_Director' => 'Ajay Jayanthi',
                                'Cast' =>
                                    'Zahan Kapoor, Anurag Thakur, Paramvir Singh Cheema, Rahul Bhat, Sidhant Gupta',
                                'Synopsis' =>
                                    'When an idealistic underdog becomes a jailer in Tihar, one of India’s largest and most infamous prisons...',
                                'OTT_Logo' => 'Netflix Entertainment Services India LLP',
                                'Still' => '',
                                'Teaser_Trailer' => '',
                            ],

                            3 => [
                                'Series_Name' => 'Mitti - Ek Nayi Pehchaan',
                                'Country' => 'India',
                                'Year' => 2025,
                                'Language' => 'Hindi',
                                'Duration' => 241,
                                'Colour_BW' => 'Colour',
                                'Director' => 'Gaganjeet Singh, Alok Kumar Dwivedi',
                                'Creator' => 'Akash Chawla, Arunava Joy Sengupta',
                                'Producer' => 'Fresh Lime Films LLP',
                                'Screenplay' => 'Nikhil Sachan',
                                'Cinematographer' => 'Dhananjay Navagrah',
                                'Editor' => 'Abhijit Deshpande',
                                'Music_Director' => 'Diptarka Bose',
                                'Cast' =>
                                    'Ishwak Singh, Shruti Sharma, Alka Amin, Yogendra Tikku, Piyush Kumar, Pranjal Pateriya, Sharat Sonu',
                                'Synopsis' =>
                                    '‘Mitti-Ek Nayi Pehchaan’ is a story about silent revolution of modern farming that is transforming India’s villages...',
                                'OTT_Logo' => 'Amazon MX Player',
                                'Still' => '',
                                'Teaser_Trailer' => '',
                            ],

                            4 => [
                                'Series_Name' => 'Paatal Lok Season 2',
                                'Country' => 'India',
                                'Year' => 2025,
                                'Language' => 'Hindi',
                                'Duration' => 356,
                                'Colour_BW' => 'Colour',
                                'Director' => 'Avinash Arun Dhaware',
                                'Creator' => 'Sudip Sharma',
                                'Producer' =>
                                    'Prime Video, Clean Slate Filmz Private Limited, Eunoia Films, Sudip Sharma, Babita Ashiwal',
                                'Screenplay' => 'Sudip Sharma, Abhishek Banerjee, Rahul Kanojia, Tamal Sen',
                                'Cinematographer' => 'Avinash Arun Dhaware',
                                'Editor' => 'Sanyukta Kaza',
                                'Music_Director' => 'Naren Chandavarkar, Benedict Taylor',
                                'Cast' =>
                                    'Jaideep Ahlawat, Ishwak Singh, Tillotama Shome, Gul Panag, Nagesh Kukunoor, Jahnu Barua, Anurag Arora, Prashant Tamang, Merenla Imsong, LC Sekhose',
                                'Synopsis' =>
                                    'Season 2 of the ground-breaking Amazon Original, Paatal Lok follows Inspector Hathi Ram Chaudhary...',
                                'OTT_Logo' => 'Prime Video',
                                'Still' => '',
                                'Teaser_Trailer' => '',
                            ],

                            5 => [
                                'Series_Name' => 'Suzhal - The Vortex Season 2',
                                'Country' => 'India',
                                'Year' => 2025,
                                'Language' => 'Tamil',
                                'Duration' => 365,
                                'Colour_BW' => 'Colour',
                                'Director' => 'Bramma',
                                'Creator' => 'Pushkar A K S, Gayatri S',
                                'Producer' => 'Pushkar & Gayatri',
                                'Screenplay' => 'Pushkar & Gayatri',
                                'Cinematographer' => 'Abraham Joseph',
                                'Editor' => 'Richard Kevin A.',
                                'Music_Director' => 'Sam C S',
                                'Cast' =>
                                    'Kathir, Aishwarya Rajesh, Lal, Saravanan, Manjima Mohan, Gouri G Kishan, Samyuktha Viola Viswanathan, Monisha Blessy, Rini, Shrisha, Abhirami Bose, Nikhila Sankar, Kalaivani Bhaskar, Aswini Nambiar, Kayal Chandran',
                                'Synopsis' =>
                                    'Set in the coastal town of Kaalipattanam during the vibrant 10-day Ashtakaali festival...',
                                'OTT_Logo' => 'Amazon Prime Video',
                                'Still' => '',
                                'Teaser_Trailer' =>
                                    'Suzhal – The Vortex Season 2 Official Trailer | Prime Video India - YouTube',
                            ],
                        ];
                    @endphp
                    <div class="table-responsive data-table">
                        <table class="table table-striped table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Series Name</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Language</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Colour / Black & White</th>
                                    <th scope="col">Director</th>
                                    <th scope="col">Creator</th>
                                    <th scope="col">Producer</th>
                                    <th scope="col">Screenplay</th>
                                    <th scope="col">Cinematographer</th>
                                    <th scope="col">Editor</th>
                                    <th scope="col">Music Director</th>
                                    <th scope="col">Cast</th>
                                    <th scope="col">Synopsis (110)</th>
                                    <th scope="col">OTT Logo</th>
                                    <th scope="col">Still</th>
                                    <th scope="col">Teaser/ Trailer Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seriesList as $list)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $list['Series_Name'] }}</td>
                                        <td>{{ $list['Country'] }}</td>
                                        <td>{{ $list['Year'] }}</td>
                                        <td>{{ $list['Language'] }}</td>
                                        <td>{{ $list['Duration'] }}</td>
                                        <td>{{ $list['Colour_BW'] }}</td>
                                        <td>{{ $list['Director'] }}</td>
                                        <td>{{ $list['Creator'] }}</td>
                                        <td>{{ $list['Producer'] }}</td>
                                        <td>{{ $list['Screenplay'] }}</td>
                                        <td>{{ $list['Cinematographer'] }}</td>
                                        <td>{{ $list['Editor'] }}</td>
                                        <td>{{ $list['Music_Director'] }}</td>
                                        <td>{{ $list['Cast'] }}</td>
                                        <td>{{ $list['Synopsis'] }}</td>
                                        <td>{{ $list['OTT_Logo'] }}</td>
                                        <td>{{ $list['Still'] }}</td>
                                        <td>{{ $list['Teaser_Trailer'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}

                    @php
                        $schedule['21-Nov-25'] = [
                            'day' => 'Friday',
                            'films' => [
                                [
                                    'red_carpet_time' => '12:30',
                                    'show_time' => '13:15',
                                    'title' => 'The Family Man (S:3)',
                                    'red_carpet_guests' =>
                                        'Manoj Bajpai, Nimrat Kaur, Jaideep Ahlawat, Raj & DK, Nikhil Madhok',
                                    'cast' => 'Manoj Bajpai, Nimrat Kaur, Sharib Hashmi, Priyamani, Jaideep Ahlawat',
                                    'director' => 'Raj & DK',
                                    'producer' => 'Amazon Prime Video & D2R Films',
                                    'language' => 'Hindi',
                                    'genre' => 'Action / Drama',
                                    'premiere' => 'World Premiere',
                                    'duration' => '80 min (Ep + Interaction)',
                                    'audi' => 'Panjim Audi 1',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:15',
                                    'show_time' => '17:00',
                                    'title' => 'Asambhav',
                                    'red_carpet_guests' => 'Sachit Patil, Mukta Barve, Pushkar Shroti, Murli Chhatwani',
                                    'cast' => 'Sachit Patil, Mukta Barve, Priya Bapat, Sandeep Kulkarni',
                                    'director' => 'Sachit Patil | Pushkar Shrotri',
                                    'producer' => 'Panorama Studios',
                                    'language' => 'Marathi',
                                    'genre' => 'Mystery/Thriller',
                                    'premiere' => 'World Premiere',
                                    'duration' => '140 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '17:00',
                                    'show_time' => '17:45',
                                    'title' => '120 Bahadur',
                                    'red_carpet_guests' => 'Farhan Akthar, Razneesh Ghai',
                                    'cast' => 'Farhan Akthar, Raashi Khanna, Sparsh Walia',
                                    'director' => 'Razneesh Ghai',
                                    'producer' => 'Excel Entertainment',
                                    'language' => 'Hindi',
                                    'genre' => 'Action',
                                    'premiere' => 'Special Showcase',
                                    'duration' => '150 + 5 min',
                                    'audi' => 'Panjim Audi 1',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '13:00',
                                    'show_time' => '13:45',
                                    'title' => '1942: A Love Story',
                                    'red_carpet_guests' => 'Vidhu Vinod Chopra',
                                    'cast' => 'Anil Kapoor, Jackie Shroff',
                                    'director' => 'Vidhu Vinod Chopra',
                                    'producer' => 'Vidhu Vinod Chopra',
                                    'language' => 'Hindi',
                                    'genre' => 'Romance',
                                    'premiere' => 'Special Showcase',
                                    'duration' => '160 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['22-Nov-25'] = [
                            'day' => 'Saturday',
                            'films' => [
                                [
                                    'red_carpet_time' => '12:00',
                                    'show_time' => '12:30',
                                    'title' => 'Hanti Hanti Pa Pa',
                                    'red_carpet_guests' => 'Rukmini Maitra, Arnab Middya, Arunava',
                                    'cast' => 'Rukmini Maitra, Anjana Basu, Tulika Basu',
                                    'director' => 'Arnab Middya',
                                    'producer' => 'Celluloid Films',
                                    'language' => 'Bengali',
                                    'genre' => 'Romance',
                                    'premiere' => 'World Premiere',
                                    'duration' => '125 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:15',
                                    'show_time' => '17:00',
                                    'title' => 'Spying Stars',
                                    'red_carpet_guests' =>
                                        'Samanalee Fonseka, Indira Tiwari, Kaushalya Fernando, Saumya Liyanage, Vimukti Jayasundara, Nila Madhab Panda',
                                    'cast' =>
                                        'Samanalee Fonseka, Indira Tiwari, Kaushalya Fernando, Saumya Liyanage, Hidaayath Hazeer',
                                    'director' => 'Vimukti Jayasundara',
                                    'producer' => 'Nila Madhab Panda',
                                    'language' => 'English & Sinhala',
                                    'genre' => 'Fantasy',
                                    'premiere' => 'India Premiere',
                                    'duration' => '100 min + 20 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '18:00',
                                    'show_time' => '18:30',
                                    'title' => 'Papa Buka',
                                    'red_carpet_guests' => 'Dr. Biju Damodaran',
                                    'cast' => 'Sine Boboro, Ritabhari Chakraborty, Prakash Bare, John Sike',
                                    'director' => 'Dr. Biju Damodaran',
                                    'producer' => 'Noelene Taula Wunum, Akshay Kumar Parija, Pa. Ranjith, Prakash Bare',
                                    'language' => 'Tok Pisin, English',
                                    'genre' => 'Drama',
                                    'premiere' => 'Asia Premiere',
                                    'duration' => '100 min + 5 min',
                                    'audi' => 'Panjim Audi 2',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['23-Nov-25'] = [
                            'day' => 'Sunday',
                            'films' => [
                                [
                                    'red_carpet_time' => '16:00',
                                    'show_time' => '16:45',
                                    'title' => 'Lockdown',
                                    'red_carpet_guests' => 'Anupama Parmeshwaran, Charlie, A.R. Jeeva, Subaskaran',
                                    'cast' => 'Anupama Parmeshwaran, Charlie, Nirosha, Livingston',
                                    'director' => 'A.R. Jeeva',
                                    'producer' => 'Subaskaran, Lyca Productions',
                                    'language' => 'Tamil',
                                    'genre' => 'Drama/Thriller',
                                    'premiere' => 'World Premiere',
                                    'duration' => '122 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '17:00',
                                    'show_time' => '17:45',
                                    'title' => 'Vadh 2',
                                    'red_carpet_guests' => 'Sanjay Mishra, Neena Gupta, Jaspal Singh Sandhu',
                                    'cast' => 'Sanjay Mishra, Neena Gupta',
                                    'director' => 'Jaspal Singh Sandhu',
                                    'producer' => 'Luv Films',
                                    'language' => 'Hindi',
                                    'genre' => 'Drama',
                                    'premiere' => 'World Premiere',
                                    'duration' => '130 + 5 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['24-Nov-25'] = [
                            'day' => 'Monday',
                            'films' => [
                                [
                                    'red_carpet_time' => '15:45',
                                    'show_time' => '16:15',
                                    'title' => 'Rudhirvana',
                                    'red_carpet_guests' => 'Paavana Gowda, Apoorva, Krishna Hebbale, Agni',
                                    'cast' => 'Paavana Gowda, Apoorva, Krishna Hebbale, Arjun Kaje, Bala Rajwadi',
                                    'director' => 'Agni',
                                    'producer' => 'Point of View Pictures',
                                    'language' => 'Kannada',
                                    'genre' => 'Horror',
                                    'premiere' => 'World Premiere',
                                    'duration' => '145 + 5 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:45',
                                    'show_time' => '17:30',
                                    'title' => 'Gustaakh Ishq',
                                    'red_carpet_guests' => 'Vijay Verma, Fatima Sana Shaikh, Vibhu Puri',
                                    'cast' => 'Vijay Verma, Fatima Sana Shaikh',
                                    'director' => 'Vibhu Puri',
                                    'producer' => 'Stage5 Productions',
                                    'language' => 'Hindi',
                                    'genre' => 'Romance',
                                    'premiere' => 'World Premiere',
                                    'duration' => '128 + 10 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['25-Nov-25'] = [
                            'day' => 'Tuesday',
                            'films' => [
                                [
                                    'red_carpet_time' => '16:15',
                                    'show_time' => '17:00',
                                    'title' => 'Bindusagar',
                                    'red_carpet_guests' => 'Prakruti Mishra, Dipannit Dasmohapatra, Shiladitya Bora',
                                    'cast' =>
                                        'Prakruti Mishra, Dipannit Dasmohapatra, Robin Das, Sonalli Sharmistha, Sukant Rath',
                                    'director' => 'Abhishek Swain',
                                    'producer' => 'Platoon One Films',
                                    'language' => 'Odia',
                                    'genre' => 'Family Drama',
                                    'premiere' => 'World Premiere',
                                    'duration' => '130 + 5 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['26-Nov-25'] = [
                            'day' => 'Wednesday',
                            'films' => [
                                [
                                    'red_carpet_time' => '16:15',
                                    'show_time' => '17:00',
                                    'title' => 'Pennum Porattum',
                                    'red_carpet_guests' =>
                                        'Tovino Thomas*, Rajesh Madhavan, Santhosh T. Kuruvilla, Binu George Alexander',
                                    'cast' => 'Suttu (dog) along with 100 debut actors and over 400 trained animals',
                                    'director' => 'Rajesh Madhavan',
                                    'producer' =>
                                        'Santhosh T. Kuruvilla, Binu George Alexander, Sherin Rachel Santhosh STK Frames',
                                    'language' => 'Malayalam',
                                    'genre' => 'Socio-Environmental Allegory',
                                    'premiere' => 'World Premiere',
                                    'duration' => '122 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '17:15',
                                    'show_time' => '18:00',
                                    'title' => 'Sholay (4K)',
                                    'red_carpet_guests' => 'Ramesh Sippy, Hema Malini*, Shehazad Sippy',
                                    'cast' => 'Amitabh Bachchan, Hema Malini, Dharmendra, Jaya Bachchan',
                                    'director' => 'Ramesh Sippy',
                                    'producer' =>
                                        'G P Sippy (1975), Film Heritage Foundation in collaboration with Sippy Films',
                                    'language' => 'Hindi',
                                    'genre' => 'Action/Masala Western (Dacoit Style)',
                                    'premiere' => 'Asia Premiere',
                                    'duration' => '204 + 10 min',
                                    'audi' => 'Panjim Audi 1',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['27-Nov-25'] = [
                            'day' => 'Thursday',
                            'films' => [
                                [
                                    'red_carpet_time' => '12:30',
                                    'show_time' => '13:15',
                                    'title' => 'Andhra King Taluka',
                                    'red_carpet_guests' => 'Upendra*, Cheri Sir*',
                                    'cast' => 'Ram Pothineni, Bhagyashri Bhorse, Upendra, Rao Ramesh, Murli Sharma',
                                    'director' => 'Mahesh Babu P.',
                                    'producer' => 'Mythri Movie Makers',
                                    'language' => 'Telugu',
                                    'genre' => 'Drama',
                                    'premiere' => 'World Premiere',
                                    'duration' => '160 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:00',
                                    'show_time' => '16:45',
                                    'title' => 'This Tempting Madness',
                                    'red_carpet_guests' => 'Simone Ashley, Jennifer E. Montgomery, Marcei A. Brown',
                                    'cast' => 'Simone Ashley, Austin Stowell, Mojean Aria',
                                    'director' => 'Jennifer E. Montgomery',
                                    'producer' =>
                                        'Marcei A. Brown, Smoke Jumper Films, Mango Monster Productions, CatchLight Studios',
                                    'language' => 'English',
                                    'genre' => 'Psychological Thriller',
                                    'premiere' => 'World Premiere',
                                    'duration' => '100 + 20 min (Interaction)',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '17:00',
                                    'show_time' => '17:45',
                                    'title' => 'Raat Akeli Hai: The Bansal Mystery',
                                    'red_carpet_guests' =>
                                        'Nawazuddin Siddiqui, Chitrangada Singh, Honey Trehan, Mahima Kaul',
                                    'cast' => 'Nawazuddin Siddiqui, Chitrangada Singh, Radhika Apte',
                                    'director' => 'Honey Trehan',
                                    'producer' => 'Netflix',
                                    'language' => 'Hindi',
                                    'genre' => 'Crime/Mystery',
                                    'premiere' => 'World Premiere',
                                    'duration' => '135 + 20 min (Interaction)',
                                    'audi' => 'Panjim Audi 1',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];

                        $schedule['28-Nov-25'] = [
                            'day' => 'Friday',
                            'films' => [
                                [
                                    'red_carpet_time' => '11:30',
                                    'show_time' => '12:00',
                                    'title' => 'Tere Ishq Mein',
                                    'red_carpet_guests' => 'Kriti Sanon, Anand L Rai, Shiv Channana',
                                    'cast' => 'Dhanush, Kirti Sanon, Prabhudeva',
                                    'director' => 'Anand L. Rai',
                                    'producer' => 'Colour Yellow Productions & T-Series',
                                    'language' => 'Hindi',
                                    'genre' => 'Romance/Musical',
                                    'premiere' => 'World Premiere',
                                    'duration' => '150 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                            ],
                        ];
                    @endphp


                    <p><b> Gala Premieres Schedule and Red-Carpet Guests </b></p>
                    <div class="table-responsive data-table">
                        <table class="table table-striped table-bordered table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>DATE</th>
                                    <th>DAY</th>
                                    <th>RED CARPET TIME</th>
                                    <th>SHOW TIME</th>
                                    <th>TITLE</th>
                                    <th>GUESTS WALKING RED CARPET</th>
                                    <th>CAST</th>
                                    <th>DIRECTOR</th>
                                    <th>PRODUCER</th>
                                    <th>LANGUAGE</th>
                                    <th>GENRE</th>
                                    <th>PREMIERE</th>
                                    <th>DURATION</th>
                                    <th>AUDI</th>
                                    <th>VENUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($schedule as $date => $dayData)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</td>
                                        <td>{{ $dayData['day'] }}</td>
                                        @foreach ($dayData['films'] as $film)
                                            <td>{{ $film['red_carpet_time'] }}</td>
                                            <td>{{ $film['show_time'] }}</td>
                                            <td>{{ $film['title'] }}</td>
                                            <td>{{ $film['title'] }}</td>
                                            <td>{{ $film['red_carpet_guests'] }}</td>
                                            <td>{{ $film['cast'] }}</td>
                                            <td>{{ $film['director'] }}</td>
                                            <td>{{ $film['producer'] }}</td>
                                            <td>{{ $film['language'] }}</td>
                                            <td>{{ $film['genre'] }}</td>
                                            <td>{{ $film['premiere'] }}</td>
                                            <td>{{ $film['duration'] }}</td>
                                            <td>{{ $film['audi'] }}</td>
                                            <td>{{ $film['venue'] }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach --}}

                                @foreach ($schedule as $date => $dayData)
                                    @foreach ($dayData['films'] as $index => $film)
                                        <tr>
                                            {{-- Show Date and Day only on first film row for that date --}}
                                            @if ($index == 0)
                                                <td rowspan="{{ count($dayData['films']) }}">
                                                    {{ \Carbon\Carbon::parse($date)->format('F d, Y') }}
                                                </td>
                                                <td rowspan="{{ count($dayData['films']) }}">
                                                    {{ $dayData['day'] }}
                                                </td>
                                            @endif

                                            <td>{{ $film['red_carpet_time'] }}</td>
                                            <td>{{ $film['show_time'] }}</td>
                                            <td>{{ $film['title'] }}</td>
                                            <td>{{ $film['red_carpet_guests'] }}</td>
                                            <td>{{ $film['cast'] }}</td>
                                            <td>{{ $film['director'] }}</td>
                                            <td>{{ $film['producer'] }}</td>
                                            <td>{{ $film['language'] }}</td>
                                            <td>{{ $film['genre'] }}</td>
                                            <td>{{ $film['premiere'] }}</td>
                                            <td>{{ $film['duration'] }}</td>
                                            <td>{{ $film['audi'] }}</td>
                                            <td>{{ $film['venue'] }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- <p>This diverse selection, ranging from big-banner Hindi releases to regional cinema, international
                    showcases, and global OTT premieres, will once again make the Gala Premieres and Red-Carpet segment
                    a marquee attraction of the 56th IFFI.</p> --}}
            </div>
        </div>
    </div>
    </div>

@endsection
