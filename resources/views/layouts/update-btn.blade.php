{{-- Latest Update Content --}}
<section>
    <div class="pointer-btn">
        {{-- <button type="button" class="btn btn-success">Today Update</button> --}}
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update_btn">
            Latest Update
        </button>
        {{-- <div class="notif-content">
            <div class="logo-section "id="menu">
                <div class="container">
                    <div class="top-logo ">
                        <a href="{{ route('/') }}" style="width:15%">
                            <img src="{{ asset('public/images/iffi.svg') }}" alt="iffi-logo">
                        </a>
                        <a href="https://www.nfdcindia.com/" target="_blank" style="width:15%">
                            <img src="{{ asset('public/images/nfdc.svg') }}" alt="nfdc-logo">
                        </a>
                        <a href="https://www.goa.gov.in/" target="_blank">
                            <img src="{{ asset('public/images/goa-govt-logo.png') }}" alt="goa-govt-logo">
                        </a>
                        <a href="https://www/iffigoa.org" target="_blank">
                            <img src="{{ asset('public/images/Peacock-fill.png') }}" alt=" Peacock-fill">
                        </a>
                        <a href="https://esg.co.in/" target="_blank">
                            <img src="{{ asset('public/images/esg-logo.png') }}" alt="esg-logo">
                        </a>
                        <a href="https://filmbazaarindia.com/" target="_blank">
                            <img src="{{ asset('public/images/Film-Bazar.png') }}" alt="Film-Bazar">
                        </a>
                        <a href="https://mib.gov.in/ " target="_blank">
                            <img src="{{ asset('public/images/mib-logo.svg') }}" alt="mib-logo">
                        </a>
                    </div>
                    <div class="heading text-center">
                        <p>55th International Film Festival of India, Goa</p>
                        <p>20-28th November-2024</p>
                        <p>DELEGATE <br> REGISTRATIONS </p>
                        <p> ARE NOW OPEN!</p>
                        <div class="link">
                            <a href=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Modal -->
    <div class="modal update" id="update_btn" tabindex="-1" aria-labelledby="exampleupdate_btn" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-slide">
            {{-- <div class="modal-dialog modal-dialog-slide"> --}}
            <div class="modal-content ">
                <div class="modal-header">
                    <p>56th International Film Festival of India, Goa </p>
                    {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Latest Update</h1> --}}
                    {{-- <div class="top-logo "> --}}
                    {{-- <a href="{{ route('/') }}">
                        <img src="{{ asset('public/images/iffi.svg') }}" alt="iffi-logo">
                    </a>
                    <a href="https://www.nfdcindia.com/" target="_blank">
                        <img src="{{ asset('public/images/nfdc.svg') }}" alt="nfdc-logo">
                    </a>
                    <a href="https://www.goa.gov.in/" target="_blank">
                        <img src="{{ asset('public/images/goa-govt-logo.png') }}" alt="goa-govt-logo">
                    </a>
                    <a href="https://www/iffigoa.org" target="_blank">
                        <img src="{{ asset('public/images/Peacock-fill.png') }}" alt=" Peacock-fill">
                    </a>
                    <a href="https://esg.co.in/" target="_blank">
                        <img src="{{ asset('public/images/esg-logo.png') }}" alt="esg-logo">
                    </a>
                    <a href="https://filmbazaarindia.com/" target="_blank">
                        <img src="{{ asset('public/images/Film-Bazar.png') }}" alt="Film-Bazar">
                    </a>
                    <a href="https://mib.gov.in/ " target="_blank">
                        <img src="{{ asset('public/images/mib-logo.svg') }}" alt="mib-logo">
                    </a> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    {{-- </div> --}}
                </div>
                <div class="modal-body">
                    @foreach ($latestUpdates as $latestUpdate)
                        <a href={{ $latestUpdate->link }} class="text-decoration-none" target="_blank">
                            <div class="update-heading text-center">
                                {{-- <p>55th International Film Festival of India, Goa</p> --}}
                                {{-- <p>20-28th November-2024</p> --}}
                                {{-- <p>DELEGATE REGISTRATIONS </p> --}}
                                {{-- <p> ARE NOW OPEN!</p> --}}
                                {{-- <div class="link">
                            <a href="https://iffigoa.org/">Visit:www.iffigoa.org</a>
                        </div> --}}
                                <p>{!! html_entity_decode($latestUpdate->title) !!}</p>
                                {{-- <p>{{ $latestUpdate->content }}</p> --}}
                                <p>{!! html_entity_decode($latestUpdate->content) !!}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Latest Update Content --}}
