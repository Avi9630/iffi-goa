<div class="breaking-news">
    <marquee>
        @for ($i = 0; $i < 2; $i++)
            @foreach ($tickers as $ticker)
                <span>{!! $ticker->content !!} </span> ||
            @endforeach
        @endfor
    </marquee>
</div>
