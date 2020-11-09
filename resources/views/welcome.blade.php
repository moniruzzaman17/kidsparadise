@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Kidsparadise
        </div>

        <div class="links">
            <router-view></router-view>
        </div>
    </div>
</div>

@endsection