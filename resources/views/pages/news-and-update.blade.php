<!--Home section News & Updates-->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h2>News & Updates</h2>
        </div>
        <div class="row card-same-height">
            <div class="newsUpdate1">

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/208-Films-to-Feature-in-Film-Bazaar-Viewing-Room-at-IFFI-2024.jpg') }}"alt=" image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>208 Films to Feature in Film Bazaar Viewing Room at IFFI 2024</h3>
                            <p class="card-text">
                                The 55th International Film Festival of India is set to illuminate the cultural
                                landscape of Goa
                                from 20th to 28th this November. Concurrently, the 18th edition of Film Bazaar will run
                                from
                                November 20 to 24, offering a dynamic platform for filmmakers and industry professionals
                                to
                                connect, collaborate and showcase their work.
                                This year, the Viewing Room returns to the Marriott Resort, featuring an enriched line
                                up of
                                good quality films from India and South Asia.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/Work-in-Progress-Lab-Film-Selection-List-Revealed.jpg') }}"alt=" image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>Work in Progress Lab Film Selection List Revealed </h3>
                            <p class="card-text">
                                We are excited to confirm the line-up of films selected for the <b> WIP
                                    (Work-in-Progress) Lab at Film Bazaar 2024! </b> The prestigious lab, based in South
                                Asia's largest film market, has historically aimed to nurture emerging filmmakers with
                                developed projects before they go in front of audiences.
                                <br>
                                For selected filmmakers, the WIP Lab is a unique opportunity to benefit from the expert
                                guidance and constructive criticism on their projects in the necessarily final stages of
                                the work.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/Raj-Kapoor.jpg') }}"alt="Raj Kapoor image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>Raj Kapoor, ANR, Rafi, and Tapan Sinha will be Honoured with IFFI Centenary Tribute</h3>
                            <p class="card-text">
                                Our film industry legendary icons Raj Kapoor, ANR, Mohammed Rafi and Tapan Sinha will be
                                honoured with the centenary tribute at 55th IFFI. The IFFI gala in Goa will celebrate
                                cinematic legends by presenting restored versions of their classic films throughout its
                                nine-day event. The festival’s opening ceremony on November 20 will pay tribute to these
                                icons with a special audio-visual presentation that captures their impactful journeys in
                                cinema.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/Best-Debut-Directors-of-Indian-Feature-Films.jpg') }}"alt="image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>5 Debut Directors Selected for Indian Feature Films</h3>
                            <p class="card-text">
                                The 55th International Film Festival of India (IFFI) is launching a fresh award
                                category, “Best Debut Director of Indian Feature Film,” spotlighting the work of five
                                debut directors who bring unique perspectives and innovative storytelling to Indian
                                cinema. This initiative aims to encourage emerging filmmakers, showcasing their
                                contributions to the industry with compelling narratives and diverse themes. Taking
                                place from November 20-28, 2024, IFFI will celebrate these new voices in Indian film,
                                underscoring the festival's commitment to fostering creative talent across the nation.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/Co-Production.jpg') }}"alt="image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>Films List Revealed for Co-Production Market</h3>
                            <p class="card-text">
                                The 18th edition of NFDC's Film Bazaar has revealed its official selection for the
                                Co-Production Market, showcasing 21 feature films and 8 web series from seven countries.
                                Held annually in the International Film Festival of India (IFFI), this year’s Film
                                Bazaar will run from November 20 to 24, at the Marriott Resort in Goa, while IFFI will
                                take place from November 20 to 28, 2024.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                <div class="card shadow-sm">
                    <a href="{{ route('news-and-update') }}">
                        <img src="{{ asset('public/images/desktop-image/Indian-Panorama-Films.jpg') }}"alt="image"
                            class="img-fluid">
                        <div class="card-body text-start">
                            <h3>Indian Panorama Film List Revealed For 55th IFFI</h3>
                            <p class="card-text">
                                The Indian Panorama Section of 55th International Film Festival has recently announced
                                the selection of 25 featured films and 20 non-feature films. Out of these 5 top films
                                are selected from mainstream cinema out of the broad spectrum of 384 contemporary films.
                                Jury has selected “Swatantrya Veer Savarkar (Hindi)” as an opening film of Indian
                                Panorama.
                            </p>
                            <p>
                                <a href="{{ route('news-and-update') }}">Read more </a>
                            </p>
                        </div>
                    </a>
                </div>

                @foreach ($datas as $news)
                    <div class="card shadow-sm">
                        <a href="{{ route('news-and-update') }}">
                            <img src="{{ asset('public/images/desktop-image/' . $news->img_src) }}"alt="image"
                                class="img-fluid">
                            <div class="card-body text-start">
                                <h3>{!! $news->title !!}</h3>
                                <p class="card-text">
                                    {!! $news->description !!}
                                </p>
                                <p>
                                    <a href="{{ $news->link }}" target="_blank">{{ $news->link_title }} </a>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--Home section News & Updates-->
