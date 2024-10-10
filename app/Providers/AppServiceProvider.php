<?php

namespace App\Providers;
use App\Voyager\Database\Types\Common\CharType;
use TCG\Voyager\Database\Types\Type;
use Illuminate\Support\ServiceProvider;
use App\Voyager\Database\Types\Common\MyCharType;
// use Doctrine\DBAL\Types\Type;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // Register custom char type
        if (!Type::hasType('my_char')) {
            Type::addType('my_char', MyCharType::class);
        }}
 



}
