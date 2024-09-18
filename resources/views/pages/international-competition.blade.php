{{-- <div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h4>Embrace creativity, inspire change, and shine in the 54<sup>th</sup></h4>
            <h2>International competition!</h2>
        </div>
        <div class="owl-carousel">

            @foreach ($internationalCinemas as $cinema)
                <div class="indianPanorama-item">
                    <img src="{{ asset('assets/images/international-cinema/' . $cinema->img_src) }}" alt=""
                        loading="lazy">
                    <p class="indianPanorama-p mb-0">
                        <a href="{{ route('cinema_details', ['slug' => $cinema->slug]) }}" class="post-title"
                            style="font-weight: bold; text-decoration: none; font-size: 1.5em; color: white">{{ $cinema->title }}
                        </a>
                        <br>
                        <span style="font-size: 1em; color: lightgray;">
                            ({{ isset($cinema->award) && $cinema->award !== '' ? $cinema->award : null }})
                        </span>
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</div> --}}

<!-- International competition -->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h4>Embrace creativity, inspire change, and shine in the 54<sup>th</sup></h4>
            <h2>International competition</h2>
        </div>
        <div class="owl-carousel international">

            @foreach ($internationalCinemas as $cinema)
                <div class="item card">
                    <img src="{{ asset('public/images/international-competition/' . $cinema->img_src) }}"
                        class="img-fluid">
                    <div class="International-competition">
                        <p> <a href="" class="post-title">{{ $cinema->title }}</a></p>
                        <p class="sub-post-title">
                            ({{ isset($cinema->award) && $cinema->award !== '' ? $cinema->award : null }})
                        </p>
                    </div>
                </div>
            @endforeach

            {{-- <div class="item card">
                <img src="images/thumb3.jpg" class="img-fluid">
                <div class="International-competition">
                    <p> <a href="" class="post-title">Endless Borders</a></p>
                    <p class="sub-post-title">
                        (Best Film, Best Actor (Male))
                    </p>
                </div>
            </div>

            <div class="item card">
                <img src="images/thumb3.jpg" class="img-fluid">
                <div class="International-competition">
                    <p> <a href="" class="post-title">Endless Borders</a></p>
                    <p class="sub-post-title">
                        (Best Film, Best Actor (Male))
                    </p>
                </div>
            </div>

            <div class="item card">
                <img src="images/thumb3.jpg" class="img-fluid">
                <div class="International-competition">
                    <p> <a href="" class="post-title">Endless Borders</a></p>
                    <p class="sub-post-title">
                        (Best Film, Best Actor (Male))
                    </p>
                    </p>
                </div>
            </div> --}}

        </div>
    </div>
</div>
<!-- International competition Ends-->
