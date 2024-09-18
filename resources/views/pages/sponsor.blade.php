@foreach ($sponsors as $sponsor)
    <div class="item ">
        <img src="{{ asset('public/images/sponsor/' . $sponsor) }}" class="img-fluid">
    </div>
@endforeach
