@foreach ($indianPanormas as $panorma)
    <div class="item card">
        <img src="{{ asset('public/images/indian-panorama-cinema/' . $panorma->img_src . '') }}" class="img-fluid">
        <div class="International-competition">
            <p> <a href="" class="post-title">{{ $panorma->slug }}</a></p>
        </div>
    </div>
@endforeach
