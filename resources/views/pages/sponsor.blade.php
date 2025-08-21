@foreach ($sponsors as $sponsor)
    <div class="item ">
        <img src="{{ asset('public/images/sponsor/' . $sponsor) }}" class="img-fluid" alt="image">
    </div>
@endforeach
