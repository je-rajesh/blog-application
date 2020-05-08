@extends('layouts.app')


@section('content')
<div>
    <div class="row justify-content-center m-0">
        <div class="col-3">
            <img src="/images/e55310ee8b72f5bd4d13606bd1cf308b.jpg" class="rounded-circle w-75 ">
        </div>

        <div class="col-5">
            <div class="row justify-content-between align-items-baseline pl-3">
                <h1>{{ $user->name }}</h1>
                @can('update', $user->profile)
                <a href="/post/create">add new post</a>
                @endcan
            </div>

            @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit/">edit profile</a>
            @endcan

            <div class="d-flex justify-content-between mb-2 ">
                <div><strong>No. of Posts</strong> {{ $user->posts->count() }}</div>
                <div><strong>Following:</strong> 13M </div>
                <div><strong>Followers:</strong> 128 </div>
            </div>
            <div class="">
                <div><strong>Title:</strong> {{$user->profile->title }}</div>
                <div><strong>description:</strong> {{$user->profile->description}} </div>
                <div><strong>url:</strong> {{$user->profile->url }} </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4 m-0">
        <div class="col-8 justify-content-center shadow-textarea">
            @foreach($posts as $post)
            <div class="card shadow-sm mb-4">
                <div class="card-header text-primary d-flex p-1 justify-content-between">
                    <div class="text-primary align-self-end">{{ $user->name }}</div>
                </div>


                <div class="card-body text-dark">
                    <h3>{{ $post->title }}</h3>
                    {{ $post->walltext }}
                </div>
                <div class="card-footer bg-white border-none d-flex" style="border:none;">
                    <div class="text-success mr-3">100 kudos</div>
                    <a href="/post/{{ $post->id }}">show post</a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
</div>
@endsection