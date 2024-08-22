<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">

    <title>Metabharata Official</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



</head>

<body>
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href='#hero'>
                <img src="{{ asset('assets/icons/ic-logo1.svg')}}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#sekilas">Sekilas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#cara-pembayaran">Cara Bayar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#tim">Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('login') }}" class="btn btn-danger">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!--Hero-->
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title">
                <h1>METABHARATA OFFICIAL</h1>
                <h5>Action Side to Side Game Berbasis Kesenian Wayang</h5>
            </div>
        </div>
    </section>

    <!-- Penawaran program -->
    <section id="program" style="margin-top: -70px">
        <div class="container" data-aos="fade-up">
            <div class="row row-cols-2 row-cols-md-4 g-4" data-aos-anchor-placement="top-bottom">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/icons/ic-yudistira.svg') }}" class="card-img-top mt-1" height="100"
                            width="100" alt="">
                        <div class="card-body">
                            <h5>Beragam karakter wayang dengan grafis berkualitas.</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/icons/ic-mode.svg') }}" class="card-img-top mt-1" height="100"
                            width="100" alt="">
                        <div class="card-body">
                            <h5>Menampilkan pertarungan menarik dan variatif.</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/icons/ic-bahasa.svg') }}" class="card-img-top mt-1" height="100"
                            width="100" alt="">
                        <div class="card-body">
                            <h5>Tersedia dalam 3 bahasa yang dapat disesuaikan.</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('assets/icons/ic-lock.svg') }}" class="card-img-top mt-1" height="100"
                            width="100" alt="">
                        <div class="card-body">
                            <h5>Cerita lebih komprehensif dan terperiodisasi.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- sekilas info -->
    <section id="sekilas" class="py-5">
        <div class="container py-5">
            <h2 class=" fw-bold text-center">Sekilas Info</h2>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                        <div class="stripe me-2"></div>
                        <h3>Daftar Metabharata</h3>
                    </div>
                    <h4 class="fw-bold mb-2">Mainkan Metabharata dan Populerkan Kesenian Wayang Bersama Kami.</h4>
                    <p class="mb-3">Bawa Wayang ke layar ponsel Anda! Metabharata hadir dalam pertempuran epik yang
                        disertai dengan edukasi cerita singkatnya, dimulai dari karakter-karakter pewayangan yang ikonik
                        dan berbagai latar yang indah dan menarik.</p>
                    <h4 class="fw-bold mb-2">Jelajahi lebih jauh dengan Bab Premium kami di Metabharata - Pengalaman
                        bermain yang tak terlupakan!</h4>
                    <h5 class=""><b>Bab 6 tersedia dengan harga Rp.13.000,00</b>, dan <b>Bab 7 dengan harga
                            Rp.15.000,00</b>. Ayo
                        nikmati
                        pengalaman bermain yang lebih mendalam dan seru!</h5>
                    <div class="d-flex align-items-center">
                        <h4 class="nav-link active"><a
                                href="https://play.google.com/store/apps/details?id=com.DefaultCompany.Metabharata&hl=en-ID">Download
                                Sekarang</a></h4>
                        <img src="{{ asset('assets/icons/ic-playstore.svg') }}" height="40" width="80" alt="">
                    </div>

                </div>
                <div class="col-lg-6">
                    <!-- <img src="{{ asset('assets/images/il-phone.svg') }}" class="img-fluid" alt=""> -->
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="{{ asset('/assets/images/il-phone-fiks.svg') }}" class="d-block w-100" height="300"
                                    width="600" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-modecerita.svg') }}" class="d-block w-100"
                                    height="300" width="600" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-babpremium1.svg') }}" class="d-block w-100"
                                    height="300" width="600" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/images/il-babpremium2.svg') }}" class="d-block w-100"
                                    height="300" width="600" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- logo medpart -->
    <section id="medpart">
        <div class="container text-center" data-aos="fade-up">
            <div class="d-flex align-items-center">
                <div class="stripe me-2"></div>
                <h3>Media Partner Metabharata</h3>
            </div>
            <div class="row row-cols-3 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp1.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp2.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp3.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp4.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp5.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp6.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp7.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/icons/ic-mp8.svg') }}" alt="Logo Media Partner 3" class="img-fluid">
                    </div>
                </div>
                <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>

        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri">
        <div class="container py-5 text-center">
            <div class="header-galeri text-center">
                <h2 class="fw-bold">Galeri Terkini</h2>
            </div>
            <div class="row row-cols-2 row-cols-sm-1 row-cols-md-5 row-cols-lg-3 g-1">
                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri2.png') }}" alt="Logo Media Partner 1"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri3.png') }}" alt="Logo Media Partner 2"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri6.png') }}" alt="Logo Media Partner 3"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri7.png') }}" alt="Logo Media Partner 3"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri8.png') }}" alt="Logo Media Partner 3"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri9.png') }}" alt="Logo Media Partner 3"
                            class="img-fluid">
                    </div>
                </div>

                <div class="col">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/il-galeri10.png') }}" alt="Logo Media Partner 3"
                            class="img-fluid">
                    </div>
                </div>
                <!-- Tambahkan card lainnya sesuai kebutuhan -->
            </div>
    </section>
    <!-- video -->
    <section id="video" class="py-5 section-foto parallax">
        <div class="container py-5">
            <div class="text-center">
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/PsfpfkDxIDs?si=62T7_8v7OTPXaXVa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- berita -->
    <section id="berita">
        <div class="container py-5" data-aos="zoom-in">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Berita Terkait</h2>
            </div>

            <div class="row row-cols-2">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/il-berita-01.jpg') }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="mb-1">25/09/2023</p>
                        <h5 class="">MAHASISWA UNESA RILIS ACTION SIDE TO SIDE GAME BERBASIS KESENIAN WAYANG PERTAMA
                            DI INDONESIA</h5>
                        <p>Sumber : https://mp.fip.unesa.ac.id/</p>
                        <h4 class="text-danger"><a
                                href="https://mp.fip.unesa.ac.id/post/mahasiswa-unesa-rilis-action-side-to-side-game-berbasis-kesenian-wayang-pertama-di-indonesia">Selengkapnya</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/il-berita-02.jpg') }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="mb-1">25/09/2023</p>
                        <h5 class="">Kolaborasi dengan HIMAFORTIC FV Unesa, Tim Metabharata Official Gelar Event
                            Metabharata MVP Showcase</h5>
                        <p>Sumber : https://fip.unesa.ac.id/</p>
                        <h4 class="text-danger"><a
                                href="https://fip.unesa.ac.id/kolaborasi-dengan-himafortic-fv-unesa-tim-metabharata-official-gelar-event-metabharata-mvp-showcase/">Selengkapnya</a>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('assets/images/il-berita-02.jpg') }}" class="img-fluid" alt="">
                    <div class="konten-berita">
                        <p class="mb-1">28/09/2023</p>
                        <h5 class="">Kolaborasi dengan HIMAFORTIC FV Unesa, Tim Metabharata Official Gelar Event
                            Metabharata MVP Showcase.</h5>
                        <p>Sumber : https://inijatim.com/</p>
                        <h4 class="text-danger"><a
                                href="https://inijatim.com/kolaborasi-dengan-himafortic-fv-unesa-tim-metabharata-official-gelar-event-metabharata-mvp-showcase/">Selengkapnya</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tata cara pembayaran -->
    <section id="cara-pembayaran" class="py-5 section-foto parallax">
        <div class="container">
            <div class="text-center">
                <div class="tatacara-pembayaran">
                    <h2 class=" fw-bold text-center" data-aos="zoom-in">Tata Cara Pembayaran Game Metabharata</h2>
                </div>
                <div class="row row-cols-1">
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-menu-utama.png') }}" height="150" width="220"
                                    alt="">
                                <p>1. Untuk pembelian babak Freemium pada aplikasi Metabharata dilakukan pada menu Mode
                                    Cerita.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-modecerita-1.png') }}" height="150" width="220"
                                    alt="">
                                <p>2. Pada tampilan fitur mode cerita, terdapat lima babak gratis dan dua babak berbayar
                                    yakni babak 6 dan 7. Untuk pembelian kedua babak tersebut, dapat dilakukan dengan
                                    mengklik babak yang ingin di beli (berikon gembok).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-login-pembayaran.png') }}" height="150" width="220"
                                    alt="">
                                <p>3. Setelah mengklik babak yang ingin dibeli, pengguna akan diarahkan ke website
                                    metabharataofficial.com, pada website ini silahkan login akun yang sudah didaftarkan
                                    saat pertama memasuki game metabharata.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-babak-pembelian1.png') }}" height="150" width="250"
                                    alt="">
                                <p>4. Ketika pengguna sudah memasuki akunnya, akan tersedia pilihan babak yang ingin
                                    dibeli, untuk melakukan pembayaran, klik tombol Lihat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-data-order.png') }}" height="150" width="220"
                                    alt="">
                                <p>5. Setelah mengklik tombol lihat, akan tampil informasi Data Order, lalu klik Bayar
                                    Sekarang.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card-info">
                            <div class="p-1" data-aos="zoom-in">
                                <img src="{{ asset('assets/images/il-metode-pembayaran.png') }}" height="150"
                                    width="220" alt="">
                                <p>6. Setelah klik Bayar Sekarang, maka akan tampil berbagai metode pembayaran yang
                                    disediakan Metabharata. Pengguna dapat melakukan pembayaran melalui Gopay atau
                                    transfer berbagai Bank. Untuk tatacara pembayaran tiap pilihan, terdapat langkah
                                    langkah yang disedikana untuk mempermudah pengguna melakukan pembayaran dengan
                                    meklik ikon panah yang mengarah ke bawah.</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- tim -->
    <section id="tim">
        <div class="text-center py-4" data-aos="zoom-out">
            <h2 class="fw-bold">Tim Metabharata</h2>
        </div>
        <div class="container-tim" data-aos="zoom-right">
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_pakadit.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>Aditya Chandra Setiawan, S.Pd., M.Pd.</h4>
                        <h5>Dosen Pembimbing</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/adityachandrasetiawan/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_cahyo.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>CAHYO FEBRI WIJAKSONO</h4>
                        <h5>Chief Executive Officer</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/cahyo.eff/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_andin.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>SURYA ANDHINI</h4>
                        <h5>Chief Financial Officer</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/suryandhini/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_riski.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>RISKI RAMADANI</h4>
                        <h5>Chief Operating Officer</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/riskirmdn157/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_husnul.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>HUSNUL MUBAROQ</h4>
                        <h5>Chief Marketing Officer</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/husnulmq_/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-tim">
                <div class="content">
                    <div class="imgBx">
                        <img src="{{ asset('assets/images/il-foto_iqbal.svg') }}" alt="">
                    </div>
                    <div class="contentBx">
                        <h4>IQBAL IZZA ADDAVIQI</h4>
                        <h5>Chief Technology Officer</h5>
                    </div>
                    <div class="sci">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/iqbalii__/"><i class="fa fa-instagram"
                                aria-hidden="true"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer -->
    <footer id="kontak">
        <div class="main-content">
            <div class="left box">
                <h2>About us</h2>
                <div class="content">
                    <p>Distopia Langit Kurusetra, merupakan game action side-to-side yang mengadaptasikan kisah
                        Perang
                        Bharatayudha. Melalui variasi mode pertarungan dan aspek cerita yang kuat, game ini
                        dirancang
                        sebagai strategi untuk merevitalisasi kesenian wayang yang mulai terdegradasi pada era
                        modernisasi.</p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fa-brands fa-x-twitter"></span></a>
                        <a href="https://www.instagram.com/metabharata.official/"><span
                                class="fab fa-instagram"></span></a>
                        <a href="https://www.youtube.com/@metabharata.official"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>
            <div class="center box">
                <h2>Address</h2>
                <div class="content">
                    <div class="place">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.47385420986!2d112.67002057332769!3d-7.300538471764676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb7a806b1ce1%3A0x571f4546e898d79a!2sUniversitas%20Negeri%20Surabaya!5e0!3m2!1sid!2sid!4v1697389791531!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe><br>
                        <span class="fas fa-map-marker-alt"></span>
                        <span class="text">Surabaya, Jawa Tmur</span>
                    </div>
                </div>
            </div>
            <div class="right box">
                <h2>Contact us</h2>
                <div class="content">
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span class="text">metabharata.official@gmail.com</span>
                    </div>
                    <!-- <form action="#">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" required>
                        </div>
                        <div class="msg">
                            <div class="text">Message *</div>
                            <textarea rows="2" cols="25" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Send</button>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Copyright <span class="far fa-copyright"></span> 2023<a
                        href="https://metabharataofficial.com/"> Metabharata Official. </a> All rights reserved
                </span>
            </center>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    const navbar = document.querySelector(".fixed-top");
    window.onscroll = () => {
        if (window.scrollY > 100) {
            navbar.classList.add("scroll-nav-active");
            navbar.classList.add(".text-nav-active");
            navbar.classList.remove("navbar-dark");
        } else {
            navbar.classList.remove("scroll-nav-active");
            navbar.classList.add("navbar-dark");
        }
    };

    // animasi aos
    AOS.init();
    </script>
    <script src="https://kit.fontawesome.com/f718bb0d4d.js" crossorigin="anonymous"></script>

</body>
</html>