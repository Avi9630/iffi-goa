<!-- Director competition -->
@foreach ($directorDebutFilm as $director)
    <div class="item card">
        <img src="{{ asset('public/images/director-debut-film/' . $director->img_src) }}" class="img-fluid">
        <div class="International-competition">
            <p> <a href="" class="post-title">{{ $director->slug }}</a></p>
        </div>
    </div>
@endforeach
<!-- Director  Ends-->
