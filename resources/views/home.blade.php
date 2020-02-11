@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/header-img.png" class="rounded-circle" style="width: 150px" alt="">
        </div>
        <div class="col-9">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>153</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 pt-5">
            <img src="/img/space-walk.png" class="w-100" alt="">
        </div>
        <div class="col-4 pt-5">
            <img src="/img/space-walk.png" class="w-100" alt="">
        </div>
        <div class="col-4 pt-5">
            <img src="/img/space-walk.png" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
