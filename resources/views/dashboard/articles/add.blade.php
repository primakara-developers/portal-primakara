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
                <form action="{{ route('admin.article.add') }}" method="POST" class="form-horizontal form-material" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="article_title" class="col-xs-12">Title of Article</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control form-line" id="article_title" name="article_title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_slug" class="col-xs-12" >Slug of Article</label>
                        <div class="col-xs-12">
                            <input type="text" class="form-control form-line" name="article_slug" id="article_slug" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_cover" class="col-xs-12" >Cover of Article</label>
                        <div class="col-xs-12">
                            <input type="file" class="form-control" name="article_cover" id="article_cover" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="article_content" class="col-xs-12" >Content of Article</label>
                        <div class="col-xs-12">
                            <textarea name="article_content" id="article_content" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category_id" class="col-xs-12" >Category of Article</label>
                        <div class="col-xs-12">
                            <select name="category_name" id="category_id" class="form-control form-line" multiple required>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#category_id').select2({
            placeholder: "Please choose",
            maximumSelectionLength:1
        });
    });
</script>
<script src="{{ asset('js/sweetalert2.js') }}"></script>
<script src="{{ asset('summernote/summernote.min.js') }}"></script>
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
</script>
@include('components.dialog')
@endsection