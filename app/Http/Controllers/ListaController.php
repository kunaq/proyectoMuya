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

    public function MuestraAnhos()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Combos/ListarAnhos/20555348887');
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

    public function ListarSolicitudVacaciones(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        $annoIni = $request['annoIni'];
        $annoFin = $request['annoFin'];
        
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarSolicitudVacaciones/20555348887/'.$cod_trabajador.'/'.$annoIni.'/'.$annoFin);
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

    public function ObtenerSolicitudVacaciones()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ObtenerSolicitudVacaciones/20555348887/'.$cod_trabajador.'/1');
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

    public function ListarVacacionesProgramadas(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = $request['codTrabajador'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarVacacionesProgramadas/20555348887/'.$cod_trabajador);
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

    public function ListarSolicitudColaboradorxAprobar()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarSolicitudColaboradorxAprobar/20555348887/'.$cod_trabajador);
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

    public function MuestraColaboradores()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Combos/ListarColaboradores/20555348887/'.$cod_trabajador);
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

    public function MuestraResponsables()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Combos/ListarResponsables/20555348887');
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

    public function MuestraTrabajadores()
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Combos/ListarTrabajadores/20555348887');
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

    public function ListarColaborador(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = $request['cod_trabajador'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ListarColaborador/20555348887/'.$cod_trabajador);
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


    public function ListarReglasJefe()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Regla/ListarReglasJefe/20555348887');
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

    public function ListarReglasTrabajador()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Regla/ListarReglasTrabajador/20555348887');
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

    public function ListarParametro()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Parametro/ListarParametro/20555348887');
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
