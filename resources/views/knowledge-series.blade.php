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
            <h1 class="page-title-header">Knowledge Series</h1>
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

    {{-- Script Start --}}
    <script>
        const modalData = {

            // 20 November Modal Data Start
            nov20: [{
                // title: "Beyond The Lens: Funding and Monetization in Documentary Filmmaking",
                // moderator: "Vani Tripathi Tikoo",
                // panel: "Panel",
                // date: "Nov-20th, 2024, 04.30 PM TO 05.30 PM",
                // description: "Detailed description for Nov 20.",
                speakers: [{
                    // name: "Svetlana Naudiyal",
                    // description: "Serving MUBI as the Programming Director of Asia-Pacific region.",
                    // image: "images/user1.jpg"
                }]
            }],
            // 20 November Modal Data End

            // 21 November Modal Data Start
            nov21: [{
                    title: "The Future of Indian Independent Films",
                    moderator: "Rajeev Masand",
                    panel: "Dominique Welinsky Marten Rabarts Sanjeev Sivan Vrunda Manohar Desai / Neerja Sekhar ",
                    date: "Nov 21st, 2024, 3:45 PM - 4:30PM",
                    // description: "Explores the evolution of female characters and the impact of films on societal attitudes towards women's safety.",
                    //     speakers: [{
                    //             name: "Imtiaz Ali",
                    //             description: "Imtiaz Ali is an Indian film director, producer, and screenwriter. He is best known for directing Jab We Met(2007), Love Aaj Kal(2009), Rockstar(2011), Highway(2014), Tamasha(2015) and Amar Singh Chamkila(2024).",
                    //             image: "{{ asset('public/images/master-class/Imtiaz Ali.jpg') }}"
                    //         },
                    //         {
                    //             name: "Suhasini Manirathnam",
                    //             description: "Suhasini Maniratnam is an Indian actress who works in Telugu, Tamil, Malayalam and Kannada films. Suhasini made her film debut in 1980 with the Tamil movie Nenjathai Killathe. For her first movie, she won the Tamil Nadu State Film Award for Best Actress. She was introduced to Malayalam cinema through Padmarajan`s Koodevide (1983). She won the National Film Award for Best Actress for her role in the 1985 Tamil film Sindhu Bhairavi.Suhasini directed the anthology mini-series Penn shown on Madras Doordarshan.Suhasini and her husband Mani Ratnam have been involved in the running of their production company Madras Talkies. ",
                //         image: "{{ asset('public/images/master-class/Suhasini Maniratnam.jpg') }}"
                //     },
                //     {
                //         name: "Kushboo Sundar",
                //         description: "Khushbu Sundar is an Indian politician, actress, film producer and television personality. She is known for her work predominantly in Tamil language films and in a few Telugu, Malayalam, Kannada and Hindi films. She has appeared in over 185 films, and has won three Tamil Nadu State Film Awards, two Cinema Express Awards, a Kalaimamani Award and a Kerala State Film Award.",
                //         image: "{{ asset('public/images/master-class/Khushbu Sundar.jpg') }}"
                //     }
                // ]
            },
            {
                title: "Exploring Genre Cinema: A Masterclass with Chuck Russell",
                moderator: "Bhuvan Lall",
                panel: "Chuck Russell",
                date: "Nov 21st, 2024, 4:45 PM - 5:30 PM",
                // description: "360° Cinema:Film Festival Directors' Round Table",
                // speakers: [{
                //         name: "Cameron Bailey ",
                //         description: "Cameron Bailey is a Canadian film critic and festival programmer, who is the CEO of the Toronto International Film Festival(TIFF).",
                //         image: "{{ asset('public/images/master-class/Cameron Bailey.jpg') }}"
                //     },
                //     {
                //         name: "Christian Jeune",
                //         description: "Christian Jeune is the Head of the Cannes Film Festival . He is famous for the film ‘Parched ‘ and ‘Ongoing Smile’",
                //         image: "{{ asset('public/images/master-class/Christian Jeune.jpg') }}"
                //     },
                //     {
                //         name: "Giona A",
                //         description: "Nazzaro serves as the Artistic Director of the Locarno Film Festival. Previously, he held the position of General Delegate of the Venice International Film Critics Week. His experience extends to various roles, including membership in the EFA and David di Donatello Academy, programming for renowned festivals like Visions du Réel and Torino Film Festival, and curating exhibitions. He is a prolific writer, contributing to publications and authoring books on cinema.",
                //         image: "{{ asset('public/images/master-class/Giona A. Nazzaro.jpg') }}"
                //     },
                //     {
                //         name: "Shekhar Kapur",
                //         description: "Shekhar Kapur is an Indian filmmaker and actor. Kapur is the recipient of several accolades, including a BAFTA Award, a National Film Award, a National Board of Review Award and three Filmfare Awards, in addition to nomination for a Golden Globe Award. He is currently serving as the Festival Director of International Film Festival of India(IFFI).",
                //         image: "{{ asset('public/images/master-class/Shekhar Kapur.jpg') }}"
                //     },
                //     {
                //         name: "Jérôme Paillard",
                //         description: "Jérôme Paillard was the head of the Cannes Film Festival's Marche du Film from 1995 to 2022.He has also been the co-Director of Ventana Sur, the first market specialized in Latin-American films, since its creation in Buenos Aires in 2010. Paillard is also the founder of cinando.com, a leading online resource, communication and screening platform for the industry. He now consults for events, film and business projects.",
                //         image: "{{ asset('public/images/master-class/Jérôme Paillard.jpg') }}"
                //     }
                // ]
            },
            {
                title: "The Film Festival Journey: Navigating the circuit as a filmmaker ",
                moderator: "Chaitanya Prasad",
                panel: "Jyoti Deshpande Manisha Koirala",
                date: "Nov 21st, 2024, 5:45 PM - 6:30PM",
                // description: "This captivating discussion features Manisha Koirala Inconversation with Rana Daggubati. They will delve into the theory of commercial success as both of them have experienced big screen and streaming. From their early works to their recent streaming projects, Rana and Koirala will discuss the challenges and opportunities of adapting their storytelling for different platforms, and how they continue to captivate audiences with their powerful performances.",
                // speakers: [{
                //     name: "Manisha Koirala",
                //     description: "Manisha Koirala is a Nepalese actress who works in Indian films, predominantly in Hindi and Tamil. Known for her work in both commercial and independent cinema, she is the recipient of several accolades, including three Filmfare Awards and one Filmfare Awards South. In 2001, the Government of Nepal awarded her with the Order of Gorkha Dakshina Bahu. Later, she featured in the Netflix production ‘Lust Stories’ and portrayed Nargis in Sanju. She has since starred in the period drama series Heeramandi (2024).",
                //     image: "{{ asset('public/images/master-class/Manisha Koirala.jpg') }}"
                // }]
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

        // 23 November Modal Data Start
        nov23: [{
                title: "From Small Screen to Big Dreams: the Inspiring Journey of Sivakarthikeyan",
                moderator: "Kushboo Sundar",
                panel: "InConversation",
                date: "Nov-23rd, 2024, 11.00 AM TO 12.00 PM",
                // description: "This centenary special celebrates the legendary actor & producer Akkineni Nageswara Rao (ANR).",
                speakers: [{
                    name: "Sivakartikeyan",
                    description: "Sivakarthikeyan is a celebrated Indian actor, playback singer, lyricist, and film producer, primarily known for his works in Tamil cinema. Starting with Marina in 2012, he found success with films like Kedi Billa Killadi Ranga, Ethir Neechal, and Varuthapadatha Valibar Sangam, and penned lyrics for songs like 'Chellamma' and 'Arabic Kuthu.' His notable films include Maan Karate, Kaaki Sattai, Hero, Rajinimurugan, Doctor, Maaveeran, Don, Ayalaan, GOAT, and Amaran. He also produces films under Sivakarthikeyan Productions.",
                    image: "{{ asset('public/images/master-class/Sivakarthikeyan.jpg') }}"
                }]
            },
            {
                title: "Stories that Travel",
                moderator: "Bobby Bedi",
                panel: "Panel Discussion",
                date: "Nov-23rd, 2024, 12.30 AM TO 01.30 PM",
                // description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                speakers: [{
                        name: "Farrukh Dhondy",
                        description: "Farrukh Dhondy is an Indian-born British Parsi writer, playwright, screenwriter and an activist who resides in the UK. He is known for Skates, Tandoori Nights and Rangoon.",
                        image: "{{ asset('public/images/master-class/Farrukh Dhondy.jpg') }}"
                    },
                    {
                        name: "Anna Saura",
                        description: "Anna Saura is a Spanish producer with a career spanning Teatro Español, PRISA, and Villa Lunera, where she produced the documentary `Hope.` She joined PIPA Films in 2017, producing `11M` for Netflix and `El rey de todo el mundo` by Carlos Saura. Since 2019, she has taught at UFV and managed Carlos Saura`s projects. At Morena Films (2020-2023), she produced `Diarios de la Cuarentena` and documentaries like `Tequila.` She founded ATRECE CREACIONES in 2020, winning over 50 awards with `Cuentas Divinas.` In 2024, she began coordinating the executive production master`s program at ECAM.",
                        image: "{{ asset('public/images/master-class/Anna Saura.jpg') }}"
                    },
                    {
                        name: "Tanishta Chatterjee",
                        description: "Tannishtha Chatterjee is an acclaimed actor in Indian and international films, known for roles in Sarah Gavron’s 'Brick Lane' (nominated for Best Actress at the British Independent Film Awards), German film 'Shadows of Time,' 'Parched,' 'Angry Indian Goddesses,' 'Watch Indian Circus' (National Film Award winner), 'Island City' (Venice premiere), 'Monsoon Shootout' (Cannes premiere), and 'Yellow Bus' (Toronto premiere). She made her directorial debut with 'Roam Rome Mein' (Busan International Film Festival 2019), followed by `Aamreen` as her second directorial venture.",
                        image: "{{ asset('public/images/master-class/Tannishtha Chatterjee.jpg') }}"
                    },
                    {
                        name: "Vani Tripathi Tikoo",
                        description: "Vani Tripathi Tikoo, a renowned actor and producer, is a Central Board of Film Certification (CBFC) member with credits in 50 plays, 40+ TV serials, and six films, having worked with notable playwrights like Anton Chekov and Arthur Miller. She founded Madhya Pradesh Natya Vidyalaya, India's first state-run drama school, and her recent book 'Why Can't Elephants Be Red?' has received global acclaim.",
                        image: "{{ asset('public/images/master-class/Vani Tripathi Tikoo.jpg') }}"
                    },
                    {
                        name: "Lucy Walker",
                        description: "Lucy Walker is an English film director who has directed several feature documentaries, including Devil's Playground, Blindsight, Waste Land, Countdown to Zero, The Crash Reel, Buena Vista Social Club: Adios, Bring Your Own Brigade, and Mountain Queen: The Summits of Lhakpa Sherpa. She has also directed acclaimed short films such as The Tsunami and the Cherry Blossom (2011) and The Lion's Mouth Opens (2014). Her work Waste Land was nominated for the Academy Award for Best Documentary Feature, and The Tsunami and the Cherry Blossom received a nomination for Best Documentary (Short Subject).",
                        image: "{{ asset('public/images/master-class/Lucy Walker.jpg') }}"
                    },
                ]
            },
            {
                title: "Power of Failure",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-23rd, 2024, 04.30 AM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                    name: "Anupam Kher",
                    description: "Anupam Kher, best known for his prolific career in Indian and international cinema, has appeared in over 540 films and 100 plays over a span of 35 years, playing iconic characters in critical and commercial hits such as Saaransh, Dilwale Dulhaniya Le Jayenge, Karma, A Wednesday, Special 26, and The Accidental Prime Minister, among others. He is a member of the Academy of Motion Picture Arts and Sciences (USA) and was awarded the Padma Shri in 2004, followed by the Padma Bhushan in 2016. In addition to his acting career, Kher founded Anupam Kher’s Actor Prepares in 2005, a world-renowned acting school, and is also an acclaimed author with publications that include Lessons Life Taught Me, Unknowingly: An Autobiography, and The Best Thing About You Is You, Your Best Day Is Today.",
                    image: "{{ asset('public/images/master-class/Anupam Kher.jpg') }}"
                }]
            }

        ],

        // 24 November Modal Data Start
        nov24: [{
                title: "Laser for Post Production and Evolution to HDR",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-24th, 2024, 11.00 AM TO 12.30 PM",
                // description: "This centenary special celebrates the legendary actor & producer Akkineni Nageswara Rao (ANR).",
                speakers: [{
                    name: "Anthon Muller, Strategic Director, Barco Cinema",
                    description: "With over 20 years of experience in strategic marketing, product development, and digital innovation, Anthon Muller is a senior executive from Belgium known for leading high-performing teams across industries such as telecommunications, media, technology, cloud, and IoT. He is currently serving as the Global Director of Strategic Marketing: Post Production, Services & Innovation at Barco.",
                    image: "{{ asset('public/images/master-class/Anthon Muller.jpg') }}"
                }]
            },
            {
                title: "Centenary Special: Celebrating the Life and Works of Raj Kapoor - 'The Greatest Showman'",
                moderator: "Rahul Rawail",
                panel: "InConversation",
                date: "Nov-24th, 2024, 02.30 AM TO 04.00 PM",
                // description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                speakers: [{
                    name: "Ranbir Kapoor",
                    description: "Ranbir Kapoor is an Indian actor known for his work in Hindi-language films, making his acting debut with Bhansali's tragic romance Saawariya (2007) and rising to prominence with the coming-of-age film Wake Up Sid, the romantic comedy Ajab Prem Ki Ghazab Kahani, and the political drama Raajneeti (2010); his performances as a troubled musician in Rockstar and a cheerful deaf-and-mute man in Barfi! earned him two consecutive Filmfare Awards for Best Actor, while the romantic comedy Yeh Jawaani Hai Deewani (2013) further established him as a star, despite a series of commercial failures, with Ae Dil Hai Mushkil (2016) and Sanju (2018) being notable exceptions.",
                    image: "{{ asset('public/images/master-class/Ranbir Kapoor.jpg') }}"
                }]
            },
            {
                title: "Culture As Context for Cinematic Storytelling",
                moderator: "Dr. Makrand Paranjapae",
                panel: "Panel Discussion",
                date: "Nov-24th, 2024, 04.30 PM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                        name: "Dr. Sacchidanad Joshi",
                        description: "Dr. Sachchidanand Joshi is the Member Secretary and Executive and Academic Head of the Indira Gandhi National Centre for the Arts (IGNCA) and a noted writer, poet, and actor, who has published extensively on topics including media, communication, history, culture, education, and policy; he notably edited speeches of Prime Minister Shri Narendra Modi for the Publication Division and co-edited Connecting through Culture: An Overview of India`s Soft Power Strengths with Dr. Vinay Sahastrabuddhe, and his recent publications include Sachchidanand Joshi ki Lokpriya Kahaniya (2017), Putrikameshti (2021), and Low Hanging Fruits (2024), along with four collections of short stories and three poetry books, with his speeches compiled in Mera Desh Mera Dharm (2 volumes).",
                            image: "{{ asset('public/images/master-class/Dr. Sachchidanand Joshi.jpg') }}"
                        },
                        {
                            name: "Amish Tripathi",
                            description: "Amish Tripathi is an author, former diplomat, and broadcaster from India, recognized as one of the fastest-selling authors in Indian publishing history, best known for The Shiva Trilogy and Ram Chandra Series, with his books selling over 7 million copies and being translated into 20 Indian and international languages since 2010; he served as Minister (Culture & Education) at the High Commission of India in the UK and Director of the Nehru Centre, London, from 2019 to 2023, and he is also a host for TV documentaries, including Discovery TV's Legends of the Ramayana, The Journey of India with co-host Amitabh Bachchan, and Ram Janmabhoomi: Return of a splendid sun.",
                            image: "{{ asset('public/images/master-class/Amish Tripathi.jpg') }}"
                        },
                        {
                            name: "Bharat Bala",
                            description: "Bharath Bala is an Indian film director, screenwriter, and film producer based in Chennai, Tamil Nadu, known for producing the acclaimed album Vande Mataram and Jana Gana Mana Video, as well as heading BharatBala Productions; he directed the short film Hari Om in 2004, the music video for the official song of the 2010 Commonwealth Games, Jiyo Utho Bado Jeeto, and the opening ceremony of the games, and in 2013, he completed his first feature film, Maryan.",
                            image: "{{ asset('public/images/master-class/Bharath Bala.jpg') }}"
                        },
                    ]
                }
            ],

            nov25: [{
                    title: "Will Artificial Intelligence Alter Filmmaking Forever?",
                    moderator: "Shekhar Kapur",
                    panel: "Panel Discussion",
                    date: "Nov-25th, 2024, 11.00 AM TO 12.00 PM",
                    // description: "This centenary special celebrates the legendary actor & producer Akkineni Nageswara Rao (ANR).",
                    speakers: [{
                            name: "Pragya Misra",
                            description: "Pragya is a multifaceted leader currently driving public policy and partnerships at OpenAI; she previously led public affairs at Truecaller and spearheaded WhatsApp’s campaign against misinformation in 2018, and beyond her professional roles, she is also a podcast host and a former national-level golfer.",
                            image: "{{ asset('public/images/master-class/Pragya Misra.jpg') }}"
                        },
                        {
                            name: "Anand Gandhi",
                            description: "Anand began writing and directing plays at the age of 12, and by 19, he had written a total of a hundred episodes for two television soap operas that became some of the most popular shows in the history of Indian television; that same year, his play 'Sugandhi' was honored with the prestigious National Award.",
                            image: "{{ asset('public/images/master-class/Anand Gandhi.jpg') }}"
                        }
                    ]
                },
                {
                    title: "Art of Cinematography",
                    moderator: "",
                    panel: "Masterclass",
                    date: "Nov-25th, 2024, 12.30 AM TO 01.30 PM",
                    // description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                    speakers: [{
                        name: "John Seale",
                        description: "John Seale is an acclaimed Australian cinematographer who has received numerous accolades, including an Academy Award, a BAFTA Award, and an American Society of Cinematographers Award, earning international recognition for his collaborations with directors such as Anthony Minghella, Wolfgang Petersen, Ron Howard, Sydney Pollack, and George Miller; he won the Academy Award for Best Cinematography for `The English Patient` and received nominations for `Witness`, `Rain Man`, `Cold Mountain`, and `Mad Max: Fury Road`, with other notable works including `Children of a Lesser God`, `Dead Poets Society`, `The Firm`, `The Talented Mr. Ripley`, and `Harry Potter and the Philosopher`s Stone`.",
                    image: "{{ asset('public/images/master-class/John Seale.jpg') }}"
                }]
            },
            {
                title: "Beyond Cinematic Endeavors:Celebrating 50 Years of Shabana Azmi",
                moderator: "",
                panel: "InConversation",
                date: "Nov-25th, 2024, 04.30 AM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                        name: "Shekhar Kapur",
                        description: "Shekhar Kapur is an esteemed Indian filmmaker and actor who has received several accolades, including a BAFTA Award, a National Film Award, a National Board of Review Award, and three Filmfare Awards, along with a nomination for a Golden Globe Award; he currently serves as the Festival Director of the International Film Festival of India (IFFI).",
                        image: "{{ asset('public/images/master-class/Shekhar Kapur.jpg') }}"
                    },
                    {
                        name: "Shabana Azmi",
                        description: "Over five decades, Shabana Azmi has showcased exceptional talent and versatility across the silver screen, starring in over 140 Hindi films and 12 international productions, including Deepa Mehta’s Midnight’s Children and Fire, Mira Nair’s The Reluctant Fundamentalist, Gurinder Chadha’s It’s A Wonderful Afterlife, and Ismail Merchant’s In Custody; her gripping performances range from Ankur to recent roles in Rocky aur Rani Ki Prem Kahani and Ghoomer, and she is the only actress in India to have won five National Awards for Best Actress, alongside numerous global accolades from film festivals such as the Los Angeles Film Festival and Toronto ReelWorld International Film Festival for Excellence.",
                        image: "{{ asset('public/images/master-class/Shabana Azmi.jpg') }}"
                    },
                ]
            },
            {
                title: "How to Succeed in New Hollywood",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-25th, 2024, 04.30 AM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                    name: "Philip Noyce",
                    description: "Phillip Noyce is an Australian film and television director who has directed over 19 feature films since 1977 across various genres, including historical dramas like Newsfront, Rabbit-Proof Fence, and The Quiet American; thrillers such as Dead Calm, Sliver, and The Bone Collector; and action films including Blind Fury, The Saint, and Salt; he is also known for directing the Jack Ryan adaptations Patriot Games (1992) and Clear and Present Danger (1994), as well as the 2014 adaptation of Lois Lowry’s The Giver.",
                    image: "{{ asset('public/images/master-class/Phillip Noyce.jpg') }}"
                }]
            }
        ],

        // 26 November Modal Data Start
        nov26: [{
                title: "The Thrill of Victory : How Analyzing Sports Can Help Animators Get Better Performances",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-26th, 2024, 11.00 AM TO 12.00 PM",
                // description: "This centenary special celebrates the legendary actor & producer Akkineni Nageswara Rao (ANR).",
                speakers: [{
                    name: "Chris Kirschbaum",
                    description: "Chris Kirschbaum is an animator, teacher, and public speaker whose work has appeared in numerous feature films, shorts, DVD extras, and holiday TV specials; he has worked in 2D animation as a special effects artist and in 3D animation as a character animator, lead, supervisor, and art director, while also teaching and mentoring since 2007, and performing as a musician in the studio, on stage, in theater, and on television.",
                    image: "{{ asset('public/images/master-class/Chris Kirschbaum.jpg') }}"
                }]
            },
            {
                title: "Film Production and it's Stages",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-26th, 2024, 12.30 PM TO 01.30 PM",
                // description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                speakers: [{
                    name: "Stephen Woolley",
                    description: "Stephen Woolley is an English filmmaker and actor whose career has spanned over three and a half decades, during which he was awarded the BAFTA award for Outstanding British Contribution to Cinema in February 2019; as a producer, he has been Oscar-nominated for The Crying Game (1992) and has produced multi-Academy Award nominated films including Mona Lisa (1986), Little Voice (1998), Michael Collins (1996), The End of the Affair (1999), Interview with the Vampire (1994), and Carol (2016), and he runs the production company Number 9 Films with his partner Elizabeth Karlsen.",
                    image: "{{ asset('public/images/master-class/Stephen Woolley.jpg') }}"
                }]
            },
            {
                title: "Exhibition of Feature Films in Cinema Theaters : The Question of Accessibility",
                moderator: "",
                panel: "Masterclass",
                date: "Nov-26th, 2024, 02.30 AM TO 04.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                    name: "Senthil Kumar-Co-Founder, Qube Cinema Technologies",
                    description: "A tech entrepreneur with experience in movie and television production and postproduction and multiple patents to his credit, Senthil Kumar is a co-founder of Qube Cinema, the company that brought digital editing to India with Avid, digital cinema sound to India with DTS, and helped transform the cinema industry worldwide with its Qube digital cinema system and Qube Wire content delivery system; he is also a member of the Production and Technology Branch of the Academy of Motion Picture Arts and Sciences.",
                    image: "{{ asset('public/images/master-class/Senthil Kumar.jpg') }}"
                }]
            },
            {
                title: "Centenary session : 'Azmaan se aaya farishta' - Mohammad Rafi - The king of melody",
                moderator: "Yatindra Mishra",
                panel: "Panel Discussion",
                date: "Nov-26th, 2024, 04.30 AM TO 06.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                        name: "Sonu Nigam",
                        description: "Sonu Nigam is an Indian playback singer, music director, dubbing artist, and actor who predominantly sings in Hindi and Kannada language films, having sung over 4000 songs in various languages; he is one of the most preeminent singers of Hindi cinema, known for his non-film albums and roles in Hindi films, and was honoured with the Padma Shri, India’s fourth-highest civilian award, in 2022; his repertoire includes Romantic, Rock, Devotional, Ghazal, and Patriotic songs, and he has sung in multiple languages including Hindi, Odia, Bengali, English, Gujarati, Kannada, Maithili, Bhojpuri, Malayalam, Manipuri, Marathi, Nepali, Tamil, and Telugu, as well as releasing pop albums in Hindi, Kannada, Odia, Chhattisgarhi, and Punjabi, alongside Hindu and Islamic devotional albums.",
                        image: "{{ asset('public/images/master-class/Sonu Nigam.jpg') }}"
                    },
                    {
                        name: "Shahid Rafi",
                        description: "Shahid Rafi is the youngest son of the Legend Mohammed Rafi Sahab.He carries the legacy of Mohammed Rafi Sahab.",
                        image: "{{ asset('public/images/master-class/Shahid Rafi.jpg') }}"
                    },
                    {
                        name: "Shubash Ghai",
                        description: "Subhash Ghai is an Indian film director, producer, actor, lyricist, music director, and screenwriter, renowned for his works predominantly in Hindi cinema, and was one of the most prominent and successful filmmakers throughout the 80s and 90s, with notable films including Kalicharan, Vishwanath, Karz, Hero, Vidhaata, Meri Jung, Karma, Ram Lakhan, Saudagar, Khalnayak, Pardes, and Taal.",
                        image: "{{ asset('public/images/master-class/Subhash Ghai.jpg') }}"
                    },
                    {
                        name: "Anuradha Paudwal",
                        description: "Dr. Anuradha Paudwal is a celebrated figure in the Indian film music industry since the 70s, renowned for her melodious voice and significant contributions to Indian devotional music, having sung in almost all Indian languages, and she has been honored with numerous accolades including 4 Filmfare Awards, 1 National Film Award, and the Padma Shri by the Government of India; additionally, she serves as a Cultural Ambassador for her work in devotional music and founded the Suryodaya Foundation, advocating for various social causes.",
                        image: "{{ asset('public/images/master-class/Dr. Anuradha Paudwal.jpg') }}"
                    },
                ]
            }
        ],

        // 27 November Modal Data Start
        nov27: [{
                title: "Tapan Sinha-Centenary session-The Spectrum and the Soul",
                moderator: "Ratnotoma Sen",
                panel: "Panel Discussion",
                date: "Nov-27th, 2024, 11.00 AM TO 12.00 PM",
                speakers: [{
                    name: "Arjun Chakraborty",
                    description: "Arjun Chakrabarty is a versatile actor who began his career in Hindi cinema under the guidance of K. Balachandra and gained recognition for his roles in films such as Zara Si Zindagi and Ankush, with a significant milestone marked by his collaboration with Mrinal Sen in Ek Din Achanak; having over a hundred films and 15 music albums to his credit, he continues to work on various Bengali and Hindi projects while also venturing into direction with the film Tolly Lights.",
                    image: "{{ asset('public/images/master-class/Arjun Chakrabarty.jpg') }}"
                }, {
                    name: "Manu Chakravarthy",
                    description: "Manu Chakravarthy is an accomplished scholar with an M.A. in English from the University of Mysore, specializing in European Classics, Literary Criticism, and Cultural Theory, currently serving as a visiting professor at various universities and film institutes while sharing his extensive knowledge on cultural and film theory; his extensive research experience is highlighted by his leadership roles in prestigious film festivals such as Ajanta-Ellora, Thrissur, and Kerala International Film Festivals, in addition to chairing the jury for the K R Mohanan endowment award and the Chidananda Dasgupta Memorial awards for best film criticism.",
                    image: "{{ asset('public/images/master-class/Manu Chakravarthy.jpg') }}"
                }]
            },
            {
                title: "Lata Mangeshkar Memorial Talk: Musical Theatre in India",
                moderator: "Naman Ramachandran",
                panel: "InConversation",
                date: "Nov-27th, 2024, 02.30 AM TO 04.00 PM",
                // description: "This session brings together renowned sound designers Nakul Kamte and Eric Hoehn, who will explore the power of sound design in shaping the emotional and narrative depth of films. From subtle  ambient layers to impactful soundscapes, they will share their craft in building the aural  dimension that completes the cinematic experience.",
                speakers: [{
                    name: "A R Rahman",
                    description: "A R Rahman is an acclaimed Indian music composer, record producer, singer, songwriter, musician, and philanthropist, renowned for his contributions to Indian cinema, particularly in Tamil and Hindi films, while also making occasional appearances in international cinema; he has received numerous accolades including six National Film Awards, two Academy Awards, two Grammy Awards, a BAFTA Award, a Golden Globe Award, six Tamil Nadu State Film Awards, fifteen Filmfare Awards, and eighteen Filmfare Awards South, and was honored with the Padma Bhushan by the Government of India in 2010.",
                    image: "{{ asset('public/images/master-class/A R Rahman.jpg') }}"
                }]
            }
        ],
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
