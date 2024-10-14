@foreach ($indianPanormas as $panorma)
    <div class="item card">
        <img src="{{ asset('public/images/indian-panorama-cinema/' . $panorma->img_src . '') }}" class="img-fluid">
        <div class="International-competition">
            <p>{{ $panorma->slug }}</p>
        </div>
    </div>
@endforeach
