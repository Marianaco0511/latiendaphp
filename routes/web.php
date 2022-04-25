<?php

use Illuminate\Support\Facades\Route;

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

//primera ruta
Route::get('hola' , function(){ 
    echo "hola 2465852";
});

Route ::get('arreglo', function(){
    $estudiantes = [
        "JN" => "Juan",
        "MC" => "Marcos",
        "MA" => "Maria"
    ];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    echo "<hr />";
    //agregar elemento a un arreglo 
    $estudiantes ["MA"] = "Mariana";
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
    //eliminar elemento del arreglo
    echo "<hr />";
    unset($estudiantes["MA"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo "</pre>";
});

Route::get('paises', function() {
    $paises = [
        "Argentina" => [
            "capital" => "Buenos Aires",
            "moneda" => "Peso argentino",
            "poblacion" => 45.3,
            "ciudades" => [
                "Córdoba",
                "Resistencia"
            ]
        ],
        "Bolivia" => [
            "capital" => "Sucre",
            "moneda" => "Boliviano",
            "poblacion" => 11.6,
            "ciudades" => [
                "El Alto",
                "Sacaba",
                "Montero"
            ]
        ],
        "Colombia" => [
            "capital" => "Bogota",
            "moneda" => "peso",
            "poblacion" => 51.6,
            "ciudades" => [
                "cali",
                "Medellin",
                "Barranquilla"
            ]
        ],
        "Puerto Rico" => [
            "capital" => "San Juan",
            "moneda" => "Dólar estadounidense",
            "poblacion" => 3.19,
            "ciudades" => [
                "Rincón",
                "Vega Alta"
            ]
        ],
        "Ecuador" => [
            "capital" => "Quito",
            "moneda" => "Dólar estadounidense",
            "poblacion" => 17,6,
            "ciudades" => [
                "Manta",
                "Loja",
                "ibarra",
                "puyo"
            ] 
        ]
    ];

    //mostrar vista de paises
    return view("paises") ->with("paises" , $paises);
});
