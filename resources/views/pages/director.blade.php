{{-- @foreach ($directorDebutFilm as $director)
    @php
        $webpImage = preg_replace('/\.\w+$/', '.webp', $director->img_src);
    @endphp
    <div class="item card">
        <img src="{{ asset('public/images/cureted-section/webp/' . $webpImage) }}" alt="image" class="img-fluid"
            loading="lazy">
        <div class="International-competition">
            <p>
                <a href="{{ route('best-director-detail', ['slug' => $director->slug]) }}" class="post-title">{{ $director->title }}
                </a>
            </p>
        </div>
    </div>
@endforeach --}}


<section>
    <div class="container">
        <div class="section-heading mb-4">
            <p>Best 56<sup>th</sup> debut feature film of a</p>
            <h2>Director</h2>
        </div>
        <div class="owl-carousel international">
            @foreach ($directorDebutFilm as $director)
                @php
                    $webpImage = preg_replace('/\.\w+$/', '.webp', $director->img_src);
                @endphp
                <div class="item card">
                    <img src="{{ asset('public/images/cureted-section/webp/' . $webpImage) }}" alt="image"
                        class="img-fluid" loading="lazy">
                    <div class="International-competition">
                        <p>
                            <a href="{{ route('best-director-detail', ['slug' => $director->slug]) }}"
                                class="post-title">{{ $director->title }}
                            </a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
