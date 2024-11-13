<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EmA - E Mining Analytic</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page" style="background-color: black; background-image: url('assets/img/hero-bg.jpg'); background-size: cover; background-position: center;">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('/')}}" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" class="rounded">
        <h1 class="sitename">EMining</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main" style="background-color: black; background-image: url('assets/img/hero-bg.jpg'); padding-top: 100px;">
    <!-- Card Register Section -->
    <section id="register" class="section" style="background-color: black;background-image: url('assets/img/hero-bg.jpg');">
      <div class="container" >
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card" style="border-radius: 10px;">
                <div class="card-body">
                  <!-- Gambar logo di tengah -->
                  <div class="text-center mb-4">
                    <img src="assets/img/logo.png" alt="Logo" class="rounded" width="50" height="50">
                  </div>

                  <h2 class="text-center">Pendaftaran System EMining!</h2><br>
                  <p class="text-center text-muted" style="color: black;">
                    Masukkan Data Kamu dan Mulai Manfaatkan Semua Fitur Canggih Kami!
                  </p><br>

                  <form action="#" method="POST">
                    <div class="mb-3">
                      <label for="name" class="form-label" style="color:  rgba(0, 0, 0, 0.406);">Nama Lengkap</label>
                      <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label" style="color: rgba(0, 0, 0, 0.406);">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label" style="color:  rgba(0, 0, 0, 0.406);">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required>
                    </div>
                    <div class="mb-3">
                      <label for="confirm-password" class="form-label" style="color:  rgba(0, 0, 0, 0.406);">Konfirmasi Password</label>
                      <input type="password" class="form-control" id="confirm-password" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-secondary rounded">Register</button>
                    </div>
                  </form>
                </div>
              </div>

          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer" style="background-color: black;background-image: url('assets/img/hero-bg.jpg');">
    <div class="container copyright text-center mt-4" style="color: white">
      <p style="color: white">© <span>Copyright</span> <strong class="px-1 sitename">Deni Gunawan</strong> <span><br>Apps Minning Analytic<hr></span></p>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
