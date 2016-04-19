 <div class="row">
            <div class="col-xs-12">          
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data @yield('title')</h3>
                </div><!-- /.box-header -->
                   <div class="box-header">
                                      <div class="btn-group">
                                      <!--
                                      @yield('title-button')
                                         <a href="#"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                                      -->
                                      @yield('title-button')
                                      </div>
                                      <div class="btn-group">
                                        @yield('title-export')
                                     </div>
                                      
                    </div>
                <div class="box-body">
                  <table width="100%" id="{{ $id }}" class="table table-responsive table-bordered table-striped table-hover {{ $class }}">   
                  <colgroup>
                  @for ($i = 0; $i < count($columns); $i++)
                  <col class="con{{ $i }}" />
                  @endfor
                  </colgroup>
                    <thead>
                      <tr>
                      @foreach($columns as $i => $c)
                      <th align="center" valign="middle" class="head{{ $i }}">{{ $c }}</th>
                      @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $d)
                      <tr>
                      @foreach($d as $dd)
                      <td>{{ $dd }}</td>
                      @endforeach
                      </tr>
                      @endforeach                 
                    </tbody>                   
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

@if (!$noScript)
    @include('datatable::javascript', array('id'=> $id, 'class' => $class, 'options' => $options, 'callbacks' =>  $callbacks))
@endif