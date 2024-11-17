<!-- Director competition -->
@foreach ($directorDebutFilm as $director)
    <div class="item card">
        <img src="{{ asset('public/images/director-debut-film/' . $director->img_src) }}" alt="image" class="img-fluid">
        <div class="International-competition">
            <p>{{ $director->slug }}</p>
            {{-- <p>
                <a href="{{ route('best-director-detail', ['slug' => $director->slug]) }}"
                    class="post-title">{{ $director->slug }}
                </a>
            </p> --}}
        </div>
    </div>
@endforeach
<!-- Director  Ends-->
