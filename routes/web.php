<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EtkinliklerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KatilimController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcalisanController;
use App\Http\Controllers\AogrenciController;


Route::get("/calisanekle", function (){
    return view("admin/calisanekle");
});
Route::get("hakkimizda", function ()
{
    return view("about");
});
Route::get("iletisim", function ()
{
    return view("contact");
});

Route::get("/calisansil/{id}",[AcalisanController::class,"calisansil"]);
Route::get("calisankaydet",[AcalisanController::class,"qwe"]);
Route::get("/acalisan",[AcalisanController::class,"asd"]);
Route::get("/kayitol",[LoginController::class,"create"]);
Route::get("/cikis",[LoginController::class,"logout"]);
// Route::get("/etkinlik",function (){return view("etkinlik");});
Route::get("/girisyap",[LoginController::class,"login"]);
Route::get("/etkinlik",[EtkinliklerController::class,"etkinlik"]);
Route::get("/calisan",[EmployeeController::class,"calisan"]);
Route::get("/login",[LoginController::class,"fakultegetir"]);
Route::get("/bolumlerigetir/{id}",[LoginController::class,"bolumgetir"]);
Route::get("/katilim/{etk_id}/{katilimci_id}",[KatilimController::class,"katilimsagla"]);
Route::get("/profil",[ProfileController::class,"profil"]);
Route::get("/admin",[AdminController::class,"adminlogin"]);
Route::get("/admingirisyap",[AdminController::class,"admingirisyap"]);
Route::get("/adminpano",[AdminController::class,"adminsayfa"]);
Route::get("/guncelle",[ProfileController::class,"guncelle"]);
Route::get("/",[HomeController::class,"etkinlik"]);
Route::get("/profilkaydetresim",[ProfileController::class,"resimguncelle"]);
Route::get("/calisanguncelle/{id}",[AcalisanController::class,"calisanguncellebilgi"]);
Route::get("/calisanguncel",[AcalisanController::class,"guncelle"]);
Route::get("/ogrenciler",[AogrenciController::class,"asd"]);
Route::get("/ogrencisil/{id}",[AogrenciController::class,"ogrencisil"]);
Route::get("/adminetkinlik",[EtkinliklerController::class,"adminetk"]);
Route::get("/etksil/{id}",[EtkinliklerController::class,"etksil"]);

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
