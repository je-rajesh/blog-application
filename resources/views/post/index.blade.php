@extends('layouts.app')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
<style>
    #home {}
</style>
@section('content')
<div>
    <div class="row justify-content-center align-items-center text-white m-0">
        <div class="col-8 justify-content-center shadow-textarea">
            <div class="card shadow-sm mb-4">
                <div class="card-header text-primary d-flex p-1 justify-content-between">
                    <div class="text-primary align-self-end">{{ $user->name }}</div>
                </div>

                
                <div class="card-body text-dark">
                    <h3>What is Lorem ipsum?</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis neque consectetur, quia ducimus culpa sint illum eius, doloremque quisquam enim iste amet. Laudantium neque laboriosam, id obcaecati accusantium repudiandae, voluptates hic facere vero libero quos culpa, voluptas voluptate veniam ea labore ab nostrum odit facilis nobis animi porro magni. Corrupti!
                </div>
                <div class="card-footer bg-white border-none d-flex" style="border:none;">
                    <div class="text-success mr-3">100 kudos</div>
                    <a href="/post/{post}">show post</a>
                </div>
            </div>

           
        </div>
    </div>
</div>
</div>
</div>
@endsection