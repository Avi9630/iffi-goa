@extends('layouts.app')
{{-- @section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
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
            <h1 class="page-title-header">IFFIESTA</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">
                    <h2 class="text-center">Sound of Celebrations: IFFIESTA 2025</h2>
                    {{-- <h3>The Celebration Beyond the Screen</h3> --}}

                    <p>This November, the International Film Festival of India (IFFI) isn’t just screening films in Goa;
                        it’s hosting a cultural carnival. Adding a fresh dimension to the nation’s most celebrated film
                        event, organisers are unveiling ‘IFFIESTA’, a dazzling celebration of music, culture, and live
                        performances that will set the stage on fire alongside the main festival.
                    </p>

                    <p>IFFIESTA 2025 will be Doordarshan's grand celebration of India's musical and cultural excellence at
                        the International Film Festival of India. From 21st to 24th November 2025, the Shyama Prasad
                        Mukherjee Auditorium will transform into a vibrant stage where stories unfold through sound, rhythm,
                        and performance. Curated under WAVES Culturals & Concerts, the festival will bring together
                        musicians, artists, and audiences in an experience that celebrates India's timeless
                        connection ith art.
                    </p>

                    <p>
                        Each evening at IFFIESTA will have its own character. Some nights will begin softly, with familiar
                        tunes that stir nostalgia. Others will erupt into colour and movement, as young artists take the
                        stage with the confidence of a generation redefining creativity. From the elegance of classical
                        ragas to the pulse of contemporary beats, IFFIESTA will capture the essence of India - diverse,
                        dynamic, and deeply emotional. While doing so, IFFIESTA will also echoe India’s growing “creative
                        and live economy”- a dynamic space where art, innovation, and enterprise come together to create not
                        just performances but possibilities.
                    </p>

                    <p>
                        But beyond the music and the lights, IFFIESTA is about the people. It is about the crowd that sings
                        together, the families that come together post sundown, and the strangers who become one with the
                        beat. It is a reminder that music is not just heard, it is felt. It connects hearts, dissolves
                        boundaries, and gives every listener a reason to belong.
                    </p>

                    <h2 class="text-center">Four Days of Musical Magic</h2>

                    <p>
                        IFFIESTA 2025 will unfold over four unforgettable evenings, each with its own rhythm and pulse. Each
                        evening will be anchored by a celebrity host, with a special guest singer presented by Saregama. The
                        result will be a continuous arc of energy, craft, and celebration that anyone can walk into and feel
                        a
                        part of. Presented in association with Saregama, MJ Films, and Dilli Gharana, the festival will
                        bring
                        together India's finest voices, musicians, and storytellers on one colourful stage — a reflection of
                        the
                        country's creative diversity and the spirit of togetherness that defines IFFIESTA.<br>
                    </p>
                    <p class="text-center"><b>Venue: Shyama Prasad Mukherjee Auditorium, Goa | Time: 6:00 PM - 8:00 PM</b></p>

                    <table border="1" cellspacing="0" cellpadding="10" style="width:100%; border-collapse:collapse;">

                        <thead style="background:#4aa3b5; color:#fff;">
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Programme</th>
                                <th class="text-center">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background:#d3ecf0;">
                                <td style="background: #4aa3b5; color:#fff">
                                    21<sup>st</sup> Nov<br>2025 (Fri)
                                </td>
                                <td>Osho Jain — Live in Concert</td>
                                <td>Free entry</td>
                            </tr>

                            <tr style="background:#e3f5f7;">
                                <td style="background: #4aa3b5; color:#fff">
                                    {{-- <strong></strong> --}}
                                    22<sup>nd</sup> Nov<br>2025 (Sat)
                                </td>
                                <td>
                                    Festival Showcase: Battle of Bands (India & International), Suron ka Eklavya, Wahh Ustad.   
                                </td>
                                <td>Free entry</td>
                            </tr>

                            <tr style="background:#d3ecf0;">
                                <td style="background: #4aa3b5; color:#fff">
                                    {{-- <strong></strong> --}}
                                    23<sup>rd</sup> Nov<br>2025 (Sun)
                                </td>
                                <td>
                                    Festival Showcase: Battle of Bands (India & International), Suron Ka Eklavya, Waah
                                    Ustad, Devanchal ki Prem Katha (Special Showcase)
                                </td>
                                <td>Free entry</td>
                            </tr>

                            <tr style="background:#e3f5f7;">
                                <td style="background: #4aa3b5; color:#fff">
                                    {{-- <strong></strong> --}}
                                    24<sup>th</sup> Nov<br>2025 (Mon)
                                </td>
                                <td>
                                    Festival Showcase: Battle of Bands (India & International), Suron Ka Eklavya, Waah Ustad
                                </td>
                                <td>Free entry</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h2 class="text-center"><b>Event Highlights</b></h2>

                    <div class="row iffiesta p-3 mt-4">
                        <div class="col-sm-8">
                            <h2>Battle of Bands -India & International</h2> &nbsp;
                            <p>One of the most dynamic youth music formats from Doordarshan and WAVES OTT, Battle of Bands -
                                India brought together 26 outstanding groups spanning rock, Sufi, Bollywood, and fusion
                                styles.
                                After rounds of electrifying performances, The Vairagies emerged as the winners, followed by
                                Sufi Rockers and Souls of Sufi x Gauransh
                            </p><br>
                            <p>In its 2025 international edition under the WAVES: Create in India Challenge, 13 global bands
                                performed alongside India's top five, transforming the stage into a vibrant celebration of
                                collaboration and cultural exchange. The event reaffirmed India's growing stature as a
                                creative hub, where music once again proved to be universal language that connects
                                hearts across borders.</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('public/images/desktop-image/webp/ifffi-img1.webp') }}" class="img-fluid"
                                alt="image" loading="lazy">
                        </div>
                    </div>

                    <div class="row iffiesta p-3 mt-4">
                        <div class="col-sm-4">
                            <img src="{{ asset('public/images/desktop-image/webp/ifffi-img2.webp') }}" class="img-fluid"
                                alt="image" loading="lazy">
                        </div>
                        <div class="col-sm-8">
                            <h2>Suron Ka Eklavya Voice of New India</h2> &nbsp;
                            <p>
                                A Doordarshan original that gave emerging singers a national platform, Suron Ka Eklavya was
                                mentored by Sharib-Toshi, Anand Raj Anand, and Pratibha Singh Baghel. At IFFIESTA, its
                                winners will return with live orchestral arrangements and vibrant staging by Gajendra Singh
                                (of Antakshari fame). The segment will be anchored by Pratibha Singh Baghel, with a new
                                celebrity singer joining the performance each evening.
                            </p>
                        </div>

                    </div>

                    <div class="row iffiesta p-3 mt-4">
                        <div class="col-sm-8">
                            <h2>Waah Ustad - Soul of Indian Classical</h2> &nbsp;
                            <p>Presented by Dilli Gharana, Waah Ustad bridges classical and Sufi traditions with a
                                contemporary touch. Conceptualised and anchored by Vusat Iqbal Khan in his distinctive
                                Dastangol style, the segment will showcase the top six finalists of Season 1, mentored by
                                Pandit Sajan Mishra and Meet Bros. Expect powerful live jugalbandis, Dervish dancers, and a
                                grand fusion finale celebrating India's timeless classical heritage
                            </p><br>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('public/images/desktop-image/webp/ifffi-img3.webp') }}" class="img-fluid"
                                alt="image" loading="lazy">
                        </div>
                    </div>

                    <div class="row iffiesta p-3 mt-4">
                        <div class="col-sm-4">
                            <img src="{{ asset('public/images/desktop-image/webp/ifffi-img4.webp') }}" class="img-fluid"
                                alt="image" loading="lazy">
                        </div>
                        <div class="col-sm-8">
                            <h2>Devanchal ki Prem Katha - A Story Beyond Sight and Sound</h2> &nbsp;
                            <p>
                                Set in the hills of Palampur, this moving romantic drama follows two differently-abled
                                protagonists whose story celebrates empathy, courage, and inclusive love. Produced by Cult
                                Digital, the narrative will come alive through a live stage performance by the lead cast,
                                followed by a traditional Himachali folk dance. Anchored each evening by a popular
                                television personality, the segment will blend fiction, music, and regional culture.
                            </p>
                        </div>

                    </div>

                    <br>
                    <h2 class="text-center">The Creative Pulse of a New India</h2>
                    <p>The Creative Pulse of a New India
                        At the heart of IFFIESTA lies a movement that is transforming India's cultural landscape — the rise
                        of the “creative and live economy”. More than a festival, IFFIESTA will become a stage where
                        creativity meets opportunity, bringing together artists, audiences, and industries in a shared
                        celebration of talent and innovation.</p><br><br>

                    <p>This vision finds its foundation in WAVES Culturals & Concerts , an initiative that has paved the way
                        for new forms of artistic collaboration and cultural entrepreneurship. Under the larger World Audio
                        Visual & Entertainment Summit (WAVES) platform, the festival promotes India's emergence as a global
                        creative hub — connecting creators, industries, and audiences across borders.</p><br>

                    <p>By curating large-scale live experiences, nurturing talent from grassroots to global, and showcasing
                        the diversity of Indian artistry, WAVES Culturals & Concerts is helping build the framework of
                        India's
                        growing creative economy. From concerts and competitions to international collaborations, it fosters
                        both artistic excellence and economic value — strengthening the ecosystem that supports musicians,
                        performers, and production professionals alike.</p><br>

                    <p>In this continuum, IFFIESTA stands as the people's expression of this larger movement. It reflects
                        how creativity fuels connection and how live experiences generate not just applause, but
                        livelihoods. The four nights of culture, music and performances will echo with the larger national
                        momentum — one where culture is not just preserved, but pushed forward through participation,
                        innovation, and shared celebration.</p>


                    <h2 class="text-center">The Echo that Lingers</h2>

                    <p>IFFIESTA 2025 is set to be more than just a festival, it will serve as a reminder of the magic that
                        is unleashed when people, art, and stories meet. Over four nights in Goa, music will become memory,
                        performances will turn into participation, and every applause will carry the warmth of shared joy.
                        It will capture the essence of celebration that belongs to everyone- inclusive, spontaneous,
                        and deeply human.</p><br>
                    <p>IFFIESTA 2025 is set to be more than just a festival, it will serve as a reminder of the magic that
                        is unleashed when people, art, and stories meet. Over four nights in Goa, music will become memory,
                        performances will turn into participation, and every applause will carry the warmth of shared joy.
                        It will capture the essence of celebration that belongs to everyone- inclusive, spontaneous,
                        and deeply human.</p><br>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .iffiesta {
        background: #f5eced
    }
</style>
