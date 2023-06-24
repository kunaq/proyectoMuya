<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;

class FuncionesController extends Controller
{

    public function logout()
    {
        Auth::logout();
        // Opcionalmente, puedes redirigir al usuario a una página específica después de cerrar sesión
        return redirect('index.php');
    }

    public function actualizaContrasenna(Request $request)
    {
        $client = new Client();
        $data = [
            'dsc_ruc_empresa'=> '20555348887',
            'dsc_documento'=> session('docTrabajador'),
            'dsc_clave'=> $request['dsc_clave']
        ];
            
        $data = json_encode($data);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Configuracion/ActualizarClave', $header, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode();
                $reason = $response->getReasonPhrase();

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });

            $promise->wait();
            $mensaje= 'Actualizado';
            return $mensaje;

        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

}
