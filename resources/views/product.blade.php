@extends('layouts.app')

@section('content')
    <section class="product-section">
        
        <!-- BARIS 1: FIRE HYDRANT -->
        <div class="product-row">
            <div class="watermark">HYDRANT</div>
            <div class="product-content">
                <!-- Kiri: Judul -->
                <div class="product-title-area align-right order-title">
                    <h2><span>Fire</span> Hydrant</h2>
                    <a href="{{ route('lihat-katalog', 'test_katalog') }}" target="_blank" class="btn-see-more">See More</a>
                </div>
                
                <!-- Tengah: Gambar (Menggunakan asset baru) -->
                <div class="product-image order-image">
                    <div class="glow-circle"></div>
                    <!-- Max width disesuaikan agar proporsional dengan gambar lainnya -->
                    <img src="{{asset('assets/img/fire-hydrant.png')}}" alt="Fire Hydrant">
                </div>

                <!-- Kanan: Deskripsi -->
                <div class="product-desc align-left order-desc">
                    <p>Sistem fire sistem yang komprehensif dan kualitas terbaik yang telah memenuhi standar proyek bangunan gedung bertingkat (high risk building) dan industri dengan resiko kebakaran tinggi (high risk industries).</p>
                </div>
            </div>
        </div>

        <!-- BARIS 2: FIRE ALARM (ZIG-ZAG) -->
        <div class="product-row">
            <div class="watermark">ALARM</div>
            <div class="product-content">
                <!-- Kiri: Deskripsi -->
                <div class="product-desc align-right order-desc">
                    <p>Produk alarm kebakaran seperti smoke detector, heat detector, master control fire alarm addressable, master control fire alarm semi addressable, master control fire alarm analog, dan berbagai macam lainnya.</p>
                </div>
                
                <!-- Tengah: Gambar -->
                <div class="product-image order-image">
                    <div class="glow-circle" style="background: radial-gradient(circle, rgba(10,74,92,0.15) 0%, rgba(10,74,92,0) 70%);"></div>
                    <img src="{{asset('assets/img/fire-alarm.png')}}" alt="Fire Alarm">
                </div>

                <!-- Kanan: Judul -->
                <div class="product-title-area align-left order-title">
                    <h2><span>Fire</span> Alarm</h2>
                    <a href="#" class="btn-see-more">See More</a>
                </div>
            </div>
        </div>

        <!-- BARIS 3: FIRE EXTINGUISHER -->
        <div class="product-row">
            <div class="watermark">EXTINGUISHER</div>
            <div class="product-content">
                <!-- Kiri: Judul -->
                <div class="product-title-area align-right order-title">
                    <h2><span>Fire</span> Extinguisher</h2>
                    <a href="#" class="btn-see-more">See More</a>
                </div>
                
                <!-- Tengah: Gambar -->
                <div class="product-image order-image">
                    <div class="glow-circle"></div>
                    <img src="{{asset('assets/img/fire-ext.png')}}" alt="Fire Extinguisher">
                </div>

                <!-- Kanan: Deskripsi -->
                <div class="product-desc align-left order-desc">
                    <p>Perusahaan kami juga menyediakan berbagai merk alat pemadam api yang memiliki varian media dan ukuran alat pemadam api diantaranya: Dry Chemical Powder (DCP), Gas Carbon Dioksida (CO2), HFC-227 (Gas cair) dan Foam atau Busa.</p>
                </div>
            </div>
        </div>

        <!-- BARIS 4: FIRE ACCESSORIES (ZIG-ZAG) -->
        <div class="product-row">
            <div class="watermark">ACCESSORIES</div>
            <div class="product-content">
                <!-- Kiri: Deskripsi -->
                <div class="product-desc align-right order-desc">
                    <p>Produk pendukung kebakaran berbagai merk juga kami sediakan untuk memenuhi kebutuhan dan pendukung alat pemadam dengan kualitas dan harga terbaik yang bersaing di lapangan.</p>
                </div>
                
                <!-- Tengah: Gambar -->
                <div class="product-image order-image">
                    <!-- Khusus accessories karena lebar, max-width dibesarkan -->
                    <div class="glow-circle" style="background: radial-gradient(circle, rgba(10,74,92,0.15) 0%, rgba(10,74,92,0) 70%);"></div>
                    <img src="{{asset('assets/img/fire-acc.png')}}" alt="Fire Accessories">
                </div>

                <!-- Kanan: Judul -->
                <div class="product-title-area align-left order-title">
                    <h2><span>Fire</span> Accessories</h2>
                    <a href="#" class="btn-see-more">See More</a>
                </div>
            </div>
        </div>

    </section>
@endsection