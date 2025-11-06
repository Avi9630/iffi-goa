<?php 
$key = request()->query('testing');
if($key){
    global $web_data_json; 
}
?>
@include('layouts.gig')
@include('layouts.logo')
@include('layouts.update-btn', [
    'latestUpdates' => app(\App\Http\Controllers\CommonController::class)->getLatestUpdate(),
])
