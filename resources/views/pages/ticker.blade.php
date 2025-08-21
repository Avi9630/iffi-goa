<!-- News Section -->


<div class="breaking-news">
    <marquee>
        @for ($i = 0; $i < 2; $i++)
            @foreach ($tickers as $ticker)
            <span>{!! $ticker->content !!} </span> ||
            {{-- <span>{{ strip_tags($ticker->content) }} || </span> --}}
                {{-- <span>{{ $ticker->content }} || </span> --}}
                <!-- <span> <img width="20px" src="https://iffigoa.org/public/images/IFFI%20Ticker%20Separator.png"> </span> -->
            @endforeach
        @endfor
    </marquee>
</div>
<!-- News Section Ends-->
