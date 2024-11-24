@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-knowledge-series py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Knowledge Series</h1>
        </div>
    </div>
    <section class="knowledge-series">
        <!-- Inner Page Banner Section -->
        <div class="container mt-5 static-content ">

            <div class="row">
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
            </div>

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

        {{-- POPUP --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-icon">
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i> <span id="modalDate"></span></li>
                            <li><i class="fa fa-briefcase" aria-hidden="true"></i><span id="panel"></span></li>
                            <li><i class="fa fa-user" aria-hidden="true"></i> Moderator :- <span id="modalModerator"></span>
                            </li>
                        </ul>
                        {{-- <h4>Speakers</h4>
                    <ol class="list-group list-group-numbered" id="modalSpeakers"></ol> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Speaker Details Modal -->
        <div class="modal fade" id="speakerDetailsModal" tabindex="-1" aria-labelledby="speakerDetailsLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="speakerDetailsLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="speakerImage" src="" alt="Speaker Image" class="img-fluid mb-3" />
                        <p id="speakerDescription"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Speakers Popup End -->
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
            nov22: [{
                    title: "Greenlighting Your Project: Strategies for Film & Series Creators",
                    moderator: "Richie Mehta",
                    panel: "Jyoti Deshpande Manisha Koirala",
                    date: "Nov-22nd, 2024, 12:45 PM - 1:30 PM",
                },
                {
                    title: "State Focus: 'Building a Film-Friendly Uttarakhand: Initiatives, Incentives, and the Role of Stakeholders'",
                    moderator: "",
                    panel: "Nirupama Kotru Arushi Nishank",
                    date: "Nov-22nd, 2024, 2:45 PM - 3:30 PM",
                },
                {
                    title: "Understanding AI: How AI shapes the future of storytelling",
                    moderator: "Saraswathi Balgalm",
                    panel: "Prateek Arora Pooja Shetty",
                    date: "Nov-22nd, 2024, 3:45 PM - 4:30 PM",
                },
                {
                    title: "Women in Film LA: An Insightful discussion",
                    moderator: "Sanjay Ram",
                    panel: "Guneet Monga Andrea Wilson Apoorva Bakshi Esha Gupta",
                    date: "Nov-22nd, 2024, 4:45 PM - 5:30 PM",
                },
                {
                    title: "Unlocking Global Funds for Aspiring Filmmakers",
                    moderator: "Larisa Gutmanis",
                    panel: "Ilann Girard Prithul Kumar Wonsun Shin Chris Payne Pan Nalin",
                    date: "Nov-22nd, 2024, 5:45 PM- 6:30 PM",
                }
            ],
            // 22 November Modal Data End

            // 23 November Modal Data Start
            nov23: [{
                    title: "Film Facilitation: Australia & India's Co Production Journey",
                    moderator: "Mayank Shekhar",
                    panel: "Michele McDonald Grainne Brunsdon Claire Dobbin Mitu Bhowmik Vrunda Manohar Desai",
                    date: "Nov-23rd, 2024, 9:45 AM - 10:30 AM",
                },
                {
                    title: "Film Independent's Global Media Makers: Building Bridges And Forging Community Around The World",
                    moderator: "Bobby Bedi",
                    panel: "Bikas Mishra Sheila Sawhney",
                    date: "Nov-23rd, 2024, 10:45 AM - 11:30 PM",
                },
                {
                    title: "The Adaptation Spectrum: The Trend of Remaking Foreign Series in India",
                    moderator: "Bijesh Jayarajan",
                    panel: "Sameer Gogate Mrinalini Jain",
                    date: "Nov-23rd, 2024, 11:45 AM-12:30 PM",
                },
                {
                    title: "From Script to Screen: Navigating the Future Skillsets of Filmmaking in a Digital Era",
                    moderator: "Vijay Vikram Singh",
                    panel: "Sonal Mishra Neerja Sekhar Mahima Kaul Neeraj Malik Sharad Mehra Sanjeev Sankar",
                    date: "Nov-23rd, 2024, 12:45PM - 1:30PM",
                },
                {
                    title: "Learning from the Masters: How to crack International Co-Production",
                    moderator: "Jérôme Paillard",
                    panel: "Guneet Monga James Bowsher Bich Quan Tran Claire Chassagne Ravi Kottarakara",
                    date: "Nov-23rd, 2024, 3:30 PM - 4:15 PM",
                },
                {
                    title: "Tapping the Global Audience: The Influencers Way",
                    moderator: "Puja Talwar",
                    panel: "Vaibhav Munjal C.Senthil Rajan Meera Chopra",
                    date: "Nov-23rd, 2024, 4:30 PM - 5:15 PM",
                },
                {
                    title: "Micro to Millions: Low Budget Films becoming blockbusters",
                    moderator: "Amit Masurkur",
                    panel: "Tisca Chopra Abhishek Chaubey Chidambaram S. Poduval Shahana Goswami",
                    date: "Nov-23rd, 2024, 5:30 PM- 6:15 PM",
                }

            ],

            // 24 November Modal Data Start
            nov24: [{
                    title: "Film Facilitation: Spain & India's Co Production Journey",
                    moderator: "Bobby Bedi",
                    panel: "Juan Manuel Guimerans Camilo Vazquez ICEX Representative Neerja Sekhar Dinesh K Patnaik",
                    date: "Nov-24th, 2024, 9:45 AM - 10:30 AM",
                },
                {
                    title: "SPOTLIGHT: SHORT FORMATS",
                    moderator: "Arfi Lamba",
                    panel: "Saameer Mody Tarun Sawhney Hardik Mehta Anupria Goenka",
                    date: "Nov-24th, 2024, 10:45 AM - 11:30 AM",
                },
                {
                    title: "Claiming your creativity: A guide to intellectual property rights",
                    moderator: "Lohita Sujith",
                    panel: "Madhu Chaudhary Apoorva Chandra Hitesh Jain Radhika Gopal",
                    date: "Nov-24th, 2024, 11:45 AM - 12:30 PM",
                },
                {
                    title: "State Focus Bihar: Emerging as a Film-Friendly Destination",
                    moderator: "",
                    panel: "",
                    date: "Nov-24th, 2024, 2 PM - 2:45 PM",
                },
                {
                    title: "Filming in India: A Land of Cinematic Opportunities",
                    moderator: "Prashant Nair",
                    panel: "Vrunda Manohar Desai Emmanuel Pappas Guillermo Marin Rodriguez Déborah Benattar Kilian Kerwin ",
                    date: "Nov-24th, 2024, 3 PM - 3:45PM",
                },
                {
                    title: "Sales Vs Distribution: Key Differences",
                    moderator: "Matias Fontela",
                    panel: "William Pieffier Arnaud Joseph Dennis Ruh",
                    date: "Nov-24th, 2024, 4PM - 4:45 PM",
                },
                {
                    title: "Nostalgia meets Opportunity: The Power of Re-Releasing Films",
                    moderator: "Komal Nahta",
                    panel: "Imtiaz Ali",
                    date: "Nov-24th, 2024, 5PM - 5:45 PM",
                },
                {
                    title: "Closing & Award Ceremony",
                    moderator: "",
                    panel: "",
                    date: "Nov-24th, 2024, 6PM - 7PM",
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
                    document.getElementById('panel').innerText = data.panel;

                    //This is for Speakers
                    const speakersList = document.getElementById('modalSpeakers');
                    speakersList.innerHTML = '';
                    data.speakers.forEach(speaker => {
                        const li = document.createElement('li');
                        li.className =
                            'list-group-item d-flex justify-content-between align-items-start title-tab';
                        li.style.cursor = 'pointer'; // Set cursor to pointer for entire li

                        // Add onclick event to li for opening the modal
                        li.onclick = function() {
                            showSpeakerDetails(
                                speaker.name.replace(/'/g, "\\'"),
                                speaker.description.replace(/'/g, "\\'"),
                                speaker.image.replace(/'/g, "\\'")
                            );
                        };
                        li.innerHTML =
                            `
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="ms-2 me-auto">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="fw-bold">${speaker.name}</div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img src="${speaker.image}" class="img-circle">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        `;
                        speakersList.appendChild(li);
                    });


                }
            });
        });

        function showSpeakerDetails(name, description, image) {
            document.getElementById('speakerDetailsLabel').innerText = name;
            document.getElementById('speakerDescription').innerText = description;
            document.getElementById('speakerImage').src = image;
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
    </style>
@endsection
