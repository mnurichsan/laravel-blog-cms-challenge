@extends('layouts_backend.dashboard')
@section('title','Edit Category')
@section('content')
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('category.index')}}" class="btn btn-sm btn-warning">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('category.update',$category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$category->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary">Update</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

@endsection