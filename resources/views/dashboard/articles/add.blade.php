@extends('layouts.dashboard-app')
@section ('additional-styles')
<link rel="stylesheet" href="{{ asset('css/medium-editor.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/tim.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
<style>
[class^='select2'] {
  border-radius: 0px !important;
  box-shadow: none !important;
}

.select2-container--default .select2-selection--single, .select2-container--default .select2-selection--multiple {
  border-bottom: none;
  border-top: none;
  border-left: none;
  border-right: none;
  background-image: linear-gradient(#b5a8b9,#b5a8b9),linear-gradient(rgba(120,130,140,.13),rgba(120,130,140,.13));
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
  outline: 0;
  border-bottom: none;
  border-top: none;
  border-left: none;
  border-right: none;
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
    @component('components.card')
        @slot('breadcrumb_content')
        <li><a href="{{ route('admin.index') }}">Welcome Page</a></li>
        <li class="active">Write Post</li>
        @endslot
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
                    <div class="form-control form-line" id="editor"></div>
                   <input type="hidden" id="article_content" name="article_content" required>
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
       
    @endcomponent
@endsection

@section('additional-scripts')
<script src="{{ asset('js/medium-editor.min.js') }}"></script>
    <script type="text/javascript">
        var textEditor = new MediumEditor('#editor',{
            buttonLabels : 'fontawesome'
        });
        textEditor.subscribe('editableInput', function(eventObj, editable){
            $('#article_content').val(textEditor.getContent());
        });
        function slugify(text)
        {

            return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
        }
        var articleTitle = document.getElementById('article_title');
        var slug = document.getElementById('article_slug')
        articleTitle.addEventListener('keyup',(e)=>{
            slug.value = slugify(articleTitle.value);
        });
        
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#category_id').select2({
            placeholder: "Please choose",
            tags:true,
            maximumSelectionLength:1
        });
    });
</script>
<script src="{{ asset('js/sweetalert2.js') }}"></script>
@include('components.dialog')
@endsection.