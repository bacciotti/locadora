<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center"><a href="https://vuejs.org" target="_blank" rel="noopener noreferrer"><img width="100" src="https://vuejs.org/images/logo.png" alt="Vue logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Documentação de Instalação

Criação do Projeto  
> composer create-project --prefer-dist laravel/laravel Locadora-Imperial

Inicializado o servidor e subindo a aplicação  
> php artisan server

Criação das tabelas no banco
> php artisan migrate

Criado Seed - Trabalhar com dados fictício
> php artisan make:seed UsersTableSeeder

Realizar test TDD e BDD no Laravel.
-> Regras:  
- Toda classe de test deve terminar com o sufixo Test, ex: ClientTest.php. 
- Toda função de teste deve iniciar com a palavra test, ex: public function testBasico()
> .\vendor\bin\phpunit