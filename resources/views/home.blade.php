@extends('layouts_backend.dashboard')
@section('title','Dashboard')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class=" font-weight-bold text-primary">Site Ichsan Blog</h3>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('assets_backend/img/undraw_Online_page_re_lhgx.svg')}}" alt="">
                </div>
                <p> Selamat Datang {{Auth::user()->name}}</p>
                <a rel="nofollow" href="{{route('post.create')}}">Create New Post &rarr;</a>
            </div>
        </div>
    </div>
</div>

@endsection