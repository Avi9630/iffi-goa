{{-- Top grid resizing  --}}
<?php 
$key = request()->query('testing'); 

if($key){
    global $web_data_json; 
   // echo "<pre>";print_r($web_data_json);die();
}
?>
@include('layouts.gig')

{{-- Top Logo & Menu btn --}}
@include('layouts.logo')

{{-- Right Side Latest Update Btn --}}
{{-- @include('layouts.update-btn') --}}

@include('layouts.update-btn', [
    'latestUpdates' => app(\App\Http\Controllers\CommonController::class)->getLatestUpdate(),
])

{{-- coundown --}}
{{-- @include('layouts.timer') --}}
