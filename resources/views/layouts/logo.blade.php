{{-- Top Logo Menu Btn --}}
<?php

$currentUrl = url()->current();
$newUrl = preg_replace('/\/(en|hi)\b/', '/hi', $currentUrl);

if ($newUrl === $currentUrl) {
    $newUrl = url('hi' . parse_url($currentUrl, PHP_URL_PATH));
}
?>
<div class="col-lg-12">
    <div class="logo-section " id="menu">
        <div class="text-resize  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-4  ">

                    </div>
                    <div class="col-md-6 col-sm-8 ">
                        <div class="resize-content ">
                            <span><a href="#welcome" class="skip">Skip to Main Content</a></span>

                            <div class="dropdown ">


                                <a class="btn btn-secondary languages" href="{{ $newUrl }}">HI</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="top-logo ">
                <a href="{{ route('/') }}">
                    <img class="iffi-logo" src="{{ asset('public/images/logo/IFFI56.png') }}" alt="iffi-logo" loading="lazy">
                </a>
                <a href="https://www.nfdcindia.com/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/nfdc.svg') }}" alt="nfdc-logo" loading="lazy">
                </a>
                <a href="https://www.goa.gov.in/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/goa-govt-logo.png') }}" alt="goa-govt-logo" loading="lazy">
                </a>
                <a href="https://www.iffigoa.org">
                    <img src="{{ asset('public/images/header-logo/iffi-logo.png') }}" alt=" Peacock-fill" class="peacock-logo" loading="lazy">
                </a>
                <a href="https://esg.co.in/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/esg-logo.png') }}" alt="esg-logo" loading="lazy">
                </a>
                <a href="https://films.wavesbazaar.com/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/WavesFilmBazaar.png') }}" alt="Film-Bazar" loading="lazy">
                </a>
                <a href="https://mib.gov.in/ " target="_blank">
                    <img src="{{ asset('public/images/header-logo/mib-logo.svg') }}" alt="mib-logo" loading="lazy">
                </a>
                @include('common.menu-btn')
            </div>
        </div>
    </div>
</div>
{{-- Top Logo Menu Btn --}}