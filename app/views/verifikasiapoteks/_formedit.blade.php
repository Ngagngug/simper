  
      <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- <div class="mailbox-controls">
                    Check all button
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> Check All
                  </div> -->
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                      
                        @for($i=0;$i<count($data);$i++)
                          <tr>
                          <!-- <td><input type="checkbox" name="syarat[]" value="Syarat1"></td> -->
                          <td>{{ Form::checkbox('syarat'.$i, 'yes', true) }}</td>
                          <td class="mailbox-subject"><b> {{ $data[$i]->id.". ".$data[$i]->kelengkapan }} </b> </td>
                        </tr>
                       @endfor
  
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