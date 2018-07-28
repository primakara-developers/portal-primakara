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