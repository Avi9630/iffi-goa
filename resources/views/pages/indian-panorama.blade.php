{{-- @foreach ($indianPanormas as $panorma)
    @php
        $webpImage = preg_replace('/\.\w+$/', '.webp', $panorma->img_src);
    @endphp
    <div class="item card">
        <img src="{{ asset('public/images/indian-panorama-cinema/webp/' . $webpImage . '') }}" alt="image"
            class="img-fluid" loading="lazy">
        <div class="International-competition">
            <p>{{ $panorma->title }}</p>
        </div>
    </div>
@endforeach --}}

<section>
    <div class="container mb-5">
        <div class="section-heading mb-4">
            <p>A Kaleidoscope of Creativity and Culture of 56<sup>th</sup></p>
            <h2>Indian Panorama</h2>
        </div>
        <div class="owl-carousel international">
            @foreach ($indianPanormas as $panorma)
                @php
                    $webpImage = preg_replace('/\.\w+$/', '.webp', $panorma->img_src);
                @endphp
                <div class="item card">
                    <img src="{{ asset('public/images/indian-panorama-cinema/webp/' . $webpImage . '') }}" alt="image"
                        class="img-fluid" loading="lazy">
                    <div class="International-competition">
                        <p>{{ $panorma->title }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
