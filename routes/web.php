<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\CreaPDFController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\CorreoController;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/home', 'home')->name('home');
Route::get('/adios', function (Request $request): RedirectResponse {
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    
})->name('logout');



    Route::get('/api/login', [APIController::class, 'login'])->name('api.login');

    Route::view('/vacacionesEmpresa','vacacionesEmpresa')->name('vacacionesEmpresa');
    Route::view('/solicitudVacaciones','solicitudVacaciones')->name('solicitudVacaciones');
    Route::post('/api/solicitud', [APIController::class, 'solicitud'])->name('api.solicitud');
    Route::post('/api/generarDocumento', [APIController::class, 'generarDocumento'])->name('api.generarDocumento');

    Route::get('/api/crearPdf', [CreaPDFController::class, 'generarPDF'])->name('api.convenioVacaciones');
    Route::get('/api/crearPdfSolicitud', [CreaPDFController::class, 'generarPDFSolicitud'])->name('api.docSoliVacaciones');
    Route::get('/api/enviarDocumentos', [CreaPDFController::class, 'enviarDocumentos'])->name('api.enviarDocumentos');
    Route::put('/api/AprobarSolicitudVacaciones', [APIController::class, 'AprobarSolicitudVacaciones'])->name('api.AprobarSolicitudVacaciones');
    Route::put('/api/RechazarSolicitudVacaciones', [APIController::class, 'RechazarSolicitudVacaciones'])->name('api.RechazarSolicitudVacaciones');
    Route::put('/api/ActualizarVacacionesProgramadas', [APIController::class, 'ActualizarVacacionesProgramadas'])->name('api.ActualizarVacacionesProgramadas');
    Route::put('/api/InsertarMensajeTrabajador', [APIController::class, 'InsertarMensajeTrabajador'])->name('api.InsertarMensajeTrabajador');


    //-----------------------Vistas PDF-----------------------------//
    Route::view('/docAdelantoVaca','docAdelantoVaca')->name('docAdelantoVaca');
    Route::view('/docSolicitudVaca','docSolicitudVaca')->name('docSolicitudVaca');
    //-----------------------Envio Correo-----------------------------//
    Route::post('/api/enviarCorreo',[APIController::class, 'enviarCorreo'])->name('enviarCorreo');
    //Route::post('/api/enviarCorreo',function(){return 'llego controller';});
    //-----------------------Fin vistas PDF-----------------------------//
    
    Route::view('/cambioContrasena','cambioContrasena')->name('cambioContrasena');
    Route::view('/primerCambio','primerCambio')->name('primerCambio');
    Route::view('/configXtrabajador','configXtrabajador')->name('configXtrabajador');
    Route::view('/delegacion','delegacion')->name('delegacion');
    Route::view('/mensajes','mensajes')->name('mensajes');
    Route::view('/fechasImp','fechasImp')->name('fechasImp');
    Route::view('/documentos','documentos')->name('documentos');
    Route::view('/datosPersonales','datosPersonales')->name('datosPersonales');
    Route::view('/aprobacionVacaciones','aprobacionVacaciones')->name('aprobacionVacaciones');
    Route::view('/','index')->name('index');


    // Route::get('/logout', [FuncionesController::class, 'logout'])->name('logout');

     //-----------------------Mostrar Datos-----------------------------//
    Route::get('api/ObtenerTrabajador', [APIController::class, 'ObtenerTrabajador'])->name('api.ObtenerTrabajador');
    Route::get('lista/ListarUltimosMensajes', [ListaController::class, 'ListarUltimosMensajes'])->name('api.ListarUltimosMensajes');
    Route::get('lista/ListarMensajePendientes', [ListaController::class, 'ListarMensajePendientes'])->name('api.ListarMensajePendientes');
    Route::get('lista/ListarMensajeFinalizados', [ListaController::class, 'ListarMensajeFinalizados'])->name('api.ListarMensajeFinalizados');
    Route::get('lista/ListarMensajeAvisos', [ListaController::class, 'ListarMensajeAvisos'])->name('api.ListarMensajeAvisos');
    Route::get('lista/ListarDerechoHabientes', [ListaController::class, 'ListarDerechoHabientes'])->name('api.ListarDerechoHabientes');

    Route::get('api/ObtenerPagoHaberes', [APIController::class, 'ObtenerPagoHaberes'])->name('api.ObtenerPagoHaberes');
    Route::get('api/ObtenerPagoAdelantoVacaciones', [APIController::class, 'ObtenerPagoAdelantoVacaciones'])->name('api.ObtenerPagoAdelantoVacaciones');
    Route::get('api/ObtenerPagoCts', [APIController::class, 'ObtenerPagoCts'])->name('api.ObtenerPagoCts');
    Route::get('api/ObtenerPagoGratificacion', [APIController::class, 'ObtenerPagoGratificacion'])->name('api.ObtenerPagoGratificacion');
    Route::get('lista/MuestraAnhos', [ListaController::class, 'MuestraAnhos'])->name('lista.MuestraAnhos');
    Route::put('api/FinalizarMensaje', [APIController::class, 'FinalizarMensaje'])->name('api.FinalizarMensaje');
    Route::get('lista/ListarSolicitudVacaciones', [ListaController::class, 'ListarSolicitudVacaciones'])->name('lista.ListarSolicitudVacaciones');
    Route::get('lista/ObtenerSolicitudVacaciones', [ListaController::class, 'ObtenerSolicitudVacaciones'])->name('lista.ObtenerSolicitudVacaciones');
    Route::get('lista/ListarVacacionesProgramadas', [ListaController::class, 'ListarVacacionesProgramadas'])->name('lista.ListarVacacionesProgramadas');
    Route::get('lista/ListarSolicitudColaboradorxAprobar', [ListaController::class, 'ListarSolicitudColaboradorxAprobar'])->name('lista.ListarSolicitudColaboradorxAprobar');

    //------------------------Guardar datos -------------------------------
    Route::put('api/InsertarSolicitudVacaciones', [APIController::class, 'InsertarSolicitudVacaciones'])->name('lista.InsertarSolicitudVacaciones');

    //------------------------Subir archivo Excel--------------------------
    Route::post('/subir-archivo', [ArchivoController::class, 'SubirArchivo'])->name('subirArchivo');

// Route::get('/', function () {
//     return view('welcome');
// });
