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
                            <a href="{{ route('admin.article.edit', ['id'=>$article->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('admin.article.delete',['id' => $article->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>
@endsection
@section('additional-scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('components.dialog')
@endsection