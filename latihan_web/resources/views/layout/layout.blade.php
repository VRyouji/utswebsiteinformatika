<!-- call layout -->
@extends('layout.default')
<!-- content -->
@section('main_content')

<body>
    <!-- ini header -->
     <header>@yield('header_content')</header>
     <!-- main -->
      <main>
        @yield('main_content')
      </main>
     <!-- ini footer -->
      <footer>@yield('footer_content','default footer text')</footer>
</body>

@endsection