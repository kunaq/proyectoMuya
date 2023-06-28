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
        if (session('docTrabajador')) {
            $codigo = session('docTrabajador');
        }else{
            $codigo = $request['actividad'];
        }
        if($request['dsc_clave'] != ''){
            $clave = $request['dsc_clave'];
        }else{
            $clave='GMUYA'.$request['actividad'];
        }
        $data = [
            'dsc_ruc_empresa'=> '20555348887',
            'dsc_documento'=> $codigo,
            'dsc_clave'=> $clave
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

    public function ListarSolicitudVacacionesxResponsable(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $fchIni =  $request['fchIni'];
        $fchFin =  $request['fchFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarSolicitudVacacionesxResponsable/20555348887/'.$codTra.'/'.$fchIni.'/'.$fchFin);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
