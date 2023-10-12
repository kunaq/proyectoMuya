<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        '/api/solicitud',
        '/api/login',
        '/api/crearPdf',
        '/docAdelantoVaca',
        '/docSolicitudVaca',
        '/ObtenerBase64',
        '/api/enviarDocumentos',
        '/api/generarDocumento',
        '/api/AprobarSolicitudVacaciones',
        '/api/RechazarSolicitudVacaciones',
        '/api/ReprogramarSolicitudVacaciones',
        '/api/ActualizarVacacionesProgramadas',
        '/api/InsertarMensajeTrabajador',
        '/api/ActualizarReglaTrabajador',
        '/api/enviarCorreo',
        '/actualizaContrasenna',
        '/ListarSolicitudVacacionesxResponsable',
        'func/ObtenerValidacionVacacionesPagadas',
        'func/AnularGoceVacaciones',
        'func/ActualizarParametro', 

        '/api/ObtenerTrabajador',
        '/lista/ListarUltimosMensajes',
        '/lista/ListarMensajePendientes',
        '/lista/ListarMensajeFinalizados',
        '/lista/ListarMensajeAvisos',
        '/lista/ListarDerechoHabientes',
        '/api/ObtenerPagoHaberes',
        '/api/ObtenerPagoAdelantoVacaciones',
        '/api/ObtenerPagoCts',
        '/api/ObtenerPagoGratificacion',
        '/lista/MuestraAnhos',
        '/api/FinalizarMensaje',
        'lista/ListarSolicitudVacaciones',
        'lista/ObtenerSolicitudVacaciones',
        'lista/ListarVacacionesProgramadas',
        'lista/ListarSolicitudColaboradorxAprobar',
        '/lista/MuestraColaboradores',
        '/api/ObtenerColaborador',
        '/api/ActualizarDelegacion',
        '/lista/MuestraTrabajadores',
        '/lista/MuestraResponsables',
        '/lista/ListarColaborador',
        '/api/InsertarColaborador',
        '/api/ActualizarColaborador',
        '/api/InsertarResponsable',
        'lista/ListarReglasJefe',
        'lista/ListarReglasTrabajador',
        'api/ObtenerCoincidenciaVacacionesxTrabajador',
        'lista/ListarParametro',
        'lista/ObtenerCorreo',
        'api/ListarVentana',
        'lista/ListarFeriado',
        'lista/ListarReporteVacacionesxTrabajador',
        'lista/ListarBoletaPago',
        'lista/ListarConstanciaCTS',
        'lista/ActualizarEstadoMensaje',
        'lista/ListarSolicitudMasiva',
        'lista/ListarLocalidad',
        'lista/ListarArea',

        'lista/ObtenerPromedioDiasPendiente',
        'lista/ObtenerReprogramaciones',
        'lista/ObtenerDiasPendiente',
        
        'api/InsertarSolicitudVacaciones',
        
        '/subir-archivo',
        '/subir-archivo-config',

        'lista/ListarUsoServicio',
    ];
}
