
<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DEE9B3QZ66"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-DEE9B3QZ66');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MFXWSC5');</script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="qd1Sl3ASzGRmQzz8CkQdFonfHGcU_D9aLIjSkVJ8Cg4" />

    <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]function(){(c[a].q=c[a].q[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "g8g0172zsy");
  </script>

  <link rel="canonical" href="http://getleadcrm.com/" />
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Getlead Backend</title>
    <meta name="description" content="Getlead|CMS">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{ Html::style('styles/bootstrap.min.css') }}
    {{ Html::style('styles/shards-dashboards.1.3.1.min.css') }}
    {{ Html::style('styles/extras.1.3.1.min.css') }}
    {{ Html::style('styles/responsive.dataTables.min.css') }}
    {{ Html::style('styles/custom.css') }}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @yield('css')
  </head>
  <body class="h-100">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFXWSC5"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="{{ url('/admin/dashboard') }}" style="line-height: 25px; padding-left: 21%;">
                <div class="d-table m-auto">
                    {{ HTML::image('logos/getlead.jpg', 'logo', array('class' => 'logo-class')) }}
                  <span class="d-none d-md-inline ml-1">Getlead Backend </span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <h6 class="main-sidebar__nav-title">Dashboards</h6>
            <h6 class="main-sidebar__nav-title">Site Settings</h6>
            <ul class="nav nav--no-borders flex-column">
              <li class="nav-item">
                <a class="nav-link " href="{{ route('get-contact-us') }}">
                    {{-- <i class="material-icons">group</i> --}}
                    {{ HTML::image('logos/user.png', 'logo', array('class' => 'logo-class')) }}
                    <span>Leads</span>
                </a>
            </li>
               
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('client.get-data') }}">
                        {{-- <i class="material-icons">person</i> --}}
                        {{ HTML::image('logos/public-relation.png', 'logo', array('class' => 'logo-class')) }}
                        <span>Clients</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('get-blog-page') }}">
                        {{-- <i class="material-icons">chat</i> --}}
                        {{ HTML::image('logos/blogging.png', 'logo', array('class' => 'logo-class')) }}
                        <span>Blog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('get-faq-data') }}">
                        {{-- <i class="material-icons">quiz</i> --}}
                        {{ HTML::image('logos/faq.png', 'logo', array('class' => 'logo-class')) }}
                        <span>FAQ</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('article-page') }}">
                        {{-- <i class="material-icons">live_help</i> --}}
                        {{ HTML::image('logos/question.png', 'logo', array('class' => 'logo-class')) }}
                        <span>Help Center</span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{ route('testimonial.get-data') }}">
                      {{-- <i class="material-icons">edit</i> --}}
                      {{ HTML::image('logos/testimonials.png', 'logo', array('class' => 'logo-class')) }}
                      <span>Testimonials</span>
                  </a>
                  </li>
               
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                  <i class="material-icons">&#xE7FD;</i>
                  <span>User Account</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                  <a class="dropdown-item " href="{{ route('get-profile-page') }}">User Profile</a>
                </div>
              </li> --}}
            </ul>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">

              </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ Html::image('dummy/dummy-user.png','',array('class'=>'user-avatar rounded-circle mr-2')) }}<span class="d-none d-md-inline-block"><b>{{Auth::user()->name}}</b></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="{{ url('/admin/dashboard') }}"><i class="material-icons">&#xe88a;</i> Home</a>
                    <a class="dropdown-item" href="{{ route('get-profile-page') }}"><i class="material-icons">&#xE7FD;</i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('log-out') }}">
                      <i class="material-icons text-danger">&#xE879;</i> Logout </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-sm-inline d-md-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div> <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4 mb-4">
            @yield('code')
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2024 Getlead | CMS</span>
          </footer>
        </main>
      </div>
    </div>

    {{ Html::script('scripts/jquery-3.3.1.min.js') }}
    {{ Html::script('scripts/popper.min.js') }}
    {{ Html::script('scripts/bootstrap.min.js') }}
    {{ Html::script('scripts/Chart.min.js') }}
    {{ Html::script('scripts/shards.min.js') }}
    {{ Html::script('scripts/jquery.sharrre.min.js') }}
    {{ Html::script('scripts/extras.1.3.1.min.js') }}
    {{ Html::script('scripts/shards-dashboards.1.3.1.min.js') }}
    {{ Html::script('scripts/jquery.dataTables.min.js') }}
    {{ Html::script('scripts/dataTables.responsive.min.js') }}
    {{ Html::script('scripts/toastr.min.js') }}
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript">
        $(function () {
        toastr.options = {
            "positionClass": "toast-top-right custom-position",
            "showDuration": "300000",
            "hideMethod": "fadeOut"
            }
        });
    </script>
    @yield('script')
  </body>
</html>
