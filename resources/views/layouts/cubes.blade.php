<div class="cube-popup-overlay">
    <div class="cube-popup-content" ref={popupRef}>
        <div id="scene">
            <div id="cube" class="assembly cube" ref={cubeRef}>
                @for ($round = 0; $round < 6; $round++)
                    @foreach ($cubes as $key => $cube)
                        <div class="face">
                            <a href="{{ $cube->link }}" class="stretched-link" target="_blank">
                                @if (!empty($cube->image_url))
                                    <img src="{{ $cube->image_url }}"
                                        alt="Face {{ $key }} - Round {{ $round + 1 }}" loading="lazy" />
                                @else
                                    <img src="{{asset('public/images/cube/webp').'/'. $cube->image_name }}"
                                        alt="Face {{ $key }} - Round {{ $round + 1 }}" loading="lazy" />
                                @endif
                            </a>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>
    </div>
</div>
