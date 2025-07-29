{{-- Top Logo Menu Btn --}}
<div class="col-lg-12">
    <div class="logo-section "id="menu">
        <div class="container">
            <div class="top-logo ">
                <a href="{{ route('/') }}">
                    <img class="iffi-logo" src="{{ asset('public/images/logo/IFFI56.png') }}" alt="iffi-logo">
                </a>
                <a href="https://www.nfdcindia.com/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/nfdc.svg') }}" alt="nfdc-logo">
                </a>
                <a href="https://www.goa.gov.in/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/goa-govt-logo.png') }}" alt="goa-govt-logo">
                </a>
                <a href="https://www.iffigoa.org" target="_blank">
                    <img src="{{ asset('public/images/header-logo/iffi-logo.png') }}" alt=" Peacock-fill" class="peacock-logo">
                </a>
                <a href="https://esg.co.in/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/esg-logo.png') }}" alt="esg-logo">
                </a>
                <a href="https://filmbazaarindia.com/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/Film-Bazar.png') }}" alt="Film-Bazar">
                </a>
                <a href="https://mib.gov.in/ " target="_blank">
                    <img src="{{ asset('public/images/header-logo/mib-logo.svg') }}" alt="mib-logo">
                </a>
                @include('common.menu-btn')
            </div>
        </div>
    </div>
</div>
{{-- Top Logo Menu Btn --}}
