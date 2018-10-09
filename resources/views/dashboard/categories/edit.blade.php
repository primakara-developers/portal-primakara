@extends('layouts.dashboard-app')
@section('additional-styles')
<link rel="stylesheet" href="{{ asset('summernote/summernote.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
<style>
[class^='select2'] {
  border-radius: 0px !important;
  box-shadow: none !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered li {
    color:#000;

}
.select2-container--default .select2-selection--single, .select2-container--default .select2-selection--multiple {

  float: none;
  background-color: rgba(0,0,0,0);
  background-position: center bottom,center calc(99%);
  background-repeat: no-repeat;
  background-size: 0 2px,100% 1px;
  padding: 0;
  transition: background 0s ease-out 0s;
}

.select2-container--default.select2-container--focus .select2-selection--single, .select2-container--default.select2-container--focus .select2-selection--multiple {
  background-size: 100% 2px,100% 1px;

  transition-duration: .3s;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  border: none;
}
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
<script src="{{ asset('js/sweetalert2.js') }}"></script>
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