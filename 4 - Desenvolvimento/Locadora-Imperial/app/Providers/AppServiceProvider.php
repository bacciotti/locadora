<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* [Diego - 03/12/2018] - Conforme a documentação do Laravel se a versão do Mysql for menor que versão 5.7.7, é necessário configurar manualmente
        o tamanho da string para que ele crie os indices nela. O Laravel usa o uft8mb4 que possui um conjunto de caracteres que da suporte a "emojis".
        mais informações: https://laravel.com/docs/master/migrations#creating-indexes. */
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
