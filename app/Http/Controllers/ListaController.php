<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

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

    public function ListarSolicitudColaboradorxAprobar(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = $request['codTrabajador'];
        $flg_equipos = $request['flg_equipos'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarSolicitudColaboradorxAprobar/20555348887/'.$cod_trabajador.'/'.$flg_equipos);
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

    public function ObtenerCorreo(Request $request)
    {   
        $client = new Client();
        $dni =  $request['dscDni'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ObtenerCorreo/20555348887/'.$dni);
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

    public function ListarFeriado(Request $request)
    {   
        $client = new Client();
        $anno =  $request['anno'];
        $codTra = session('codTrabajador');
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Feriado/ListarFeriado/20555348887/'.$anno.'/'.$codTra);
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

    public function ListarSolicitudVacacionesxResponsable(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $fchIni =  $request['fchIni'];
        $fchFin =  $request['fchFin'];
        $origen = $request['origen'];
        $visualizar = $request['visualizar'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarSolicitudVacacionesxResponsable/20555348887/'.$codTra.'/'.$fchIni.'/'.$fchFin.'/'.$origen.'/'.$visualizar);
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

    public function ObtenerPromedioDiasPendiente(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $codGrupo = $request['codGrupo'];
        $codSede = $request['codSede'];
        $codArea = $request['codArea'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ObtenerPromedioDiasPendiente/20555348887/'.$codTra.'/'.$codGrupo.'/'.$codSede.'/'.$codArea);
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

    public function ObtenerReprogramaciones(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $codGrupo = $request['codGrupo'];
        $codSede = $request['codSede'];
        $codArea = $request['codArea'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ObtenerReprogramaciones/20555348887/'.$codTra.'/'.$codGrupo.'/'.$codSede.'/'.$codArea);
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

    public function ObtenerDiasPendiente(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $codGrupo = $request['codGrupo'];
        $codSede = $request['codSede'];
        $codArea = $request['codArea'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ObtenerDiasPendiente/20555348887/'.$codTra.'/'.$codSede.'/'.$codArea);
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

    public function ListarReporteVacacionesxTrabajador(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $fchIni =  $request['fchIni'];
        $fchFin =  $request['fchFin'];
        $origen = $request['origen'];// APR TRA
        $visualizar = $request['visualizar'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarReporteVacacionesxTrabajador/20555348887/'.$codTra.'/'.$fchIni.'/'.$fchFin.'/'.$origen.'/'.$visualizar);
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

    public function ListarBoletaPago(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $annoIni =  $request['annoIni'];
        $annoFin =  $request['annoFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ListarBoletaPago/20555348887/'.$codTra.'/'.$annoIni.'/'.$annoFin);
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

    public function ListarConstanciaCTS(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $annoIni =  $request['annoIni'];
        $annoFin =  $request['annoFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ListarConstanciaCTS/20555348887/'.$codTra.'/'.$annoIni.'/'.$annoFin);
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

    public function ListarConvenio(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $annoIni =  $request['annoIni'];
        $annoFin =  $request['annoFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ListarConvenio/20555348887/'.$codTra.'/'.$annoIni.'/'.$annoFin);
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

    public function ListarUtilidades(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $annoIni =  $request['annoIni'];
        $annoFin =  $request['annoFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ListarConstanciaUtilidades/20555348887/'.$codTra.'/'.$annoIni.'/'.$annoFin);
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

    public function ListarSolicitud(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $annoIni =  $request['annoIni'];
        $annoFin =  $request['annoFin'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Indicador/ListarSolicitud/20555348887/'.$codTra.'/'.$annoIni.'/'.$annoFin);
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

    public function ActualizarEstadoMensaje(Request $request)
    {
        $client = new Client();
        $data = json_encode($request['data']);
        $header = [
            'Content-Type' => 'application/json'
        ];

        try {
            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/ActualizarEstado/20555348887', $header, $data);
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

    public function ListarSolicitudMasiva(Request $request)
    {   
        $client = new Client();
        $numImport =  $request['numImport'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Masivo/ListarSolicitudMasiva/20555348887/'.$numImport);
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

    public function ListarUsoServicio(Request $request)
    {   
        $client = new Client();
        Carbon::setLocale('en');
        $fchInicio = Carbon::now()->subMonths(2);
        $fchFin = Carbon::now()->addMonths(2);
        $camposanto = '%';
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/UsoServicio/ListarUsoServicio/20555348887/'.$camposanto.'/'.$fchInicio.'/'.$fchFin);
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

    public function ListarLocalidad()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Empresa/ListarLocalidad/20555348887');
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

    public function ListarArea()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Empresa/ListarArea/20555348887');
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

    public function ListarFormato()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Formato/ListarFormato/20555348887');
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

    public function ListarFechaActual()
    {   
        $client = new Client();
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Combos/ListarFechaActual/20555348887');
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

    public function ListarReporteVacacionesxTrabajadorV2(Request $request)
    {   
        $client = new Client();
        $codTra =  $request['codTra'];
        $fchIni =  $request['fchIni'];
        $origen = $request['origen'];// CON
        $visualizar = $request['visualizar'];
        try {
                          
            $request = new \GuzzleHttp\Psr7\Request('GET','https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ListarReporteVacacionesxTrabajadorV2/20555348887/'.$codTra.'/'.$fchIni.'/'.$origen.'/'.$visualizar);
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
