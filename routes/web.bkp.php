<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes/{total} ', function ($total) {
    $dados = array(


        "daniela",
        "felipe",
        "guilherme",

    );

    $msg = "<ul>";


    if ($total <= count($dados)) {

        $cont = 0;

        foreach ($dados as $item) {
            $msg = $msg . "<li><b>$item</b></li>";
            $cont++;
            if($cont == $total) break;
        }

    
    }
    else{
        $msg = $msg . "<li>tamanho maximo =" .cont($dados);
        
    
    }
    $msg = $msg . "</ul>";
    //dd($msg);
    return $msg;

});

    Route::get('/alunos/{total}/{nome?}', 
        function ($total,$nome="joao"){
            return "OK: $nome";
        }
        
    )->where('total' , '[0-9]+') ->where ('none', '[A-Za-z]+');

    Route :: prefix("consulta")->group(function() {

        Route :: get ('/', function(){
            return view('consulta.lista');
        })->name('consulta');

        Route:: get('/agendar', function(){
            return view('consulta.agendar');
        })->name('consulta.agendar');

        Route:: get('/cancelar', function(){
            return view('consulta.cancelar');
        })->name('consulta.cancelar');

    });

    

