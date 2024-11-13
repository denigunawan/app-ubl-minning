<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

  <main>
    <div class="container">

      <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="{{route('/')}}">Back to home</a>
        <img src="assets/img/not-found.svg" class="img-fluid py-5 rounded" alt="Page Not Found">
        <div class="credits">
          Designed by <a href="{{route('/')}}">Apps EMining Analytics</a>
        </div>
      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.script')

</body>

</html>
