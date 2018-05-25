<!doctype html>
<html lang="{{ app()->getLocale() }}">
   @include('partials.head')
    <body>
        @include('partials.header')
        <main>
          <div class="container">
          @yield('content')
          </div>
        </main>
    </body>
</html>