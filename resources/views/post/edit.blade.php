@extends('layouts_backend.dashboard')
@section('title','Tambah Post')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('post.index')}}" class="btn btn-sm btn-warning">Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('post.update',$posts->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id=title value="{{$posts->title}}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control @error('category') is-invalid @enderror" name="id_category">
                            <option value="" holder>-Pilih Kategori-</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id }}" @if($posts->id_category == $category->id)
                                selected
                                @endif
                                >{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="contentid">{{$posts->content}}</textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Thumbnail</label><br>
                        <img src="{{asset($posts->image)}}" alt="" class="img-fluid mb-2 mt-2" width="100px">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                        @error('image')
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

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('contentid');
</script>

@endsection