<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $sub_categories_women = DB::select('select name_of_subcategory from sub_categories where id_category=1');
        $sub_categories_men = DB::select('select name_of_subcategory from sub_categories where id_category=2');
        $sub_categories_girls = DB::select('select name_of_subcategory from sub_categories where id_category=3');
        $sub_categories_boys = DB::select('select name_of_subcategory from sub_categories where id_category=4');
        view()->share('sub_categories_women',$sub_categories_women);
        view()->share('sub_categories_men',$sub_categories_men);
        view()->share('sub_categories_girls',$sub_categories_girls);
        view()->share('sub_categories_boys',$sub_categories_boys);
    }
}
