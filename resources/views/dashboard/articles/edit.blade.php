@extends('layouts.dashboard-app')
@section('additional-styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/css/select2.min.css">
<style>
.form-group {
    padding-bottom : 8px;
    overflow : hidden;
}

@media screen and (max-width: 767px) {
  .select2 {
    width: 100% !important;
  }
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
                <form action="{{ route('admin.article.add') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="article_title" class="col-xs-12">Title of Article</label>
                        <div class="col-xs-12">
                            <input value="{{ $article->article_title }}" type="text" class="form-control form-line" id="article_title" name="article_title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_slug" class="col-xs-12" >Slug of Article</label>
                        <div class="col-xs-12">
                            <input value="{{ $article->article_slug }}" type="text" class="form-control form-line" name="article_slug" id="article_slug" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_cover" class="col-xs-12" >Cover of Article</label>
                        <img src="/media/{{ $article->article_cover }}" alt="" srcset="">
                        <div class="col-xs-12">
                            <input type="file" class="" name="article_cover" id="article_cover" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_content" class="col-xs-12" >Content of Article</label>
                        <div class="col-xs-12">
                            <textarea value="" name="article_content" id="article_content" required>{{ $article->article_content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="col-xs-12" >Category of Article</label>
                        <div class="col-xs-12">
                            <select name="category_name" id="category_id" class="form-control form-line" multiple required>
                                <!--<option selected="selected" value="{{ $article->article_category }}"></option>-->
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="submit" value="Publish" class="btn btn-succes btn-pull">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.1/js/select2.full.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('#category_id').select2({
            placeholder: "Please choose",
            maximumSelectionLength:1
        }).val([
            "{{ $selectedCategory }}"
        ]);
        $('#category_id').trigger('change');
    });
</script>
<script>
    $('#article_content').summernote({
        placeholder: 'Type Here!',
        tabsize:2,
        height:300,
        toolbar: [
            ['style',['bold','italic','underline','clear']],
            ['font', ['striketrough','superscript','subscript']],
            ['fontsize',['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height',['height']]
        ]
    })
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