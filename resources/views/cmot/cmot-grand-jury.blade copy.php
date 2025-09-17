@extends('layouts.app')
@section('site_title', 'CMOT Grand Jury Details | IFFI Goa')
@section('site_description',
    'Discover the esteemed CMOT Grand Jury at IFFI Goa, featuring renowned filmmakers, critics,
    and industry experts who evaluate the finest cinematic masterpieces. Learn more about their role and contributions. ')
@section('site_keywords', 'CMOT Grand Jury, IFFI Goa Jury, Jury Details IFFI, CMOT Jury Members, IFFI Grand Jury')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-cmot py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Creative Minds Of Tomorrow Grand Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">A SREEKAR PRASAD </h2>
                                <h5>Editing & Subtitling </h5>
                                <p>A. Sreekar Prasad is India's leading film editor, with nine National Awards over 34 years
                                    for films in various languages. He has edited nearly 600 films, including RRR, Dil
                                    Chahta Hai, Alaipayuthey, Vanaprastham, Thuppakki, Billa, Kaminey, Okkadu, Annamayya,
                                    and Ponniyin Selvan. He holds two Limca Book records for most National Awards in editing
                                    and most languages edited (17).
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/sreekar-prasad-photo.jpeg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Charuvi-Maam.jpeg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Charuvi Agrawal </h2>
                                <h5>Animation, VFX, AR & VR </h5>
                                <p>Charuvi Agrawal, an acclaimed animation director, producer, and immersive artist, blends
                                    art, technology, and Indian mythology. A graduate of Delhi College of Arts and Sheridan
                                    Institute, she founded Charuvi Design Labs. Known for co-creating The Legend of Hanuman
                                    (2021), her work spans animation and public art installations, earning her the 2024
                                    "Icons Award" and recognition from global platforms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Ravi Varman </h2>
                                <h5>Cinematography </h5>
                                <p>S. Ravi Varman, ISC (b. 1972), is an Indian cinematographer, filmmaker, and writer,
                                    renowned for his poetic and realistic visual style. A 2024 member of the Academy of
                                    Motion Picture Arts and Sciences, he has worked on 36 feature films in Tamil, Malayalam,
                                    and Hindi, collaborating with top directors like Mani Ratnam and Sanjay Leela Bhansali,
                                    and shot over 800 commercials. </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Ravi-Varman.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Shreya-Ghoshal.avif') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Shreya Ghoshal </h2>
                                <h5>Playback Singing </h5>
                                <p>Shreya Ghoshal (b. 1984) is an acclaimed Indian singer known for her wide vocal range and
                                    versatility. Dubbed the "Queen of Dynamics," she is regarded as one of the greatest
                                    vocalists in the Indian subcontinent. She has recorded in multiple languages and won
                                    numerous accolades, including five National Film Awards and seven Filmfare Awards.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shankar Mahadevan </h2>
                                <h5>Music Composition </h5>
                                <p>Shankar Mahadevan is a celebrated Indian singer, composer, and part of the
                                    Shankar-Ehsaan-Loy trio. Known for his versatility, he blends classical, jazz, and
                                    contemporary music, and has enchanted audiences worldwide. Winner of multiple National
                                    Film Awards, he gained fame with hits like "Breathless" and iconic film scores. His
                                    contribution spans Bollywood, Carnatic music, and mentoring through the Shankar
                                    Mahadevan Academy. </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Shankar-Mahadevan.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Subhash-Sahoo.avif') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Subhash Sahoo </h2>
                                <h5>Sound Recording </h5>
                                <p>Subhash Sahoo is a noted sound Designer and Director from odisha, known for his work in
                                    highly succesful films such as Omkara, Kaminey, Kill, Neerja </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Deepak Singh </h2>
                                <h5>Direction</h5>
                                <p>Deepak Singh is an established content creator, film producer in
                                    Indian Hindi and Punjabi Film Industry as well as Hollywood. He is
                                    also a respected name in Brand and Media consulting as well.
                                    He has been making Films and Content. He owns a 18years old
                                    company GALAXY ENTERTAINMENT which is into film-making,
                                    music videos making, ads making, production house making and
                                    catering as brand and image consultant for various people.</p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Deepak-singh.jpeg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Mona-Shetty.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Mona Shetty </h2>
                                <h5>Voiceover/Dubbing </h5>
                                <p>Mona Ghosh Shetty is an Indian voice-dubbing actor and director, known for dubbing in
                                    Hindi, Bengali, English, Marathi, and Urdu. She runs Sound & Vision India in Mumbai and
                                    has voiced leading female roles for over 15 years, including Cameron Diaz, Angelina
                                    Jolie, Halle Berry, Katrina Kaif, and Deepika Padukone. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Sreelekha Mukherjee </h2>
                                <h5>Acting</h5>
                                <p>Sreelekha Mukherji is a National Film Award-winning Indian actress, with predominant
                                    works in Bengali films. She is known for her lead role in the 1989 film Parshuramer
                                    Kuthar, for which she won the National Film Award for Best Actress and the Bengal Film
                                    Journalists' Association – Best Supporting Actress Award for Shilpi (1994).
                                    <br>
                                    She also appeared as the mother of Debasmita Benarjee (Mukta) in Borolar Ghor (2012), a
                                    bilingual Assamese-Bengali
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Sreelekha-Mukherjee.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Samrat-Chakraborty.jpg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Samrat Chakraborty </h2>
                                <h5>Writing</h5>
                                <p>Samrat Chakraborty is a noted screenwriter who built a remarkable career writing for top
                                    TV and web series. He co-wrote Jagga Jasoos with Anurag Basu and assisted on Ludo as
                                    Chief Assistant Director, among others. His debut as a feature-film director, Manik
                                    (co-produced by Endemol India), is a fine example of his unique ability to blend fantasy
                                    with reality, crafting emotionally rich, visually compelling stories. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Sheetal Sharma </h2>
                                <h5>Costume Design </h5>
                                <p>Sheetal Iqbal Sharma is an Indian fashion and costume designer, who works in Hindi and
                                    Telugu films. He is known for his works in films like Miss Lovely, Airlift, Manto,
                                    Judgementall Hai Kya, Gangubai Kathiawadi and Sita Ramam. </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/sheetal-sharma.avif') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/shashank-tere.jpeg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="international-jury-text" style="padding-right: 30px;">
                                <h2>Shashank Tere </h2>
                                <h5>Art Design </h5>
                                <p>Shashank Tere is a noted Indian production designer, known for working on various popular
                                    films such as Don 2, Rock Onn, Delhi Belly, for which Filmfare Award for Best Production
                                    Design </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shrikant Desai </h2>
                                <h5>Hair and Makeup </h5>
                                <p>Shrikant Desai is Creative Director of India's leading Make-up and special effect
                                    company, Make-up Mafia. He specializes in character designing. Tumbbad. He is known for
                                    his work as a make up artist for critically acclaimed films such as Tumbbad (2018),
                                    Chhapaak (2020) and Kaabil (2017). </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-grand-jury/Shrikant.jpeg') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
