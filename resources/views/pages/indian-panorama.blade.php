@foreach ($indianPanormas as $panorma)
    @php
        $webpImage = preg_replace('/\.\w+$/', '.webp', $panorma->img_src);
    @endphp
    <div class="item card">
        <img src="{{ asset('public/images/indian-panorama-cinema/webp/' . $webpImage . '') }}" alt="image"
            class="img-fluid">
        <div class="International-competition">
            <p>{{ $panorma->title }}</p>
        </div>
    </div>
@endforeach
