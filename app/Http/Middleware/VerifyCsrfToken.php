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
        '/api/enviarDocumentos',
        '/api/generarDocumento',

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
    ];
}
