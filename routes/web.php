<?php

use App\Models\Newsletter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AvocatController;
use App\Http\Controllers\BureauController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PublicationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::get('/', function () {
//     return view('pages.home');
// });
// Language
// Route::group(['prefix' => '{lang}', 'middleware' => 'SetLocale'], function () {
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::get('/symlink', function () {
            return view('symlink');
        })->name('generate_symlink');
        Route::get('/language/{locale}', [ProfileController::class, 'changeLanguage'])->name('change_language');

        Route::get('/', [InfoController::class, 'index'])->name('home');
        Route::get('about', [InfoController::class, 'about'])->name('about');
        Route::get('expertise', [InfoController::class, 'expertise'])->name('expertise');
        Route::get('team', [InfoController::class, 'team'])->name('team');
        Route::get('publication', [InfoController::class, 'publication'])->name('publication');
        Route::get('presence', [InfoController::class, 'presence'])->name('presence');

        Route::get('detailPublication/{id}', [InfoController::class, 'show_pub'])->name('detailPublication');
        Route::get('detailTeam/{id}', [InfoController::class, 'show_team'])->name('detailTeam');
        Route::get('teamByCat/{id}', [InfoController::class, 'show'])->name('teamByCat');
        Route::get('teamByBureau/{id}', [InfoController::class, 'teamByBureau'])->name('teamByBureau');
        Route::get('detailExpertise/{id}', [InfoController::class, 'show_secteur'])->name('detailExpertise');
        Route::get('detailBureau/{id}', [BureauController::class, 'show'])->name('detailBureau');
        Route::get('detailCompetence', [InfoController::class, 'show_competence'])->name('detailCompetence');
        Route::get('downloadCv', [AvocatController::class, 'downloadCv'])->name('downloadCv');
        Route::get('downloadQr/{id}', [AvocatController::class, 'downloadQr'])->name('downloadQr');
        Route::get('downloadQrHome', [AvocatController::class, 'downloadQrHome'])->name('downloadQrHome');
        Route::get('downloadCvPub', [PublicationController::class, 'downloadCvPub'])->name('downloadCvPub');

        //newsletter
        Route::post('add.newsletter', [NewsletterController::class, 'subscribe'])->name('add.newsletter');
    }
);
