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
                                <a href="{{ route('news-and-update') }}" target="_blank">Read more </a>
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
                                <a href="{{ route('news-and-update') }}" target="_blank">Read more </a>
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
