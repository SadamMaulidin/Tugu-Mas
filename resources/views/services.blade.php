@extends('layouts.app')

@section('content')
<section class="services-section">
        <div class="section-header">
            <h2>OUR <span>SERVICES</span></h2>
            <p>Berkomitmen memberikan pelayanan terbaik dan profesional untuk menjamin keamanan aset berharga Anda.</p>
        </div>

        <div class="services-grid">
            
            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="{{ asset('assets/img/pelatihan.jpeg') }}" alt="Pelatihan Teori dan Lapangan">
                </div>
                <h3>Pelatihan Teori & Lapangan</h3>
                <p>Pelatihan oleh ahli untuk semua kalangan. Mengetahui cara memadamkan api dengan tepat agar Anda siap dan tidak panik jika sewaktu-waktu terjadi kebakaran.</p>
                <a href="https://wa.me/{{ config('company.whatsapp_number') }}?text=Halo%20Tugu%20Mas,%20saya%20ingin%20info%20mengenai%20Jasa%20Pelatihan%20Kebakaran." target="_blank" class="btn-wa">
                    Tanya via WA
                </a>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="{{ asset('assets/img/pemasangan.jpg') }}" alt="Pemasangan Hydrant dan Alarm">
                </div>
                <h3>Instalasi Hydrant & Alarm</h3>
                <p>Jasa pemasangan dan perawatan instalasi hydrant serta alarm untuk gedung atau pabrik. Dikerjakan langsung dengan standar keamanan yang tinggi oleh ahli pada bidangnya.</p>
                <a href="https://wa.me/{{ config('company.whatsapp_number') }}?text=Halo%20Tugu%20Mas,%20saya%20ingin%20info%20mengenai%20Jasa%20Instalasi%20Hydrant%20dan%20Alarm." target="_blank" class="btn-wa">
                    Tanya via WA
                </a>
            </div>

            <div class="service-card">
                <div class="service-img-wrapper">
                    <img src="{{ asset('assets/img/perawatan.jpg') }}" alt="Perawatan dan Pengisian APAR">
                </div>
                <h3>Perawatan & Pengisian APAR</h3>
                <p>Menyediakan jasa perawatan dan pengisian ulang (refill) alat pemadam kebakaran Anda. Layanan sangat fleksibel, dapat dilakukan langsung di tempat Anda maupun di bengkel kami.</p>
                <a href="https://wa.me/{{ config('company.whatsapp_number') }}?text=Halo%20Tugu%20Mas,%20saya%20ingin%20info%20mengenai%20Jasa%20Refill/Pengisian%20APAR." target="_blank" class="btn-wa">
                    Tanya via WA
                </a>
            </div>

        </div>
    </section>
@endsection
