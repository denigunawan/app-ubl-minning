@extends('layouts.main')
@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="container position-relative">

        <div class="carousel-item active">
        <div class="carousel-container" style="color: white">
          <h2 style="color: white">Selamat Datang di EMining Analytics</h2>
          <p style="color: white" class="shadow">Optimalkan bisnis eCommerce Anda dengan wawasan mendalam dan analitik canggih. Tingkatkan keputusan bisnis dengan data real-time yang membantu Anda memahami pelanggan dan tren pasar.</p>
          <a href="{{route('login')}}" class="btn-get-started">Mulai Sekarang</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container" style="color: white">
          <h2 style="color: white">Jadikan Data Anda Lebih Berarti</h2>
          <p style="color: white">Dengan EMining, Anda tidak hanya mendapatkan data. Kami membantu Anda menganalisis pola pembelian, prediksi tren, dan menemukan peluang baru yang dapat meningkatkan penjualan eCommerce Anda.</p>
           <a href="{{route('about')}}" class="btn-get-started">Pelajari Lebih Lanjut</a>
        </div>
      </div><!-- End Carousel Item -->

      <div class="carousel-item">
        <div class="carousel-container" style="color: white">
          <h2>Analitik untuk Keputusan Bisnis yang Lebih Cerdas</h2>
          <p>Ingin meningkatkan konversi atau memahami perilaku pelanggan? Dapatkan data real-time yang membantu Anda membuat keputusan bisnis yang lebih cerdas dan meningkatkan profitabilitas toko online Anda.</p>
            <a href="{{route('mining-tool')}}" class="btn-get-started">Coba Sekarang</a>
        </div>
      </div><!-- End Carousel Item -->
          <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>

          <ol class="carousel-indicators"></ol>

        </div>

      </div>

    </section><!-- /Hero Section -->
@endsection
