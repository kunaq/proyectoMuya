<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;


class APIController extends Controller
{
    public function login(Request $request)
    {   
        $client = new Client();
        $usuario = $request['usuario'];
        $password = $request['password'];
        try {
            $response = $client->request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Logueo/LogueoUsuario/20555348887/'.$usuario.'/'.$password, [
                'http_errors' => false, // Permite manejar errores HTTP personalizados
            ]);

            $statusCode = $response->getStatusCode();
            $responseData = json_decode($response->getBody()->getContents());

            // Aquí puedes procesar la respuesta de la API según tus requisitos

            $nombre = strtolower($responseData->response->dsc_usuario);

            //Definimos las variables de sesión
            Session::put('codTrabajador', $responseData->response->cod_usuario);
            Session::put('docTrabajador', $responseData->response->dsc_documento);
            Session::put('nombreTrabajador', $responseData->response->dsc_usuario);
            // Session::put('mailPerTrabajador', $responseData->response->dsc_mail_personal);
            // Session::put('mailEmpTrabajador', $responseData->response->dsc_mail_empresa);
            // Session::put('codSupervisor', $responseData->response->cod_supervisor);
            // Session::put('nombreSupervisor', $responseData->response->dsc_superior );
            // Session::put('mailPerSupervisor', $responseData->response->dsc_mail_personal_supervisor);
            // Session::put('mailEmpSupervisor', $responseData->response->dsc_mail_empresa_supervisor);
            // Session::put('correoEnvio', $responseData->response->dsc_mail_configuracion);
            // Session::put('claveEnvio', $responseData->response->dsc_password_configuracion);
            // Session::put('dscHost', $responseData->response->dsc_host_configuracion);
            // Session::put('numHost', $responseData->response->num_host_configuracion);
            // Session::put('dscSmtp', $responseData->response->dsc_smtp_configuracion);



            // Ejemplo de retorno de la respuesta
            return response()->json(['status' => $statusCode, 'data' => $responseData],);
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public static function solicitud()
    {   
        $client = new Client();

        try {
            $response = $client->request('POST', 'https://test45.davicloud.com/API/v1/api_rest.php/access_token', [
                'headers' => [
                    'Jcdf-Apib-Subscription-Key' => '69b220cffb8a89b060cabfd992cfa9b3',
                    'Authorization' => 'Basic MTkyMGQyYzJlY2UyODM3Yjo2YjU2ODY0NTJkMDlmZGMx',
                ],
                'http_errors' => false, // Permite manejar errores HTTP personalizados
            ]);

            $statusCode = $response->getStatusCode();
            $responseData = $response->getBody()->getContents();

            // Aquí puedes procesar la respuesta de la API según tus requisitos
            $token = explode('"',$responseData);
            
            // Ejemplo de retorno de la respuesta
            return $token[3];
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function generarDocumento($token,$data)
    {   
        $client = new Client();

        //return $data;
        try {

            $headers = [
                'Jcdf-Apib-Subscription-Key' => '69b220cffb8a89b060cabfd992cfa9b3',
                'Authorization' => 'Bearer '.$token,
                'Content-Type' => 'application/json'
              ];
              
            $request = new \GuzzleHttp\Psr7\Request('POST','https://test45.davicloud.com/API/v1/api_rest.php/genera_documento', $headers, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                return response()->json(['status' => $code, 'mensaje' => $reason]);

            });
            
            $promise->wait();
            

            // $statusCode = $request->getStatusCode();
            // $responseData = $request->getBody()->getContents();

            // Aquí puedes procesar la respuesta de la API según tus requisitos

            // Ejemplo de retorno de la respuesta
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ObtenerTrabajador()
    {   
        $client = new Client();
        try {
            $cod_trabajador = session('codTrabajador');
            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ObtenerTrabajador/20555348887/'.$cod_trabajador);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function ObtenerPagoHaberes(Request $request)
    {   
        $client = new Client();
        try {
            $cod_anno = $request['cod_anno'];

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Periodo/ObtenerPagoHaberes/20555348887/'.$cod_anno);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ObtenerPagoAdelantoVacaciones(Request $request)
    {   
        $client = new Client();
        try {
            $cod_anno = $request['cod_anno'];

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Periodo/ObtenerPagoAdelantoVacaciones/20555348887/'.$cod_anno);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ObtenerPagoCts(Request $request)
    {   
        $client = new Client();
        try {
            $cod_anno = $request['cod_anno'];

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Periodo/ObtenerPagoCts/20555348887/'.$cod_anno);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ObtenerPagoGratificacion(Request $request)
    {   
        $client = new Client();
        try {
            $cod_anno = $request['cod_anno'];

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Periodo/ObtenerPagoGratificacion/20555348887/'.$cod_anno);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function FinalizarMensaje(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['mensaje']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/FinalizarMensaje/20555348887', $header, $data);
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

    public function InsertarSolicitudVacaciones(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['solVac']);
        try {
            $cod_anno = $request['cod_anno'];

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/InsertarSolicitudVacaciones/20555348887',$headers,$data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function AprobarSolicitudVacaciones(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['solVac']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/AprobarSolicitudVacaciones/20555348887',$headers,$data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
   
    public function RechazarSolicitudVacaciones(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['solVac']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/RechazarSolicitudVacaciones/20555348887',$headers,$data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                echo  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 
                return response()->json(['status' => $code, 'mensaje' => $reason]);
            });
            $promise->wait();
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
