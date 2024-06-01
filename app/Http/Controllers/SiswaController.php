<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Guru;
use App\Models\Kela;
use App\Models\Siswa;

class SiswaController extends Controller
{

    public function update_show(Siswa $id)
    {
        $user = session('user');
        $siswa = $id;
        $kelas = Kela::all();
        return view("Pages.siswa.update", compact('user', 'kelas', 'siswa'));
    }

    public function update_post(Siswa $id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
        ]);

        if ($request->password) {
            $id->update([
                'nama' => $request->nama,
                'nisn' => $request->nisn ?? $id->nisn,
                'username' => $request->username,
                'kelas' => $request->kelas ?? $id->kelas,
                'password' => Hash::make($request->password)
            ]);
        }

        $id->update([
            'nama' => $request->nama,
            'nisn' => $request->nisn ?? $id->nisn,
            'kelas' => $request->kelas ?? $id->kelas,
            'username' => $request->username
        ]);

        if (Auth::guard("siswa")->user()) {
            session(['user' => $id->first()]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('list_siswa', $id->kelas_siswa->id);
        }
    }

    public function raport()
    {
        $user = session('user');
        return view('Pages.siswa.Raport', compact('user'));
    }

    public function rangking()
    {
        $user = session('user');
        $siswa = Siswa::where('kela_id', $user->kela_id)->get();
        return view('Pages.siswa.Rangking', compact('user', 'siswa'));
    }

    public function profil_walikelas()
    {
        $user = session('user');
        $guru = Guru::all();
        return view('Pages.siswa.profil_walikelas', compact('user', 'guru'));
    }

    public function walikelas(Guru $id)
    {
        $user = session('user');
        return view('Pages.siswa.walikelas', compact('user', 'id'));
    }
}
