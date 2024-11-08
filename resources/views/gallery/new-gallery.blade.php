@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-knowledge-series py-5">
        <div class="container text-center">
            <h1 class="page-title-header">Gallery 2024</h1>
        </div>
    </div>

    <div class="container mt-5 static-content">
        <!-- Date Tabs -->
        <ul class="nav nav-tabs" id="dateTabs" role="tablist">
            @foreach ($dates as $date)
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="tab-{{ $date->date_alias }}"
                        data-bs-toggle="tab" href="#{{ $date->date_alias }}" role="tab">
                        {{ $date->date_alias }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="dateTabContent">
            @foreach ($dates as $date)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $date->date_alias }}"
                    role="tabpanel">
                    <!-- Category Filter Dropdown -->
                    <select class="form-select category-filter" data-date="{{ $date->date_alias }}">
                        <option value="all">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>

                    <!-- Gallery Grid -->
                    <div class="gallery-container mt-3" id="gallery-{{ $date->date_alias }}">
                        @foreach ($gallery->where('created_dt', $date->created_dt) as $photo)
                            <div class="grid-item" data-category="{{ $photo->category }}">
                                <a href="{{ asset('public/images/gallery/' . $photo->image) }}"
                                    data-src="{{ asset('public/images/gallery/' . $photo->image) }}">
                                    <img src="{{ asset('public/images/gallery/' . $photo->image) }}"
                                        alt="{{ $photo->title }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@section('scripts')
    <script>
        // Filter images by category within each date tab
        document.querySelectorAll('.category-filter').forEach(select => {
            select.addEventListener('change', function() {
                const selectedCategory = this.value;
                const dateAlias = this.getAttribute('data-date');
                const galleryItems = document.querySelectorAll(`#gallery-${dateAlias} .grid-item`);

                galleryItems.forEach(item => {
                    if (selectedCategory === 'all' || item.getAttribute('data-category') ===
                        selectedCategory) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
