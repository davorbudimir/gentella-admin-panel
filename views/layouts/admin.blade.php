<!DOCTYPE html>
<html lang="en">

<head>@section('head')
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | @yield('title')</title>

  <!-- Bootstrap core CSS -->

  <link href="{{{ asset('administrator/css/bootstrap.min.css') }}}" rel="stylesheet">
  <link href="{{{ asset('administrator/fonts/css/font-awesome.min.css') }}}" rel="stylesheet">
  <link href="{{{ asset('administrator/css/animate.min.css') }}}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{{ asset('administrator/css/custom.css') }}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{{ asset('administrator/css/maps/jquery-jvectormap-2.0.3.css') }}}" />
  <link href="{{{ asset('administrator/css/icheck/flat/green.css') }}}" rel="stylesheet" />
  <link href="{{{ asset('administrator/css/floatexamples.css') }}}" rel="stylesheet" type="text/css" />

  <script src="{{{ asset('administrator/js/jquery.min.js') }}}"></script>
  <script src="{{{ asset('administrator/js/nprogress.js') }}}"></script>


  <!-- OVAJ DIO UBACITI NA calendar.blade.php -->
  <link href="{{{ asset('administratorjs/datatables/jquery.dataTables.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('administratorjs/datatables/buttons.bootstrap.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('administratorjs/datatables/fixedHeader.bootstrap.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('administratorjs/datatables/responsive.bootstrap.min.css') }}}" rel="stylesheet" type="text/css" />
  <link href="{{{ asset('administratorjs/datatables/scroller.bootstrap.min.css') }}}" rel="stylesheet" type="text/css" />
  
  <!-- OVAJ DIO UBACITI NA other_charts.blade.php -->
   <link rel="stylesheet" type="text/css" href="{{{ asset('administrator/css/maps/jquery-jvectormap-2.0.3.css') }}}" />



  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@show
</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="{{ URL::route('index') }}" class="site_title"><i class="fa fa-paw"></i> <span>EShopper!</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('administratorPanel') }}">Dashboard</a>
                    </li>
                    <li><a href="{{ URL::route('administratorPanel2') }}">Dashboard2</a>
                    </li>
                    <li><a href="{{ URL::route('administratorPanel3') }}">Dashboard3</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Store Products <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('getAdminProducts') }}">All Products</a></li>
                    <li><a href="{{ URL::route('createProductForm2') }}">Create Product</a></li>
                    <li><a href="{{ URL::route('getAdminCategories') }}">Category Manager</a></li>
                    <li><a href="{{ URL::route('getAdminSubcategories') }}">Subcategory Manager</a></li>
                    <li><a href="{{ URL::route('getAdminBrands') }}">Brand Manager</a></li>
                    <li><a href="{{ URL::route('getAdminParameters') }}">Parameter Manager</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('form') }}">General Form</a>
                    </li>
                    <li><a href="{{ URL::route('form_advanced') }}">Advanced Components</a>
                    </li>
                    <li><a href="{{ URL::route('form_validation') }}">Form Validation</a>
                    </li>
                    <li><a href="{{ URL::route('form_wizzard') }}">Form Wizard</a>
                    </li>
                    <li><a href="{{ URL::route('form_upload') }}">Form Upload</a>
                    </li>
                    <li><a href="{{ URL::route('form_buttons') }}">Form Buttons</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('general_elements') }}">General Elements</a>
                    </li>
                    <li><a href="{{ URL::route('media_gallery') }}">Media Gallery</a>
                    </li>
                    <li><a href="{{ URL::route('typography') }}">Typography</a>
                    </li>
                    <li><a href="{{ URL::route('icons') }}">Icons</a>
                    </li>
                    <li><a href="{{ URL::route('glyphicons') }}">Glyphicons</a>
                    </li>
                    <li><a href="{{ URL::route('widgets') }}">Widgets</a>
                    </li>
                    <li><a href="{{ URL::route('invoice') }}">Invoice</a>
                    </li>
                    <li><a href="{{ URL::route('inbox') }}">Inbox</a>
                    </li>
                    <li><a href="{{ URL::route('calendar') }}">Calendar</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('tables') }}">Tables</a>
                    </li>
                    <li><a href="{{ URL::route('tables_dynamic') }}">Table Dynamic</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('chartjs') }}">Chart JS</a>
                    </li>
                    <li><a href="{{ URL::route('chartjs2') }}">Chart JS2</a>
                    </li>
                    <li><a href="{{ URL::route('morisjs') }}">Moris JS</a>
                    </li>
                    <li><a href="{{ URL::route('echartjs') }}">ECharts </a>
                    </li>
                    <li><a href="{{ URL::route('other_charts') }}">Other Charts </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('ecommerce') }}">E-commerce</a>
                    </li>
                    <li><a href="{{ URL::route('projects') }}">Projects</a>
                    </li>
                    <li><a href="{{ URL::route('project_detail') }}">Project Detail</a>
                    </li>
                    <li><a href="{{ URL::route('contacts') }}">Contacts</a>
                    </li>
                    <li><a href="{{ URL::route('profile') }}">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ URL::route('page_404') }}">404 Error</a>
                    </li>
                    <li><a href="{{ URL::route('page_500') }}">500 Error</a>
                    </li>
                    <li><a href="{{ URL::route('plain_page') }}">Plain Page</a>
                    </li>
                    <li><a href="{{ URL::route('login') }}">Login Page</a>
                    </li>
                    <li><a href="{{ URL::route('pricing_tables') }}">Pricing Tables</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="#level1_1">Level One</a>
                      <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none">
                          <li class="sub_menu"><a href="level2.html">Level Two</a>
                          </li>
                          <li><a href="#level2_1">Level Two</a>
                          </li>
                          <li><a href="#level2_2">Level Two</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#level1_2">Level One</a>
                      </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="">Davor Budimir
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>
              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="{{{ asset('administrator/images/img.jpg') }}}" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

        @yield('content')
 


      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>
    
    @yield('javascript')
  <script src="{{{ asset('administrator/js/bootstrap.min.js') }}}"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="{{{ asset('administrator/js/gauge/gauge.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/gauge/gauge_demo.js') }}}"></script>
  <!-- bootstrap progress js -->
  <script src="{{{ asset('administrator/js/progressbar/bootstrap-progressbar.min.js') }}}"></script>
  <!-- icheck -->
  <script src="{{{ asset('administrator/js/icheck/icheck.min.js') }}}"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="{{{ asset('administrator/js/moment/moment.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/datepicker/daterangepicker.js') }}}"></script>
  <!-- chart js -->
  <script src="{{{ asset('administrator/js/chartjs/chart.min.js') }}}"></script>

  <script src="{{{ asset('administrator/js/custom.js') }}}"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.pie.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.orderBars.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.time.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/date.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.spline.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.stack.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/curvedLines.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/flot/jquery.flot.resize.js') }}}"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="{{{ asset('administrator/js/maps/jquery-jvectormap-2.0.3.min.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/maps/gdp-data.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/maps/jquery-jvectormap-world-mill-en.js') }}}"></script>
  <script type="text/javascript" src="{{{ asset('administrator/js/maps/jquery-jvectormap-us-aea-en.js') }}}"></script>
  <!-- pace -->
  <script src="{{{ asset('administrator/js/pace/pace.min.js') }}}"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="{{{ asset('administrator/js/skycons/skycons.min.js') }}}"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>



  <!-- Doughnut Chart -->
  <script>
    $('document').ready(function() {
      var options = {
        legend: false,
        responsive: false
      };

      new Chart(document.getElementById("canvas1"), {
        type: 'doughnut',
        tooltipFillColor: "rgba(51, 51, 51, 0.55)",
        data: {
          labels: [
            "Symbian",
            "Blackberry",
            "Other",
            "Android",
            "IOS"
          ],
          datasets: [{
            data: [15, 20, 30, 10, 30],
            backgroundColor: [
              "#BDC3C7",
              "#9B59B6",
              "#E74C3C",
              "#26B99A",
              "#3498DB"
            ],
            hoverBackgroundColor: [
              "#CFD4D8",
              "#B370CF",
              "#E95E4F",
              "#36CAAB",
              "#49A9EA"
            ]
          }]
        },
        options: options
      });
    });
  </script>
  <!-- /Doughnut Chart -->
  
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Submit',
          cancelLabel: 'Clear',
          fromLabel: 'From',
          toLabel: 'To',
          customRangeLabel: 'Custom',
          daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
          monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->

</body>

</html>