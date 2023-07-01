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
      
      --dk-gray-100: #F3F4F6;
	    --dk-gray-200: #E5E7EB;
    	--dk-gray-300: #D1D5DB;
    	--dk-gray-400: #9CA3AF;
      --dk-gray-500: #6B7280;
      --dk-gray-600: #4B5563;
      --dk-gray-700: #374151;
      --dk-gray-800: #1F2937;
      --dk-gray-900: #111827;
      --dk-dark-bg: #313348;
      --dk-darker-bg: #2a2b3d;
      --navbar-bg-color: #6f6486;
      --sidebar-bg-color: #252636;
      --sidebar-width: 250px;

      --breakpoint-xs: 0;
      --breakpoint-sm: 576px;
      --breakpoint-md: 768px;
      --breakpoint-lg: 992px;
      --breakpoint-xl: 1200px;
      --font-family-sans-serif: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    }

    .contoh {
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

    .dk-dark-bg{
      background-color: var(--dk-dark-bg)!important; 
      color:var(--dk-dark-bg)!important; 
    }

    .dk-darker-bg{
      background-color: var(--dk-darker-bg)!important; 
    }

    
    .dk-gray-400{
      background-color: var(--dk-gray-400)!important; 
    }

    .btn-edit {
			color: var(--white)!important;
			background-color: var(--navbar-bg-color)!important;
			border-color: var(--dk-darker-bg)!important;
		}
		.btn-detail {
			color: var(--white)!important;
			background-color: var(--navbar-bg-color)!important;
			border-color: var(--dk-darker-bg)!important;
		}
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  <link rel="stylesheet" href="/css/sidebar.css">
</head>

<body>

  <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
      <img class="rounded-pill img-fluid" width="65" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
      <div class="ms-2">
        <h5 class="fs-6 mb-0">
          <a class="text-decoration-none" href="#">Azriel</a>
        </h5>
        <p class="mt-1 mb-0">Hello and welcome Azriel!.</p>
      </div>
    </div>

    <div class="search position-relative text-center px-4 py-3 mt-2">
      <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here" style="color: var(--white)">
      <i class="fa fa-search position-absolute d-block fs-6"></i>
    </div>

    <ul class="categories list-unstyled">
      <li class="">
        <i class="uil-estate fa-fw"></i><a href="/dashboard"> Dashboard</a>
        <!-- <ul class="sidebar-dropdown list-unstyled">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul> -->
      </li>

      <li class="has-dropdown opened">
        <i class="uil-estate"></i><a href="#"> Pengajuan</a>
        <ul class="sidebar-dropdown {{in_array(request()->path(),['pengajuan_sampah','pengajuan_emas']) ? 'active' : ''}} list-unstyled">
          <li class=""><a href="/pengajuan_sampah">Pengajuan Sampah</a></li>
          <li><a href="/pengajuan_emas">Pengajuan Emas</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <i class="uil-envelope-download fa-fw"></i><a href="#"> Mailbox</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <i class="uil-shopping-cart-alt"></i><a href="#"> Ecommerce</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <i class="uil-bag"></i><a href="#"> Projects</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="">
        <i class="uil-setting"></i><a href="#"> Settings</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <i class="uil-chart-pie-alt"></i><a href="#"> Components</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="has-dropdown">
        <i class="uil-panel-add"></i><a href="#"> Charts</a>
        <ul class="sidebar-dropdown list-unstyled">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">ipsum dolor</a></li>
          <li><a href="#">dolor ipsum</a></li>
          <li><a href="#">amet consectetur</a></li>
          <li><a href="#">ipsum dolor sit</a></li>
        </ul>
      </li>
      <li class="">
        <i class="uil-map-marker"></i><a href="#"> Maps</a>
      </li>
    </ul>
  
  </aside>

  <section id="wrapper">
    <nav class="navbar navbar-expand-md">
      <div class="container-fluid mx-2">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="uil-bars text-white"></i>
          </button>
          <a class="navbar-brand" href="#">Bank Sampah<span class="main-color"> Mutiara</span></a>
        </div>
        <div class="collapse navbar-collapse" id="toggle-navbar">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Settings
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="#">My account</a>
                </li>
                <li><a class="dropdown-item" href="#">My inbox</a>
                </li>
                <li><a class="dropdown-item" href="#">Help</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="uil-comments-alt"></i><span>23</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="uil-bell"></i><span>98</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i data-show="show-side-navigation1" class="uil-bars show-side-btn"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="p-4">
      @yield('content')
    </div>
   
  </section>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
  <script>
    function $(selector) {
      return document.querySelector(selector)
    }

    function find(el, selector) {
      let finded
      return (finded = el.querySelector(selector)) ? finded : null
    }

    function siblings(el) {
      const siblings = []
      for (let sibling of el.parentNode.children) {
        if (sibling !== el) {
          siblings.push(sibling)
        }
      }
      return siblings
    }
    const showAsideBtn = $('.show-side-btn')
    const sidebar = $('.sidebar')
    const wrapper = $('#wrapper')
    showAsideBtn.addEventListener('click', function() {
      $(`#${this.dataset.show}`).classList.toggle('show-sidebar')
      wrapper.classList.toggle('fullwidth')
    })
    if (window.innerWidth < 767) {
      sidebar.classList.add('show-sidebar');
    }
    window.addEventListener('resize', function() {
      if (window.innerWidth > 767) {
        sidebar.classList.remove('show-sidebar')
      }
    })
    // dropdown menu in the side nav
    var slideNavDropdown = $('.sidebar-dropdown');
    $('.sidebar .categories').addEventListener('click', function(event) {
      // event.preventDefault()
      const item = event.target.closest('.has-dropdown')
      if (!item) {
        return
      }
      item.classList.toggle('opened')
      siblings(item).forEach(sibling => {
        sibling.classList.remove('opened')
      })
      if (item.classList.contains('opened')) {
        const toOpen = find(item, '.sidebar-dropdown')
        if (toOpen) {
          toOpen.classList.add('active')
        }
        siblings(item).forEach(sibling => {
          const toClose = find(sibling, '.sidebar-dropdown')
          if (toClose) {
            toClose.classList.remove('opened')
          }
        })
      } else {
        find(item, '.sidebar-dropdown').classList.toggle('active')
      }
    })
    $('.sidebar .close-aside').addEventListener('click', function() {
      $(`#${this.dataset.close}`).classList.add('show-sidebar')
      wrapper.classList.remove('margin')
    })
    // Global defaults
    Chart.defaults.global.animation.duration = 2000; // Animation duration
    Chart.defaults.global.title.display = false; // Remove title
    Chart.defaults.global.defaultFontColor = '#71748c'; // Font color
    Chart.defaults.global.defaultFontSize = 13; // Font size for every label
    // Tooltip global resets
    Chart.defaults.global.tooltips.backgroundColor = '#111827'
    Chart.defaults.global.tooltips.borderColor = 'blue'
    // Gridlines global resets
    Chart.defaults.scale.gridLines.zeroLineColor = '#3b3d56'
    Chart.defaults.scale.gridLines.color = '#3b3d56'
    Chart.defaults.scale.gridLines.drawBorder = false
    // Legend global resets
    Chart.defaults.global.legend.labels.padding = 0;
    Chart.defaults.global.legend.display = false;
    // Ticks global resets
    Chart.defaults.scale.ticks.fontSize = 12
    Chart.defaults.scale.ticks.fontColor = '#71748c'
    Chart.defaults.scale.ticks.beginAtZero = false
    Chart.defaults.scale.ticks.padding = 10
    // Elements globals
    Chart.defaults.global.elements.point.radius = 0
    // Responsivess
    Chart.defaults.global.responsive = true
    Chart.defaults.global.maintainAspectRatio = false
    // The bar chart
    var myChart = new Chart(document.getElementById('myChart'), {
      type: 'bar',
      data: {
        labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
        datasets: [{
          label: "Lost",
          data: [45, 25, 40, 20, 60, 20, 35, 25],
          backgroundColor: "#0d6efd",
          borderColor: 'transparent',
          borderWidth: 2.5,
          barPercentage: 0.4,
        }, {
          label: "Succes",
          startAngle: 2,
          data: [20, 40, 20, 50, 25, 40, 25, 10],
          backgroundColor: "#dc3545",
          borderColor: 'transparent',
          borderWidth: 2.5,
          barPercentage: 0.4,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {},
            ticks: {
              stepSize: 15,
            },
          }],
          xAxes: [{
            gridLines: {
              display: false,
            }
          }]
        }
      }
    })
    // The line chart
    var chart = new Chart(document.getElementById('myChart2'), {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", 'May', 'June', 'August', 'September'],
        datasets: [{
          label: "My First dataset",
          data: [4, 20, 5, 20, 5, 25, 9, 18],
          backgroundColor: 'transparent',
          borderColor: '#0d6efd',
          lineTension: .4,
          borderWidth: 1.5,
        }, {
          label: "Month",
          data: [11, 25, 10, 25, 10, 30, 14, 23],
          backgroundColor: 'transparent',
          borderColor: '#dc3545',
          lineTension: .4,
          borderWidth: 1.5,
        }, {
          label: "Month",
          data: [16, 30, 16, 30, 16, 36, 21, 35],
          backgroundColor: 'transparent',
          borderColor: '#f0ad4e',
          lineTension: .4,
          borderWidth: 1.5,
        }]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false
            },
            ticks: {
              stepSize: 12,
            }
          }],
          xAxes: [{
            gridLines: {
              display: false,
            },
          }]
        }
      }
    })
    var chart = document.getElementById('chart3');
    var myChart = new Chart(chart, {
      type: 'line',
      data: {
        labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
        datasets: [{
            label: "Lost",
            lineTension: 0.2,
            borderColor: '#d9534f',
            borderWidth: 1.5,
            showLine: true,
            data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
            backgroundColor: 'transparent'
          }, {
            label: "Lost",
            lineTension: 0.2,
            borderColor: '#5cb85c',
            borderWidth: 1.5,
            data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
            backgroundColor: 'transparent'
          },
          {
            label: "Lost",
            lineTension: 0.2,
            borderColor: '#f0ad4e',
            borderWidth: 1.5,
            data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
            backgroundColor: 'transparent'
          },
          {
            label: "Lost",
            lineTension: 0.2,
            borderColor: '#337ab7',
            borderWidth: 1.5,
            data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
            backgroundColor: 'transparent'
          }
        ]
      },
      options: {
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false
            },
            ticks: {
              stepSize: 12
            }
          }],
          xAxes: [{
            gridLines: {
              display: false,
            },
          }],
        }
      }
    })
  </script>
</body>

</html>