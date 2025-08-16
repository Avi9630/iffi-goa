@foreach ($datas as $data)
    @php
        $webpImage = preg_replace('/\.\w+$/', '.webp', $data->img_src);
    @endphp
    <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
        <div class="card shadow-sm">
            <img src="{{ asset('public/images/desktop-image/webp/' . $webpImage) }}" class="img-fluid" alt="image" loading="lazy">
            <div class="card-body text-start">
                <h3>{{ $data->title }}</h3>
                <p class="card-text">{{ $data->description }}</p>
            </div>
        </div>
    </div>
@endforeach
