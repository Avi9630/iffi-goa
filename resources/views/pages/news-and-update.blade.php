<!--Home section News & Updates-->
<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <h2>News & Updates</h2>
        </div>
        <div class="row card-same-height">
            <div class="newsUpdate1">
                @foreach ($datas as $news)
                    <div class="card shadow-sm">
                        <a href="{{ route('news-and-update') }}">
                            <img src="{{ asset('public/images/desktop-image/' . $news->img_src) }}"alt="image"
                                class="img-fluid">
                            <div class="card-body text-start">
                                <h3>{!! $news->title !!}</h3>
                                <p class="card-text">
                                    {!! $news->description !!}
                                </p>
                                <p>
                                    <a href="{{ $news->link }}" target="_blank">{{ $news->link_title }} </a>
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
