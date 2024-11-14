@foreach ($indianPanormas as $panorma)
    <div class="item card">
        <img src="{{ asset('public/images/indian-panorama-cinema/' . $panorma->img_src . '') }}" alt="image"
            class="img-fluid">
        <div class="International-competition">
            <p>{{ $panorma->title }}</p>
        </div>
    </div>
@endforeach
