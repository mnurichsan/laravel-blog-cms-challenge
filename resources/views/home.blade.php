@extends('layouts_backend.dashboard')
@section('title','dashboard')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ichsan Blog</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{asset('assets_backend/img/undraw_posting_photo.svg')}}" alt="">
                </div>
                <p> Selamat Datang {{Auth::user()->name}}</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Create New Post &rarr;</a>
            </div>
        </div>
    </div>
</div>

@endsection