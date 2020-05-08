@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

@section('content')
<div>

    <div class="row justify-content-center align-items-center text-white m-0">

        <div class="col-8 mb-4">
            <a href="/post/create">add new post</a>
        </div>
    </div>
    <div class="row justify-content-center align-items-center text-white m-0">

        <div class="col-8 justify-content-center shadow-textarea">
            <label for="wall-text" class="w-100" style="height:240px;">
                <textarea name="wall" id="wall-text" cols=40 placeholder="what is in your mind?" class="h-40  border-primary "></textarea>
            </label>
            <div class="row justify-content-end" id="app">
                <post-button class="mr-4"></post-button>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection