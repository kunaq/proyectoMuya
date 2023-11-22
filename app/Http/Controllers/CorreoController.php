<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class CorreoController extends Controller
{
    function enviarCorreo(Request $request) {
        return $request;
        $destinatario = $request['destino'];
        $asunto = $request['asunto'];
        $mensaje = $request['mensaje'];

        // Extraer los datos de configuración de la API
        $correo = $request->session()->get('correoEnvio');
        $clave = $request->session()->get('claveEnvio');
        $host = $request->session()->get('dscHost');
        $puerto = $request->session()->get('numHost');
        $esSMTP = $request->session()->get('dscSmtp');

        return response()->json_encode(compact('correo','clave','host','puerto','esSMTP'));
        // Configurar los datos del correo saliente
        config([
            'mail.mailers.smtp.host' => $host,
            'mail.mailers.smtp.port' => $puerto,
            'mail.mailers.smtp.username' => $correo,
            'mail.mailers.smtp.password' => $clave,
            'mail.mailers.smtp.encryption' => $esSMTP,
            'mail.from.address' => $correo,
            'mail.from.name' => 'Grupo Muya'
        ]);
    
        // Enviar el correo
        Mail::raw($mensaje, function ($message) use ($destinatario, $asunto) {
            $message->to($destinatario);
            $message->subject($asunto);
            $message->cc('echanganaqui@kunaq.pe');
            $message->cc('mgonzalez@kunaq.pe');
            $message->cc('bgalvan@kunaq.pe');
        });
    }
}
