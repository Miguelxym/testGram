@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://scontent-lis1-1.cdninstagram.com/v/t51.2885-19/s150x150/18160536_277188729358000_2615606521731481600_a.jpg?tp=1&_nc_ht=scontent-lis1-1.cdninstagram.com&_nc_ohc=2zonF7uyl-YAX-GbwkD&ccb=7-4&oh=720063dcf6e09568add957c15f1fca3c&oe=6082C2E1&_nc_sid=7bff83" alt="User Logo" class="rounded-circle p-5" style="height: 200px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="/p/create">Add Post</a>
                @endcan
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan

            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>226k</strong> Followers</div>
                <div class="pr-5"><strong>593</strong> Following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img class="w-100" src="/storage/{{ $post->image }}">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
