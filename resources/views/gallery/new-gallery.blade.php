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

    <div class="container static-content">
        <form method="GET" action="{{ route('search-gallery-by-cat') }}" class="forms-sample" id="filterForm">
            @csrf

            <!-- Date Filter -->
            <ul class="nav nav-tabs calander-tab-new-div" id="dateTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link calanderrr" onclick="resetFilters()">
                        <div class="calander-all">
                            <p>All</p>
                        </div>
                    </a>
                </li>
                @foreach ($dates as $date)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link {{ request('date') == $date ? 'active' : '' }}" href="javascript:void(0)"
                            data-date="{{ $date }}" onclick="changeTab(this, '{{ $date }}')">
                            <div class="calander-text">
                                <span class="text-white mb-2">{{ \Carbon\Carbon::parse($date)->format('d') }}</span>
                                <span class="mb-1">{{ \Carbon\Carbon::parse($date)->format('M') }}</span>
                                <span>{{ \Carbon\Carbon::parse($date)->format('Y') }}</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Category Filter -->
            <div class="d-flex justify-content-around mt-3">
                <div class="form-group" style="width: 70%;">
                    <select name="category_id" id="categorySelect" class="form-select">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->category }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn cus-prim-btn   text-center">Filter</button>
                </div>
            </div>
        </form>

        <!-- Gallery Display -->
        <div class="gallery mt-4 gallery" id="lightgallery">
            @forelse ($gallery as $item)
                <div class="grid-item">
                    <a href="{{ $item->img_url }}" target="_blank">
                        <img src="{{ $item->img_url }}" alt="{{ $item->img_caption }}">
                    </a>
                </div>
            @empty
                <p>No images available for the selected filters.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-4 gallery-pageni">
            {{ $gallery->appends(request()->input())->links() }}
        </div>
    </div>
@endsection
<script>
    // Change tab and update the gallery
    function changeTab(tab, date) {
        // Remove 'active' class from all tabs
        document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));

        // Add 'active' class to clicked tab
        tab.classList.add('active');

        // Update the filter form date field
        const form = document.getElementById('filterForm');
        let dateInput = form.querySelector('input[name="date"]');
        if (!dateInput) {
            dateInput = document.createElement('input');
            dateInput.type = 'hidden';
            dateInput.name = 'date';
            form.appendChild(dateInput);
        }
        dateInput.value = date;

        // Submit the form to apply the new filter
        form.submit();
    }

    // Reset all filters and show all images
    function resetFilters() {
        const form = document.getElementById('filterForm');
        let dateInput = form.querySelector('input[name="date"]');
        if (dateInput) dateInput.remove();
        document.getElementById('categorySelect').value = '';
        form.submit();
    }
</script>
