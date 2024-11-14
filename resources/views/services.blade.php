@include('layouts.head')

<body class="services-page">
    @include('layouts.header')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container position-relative">
                <h1>Mining Tool</h1>
                <p>Aplikasi yang dirancang untuk memudahkan proses analisis dan pengolahan data dalam berbagai bidang
                    industri, menggunakan algoritma machine learning dan teknik mining terbaru.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{route('/')}}">Beranda</a></li>
                        <li class="current">Mining Tool</li>
                    </ol>
                </nav>
            </div>
        </div><!-- Akhir Judul Halaman -->


        <!-- Bagian Layanan Unggulan -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">

                    <!-- Regresi Linear -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <a href="{{route('regresi-liniear')}}" class="stretched-link">
                                <h3>Regresi Linear</h3>
                            </a>
                            <p>Digunakan untuk analisis prediktif, Regresi Linear memodelkan hubungan antara variabel
                                dependen dan satu atau lebih variabel independen.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- Decision Tree -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="bi bi-tree"></i>
                            </div>
                            <a href="{{route('decision-tree')}}" class="stretched-link">
                                <h3>Decision Tree</h3>
                            </a>
                            <p>Teknik klasifikasi yang membagi data menjadi cabang-cabang untuk mengambil keputusan
                                berdasarkan karakteristik data.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- K-Nearest Neighbors -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <a href="{{route('knearst-neighbors')}}" class="stretched-link">
                                <h3>K-Nearest Neighbors (KNN)</h3>
                            </a>
                            <p>Algoritma sederhana dan efektif untuk klasifikasi, KNN mengklasifikasikan data
                                berdasarkan kedekatannya dengan data lain yang sudah berlabel.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- Neural Networks -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <a href="{{route('neural-networks')}}" class="stretched-link">
                                <h3>Neural Networks</h3>
                            </a>
                            <p>Terinspirasi dari otak manusia, Neural Networks digunakan untuk tugas kompleks seperti
                                pengenalan gambar dan suara.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->
                </div>
                <br>
                <div class="row gy-4">

                    <!-- Support Vector Machine -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <div class="icon">
                                <i class="bi bi-arrow-bar-right"></i>
                            </div>
                            <a href="{{route('support-vector-machine')}}" class="stretched-link">
                                <h3>Support Vector Machine (SVM)</h3>
                            </a>
                            <p>Algoritma klasifikasi populer yang mencari hyperplane yang memisahkan data dari berbagai
                                kelas dengan baik.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- Naive Bayes -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-orange position-relative">
                            <div class="icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <a href="{{route('naive-bayes')}}" class="stretched-link">
                                <h3>Naive Bayes</h3>
                            </a>
                            <p>Algoritma probabilistik yang ideal untuk klasifikasi teks, Naive Bayes didasarkan pada
                                teorema Bayes dengan asumsi kuat akan independensi fitur.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- K-Means Clustering -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <div class="icon">
                                <i class="bi bi-pentagon-fill"></i>
                            </div>
                            <a href="{{route('kmeans-clustering')}}" class="stretched-link">
                                <h3>K-Means Clustering</h3>
                            </a>
                            <p>Algoritma pembelajaran tak terawasi yang mengelompokkan data berdasarkan kemiripan,
                                digunakan dalam segmentasi pelanggan dan kompresi gambar.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->

                    <!-- Random Forest -->
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <div class="icon">
                                <i class="bi bi-diagram-2"></i>
                            </div>
                            <a href="{{route('random-forest')}}" class="stretched-link">
                                <h3>Random Forest</h3>
                            </a>
                            <p>Metode ensemble yang kuat, membangun banyak decision tree dan mengombinasikan hasilnya,
                                mengurangi overfitting dan meningkatkan akurasi.</p>
                        </div>
                    </div><!-- Akhir Item Layanan -->
                </div>
            </div>
        </section><!-- /Bagian Layanan Unggulan -->

    </main>
    @include('layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>
    @include('layouts.script')
</body>

</html>
