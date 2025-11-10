{{-- <div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Embrace creativity, inspire change, and shine in the 56<sup>th</sup></p>
            <h2>International competition</h2>
        </div>
        <div class="owl-carousel international">
            @foreach ($internationalCinemas as $cinema)
                @if (!empty($cinema->img_src))
                    @php
                        $webpImage = preg_replace('/\.\w+$/', '.webp', $cinema->img_src);
                    @endphp
                    <div class="item card">
                        <img src="{{ asset('public/images/cureted-section/webp/' . $webpImage) }}" alt="image"
                            class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>
                                <a href="{{ route('international-competition-detail', ['slug' => $cinema->slug]) }}"
                                    class="post-title">{{ $cinema->title }}</a>
                            </p>
                        </div>
                    </div>
                @else
                    <div class="item card">
                        <img src="{{ $cinema->img_url }}" alt="image"
                            class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>
                                <a href="{{ route('international-competition-detail', ['slug' => $cinema->slug]) }}"
                                    class="post-title">{{ $cinema->title }}</a>
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div> --}}


<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <p>Embrace creativity, inspire change, and shine in the 56<sup>th</sup></p>
            <h2>International competition</h2>
        </div>
        <div id="app">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($internationalCinemas as $cinema)
                        <div class="swiper-slide">
                            <div class="swiper-carousel-animate-opacity">
                                @if (!empty($cinema->img_src))
                                    @php
                                        $webpImage = preg_replace('/\.\w+$/', '.webp', $cinema->img_src);
                                    @endphp
                                    <img src="{{ asset('public/images/cureted-section/' . $webpImage) }}" alt="image"
                                        class="img-fluid" loading="lazy">
                                    <div class="slide-content">
                                        <h2 class="text-center">
                                            <a href="{{ route('international-competition-detail', ['slug' => $cinema->slug]) }}"
                                                class="post-title" style="color: white; text-decoration: none">{{ $cinema->title }}</a>
                                        </h2>
                                    </div>
                                @else
                                    <img src="{{ $cinema->img_url }}" alt="image" class="img-fluid" loading="lazy">
                                    <div class="slide-content">
                                        <h2 class="text-center"><a href="{{ route('international-competition-detail', ['slug' => $cinema->slug]) }}"
                                                class="post-title" style="color: white; text-decoration: none">{{ $cinema->title }}</a></h2>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <p>Embrace creativity, inspire change, and shine in the 56<sup>th</sup></p>
            <h2>International competition</h2>
        </div>
        <div id="app">
            <div class="swiper">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/A Poet.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => 'A Poet']) }}"
                                        class="post-title" style="color: white; text-decoration: none">A Poet</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/Cest si Bon.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => "C'est Si Bon"]) }}"
                                        class="post-title" style="color: white; text-decoration: none">C'est Si
                                        Bon</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/Little Trouble Girls.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => 'Little Trouble Girls']) }}"
                                        class="post-title" style="color: white; text-decoration: none">Little Trouble
                                        Girls</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/Mosquitos.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => 'Mosquitoes']) }}"
                                        class="post-title" style="color: white; text-decoration: none">Mosquitoes</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/mothers baby.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => 'Mothers Baby']) }}"
                                        class="post-title" style="color: white; text-decoration: none">Mothers Baby</a>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="swiper-carousel-animate-opacity">
                            <img src="{{ asset('public/images/international-competition/2025/My Fathers shadow.webp') }}"
                                alt="image" class="img-fluid" loading="lazy">
                            <div class="slide-content">
                                <h2 class="text-center">
                                    <a href="{{ route('international-competition-detail', ['slug' => 'My Fathers Shadow']) }}"
                                        class="post-title" style="color: white; text-decoration: none">My Fathers
                                        Shadow</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<script type="module" crossorigin src="https://carousel-slider.uiinitiative.com/assets/index-BAdmAfAi.js"></script>
