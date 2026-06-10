<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function tampilkanPdf($namaFile)
    {
        // PERHATIKAN BARIS INI: Kita menambahkan .pdf di sini!
        $path = public_path('katalog/' . $namaFile . '.pdf');

        // Mengecek apakah file tersebut benar-benar ada di folder public/katalog/
        if (file_exists($path)) {
            return response()->file($path, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $namaFile . '.pdf"' 
            ]);
        }

        // Jika kode sampai ke sini, berarti file_exists() bernilai false
        // (File tidak ditemukan di path yang dicari)
        abort(404, 'File PDF katalog tidak ditemukan di folder: ' . $path); 
        // Saya menambahkan pesan error spesifik agar Master tahu letak path yang dicari server.
    }
}