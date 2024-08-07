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
Route::get('/adios/{mensaje?}', function (Request $request, $mensaje = null): RedirectResponse {
    Auth::logout();
 
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirigir a la página de inicio con el parámetro si está presente
    if ($mensaje !== null) {
        return redirect("/?mensaje=$mensaje");
    }
 
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
    Route::put('/api/ReprogramarSolicitudVacaciones', [APIController::class, 'ReprogramarSolicitudVacaciones'])->name('api.ReprogramarSolicitudVacaciones');
    Route::put('/api/ActualizarVacacionesProgramadas', [APIController::class, 'ActualizarVacacionesProgramadas'])->name('api.ActualizarVacacionesProgramadas');
    Route::put('/api/InsertarMensajeTrabajador', [APIController::class, 'InsertarMensajeTrabajador'])->name('api.InsertarMensajeTrabajador');
    Route::put('/api/ActualizarReglaTrabajador', [APIController::class, 'ActualizarReglaTrabajador'])->name('api.ActualizarReglaTrabajador');

    //-----------------------Vistas PDF-----------------------------//
    Route::view('/docAdelantoVaca','docAdelantoVaca')->name('docAdelantoVaca');
    Route::view('/docSolicitudVaca','docSolicitudVaca')->name('docSolicitudVaca');
    Route::get('/ObtenerBase64', [CreaPDFController::class, 'ObtenerBase64'])->name('api.ObtenerBase64');
    //-----------------------Envio Correo-----------------------------//
    Route::post('/api/enviarCorreo',[APIController::class, 'enviarCorreo'])->name('enviarCorreo');
    //Route::post('/api/enviarCorreo',function(){return 'llego controller';});
    
    Route::view('/cambioContrasena','cambioContrasena')->name('cambioContrasena');
    Route::view('/primerCambio','primerCambio')->name('primerCambio');
    Route::view('/configXtrabajador','configXtrabajador')->name('configXtrabajador');
    Route::view('/delegacion','delegacion')->name('delegacion');
    Route::view('/mensajes','mensajes')->name('mensajes');
    Route::view('/fechasImp','fechasImp')->name('fechasImp');
    Route::view('/documentos','documentos')->name('documentos');
    Route::view('/datosPersonales','datosPersonales')->name('datosPersonales');
    Route::view('/aprobacionVacaciones','aprobacionVacaciones')->name('aprobacionVacaciones');
    Route::view('/visorServicios','visorServicios')->name('visorServicios');
    Route::view('/','index')->name('index');


    //Route::get('/logout', [FuncionesController::class, 'logout'])->name('logout');
    Route::put('/actualizaContrasenna', [FuncionesController::class, 'actualizaContrasenna'])->name('actualizaContrasenna');
    Route::get('func/ObtenerValidacionVacacionesPagadas', [FuncionesController::class, 'ObtenerValidacionVacacionesPagadas'])->name('lista.ObtenerValidacionVacacionesPagadas');
    Route::put('func/AnularGoceVacaciones', [FuncionesController::class, 'AnularGoceVacaciones'])->name('lista.AnularGoceVacaciones');
    Route::put('func/ActualizarParametro', [FuncionesController::class, 'ActualizarParametro'])->name('lista.ActualizarParametro');
    Route::get('func/ListarVacacionesDias', [FuncionesController::class, 'ListarVacacionesDias'])->name('func.ListarVacacionesDias');
    Route::get('func/ObtenerDiasVacacionesProyectadas', [FuncionesController::class, 'ObtenerDiasVacacionesProyectadas'])->name('func.ObtenerDiasVacacionesProyectadas');

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
    Route::get('lista/MuestraColaboradores', [ListaController::class, 'MuestraColaboradores'])->name('lista.MuestraColaboradores');
    Route::get('api/ObtenerColaborador', [APIController::class, 'ObtenerColaborador'])->name('api.ObtenerColaborador');
    Route::put('api/ActualizarDelegacion', [APIController::class, 'ActualizarDelegacion'])->name('lista.ActualizarDelegacion');
    Route::get('lista/MuestraTrabajadores', [ListaController::class, 'MuestraTrabajadores'])->name('lista.MuestraTrabajadores');
    Route::get('lista/MuestraResponsables', [ListaController::class, 'MuestraResponsables'])->name('lista.MuestraResponsables');
    Route::get('lista/ListarColaborador', [ListaController::class, 'ListarColaborador'])->name('lista.ListarColaborador');
    Route::put('api/InsertarColaborador', [APIController::class, 'InsertarColaborador'])->name('lista.InsertarColaborador');
    Route::put('api/ActualizarColaborador', [APIController::class, 'ActualizarColaborador'])->name('lista.ActualizarColaborador');
    Route::put('api/InsertarResponsable', [APIController::class, 'InsertarResponsable'])->name('api.InsertarResponsable');
    Route::get('lista/ListarReglasJefe', [ListaController::class, 'ListarReglasJefe'])->name('lista.ListarReglasJefe');
    Route::get('lista/ListarReglasTrabajador', [ListaController::class, 'ListarReglasTrabajador'])->name('lista.ListarReglasTrabajador');
    Route::get('api/ObtenerCoincidenciaVacacionesxTrabajador', [APIController::class, 'ObtenerCoincidenciaVacacionesxTrabajador'])->name('lista.ObtenerCoincidenciaVacacionesxTrabajador');
    Route::get('lista/ListarParametro', [ListaController::class, 'ListarParametro'])->name('lista.ListarParametro');
    Route::get('lista/ObtenerCorreo', [ListaController::class, 'ObtenerCorreo'])->name('lista.ObtenerCorreo');
    Route::get('api/ListarVentana', [APIController::class, 'ListarVentana'])->name('api.ListarVentana');
    Route::get('lista/ListarSolicitudVacacionesxResponsable', [ListaController::class, 'ListarSolicitudVacacionesxResponsable'])->name('lista.ListarSolicitudVacacionesxResponsable');
    Route::get('lista/ListarFeriado', [ListaController::class, 'ListarFeriado'])->name('lista.ListarFeriado');
    Route::get('lista/ListarReporteVacacionesxTrabajador', [ListaController::class, 'ListarReporteVacacionesxTrabajador'])->name('lista.ListarReporteVacacionesxTrabajador');
    Route::get('lista/ListarReporteVacacionesxTrabajadorV2', [ListaController::class, 'ListarReporteVacacionesxTrabajadorV2'])->name('lista.ListarReporteVacacionesxTrabajadorV2');
    Route::get('lista/ListarBoletaPago', [ListaController::class, 'ListarBoletaPago'])->name('lista.ListarBoletaPago');
    Route::get('lista/ListarConstanciaCTS', [ListaController::class, 'ListarConstanciaCTS'])->name('lista.ListarConstanciaCTS');
    Route::get('lista/ListarConvenio', [ListaController::class, 'ListarConvenio'])->name('lista.ListarConvenio');
    Route::get('lista/ListarSolicitud', [ListaController::class, 'ListarSolicitud'])->name('lista.ListarSolicitud');
    Route::get('lista/ListarUtilidades', [ListaController::class, 'ListarUtilidades'])->name('lista.ListarUtilidades');

    Route::get('lista/ActualizarEstadoMensaje', [ListaController::class, 'ActualizarEstadoMensaje'])->name('lista.ActualizarEstadoMensaje');
    Route::get('lista/ListarSolicitudMasiva', [ListaController::class, 'ListarSolicitudMasiva'])->name('lista.ListarSolicitudMasiva');
    Route::get('lista/ListarLocalidad', [ListaController::class, 'ListarLocalidad'])->name('lista.ListarLocalidad');
    Route::get('lista/ListarArea', [ListaController::class, 'ListarArea'])->name('lista.ListarArea');
    Route::get('lista/ListarFormato', [ListaController::class, 'ListarFormato'])->name('lista.ListarFormato');
    Route::get('lista/ListarFechaActual', [ListaController::class, 'ListarFechaActual'])->name('lista.ListarFechaActual');

    Route::get('lista/ListaVacia', function(){
        return ['mensaje'=> "OK", 'response'=> []];
    })->name('lista.ListaVacia');

    //--------------------indicadores---------------------------------
    Route::get('lista/ObtenerPromedioDiasPendiente', [ListaController::class, 'ObtenerPromedioDiasPendiente'])->name('lista.ObtenerPromedioDiasPendiente');
    Route::get('lista/ObtenerReprogramaciones', [ListaController::class, 'ObtenerReprogramaciones'])->name('lista.ObtenerReprogramaciones');
    Route::get('lista/ObtenerDiasPendiente', [ListaController::class, 'ObtenerDiasPendiente'])->name('lista.ObtenerDiasPendiente');

    //------------------------Guardar datos -------------------------------
    Route::put('api/InsertarSolicitudVacaciones', [APIController::class, 'InsertarSolicitudVacaciones'])->name('lista.InsertarSolicitudVacaciones');

    //------------------------Subir archivo Excel--------------------------
    Route::post('/subir-archivo', [ArchivoController::class, 'SubirArchivo'])->name('subirArchivo');
    Route::post('/validar-archivo', [ArchivoController::class, 'ValidarArchivo'])->name('validarArchivo'); 
    Route::post('/subir-archivo-config', [ArchivoController::class, 'subirArchivoConfiguraciones'])->name('subirArchivoConfiguraciones');

    //-----------------------Visor de servicios----------------------------
    Route::get('lista/ListarUsoServicio', [ListaController::class, 'ListarUsoServicio'])->name('lista.ListarUsoServicio');


// Route::get('/', function () {
//     return view('welcome');
// });
