<section>
    <div class="pointer-btn">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update_btn">
            Call For Entries
        </button>
    </div>
    <div class="modal update" id="update_btn" tabindex="-1" aria-labelledby="exampleupdate_btn" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-slide">
            <div class="modal-content ">
                <div class="modal-header pop-title">
                    <h1>56<sup>th</sup> International Film Festival of India, Goa</h1>
                    <div><img src="{{ asset('public/images/pop-up-image/line-dash.png') }}" class="img-fluid line" />
                    </div>
                    <span data-bs-dismiss="modal" aria-label="Close" class="btn-close-popup">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                                data-bs-dismiss="modal" aria-label="Close" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </span>
                </div>
                <div class="modal-body slider-popup">
                    <div class="owl-carousel-popup">
                        @foreach ($latestUpdates as $latestUpdate)
                            <div class="item white-text">
                                <p>{!! nl2br(e($latestUpdate->title)) !!}</p>
                                <p>
                                    <a href="{{ $latestUpdate->link }}" target="_blank">
                                        <span class="open-now">{!! nl2br(e($latestUpdate->content)) !!}</span>
                                    </a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
