{{-- <div class="card mb-3">
    <div class="card-header">
        <h5>{{ $topic->title }}</h5>
        <p><strong>{{ $topic->description }}</strong></p>
    </div>
    <div class="card-body">
        @if ($topic->masterClass)
            <p>Time: {{ \Carbon\Carbon::parse($topic->masterClass->start_time)->format('H:i') }}
                - {{ \Carbon\Carbon::parse($topic->masterClass->end_time)->format('H:i') }}</p>
            <p>Format: {{ $topic->masterClass->format }}</p>
        @endif

        @if ($topic->speakers->count())
            <h6>Speakers:</h6>
            <ul>
                @foreach ($topic->speakers as $speaker)
                    <li>
                        <strong>{{ $speaker->speaker_name }}</strong> - {{ $speaker->speaker_detail }}
                        @if ($speaker->image_url)
                            <img src="{{ $speaker->image_url }}" alt="{{ $speaker->speaker_name }}" width="50" />
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif

        @if ($topic->moderators->count())
            <h6>Moderators:</h6>
            <ul>
                @foreach ($topic->moderators as $moderator)
                    <li>{{ $moderator->moderator_name }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div> --}}

<div class="mt-4 mb-4">
    <h2 class="pb-3">
        {{ \Carbon\Carbon::parse($topic->masterDate->date)->format('F jS, Y') }}
    </h2>
    <div class="row">
        @if ($topic->masterClass)
            <div class="col-md-2 col-3">
                <div class="master-time">
                    <h4 class="time-div">{{ \Carbon\Carbon::parse($topic->masterClass->start_time)->format('g:i A') }}
                    </h4>
                    <h5 class="time-div">{{ \Carbon\Carbon::parse($topic->masterClass->end_time)->format('g:i A') }}</h5>
                </div>
            </div>
        @endif

        <div class="col-md-7 col-9">
            <div class="callout">
                <h4 class="title-tab" data-bs-toggle="modal" data-bs-target="#speakersModal"
                    data-title="{{ $topic->title }}"
                    data-date="{{ \Carbon\Carbon::parse($topic->masterDate->date)->format('M jS, Y') }}"
                    data-time="{{ \Carbon\Carbon::parse($topic->masterClass->start_time)->format('g:i A') }} TO {{ \Carbon\Carbon::parse($topic->masterClass->end_time)->format('g:i A') }}"
                    data-panel="{{ $topic->masterClass->format }}" 
                    {{-- data-moderator="{{ $topic->moderators->moderator_name }}"  --}}
                    {{-- data-moderator="@json($topic->speakers)"  --}}
                    data-speakers='@json($topic->speakers)'>
                    {{ $topic->title }}
                </h4>
                <p>{{ $topic->description }}</p>
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="user-profile-icon">
                <ul>
                    <li><img src="https://iffigoa.org/public/images/master-class/Imtiaz Ali.jpg" alt="image"
                            class="img-fluid">
                    </li>
                    <li><img src="https://iffigoa.org/public/images/master-class/Suhasini Maniratnam.jpg" alt="image"
                            class="img-fluid">
                    </li>
                    <li>
                        <img src="https://iffigoa.org/public/images/master-class/Khushbu Sundar.jpg" alt="image"
                            class="img-fluid">
                    </li>
                    <li>
                        <img src="https://iffigoa.org/public/images/master-class/BhumiPednekar.jpg" alt="image"
                            class="img-fluid">
                    </li>
                </ul>
            </div>
            <br>
            <a href="https://www.youtube.com/watch?v=54Q6M1VtD5A&amp;list=PLzkvk19CaSlI01tnt7RiIMF_7eQoc1oHJ&amp;index=4"
                class="btn btn-sm btn-primary" target="_blank" style="margin-left: 80px"> View session</a>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="speakersModal" tabindex="-1" aria-labelledby="speakersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalTitle">Women Safety and Cinema</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-icon">
                    <li>
                        <i class="fa fa-user" aria-hidden="true">
                        </i> Moderator :- <span id="modalModerator"></span>
                    </li>
                    <li>
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <span id="panel"></span>
                    </li>
                    <li>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span id="modalDate"></span>
                    </li>
                    
                </ul>
                <h4>Speakers</h4>
                <ol class="list-group list-group-numbered" id="modalSpeakers"></ol>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('speakersModal');

        modal.addEventListener('show.bs.modal', function(event) {
            const trigger = event.relatedTarget;
            const title = trigger.getAttribute('data-title');
            const date = trigger.getAttribute('data-date');
            const time = trigger.getAttribute('data-time');
            const panel = trigger.getAttribute('data-panel');
            const moderator = trigger.getAttribute('data-moderator');
            const speakers = JSON.parse(trigger.getAttribute('data-speakers'));

            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDate').innerText = date;
            document.getElementById('panel').innerText = panel;
            document.getElementById('modalModerator').innerText = moderator;

            const speakersList = document.getElementById('modalSpeakers');
            speakersList.innerHTML = '';

            speakers.forEach(speaker => {
                const li = document.createElement('li');
                li.className = ' profile-info';

                // clickable speaker name
                const nameDiv = document.createElement('div');
                nameDiv.className = 'fw-bold';
                nameDiv.style.cursor = 'pointer';
                nameDiv.innerText = speaker.speaker_name;

                nameDiv.addEventListener('click', function() {
                    alert(`${speaker.speaker_name}\n\n${speaker.speaker_detail}`);
                    // Or you could open another modal with more info instead of alert
                });

                const img = document.createElement('img');
                img.src = `https://iffigoa.org/public/images/master-class/Imtiaz Ali.jpg`;
                img.alt = speaker.speaker_name;
                img.className = 'rounded-circle';
                img.style = 'width:50px;height:50px;object-fit:cover;';

                li.appendChild(nameDiv);
                li.appendChild(img);

                speakersList.appendChild(li);
            });
        });
    });
</script>

<style>
    #modalSpeakers {
        border: solid 1px #ddd;
        border-radius: 6px;
    }

    .profile-info {
        list-style: none !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: solid 1px #ddd;
        padding: 6px 15px;
    }

    .profile-info a {
        color: #000
    }

    li :last-child {
        border: none !important;
    }
</style>
