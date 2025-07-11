@extends('layouts.app')
@section('site_title', 'Must-Know Rules for Indian Panorama Participation')
@section('site_description',
    'Find key rules and regulations for participating in the Indian Panorama section at IFFI
    Goa, covering eligibility, guidelines, and submission requirements.')
@section('site_keywords',
    'IFFI Goa rules, IFFI guidelines, Film Submission Rules, IFFI entry requirements, IFFI Goa
    policies, Film Festival Regulations, Event Rules IFFI')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Banner Section -->
    <div class="container-fluid page-header bannerBg-rules py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">INDIAN PANORAMA, 2025 REGULATIONS</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <!-- Opening & Closing Venue -->
            <div class="rules-text">
                <h5>1. Short Title</h5>

                <p>
                    These regulations shall be called Indian Panorama 2025 Regulations for the 56th edition of International
                    Film Festival India (IFFI), 2025 and shall come into force with immediate effect.
                </p>

                <hr>
                <h5>2. Definitions</h5>

                <p>In these Regulations, unless the context otherwise refers,</p>
                <ul class="ps-0">
                    <li>(a) “Board” means the Central Board of Film Certification.</li>
                    <li>(b) “Corporation” means National Film Development Corporation,
                        Ministry of Information
                        and Broadcasting.
                        and Broadcasting.</li>
                    <li>(c) “Indian Panorama” is a Section of the International Film Festival
                        of India. “Indian
                        Panorama” means the group of films selected in terms of the provisions given in these
                        Regulations for participation in National and International Film Festivals.</li>
                    <li>(d)“Producer” is one who produces a film and also has the copy right of the film and can
                        supply/authorize supply of digital copies of the selected films, for Jury or other screenings at
                        Film Festival(s) and may include an individual or a company or an Institute or any other such entity
                        as co- producer. </li>
                </ul>

                <hr>
                <h5>3. Aims and objectives</h5>

                <p>The aim of the Indian Panorama, organized by the NFDC is to select Feature and Non-feature
                    films of cinematic, thematic and aesthetic excellence, for the promotion of film art through the
                    non-profit screening of these films in:</p>
                <ul class="ps-0">
                    <li>(1) International Film Festivals in India and abroad.</li>
                    <li>(2) Indian Film Weeks held under Bilateral Cultural Exchange
                        Programmes and Specialized
                        Indian Film Festivals outside cultural exchange protocols.
                        Indian Film Festivals outside cultural exchange protocols.</li>
                    <li>(3) Special Indian Panorama Festivals in India.</li>
                    Indian Panorama at the 56th IFFI will also focus on<br />
                    (a) Indian Films making their world, international, Asia or India premiere, and<br />
                    (b) Best debut feature films of Indian directors

                </ul>

                <hr>
                <h5>4. Sections</h5>
                <p>
                    The Indian Panorama at 56th IFFI will therefore have the following 4 sub sections:
                <ul>
                    <li>
                        (a) Feature films - A maximum of 26 Feature films (including the Best Feature from 72nd National
                        Film
                        Awards, 2024)
                    </li>
                    <li>
                        (b) Non-feature films - A maximum of 21 non-feature films (including the Best Non-feature films from
                        72nd National Film Awards, 2024)
                    </li>
                    <li>
                        (c) 5 Debut feature films which showcase a diverse range of narratives and cinematic styles of young
                        film makers from across the country and which have been selected by the jury to promote new and
                        young
                        talent.
                    </li>
                    <li>
                        (d) New Horizons – Those feature films from the above selections (a), (b) and (c) that are screening
                        for
                        the first time anywhere either in the world or at least in India i.e. World, International, Asia or
                        India Premieres. Besides feature films recommended by IP Jury, this sub section may also include
                        up-to 5
                        feature films curated specially for this sub section by the festival outside the ambit of Indian
                        Panorama.
                    </li>
                </ul>
                </p>
                <hr>
                {{-- <h5>5. Indian Panorama</h5>
                <p>A maximum of 26 Feature films and 21 Non-feature films (including the Best Feature and Best
                    Non-feature films from 71st National Film Awards, 2023), distinguished by cinematic, thematic
                    and aesthetic excellence selected in accordance with the conditions and procedure laid down
                    below will feature in the Indian Panorama.
                </p> --}}

                <hr>
                <h5>5. ELIGIBILITY CONDITIONS</h5>

                <p>The following conditions must be fulfilled by all entries:
                </p>
                <ul class="ps-0">
                    <li>5.1 The film should be in any Indian language. The Phrase “any Indian
                        language” would
                        mean all official languages of the State/Union Territories of the Indian Union, all other
                        Indian
                        languages included in Schedule VIII of the Constitution of India and such other languages
                        and
                        dialects that may be permitted by the Government of India from time to time.

                        <ul class="ps-0">
                            <li>5.1.1 Silent Films will also be eligible.</li>
                            <li>5.1.2 The Director should be an Indian national.</li>
                            <li>5.1.3 The Producer of the film should be an Indian national
                                and the film should have been
                                produced in India. However, co-productions with the foreign entity are also
                                acceptable.</li>
                        </ul>
                    </li>
                    <li>5.2 In the case of co-productions involving a foreign entity, the
                        following conditions should
                        be fulfilled :
                        <ul class="ps-0">
                            <li>5.2.1 At least one of the co-producers must be an Indian
                                entity.</li>
                            <li>5.2.2 The Indian entity should be registered in India or a
                                citizen of India.
                            </li>
                            <li>
                                5.2.3 The cast and technicians should be predominantly Indian nationals. However,
                                non-feature
                                films directed by foreign students of Film Institutes situated in India will be eligible if
                                their entries are sent through their respective Institutes.
                            </li>
                            <li>5.2.4 The title of the film should be registered as an Indian
                                film title.
                            </li>

                            <li>5.2.5 The Director should be an Indian national. The cast and
                                technicians should
                                be predominantly Indian nationals. However, non-feature films directed by
                                foreign students of Film Institutes situated in India will be eligible if their
                                entries are sent through their respective Institutes.</li>
                            <li>5.2.6 The applicant i.e. Producer/right holder(s) should have
                                the right for
                                sanctioning the participation of the film in festivals in India and abroad as an
                                Indian entry as well as special expositions of Indian cinema organized by the
                                NFDC.</li>
                        </ul>
                    </li>
                    <li>
                        5.3 The completion year of production of the films should be during the last 12
                        months preceding the festival i.e.1st August, 2024 to 31st July, 2025. The applicant should
                        submit a declaration stating the date of completion year of production in the format as
                        mentioned at clause number 7.2 (c) i, ii, iii. Films certified by CBFC during the period 1st
                        August, 2024 to 31st July, 2025 are also eligible.
                    </li>
                </ul>
                <p><strong><span style="font-size:18px">Note:</span></strong></p>
                <ul class="ps-0">
                    <li>(1) If the film (Feature or Non-Feature) has been selected/screened in
                        any
                        Indian/international selection of the festival, it will be eligible for entry in the
                        Indian Panorama section in the same year only.</li>
                    <li>(2) If a film selected for Indian Panorama is not certified by CBFC,
                        NFDC would take
                        necessary action for seeking exemption as per Cinematography Act, 1952 for the festival
                        screenings. However, as and when the film is certified by CBFC, the Producer should
                        provide the certified version of the film to NFDC in the desired formats.</li>
                    <li>(3) If a film (Censored or Un-censored) entered last year Indian
                        Panorama will not be
                        eligible for Indian Panorama 2025.</li>
                </ul>
                <ul class="ps-0">
                    <li>6.4 Films made in any Indian language shot in digital/video format and
                        as a feature film
                        or fiction above 72 min duration, are eligible for the Feature Film Section.</li>
                    <li>6.5 Films made in any Indian language shot on digital/video format and
                        as a
                        Documentary/News reel/non-fiction/short fiction are eligible for the Non- Feature Film
                        Section.</li>
                    <li>6.6 .a)The question of whether a film is a feature film or a non-feature
                        film will be
                        decided based on such categorization mentioned in the entry form and declaration
                        submitted by the applicant.<br />
                        b) The film/entry under Best Debut Director of Indian Feature Film will be scrutinized as per
                        applicant’s declaration and material facts available, besides the overarching Indian Panorama
                        Regulations.
                        <br />
                        c) The film/entry under New Horizons Category (Indian Feature Film) will be scrutinized as per
                        applicant’s declaration on the premiere status and material facts available, besides the overarching
                        Indian Panorama Regulations.

                    </li>


                    <li><strong>6.7 ALL FILMS MUST CARRY ENGLISH SUBTITLES.</strong></li>
                    <li>6.8 For Mainstream Cinema Selection, Film Federation of India, Film
                        and Television Producers
                        Guild of India, Ltd., Indian Motion Picture Producers Association (IMPAA), Indian Film and
                        Television Director's Association, Eastern Indian Motion Pictures Association (EIMPA), South
                        Indian
                        Film Chamber of Commerce, Akhil Bhartiya Marathi Chitrapat Mahamandal and Film Fraternity of
                        Assam may submit five (5) films each based on popular appeal and box office receipts to be
                        included in Indian Panorama evaluated by their own jury. The Indian Panorama Jury may select
                        up
                        to Five (5) films recommended by Film Federation of India, Film and Television Producers
                        Guild of
                        India Ltd., Indian Motion Picture Producers Association (IMPAA), Indian Film and Television
                        Director's Association, Eastern Indian Motion Pictures Association (EIMPA), South Indian
                        Film
                        Chamber of Commerce, Akhil Bhartiya Marathi Chitrapat Mahamandal and Film Fraternity of
                        Assam
                        for inclusion in the Indian Panorama.
                        The films should be submitted in the prescribed entry form and format as per the
                        regulations, within
                        the given deadline for submission of films i.e. 11th August, 2025 till 6.00 P.M. for
                        submission of on
                        line application form and 18th August, 2025 till 6.00 P.M. for receipt of the stamped and
                        signed
                        hard copy of the submitted online application form along with the requisite material.
                    </li>
                    <li>6.9 a) A maximum of five (5) entries would be allowed from
                        individuals, Producers,
                        Production Units, Government organizations, and companies.<br>
                        b) A maximum of ten (10) student films would be allowed from each recognized film/media institution
                        offering courses of not less than 1 year in duration. The entries must be fiction or non-fiction
                        project works completed as part of the academic curriculum. Each entry must be duly certified by the
                        institution, confirming that the film is the independent work of the student(s) / student team/unit
                        and was undertaken as a part of their course requirements.
                    </li>

                    <li><strong>6.10 Disqualification:</strong>
                        <br>
                        (a) In the case of programmes originally made for television, entries sent in telecast
                        format with commercial breaks, advertisements, channel logos/IDs etc.<br>
                        (b)Entries with captions such as “preview copy”, organizational logos etc. However, if
                        the screening copy bears the captions, it should be so faint as not to disturb the
                        viewing experience.<br>
                        (c) Dubbed/ Revised/ Remake/ Re-edited version of an Indian Film which was submitted
                        earlier for the Indian Panorama, will not be eligible. All films must be presented in
                        their original version/language.<br>
                        (d) Films NOT subtitled in English. (Filmmakers may please ensure that sub-titles are
                        clear and readable. Subtitles should not merge with visuals/background. It would help
                        the jury understand the right context and help evaluate the film better. All spoken
                        words should be sub-titled).<br>
                        (e) Entries received in sub-standard quality of DCP (Required: Unencrypted, DCI Compliant – J2K as
                        per SMPTE Standard) or online downloadable digital file as back-up copy.<br>
                        (f) An applicant would be disqualified automatically for consideration of his/her entry
                        if it is found that he /she is influencing any member of the jury and the decision of
                        the Secretary, Ministry of Information and Broadcasting in this regard would be final
                        and binding.<br>
                        (g) Any Indian Film Shown in any Indian or international Film Festival more than one
                        year preceding IFFI, the film will be considered to be ineligible.<br>
                        (h) If any of the declarations submitted by the applicants are found to be factually
                        false or incorrect, National Film Development Corporation (NFDC) reserves the right to
                        reject the entry or even cancel the selection of the film after the final
                        results/announcements. In such cases, where false or incorrect declarations are found,
                        the applicant would be barred for a period of three years to participate in any
                        activities organized by the Corporation.
                    </li>
                </ul>

                <hr>
                <h5>7. Procedure for entering films</h5>

                <ul class="ps-0">
                    <li>7.1 The Producer(s) may apply on the prescribed entry Form IP-I along
                        with Form IP-II.
                        The online entry form and regulations of Indian Panorama 2025 are available on the following
                        websites: www.nfdcindia.com and www.iffigoa.org. </li>
                    <li>7.2 Each entry form shall be accompanied by the material detailed
                        below (a soft copy of the same to be sent to&nbsp;
                        <a href="mailto:indianpanorama@nfdcindia.com">indianpanorama@nfdcindia.com)</a>.<br>

                        (a) Acceptable formats for Feature and Non-feature films are DCP (Unencrypted, DCI Compliant-J2K as
                        per SMPTE Standard) or online downloadable digital file as back-up copy. <br>
                        (b) Synopsis (precise and not exceeding two hundred words) of the film, Director &amp;
                        Producer’s profile, Director’s note in English and details of cast and crew (Soft copy
                        of the same to be emailed to&nbsp;<a
                            href="mailto:indianpanorama@nfdcindia.com">indianpanorama@nfdcindia.com</a>.<br>
                        Also, the following should be sent separately by e-mail to&nbsp;<a
                            href="mailto:indianpanorama@nfdcindia.com">indianpanorama@nfdcindia.com</a><br>
                        1. Film Stills (5nos) (200-300 dpi).<br>
                        2. Director’s working stills (2 nos) (200-300 dpi).<br>
                        3. Producer’s stills or Logo (200-300 dpi).<br>
                        4. Posters
                    </li>
                    <li>(c)(i) A declaration shall be furnished by the applicant, declaring
                        that the information
                        furnished in the entry form and other forms submitted is true to the best of his/her
                        knowledge, that the DCP -Unencrypted (DCI Compliant-J2K)/Bluray (region free PAL) of the
                        Feature Film or DCP-Unencrypted (DCI Compliant-J2K)/Bluray (region free PAL) or Pen
                        Drive (containing MP4/MOV/H.264, Resolution 1920x1080 file ) of the Non-Feature Film
                        being submitted as required under clause 7.2 (a).
                    </li>
                    <li>(ii) It is also certified that the film is not a
                        dubbed/revised/remake/ re-edited
                        version of any film and has not been submitted earlier.</li>
                    <li>(iii) The completion year of production of the film is during the 12
                        months preceding
                        the festival i.e.1st August 2023 to 31st July 2024 and has not been screened in any Indian
                        or
                        international film festival before that period.</li>
                    <li>(iv) The film is a Feature or Non- Feature Film (as per clauses 6.4,
                        6.5 &amp; 6.6 of
                        Indian Panorama).</li>
                    <li>(v) In case of the film entering for the New Horizons sub section, a declaration that the film has
                        not been screened at any festival/commercial/public/OTT/Television screening in (depending on the
                        region) the World or India (strike out either the World or India as the case may be)
                    </li>
                    <li>
                        (vi) In case of entry for Best Debut Director of Indian Feature Film, a declaration to the effect
                        that the film is a debut feature film of the director.
                    </li>
                    <li>
                        (d) In case the film (Feature or Non-Feature Films or films under Best Debut Director or under New
                        Horizons) is selected by the Jury, the following should be submitted immediately.
                    </li>
                    {{-- <li>1. One DCP (Unencrypted, DCI Compliant-J2K)/Bluray (region-free PAL)
                        copy and Two DVD
                        copies of the Feature Film or One DCP - Unencrypted (DCI Compliant- J2K)/Bluray
                        (region-free PAL) or pen drive (containing MP4/MOV/H.264, Resolution 1920x1080 file )and
                        Two DVD copies of the Non- Feature Film</li>
                    <li>2. Three ‘3x2’ posters of the film.</li>
                    <li>3. A 30 second-60 seconds promo/trailer by email.</li>
                    <li>4. Dialogue Sheets/sub-titles file with time code</li> --}}

                    <li>
                        1. DCP of the film (Unencrypted, DCI Compliant - J2K as per SMPTE Standard).<br />
                        2. An online downloadable digital file of the film as back-up copy.<br />
                        3. Three '3x2' posters of the film.<br />
                        4. A 30 to 60 seconds promo/trailer by email.<br />
                        5. Dialogue Sheets/sub-titles file with time code.<br />
                    </li>

                    <li>7.3 A non-refundable entry fee of (Rs. 11,800/- including 18% GST) for
                        Feature films and
                        (Rs. 3,540/- including 18% GST) for Non-Feature films must be remitted online at the
                        time of online entry form submission.</li>
                    <li>7.4
                        The last date for submission of On- Line applications is 11th August, 2025 till 6.00 P.M.
                        and
                        the last date for receipt of the stamped and signed hard copy of the submitted online
                        application
                        form along with the requisite material is 18th August, 2025, in case 18th August, 2025 is
                        declared a
                        holiday, the next working day will be treated as the last date for receipt of Entries.
                        Applications
                        received after the last date may be rejected without any reference to the applicant. (Note:
                        Both
                        the versions (Online and Hard Copy) of application forms submitted by the applicants should
                        be
                        same). </li>
                    <li>7.5 All entries must be sent to the following address:</li>
                    <li>
                        <b><strong>Indian Panorama, 2024
                                National Film Development Corporation
                                Ministry of Information and Broadcasting
                                Government of India
                                NFDC - FD Complex
                                1st Floor, Old Building
                                24, Dr. Gopalrao Deshmukh Marg
                                Mumbai 400 026, Maharashtra
                                Tel: 022 2353 3275/2083 0471</strong></b>
                        <p>(All prints and materials should be clearly labelled with “Indian Panorama, 2024”, on
                            their packages)</p>
                    </li>
                    <li>7.6 Film to be submitted in DCP (Unencrypted, DCI Compliant –J2K as per SMPTE Standard) and online
                        downloadable digital file as back-up copy for Feature and Non-Feature Film.<br />
                        &nbsp;<strong>ENTRIES OF FILMS MUST CARRY ENGLISH SUBTITLES.</strong><br />
                        &nbsp;Please label the cover of the DCP/Bluray or Pen Drive with the following details:
                    </li>
                    <li>● Title of the film</li>
                    <li>● The full name of the Director</li>
                    <li>● The full name of the Producer</li>
                    <li>● Duration of the film</li>
                    <li>● Aspect Ratio of the film</li>
                    <li>● Original language of the film</li>
                    <li>7.7 All costs for sending the DCP (Unencrypted, DCI Compliant – J2K,
                        Interop or SMPTE
                        DCP-Note: J2K, Interop DCP to be only in 24 fps)/ Bluray (region free PAL) or Pen Drive
                        and accompanying material to the NFDC shall be borne by the person entering the film
                        (s).</li>
                    <li>7.8 In case any of the requirements mentioned in this part of the
                        Regulations are not
                        complied with by the applicant, the entry is liable to be rejected summarily.</li>
                </ul>

                <hr>
                <h5>8. Selection of Indian Panorama</h5>

                <ul class="ps-0">
                    <li>8.1 The Indian Panorama will be selected by two duly constituted
                        juries, one for Feature
                        films and the other for Non-Feature films. An adequate representation will be made from
                        the major regional production centres to serve on the juries. The Jury for selection
                        shall comprise 13 members (including the Chairperson) for Feature films and 7 members
                        (including the Chairperson) for Non-Feature films.</li>
                    <li>8.2 The Chairperson of the Feature Film Jury may constitute a maximum
                        of four panels from
                        amongst the members of the jury. The Chairperson of the Non-Feature Film Jury may constitute
                        a
                        maximum of two panels from amongst the members of the jury. Each panel shall recommend a
                        maximum of 12 films or up to 33% of the films viewed by them, whichever is less, for
                        combined
                        viewing by the full jury. The Juries will determine their own work process. No recall of any
                        film(s)
                        shall be permissible once the recommendations are submitted by the panels and during the
                        combined Viewing by the full jury. </li>
                    <li>8.3 A person will be ineligible to serve on a Jury ONLY if his/her
                        film is an entry. In
                        the event of his / her close relative being associated with the particular film, the
                        Jury member shall recuse himself/herself from the preview of the film.
                        <ul class="ps-0">
                            <li>8.3.1 A person appointed as Chairperson or member of the jury
                                shall make the
                                declaration in writing in the form given in Form IP-III annexed to these
                                Regulations.</li>
                            <li>8.3.2 The Jury Members shall maintain strict confidentiality
                                regarding the
                                deliberations/recommendations of films during panel screening and final
                                screenings. In case of any violation by jury members, he/she would be debarred
                                for life from becoming a jury member in the Indian Panorama/National Film
                                Awards/International Film Festival of India.</li>
                        </ul>
                    </li>
                    <li>8.4 The Festival Director, IFFI and/or his/her nominee may attend the
                        deliberations of
                        the panels and provide information/clarifications, required by the panels regarding the
                        entries. They shall however neither participate in the deliberations nor vote.</li>
                    <li>8.5 The decision of the juries shall be final and binding and no
                        appeal or
                        correspondence regarding their decision shall be entertained.</li>
                    <li>8.6 The films selected for the 71st National Film Awards 2023 for the
                        Best Feature Films and
                        Best non-Feature Film will also be included in the Indian Panorama, if the same film has not
                        participated in the previous Indian Panorama, notwithstanding the provisions contained in
                        the
                        Clause 6.3 of these Regulations. </li>
                </ul>

                <hr>
                <h5>9. Acquisition of Prints of Films Selected for the Indian Panorama</h5>

                <ul class="ps-0">
                    <li>9.1 In case a film is selected for the Indian Panorama, the NFDC will
                        have the right to
                        buy, on behalf of the Government of India, Ministry of Information and Broadcasting, one
                        or more DCP(Unencrypted)/Bluray thereof, at a cost not exceeding the actual price of the
                        raw material and processing charges.</li>
                    <li>9.2 NFDC shall have the right to get the DCP-Unencrypted subtitled in
                        English or/and in
                        other languages.</li>
                    <li>9.3 NFDC shall have the right to strike foreign language subtitled
                        prints as per programming
                        requirements, for non-commercial use. The Corporation shall have the right to make one
                        DCP/Pen
                        Drive (containing MP4/MOV/H.264, Resolution 1920x1080 file) and copies of DVDs/Bluray Discs
                        from the DCP or Pen drive (containing MP4/MOV/H.264,Resolution 1920x1080 file) entries of
                        the
                        film selected under Indian Panorama, 2024 for non-commercial screenings as specified under
                        clause 11.2 of the Regulations for Indian Panorama, 2025. </li>
                    <li>9.4 NFDC shall have the right to replace the existing prints /DCP-
                        Unencrypted,
                        subtitled or otherwise, once it is certified as damaged.</li>
                    <li>9.5 In the case of a film selected for the Indian Panorama, all the
                        material referred to
                        in Regulations 7.2 shall be kept by the NFDC for use as and when necessary. The Producer
                        shall also supply, on request of the Corporation, additional publicity material to NFDC
                        to facilitate the participation of the film in various festivals as detailed in the
                        Regulation.</li>
                    <li>9.6 The authorization in forms IP-II shall be made use of by NFDC for
                        the purposes and
                        manner mentioned in Regulation Clause 11, only in case a film is selected for the Indian
                        Panorama.</li>
                    <li>9.7 It will be the duty of the concerned Producer/right holders to
                        ensure the
                        implementation of all Sub-Clauses of clause 9, even if the Producer/right holder sells
                        the distribution rights to some other company after the film is selected in the Indian
                        Panorama.</li>
                    <li>9.8 Selected films (feature and non-feature) will be given a
                        Certificate during the IFFI
                        in Goa. The names of the Director and Producer will be credited as declared in the
                        application form. No request for a change of names would be entertained at any stage.
                    </li>
                </ul>

                <hr>
                <h5>10 RETURNS OF DCP / BLURAY OR PEN DRIVE</h5>

                <p>DCP/ Bluray or Pen Drive of films not selected will be returned to the producers shortly
                    after the final meeting of the Selection Panel. The Corporation shall bear the cost of
                    returning the DCP/Bluray or Pen Drive to the address of the sender.</p>

                <hr>
                <h5>11 Use of Indian Panorama Films</h5>

                <ul class="ps-0">
                    <li>11.1 The Indian Panorama films will initially be screened at the
                        Indian Panorama Section
                        of the International Film Festival of India, provided that no claim of any kind would
                        lie against NFDC for their inability to show a film due to technical or any other
                        reasons.</li>
                    <li>11.2 Out of the feature films selected for Indian Panorama, up-to three (03) films will be
                        identified and recommended by the Indian Panorama Jury for the International Competition Section of
                        56th International Film Festival of India. Similarly, up to two (02) debut film(s) of a director
                        will be recommended for the Best Debut Film of a Director Award and up to three (03) films will be
                        recommended for ICFT UNESCO Gandhi Medal - all to be given away at the 56th International Film
                        Festival of India under International Competition.
                    </li>

                    <li>11.3 In order to encourage fresh perspectives in storytelling, innovative forms of expression and
                        new talent in Indian cinema, Indian Panorama 2025 will feature a Best Debut Director of an Indian
                        Feature Film Award carrying a Trophy and cash prize of Rs.5,00,000/- At the time of final selection,
                        the Indian Panorama Jury, will select up-to five (5) nominations for this award, out of which they
                        will choose one winner. This new section will draw national and international attention to the new
                        face of Indian cinema.
                    </li>
                    <li> 11.4 Out of the feature films selected for Indian Panorama, those Feature films that have
                        previously
                        not been screened at any festival/commercial/public/OTT/Television screening in (depending on the
                        region) the World or India (strike out either the World or India as the case may be) will be
                        presented under ‘Indian Panorama - Now Horizons’ branding in order to showcase the yet unseen face
                        of Indian Cinema for the discerning audience at IFFI first, and rest of India and the world
                        eventually. The New Horizons sub section of Indian Panorama may be further expanded to include
                        specially curated films that the festival may consider worth inviting to emphasize India’s fast
                        developing reputation as a hub for cinematic innovation. The eligibility criteria for entering of
                        film under “New Horizons” is the same as it is for Indian Panorama except for the additional
                        requirement that the film should not have been screened at any
                        festival/commercial/public/OTT/Television screening in (depending on the region) the World or India
                        (strike out either the World or India as the case may be) and will not be screened at any
                        festival/commercial/public/OTT/Television screening in (depending on the region) the World or India
                        (strike out either the World or India as the case may be) until it has completed its run/s at IFFI
                        2025.
                    </li>
                    <li>
                        11.5 The Indian Panorama films - including New Horizon films and Best Debut Director of Indian
                        Feature Films will be used for participation in various international film festivals, film weeks,
                        Indian Panorama festivals and other non-commercial screenings, within the country and abroad at the
                        discretion of National Film Development Corporation and the Ministry of Information and
                        Broadcasting. For all such screenings, the Producer will not be eligible for any payment. He/ She
                        will however, be kept informed of such screenings.
                    </li>
                    <li>
                        11.6 The prints purchased by the National Film Development Corporation under these Regulations will
                        be utilized for organizing Indian Panorama Festivals and will not be utilized for any commercial
                        purposes. The Indian Panorama Festivals will be organized by National Film Development Corporation
                        by the guidelines prescribed by the Government of India.

                    </li>
                    <li>11.7 Exemption from CBFC certification for the selected films in
                        Indian Panorama
                        (feature and non-feature) will be obtained from the Ministry of Information and
                        Broadcasting for screening in IFFI, in case of films are not certified by CBFC. However,
                        as and when the film is certified by CBFC, the producer should provide the certified
                        version of the film to NFDC in the desired formats.</li>
                </ul>

                <hr>
                <h5>12. Dispute Resolution</h5>

                <p>Should any dispute or difference arises between the Producer and the NFDC, the same shall be
                    referred to the Secretary, Ministry of Information and Broadcasting, Government of India,
                    whose decision in the matter shall be final and binding on both the parties. The Arbitration
                    Clause will not apply to the decision of Juries, which will be final and binding on both the
                    National Film Development Corporation and the applicant for Indian Panorama.</p>


            </div>
            <!-- Opening & Closing Venue Ends -->
        </div>
    </div>

@endsection
