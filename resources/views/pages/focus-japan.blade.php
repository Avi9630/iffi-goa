<section>
    <div class="container mb-5">
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <h2>Country Focus – Japan</h2>
        </div>
        <div class="owl-carousel international highlight">
            @foreach ($focusJapans as $japan)
                @if (!empty($japan->img_src))
                    @php
                        $webpImage = preg_replace('/\.\w+$/', '.webp', $japan->img_src);
                    @endphp
                    <div class="item card">

                        <img src="{{ asset('public/images/cureted-section/' . $webpImage) }}" alt="image"
                            class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>{{ $japan->title }}</p>
                        </div>
                    </div>
                @else
                    <div class="item card">
                        <img src="{{ $japan->img_url }}" alt="image" class="img-fluid" loading="lazy">
                        <div class="International-competition">
                            <p>{{ $japan->title }}</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
