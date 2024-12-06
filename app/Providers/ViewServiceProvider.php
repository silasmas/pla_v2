<?php

namespace App\Providers;


use App\Models\Post;
use App\Models\Event;
use App\Models\Minister;
use App\Models\Offrande;
use App\Models\expertise;
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

            // $post = Post::with("minister", "event")->orderByDesc('date_publication')->where('is_active', 1)->get();
            // $offrandes = Offrande::where('is_active', 1)->get();
            // $posts = Post::get();
            // // dd($eventbunda);
            // // Obtenir le total séparément si nécessaire
            $slides = expertise::get();



            $st = ($settings !== null && $settings->social_network !== null) ? json_decode($settings->social_network, true) : "";
            $view->with('title', $titre);
            $view->with('settings', $st);
            $view->with('setting', $settings);
            $view->with('slides', $slides);
            // $view->with('pasteurs', $pasteurs);
            // $view->with('post', $post);
            // $view->with('offrandes', $offrandes);
            // $view->with('posts', $posts);
        });
    }
}
