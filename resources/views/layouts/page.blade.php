<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  @include('includes.head')
</head>
<body>
  <header>
    @include('includes.header')
  </header>
  <div class="container">
    <main>
      @yield('content')
    </main>

  </div>
  <footer class="footer">
    @include('includes.footer')
  </footer>
</body>
</html>