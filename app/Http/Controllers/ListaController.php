<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;

class ListaController extends Controller
{
    public function ListarUltimosMensajes()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/ListarUltimosMensajes/20555348887/'.$cod_trabajador);
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

    public function ListarMensajePendientes()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/ListarMensajePendientes/20555348887/'.$cod_trabajador);
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

    public function ListarMensajeFinalizados()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/ListarMensajeFinalizados/20555348887/'.$cod_trabajador);
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

    public function ListarMensajeAvisos()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/ListarMensajeAvisos/20555348887/'.$cod_trabajador);
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


    
    public function ListarDerechoHabientes()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ListarDerechoHabientes/20555348887/'.$cod_trabajador);
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
