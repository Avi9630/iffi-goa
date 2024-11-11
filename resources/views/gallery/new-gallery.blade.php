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
            @foreach ($dates->unique('date_alias') as $date)
                <li class="nav-item" role="presentation">
                    <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                        id="tab-{{ str_replace(' ', '_', $date->date_alias) }}" data-bs-toggle="tab"
                        href="#{{ str_replace(' ', '_', $date->date_alias) }}" role="tab"
                        data-date="{{ $date->date_alias }}">
                        {{ $date->date_alias }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="dateTabContent">
            @foreach ($dates->unique('date_alias') as $date)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                    id="{{ str_replace(' ', '_', $date->date_alias) }}" role="tabpanel">
                    <!-- Category Filter Dropdown -->
                    <select class="form-select category-filter" data-date="{{ $date->date_alias }}">
                        <option value="all">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}">{{ $category }}</option>
                        @endforeach
                    </select>

                    <!-- Gallery Grid -->
                    <div class="gallery-container mt-3" id="gallery-{{ str_replace(' ', '_', $date->date_alias) }}">
                        <!-- Gallery items will be dynamically loaded here -->
                        <div class="row">
                            @foreach ($gallery->where('date', $date->date) as $photo)
                                <div class="col-sm-4">
                                    <div class="grid-item" data-category="{{ $photo->category }}">
                                        <a href="{{ asset('public/images/gallery_images/' . $photo->image) }}"
                                            data-src="{{ asset('public/images/gallery_images/' . $photo->image) }}">
                                            <img src="{{ asset('public/images/gallery_images/' . $photo->image) }}"
                                                alt="{{ $photo->title }}" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to load gallery for the initially active tab
            const activeTab = document.querySelector('.nav-link.active');
            if (activeTab) {
                loadGallery(activeTab.getAttribute('data-date'));
            }

            // Event listener for date tabs
            document.querySelectorAll('.nav-link').forEach(tab => {
                tab.addEventListener('click', function() {
                    const dateAlias = this.getAttribute('data-date');
                    loadGallery(dateAlias);
                });
            });

            // Load gallery items via AJAX
            function loadGallery(dateAlias) {
                const galleryContainer = document.getElementById(`gallery-${dateAlias}`);
                galleryContainer.innerHTML = ''; // Clear previous gallery items

                fetch(`/gallery/date?date=${dateAlias}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(photo => {
                            const galleryItem = document.createElement('div');
                            galleryItem.classList.add('col-md-4');
                            galleryItem.classList.add('grid-item');
                            galleryItem.setAttribute('data-category', photo.category);

                            galleryItem.innerHTML = `
                        <a href="{{ asset('public/images/gallery') }}/${photo.image}" data-src="{{ asset('public/images/gallery') }}/${photo.image}">
                            <img src="{{ asset('public/images/gallery') }}/${photo.image}" alt="${photo.title}" class="img-fluid">
                        </a>
                    `;

                            galleryContainer.appendChild(galleryItem);
                        });

                        // After loading, apply the category filter for the specific tab
                        const selectedCategory = document.querySelector(`#category-filter-${dateAlias}`).value;
                        applyCategoryFilter(dateAlias, selectedCategory);
                    })
                    .catch(error => console.error('Error loading gallery:', error));
            }

            // Category filter within each date tab
            document.addEventListener('DOMContentLoaded', function() {
                // Check if category filters are available
                console.log("Category filter elements found:", document.querySelectorAll(
                    '.category-filter'));

                // Category filter within each date tab
                document.querySelectorAll('.category-filter').forEach(select => {
                    select.addEventListener('change', function() {
                        const dateAlias = this.getAttribute('data-date');
                        const selectedCategory = this.value;

                        // Print the selected category to the console
                        console.log("Selected Category:", selectedCategory);
                        console.log("Date Alias:", dateAlias);

                        applyCategoryFilter(dateAlias, selectedCategory);
                    });
                });
            });


            // Function to filter gallery by category
            function applyCategoryFilter(dateAlias, selectedCategory = 'all') {
                const galleryContainer = document.getElementById(`gallery-${dateAlias}`);
                const galleryItems = galleryContainer.querySelectorAll('.grid-item');

                galleryItems.forEach(item => {
                    if (selectedCategory === 'all' || item.getAttribute('data-category') ===
                        selectedCategory) {
                        item.style.display = ''; // Show item
                    } else {
                        item.style.display = 'none'; // Hide item
                    }
                });
            }
        });
    </script>
@endsection
