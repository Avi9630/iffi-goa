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
            {{-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> --}}
        </div>

    </div>
</div>
<script type="module" crossorigin src="https://carousel-slider.uiinitiative.com/assets/index-BAdmAfAi.js"></script>
