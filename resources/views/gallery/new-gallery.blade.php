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
            <h1 class="page-title-header">Gallery of 2024 IFFI Festival</h1>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <form method="GET" action="{{ route('search-gallery-by-cat') }}" class="forms-sample" id="myForm">
                    @csrf @method('GET')
                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="role_id" id="role_id"
                                    class="form-select @error('role_id') is-invalid @enderror"
                                    onchange="toggleCategoryField()" style="height: 100%;">
                                    <option value="">Select option</option>
                                    <option value="1">All</option>
                                    <option value="2">Day wise</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group" style="height: 45%;">
                                <select name="cmot_category_id" id="cmot_category_id" class="form-select">
                                    <option value="" selected>Select Department</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('cmot_category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->category }}
                                        </option>
                                    @empty
                                        <option value="">No Categories Available</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="search-btn">
                                <button type="submit" class="btn btn-primary me-2">Search</button>
                                {{-- <a href="{{ route('gallery-2024', ['year' => 2024]) }}"
                                    class="btn btn-primary me-2">Reset</a> --}}
                            </div>
                        </div>

                        <div class="col-md-6" id="categoryField" style="display: none;">
                            <div class="form-group" style="height: 45%;">
                                <label for="name"><strong>Start Date</strong></label>
                                <input type="date" name="from_date" class="form-control" value="{{ old('from_date') }}">
                                <label for="name"><strong>End Date</strong></label>
                                <input type="date" name="to_date" class="form-control" value="{{ old('to_date') }}">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="mt-5 mb-4">
                <div id="lightgallery" class="gallery">
                    @foreach ($gallery as $gall)
                        <div class="grid-item">
                            <a href="{{ asset('public/images/gallery-2024/' . $gall->image) }}"
                                data-src="{{ asset('public/images/gallery-2024/' . $gall->image) }}">
                                <img src="{{ asset('public/images/gallery-2024/' . $gall->image) }}"
                                    alt="{{ $gall->image }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container">
                <nav aria-label="Page navigation pb-4">
                    <ul class="pagination overflow-hidden">
                        {{ $gallery->withQueryString()->links() }}
                    </ul>
                </nav>
            </div>
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
    <script>
        function showDiv() {
            var dropdown = document.getElementById("dropdown");
            var selectedValue = dropdown.value;
            var myDiv = document.getElementById("myDiv");

            // Show or hide the div based on selected option
            if (selectedValue === "show") {
                myDiv.style.display = "block";
            } else {
                myDiv.style.display = "none";
            }
        }
    </script>
@endsection
<script>
    function toggleCategoryField() {
        var roleId = document.getElementById("role_id").value; // Get the selected value
        var categoryField = document.getElementById("categoryField"); // Target the category field

        if (roleId == 2) {
            categoryField.style.display = "block"; // Show field when role_id is 2
        } else {
            categoryField.style.display = "none"; // Hide for other role_id values
        }
    }
    // Ensure the function runs on page load to set initial visibility
    document.addEventListener("DOMContentLoaded", function() {
        toggleCategoryField();
    });
</script>
