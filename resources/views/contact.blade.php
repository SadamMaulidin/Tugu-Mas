@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center mb-4">Kontak Kami</h1>

  <div class="row">
    <div class="col-md-6">
      <p><strong>Alamat:</strong> Jl. Puspanjolo Barat III No. 11, Semarang</p>
      <p><strong>WhatsApp:</strong> <a href="https://wa.me/6281234567890" class="text-decoration-none">+62 812-3456-7890</a></p>
      <p><strong>Email:</strong> info@tugumas.co.id</p>
    </div>

    <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" placeholder="Nama Anda">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Email Anda">
        </div>
        <div class="mb-3">
          <label class="form-label">Pesan</label>
          <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
  </div>
</div>
@endsection
