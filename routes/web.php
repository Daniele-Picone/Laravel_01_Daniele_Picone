<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   
    return view('Homepage', );
});

Route::get('/pagina-1',function (){

    return  view('pagina1' );
});

Route::get('/pagina-2',function (){

    return  view('pagina2' );
});