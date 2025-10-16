
<!DOCTYPE HTML>
<html>

<head>
  <title>black &amp; white</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link href="{{ asset('style/style.css') }}" rel="stylesheet" />
</head>

<body>
  <div id="main">
    <!-- header -->
    @include('layout.header')
    @yield('header')
    <!-- end header -->
    <div id="site_content">
        <!-- sidebar -->
        @include('layout.sidebar')  
        <!-- end sidebar -->
        <!-- content -->
        @yield('content')
        <!-- end content -->
    </div>
    <div id="content_footer"></div>
    <!-- footer -->
    @include('layout.footer')
    <!-- end footer -->
  </div>
</body>
</html>
