<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SilloneController;

use App\Models\Sillone;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Since;

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

Route::get('/', HomeController::class);

Route::get('sillones', [SilloneController::class, 'index'])->name('sillones.index');
Route::get('sillones/crear', [SilloneController::class, 'crear'])->name('sillones.crear');
Route::get('sillones/modificar', [SilloneController::class, 'modificar'])->name('sillones.modificar');


Route::post('sillones', function(Request $request){
    
    $nuevosillon = new Sillone;
    $nuevosillon->nombre = $request->input('nombre');
    $nuevosillon->descripcion = $request->input('descripcion');
    $nuevosillon->precio = $request->input('precio');
    $nuevosillon->save();
    return redirect()->route('sillones.index')->with('info',' SE CREO EL SILLON CON EXITO');
})->name('sillones.guardar');

Route::delete('sillones/{id}', function ($id) {
    $sillon = Sillone::findOrFail($id);
   $sillon->delete();
   return redirect()->route('sillones.index')->with('info',' SE BORRO EL SILLON CON EXITO'); 
})->name('sillones.borrar');

Route::get('sillones/{id}/modificar', function ($id){
    $sillon = Sillone::findOrFail($id);
    return view('sillones.modificar', compact('sillon'));

})->name('sillones.modificar');

Route::put('sillones/{id}', function ($id, Request $request) {
    $request->validate([
        'nombre'=>'required',
        'descripcion'=>'required',
        'precio'=>'required'
      ]);


    $sillon = new Sillone();
    $nuevosillon = new Sillone;
    $nuevosillon->nombre = $request->input('nombre');
    $nuevosillon->descripcion = $request->input('descripcion');
    $nuevosillon->precio = $request->input('precio');
    $nuevosillon->save();
    return redirect()->route('sillones.index')->with('info',' SE MODIFICO EL SILLON CON EXITO');
})->name('sillones.actualizar');
