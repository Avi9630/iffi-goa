{{-- <div class="breaking-news">
    <marquee>
        @for ($i = 0; $i < 2; $i++)
            @foreach ($tickers as $ticker)
                <span>{!! $ticker->content !!} </span> ||
            @endforeach
        @endfor
    </marquee>
</div> --}}

{{-- @php
    dd($tickers);
@endphp --}}
<div class="breaking-news">
    <marquee onmouseover="this.stop();" onmouseout="this.start();">
        @for ($i = 0; $i < 2; $i++)
            @foreach ($tickers as $ticker)
                <span>{!! $ticker->content !!} </span> ||
            @endforeach
        @endfor
    </marquee>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".breaking-news marquee a").forEach(link => {
            let href = link.getAttribute("href");
            if (href && !href.match(/^https?:\/\//i)) {
                link.setAttribute("href", "https://www." + href.replace(/^www\./i, ""));
            }
            link.setAttribute("target", "_blank");
            link.setAttribute("rel", "noopener noreferrer");
        });
    });
</script>
