<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    phpinfo();
});

Route::get('/hello-world/{nome}/{idade?}', function (Request $r, $nome,$idade="-") {
    //echo ($r->server);
    //echo($r->laravel_session);
    dd($r->only('server'));
    return "hello-world,$nome, <br/>vc tem $idade anos";
});

Route::middleware('verifica-hora')->get('/boa-tarde/{nome?}',function ($nome="") {
    echo "nome";
    return view("boatarde",['nome'=>$nome]);
});