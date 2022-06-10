<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

use Leeto\MoonShine\MoonShine;
use App\MoonShine\Resources\UserResource;  
use Leeto\MoonShine\Resources\MoonShineUserResource; 
use Leeto\MoonShine\Resources\MoonShineUserRoleResource; 
// use App\MoonShine\Resources\PostResource; 



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
        //
        Builder::defaultStringLength(191);
        app(MoonShine::class)->registerResources([
            UserResource::class,
           MoonShineUserResource::class, // Системный раздел с администраторами
           MoonShineUserRoleResource::class, // Системный раздел с ролями администраторов
            //PostResource::class, // Наш новый раздел
        ]);
    }
}
