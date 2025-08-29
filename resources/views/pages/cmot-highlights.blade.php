<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4">
            <p>Showcasing 55<sup>th</sup> IFFI</p>
            <h2>Creative minds of tomorrow</h2>
        </div>
        <div class="owl-carousel">
            @foreach ($datas as $data)
                <div class="item card">
                    <img src='{{ $data->img_url }}' alt="{{ $data->image }}" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</div>
