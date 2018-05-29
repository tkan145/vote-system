<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('includes.head')
  <body>
    @include('includes.admin-header')
    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          @include('includes.sidebar')
        </nav>
        <main role="main" class="col12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          @yield('content')
        </main>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <footer class="footer">
      @include('includes.footer')
    </footer>
  </body>
</html>