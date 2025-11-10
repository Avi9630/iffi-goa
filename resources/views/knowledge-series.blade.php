@extends('layouts.app')
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
            <h1 class="page-title-header">Knowledge Series</h1>
        </div>
    </div>
    <section class="knowledge-series">
        
            <div class="container mt-4 text-end">
                <a href="{{ asset('public/pdfs/KS Schedule.pdf') }}" class="btn cus-prim-btn" target="_blank">Know
                    More About
                    Knowledge Series Schedule</a>
            
        </div>
            <!-- Inner Page Banner Section -->
            <div class="container mt-5 static-content ">


                {{-- <div class="row">
                <div class="col-sm-12">
                    <div class="master-nav-bar">
                        <ul class="nav nav-tabs custom-tab-list nav-justified " id="myTabD" role="tablist">
                            @foreach (['all' => 'All', 'nov20' => 'Nov 20', 'nov21' => 'Nov 21', 'nov22' => 'Nov 22', 'nov23' => 'Nov 23', 'nov24' => 'Nov 24', 'nov25' => 'Nov 25', 'nov26' => 'Nov 26', 'nov27' => 'Nov 27', 'nov28' => 'Nov 28'] as $date => $label)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{ $date === 'all' ? 'active' : '' }}" id="{{ $date }}-tab"
                                        data-bs-toggle="tab" href="#{{ $date }}" role="tab"
                                        aria-controls="{{ $date }}"
                                        aria-selected="{{ $date === 'all' ? 'true' : 'false' }}">{{ $label }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> --}}

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        @foreach (['nov20', 'nov21', 'nov22', 'nov23', 'nov24', 'nov25', 'nov26', 'nov27', 'nov28'] as $date)
                            @include("knowledge-series.{$date}")
                        @endforeach
                    </div>

                    @foreach (['nov20', 'nov21', 'nov22', 'nov23', 'nov24', 'nov25', 'nov26', 'nov27', 'nov28'] as $date)
                        <div class="tab-pane fade" id="{{ $date }}" role="tabpanel"
                            aria-labelledby="{{ $date }}-tab">
                            @include("knowledge-series.{$date}")
                        </div>
                    @endforeach
                </div>

            </div>

    </section>
    {{-- Script Start --}}
    <script>
        const modalData = {

            // 20 November Modal Data Start
            nov20: [{}],
            // 20 November Modal Data End

            // 21 November Modal Data Start
            nov21: [{
                    title: "State Focus Session: (From Script to Screen: The Role of Government and Industry Collaboration in Madhya Pradesh)",
                    moderator: "",
                    panel: "Amar Kaushik Actors of Laapata Ladies Sheo Shekhar Shukla",
                    date: "Nov 21st, 2024, 2:45 PM - 3:30 PM",
                },
                {
                    title: "The Future of Indian Independent Films",
                    moderator: "Rajeev Masand",
                    panel: "Dominique Welinsky Marten Rabarts Sanjeev Sivan Vrunda Manohar Desai / Neerja Sekhar ",
                    date: "Nov 21st, 2024, 3:45 PM - 4:30PM",
                },
                {
                    title: "Exploring Genre Cinema: A Masterclass with Chuck Russell",
                    moderator: "Bhuvan Lall",
                    panel: "Chuck Russell",
                    date: "Nov 21st, 2024, 4:45 PM - 5:30 PM",
                },
                {
                    title: "The Film Festival Journey: Navigating the circuit as a filmmaker ",
                    moderator: "Chaitanya Prasad",
                    panel: "Jyoti Deshpande Manisha Koirala",
                    date: "Nov 21st, 2024, 5:45 PM - 6:30PM",
                }
            ],
            // 21 November Modal Data End

            // 22 November Modal Data Start
            // nov22: [{
            //         title: "Greenlighting Your Project: Strategies for Film & Series Creators",
            //         moderator: "Richie Mehta (Writer/Director/Producer) ",
            //         panel: "Manish Menghani, Nikkhil Advani",
            //         date: "Nov-22nd, 2024, 12:45 PM - 1:30 PM",
            //     },
            //     {
            //         title: "Building a Film-Friendly Uttarakhand: Initiatives, Incentives and the Role of Stakeholders",
            //         moderator: "Maya Maheshwari",
            //         panel: "Nirupama Kotru Arushi Nishank",
            //         date: "Nov-22nd, 2024, 2:45 PM - 3:30 PM",
            //     },
            //     {
            //         title: "Understanding AI: How AI shapes the future of storytelling",
            //         moderator: "Saraswathi Balgalm",
            //         panel: "Prateek Arora Pooja Shetty",
            //         date: "Nov-22nd, 2024, 3:45 PM - 4:30 PM",
            //     },
            //     {
            //         title: "Women in Film LA: An Insightful discussion",
            //         moderator: "Sanjay Ram",
            //         panel: "Guneet Monga Andrea Wilson Apoorva Bakshi Esha Gupta",
            //         date: "Nov-22nd, 2024, 4:45 PM - 5:30 PM",
            //     },
            //     {
            //         title: "Unlocking Global Funds for Aspiring Filmmakers",
            //         moderator: "Larisa Gutmanis",
            //         panel: "Ilann Girard Prithul Kumar Wonsun Shin Chris Payne Pan Nalin",
            //         date: "Nov-22nd, 2024, 5:45 PM- 6:30 PM",
            //     }
            // ],
            nov22: [{
                    title: "Greenlighting Your Project: Strategies for Film & Series Creators",
                    moderator: "Richie Mehta, Writer/Director/Producer",
                    // panel: "",
                    date: "Nov-22st, 2024, 12.45 PM TO 01.30 PM",
                    speakers: [{
                            name: "Manish Menghani, Director, Content Licensing, Prime Video, India",
                        },
                        {
                            name: "Nikkhil Advani, Producer/Director/Writer",
                        }
                    ]
                },
                {
                    title: "Building a Film-Friendly Uttarakhand: Initiatives, Incentives and the Role of Stakeholders",
                    moderator: "Maya Maheshwari, IRS, Principal Commissioner of Income Tax, Bhopal (MP)",
                    // panel: "",
                    date: "Nov-22nd, 2024, 02.45 AM TO 03.30 PM",
                    description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                    speakers: [{
                            name: "Banshidhar Tiwari, IAS, CEO Uttarakhand Film Development Council",
                        },
                        {
                            name: "Shantanu Moitra",
                        },
                    ]
                },
                {
                    title: "Understanding AI: How AI Shapes the Future of Storytelling",
                    moderator: "Saraswathi Buyyala, Writer/Director/Creative Producer",
                    // panel: "In Conversation",
                    date: "Nov-22nd, 2024, 03.45 PM TO 04.30 PM",
                    speakers: [{
                            name: "Prateek Arora, Screenwriter/AI Artist and VP Development at BANG BANG",
                        },
                        {
                            name: "Pooja Shetty, Filmmaker, Co-founder, Stotomata Studios",
                        },
                        {
                            name: "Merzin Tavaria, Co-founder and Global President, DNEG",
                        },
                        {
                            name: "Sanjay Jaju, Secretary, Ministry of I&B",
                        }
                    ]
                },
                {
                    title: "Women In Film - India Chapter: A New Vision",
                    moderator: "Suchin Mehrotra, Critic, Film Journalist At The Hollywood Reporter, India",
                    // panel: "In Conversation",
                    date: "Nov-22nd, 2024, 04.45 PM TO 05.30 PM",
                    // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                    speakers: [{
                            name: "Guneet Monga Kapoor, Producer & CEO, Sikhya Entertainment Pvt. Ltd.",
                        },
                        {
                            name: "Andria Wilson Mirza, Director of International Programs, Women In Film Los Angeles",
                        },
                        {
                            name: "Aparna Purohit, Chief Executive Officer, Aamir Khan Productions",
                        },
                        {
                            name: "Tillotama Shome, Actor/Producer",
                        },
                        {
                            name: "Jyoti Deshpande, President - Media & Entertainment, Reliance Industries limited",
                        }
                    ]
                },
                {
                    title: "Unlocking Global Funds for Aspiring Filmmakers",
                    moderator: "Larisa Gutmanis, Event Producer/Films Program Curator/Screenwriter/Producer",
                    date: "Nov-22nd, 2024, 05.45 PM TO 06.45 PM",
                    speakers: [{
                            name: "Chris Payne, Head of Co-Production and Incentives",
                        },
                        {
                            name: "Ilann Girard, Producer/Consultant/Financing Expert Founder and CEO, Arsam and Olffi.com",
                        },
                        {
                            name: "Wonsun Shin, Consultant (Hanmac Culture Group), Creative Strategist (Mediasmiths, Mumbai)",
                        },
                        {
                            name: "Prithul Kumar, Joint Secretary (Broadcasting - II) and MD, NFDC",
                        },
                        {
                            name: "Agnieszka Moody, Head of International Relations, BFI",
                        }
                    ]
                }
            ],
            // 22 November Modal Data End

            // 23 November Modal Data Start
            nov23: [{
                    title: "Film Facilitation: Australia & India’s Co Production Journey",
                    moderator: "Mayank Shekhar, Film Critic",
                    // panel: "Michele McDonald Grainne Brunsdon Claire Dobbin Mitu Bhowmik Vrunda Manohar Desai",
                    date: "Nov-23rd, 2024, 9:45 AM - 10:30 AM",
                    speakers: [{
                            name: "Michele McDonald, Senior Manager, Producer Offset and Co Production, Screen Australia",
                        },
                        {
                            name: "Claire Dobbin, Script Consultant",
                        },
                        {
                            name: "Mitu Bhowmick Lange AM, Festival Director/Film Producer/Film Distributor",
                        },
                        {
                            name: "Grainne Brunsdon, Chief Operating Officer,Screen Australia",
                        },
                        {
                            name: "Vrunda Manohar Desai, Joint Secretary (Films), Ministry of I&B",
                        }
                    ]
                },
                {
                    title: "Film Independent’s Global Media Makers: Building Bridges And Forging Community Around The World",
                    moderator: "",
                    // panel: "Bikas Mishra Sheila Sawhney",
                    date: "Nov-23rd, 2024, 10:45 AM - 11:30 PM",
                    speakers: [{
                            name: "Sheila Sawhny, Senior Manager, Global Media Makers, Film Independent",
                        },
                        {
                            name: "Bikas Mishra, Writer/Director",
                        },

                    ]
                },
                {
                    title: "The Adaptation Spectrum: Trend of Remaking Foreign Series in India",
                    moderator: "Bijesh Jayarajan, Screenwriter/Show Creator",
                    // panel: "Sameer Gogate Mrinalini Jain",
                    date: "Nov-23rd, 2024, 11:45 AM-12:30 PM",
                    speakers: [{
                            name: "Mrinalini Jain, Group Chief Development Officer, Banijay Asia",
                        },
                        {
                            name: "Suparn S Varma, Director/Screenwriter/ Producer",
                        },
                        {
                            name: "Sameer Gogate, General Manager, BBC Studios, India"
                        },
                        {
                            name: "Kirti Kulhari, Actor/Producer"
                        }
                    ]
                },
                {
                    title: "The Evolution of Digital Filmmaking: Building Skills for Tomorrow",
                    moderator: "Vijay Vikram Singh, Actor, Voice actor, Voice Coach",
                    // panel: "Sonal Mishra Neerja Sekhar Mahima Kaul Neeraj Malik Sharad Mehra Sanjeev Sankar",
                    date: "Nov-23rd, 2024, 12:45PM - 1:30PM",
                    speakers: [{
                            name: "Mahima Kaul, Director, Public Policy, NetFlix",
                        },
                        {
                            name: "Neeraj Malik, Chief Business Offier, Enterprise Business Group, Aptech Limited",
                        },
                        {
                            name: "Sanjiv Shankar, Joint Secretary (Broadcasting I), Ministry of I&B"
                        },
                        {
                            name: "Biren Ghose, Managing Director - Asia Pacific & Global Excom Member for Technicolor Group"
                        },
                        {
                            name: "Atul Kumar Tiwari, IAS, Secretary, MSDE"
                        }
                    ]
                },
                {
                    title: "Cinema-Friendly Maharashtra: Government Policies and Institutional Support for Film Production",
                    moderator: "Dr. Santosh Pathare, Filmmaker",
                    // panel: "Guneet Monga James Bowsher Bich Quan Tran Claire Chassagne Ravi Kottarakara",
                    date: "Nov-23rd, 2024, 2:30 PM - 3:15 PM",
                    speakers: [{
                            name: "Chhaya Kadam, Actor",
                        },
                        {
                            name: "Aditya Sarpotdar, Film Director",
                        },
                        {
                            name: "Nikhil Mahajan, Film Director"
                        },
                        {
                            name: "Swati Mhase - Patil, IAS, Managing Director, Maharashtra Film, Stage, and Cultural Development Corporation"
                        },
                        {
                            name: "Dr. Dhananjay Sawalkar, Joint Managing Director, Maharashtra Film, Stage, and Cultural Development Corporation"
                        }
                    ]
                },
                {
                    title: "Learning from the Masters: How to crack International Co-Production ",
                    moderator: "Jérôme Paillard, Consultant, Troposphere/ Advisor, Film Bazaar",
                    // panel: "Guneet Monga James Bowsher Bich Quan Tran Claire Chassagne Ravi Kottarakara",
                    date: "Nov-23rd, 2024, 3:30 PM - 4:15 PM",
                    speakers: [{
                            name: "Guneet Monga Kapoor, Producer & CEO, Sikhya Entertainment Pvt. Ltd.",
                        },
                        {
                            name: "Ravi Kottarakara, President of Film Federation of India",
                        },
                        {
                            name: "Bich Quan Tran, Founder of Dissidenz Films"
                        }
                    ]
                },
                {
                    title: "Lights, Camera, Hashtags: Social Media's Impact on Today's Cinema ",
                    moderator: "Puja Talwar, Journalist",
                    // panel: "Vaibhav Munjal C.Senthil Rajan Meera Chopra",
                    date: "Nov-23rd, 2024, 4:30 PM - 5:15 PM",
                    speakers: [{
                            name: "Dhruv Sehgal, Screenwriter, Director and Series-Creator",
                        },
                        {
                            name: "Aarushi Nishank, Producer/Actor",
                        },
                        {
                            name: "Meera Chopra, Actor"
                        },
                        {
                            name: "Vaibhav Munjal, CEO & Co-Founder, Chalchitra Talks"
                        },
                        {
                            name: "C. Senthil Rajan, Joint Secretary (IP&A) Ministry of I&B"
                        }
                    ]
                },
                {
                    title: "Micro to Millions: Low Budget Films becoming blockbusters",
                    moderator: "Amit Masurkur, Director/Screenwriter",
                    // panel: "Tisca Chopra Abhishek Chaubey Chidambaram S. Poduval Shahana Goswami",
                    date: "Nov-23rd, 2024, 5:30 PM- 6:30 PM",
                    speakers: [{
                            name: "Abhishek Chaubey, Filmmaker",
                        },
                        {
                            name: "Shoojit Sircar, Director/Producer",
                        },
                        {
                            name: "Tisca Chopra, Actor/Writer/Director"
                        },
                        {
                            name: "Chidambaram S. Poduval, Director, Writer"
                        },
                        {
                            name: "Shahana Goswami, Actor"
                        }
                    ]
                },
                {
                    title: "Saudi Films: Work in Progress",
                    moderator: "Amani Alashaer, Cinema Promotion Senior Specialist, Saudi Film Commission",
                    // panel: "Tisca Chopra Abhishek Chaubey Chidambaram S. Poduval Shahana Goswami",
                    date: "Nov-23rd, 2024, 06:33 PM- 07:30 PM",
                    speakers: [{
                            name: "Wesam Kattan, CEO, Alamiya Filmed Entertainment",
                        },
                        {
                            name: "Samira Kawas, Head of Production at Yellow Camel Studios",
                        },
                        {
                            name: "Fouad Alkhateeb, Head of Production at Muvi Studios, Riyadh, Saudi Arabia."
                        }
                    ]
                }

            ],

            // 24 November Modal Data Start
            nov24: [{
                    title: "Film Facilitation: Spain & India’s Co Production Journey",
                    moderator: "Bobby Bedi",
                    // panel: "Juan Manuel Guimerans Camilo Vazquez ICEX Representative Neerja Sekhar Dinesh K Patnaik",
                    date: "Nov-24th, 2024, 9:45 AM - 10:30 AM",
                    speakers: [{
                            name: "Juan Manuel Guimeráns Rubio, President of Spain Film Commission",
                        },
                        {
                            name: "Camilo Vázquez Bello, Deputy Director General on promotion and international relations, ICAA",
                        },
                        {
                            name: "Vicente Gomis Ruiz, Commercial Counsellor"
                        },
                        {
                            name: "Anna Saura Ramon, Producer"
                        },
                        {
                            name: "Neerja Sekhar, IAS, Special Secretary, Ministry of I&B"
                        }
                    ]
                },
                {
                    title: "Bihar: Emerging as a Film-Friendly Destination",
                    moderator: "Asmita Sharma, Actor",
                    // panel: "Saameer Mody Tarun Sawhney Hardik Mehta Anupria Goenka",
                    date: "Nov-24th, 2024, 10:45 AM - 11:30 AM",
                    speakers: [{
                            name: "Ravi Kishan, Actor",
                        },
                        {
                            name: "Abhay Sinha, Chairman of IMPPA",
                        },
                        {
                            name: "Amit Rai, Film Director, Writer"
                        },
                        {
                            name: "Dayanidhan Pandey, IAS, Secretary,Department of Art, Culture, and Youth,Government of Bihar"
                        }
                    ]
                },
                {
                    title: "Claiming your creativity: A guide to intellectual property rights",
                    moderator: "Lohita Sujith, Sr. Director, Copyright & Digital Economy, Motion Picture Association India",
                    // panel: "Madhu Chaudhary Apoorva Chandra Hitesh Jain Radhika Gopal",
                    date: "Nov-24th, 2024, 11:45 AM - 12:30 PM",
                    speakers: [{
                            name: "Madhu Gadodia, Deputy Managing Partner at Naik Naik And Co. & Anand And Naik",
                        },
                        {
                            name: "Radhika Gopal, Head of the Writers and Directors division at Tulsea",
                        },
                        {
                            name: "Hitesh Jain, Managing Partner, Parinam Law Associates"
                        },
                        {
                            name: "Apurva Chandra, IAS, Secretary, Ministry of Health & Family Welfare (MoHFW)"
                        }
                    ]
                },
                {
                    title: "Filming in India: A Land of Cinematic Opportunities",
                    moderator: "Prashant Nair, Showrunner/Director/Writer",
                    // panel: "",
                    date: "Nov-24th, 2024, 12:45 PM - 01:30 PM",
                    speakers: [{
                            name: "Guillermo Rodríguez, Founder, Director, Casa de la India",
                        },
                        {
                            name: "Déborah Benattar, Producer",
                        },
                        {
                            name: "Sanjeev Sivan, Filmmaker"
                        },
                        {
                            name: "Sunitha Ram, Executive Producer, La Sutra Pictures"
                        },
                        {
                            name: "Gaurav Dwivedi, IAS, CEO, Prasar Bharati"
                        }
                    ]
                },
                {
                    title: "Spotlight: Short Formats",
                    moderator: "Arfi Laamba, Actor/Founder Bombay Berlin Film Productions",
                    // panel: "Vrunda Manohar Desai Emmanuel Pappas Guillermo Marin Rodriguez Déborah Benattar Kilian Kerwin ",
                    date: "Nov-24th, 2024, 2: 45 PM - 3:30PM",
                    speakers: [{
                            name: "Hardik Mehta, Filmmaker",
                        },
                        {
                            name: "Anupria Goenka, Actor",
                        },
                        {
                            name: "Saameer Mody, Founder and Managing Director Pocket Films"
                        },
                        {
                            name: "Tarun Sawhney, President - APAC Shorts International Ltd."
                        }
                    ]
                },
                {
                    title: "Sales Vs Distribution: Key Diferences",
                    moderator: "Cary Sawhney, Film Festival Director, Programmer, Filmmaker",
                    // panel: "William Pieffier Arnaud Joseph Dennis Ruh",
                    date: "Nov-24th, 2024, 3: 45 PM - 4:30 PM",
                    speakers: [{
                            name: "William Pieffier, Executive Chairman & Co-Founder, Globalgate Entertainment",
                        },
                        {
                            name: "Shiladitya Bora, Producer, Distributor/ Founder, Platoon One Films",
                        },
                        {
                            name: "Dennis Ruh, Film & Media Industry Director"
                        },
                        {
                            name: "Arnaud Godart, Acquisitions Executive, Loco Films"
                        }
                    ]
                },
                {
                    title: "Nostalgia meets Opportunity: The Power of Re-Releasing Films ",
                    moderator: "Komal Nahta, Film Trade Analyst",
                    // panel: "Imtiaz Ali",
                    date: "Nov-24th, 2024, 4: 45 PM - 5:45 PM",
                    speakers: [{
                            name: "Mukesh Chhabra, Casting Director, Director",
                        },
                        {
                            name: "Ashish Saksena, COO - Cinemas, BookMyShow",
                        },
                    ]
                },
                {
                    title: "Closing Ceremony",
                    moderator: "",
                    // panel: "",
                    date: "Nov-24th, 2024, 06: 00 PM - 07: 00 PM",
                }
            ],

            nov25: [{}],

            // 26 November Modal Data Start
            nov26: [{}],

            // 27 November Modal Data Start
            nov27: [{}],
        };

        document.querySelectorAll('.title-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                const [dateId, sessionIndex] = this.id.split('-');
                const data = modalData[dateId][sessionIndex];
                if (data) {
                    document.getElementById('exampleModalLabel').innerText = data.title;
                    document.getElementById('modalDate').innerText = data.date;
                    document.getElementById('modalModerator').innerText = data.moderator;
                    // document.getElementById('panel').innerText = data.panel;

                    // Clear existing speakers and add new ones
                    const speakersList = document.getElementById('modalSpeakers');
                    speakersList.innerHTML = '';
                    data.speakers.forEach(speaker => {
                        const li = document.createElement('li');
                        li.className =
                            'list-group-item d-flex justify-content-between align-items-start title-tab';
                        li.style.cursor = 'pointer';

                        // Add onclick event to li for opening the modal
                        li.onclick = function() {
                            showSpeakerDetails(
                                speaker.name.replace(/'/g, "\\'"),
                                speaker.description.replace(/\\/g, ''),
                                speaker.image.replace(/'/g, "\\'")
                            );
                        };
                        // Populate the speaker list item
                        li.innerHTML =
                            `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="ms-2 me-auto">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="fw-bold">${speaker.name}</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                `;
                        speakersList.appendChild(li);
                    });
                }
            });
        });

        function showSpeakerDetails(name, description, image) {
            document.getElementById('speakerDetailsLabel').innerText = name;
            document.getElementById('speakerDescription').innerText = description;
            // document.getElementById('speakerImage').src = image;
            const speakerDetailsModal = new bootstrap.Modal(document.getElementById('speakerDetailsModal'));
            speakerDetailsModal.show();
        }
    </script>
    {{-- Script End --}}
    <style type="text/css">
        .title-tab {
            cursor: pointer;
        }

        .list-icon {
            display: flex;
            list-style: none;
            flex-direction: column-reverse;
            padding-left: 0;
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

        /* .knowledge-series .static-content p {
                            color: #3db223 !important;
                        } */

        /* .knowledge-series .custom-tab-list li a {
                        color: #3db223 !important;
                    } */

        /* .knowledge-series .custom-tab-list li {
                        border-right: solid 1px #3db223;
                    } */

        /* .knowledge-series .callout {
                        border-left: solid 4px #3db223;
                    } */

        /* .knowledge-series h2,
                    h4,
                    h5 {
                        color: #3db223;
                    } */

        /* .knowledge-series .custom-tab-list li .active {
                        background: #3db2234a !important;
                        border-bottom: solid 3px #3db223 !important;
                    } */

        /* .knowledge-series .custom-tab-list li a:hover {
                        background: #3db2234a !important;
                        border-bottom: solid 3px #3db223 !important;
                    } */
    </style>
@endsection
