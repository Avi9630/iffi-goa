@extends('layouts.app')
@section('site_title', '4th Edition Gala Premier | IFFI Goa - Celebrating Excellence in Global Cinema')
@section('site_description',
    'Experience the 4th Edition of the Gala Premier at IFFI Goa, showcasing the best of
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

                    @php
                        $schedule['21-Nov-25'] = [
                            'day' => 'Friday',
                            'films' => [
                                [
                                    'red_carpet_time' => '12:30',
                                    'show_time' => '13:15',
                                    'title' => 'The Family Man (S:3)',
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
                                    'cast' => 'Sachit Patil, Mukta Barve, Priya Bapat & Sandeep Kulkarni',
                                    'director' => 'Sachit Patil',
                                    'producer' => 'Nitin Prakash Vaidya and Mr. Sachit Patil',
                                    'language' => 'Marathi',
                                    'genre' => 'Suspense/Thriller',
                                    'premiere' => 'World Premiere',
                                    'duration' => '140 + 5 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '13:00',
                                    'show_time' => '13:45',
                                    'title' => '1942: A Love Story (4K)',
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
                                [
                                    'red_carpet_time' => '17:00',
                                    'show_time' => '17:45',
                                    'title' => '120 Bahadur',
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
                            ],
                        ];

                        $schedule['22-Nov-25'] = [
                            'day' => 'Saturday',
                            'films' => [
                                [
                                    'red_carpet_time' => '12:00',
                                    'show_time' => '12:30',
                                    'title' => 'Haati Haati Pa Pa',
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
                                    'cast' =>
                                        'Indira Tiwari,Samanalee Fonseka, Kaushalya Fernando, Saumya Liyanage, Hidaayath Hazeer',
                                    'director' => 'Vimukti Jayasundara',
                                    'producer' => 'Nila Madhab Panda',
                                    'language' => 'English & Sinhala',
                                    'genre' => 'Sci fi mystery drama',
                                    'premiere' => 'India Premiere',
                                    'duration' => '100 min + 20 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '18:00',
                                    'show_time' => '18:30',
                                    'title' => 'Papa Buka',
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
                                    'cast' => 'Paavana Gowda, Apoorva, Krishna Hebbale, Arjun Kaje, Bala Rajwadi',
                                    'director' => 'Agni',
                                    'producer' => 'Point of View Pictures',
                                    'language' => 'Kannada',
                                    'genre' => 'Horror',
                                    'premiere' => 'World Premiere',
                                    'duration' => '110',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:45',
                                    'show_time' => '17:30',
                                    'title' => 'Gustaakh Ishq',
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
                                    'red_carpet_time' => '11:45',
                                    'show_time' => '12:15',
                                    'title' => 'Vaimanik (The Pilot)',
                                    'cast' =>
                                        'Siddharth Nagoji, Soham Talkar, Aarti Parab, Mahadev Talkar, Shantaram Pawar, Ashwin Parab',
                                    'director' => 'Nitish Pires',
                                    'producer' => 'LAURIE NOTT',
                                    'language' => 'Konkani',
                                    'genre' => '',
                                    'premiere' => '',
                                    'duration' => '136 min',
                                    'audi' => 'Panjim Audi 4',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '16:15',
                                    'show_time' => '17:00',
                                    'title' => 'Pennum Porattum',
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
                                // [
                                //     'red_carpet_time' => '17:15',
                                //     'show_time' => '18:00',
                                //     'title' => 'Sholay (4K)',
                                //     'cast' => 'Amitabh Bachchan, Hema Malini, Dharmendra, Jaya Bachchan',
                                //     'director' => 'Ramesh Sippy',
                                //     'producer' =>
                                //         'G P Sippy (1975), Film Heritage Foundation in collaboration with Sippy Films',
                                //     'language' => 'Hindi',
                                //     'genre' => 'Action/Masala Western (Dacoit Style)',
                                //     'premiere' => 'Asia Premiere',
                                //     'duration' => '204 + 10 min',
                                //     'audi' => 'Panjim Audi 1',
                                //     'venue' => 'Inox Panjim, Old GMC Building',
                                // ],
                            ],
                        ];

                        $schedule['27-Nov-25'] = [
                            'day' => 'Thursday',
                            'films' => [
                                [
                                    'red_carpet_time' => '09:00',
                                    'show_time' => '09:15',
                                    'title' => 'Claudia',
                                    'cast' => '',
                                    'director' => 'Rajendra Narayan Talak',
                                    'producer' => '',
                                    'language' => 'Konkani',
                                    'genre' => '',
                                    'premiere' => '',
                                    'duration' => '103 min',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '11:15',
                                    'show_time' => '11:45',
                                    'title' => 'Manushya (Ep 1)',
                                    'cast' => 'Rahul Dev',
                                    'director' => '',
                                    'producer' => 'Prasar Bharati',
                                    'language' => 'Hindi',
                                    'genre' => '',
                                    'premiere' => '',
                                    'duration' => '',
                                    'audi' => 'Panjim Audi 3',
                                    'venue' => 'Inox Panjim, Old GMC Building',
                                ],
                                [
                                    'red_carpet_time' => '12:30',
                                    'show_time' => '13:15',
                                    'title' => 'Andhra King Taluka',
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
                                @foreach ($schedule as $date => $dayData)
                                    @foreach ($dayData['films'] as $index => $film)
                                        <tr>
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
            </div>
        </div>
    </div>

@endsection
