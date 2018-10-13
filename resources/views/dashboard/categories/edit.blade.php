@extends('layouts.dashboard-app')
@section('additional-styles')
<style>
.form-group {
    padding-bottom : 8px;
    overflow : hidden;
}
</style>
@endsection
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12 ">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">General Elements</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('admin.category.edit',['id'=>$category->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="article_title" class="col-xs-12">Title of Category</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control form-line" id="article_title" name="category_name" required value="{{ $category->category_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_slug" class="col-xs-12" >Slug of Category</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control form-line" name="category_slug" id="article_slug"  value="{{ $category->category_slug }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="submit" value="Save" class="btn btn-succes btn-pull">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!--/.col (right) -->
</div>
@endsection
@section('additional-scripts')
<script>
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    var articleTitle = document.getElementById('article_title');
    var slug = document.getElementById('article_slug');
    articleTitle.addEventListener('keyup', function(e) {
        articleTitleValue = articleTitle.value;
        slug.value = slugify(articleTitleValue);

    })
    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')  
            .replace(/^-+/, '') 
            .replace(/-+$/, '');
    }


</script>
@include('components.dialog')
@endsection