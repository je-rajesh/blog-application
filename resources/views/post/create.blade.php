@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

@section('content')
<div>
    <div class="row justify-content-center align-items-center text-white m-0">
        <div class="col-8 justify-content-center shadow-textarea">
            iv class="card-body">
            <form method="POST" action="/post">
                @csrf

                <div class="form-group">
                    <label for="title" class="text-dark">title</label>

                    <div>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="walltext" class="w-100" style="height:240px;">
                        <textarea name="walltext" id="wall-text" placeholder="what is in your mind?" class="h-40 border-rounded"></textarea>
                    </label>

                    @error('wall-body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row justify-content-end form-group">
                    <button class="btn btn-primary mr-4">Post</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection