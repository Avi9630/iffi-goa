<!-- Menu Itens Start -->
<style>
    .offcanvas {
        overflow: scroll;
    }
</style>

<div class="offcanvas offcanvas-top top-navigation" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="container">
        {{-- close btn --}}
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        {{-- Menu Item's --}}
        <div class="offcanvas-body1">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container pl-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="row">
                            {{-- @foreach ($menus as $menu)
                                @foreach ($menus as $menu)
                                    <div class="col-md-3 col-sm-12">
                                        <h4 class="menu-title">{{ $menu['title'] }}</h4>
                                    </div>
                                    <ul class="navbar-nav vertical-menu-custom">
                                        @foreach ($menu['subcategories'] ?? [] as $item)
                                            @if (isset($item['subcategories']))
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ $item['title'] }}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach ($item['subcategories'] as $sub)
                                                            <li>
                                                                <a href="{{ $sub['base_url'] ?? '#' }}"
                                                                    class="dropdown-item"
                                                                    target="{{ Str::contains($sub['base_url'] ?? '', 'http') ? '_blank' : '_self' }}">
                                                                    {{ $sub['title'] }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a href="{{ $item['base_url'] ?? '#' }}" class="nav-link"
                                                        target="{{ Str::contains($item['base_url'] ?? '', 'http') ? '_blank' : '_self' }}">
                                                        {{ $item['title'] }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endforeach
                            @endforeach --}}

                            @foreach ($menus as $menu)
                                <div class="col-md-3 col-sm-12">
                                    <h4 class="menu-title">{{ $menu['title'] }}</h4>
                                    <ul class="navbar-nav vertical-menu-custom">
                                        @foreach ($menu['subcategories'] ?? [] as $item)
                                            @if (!empty($item['subcategories']))
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ $item['title'] }}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach ($item['subcategories'] as $sub)
                                                            <li>
                                                                <a href="{{ $sub['base_url'] ?? '#' }}"
                                                                    class="dropdown-item"
                                                                    target="{{ Str::contains($sub['base_url'] ?? '', 'http') ? '_blank' : '_self' }}">
                                                                    {{ $sub['title'] }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a href="{{ $item['base_url'] ?? '#' }}" class="nav-link"
                                                        target="{{ Str::contains($item['base_url'] ?? '', 'http') ? '_blank' : '_self' }}">
                                                        {{ $item['title'] }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Menu Itens End -->
