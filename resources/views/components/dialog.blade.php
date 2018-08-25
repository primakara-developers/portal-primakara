@if($errors->any())
<script type="text/javascript">
    $(function(){
        swal(
            'Oops Something Is Wrong',
            '{{ $errors->first() }}',
            'error'
        )
    })
</script>
@endif

@if(session('msg'))
<script type="text/javascript">
    $(function(){
        swal(
            'Operation Succed',
            '{{ session("msg") }}',
            'success'
        )
    })
</script>
@endif

@if(session('hasArticles'))
<script type="text/javascript">

    (function(){
        swal({
            title: "Warning",
            text:"{{ session('hasArticles') }}",
            type:"warning",
            showCancelButton: true,
            confirmButtonColor: "#dd6b55",
            confirmButtonText:"show me!",
            // closeOnConfirm: false
        })
        .then(()=>{
            window.location.href = "{{ route('admin.article.filter', ['id'=> session('category_id')]) }}";
        })
    })();
</script>
@endif