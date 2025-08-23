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
            <h1 class="page-title-header">Gallery of {{ $year }} IFFI Festival</h1>
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="mt-5 mb-4">
                <div id="lightgallery" class="gallery">

                    <table class="table">
                        @if (count($gallery) > 0)
                            <thead>
                                <tr>
                                    <th scope="col">S.No.</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Video Link</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gallery as $key => $gall)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $gall->img_caption }}</td>
                                        <td>
                                            <a href="{{ $gall->video_url }}">{{ $gall->video_url }}</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @else
                            <p class="text-center">No records found !!</p>
                        @endif
                    </table>
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
        var roleId = document.getElementById("department_id").value;
        var categoryField = document.getElementById("categoryField");
        if (roleId == 2) {
            categoryField.style.display = "block";
        } else {
            categoryField.style.display = "none";
        }
    }
    document.addEventListener("DOMContentLoaded", function() {
        toggleCategoryField();
    });
</script>

<script>
    document.querySelectorAll('.btn-group input[type="radio"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            document.querySelectorAll('.btn-group label').forEach(function(label) {
                label.classList.remove('active');
            });
            radio.closest('label').classList.add('active');
        });
    });
</script>
