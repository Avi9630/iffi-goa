<div class="col-lg-12 mb-5">
    <div class="container">
        <div class="section-heading mb-4 text-center mt-5 center-heading">
            <h4 class="mb-2" style="font-size: 20px">Fuelling Success Together</h4>
            <h2>Sponsors & Partners</h2>
        </div>
        <div class=" owl-carousel-sponsor">
            @include('pages.sponsor', [
                'sponsors' => app(\App\Http\Controllers\CommonController::class)->sponsors(),
            ])
        </div>
    </div>
</div>
