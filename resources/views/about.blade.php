    @include('layouts.head')

    <body class="about-page">
        @include('layouts.header')

        <main class="main">

            <!-- Page Title -->
            <div class="page-title dark-background">
                <div class="container position-relative">
                    <h1>Tentang EMining</h1>
                </div>
            </div><!-- End Page Title -->

            <!-- About Section -->
            <section id="about" class="about section">

                <div class="container">

                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/about.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox pulsating-play-btn"></a>
                        </div>
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                            <h3>Pengelolaan Data Mining dengan EMining Analytic</h3>
                            <p class="fst-italic">
                                EMining Analytic adalah aplikasi yang dirancang untuk mengelola dan menganalisis data
                                menggunakan berbagai metode machine learning. Aplikasi ini mempermudah pengguna dalam
                                mengekstrak nilai dari data yang kompleks.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Memfasilitasi pemrosesan data secara efisien
                                        dengan teknologi machine learning.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Dilengkapi dengan beragam metode seperti
                                        regresi, klasifikasi, dan klasterisasi untuk analisis yang akurat.</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Memberikan hasil analisis yang mudah dipahami
                                        untuk mendukung keputusan bisnis.</span></li>
                            </ul>
                            <p>
                                Aplikasi ini mendukung proses pengolahan data secara terstruktur dan membantu dalam
                                menghasilkan wawasan yang bernilai bagi berbagai bidang industri.
                            </p>
                        </div>
                    </div>

            </section><!-- /About Section -->

            <!-- Stats Section -->
            <section id="stats" class="stats section light-background">

                <div class="container" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4">

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Klien</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Proyek</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1453"
                                    data-purecounter-duration="1" class="purecounter"></span>
                                <p>Jam Dukungan</p>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-3 col-md-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                    class="purecounter"></span>
                                <p>Pekerja</p>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </section><!-- /Stats Section -->
            <section id="skills" class="skills section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Keahlian Kami</h2>
                    <p>Menguasai berbagai teknik machine learning untuk menghasilkan data yang bernilai</p>
                </div><!-- End Section Title -->

                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        <!-- Machine Learning Skill Cards -->
                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2921/2921825.png" alt="Regresi Linear Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Regresi Linear</h5>
                                    <p class="card-text">Efektivitas: 95%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 95%;">95%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png" alt="Klasifikasi Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Klasifikasi</h5>
                                    <p class="card-text">Efektivitas: 90%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 90%;">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1995/1995573.png" alt="Clustering Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Clustering</h5>
                                    <p class="card-text">Efektivitas: 85%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 85%;">85%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" alt="Decision Tree Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Decision Tree</h5>
                                    <p class="card-text">Efektivitas: 80%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 80%;">80%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/2933/2933947.png" alt="Naive Bayes Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Naive Bayes</h5>
                                    <p class="card-text">Efektivitas: 75%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 75%;">75%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card skill-card h-100">
                                <div class="card-body text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1006/1006541.png" alt="Neural Networks Icon" class="img-fluid mb-3" style="width: 60px;">
                                    <h5 class="card-title">Neural Networks</h5>
                                    <p class="card-text">Efektivitas: 70%</p>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                                 aria-valuemax="100" style="width: 70%;">70%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- End Row -->
                </div><!-- End Container -->
            </section><!-- /Skills Section -->
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
