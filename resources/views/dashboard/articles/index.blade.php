@extends('layouts.dashboard-app')
@section('additional-styles')
    <style>
        .table .short-text td {
            white-space: nowrap;
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .table th, .table td {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    @component('components.card')
        @slot('breadcrumb_content')
        <li><a href="{{ route('admin.index') }}">Welcome Page</a></li>
        <li class="active">Articles</li>
        @endslot
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th width="1">#</th>
                        <th>Title</th>
                        <th>Published</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $article->article_title }}</td>
                            <td>{{ $article->created_at->format('d F Y') }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endcomponent
@endsection
@section('additional-scripts')
<script src="{{ asset('js/sweetalert2.js') }}"></script>
@include('components.dialog')
@endsection