<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>iHospital</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    @yield('css')
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- // <script src="js/datepicker.js"></script> -->
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/locales/bootstrap-datepicker.th.js"></script>
    <script src="js/bootstrap-datepicker-thai.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h3><a href="{{ url('/') }}">iHospital</a></h3>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">{{ Auth::user()->name }} &nbsp; {{ Auth::user()->lastname }}</a></li>
            <li><a href="#">ข้อมูลส่วนตัว</a></li>
            <li><a href="{{ url('/logout') }}">ออกจากระบบ</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="{{ Request::is('addPatient') ? 'active' : '' }}">
              <a href="{{ url('/addPatient') }}">ลงทะเบียนผู้ป่วยใหม่<span class="sr-only">(current)</span></a>
            </li>
            <li class="{{ Request::is('createAppointmentForPatient') ? 'active' : '' }}">
              <a href="{{ url('/createAppointmentForPatient') }}">สร้างนัดหมาย</a>
            </li>
            <li class="{{ Request::is('manageAppointmentForPatient') ? 'active' : '' }}">
              <a href="{{ url('/manageAppointmentForPatient') }}">จัดการการนัดหมาย</a>
            </li>
            <li class="{{ Request::is('importDoctorSchedule') ? 'active' : '' }}">
              <a href="{{ url('importDoctorSchedule') }}">นำเข้าตารางการออกตรวจ</a>
            </li>
            <li class="{{ Request::is('') ? 'active' : '' }}">
              <a href="{{ url('#') }}">ยกเลิกตารางการออกตรวจ</a>
            </li>
            <li class="{{ Request::is('addStaffByStaff') ? 'active' : '' }}">
              <a href="{{ url('/addStaffByStaff') }}">เพิ่มบุคลากร</a>
            </li>
            <li class="{{ Request::is('manageStaffByStaff') ? 'active' : '' }}">
              <a href="{{ url('/manageStaffByStaff') }}">จัดการบุคลากร</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @yield('content')
        </div>
      </div>
    </div>
  </body>
</html>
