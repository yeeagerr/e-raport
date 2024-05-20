<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PubController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = session("user");

        return view("Pages.Dashboard")->with(compact('user'));
    }

    public function raport()
    {
        $user = session('user');
        $guru = Guru::where("kela_id", $user->kela_id)->first();
        $siswa = Siswa::where('kela_id', $user->kela_id)->get();

        return view('Pages.siswa.Raport', compact('user', 'siswa', 'guru'));
    }

    public function rangking()
    {
        $user = session('user');
        return view('Pages.siswa.Rangking', compact('user'));
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
