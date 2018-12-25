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
                <form action="{{ route('admin.post.edit', ['id'=>$post->id]) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="post_title" class="col-xs-12">Title of Post</label>
                        <div class="col-xs-12">
                            <input value="{{ $post->post_title }}" type="text" class="form-control form-line" id="post_title" name="post_title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_slug" class="col-xs-12" >Slug of Post</label>
                        <div class="col-xs-12">
                            <input value="{{ $post->post_slug }}" type="text" class="form-control form-line" name="post_slug" id="post_slug" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_cover" class="col-xs-12" >Cover of Post</label>
                        <img src="/media/{{ $post->post_cover }}" alt="" srcset="">
                        <div class="col-xs-12">
                            <input type="file" class="" name="post_cover" id="post_cover" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_content" class="col-xs-12" >Content of Post</label>
                        <div class="col-xs-12">
                            <textarea value="" name="post_content" id="post_content" required>{{ $post->post_content }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="col-xs-12" >Category of Post</label>
                        <div class="col-xs-12">
                            <select name="category_name" id="category_id" class="form-control form-line" multiple required>
                                <!--<option selected="selected" value="{{ $post->post_category }}"></option>-->
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
    $('#post_content').summernote({
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
    var postTitle = document.getElementById('post_title');
    var slug = document.getElementById('post_slug');
    postTitle.addEventListener('keyup', function(e) {
        postTitleValue = postTitle.value;
        slug.value = slugify(postTitleValue);

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