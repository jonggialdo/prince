@if (session('success'))
    <div class="alert alert-success alert-dismissible"  id="close">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> {{ session ('success') }}</h4>
    </div>
   
@endif

@if (session('danger'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-times-circle"></i> {{ session ('danger') }}</h4>
    </div>
@endif

<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $("#close").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 5000);
 
});
</script>