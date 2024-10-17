<!-- News & Updates -->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h2>News & Updates</h2>
        </div>

        {{-- <div class="row card-same-height">

            <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
                <div class="card shadow-sm">
                    <img src="{{ asset('public/images/desktop-image/Entries-For-Goan-Films.jpg') }}"alt="Entries For Goan Films"
                        class="img-fluid">
                    <div class="card-body text-start">
                        <h3>Submit Your Entries in Goan Films</h3>
                        <p class="card-text">
                            The film makers and production houses are invited to submit their entries in 55th
                            International Film Festival of India (IFFI), Goa which is scheduled in Panaji-Goa from 20th
                            to 28th November 2024. The aim of the Special Goan Premier and Non-Premiere Section Feature
                            & Non-Feature Films for the 55th IFFI is to select feature and non-feature films of
                            cinematic, thematic and aesthetic excellence in Special Goan Section, for the promotion of
                            film art through the non-profit screening of these films.
                        </p>
                        <p>
                            <a href="https://esg.co.in/entries-for-special-goan-section-feature-non-feature-films-for-the-55th-iffi-2024/"
                                target="_blank">Submit your entry
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
                <div class="card shadow-sm">
                    <img src="{{ asset('public/images/desktop-image/delegate-Registration-open.jpg') }}"alt="image"
                        class="img-fluid">
                    <div class="card-body text-start">
                        <h3>Film Bazaar Delegate Registration is Now Open!</h3>
                        <p class="card-text">
                            Join the prestigious Film Bazaar 2024 as a delegate and immerse yourself in an unparalleled
                            networking and learning experience. As a delegate, you'll have access to a wide array of
                            industry professionals, engaging sessions, film screenings, and business opportunities
                            across various segments of the global film industry. Don't miss this opportunity to connect
                            with filmmakers, distributors, and key decision-makers from around the world.
                        </p>
                        <p>
                            <a href="https://filmbazaarindia.com/participate/attend-as-a-delegate/"
                                target="_blank">Submit your entry
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
                <div class="card shadow-sm">
                    <img src="{{ asset('public/images/desktop-image/producres-workshop-open.jpg') }}" alt="image"
                        class="img-fluid">
                    <div class="card-body text-start">
                        <h3>Producer's Workshop Registration For Film Bazaar 2024 Is Now Open!</h3>
                        <p class="card-text">
                            The Producer's Workshop at Film Bazaar 2024 offers a unique platform for emerging and
                            experienced producers to enhance their skills, network with industry professionals, and gain
                            insights into global film markets. This dynamic workshop covers various aspects of
                            production, financing, distribution, and co-production opportunities. Don't miss the chance
                            to elevate your career—register now and become a part of this vibrant cinematic experience.
                        </p>
                        <p>
                            <a href="https://filmbazaarindia.com/programme/producers-workshop/" target="_blank">
                                Submit your entry
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-1">
                <a href="{{ route('news-and-update') }}" class="btn cus-prim-btn">View More</a>
            </div>
        </div> --}}

        <div class="row card-same-height">
            <div class="newsUpdate1">
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
                                    <a href="{{ $news->link }}" target="_blank">{{ $news->link_title }}
                                    </a>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- News & Updates Ends -->
