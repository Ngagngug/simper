  
      <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- <div class="mailbox-controls">
                    Check all button
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> Check All
                  </div> -->
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>


                      @foreach ($data as $data)  
                        
                          {{-- The current value is {{ $i }} --}}
                          <tr>
                          <!-- <td><input type="checkbox" name="syarat[]" value="Syarat1"></td> -->
                          <td>{{ Form::checkbox('syarat'.$data->id, 'yes', true) }}</td>
                          <td class="mailbox-subject"><b> {{ $data->id.". ".$data->kelengkapan }} </b> </td>
                        </tr>
                                             
                      @endforeach
      
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->

  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
                      <div class="box-footer">
                          {{ Form::submitUI('Simpan') }}
                      </div>
</div>

<script>
    $(document).ready(function() {
        $("#perijinan_id").select2();
    });
</script>