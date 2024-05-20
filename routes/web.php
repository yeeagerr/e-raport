<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\RegisterController;
use App\Imports\GuruImport;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix("/login")->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name("login");
    Route::get("/admin", [AuthController::class, 'admin']);
    Route::post("/admin", [AuthController::class, 'admin_login'])->name("login_admin");
    Route::post('/siswa', [AuthController::class, 'siswa'])->name("login_siswa");
    Route::post('/guru', [AuthController::class, 'guru'])->name("login_guru");
});

Route::prefix("/register")->group(function () {
    Route::get('/', [RegisterController::class, 'register'])->name("register");
    Route::get('/siswa', [RegisterController::class, 'siswa'])->name("register_siswa");
    Route::get('/guru', [RegisterController::class, 'guru'])->name("register_guru");
});

Route::middleware(["AuthCheck", "preventBack"])->group(function () {
    Route::get("/", [PubController::class, "dashboard"])->name("dashboard");

    Route::post("/logout", [AuthController::class, "logout"])->name("logout");

    Route::middleware("GuruAdminOnly")->group(function () {
        Route::prefix("guru")->group(function () {
            Route::get("/dashboard/{page}/kelas", [GuruController::class, 'kelas'])->name("kelas_guru");
            Route::get("/kelas/{id}/input", [GuruController::class, 'kelas_input'])->name("kelas_guru_input");
            Route::get("/kelas/{id}/siswa", [GuruController::class, 'list_siswa'])->name("list_siswa");
            Route::get("/dashboard/eskul", [GuruController::class, 'eskul'])->name("eskul");
            Route::get("/ekskul/{ekskul}/siswa", [GuruController::class, 'list_eskul'])->name("list_eskul");
        });
    });

    Route::middleware("SiswaOnly")->group(function () {
        Route::prefix("/siswa")->group(function () {
            Route::get("/raport", [PubController::class, 'raport'])->name("raport_siswa");
            Route::get("/rangking", [PubController::class, 'rangking'])->name("rangking_siswa");
            Route::get("/list/walikelas", [PubController::class, 'profil_walikelas'])->name("profil_walikelas");
            Route::get("/profil/{id}/walikelas", [PubController::class, 'walikelas'])->name("walikelas");
        });
    });
});
