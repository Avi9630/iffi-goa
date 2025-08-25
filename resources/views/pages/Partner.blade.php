@foreach ($partners as $partner)
    <div class="item ">
        <img src="{{ asset('public/images/sponsor/' . $partner) }}" class="img-fluid" alt="image">
    </div>
@endforeach
