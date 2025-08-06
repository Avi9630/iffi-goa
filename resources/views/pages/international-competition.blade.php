<!-- International competition -->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Embrace creativity, inspire change, and shine in the 55<sup>th</sup></p>
            <h2>International competition</h2>
        </div>
        <div class="owl-carousel international">

            @foreach ($internationalCinemas as $cinema)
                @php
                    $webpImage = preg_replace('/\.\w+$/', '.webp', $cinema->img_src);
                @endphp
                <div class="item card">
                    <img src="{{ asset('public/images/cureted-section/webp/' . $webpImage) }}" alt="image"
                        class="img-fluid">
                    <div class="International-competition">
                        <p> <a href="{{ route('international-competition-detail', ['slug' => $cinema->slug]) }}"
                                class="post-title">{{ $cinema->title }}</a></p>
                        {{-- <p class="sub-post-title">
                            ({{ isset($cinema->award) && $cinema->award !== '' ? $cinema->award : null }})
                        </p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- International competition Ends-->
