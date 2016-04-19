@if ($errors->count() > 0)
    <div class="alert alert-danger alert-dismissable" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         @foreach ($errors->all('<p><i class="icon fa fa-ban"></i>:message</p>') as $error)
            {{ $error }}
        @endforeach
    </div>
@endif