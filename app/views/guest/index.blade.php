@extends('layouts.guest')

@section('header')
  
   <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>Sip</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIP</b> Boyolali</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/dist/img/doctor.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">User Login</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets/dist/img/doctor.png" class="img-circle" alt="User Image">
                    <p>
                      Sistem Informasi Perizinan
                      <small>Boyolali, Maret 2016</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                      <div class="col-xs-12 text-center">
                      <a href="{{ URL::to('login') }}" class="btn btn-default btn-flat">Login</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             <!--  <li>
               <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
             </li> -->
            </ul>
          </div>
        </nav>

@stop

@section('content')

    <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>Perijinan Apotek</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>150</h3>
                  <p>Perijinan Puskesmas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Perijinan Klinik</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Perijinan Rumah Sakit</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">Lebih Lanjut <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
       {{--    <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right ranges">
                   
                      <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                      <li><a href="#" data-range='30'>30 Days</a></li>
                      <li><a href="#" data-range='60'>60 Days</a></li>
                      <li><a href="#" data-range='90'>90 Days</a></li>
                  
                  <li class="pull-left header"><i class="ion ion-stats-bars"></i> Chart Apotik </li>
                </ul>
                <div class="tab-content no-padding">
                 <div class="col-lg-12">
                  <div id="stats-container-apotek" width="100%" style="height: 250px;"></div>
                </div>
                </div>
              </div><!-- /.nav-tabs-custom -->
            </section>
            </div>

             <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right ranges">
                   
                      <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                      <li><a href="#" data-range='30'>30 Days</a></li>
                      <li><a href="#" data-range='60'>60 Days</a></li>
                      <li><a href="#" data-range='90'>90 Days</a></li>
                  
                  <li class="pull-left header"><i class="ion ion-stats-bars"></i> Chart Puskesmas </li>
                </ul>
                <div class="tab-content no-padding">
                 <div class="col-lg-12">
                  <div id="stats-container-puskesmas" width="100%" style="height: 250px;"></div>
                </div>
                </div>
              </div><!-- /.nav-tabs-custom -->
            </section>
            </div>

             <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right ranges">
                   
                      <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                      <li><a href="#" data-range='30'>30 Days</a></li>
                      <li><a href="#" data-range='60'>60 Days</a></li>
                      <li><a href="#" data-range='90'>90 Days</a></li>
                  
                  <li class="pull-left header"><i class="ion ion-stats-bars"></i> Chart Klinik </li>
                </ul>
                <div class="tab-content no-padding">
                 <div class="col-lg-12">
                  <div id="stats-container-klinik" width="100%" style="height: 250px;"></div>
                </div>
                </div>
              </div><!-- /.nav-tabs-custom -->
            </section>
            </div>

             <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right ranges">
                   
                      <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                      <li><a href="#" data-range='30'>30 Days</a></li>
                      <li><a href="#" data-range='60'>60 Days</a></li>
                      <li><a href="#" data-range='90'>90 Days</a></li>
                  
                  <li class="pull-left header"><i class="ion ion-stats-bars"></i> Chart Rumah Sakit </li>
                </ul>
                <div class="tab-content no-padding">
                 <div class="col-lg-12">
                  <div id="stats-container-rumahsakit" width="100%" style="height: 250px;"></div>
                </div>
                </div>
              </div><!-- /.nav-tabs-custom -->
            </section>
            </div> --}}
           <!--  <div class="row">
             <div class="col-md-12">
                 <h1>{{ $title }}</h1>
                 <hr>
                 <ul class="nav nav-pills ranges">
                     <li class="active"><a href="#" data-range='7'>7 Days</a></li>
                     <li><a href="#" data-range='30'>30 Days</a></li>
                     <li><a href="#" data-range='60'>60 Days</a></li>
                     <li><a href="#" data-range='90'>90 Days</a></li>
                 </ul>
             </div>
                     </div>
                     <div class="row">
             <div class="col-lg-12">
                 <div id="chart" style="height: 250px;"></div>
             </div>
                     </div>
                     <div class="row">
             <div class="col-lg-12">
                  <div id="line-chart" style="height: 300px;"><h3 style="text-align: center;">Waiting for you to choose the data you want to display</h3></div>
             <hr/>
             <button data-type="day">Day</button> | <button data-type="week">Week</button> | <button data-type="month">Month</button>
             </div>
                     </div> -->
        
@stop

@section('footer')

 <footer class="main-footer2">
        
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">Sistem Informasi Perizinan</a>.</strong> All rights reserved.

</footer>

@stop

@section('sidebar')

<aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->

      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

@stop

@section('scripts')

<script>
    $(function () {

        // Define the area for the spinner
        var spinTarget = document.getElementById('stats-container-apotek');

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            // Activate the spinner
            var spinner = new Spinner().spin(spinTarget);

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./apiApotek", // This is the URL to the API
                data: { days: days }
            })
                .done(function (data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function () {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                })
                .always(function () {
                    // No matter if request is successful or not, stop the spinner
                    spinner.stop();
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container-apotek',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            barColors: ['#2196F3'],
        });

       /* var chart = Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            LineColors: ['#3c8dbc'],
            hideHover: 'auto',
            resize: true
        });*/

        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);

            // Make things pretty to show which button/tab the user clicked
            el.parent().addClass('active');
            el.parent().siblings().removeClass('active');
        })
    });
</script>
<script>
    $(function () {

        // Define the area for the spinner
        var spinTarget = document.getElementById('stats-container-puskesmas');

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            // Activate the spinner
            var spinner = new Spinner().spin(spinTarget);

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./apiPuskesmas", // This is the URL to the API
                data: { days: days }
            })
                .done(function (data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function () {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                })
                .always(function () {
                    // No matter if request is successful or not, stop the spinner
                    spinner.stop();
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container-puskesmas',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            barColors: ['#388E3C'],
        });

       /* var chart = Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            LineColors: ['#3c8dbc'],
            hideHover: 'auto',
            resize: true
        });*/

        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);

            // Make things pretty to show which button/tab the user clicked
            el.parent().addClass('active');
            el.parent().siblings().removeClass('active');
        })
    });
</script>
<script>
    $(function () {

        // Define the area for the spinner
        var spinTarget = document.getElementById('stats-container-klinik');

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            // Activate the spinner
            var spinner = new Spinner().spin(spinTarget);

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./apiKlinik", // This is the URL to the API
                data: { days: days }
            })
                .done(function (data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function () {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                })
                .always(function () {
                    // No matter if request is successful or not, stop the spinner
                    spinner.stop();
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container-klinik',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            barColors: ['#FF9800'],
        });

       /* var chart = Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            LineColors: ['#3c8dbc'],
            hideHover: 'auto',
            resize: true
        });*/

        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);

            // Make things pretty to show which button/tab the user clicked
            el.parent().addClass('active');
            el.parent().siblings().removeClass('active');
        })
    });
</script>
<script>
    $(function () {

        // Define the area for the spinner
        var spinTarget = document.getElementById('stats-container-rumahsakit');

        // Create a function that will handle AJAX requests
        function requestData(days, chart) {
            // Activate the spinner
            var spinner = new Spinner().spin(spinTarget);

            $.ajax({
                type: "GET",
                dataType: 'json',
                url: "./apiRumahSakit", // This is the URL to the API
                data: { days: days }
            })
                .done(function (data) {
                    // When the response to the AJAX request comes back render the chart with new data
                    chart.setData(data);
                })
                .fail(function () {
                    // If there is no communication between the server, show an error
                    alert("error occured");
                })
                .always(function () {
                    // No matter if request is successful or not, stop the spinner
                    spinner.stop();
                });
        }

        var chart = Morris.Bar({
            // ID of the element in which to draw the chart.
            element: 'stats-container-rumahsakit',
            data: [0, 0], // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            barColors: ['#FF5252'],
        });

       /* var chart = Morris.Line({
            // ID of the element in which to draw the chart.
            element: 'stats-container',
            // Set initial data (ideally you would provide an array of default data)
            xkey: 'date', // Set the key for X-axis
            ykeys: ['value'], // Set the key for Y-axis
            labels: ['Pengunjung'], // Set the label when bar is rolled over
            LineColors: ['#3c8dbc'],
            hideHover: 'auto',
            resize: true
        });*/

        // Request initial data for the past 7 days:
        requestData(7, chart);

        $('ul.ranges a').click(function (e) {
            e.preventDefault();

            // Get the number of days from the data attribute
            var el = $(this);
            days = el.attr('data-range');

            // Request the data and render the chart using our handy function
            requestData(days, chart);

            // Make things pretty to show which button/tab the user clicked
            el.parent().addClass('active');
            el.parent().siblings().removeClass('active');
        })
    });
</script>
<script>
/*Morris.Bar({
  element: 'chart',
  data: [
    { date: '04-02-2014', value: 3 },
    { date: '04-03-2014', value: 10 },
    { date: '04-04-2014', value: 5 },
    { date: '04-05-2014', value: 17 },
    { date: '04-06-2014', value: 6 }
  ],
  xkey: 'date',
  ykeys: ['value'],
  labels: ['Orders']
});*/
</script>
<script>
/*  jQuery(function($) {


    $('button').on('click', function(e) {
        $('#line-chart').empty();
        var type = $(this).data('type')
    
        , month = [
                { y: '2012-06', a: 100, b: 90 },
                { y: '2012-07', a: 75,  b: 65 },
                { y: '2012-08', a: 50,  b: 40 },
                { y: '2012-09', a: 75,  b: 65 },
                { y: '2012-10', a: 50,  b: 40 },
                { y: '2012-11', a: 75,  b: 65 },
                { y: '2012-12', a: 100, b: 90 }
            ]
        
        , week = [
                { y: '2012 W1', a: 10, b: 20 },
                { y: '2012 W2', a: 50,  b: 10 },
                { y: '2012 W3', a: 40,  b: 80 },
                { y: '2012 W4', a: 90,  b: 25 },
                { y: '2012 W5', a: 10,  b: 20 },
                { y: '2012 W6', a: 35,  b: 60 },
                { y: '2012 W7', a: 8, b: 40 }
            ]
        
        , day = [
                { y: '2012-12-25', a: 20, b: 50 },
                { y: '2012-12-26', a: 30,  b: 30 },
                { y: '2012-12-27', a: 100, b: 10 },
                { y: '2012-12-28', a: 10,  b: 15 },
                { y: '2012-12-29', a: 80,  b: 60 },
                { y: '2012-12-30', a: 20,  b: 65 },
                { y: '2012-12-31', a: 5, b: 95 }
            ]
        , data = {
            month: month,
            week: week,
            day: day
            }
              
        , line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: data[type],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Price', 'Test'],
            lineColors: ['#3c8dbc', '#6c5b4c'],
            hideHover: 'auto'
        })
        ;
        
    });
    
});*/
</script>
@stop

