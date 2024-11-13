@extends('layouts.app')
@section('site_title', 'Master Classes at IFFI Goa - Learn from Cinema Experts')
@section('site_description',
    'Join exclusive master classes at IFFI Goa, where renowned filmmakers and industry experts
    share insights, techniques, and the art of cinematic storytelling.')
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
    <div class="container mt-5 static-content">
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
                    @include("master-class.{$date}")
                @endforeach
            </div>

            @foreach (['nov20', 'nov21', 'nov22', 'nov23', 'nov24', 'nov25', 'nov26', 'nov27', 'nov28'] as $date)
                <div class="tab-pane fade" id="{{ $date }}" role="tabpanel"
                    aria-labelledby="{{ $date }}-tab">
                    @include("master-class.{$date}")
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
                    <h4>Speakers</h4>
                    <ol class="list-group list-group-numbered" id="modalSpeakers"></ol>
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

    {{-- Script Start --}}
    <script>
        const modalData = {

            // 21 November Modal Data Start
            nov21: [{
                    title: "Women Safety and Cinema",
                    moderator: "Vani Tripathi Tikoo",
                    panel: "Panel Discussion",
                    date: "Nov 21st, 2024, 11.00 AM TO 12.00 PM",
                    // description: "Explores the evolution of female characters and the impact of films on societal attitudes towards women's safety.",
                    speakers: [{
                            name: "Imtiaz Ali",
                            description: "Imtiaz Ali is an Indian film director, producer, and screenwriter. He is best known for directing Jab We Met(2007), Love Aaj Kal(2009), Rockstar(2011), Highway(2014), Tamasha(2015) and Amar Singh Chamkila(2024).",
                            image: "{{ asset('public/images/master-class/Imtiaz Ali.jpg') }}"
                        },
                        {
                            name: "Suhasini Manirathnam",
                            description: "Suhasini Maniratnam is an Indian actress who works in Telugu, Tamil, Malayalam and Kannada films. Suhasini made her film debut in 1980 with the Tamil movie Nenjathai Killathe. For her first movie, she won the Tamil Nadu State Film Award for Best Actress. She was introduced to Malayalam cinema through Padmarajan`s Koodevide (1983). She won the National Film Award for Best Actress for her role in the 1985 Tamil film Sindhu Bhairavi.Suhasini directed the anthology mini-series Penn shown on Madras Doordarshan.Suhasini and her husband Mani Ratnam have been involved in the running of their production company Madras Talkies. ",
                        image: "{{ asset('public/images/master-class/Suhasini Maniratnam.jpg') }}"
                    },
                    {
                        name: "Kushboo Sundar",
                        description: "Khushbu Sundar is an Indian politician, actress, film producer and television personality. She is known for her work predominantly in Tamil language films and in a few Telugu, Malayalam, Kannada and Hindi films. She has appeared in over 185 films, and has won three Tamil Nadu State Film Awards, two Cinema Express Awards, a Kalaimamani Award and a Kerala State Film Award.",
                        image: "{{ asset('public/images/master-class/Khushbu Sundar.jpg') }}"
                    }
                ]
            },
            {
                title: "360° Cinema:Film Festival Directors' Round Table",
                moderator: "Jerome Paillard",
                panel: "Panel Discussion",
                date: "Nov 21st, 2024, 12.30 PM TO 01.30 PM",
                // description: "360° Cinema:Film Festival Directors' Round Table",
                speakers: [{
                        name: "Cameron Bailey ",
                        description: "Cameron Bailey is a Canadian film critic and festival programmer, who is the CEO of the Toronto International Film Festival(TIFF).",
                        image: "{{ asset('public/images/master-class/Cameron Bailey.jpg') }}"
                    },
                    {
                        name: "Christian Jeune",
                        description: "Christian Jeune is the Head of the Cannes Film Festival . He is famous for the film ‘Parched ‘ and ‘Ongoing Smile’",
                        image: "{{ asset('public/images/master-class/Christian Jeune.jpg') }}"
                    },
                    {
                        name: "Giona A",
                        description: "Nazzaro serves as the Artistic Director of the Locarno Film Festival. Previously, he held the position of General Delegate of the Venice International Film Critics Week. His experience extends to various roles, including membership in the EFA and David di Donatello Academy, programming for renowned festivals like Visions du Réel and Torino Film Festival, and curating exhibitions. He is a prolific writer, contributing to publications and authoring books on cinema.",
                        image: "{{ asset('public/images/master-class/Giona A. Nazzaro.jpg') }}"
                    },
                    {
                        name: "Shekhar Kapur",
                        description: "Shekhar Kapur is an Indian filmmaker and actor. Kapur is the recipient of several accolades, including a BAFTA Award, a National Film Award, a National Board of Review Award and three Filmfare Awards, in addition to nomination for a Golden Globe Award. He is currently serving as the Festival Director of International Film Festival of India(IFFI).",
                        image: "{{ asset('public/images/master-class/Shekhar Kapur.jpg') }}"
                    },
                    {
                        name: "Jérôme Paillard",
                        description: "Jérôme Paillard was the head of the Cannes Film Festival's Marche du Film from 1995 to 2022.He has also been the co-Director of Ventana Sur, the first market specialized in Latin-American films, since its creation in Buenos Aires in 2010. Paillard is also the founder of cinando.com, a leading online resource, communication and screening platform for the industry. He now consults for events, film and business projects.",
                        image: "{{ asset('public/images/master-class/Jérôme Paillard.jpg') }}"
                    }
                ]
            },
            {
                title: "From Big Screen to Streaming",
                moderator: "",
                panel: "InConversation",
                date: "Nov 21st, 2024, 4.30 PM TO 6.00 PM",
                // description: "This captivating discussion features Manisha Koirala Inconversation with Rana Daggubati. They will delve into the theory of commercial success as both of them have experienced big screen and streaming. From their early works to their recent streaming projects, Rana and Koirala will discuss the challenges and opportunities of adapting their storytelling for different platforms, and how they continue to captivate audiences with their powerful performances.",
                speakers: [{
                    name: "Manisha Koirala",
                    description: "Manisha Koirala is a Nepalese actress who works in Indian films, predominantly in Hindi and Tamil. Known for her work in both commercial and independent cinema, she is the recipient of several accolades, including three Filmfare Awards and one Filmfare Awards South. In 2001, the Government of Nepal awarded her with the Order of Gorkha Dakshina Bahu. Later, she featured in the Netflix production ‘Lust Stories’ and portrayed Nargis in Sanju. She has since starred in the period drama series Heeramandi (2024).",
                    image: "{{ asset('public/images/master-class/Manisha Koirala.jpg') }}"
                }]
            }
        ],
        // 21 November Modal Data End

        // 22 November Modal Data Start
        nov22: [{
                title: "Centenary Special ANR: Celebrating the Life and Works of Akkineni Nageswara Rao",
                moderator: "Kushboo Sundar",
                panel: "InConversation",
                date: "Nov-22nd, 2024, 11.00 AM TO 12.00 PM",
                // description: "This centenary special celebrates the legendary actor & producer Akkineni Nageswara Rao (ANR).",
                speakers: [{
                    name: "Nagarjuna",
                    description: "Akkineni Nagarjuna Rao, known mononymously as Nagarjuna, is an Indian actor, film producer and entrepreneur. Nagarjuna has acted predominantly in Telugu cinema, along with Hindi and Tamil films. He received two National Film Awards namely, for Ninne Pelladata (1996), which he produced won the Best Feature Film in Telugu and a Special Mention as actor for Annamayya (1997), ten state Nandi Awards, and three Filmfare Awards South.",
                    image: "{{ asset('public/images/master-class/Akkineni Nagarjuna Rao.jpg') }}"
                }]
            },
            {
                title: "Living Movies: Filmmaking and the Creative Life",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-22nd, 2024, 12.30 AM TO 01.30 PM",
                description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                speakers: [{
                    name: "Vidhu Vinod Chopra",
                    description: "Vidhu Vinod Chopra is an Indian film director, producer, screenwriter and editor. He is the recipient of several accolades, including four National Film Awards, ten Filmfare Awards and an Academy Award nomination. He is known for directing films such as the crime drama Parinda (1989), the patriotic romantic drama 1942: A Love Story (1994), the action drama Mission Kashmir (2000) and the biographical drama 12th Fail (2023). He is also known for producing the Munna Bhai film series, 3 Idiots (2009), PK (2014), and Sanju (2018) under his banner Vinod Chopra Films.",
                    image: "{{ asset('public/images/master-class/Vidhu Vinod Chopra.jpg') }}"
                }]
            },
            {
                title: "Sound Design : The Aural Universe of cinematic Storytelling",
                moderator: "",
                panel: "InConversation",
                date: "Nov-22nd, 2024, 02.30 PM TO 04.30 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                        name: "Nakul Kamte",
                        description: "Nakul Kamte is a two time National Award winning production mixer,Sound Designer and Re-recording Engineer. He brought back location sound recording into Indian Cinema with ‘Lagaan’ and ‘Dil Chahta Hai’. He also worked on large Hollywood productions in various capacities. He joined the creative technology team at Netflix and assisted in setting up audio quality issues.",
                        image: "{{ asset('public/images/master-class/Nakul Kamte.jpg') }}"
                    },
                    {
                        name: "Eric Hoehn",
                        description: "Eric Hoehn is a two time Emmy winning sound re-recording mixer and designer. He has worked on projects ranging from big Hollywood features to solving the operational nuances of international sound workflows for companies like Netflix and ElevenLabs. The Queen's Gambit, Deepwater Horizon, Divergent, and Hotel Artemis are acclaimed titles from his profile.",
                        image: "{{ asset('public/images/master-class/Eric Hoehn.jpg') }}"
                    }
                ]
            },
            {
                title: "Transforming Literary Masterpieces into Engaging Films",
                moderator: "Gautham Vasudeva Menon",
                panel: "InConversation",
                date: "Nov-22nd, 2024, 04.30 PM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                        name: "Mani Ratnam",
                        description: "Mani Ratnam, a synonym for cinematic brilliance, is a renowned Indian film director, producer, and screenwriter. His illustrious career spans multiple languages, including Tamil, Hindi, Telugu, Malayalam, and Kannada. Recognized as one of India's most acclaimed and commercially successful filmmakers, his contributions to the world of cinema have earned him numerous accolades, including seven National Film Awards and the prestigious Padma Shri.",
                        image: "{{ asset('public/images/master-class/Mani Ratnam.jpg') }}"
                    },
                    {
                        name: "Gautham Vasudev Menon ",
                        description: "Gautham Vasudev Menon is an Indian film director, screenwriter, film producer and actor who predominantly works in Tamil film industry. He has also directed Telugu and Hindi films that are either simultaneously shot with or remakes of his own Tamil films. He has won two National Film Awards, three Nandi Awards and one Tamil Nadu State Film Award. Many of his films have been both critically acclaimed and commercially successful, most notably his romantic films Minnale (2001), Vaaranam Aayiram (2008), Vinnaithaandi Varuvaayaa (2010), his cop action thrillers Kaakha Kaakha (2003), Vettaiyaadu Vilaiyaadu (2006), Yennai Arindhaal (2015) and his gangster drama Vendhu Thanindhathu Kaadu (2022). His 2008 Tamil film, ‘Vaaranam Aayiram’ won the National Film Award for Best Feature Film in Tamil. Menon produces films through his film production company named Photon Kathaas. His production Thanga Meengal (2013) won the National Film Award for Best Feature Film in Tamil.The 2010 romantic blockbuster Vinnaithaandi Varuvaayaa, was re-released and it completed its 1000th day in theaters.",
                        image: "{{ asset('public/images/master-class/Gautham Vasudev Menon.jpg') }}"
                    }
                ]
            }
        ],
        // 22 November Modal Data End

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
