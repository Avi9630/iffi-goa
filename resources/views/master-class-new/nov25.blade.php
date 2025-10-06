<div class="mt-4 mb-4">
    <h2 class="pb-3">{{ \Carbon\Carbon::parse($topic->masterDate->date)->format('F jS, Y') }}</h2>
    <div class="row">
        @if ($topic->masterClass)
            <div class="col-md-2 col-3">
                {{-- <div class="master-time">
                    <h4 class="time-div">{{ \Carbon\Carbon::parse($topic->masterClass->start_time)->format('g:i A') }}
                    </h4>
                    <h5 class="time-div">{{ \Carbon\Carbon::parse($topic->masterClass->end_time)->format('g:i A') }}</h5>
                </div> --}}
                <div class="master-time">
                    <h4 class="time-div">
                        @if ($topic->masterClass->start_time == null)
                        @else
                            {{ \Carbon\Carbon::parse($topic->masterClass->start_time)->format('g:i A') }}
                        @endif
                    </h4>
                    <h5 class="time-div">
                        @if ($topic->masterClass->start_time == null)
                        @else
                            {{ \Carbon\Carbon::parse($topic->masterClass->end_time)->format('g:i A') }}
                        @endif
                    </h5>
                </div>
            </div>
        @endif

        <div class="col-md-7 col-9">
            <div class="callout">
                <h4 data-bs-toggle="modal" data-bs-target="#exampleModal" class="title-tab"
                    id="nov{{ strtolower(date('d', strtotime($topic->masterDate->date))) }}-{{ $loop->index }}-trigger">
                    {{ $topic->title }}
                </h4>
                <p>
                    {!! $topic->description !!}
                </p>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="user-profile-icon">
                <ul>
                    @foreach ($topic->speakers as $speaker)
                        <li>
                            <img src="{{ $speaker->image_url }}" alt="image" class="img-fluid">
                        </li>
                    @endforeach
                </ul>
            </div>
            <br>
            @if (isset($topic->masterClass) && !empty($topic->masterClass))
                <a href="{{ $topic->masterClass->session_url }}" class="btn btn-sm btn-primary" target="_blank"
                    style="margin-left: 80px"> View session</a>
            @endif
            {{-- <a href="{{ $topic->masterClass->session_url }}" class="btn btn-sm btn-primary" target="_blank"
                style="margin-left: 80px"> View session</a> --}}
        </div>
    </div>
</div>
