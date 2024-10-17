<!-- Director competition -->
@foreach ($directorDebutFilm as $director)
    <div class="item card">
        <img src="{{ asset('public/images/director-debut-film/' . $director->img_src) }}" alt="image" class="img-fluid">
        <div class="International-competition">
            <p>{{ $director->slug }}</p>
        </div>
    </div>
@endforeach
<!-- Director  Ends-->
