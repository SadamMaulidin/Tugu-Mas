@extends('layouts.app')

@section('content')
    <section class="home">
        <div class="home-content">
            <h1 style="color: #F26722">Kualitas Terbaik</h1>
            <h1>Untuk Keamanan</h1>
            <h1>Maksimal Anda</h1>
            <p>Kami Memberikan Perlengkapan Kebakaran Berkualitas Tinggi, Solusi Peningkatan Efisiensi Bisnis, serta Keamanan dan Keselamatan yang Unggul Melalui Inovasi Teknologi</p>
        </div>
    </section>

    <section class="about">
        <div class="about-content">
            <div class="about-img">
                <img src="assets/img/about-img.png">
            </div>

            <div class="about-text">
                <p style="font-weight: 700; font-size: 20px">Temukan mitra terpercaya Anda di bidang distribusi perlengkapan kebakaran dan solusi keamanan. </p>
                <p>Sejak tahun 2001, CV Tugu Mas berkomitmen menghadirkan produk berkualitas dan pelayanan profesional untuk efisiensi serta keselamatan bisnis Anda.  Ingin tahu lebih banyak tentang kami? Klik di sini untuk detail selengkapnya.</p>
                <div class="btn-box">
                    <a href="/about">Read More</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="product">
        <div>
            <h1></h1>
        </div>
    </section> --}}

    <section class="product">
        <div class="container">
            <div class="left-content">
                <h2>OUR <br> BEST <span>PRODUCT</span></h2>
                <p>Sistem proteksi kebakaran merupakan sebuah standar yang wajib dilengkapi, kami terus berusaha untuk menyediakan perlindungan maksimal untuk aset berharga anda.</p>
                {{-- <div class="navigation-arrows">
                    <button class="arrow left-arrow">&#8249;</button>
                    <button class="arrow right-arrow">&#8250;</button>
                </div> --}}
            </div>
            <div class="product-cards">
                <div class="product-card">
                    <img src="assets/img/fire-acc.png" alt="Fire Accessories">
                    <h3>Fire <br><span>Accessories</span> </h3>
                </div>
                <div class="product-card">
                    <img src="assets/img/fire-alarm.png" alt="Fire Alarm">
                    <h3>Fire <br><span>Alarm</span></h3>
                </div>
                <div class="product-card">
                    <img src="assets/img/fire-hydrant.png" alt="Fire Hydrant">
                    <h3>Fire <br> <span>Hydrant</span></h3>
                </div>
                <div class="product-card">
                    <img src="assets/img/fire-ext.png" alt="Fire Hydrant">
                    <h3>Fire <br> <span>Extinguisher</span></h3>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading">OUR <span>SERVICES</span></h1>

        <div class="services-container">
            <div class="serv-card">
                <img src="assets/img/pelatihan.jpeg" alt="">
            </div>
            <div class="services-desc">
                <h2>PELATIHAN</h2>
                <h3>Teori dan Pelatihan Lapangan</h3>
                <p>Pelatihan oleh ahli pada bidangnya. Kami tujukan pelatihan ini untuk semua kalangan tidak hanya pekerjaan yang beresiko kebakaran tetapi semua bidang pekerjaan.   Karena saat ini kebutuhan pengetahuan kita bagaimana cara untuk memadamkan api jika sewaktu-waktu di dekat kita ada kebakaran, kita bisa tahu apa yang harus kita lakukan supaya tidak panik.</p>
            </div>
        </div>
        <div class="services-container">
            <div class="services-desc">
                <h2>PEMASANGAN DAN PERAWATAN INSTALASI HYDRANT DAN  ALARM</h2>
                <h3>Pengerjaan dengan Ahli</h3>
                <p>Kami menyediakan jasa pemasangan  dan perawatan instalasi hydrant gedung atau pabrik anda. Dan dikerjakan oleh ahli pada bidangnya.</p>
            </div>
            <div class="serv-card">
                <img src="assets/img/pemasangan.jpg" alt="">
            </div>
        </div>
        <div class="services-container">
            <div class="serv-card">
                <img src="assets/img/perawatan.jpg" alt="">
            </div>
            <div class="services-desc">
                <h2>PERAWATAN DAN PENGISIAN ALAT PEMADAM KEBAKARAN</h2>
                <p>Kami menyediakan jasa perawatan dan pengisian alat pemadam kebakaran anda dan dilakukan ditempat maupun di bengkel kami.</p>
            </div>
        </div>
    </section>

    <section class="clients">
        <h2>our <span>clients</span></h2>
        <div class="logos">
            <div class="logos-slide">
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/ADIRAFinance.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/bankmayapada.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/bca.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/BPR.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/celebfitness.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/danamon.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/fifgroup.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/jasamarga.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/jco.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/mandiri.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/perhutani.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/pollux.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/santikaind.svg" />
                <img src="assets/img/fire-icon.svg" style="margin-bottom: 10px"/>
                <img src="assets/img/UOB_logo.png" />
            </div>
        </div>

        <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
        </script>
    </section>
@endsection