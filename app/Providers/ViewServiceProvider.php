<?php

namespace App\Providers;


use App\Models\Post;
use App\Models\Event;
use App\Models\avocat;
use App\Models\Minister;
use App\Models\Offrande;
use App\Models\expertise;
use App\Models\fonction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('pages.*', function ($view) {
            $titre = getTitle(Route::currentRouteName());

            $settings = DB::table('general_settings')->first();

            $teams = avocat::with("publication", "bureau", "fonction")->orderBy('niveau')->where('visible', 1)->get();
            $fonctions = fonction::orderByDesc('fonction')->get();
            // $posts = Post::get();
            // // dd($eventbunda);
            // // Obtenir le total séparément si nécessaire
            $slides = expertise::get();

            $type1Data = expertise::where('sorte', 1)->take(3)->get(['id', 'titre1', 'contenu', 'photo']);
            $type2Data = expertise::where('sorte', 2)->take(3)->get(['id', 'titre1', 'contenu', 'photo']);

            // Combiner les deux collections
            $allExpertises = $type1Data->merge($type2Data);

            $st = ($settings !== null && $settings->social_network !== null) ? json_decode($settings->social_network, true) : "";
            $view->with('title', $titre);
            $view->with('settings', $st);
            $view->with('setting', $settings);
            $view->with('slides', $slides);
            $view->with('allExpertises', $allExpertises);
            $view->with('teams', $teams);
            $view->with('fonctions', $fonctions);
            // $view->with('posts', $posts);
        });
    }
}
