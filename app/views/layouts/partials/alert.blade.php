@if (Session::has('successMessage'))
    <div class="alert alert-success alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <p><i class="icon fa fa-check"></i> {{ Session::get('successMessage') }}</p>
	</div>
@elseif (Session::has('errorMessage'))
   <div class="alert alert-danger alert-dismissable" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p><i class="icon fa fa-ban"></i> {{ Session::get('errorMessage') }} </p>
    </div>
@endif
