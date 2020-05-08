@extends('layouts.app')


@section('content')
<div>
    <div class="row justify-content-center m-0">
        <div class="col-8">
            <div class="card" style="border:none;">
                <div class="card-header d-flex justify-content-between align-items-baseline">
                    {{ $user->name }}
                </div>
                <div class="card-body justify-content-center">
                    <h2>{{ $post->title }}</h2>
                    <div>
                        {{ $post->walltext }}
                    </div>
                    <div class="card-footer bg-white pl-0" style="border:none;">
                        <a href="/post/{{ $post->id }}/edit">edit this article</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection