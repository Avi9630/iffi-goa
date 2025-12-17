@extends('layouts.app')
@section('site_title', 'IFFI Goa Rules and Regulations | NFDC | MIB')
@section('site_description',
    'Discover the rules & regulations for participating in the International Film Festival of
    India (IFFI) in Goa. Ensure compliance for a seamless experience.')
@section('site_keywords',
    'IFFI Goa rules, IFFI guidelines, Film Submission Rules, IFFI entry requirements, IFFI Goa
    policies, Film Festival Regulations, Event Rules IFFI')
@section('content')
    @include('layouts.header')
    @include('pages.navigation-slide')
    <div class="container-fluid page-header bannerBg-international-cinema-awards py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">International Cinema Awards - 2025</h1>
        </div>
    </div>
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">
                    <h2>International Competition Section:</h2>

                    <p><strong>1. Golden Peacock - Best Feature Film</strong><br>
                        The IFFI Best Film Award (officially known as the Golden Peacock for the Best Feature Film) is the
                        main prize of the International Film Festival of India.
                        A cash prize of Rs. 40,00,000/- is shared between the Director and Producer. The Director also gets
                        the Golden Peacock and a Certificate, while the Producer gets a Certificate.
                    </p>

                    <p><strong>2. Silver Peacock - Best Director</strong><br>
                        The IFFI Award for Best Director. The winner is selected from the 15 films (12 International
                        Features and 3 Indian Features) competing in the Best Film International Competition.
                        The Best Director in this category receives a Cash Prize of Rs. 15,00,000, the Silver Peacock and a
                        Certificate.
                    </p>

                    <p><strong>3. Silver Peacock - Best Actor (Male)</strong><br>
                        The IFFI Award for Best Actor (officially known as the Silver Peacock for the Best Actor Award
                        (Male)) is presented to an actor for the best performance in a leading role. The winner is chosen
                        from the 15 films competing in the Best Film International Competition.
                        The Best Actor in this category receives a Cash Prize of Rs. 10,00,000, the Silver Peacock and a
                        Certificate.
                    </p>

                    <p><strong>4. Silver Peacock - Best Actor (Female)</strong><br>
                        The IFFI Award for Best Actor (officially known as the Silver Peacock for the Best Actor Award
                        (Female)) is presented to an actor for the Best performance in a leading role. The winner is chosen
                        from the 15 films competing in the Best Film International Competition.
                        The Best Actor (Female) in this category receives a Cash Prize of Rs. 10,00,000, the Silver Peacock
                        and a Certificate.
                    </p>

                    <p><strong>5. Special Jury Award</strong><br>
                        The IFFI Special Jury Award (officially known as the Silver Peacock – Special Jury Award) is
                        presented to a film for excellence in any aspect of the film which the Jury wishes to recognise.
                        The winner is selected from the pool of 15 films competing for the Best Film Award, and given to the
                        Director of the film.
                        The Award carries a Silver Peacock, a cash prize of Rs. 15,00,000, and a Certificate.
                    </p>
                    
                    <h2>Best Debut Feature Film of a Director</h2>
                    <p><strong>Silver Peacock </strong><br>
                        The IFFI Award for Best Debut Director (officially known as the Silver Peacock for the Best Debut
                        Feature Film of a Director) aims to recognize and encourage the most
                        promising new directorial talent in international cinema. The winner is shortlisted from the
                        selection of 5 International and 2 Indian films competing for the Debut Feature Award.
                        This Award includes a cash prize of Rs. 10,00,000, the Silver Peacock and a Certificate which is
                        awarded to the Director.
                    </p>

                    <h2>ICFT-UNESCO Gandhi Medal</h2>
                    <p>
                        The International Film Festival of India (IFFI) 2024 in collaboration with the International Council
                        for Film, Television and Audiovisual Communication (ICFT), Paris, presents a special ICFT prize to a
                        film which reflects the ideals promoted by UNESCO - especially: Tolerance, Intercultural Dialogue &
                        Culture of Peace.
                        <br><br>
                        The international honor, instituted at the 46th International Film Festival of India, is awarded to
                        the Director of the film chosen from a selection of films (10) competing for the prize. The Award
                        consists of the UNESCO Gandhi Medal and a Certificate.

                    </p>

                    <h2>Other Awards at IFFI 2025</h2>

                    <p><strong>1. SATYAJIT RAY LIFETIME ACHIEVEMENT AWARD</strong><br>
                        The Satyajit Ray Lifetime Achievement Award for Excellence in Cinema. This prestigious award,
                        instituted in the name of legendary filmmaker Satyajit Ray, consisting of a cash prize of Rs.
                        10,00,000/-, certificate, shawl, Medal (Silver Peacock) and a scroll, is conferred upon a master
                        filmmaker/film technicians/film personalities for their outstanding contribution to cinema. The
                        festival annually invites a film maker/ film technicians/ film personalities of repute for this
                        award. The list of winners over the last few years include celebrated American filmmaker Martin
                        Scorsese (2021) and Hungarian filmmaker István Szabó (2021); Spanish filmmaker Carlos Saura (2022),
                        American Actor & producer Michael Douglas (2023) and most recently Australian director Phillip Noyce
                        (2024).
                    </p>
                    <p>
                        <a href="{{ route('satyajit-ray-lifetime-achievement-award') }}"
                            class="btn cus-prim-btn   text-center">Visit now to know more the awardee</a>
                    </p>

                    <p><strong>2. INDIAN FILM PERSONALITY OF THE YEAR</strong><br>
                        The Award is presented to an Indian film personality for their outstanding contribution to Indian
                        cinema.
                        The Prize includes a cash prize of Rs. 10,00,000/-, a certificate, shawl, and the Silver Peacock.
                        The winners of the last couple of years include accomplished actors Madhuri Dixit (2022),
                        Chiranjeevi (2023) and Vikrant Massey (2024).
                    </p>
                    <p>
                        <a href="{{ route('indian-film-personality-of-the-year-award') }}"
                            class="btn cus-prim-btn   text-center">Visit now to know more the awardee</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


@endsection
