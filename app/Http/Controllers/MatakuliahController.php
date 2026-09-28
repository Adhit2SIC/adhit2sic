<?php

namespace App\Http\Controllers;

use Illuminate\Http;

class MatakuliahController extends Controller
{

    public function index()
    {
        return "Menampilkan data matakuliah";
    }


    public function show(string $kode = null)
    {
        if ($kode) {
            return "Anda mengakses matakuliah " . $kode;
        }

        return "Masukkan kode matakuliah!";
    }


}
