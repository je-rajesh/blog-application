@extends('layouts.app')


@section('content')
<div>
    <form method="POST" action="/profile/{{ auth()->user()->id }}">
        @csrf

        @method('PATCH')
        <div class="row justify-content-center mt-4 mx-0">

            <div class="col-3 justify-content-end">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-75 ">
            </div>
            <div class="col-7">

                <div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label text-md-right">Title</label>

                    <div class="col-md-8 ">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-2 col-form-label text-md-right">Description</label>

                    <div class="col-md-8 ">
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description">

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-2 col-form-label text-md-right">URL </label>

                    <div class="col-md-8 ">
                        <input id="url" type="url" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url">

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-2 col-form-label text-md-right">Image </label>

                    <div class="col-md-8 ">
                        <input id="image" type="file" class=" @error('image') is-invalid @enderror" name="image" value="{{ old('image') ?? $user->profile->image }}" autocomplete="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <div class="form-group row mb-0">
                    <div class="col-md-8  offset-md-2">
                        <button type="submit" class="btn btn-primary">
                            Save Profile
                        </button>
                    </div>
                </div>
            </div>

        </div>
</div>
</form>
</div>
@endsection