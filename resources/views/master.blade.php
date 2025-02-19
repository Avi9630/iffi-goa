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
                    <img id="speakerImage" src="" alt="Speaker Image" class="img-fluid mb-3" height="200px"
                        width="400px" />
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
            nov20: [{}],
            // 20 November Modal Data End

            // 21 November Modal Data Start
            nov21: [{
                    title: "Women Safety and Cinema",
                    moderator: "Vani Tripathi Tikoo",
                    panel: "Panel Discussion",
                    date: "Nov 21st, 2024, 11.00 AM TO 12.00 PM",
                    speakers: [{
                            name: "Imtiaz Ali",
                            description: "Imtiaz Ali is an Indian film director, producer, and screenwriter. He is best known for directing Jab We Met, Love Aaj Kal, Rockstar, Highway, Tamasha and Amar Singh Chamkila. He is the creator of the Netflix series -SHE Season 1 & Season 2 and the SonyLiv series- Dr Arora.",
                            image: "{{ asset('public/images/master-class/Imtiaz Ali.jpg') }}"
                        },
                        {
                            "name": "Suhasini Manirathnam",
                            "description": "Suhasini Maniratnam is an Indian actress who works in Telugu, Tamil, Malayalam, and Kannada films. Suhasini made her film debut in 1980 with the Tamil movie Nenjathai Killathe. For her first movie, she won the Tamil Nadu State Film Award for Best Actress. She was introduced to Malayalam cinema through Padmarajan's 'Koodevide'. She won the National Film Award for Best Actress for her role in the Tamil film ‘Sindhu Bhairavi’. Suhasini directed the anthology mini-series ‘Penn’ shown on Madras Doordarshan. Suhasini and her husband Mani Ratnam have been involved in the running of their production company Madras Talkies.",
                            "image": "{{ asset('public/images/master-class/Suhasini Maniratnam.jpg') }}"
                        },
                        {
                            name: "Kushboo Sundar",
                            description: "Kushboo Sundar is a renowned Indian actress, television host, and politician who has left a lasting mark on Tamil cinema. She debuted in a 1985 Hindi film 'The Burning Train.' Her Tamil cinema debut in ‘Varusham Padhinaaru’ catapulted her to stardom, with iconic films like Chinna Thambi, Dharmathin Thalaivan, Vettri Vizhaa, My Dear Marthandan, Chinna Thambi, Kizhakku Karai, Pandithurai cementing her status as a leading lady. With over 200 films across multiple languages, Kushboo has received numerous awards, including the Kalaimamani Award and Tamil Nadu State Film Award for Best Actress. She has also ventured into television hosting and politics. Ms. Kushboo Sundar continues to inspire new generations with her energetic performances, memorable characters, and philanthropic endeavors.",
                            image: "{{ asset('public/images/master-class/Khushbu Sundar.jpg') }}"
                        },
                        {
                            name: "Bhumi Pednekar",
                            description: "Bhumi Pednekar is an Indian actress who works in Hindi films. She rose to prominence starring in the commercially successful films Toilet: Ek Prem Katha (2017), Shubh Mangal Saavdhan (2017), Bala (2019) and Pati Patni Aur Woh (2019). For her performances as the septuagenarian sharpshooter Chandro Tomar in Saand Ki Aankh (2019) and a closeted lesbian in Badhaai Do (2022), she twice won the Filmfare Critics Award for Best Actress.",
                            image: "{{ asset('public/images/master-class/BhumiPednekar.jpg') }}"
                        }
                    ]
                },
                {
                    title: "360° Cinema: Film Festival Directors' Round Table",
                    moderator: "Shekhar Kapur",
                    panel: "Round Table",
                    date: "Nov 21st, 2024, 12.30 PM TO 01.30 PM",
                    speakers: [{
                            name: "Cameron Bailey",
                            description: "Cameron Bailey is a Canadian film critic and festival programmer, who is the CEO of the Toronto International Film Festival (TIFF).",
                            image: "{{ asset('public/images/master-class/Cameron Bailey.jpg') }}"
                        },
                        {
                            name: "Giona A Nazzaro",
                            description: "Giona A. Nazzaro serves as the Artistic Director of the Locarno Film Festival. Previously, he held the position of General Delegate of the Venice International Film Critics Week. His experience extends to various roles, including membership in the EFA and David di Donatello Academy, programming for renowned festivals like Visions du Réel and Torino Film Festival, and curating exhibitions. He is a prolific writer, contributing to publications and authoring books on cinema.",
                            image: "{{ asset('public/images/master-class/Giona A. Nazzaro.jpg') }}"
                        },
                        {
                            name: "Emma Boa",
                            description: "Emma has worked in film exhibition since 2003, with various front of house, venue and event management roles before moving into the Programming team at Edinburgh International Film Festival, curating and producing a diverse range of programmes and special events. She worked with EventScotland, the national events agency for Scotland, to deliver the hugely successful Year of Stories in 2022, before returning to EIFF in 2023 as Festival Producer, working under the auspices of Edinburgh International Festivalto deliver a special one-off iteration. She joined the newly relaunched EIFF as Festival Producer in January 2024, working closely with Festival Director, Paul Ridd, to build and shape the new organisation from the ground up. A University of Edinburgh graduate with an MA in Philosophy, she has worked for BFI London Film Festival, Reykjavik International Film Festival, Glasgow Film Festival and Dominion Cinema, as well as in several different roles within Centre for the Moving Image, across EIFF, Filmhouse and Belmont Filmhouse.",
                            image: "{{ asset('public/images/master-class/Emma Profile Photo 2024.jpg') }}"
                        }
                    ]
                },
                {
                    title: "Character and Actor: The Power of Nuance ",
                    moderator: "Dhanya Varma",
                    panel: "In Conversation",
                    date: "Nov 21st, 2024, 2.30 PM TO 3.15 PM",
                    speakers: [{
                        name: "Nithya Menen",
                        description: "Nithya Menen is an Indian actress and singer who works primarily in Malayalam, Telugu, Tamil and Kannada films. Menen is noted for her strong portrayals, and is a recipient of several accolades including a National Film Award, four Filmfare Awards South, two South Indian International Movie Awards and two Nandi Awards.She started her career as a child artist, in the French-Indian English film, Hanuman, playing the younger sister to Tabu's character. She made her screen debut with the Kannada film 7 O' Clock. She established herself as a leading South Indian actress with the Tamil romantic film O Kadhal Kanmani. She went onto appear in such commercially successful films — the Malayalam films Ustad Hotel, Bangalore Days and 100 Days of Love, and the Tamil films Kanchana 2 , 24, Mersal etc",
                        image: "{{ asset('public/images/master-class/Nithya Menen.jpg') }}"
                    }]
                },
                {
                    title: "Mastering the Unseen",
                    moderator: "Sudhir Srinivasan",
                    panel: "In Conversation",
                    date: "Nov 21st, 2024, 3.30 PM TO 4.15 PM",
                    speakers: [{
                        name: "Manoj Bajpayee",
                        description: "Manoj Bajpayee is an Indian actor who predominantly works in Hindi, Telugu and Tamil = films. He is the recipient of numerous accolades including four National Film Awards, four Filmfare Awards, and two Asia Pacific Screen Awards. In 2019, he was awarded India's fourth-highest civilian honour, the Padma Shri, for his contributions to art. He is known for Bandit Queen, Satya, Dil Pe Mat Le Yaar! Ghaath, Joram, Sirf Ek Bandaa Kaafi Hai, Suraj Pe Mangal Bhari, Mrs. Serial Killer, Sonchiriya, Love Sonia, The Family Man and many more.",
                        image: "{{ asset('public/images/master-class/Manoj Bajpayee.jpg') }}"
                    }]
                },
                {
                    title: "The Journey from Script to Screen: Writing for Film and Beyond",
                    moderator: "Anant Vijay",
                    panel: "In Conversation",
                    date: "Nov 21st, 2024, 4.30 PM TO 5.30 PM",
                    speakers: [{
                        name: "Prasoon Joshi",
                        description: "Prasoon Joshi is one of India’s most celebrated creative minds—a Padma Shri awardee and National Award-winning writer. Renowned for his work as a poet, lyricist, screenwriter, and communication expert, he has been honored at global platforms like Cannes Lions and the World Economic Forum. Author of four books, Joshi has penned acclaimed scripts and lyrics for iconic films such as Taare Zameen Par, Rang De Basanti, Bhaag Milkha Bhaag, and Manikarnika. His recent efforts have shaped major brand campaigns like Incredible India, G-20, and Air India, while his impactful societal projects—Swachh Bharat, Child Rights, Pulse Polio, and campaigns on women’s empowerment and malnutrition—have created tangible, positive change.",
                        image: "{{ asset('public/images/master-class/Prasoon Joshi.jpg') }}"
                    }]
                },
                {
                    title: "Surviving Film Industry : The Hard Truth Nobody Tells You",
                    moderator: "",
                    panel: "In Conversation",
                    date: "Nov 21st, 2024, 5.45 PM TO 6.30 PM",
                    speakers: [{
                            name: "Rakul Preet Singh",
                            description: "Rakul Preet Singh is an Indian actress who predominantly works in Telugu, Hindi and Tamil films. She made her acting debut with the Kannada film Gilli, then to Telugu and Tamil cinema with the films Keratam, Thadaiyara Thaakka and Venkatadri Express. She went on to appear in several films including Loukyam, Pandaga Chesko, Sarrainodu, Dhruva, Nannaku Prematho, Rarandoi Veduka Chudham, Spyder, Theeran Adhigaaram Ondru, Yaariyan, Ayalaan.",
                            image: "{{ asset('public/images/master-class/Rakul Preet Singh.jpg') }}"
                        },
                        {
                            name: "Jacky Bagnani",
                            description: "Jackky Bhagnani is an Indian actor, film producer, and entrepreneur known for his work in Bollywood. After making his acting debut in Kal Kissne Dekha, he went on to star in films like F.A.L.T.U. and Youngistaan. As the son of producer Vashu Bhagnani, he expanded into film production through his family’s company, Pooja Entertainment, producing successful films such as Coolie No. 1and Jawaani Jaaneman. He is also involved in music production through his label Jjust Music, focusing on emerging talent in the industry.",
                            image: "{{ asset('public/images/master-class/Jacky Bagnani.jpg') }}"
                        }
                    ]
                },
            ],
            // 21 November Modal Data End

            // 22 November Modal Data Start
            nov22: [{
                    title: "Centenary Special: ANR - Celebrating the Life and Works of Akkineni Nageswara Rao",
                    moderator: "Kushboo Sundar",
                    panel: "In Conversation",
                    date: "Nov-22st, 2024, 11.00 AM TO 12.00 PM",
                    speakers: [{
                        name: "Nagarjuna",
                        description: "Nagarjuna is an Indian actor, film producer and entrepreneur. Nagarjuna has acted predominantly in Telugu cinema, along with Hindi and Tamil films. He received two National Film Awards namely, for Ninne Pelladata, which he produced won the Best Feature Film in Telugu and a Special Mention as actor for Annamayya, Ten state Nandi Awards, and three Filmfare Awards South.",
                        image: "{{ asset('public/images/master-class/Akkineni Nagarjuna Rao.jpg') }}"
                    }]
                },
                {
                    title: "Living Movies: Filmmaking and the Creative Life",
                    moderator: "Shantanu Moitra",
                    panel: "In Conversation",
                    date: "Nov-22nd, 2024, 12.30 AM TO 01.30 PM",
                    description: "In this session, the acclaimed filmmaker Vidhu Vinod Chopra takes us on a journey through the creative process, sharing his experiences, challenges, and the philosophy behind living through cinema.With decades of storytelling mastery,Mr. Chopra will bring us the insights into how films not only reflect life but become a living entity of their own, inspiring generations ",
                    speakers: [{
                        name: "Vidhu Vinod Chopra",
                        description: "Vidhu Vinod Chopra is an Indian film director, producer, screenwriter and editor. He is the recipient of several accolades, including four National Film Awards, ten Filmfare Awards and an Academy Award nomination. He is known for directing films such as the crime drama Parinda (1989), the patriotic romantic drama 1942: A Love Story (1994), the action drama Mission Kashmir (2000) and the biographical drama 12th Fail (2023). He is also known for producing the Munna Bhai film series, 3 Idiots (2009), PK (2014), and Sanju (2018) under his banner Vinod Chopra Films.",
                        image: "{{ asset('public/images/master-class/Vidhu Vinod Chopra.jpg') }}"
                    }]
                },
                {
                    title: "Sound Design: The Aural Universe of Cinematic Storytelling",
                    moderator: "",
                    panel: "In Conversation",
                    date: "Nov-22nd, 2024, 02.30 PM TO 04.00 PM",
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
                    moderator: "Gautham Vasudev Menon",
                    panel: "In Conversation",
                    date: "Nov-22nd, 2024, 04.30 PM TO 06.00 PM",
                    speakers: [{
                        name: "Mani Ratnam",
                        description: "Mani Ratnam, a synonym for cinematic brilliance, is a renowned Indian film director, producer, and screenwriter. His illustrious career spans multiple languages, including Tamil, Hindi, Telugu, Malayalam, and Kannada. Recognized as one of India's most acclaimed and commercially successful filmmakers, his contributions to the world of cinema have earned him numerous accolades, including seven National Film Awards and the prestigious Padma Shri. Renowned for his unique storytelling, captivating visuals, and powerful music, he has consistently pushed the boundaries of Indian cinema. His filmography includes Roja, Bombay, Dil Se.., Iruvar, Kannathil Muthamittal, AlaiPayuthey, Guru, Raavan, OK Kanmani, Kaatru Veliyidai, and Ponniyin Selvan Part 1 & 2.",
                        image: "{{ asset('public/images/master-class/Mani Ratnam.jpg') }}"
                    }]
                }
            ],
            // 22 November Modal Data End

            // 23 November Modal Data Start
            nov23: [{
                    title: "From Small Screen to Big Dreams: the Inspiring Journey of Sivakarthikeyan",
                    moderator: "Kushboo Sundar",
                    panel: "In Conversation",
                    date: "Nov-23rd, 2024, 11.00 AM TO 12.00 PM",
                    speakers: [{
                        name: "Sivakarthikeyan",
                        description: "Sivakarthikeyan is a celebrated Indian actor, playback singer, lyricist, and film producer, primarily known for his works in Tamil cinema. Starting with Marina in 2012, he found success with films like Kedi Billa Killadi Ranga, Ethir Neechal, and Varuthapadatha Valibar Sangam, and penned lyrics for songs like 'Chellamma' and 'Arabic Kuthu.' His notable films include Maan Karate, Kaaki Sattai, Hero, Rajinimurugan, Doctor, Maaveeran, Don, Ayalaan, GOAT, and Amaran. He also produces films under Sivakarthikeyan Productions.",
                        image: "{{ asset('public/images/master-class/Sivakarthikeyan.jpg') }}"
                    }]
                },
                {
                    title: "Stories that Travel",
                    moderator: "Bobby Bedi",
                    panel: "Panel Discussion",
                    date: "Nov-23rd, 2024, 12.30 PM TO 01.30 PM",
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
                            description: "Vani Tripathi Tikoo, an Actor and a producer by profession is one of the youngest ever member of the Central Board of Film certification popularly known as 'censor board'. She's been a socio-political activist and her campaigns and outreach programmes have focused on encouraging women's participation in politics and bringing the youth to a universal platform that addresses issues including education, empowerment and employment. She has been closely involved in theatre, films and television, having worked in projects in India as well as abroad. As an actor, she has about 50 plays, 40-odd TV serials and six films to her credit. She has worked in plays by legends like Anton Chekov, Peter Shaffer, Arthur Miller, Tennessee Williams and several Indian playwrights. After graduating in political science from the Delhi University, she went to the Living theatre academy of drama and learnt acting under the guidance of the legendary theatre guru Ebrahim Alkazi. Her close links with theatre further manifesting in her founding country's first state run drama school in bhopal– MADHYA PRADESH NATYA VIDYALAYA – in Madhya Pradesh in 2011.An extremely talented individual, Vani was also attached to journalism and broadcasting in India – she continues to contribute to Indian newspapers from time to time. She currently writes on issues related to broadcasting and content creation and was a part of the Core steering committee for the International Film festival of India,goa(IFFI) since the past eight years.She represented India as a focus country at the Cannes film festival 2022 with the likes of AR RAHMAN, SHEKHAR KAPUR, NAWAZUDDIN SIDDIQUI and the Union minister for information and broadcasting Shri Anurag Singh thakur.And she recently authored her first book 'Why can't elephants be red?' which is making waves globally.",
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
                    title: "Art of Cinematography",
                    moderator: "",
                    panel: "Master Class",
                    date: "Nov-23rd, 2024, 02.30 PM TO 04.00 PM",
                    speakers: [{
                        name: "John Seale",
                        description: "John Seale is an Australian cinematographer. He has received numerous accolades including an Academy Award, a BAFTA Award, and an American Society of Cinematographers Award. He then earned international prominence working with directors such as Anthony Minghella, Wolfgang Petersen, Ron Howard, Sydney Pollack, and George Miller. He received the Academy Award for Best Cinematography for ‘The English Patient’. He was also Oscar-nominated for Witness , Rain Man, Cold Mountain, Mad Max: Fury Road. Seale's other work includes the films Children of a Lesser God, Dead Poets Society, The Firm ,The Talented Mr. Ripley, and Harry Potter and the Philosopher's Stone.",
                        image: "{{ asset('public/images/master-class/John Seale.jpg') }}"
                    }]
                },
                {
                    title: "Power of Failure",
                    moderator: "",
                    panel: "Masterclass",
                    date: "Nov-23rd, 2024, 04.30 AM TO 06.00 PM",
                    speakers: [{
                        name: "Anupam Kher",
                        description: "Anupam Kher, best known for his prolific career in Indian and international cinema, has appeared in over 540 films and 100 plays over a span of 35 years, playing iconic characters in critical and commercial hits such as Saaransh, Dilwale Dulhaniya Le Jayenge, Karma, A Wednesday, Special 26, and The Accidental Prime Minister, among others. He is a member of the Academy of Motion Picture Arts and Sciences (USA) and was awarded the Padma Shri in 2004, followed by the Padma Bhushan in 2016. In addition to his acting career, Kher founded Anupam Kher’s Actor Prepares in 2005, a world-renowned acting school, and is also an acclaimed author with publications that include Lessons Life Taught Me, Unknowingly: An Autobiography, and The Best Thing About You Is You, Your Best Day Is Today.",
                        image: "{{ asset('public/images/master-class/Anupam Kher.jpg') }}"
                    }]
                },
                {
                    title: "Is the Documentary the New Feature?",
                    moderator: "Shekhar Kapur , Manisha Koirala",
                    panel: "In Conversation",
                    date: "Nov-23rd, 2024, 07.30 PM TO 08.30 PM",
                    speakers: [{
                        "name": "Lucy Walker",
                        "description": "Lucy Walker is an English film director. She has directed the feature documentaries Devil's Playground, Blindsight, Waste Land, Countdown to Zero, The Crash Reel, Buena Vista Social Club: Adios, Bring Your Own Brigade, and Mountain Queen: The Summits of Lhakpa Sherpa.She has also directed the short films The Tsunami and the Cherry Blossom and The Lion's Mouth Opens. Waste Land was nominated for the Academy Award for Best Documentary Feature and The Tsunami and the Cherry Blossom was nominated for the Academy Award for Best Documentary (Short Subject).",
                        "image": "{{ asset('public/images/master-class/Lucy Walker.jpg') }}"
                    }]
                }

            ],

            // 24 November Modal Data Start
            nov24: [{
                    title: "Laser for Post Production and Evolution to HDR",
                    moderator: "",
                    panel: "Master Class",
                    date: "Nov-24th, 2024, 11.00 AM TO 12.30 PM",
                    speakers: [{
                        name: "Anthon Muller, Global Director of Strategic Marketing at Barco Cinema",
                        description: "With over 20 years of experience in strategic marketing, product development, and digital innovation, Anthon Muller is a senior executive from Belgium known for leading high-performing teams across industries such as telecommunications, media, technology, cloud, and IoT. He is currently serving as the Global Director of Strategic Marketing: Post Production, Services & Innovation at Barco.",
                        image: "{{ asset('public/images/master-class/Anthon Muller.jpg') }}"
                    }]
                },
                {
                    title: "From Big Screen to Streaming",
                    moderator: "Vikramaditya Motwane",
                    panel: "In Conversation",
                    date: "Nov-24th, 2024, 12.45 PM TO 01.30 PM",
                    speakers: [{
                        name: "Manisha Koirala",
                        description: "Manisha Koirala is an actress who works in Indian films, predominantly in Hindi and Tamil. Known for her work in both commercial and independent cinema, she is the recipient of several accolades, including three Filmfare Awards and one Filmfare Awards South. In 2001, the Government of Nepal awarded her with the Order of Gorkha Dakshina Bahu. Later, she featured in the Netflix production 'Lust Stories' and portrayed Nargis in Sanju. She has since starred in the period drama series Heeramandi.",
                        image: "{{ asset('public/images/master-class/Manisha Koirala.jpg') }}"
                    }]
                },
                {
                    title: "Centenary Special: Celebrating the Life and Works of Raj Kapoor - 'The Greatest Showman'",
                    moderator: "Rahul Rawail",
                    panel: "In Conversation",
                    date: "Nov-24th, 2024, 02.30 PM TO 04.00 PM",
                    speakers: [{
                        name: "Ranbir Kapoor",
                        description: "Ranbir Kapoor is an Indian actor known for his work in Hindi-language films. He is one of the highest-paid actors of Hindi cinema and has featured in Forbes India's Celebrity 100 list since 2012. He made his acting debut with Sanjay Leela Bhansali's tragic romance Saawariya and rose to prominence with the coming-of-age film Wake Up Sid, the romantic comedy Ajab Prem Ki Ghazab Kahani, and the political drama Raajneeti. Kapoor's performances as a troubled musician in Rockstar and a cheerful deaf-and-mute man in Barfi! earned him two consecutive Filmfare Awards for Best Actor.",
                        image: "{{ asset('public/images/master-class/Ranbir Kapoor.jpg') }}"
                    }]
                },
                {
                    title: "Culture As Context for Cinematic Storytelling",
                    moderator: "Dr. Makrand Paranjapae",
                    panel: "Panel Discussion",
                    date: "Nov-24th, 2024, 04.30 PM TO 06.00 PM",
                    speakers: [{
                            name: "Dr. Sachchidanand Joshi",
                            description: "Dr. Sachchidanand Joshi is the Member Secretary and Executive and Academic Head of the Indira Gandhi National Centre for the Arts (IGNCA) and a noted writer, poet, and actor, who has published extensively on topics including media, communication, history, culture, education, and policy; he notably edited speeches of Prime Minister Shri Narendra Modi for the Publication Division and co-edited Connecting through Culture: An Overview of India`s Soft Power Strengths with Dr. Vinay Sahastrabuddhe, and his recent publications include Sachchidanand Joshi ki Lokpriya Kahaniya (2017), Putrikameshti (2021), and Low Hanging Fruits (2024), along with four collections of short stories and three poetry books, with his speeches compiled in Mera Desh Mera Dharm (2 volumes). Dr. Joshi has played a pivotal role in cultural and educational policymaking and led significant projects, including artwork for the New Parliament Building, Bharat Mandapam, and Prerana School, from curation to execution. He is currently leading the installation of the Indian Pavilion exhibit at the Osaka Expo 2025.",
                        image: "{{ asset('public/images/master-class/Dr. Sachchidanand Joshi.jpg') }}"
                    },
                    {
                        name: "Amish Tripathi",
                        description: "Amish Tripathi is an author, former diplomat, and broadcaster from India, recognized as one of the fastest-selling authors in Indian publishing history, best known for The Shiva Trilogy and Ram Chandra Series, with his books selling over 7 million copies and being translated into 20 Indian and international languages since 2010; he served as Minister (Culture & Education) at the High Commission of India in the UK and Director of the Nehru Centre, London, from 2019 to 2023, and he is also a host for TV documentaries, including Discovery TV's Legends of the Ramayana, The Journey of India with co-host Amitabh Bachchan, and Ram Janmabhoomi: Return of a splendid sun.",
                        image: "{{ asset('public/images/master-class/Amish Tripathi.jpg') }}"
                    },
                    {
                        name: "Bharatbala",
                        description: "Bharatbala is an Indian film director, screenwriter, and film producer based in Chennai, Tamil Nadu, known for producing the acclaimed album Vande Mataram and Jana Gana Mana Video, as well as heading Bharatbala Productions; he directed the short film Hari Om in 2004, the music video for the official song of the 2010 Commonwealth Games, Jiyo Utho Bado Jeeto, and the opening ceremony of the games, and in 2013, he completed his first feature film, Maryan.",
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
                speakers: [{
                        name: "Pragya Misra",
                        description: "Pragya is a multifaceted leader currently driving public policy and partnerships at OpenAI; she previously led public affairs at Truecaller and spearheaded WhatsApp’s campaign against misinformation in 2018, and beyond her professional roles, she is also a podcast host and a former national-level golfer.",
                        image: "{{ asset('public/images/master-class/Pragya Misra.jpg') }}"
                    },
                    {
                        name: "Anand Gandhi",
                        description: "Anand started writing and directing plays in school at the age of 12. At 19, he wrote a total of hundred episodes of two television soap operas, which went on to become the most popular shows in the history of Indian Television. The same year his play 'Sugandhi' was awarded the prestigious National Award. Beyond these early achievements, Anand went on to direct the groundbreaking film Ship of Theseus, a thought-provoking exploration of identity and ethics that became an international success and is widely regarded as a landmark in Indian independent cinema. He also founded Memesys Culture Lab, a pioneering media studio and think tank dedicated to creating innovative and thought-provoking content that challenges traditional cinematic boundaries, pushing the envelope in both form and substance.",
                        image: "{{ asset('public/images/master-class/Anand Gandhi.jpg') }}"
                    }
                ]
            },
            {
                title: "Integrating VFX with Cinematography",
                moderator: "Shankar Ramakrishnan",
                panel: "Master Class",
                date: "Nov-25th, 2024, 02.30 PM TO 04.00 PM",
                speakers: [{
                    name: "K K Senthil Kumar",
                    description: "Visionary cinematographer K.K. Senthil Kumar ISC is renowned for crafting epic films like:Magadheera, Eega, Baahubali: The Beginning, Baahubali: The Conclusion, RRR, and many more. He is a jury member for the prestigious Academy Awards (Oscars) and a winner of multiple awards.His breathtaking visuals, infused with emotional depth, have captivated global audiences.",
                    image: "{{ asset('public/images/master-class/Senthil Kumar1.jpg') }}"
                }]
            },
            {
                title: "How to Succeed in New Hollywood",
                moderator: "",
                panel: "Master Class",
                date: "Nov-25th, 2024, 04.30 PM TO 06.00 PM",
                speakers: [{
                    name: "Philip Noyce",
                    description: "Phillip Noyce is an Australian film and television director who has directed over 19 feature films since 1977 across various genres, including historical dramas like Newsfront, Rabbit-Proof Fence, and The Quiet American; thrillers such as Dead Calm, Sliver, and The Bone Collector; and action films including Blind Fury, The Saint, and Salt; he is also known for directing the Jack Ryan adaptations Patriot Games (1992) and Clear and Present Danger (1994), as well as the 2014 adaptation of Lois Lowry’s The Giver.",
                    image: "{{ asset('public/images/master-class/Phillip Noyce.jpg') }}"
                }]
            },
            {
                title: "Empowering Change: Women Leading the Way in Cinema",
                moderator: "Rudrani Chattoraj",
                panel: "In Conversation",
                date: "Nov-25th, 2024, 06.15 PM TO 07.00 PM",
                speakers: [{
                    name: "Kriti Sanon",
                    description: "Kriti Sanon is an Indian actress who works in Hindi and Telugu-language films. Sanon briefly worked as a fashion model. She began her acting career by playing the leading lady in the 2014 action films 1: Nenokkadine and Heropanti, romantic comedies Bareilly Ki Barfi (2017) and Luka Chuppi (2019), and her highest-grossing releases came with Dilwale (2015) and Housefull 4 (2019).She won the National Film Award and the Filmfare Award for Best Actress for playing the title role of a surrogate mother in the comedy-drama Mimi (2021).",
                    image: "{{ asset('public/images/master-class/Kriti Sanon.jpg') }}"
                }]
            }
        ],

        // 26 November Modal Data Start
        nov26: [{
                title: "The Thrill of Victory",
                moderator: "",
                panel: "Master Class",
                date: "Nov-26th, 2024, 11.00 AM TO 12.00 PM",
                speakers: [{
                    name: "Chris Kirschbaum",
                    description: "Chris Kirshbaum is an animator, teacher, and public speaker whose work has appeared in numerous feature films, shorts, DVD extras and holiday TV specials. He has worked in 2D animation as a special effects artist, and in 3D animation as a character animator, lead, supervisor, and AD. He has also been involved in teaching and mentoring aspiring animators since 2007, and has a background in music performance across different platforms.",
                    image: "{{ asset('public/images/master-class/Chris Kirschbaum.jpg') }}"
                }]
            },
            {
                title: "Film Production and it's Stages",
                moderator: "",
                panel: "Master Class",
                date: "Nov-26th, 2024, 12.30 PM TO 01.30 PM",
                speakers: [{
                    name: "Stephen Woolley",
                    description: "Stephen Woolley is an English filmmaker and actor whose career has spanned over three and a half decades, during which he was awarded the BAFTA award for Outstanding British Contribution to Cinema in February 2019; as a producer, he has been Oscar-nominated for The Crying Game (1992) and has produced multi-Academy Award nominated films including Mona Lisa (1986), Little Voice (1998), Michael Collins (1996), The End of the Affair (1999), Interview with the Vampire (1994), and Carol (2016), and he runs the production company Number 9 Films with his partner Elizabeth Karlsen.",
                    image: "{{ asset('public/images/master-class/Stephen Woolley.jpg') }}"
                }]
            },
            {
                title: "Exhibition of Feature Films in Cinema Theaters : The Question of Accessibility",
                moderator: "",
                panel: "Master Class",
                date: "Nov-26th, 2024, 02.30 PM TO 04.00 PM",
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
                date: "Nov-26th, 2024, 04.30 PM TO 06.00 PM",
                speakers: [{
                        name: "Sonu Nigam",
                        description: "Sonu Nigam is an Indian playback singer, music director, dubbing artist, and actor who predominantly sings in Hindi and Kannada language films, having sung over 4000 songs in various languages; he is one of the most preeminent singers of Hindi cinema, known for his non-film albums and roles in Hindi films, and was honoured with the Padma Shri, India’s fourth-highest civilian award, in 2022; his repertoire includes Romantic, Rock, Devotional, Ghazal, and Patriotic songs, and he has sung in multiple languages including Hindi, Odia, Bengali, English, Gujarati, Kannada, Maithili, Bhojpuri, Malayalam, Manipuri, Marathi, Nepali, Tamil, and Telugu, as well as releasing pop albums in Hindi, Kannada, Odia, Chhattisgarhi, and Punjabi, alongside Hindu and Islamic devotional albums.",
                        image: "{{ asset('public/images/master-class/Sonu Nigam.jpg') }}"
                    },
                    {
                        name: "Shahid Rafi",
                        description: "Shahid Rafi is the youngest son of the legendary playback singer Mohammad Rafi. He has proudly established the Mohammed Rafi Academy in Mumbai, a renowned institution nurturing Indian classical and contemporary music. His performances often carry the same melodious and heartfelt essence that defined Mohammad Rafi's songs, preserving the legacy of one of India’s most cherished voices.",
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
                moderator: "Ratnottama Sengupta",
                panel: "Panel Discussion",
                date: "Nov-27th, 2024, 11.00 AM TO 12.00 PM",
                speakers: [{
                        name: "Arjun Chakraborty",
                        description: "Arjun Chakrabarty is a versatile actor who began his career in Hindi cinema under the guidance of K. Balachandra and gained recognition for his roles in films such as Zara Si Zindagi and Ankush, with a significant milestone marked by his collaboration with Mrinal Sen in Ek Din Achanak; having over a hundred films and 15 music albums to his credit, he continues to work on various Bengali and Hindi projects while also venturing into direction with the film Tolly Lights.",
                        image: "{{ asset('public/images/master-class/Arjun Chakrabarty.jpg') }}"
                    },
                    {
                        name: "Sharmila Tagore",
                        description: "Sharmila Tagore is an Indian actress primarily known for her work in Hindi and Bengali films. Regarded among the greatest actresses in the history of Indian Cinema. she is known for portraying both traditional and modern women. Tagore is a recipient of two National Film Awards and the Filmfare Lifetime Achievement Award for her contributions to Hindi cinema. In 2013, the Government of India honoured her with Padma Bhushan, India's third highest civilian honour for her contributions to Indian culture through performing arts.",
                        image: "{{ asset('public/images/master-class/Sharmila Tagore.jpg') }}"
                    },
                    {
                        name: "N Manu Chakravarthy",
                        description: "Manu Chakravarthy is an accomplished scholar with an M.A. in English from the University of Mysore, specializing in European Classics, Literary Criticism, and Cultural Theory, currently serving as a visiting professor at various universities and film institutes while sharing his extensive knowledge on cultural and film theory; his extensive research experience is highlighted by his leadership roles in prestigious film festivals such as Ajanta-Ellora, Thrissur, and Kerala International Film Festivals, in addition to chairing the jury for the K R Mohanan endowment award and the Chidananda Dasgupta Memorial awards for best film criticism.",
                        image: "{{ asset('public/images/master-class/Manu Chakravarthy.jpg') }}"
                    }
                ]
            },
            {
                title: "Blurring Lines between the Truth & Perception: PR & Perception of Stars and their Films",
                moderator: "Jayprad Desai",
                panel: "Panel Discussion",
                date: "Nov-27th, 2024, 12.30 PM TO 01.30 PM",
                speakers: [{
                        name: "Himesh Mankad",
                        description: "Himesh Mankad is a Film Journalist at Pinkvilla. He started the journey in the world of entertainment journalism by being one of the three founders of the entertainment portal, Talking Moviez in 2013. Later, he shifted the base into professional journalism with Catch News, a subsidiary of Rajasthan Patrika, from July 1, 2015. This was followed by a career at Indian Express youth wing, InUth. He has formerly worked with Mumbai Mirror, Catch News, Bollywood Hungama!.",
                        image: "{{ asset('public/images/master-class/Himesh Mankad.jpg') }}"
                    },
                    {
                        name: "Shankar Ramakrishnan",
                        description: "22 years of creative career in Feature Films, Non-Fiction, Museum Installations and Literature, Shankar Ramakrishnan is known for notable films like Urumi, Netholi Oru Cheriya Meenalla, Pathinettam Padi, Raani. He was awarded as an actor for Spirit and Bavuttyude Namathil. He is the Executive member of Kerala State Chalachithra Academy, Department of Cultural Affairs -Government of Kerala.",
                        image: "{{ asset('public/images/master-class/shankar-ramakrishnan.jpg') }}"
                    },
                    {
                        name: "Ravi Kottarakkara",
                        description: "Ravi Kottarakkara is a prominent Indian film producer who has made significant contributions to the Malayalam, Tamil, Telugu and Kannada film industries. He is the president of Film Federation of India and South Indian Film Chamber of Commerce. His extensive body of work under the prestigious banners of Ganesh Pictures and Kottarakara Films has solidified his reputation as a stalwart in the South Indian cinema landscape, continuing his family’s illustrious legacy. Known for high-quality productions, Ravi’s films are celebrated for their powerful storytelling, well-developed characters, and ability to spotlight emerging talent.",
                        image: "{{ asset('public/images/master-class/ravi-kottarakkara.jpg') }}"
                    }
                ]
            },
            {
                title: "Lata Mangeshkar Memorial Talk: Musical Theatre in India",
                moderator: "Naman Ramachandran",
                panel: "In Conversation",
                date: "Nov-27th, 2024, 02.30 PM TO 04.00 PM",
                speakers: [{
                    name: "A R Rahman",
                    description: "A R Rahman is an Indian music composer, record producer, singer, songwriter, musician, multi-instrumentalist, and philanthropist known for his works in Indian cinema; predominantly in Tamil and Hindi films, with occasional forays in international cinema. He is a recipient of six National Film Awards, two Academy Awards, two Grammy Awards, a BAFTA Award, a Golden Globe Award, six Tamil Nadu State Film Awards, fifteen Filmfare Awards, and eighteen Filmfare Awards South. In 2010, the Government of India conferred him with the Padma Bhushan.",
                    image: "{{ asset('public/images/master-class/A R Rahman.jpg') }}"
                }]
            },
            {
                title: "The Larger Impact of Cinema and How AI will Change the Course of Entertainment Industry.",
                moderator: "Mahaveer Jain",
                panel: "In conversation",
                date: "Nov-27th, 2024, 04.30 PM TO 06.00 PM",
                speakers: [{
                    name: "Sudipta Bhattacharya (CTO Adani Group)",
                    description: "Sudipta Bhattacharya is the Group’s Chief Technology Officer and the Chief Executive Officer for North America. He manages several New Business Development, Innovation and Strategic Communications initiatives.",
                    image: "{{ asset('public/images/master-class/Sudipta Bhattacharya.jpg') }}"
                }]
            }
        ],

        nov28: [{
                title: "Youth and Cinema: Empowering Aspirants for a Creative Future",
                moderator: "",
                panel: "Master Class",
                date: "Nov-28th, 2024, 11.00 AM TO 11.30 AM",
                speakers: [{
                    name: "Kiran Jonaja Sippy",
                    description: "Kiran Joneja is a versatile Indian actress, model, producer, and the Managing Director of the Ramesh Sippy Academy of Cinema and Entertainment (RSACE). She is significantly know for her roles in the films Jab We Met and Khosla Ka Ghosla, alongside her roles in popular TV shows Buniyaad and Mahabharat. She began her career as a model doing prestigious advertisements for Nivea, Lakme and many more. She also hosted her own talk show, The Kiran Joneja Talk Show for Starplus and Fasle for DD News. In addition, Kiran Joneja plays an influential role as MD in RSACE, contributing to shaping the future of cinema education and talent development.",
                    image: "{{ asset('public/images/master-class/kiran-jonaja.jpg') }}"
                }]
            },
            {
                title: "Passion for perfection-Ramesh Sippy philosophy",
                moderator: "Mohit Sony",
                panel: "In Conversation",
                date: "Nov-28th, 2024, 11.35 AM TO 12.30 PM",
                speakers: [{
                    name: "Ramesh Sippy",
                    description: "Padmashree Ramesh Sippy is a renowned Indian film director, producer, and industry leader, best known for his iconic film Sholay (1975) along with his films Andaaz , Seeta aur Geeta, Saagar, Shakti and many more. Apart from his directorial success, he has also made significant contributions as a producer, shaping several successful films under Ramesh Sippy Entertainment, including Dum Mari Dum and Nautanki Saala. He has served as the chairman of Guild, MESC and NFDC, and as been Chairman Jury for National Awards, Filmfare, IIFA and several others while playing a key role in India's film industry regulations. Additionally, he founded Ramesh Sippy Academy of Cinema and Entertainment offering courses in Media and Entertainment.",
                    image: "{{ asset('public/images/master-class/ramesh-sippy.jpg') }}"
                }, ]
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <img src="${speaker.image}" class="img-circle" alt="${speaker.name}">
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
