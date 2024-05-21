<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Models\Kela;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function kelas($page)
    {
        $user = session("user");
        $kelas = Kela::orderBy('nama_kelas', 'ASC')->get();
        return view('Pages.guru.kelas', compact('user', 'kelas', 'page'));
    }

    public function kelas_input($id)
    {
        $user = session("user");
        $kelas = Kela::findOrFail($id);
        return view("Pages.guru.kelas_input", compact('user', 'kelas'));
    }

    public function list_siswa($id)
    {
        $siswa = Siswa::where('kela_id', $id)->get();
        $user = session("user");
        return view("Pages.guru.list_siswa", compact('user', 'siswa'));
    }

    public function eskul()
    {
        $user = session("user");
        $eskul = Ekskul::all();
        $unikEskul = $eskul->unique('nama_ekskul');
        return view("Pages.guru.eskul", compact('user', 'unikEskul'));
    }

    public function list_eskul($ekskul)
    {
        $siswa = Ekskul::where('nama_ekskul', $ekskul)->get();
        $user = session("user");
        return view("Pages.guru.list_siswa_eskul", compact('user', 'siswa'));
    }

    public function absen_eskul(Siswa $id)
    {
        $user = session("user");
        return view("Pages.guru.absensi_ekskul", compact('user', 'id'));
    }
}
