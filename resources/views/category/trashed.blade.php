@extends('layouts_backend.dashboard')
@section('title','Trashed Category')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block text-center mt-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="datatable-basic" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $key => $category)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <form action="{{route('category.kill',$category->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('category.restore',$category->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-recycle"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda ingin menghapus data')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection