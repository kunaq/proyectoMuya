<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FuncionesController;


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
            Session::put('flgResponsable', $responseData->response->flg_responsable);
            Session::put('codSupervisor', $responseData->response->cod_supervisor);
            Session::put('mailPerSupervisor', $responseData->response->dsc_mail_personal_supervisor);
            Session::put('mailEmpSupervisor', $responseData->response->dsc_mail_empresa_supervisor);
            Session::put('correoEnvio', $responseData->response->dsc_mail_configuracion);
            Session::put('claveEnvio', $responseData->response->dsc_password_configuracion);
            Session::put('dscHost', $responseData->response->dsc_host_configuracion);
            Session::put('numHost', $responseData->response->num_host_configuracion);
            Session::put('flgAcuerdoFirm', $responseData->response->flg_acuerdo_firmado);
            Session::put('ctdProgVac', $responseData->response->num_ctd);
            Session::put('ctdDiasProgVac', $responseData->response->num_dias_programados);
            Session::put('codGrupoVac', $responseData->response->cod_grupo_vacaciones);


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
                $body =  $response->getBody();
                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 

                //return response()->json(['status' => $code, 'mensaje' => $body]);

                return $response->getBody()->getContents();

            });
            
            $promise->wait();
           
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ObtenerTrabajador(Request $request)
    {   
        $client = new Client();
        try {
            //$cod_trabajador = session('codTrabajador');
            $cod_trabajador = $request['cod_trabajador'];
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

    public function ActualizarVacacionesProgramadas(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ActualizarVacacionesProgramadas/20555348887',$headers,$data);
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

    public function InsertarMensajeTrabajador(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Mensaje/InsertarMensajeTrabajador/20555348887',$headers,$data);
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

    function enviarCorreo(Request $request) {

        $destinatario = $request['destinatario'];
        $correoDestino = $request['correoDestino'];
        $correoCorp = $request['correoCorp'];
        $correoSupervisor = $request['correoSup'];
        $actividad = $request['actividad'];
        $fechaLimite = $request['fchLimite'];
        $fechaNotificacion = $request['fchNotif'];
        $asunto = $request['asunto'];
        $solicitante =  $request['solicitante'];

        // Extraer los datos de configuración 
        $correo = $request->session()->get('correoEnvio');
        $clave = $request->session()->get('claveEnvio');
        $host = $request->session()->get('dscHost');
        $puerto = $request->session()->get('numHost');
        $esSMTP = $request->session()->get('dscSmtp');

        if($request['accion'] == 'olvido'){
            $host = 'mail.grupomuya.com.pe';
            $puerto = 587;

            $mensaje =  $mensaje = "Estimado(a) $destinatario,<br><br>
            
            Ingrese al sistema con su DNI y la siguiente contraseña de recuperación:<br><br>
            
            Contraseña: GMUYA".$actividad."<br><br>
            
            Puedes ingresar al intranet <a href='http://proyectomuya.kunaq.net.pe/'>aquí</a>.<br><br>
            
            Atte.<br><br>
            
            [Razón social] - Grupo Muya";

            $controll = new FuncionesController();
            $actualiza =$controll->actualizaContrasenna($request);
            

        }else{
            
            $mensaje = "Estimado(a) $destinatario,<br><br>
            
            Tienes el siguiente mensaje por revisar en el intranet de la empresa:<br><br>
            
            Fecha de notificación: $fechaNotificacion <br>
            Fecha límite: $fechaLimite <br>
            Solicitante/responsable: $solicitante <br>
            Actividad: $actividad <br><br>
            
            Puedes ingresar al intranet <a href='http://proyectomuya.kunaq.net.pe/'>aquí</a>.<br><br>
            
            Atte.<br><br>
            
            [Razón social] - Grupo Muya";
        }

        //return response()->json(compact('correo','clave','host','puerto','esSMTP'));
        // Configurar los datos del correo saliente
        config([
            'mail.mailers.smtp.host' => $host,
            'mail.mailers.smtp.port' => $puerto,
            'mail.mailers.smtp.username' => 'comprobantedepago@grupomuya.com.pe',
            'mail.mailers.smtp.password' => '',
            'mail.mailers.smtp.encryption' => 'TLS',
            'mail.mailers.smtp.auth_mode' => 'PLAIN', 
            'mail.from.address' => 'comprobantedepago@grupomuya.com.pe',
            'mail.from.name' => 'Grupo Muya'
        ]);
    
        // Enviar el correo
        Mail::html($mensaje, function ($message) use ($correoDestino,$correoSupervisor,$correoCorp, $asunto) {
            $message->to($correoDestino);
            $message->subject($asunto);
            if ($correoSupervisor != '' || $correoSupervisor != null) {
                $message->cc($correoSupervisor);
            }
            if ($correoCorp != '' || $correoCorp != null) {
                $message->cc($correoCorp);
            }
            $message->cc('echanganaqui@kunaq.pe');
            $message->cc('larias@kunaq.pe');
            $message->cc('mgonzalez@kunaq.pe');
           $message->cc('bgalvan@kunaq.pe');
        });

    }

    public function ObtenerColaborador(Request $request)
    {   
        $client = new Client();
        $cod_trabajador = session('codTrabajador');

        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Permiso/ObtenerColaborador/20555348887/'.$cod_trabajador);
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

    public function ActualizarDelegacion(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Permiso/ActualizarDelegacion/20555348887/',$headers,$data);
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

    public function InsertarColaborador(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/InsertarColaborador/20555348887/',$headers,$data);
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

    public function ActualizarColaborador(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ActualizarColaborador/20555348887/',$headers,$data);
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

    public function InsertarResponsable(Request $request)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/InsertarResponsable/20555348887/',$headers,$data);
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

    public function ObtenerCoincidenciaVacaciones(Request $request)
    {   
        $client = new Client();
        $codGrupo = $request['codGrupo'];
        $fchIni = $request['fchIni'];
        $fchFin = $request['fchFin'];
        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ObtenerCoincidenciaVacaciones/20555348887/'.$codGrupo.'/'.$fchIni.'/'.$fchFin);
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

    public function ReprogramarSolicitudVacaciones(Request $request)
    {  
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['solVac']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ReprogramarSolicitudVacaciones/20555348887',$headers,$data);
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

    public function ListarVentana(Request $request)
    {  
        $client = new Client();
        $cod_trabajador = session('codTrabajador');
        try {
            $response = $client->request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Trabajador/ListarVentana/20555348887/'.$cod_trabajador, [
                'http_errors' => false, // Permite manejar errores HTTP personalizados
            ]);

            $statusCode = $response->getStatusCode();
            $responseData = json_decode($response->getBody()->getContents());

            //Definimos las variables de sesión

            foreach ($responseData->response as $key) {
                $codigo = $key->cod_ventana; 
                
                if($codigo == '4.2'){
                    Session()->put('ventana4_2','SI');
                }
                if($codigo == '4.3'){
                    Session()->put('ventana4_3','SI');
                }
                if($codigo == '5.2'){
                    Session()->put('ventana5_2','SI');
                }
                if($codigo == '5.3'){
                    Session()->put('ventana5_3','SI');
                }
                
            }


            // Ejemplo de retorno de la respuesta
           // return response()->json(['status' => $statusCode, 'data' => $responseData],);
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function ActualizarReglaTrabajador(Request $request)
    {  
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = json_encode($request['data']);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Regla/ActualizarReglaTrabajador/20555348887',$headers,$data);
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

    public static function idTansaccion()
    {   
        $client = new Client();

        try {
            $response = $client->request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/ControlEnvio/ObtenerTransaccion/20555348887');
            $statusCode = $response->getStatusCode();
            $responseData = $response->getBody()->getContents();

            // Aquí puedes procesar la respuesta de la API según tus requisitos
            $token = explode('":',$responseData);
            
            // Ejemplo de retorno de la respuesta
            return str_replace('}}', '',$token[3]);
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
}
