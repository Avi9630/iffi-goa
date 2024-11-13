{{-- Top grid resizing  --}}
@include('layouts.gig')

{{-- Top Logo & Menu btn --}}
@include('layouts.logo')

{{-- Right Side Latest Update Btn --}}
{{-- @include('layouts.update-btn') --}}

@include('layouts.update-btn', [
    'latestUpdates' => app(\App\Http\Controllers\CommonController::class)->getLatestUpdate(),
    // 'datas' => app(\App\Http\Controllers\CommonController::class)->iffiFestival(),
])

{{-- coundown --}}
{{-- @include('layouts.timer') --}}
