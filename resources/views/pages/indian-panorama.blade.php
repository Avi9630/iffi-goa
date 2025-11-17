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
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <p>A Kaleidoscope of Creativity and Culture of 56<sup>th</sup></p>
            <h2>Indian Panorama</h2>
        </div>
        <div class="owl-carousel international highlight">
            @foreach ($indianPanormas as $panorma)
                {{-- @php
                    $webpImage = preg_replace('/\.\w+$/', '.webp', $panorma->img_src);
                @endphp
                <div class="item card">
                    <img src="{{ asset('public/images/indian-panorama-cinema/webp/' . $webpImage . '') }}" alt="image"
                        class="img-fluid" loading="lazy">
                    <div class="International-competition">
                        <p>{{ $panorma->title }}</p>
                    </div>
                </div> --}}

                @if (!empty($panorma->img_src))
                    @php
                        $webpImage = preg_replace('/\.\w+$/', '.webp', $panorma->img_src);
                    @endphp
                    <div class="item card">
                        <img src="{{ asset('public/images/indian-panorama-cinema/' . $webpImage) }}" alt="image"
                            class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>{{ $panorma->title }}</p>
                        </div>
                    </div>
                @else
                    <div class="item card">
                        <img src="{{ $panorma->img_url }}" alt="image" class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>{{ $panorma->title }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
