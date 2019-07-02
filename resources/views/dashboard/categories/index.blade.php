@extends('layouts.dashboard-app')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Categories</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th width="1">#</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->category_slug }}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a
                                href="{{ route('home.postList', [ 'slugPost' => $category->category_slug ]) }}"
                                class="btn btn-sm btn-success"
                                target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.category.delete',['id'=>$category->id]) }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="box-footer clearfix">
        {{ $categories->links('dashboard.vendor.pagination.default') }}
    </div>
</div>
@endsection
@section('additional-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('components.dialog')
@endsection
