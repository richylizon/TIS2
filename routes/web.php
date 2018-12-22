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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('ingresar', function(){
	return view('ingresar'); 
});*/

Route::resource('download','DownloadController');
Route::any('download/edit/{id}', 'DownloadController@edit')->name('download.downfunc');
Route::get('viewAlldownloadfile','DownloadController@downfunc');

Route::resource('usuario','UsuarioController');
Route::get('usuario/ocultar/{id}', 'UsuarioController@ocultar');
Route::any('usuario/edit/{id}', 'UsuarioController@edit')->name('usuario.edit');;
Route::any('usuario/update/{id}', 'UsuarioController@update')->name('usuario.update');;

Route::get('profesional/ocultar/{id}', 'ProfesionalController@ocultar');
Route::resource('profesional', 'ProfesionalController');
Route::any('proyecto/ocultar/{id}', 'ProyectoController@ocultar');
Route::any('proyecto/show/{id}', 'ProyectoController@ocultar');
Route::resource('proyecto', 'ProyectoController');
Route::any('proyecto/downfunc/{id}', 'ProyectoController@downfunc')->name('proyecto.downfunc');
Route::any('proyecto/finalizar/{id}', 'ProyectoController@finalizar')->name('proyecto.finalizar');
Route::any('proyectosCulminados', 'ProyectoController@proyectosCulminados')->name('proyecto.proyectosCulminados');
Route::any('terminarCiclo/{id}', 'ProyectoController@terminarCiclo')->name('proyecto.terminarCiclo');

Route::any('proyectosCulminados', 'ProyectoController@proyectosCulminados')->name('proyecto.proyectosCulminados');
Route::any('reporte', 'ProyectoController@reporte')->name('proyecto.reporte');

Route::get('area/ocultar/{id}', 'AreasController@ocultar');
Route::resource('area', 'AreasController');
Route::get('estudiante/ocultar/{id}', 'EstudianteController@ocultar');
Route::resource('estudiante', 'EstudianteController');
Route::get('modalidad/ocultar/{id}', 'ModalidadController@ocultar');
Route::resource('modalidad', 'ModalidadController');

Route::get('gestion/ocultar/{id}', 'GestionController@ocultar');
Route::resource('gestion', 'GestionController');
Route::get('carrera/ocultar/{id}', 'CarreraController@ocultar');
Route::resource('carrera', 'CarreraController');

Route::any('subarea', 'SubareaController@index')->name('subarea.index');
Route::any('subarea/create/{area}', 'SubareaController@store')->name('subarea.store');
Route::any('subarea/ocultar/{id}', 'SubareaController@ocultar');
Route::any('subarea/edit/{id}', 'SubareaController@edit')->name('subarea.edit');
Route::any('subarea/update/{id}', 'SubareaController@update')->name('subarea.update');
Route::any('subarea/profesionales/{s}', 'SubareaController@indexProfesionales')->name('subarea.profesional');
Route::any('subarea/eliminarProfesional/{idprofesional}/{idsubarea}', 'SubareaController@ocultarProfesional')->name('subarea.ocultarProfesional');

/*Route::any('ingresar', function () {
    return view('ingresar.index');
});*/


Route::get('lista',function (){
	    $users = \App\User::All();
        return view('usuario.lista',compact('users'));
    });
    

Route::any('subarea/registrar/{area}', 'SubareaController@recibe')->name('subarea.recibe');


Route::resource('tribunal', 'TribunalController');
Route::any('tribunal/registrar/{p}', 'TribunalController@registrar')
->name('tribunal.asignar');
Route::any('tribunal/listaTutores/{p}', 'TribunalController@listaTutores')
->name('tribunal.listaTutores');
Route::any('tribunal/reasignar/{idprofesional}/{idproyecto}', 'TribunalController@reasignar')
->name('tribunal.reasignar');
Route::any('tribunal/cambiar/{idprofesional}/{idproyecto}', 'TribunalController@cambiar')
->name('tribunal.cambiar');
Route::any('tribunal/retirar/{idprofesional}/{idproyecto}', 'TribunalController@retirar')
->name('tribunal.retirar');
Route::any('tribunal/listaReasignar/{id}', 'TribunalController@listaReasignar')
->name('tribunal.listaReasignar');


Route::group([
    'middleware' => 'UserStandard',
    'prefix' => 'userstandard',
], function () {

    Route::get('', 'UsuarioController@index');

 
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('login', function () {
    return view('auth.login');
});

Route::get('carrerastandard', function () {
     $carreras = \App\Carrera::all();
     return view('carrera.listastandard',compact('carreras'));
});

Route::get('areastandard', function () {
     $areas = \App\Area::all();
     return view('area.listastandard',compact('areas'));
});

Route::get('estudiantestandard', function () {
     $estudiantes = \App\Estudiante::all();
     return view('estudiante.listastandard',compact('estudiantes'));
});
Route::get('gestonstandard', function () {
     $gestions = \App\Gestion::all();
     return view('gestion.listastandard',compact('gestions'));
});
Route::get('modalidadstandard', function () {
     $modalidades = \App\Modalidades::all();
     return view('modalidad.listastandard',compact('modalidades'));
});
Route::get('profesionalstandard', function () {
     $profesionales = \App\Profesional::all();
     return view('profesional.listastandard',compact('profesionales'));
});
Route::get('proyectostandard', function () {
     $proyectos = \App\Proyecto::all();
     return view('proyecto.listastandard',compact('proyectos'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('standard', function () {
   $users = \App\User::All();
        return view('usuario.listastandard',compact('users'));
});

