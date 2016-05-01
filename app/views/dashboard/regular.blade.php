@section('title')
	{{ $title }}
@stop

@section('breadcrumb')
       <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard Petugas</a></li>
            <li class="active">{{ $title }}</li>
      </ol>
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
            </div>
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


