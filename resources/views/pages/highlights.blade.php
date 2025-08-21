<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Showcasing 54<sup>th</sup> Indian Cinema's</p>
            <h2>Highlights!</h2>
        </div>
        <div class="owl-carousel">
            @foreach ($datas as $data)
                <div class="item card">
                    <img src="{{ asset('public/images/highlights/' . $data->img_src) }}" alt="image" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div>
