@extends('layouts.app')

@section('content')

<!-- HERO ABOUT -->
<section class="about-hero-light">
    <h1>ABOUT <span>US</span></h1>
</section>

<!-- COMPANY PROFILE -->
<section class="about-company">
    <div class="company-container">
        <div class="company-logo">
            <img src="{{ asset('assets/img/logo-no-name.png') }}" alt="Tugu Mas">
        </div>

        <div class="company-text">
            <p>
                CV Tugu Mas adalah perusahaan yang berdedikasi di bidang distribusi
                perlengkapan kebakaran. Kami tidak hanya menyediakan produk, tetapi juga
                menawarkan solusi komprehensif untuk meningkatkan efisiensi dan produktivitas
                kinerja perusahaan, serta menjamin keamanan dan keselamatan bagi seluruh
                mitra dan klien kami melalui pengembangan teknologi dan inovasi.
            </p>

            <p>
                Berdiri sejak tahun 2001, CV Tugu Mas telah memiliki pengalaman yang panjang
                dan mendalam di industri kebakaran. Didukung oleh tim yang profesional,
                kami senantiasa berupaya memberikan kinerja pelayanan dan produk yang unggul.
            </p>

            <p>
                Kepuasan klien dan mitra adalah prioritas utama kami dan menjadi fokus
                perhatian dalam setiap aspek pekerjaan.
            </p>
        </div>
    </div>
</section>

<!-- VISION & MISSION -->
<section class="about-vm">
    <div class="vm-left">
        <h2>OUR VISION</h2>
        <p>
            Menjadi perusahaan terpercaya dan bertanggung jawab secara profesional
            pada pekerjaan kami di bidang kebakaran.
        </p>
    </div>

    <div class="vm-right">
        <h2>OUR MISSION</h2>
        <p>
            Memberikan pelayanan terbaik dan profesional kepada pelanggan kami.
        </p>
    </div>
</section>

<!-- TEAM -->
    <section class="about-team">
        <div class="section-header">
            <h2>OUR <span>TEAM</span></h2>
        </div>

        <div class="team-grid">
            <div class="team-card">
                <h4>Santika Resti</h4>
                <p>Administrasi & Project Manager</p>
                <img src="{{ asset('assets/img/team/team_placeholder_2.jpg')}}" alt="Santika Resti">
            </div>

            <div class="team-card">
                <h4>Kristiyono</h4>
                <p>Founder & CEO</p>
                <img src="{{ asset('assets/img/team/team_placeholder_2.jpg')}}" alt="Kristiyono">
            </div>

            <div class="team-card">
                <h4>Muryanti</h4>
                <p>Bidang Keuangan</p>
                <img src="{{ asset('assets/img/team/team_placeholder_2.jpg')}}" alt="Muryanti">
            </div>
        </div>
    </section>

@endsection
