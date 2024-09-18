<!-- 55th IFFI Festival -->
@foreach ($datas as $data)
    <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
        <div class="card shadow-sm">
            <img src="{{ asset('public/images/desktop-image/' . $data->img_src) }}" class="img-fluid">
            <div class="card-body text-start">
                <h3>{{ $data->title }}</h3>
                <p class="card-text">{{ $data->description }}</p>
            </div>
        </div>
    </div>
@endforeach

{{-- <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
    <div class="card shadow-sm">
        <img src="{{ asset('public/images/thumb.jpg') }}" class="img-fluid">
        <div class="card-body text-start">
            <h3>Global Film Showcase</h3>
            <p class="card-text">IFFI Goa provides you with the opportunity to experience the richness of
                world cinema with a carefully curated selection of films from every corner of the globe.</p>
        </div>
    </div>
</div> --}}
{{-- <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
    <div class="card shadow-sm">
        <img src="{{ asset('public/images/thumb.jpg') }}" class="img-fluid">
        <div class="card-body text-start">
            <h3>Meet Industry Leaders</h3>
            <p class="card-text">Get an unparalleled opportunity to meet the network of renowned filmmakers,
                actors and producers. Engage in insightful conversations, exchange ideas, and build
                meaningful connections with key players who shape the global film industry.</p>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 d-flex">
    <div class="card shadow-sm">
        <img src="{{ asset('public/images/thumb.jpg') }}" class="img-fluid">
        <div class="card-body text-start">
            <h3>Get Inspired by innovative films</h3>
            <p class="card-text">Discover the ground-breaking work that will push the boundaries of
                cinematic techniques. Whether you're a filmmaker, film enthusiast, or simply curious about
                the future of cinema, IFFI offers a platform to experience visionary storytelling and
                explore new perspectives.</p>
        </div>
    </div>
</div> --}}

<!-- 55th IFFI Festival Ends -->
