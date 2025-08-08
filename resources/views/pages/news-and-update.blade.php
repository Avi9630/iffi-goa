<!--Home section News & Updates-->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h2>News & Updates</h2>
        </div>
        <div class="row card-same-height">
            <div class="newsUpdate1">
                @foreach ($datas as $news)
                    @php
                        $webpImage = preg_replace('/\.\w+$/', '.webp', $news->img_src);
                    @endphp
                    <div class="card shadow-sm">
                        <a href="{{ route('news-and-update') }}">
                            <img src="{{ asset('public/images/news-update/webp/' . $webpImage) }}"alt="image"
                                class="img-fluid" loading="lazy">
                            <div class="card-body text-start">
                                <h3>{!! $news->title !!}</h3>
                                <p class="card-text">
                                    {!! $news->description !!}
                                </p>
                                <p>
                                    @if ($news->have_popup == 1)
                                        <a class="text-decoration-underline" style="font-weight: 600;"
                                            href="{{ route('news-and-update') }}">
                                            Read More
                                        </a>
                                    @else
                                        <a class="text-decoration-underline" style="font-weight: 600;"
                                            href="{{ $news->link }}" target="_blank">
                                            {{ $news->link_title }}
                                        </a>
                                    @endif
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--Home section News & Updates-->
