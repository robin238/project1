<html>

<head>
	<style>
		:root {
		--blue: #007bff;
		--indigo: #6610f2;
		--purple: #6f42c1;
		--pink: #e83e8c;
		--red: #dc3545;
		--orange: #fd7e14;
		--yellow: #ffc107;
		--green: #28a745;
		--teal: #20c997;
		--cyan: #17a2b8;
		--white: #fff;
		--gray: #6c757d;
		--gray-dark: #343a40;
		--primary: #007bff;
		--secondary: #6c757d;
		--success: #28a745;
		--info: #17a2b8;
		--warning: #ffc107;
		--danger: #dc3545;
		--light: #f8f9fa;
		--dark: #343a40;
		--breakpoint-xs: 0;
		--breakpoint-sm: 576px;
		--breakpoint-md: 768px;
		--breakpoint-lg: 992px;
		--breakpoint-xl: 1200px;
		--font-family-sans-serif: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
		--font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
		}
		.contoh{
			background: var(--white)
		}
		.btn-edit {
			color: var(--white);
			background-color: var(--yellow);
			border-color: var(--yellow);
		}
		.btn-detail {
			color: var(--white);
			background-color: var(--blue);
			border-color: var(--blue);
		}
	</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/sidebar.css">
  
</head>

<body>
  <nav class="mnb navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <i class="ic fa fa-bars"></i>
        </button>
        <div style="padding: 15px 0;">
          <a href="#" id="msbo"><i class="ic fa fa-bars"></i></a>
        </div>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">En</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Draude Oba <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Settings</a></li>
              <li><a href="#">Upgrade</a></li>
              <li><a href="#">Help</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-bell-o"></i></a></li>
          <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
        </ul>
        <form class="navbar-form navbar-right">
          <input type="text" class="form-control" placeholder="Search...">
        </form>
      </div>
    </div>
  </nav>
  <!--msb: main sidebar-->
  <div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <div class="brand-wrapper">
          <!-- Brand -->
          <div class="brand-name-wrapper">
            <a class="navbar-brand" href="#">
              Bank Sampah Mutiara
            </a>
          </div>

        </div>

      </div>

      <!-- Main Menu -->
      <div class="side-menu-container">
        <ul class="nav navbar-nav">

          <li class="{{request()->path()=='dashboard' ? 'active' : ''}}">
            <a href="/dashboard">
              <i class="fa fa-dashboard"></i>
              Dashboard
            </a>
          </li>
          <li class="{{request()->path()=='nasabah' ? 'active' : ''}}">
            <a href="/nasabah">
              <i class="fa fa-puzzle-piece"></i>
              Nasabah
            </a>
          </li>
          <!-- Dropdown-->
          <li class="{{in_array(request()->path(),['pengajuan_sampah','pengajuan_emas']) ? 'active' : ''}}"  id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1" class="{{in_array(request()->path(),['pengajuan_sampah','pengajuan_emas']) ? 'active' : ''}}">
              <i class="fa fa-diamond"></i> Pengajuan
              <span class="caret"></span>
            </a>
            <!-- Dropdown level 1 -->

            <div id="dropdown-lvl1" class="panel-collapse {{in_array(request()->path(),['pengajuan_sampah','pengajuan_emas']) ? '' : 'collapse'}}">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li class="{{request()->path()=='pengajuan_sampah' ? 'active' : ''}}"><a href="/pengajuan_sampah">Pengajuan Sampah</a></li>
                  <li class="{{request()->path()=='pengajuan_emas' ? 'active' : ''}}"><a href="/pengajuan_emas">Pengajuan Emas</a></li>
                 

                  <!-- Dropdown level 2 -->
                  <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-lvl2">
                      <i class="glyphicon glyphicon-off"></i> Sub Level <span class="caret"></span>
                    </a>
                    <div id="dropdown-lvl2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <ul class="nav navbar-nav">
                          <li><a href="#">Link</a></li>
                          <li><a href="#">Link</a></li>
                          <li><a href="#">Link</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-signal"></span> Link</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
  </div>
  <!--main content wrapper-->
  <div class="mcw">
    <!--navigation here-->
    <!--main content view-->
    <div class="cv">
      @yield('content')
    </div>
  </div>

  <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <script>
    (function() {
      $('#msbo').on('click', function() {
        $('body').toggleClass('msb-x');
      });
    }());
  </script>
</body>

</html>