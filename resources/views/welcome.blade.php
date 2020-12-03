@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
    	<slider></slider>
    	<router-view></router-view>
    </div>
</div>
@endsection