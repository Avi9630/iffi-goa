<!-- Director competition -->
@foreach ($directorDebutFilm as $director)
    <div class="item card">
        <img src="{{ asset('public/images/cureted-section/' . $director->img_src) }}" alt="image" class="img-fluid">
        <div class="International-competition">
            {{-- <p>{{ $director->slug }}</p> --}}
            <p>
                {{-- <a href="{{ route('best-director-detail', ['slug' => $director->slug]) }}" --}}
                <a href="{{ route('best-director-detail', ['slug' => 'best-debut-feature-film-of-a-director']) }}"
                    class="post-title">{{ $director->title }}
                </a>
            </p>
        </div>
    </div>
@endforeach
<!-- Director  Ends-->
