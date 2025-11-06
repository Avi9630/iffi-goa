<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Showcasing 56<sup>th</sup> IFFI</p>
            <h2>Highlights!</h2>
        </div>
        <div class="owl-carousel">
            @foreach ($datas as $data)
                {{-- @php
                    $webpImage = preg_replace('/\.\w+$/', '.webp', $data->img_src);
                @endphp --}}
                <div class="item card">
                    @if (!empty($data->img_src))
                        <img src="{{ asset('public/images/highlights/' . $data->img_src) }}"alt="image" class="img-fluid"
                            loading="lazy">
                    @else
                        <img src="{{ $data->img_url }}"alt="image" class="img-fluid" loading="lazy">
                    @endif
                    {{-- <img src="{{ asset('public/images/highlights/' . $data->img_src) }}" alt="image"
                        class="img-fluid"> --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
