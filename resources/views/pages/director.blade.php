<!-- Director competition -->
@foreach ($directorDebutFilm as $director)
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
@endforeach
<!-- Director  Ends-->
