@extends('layouts_backend.dashboard')
@section('title','Category')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">Tambah Data</a>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block text-center mt-2">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                    <form action="{{route('category.destroy',$category->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda ingin menghapus data')"><i class="fas fa-trash"></i></button>
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