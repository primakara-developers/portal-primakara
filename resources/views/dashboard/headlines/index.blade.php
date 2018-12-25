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
        <h3 class="box-title">Posts</h3>
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
                @foreach ($headlines as $headline)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $headline->post_title }}</td>
                        <td>{{ $headline->created_at->format('d F Y') }}</td>
                        <td>
                            <input type="checkbox" class="toggle-headline" id="post-{{$headline->id}}" data-id="{{ $headline->id }}" {{ $headline->is_headline == 1 ? 'checked' : '' }}/>
                            <label for="post-{{$headline->id}}" class="label-toggle-post"></label>
                        </td>
                        <td>
                            <a href="{{ route('admin.post.edit', ['id'=>$headline->id]) }}" class="btn btn-sm btn-primary">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-success">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.post.delete',['id' => $headline->id]) }}" class="btn btn-sm btn-danger">
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
        {{ $headlines->links('dashboard.vendor.pagination.default') }}
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
            swal({
                title: 'Add Headline',
                text: 'Are you sure you want to remove this post from headline?',
                icon: 'warning',
                buttons: {
                    cancel: true,
                    confirm: true
                }
            }).then( function(isConfirm) {
                if (!isConfirm) {
                    return;
                }
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
                        swal("operation succeeded", "Your operation succeeded!", "success");
                        $(button.parentsUntil('tbody')[1]).css('display', 'none');
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