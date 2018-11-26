@extends('layouts.dashboard-app')
@section('additional-styles')
    <style type="text/css">
        .toggle-headline {
            display: none;
        }
        .toggle-headline ~ label {
            width: 40px;
            height: 20px;
            background-color: #eaeaea;
            border-radius: 10px;
            position: relative;
            cursor: pointer;
        }
        .toggle-headline ~ label::after {
            content: "";
            width: 20px;
            height: 20px;
            border-radius: 100%;
            display: inline-block;
            position: absolute;
            right: calc(100% - 20px);
            background-color: #333;
            transition: all ease-in-out .3s;

        }

        .toggle-headline:checked + label::after{
            background-color: #3c8dbc;
            right: 0;
        }
        
    </style>
@endsection
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Articles</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th width="1">#</th>
                    <th>Title</th>
                    <th>Published</th>
                    <th>Headline</th>
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
                            <input type="checkbox" class="toggle-headline" id="article-{{$article->id}}" data-id="{{ $article->id }}" {{ $article->is_headline == 1 ? 'checked' : '' }}/>
                            <label for="article-{{$article->id}}" class="label-toggle-article"></label>
                        </td>
                        <td>
                            <a href="{{ route('admin.article.edit', ['id'=>$article->id]) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.article.delete',['id' => $article->id]) }}" class="btn btn-sm btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        {{ $articles->links('dashboard.vendor.pagination.default') }}
    </div>
</div>
@endsection
@section('additional-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {

        $('.toggle-headline').on('click', function(e) {
            var button = $(this);
            var data = {
                id: button.data('id'),
                is_headline: $(this).prop('checked'),
                headline_at: new Date().toISOString().slice(0, 19).replace('T', ' ')
            }
            button.prop('checked', !button.prop('checked'));
            var caption = button.prop('checked') ? 'Are you sure you want to remove this article from headline?' : 'Are you sure you want to add this article as headline?'
            swal({
                title: 'Add Headline',
                text: caption,
                icon: 'warning',
                buttons: {
                    cancel: true,
                    confirm: true
                }
            }).then( function(isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    }
                });
                $.ajax({
                    url: '{{ route('admin.headline.store') }}',
                    method: 'POST',
                    data: data,
                    success: function() {
                        swal("operation succeded", "Your operation succeeded!", "success");
                        button.prop('checked', !button.prop('checked'));
                    },
                    error: function() {
                        swal("operation failed", "Something went wrong", "error");
                    }

                });

            })
        })
    })
</script>
@include('components.dialog')
@endsection