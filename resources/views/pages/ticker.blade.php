<!-- News Section -->
{{-- <div class="breaking-news">
        <marquee>
            <span>Creative Minds of Tomorrow date has been extended till 15th September,2024</span>
            <span>||</span>
            <span>Best Indian Debut Director Award Entries Are Open Now</span>
        </marquee>
    </div> --}}

<div class="breaking-news">
    <marquee>
        @for ($i = 0; $i < 2; $i++)
            @foreach ($tickers as $ticker)
                <span>{{ $ticker->content }}</span>
                <span>||</span>
            @endforeach
        @endfor
    </marquee>
</div>
<!-- News Section Ends-->
