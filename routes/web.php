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

/*Route::get('/acercade', function () {
    return "mi polla";
  
});

Route::get('/contactos', function () {
    return "info contactos";
  
});

Route::get('/post/{id}/{nombre}', function ($id,$nombre) {
    return "chupamela &nbsp;". $id."&nbsp;creado por:". $nombre;
    });
  */



Route::get('inicio/{id}', 'App\Http\Controllers\EjemploController@inicio');
Route::get('pagina/', 'App\Http\Controllers\paginaController@pagina');
Route::get('acerca/', 'App\Http\Controllers\paginaController@acerca');
Route::get('informacion/', 'App\Http\Controllers\paginaController@informacion');
Route::get('welcome/', 'App\Http\Controllers\paginaController@welcome');



//consultas bd  

Route::get('insertar', function(){

    DB::insert("INSERT INTO articulos(Nombre_Articulo, precio, pais_origen, observaciones) values (?,?,?,?)",["llaves", 55000, "inglaterra","ratas"]);
    DB::insert("INSERT INTO articulos(Nombre_Articulo, precio, pais_origen, observaciones) values (?,?,?,?)",["lapices", 45000, "suiza","ratas"]);
    DB::insert("INSERT INTO articulos(Nombre_Articulo, precio, pais_origen, observaciones) values (?,?,?,?)",["armas", 10000, "estados_unidos","ratas"]);
    DB::insert("INSERT INTO articulos(Nombre_Articulo, precio, pais_origen, observaciones) values (?,?,?,?)",["camas", 19000, "colombia","ratas"]);
});

Route::get('leer', function(){


$resultado=DB::select("SELECT * FROM articulos");
 
while($fila = $resultado) {

return $resultado;
    
}


    


});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
