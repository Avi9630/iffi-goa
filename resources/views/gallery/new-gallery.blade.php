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

    {{-- <div class="content-wrapper">
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
    </div> --}}

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <form method="GET" action="{{ route('search-gallery-by-cat') }}" class="forms-sample" id="myForm">
                    @csrf @method('GET')

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="department_id" id="department_id" class="form-select"
                                    onchange="toggleCategoryField()" style="height: 100%;">
                                    <option value="">Select</option>
                                    <option value="1">All dates</option>
                                    <option value="2">Daywise</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group" style="height: 45%;">
                                <select name="category_id" id="category_id" class="form-select">
                                    <option value="" selected>All section</option>
                                    @forelse ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->category }}
                                        </option>
                                    @empty
                                        <option value="">No Categories Available</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        {{-- Date range --}}

                        <div class="container" id="categoryField" style="display: none;">

                            <div class="btn-group custom-calander-group" role="group" aria-label="Radio button group">

                                <label class="calander active">
                                    <input type="radio" name="date" id="option1" value="2024-11-20">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>20</span>
                                        <span>2024</span>
                                    </div>
                                </label>

                                <label class="calander">
                                    <input type="radio" name="date" id="option2" value="2024-11-21">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>21</span>
                                        <span>2024</span>
                                    </div>
                                </label>

                                <label class="calander">
                                    <input type="radio" name="date" id="option3" value="2024-11-22">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>22</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option4" value="2024-11-23">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>23</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option5" value="2024-11-24">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>24</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option6" value="2024-11-25">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>25</span>
                                        <span>2024</span>
                                    </div>

                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option7" value="2024-11-26">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>26</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option8" value="2024-11-27">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>27</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                                <label class="calander">
                                    <input type="radio" name="date" id="option9" value="2024-11-20">
                                    <div class="calander-text"><span class="white-text">Nov</span> <span>28</span>
                                        <span>2024</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="search-btn">
                                <button type="submit" class="btn btn-primary me-2">Search</button>
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
                            {{-- <a href="{{ asset('public/images/gallery-2024/' . $gall->image) }}"
                                data-src="{{ asset('public/images/gallery-2024/' . $gall->image) }}">
                                <img src="{{ asset('public/images/gallery-2024/' . $gall->image) }}"
                                    alt="{{ $gall->image }}">
                            </a> --}}
                            <a href="{{ $gall->img_url }}" data-src="{{ $gall->img_url }}">
                                <img src="{{ $gall->img_url }}" alt="{{ $gall->img_url }}">
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
