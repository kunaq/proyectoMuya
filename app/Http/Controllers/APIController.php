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

        $recaptchaToken = $request['token'];

        $recaptchaSecret = '';


        try {

            $recaptchaResponse = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => $recaptchaSecret,
                    'response' => $recaptchaToken
                ]
            ]);


            $recaptchaData = json_decode($recaptchaResponse->getBody()->getContents());

            if (!$recaptchaData->success) {
                return response()->json(['error' => 'La verificación de reCAPTCHA falló.'], 400);
            } else {
                $response = $client->request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Logueo/LogueoUsuario/20555348887/' . $usuario . '/' . $password, [
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
                Session::put('docTraRRHH', $responseData->response->dsc_documento_rrhh);
                Session::put('periodoConvenio', $responseData->response->cod_periodo_vacaciones_convenio);
                Session::put('numVacaciones', $responseData->response->num_vacaciones);
                Session::put('nombreBienvenida', $responseData->response->nombres);
                Session::put('numPeriodoVacaciones', $responseData->response->num_periodo_vacaciones);
                Session::put('md5',md5($responseData->response->dsc_clave));


                // Ejemplo de retorno de la respuesta
                return response()->json(['status' => $statusCode, 'data' => $responseData]);
            }
        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public static function solicitud()
    {   
        $client = new Client();

        try {
            $response = $client->request('POST', 'https://grupomuya.davicloud.com/API/v1/api_rest.php/access_token', [
                'headers' => [
                    'Jcdf-Apib-Subscription-Key' => 'd7fa065f15b3b4efe45030f47483ff63',
                    'Authorization' => 'Basic YWYzN2I3ZDQ3OGUzMmMwMTo2NDQxOWJjZDZiNTQ4ODBl',
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
                'Jcdf-Apib-Subscription-Key' => 'd7fa065f15b3b4efe45030f47483ff63',
                'Authorization' => 'Bearer '.$token,
                'Content-Type' => 'application/json'
              ];
              
            $request = new \GuzzleHttp\Psr7\Request('POST','https://grupomuya.davicloud.com/API/v1/api_rest.php/genera_documento', $headers, $data);
            $promise = $client->sendAsync($request)->then(function ($response) {
                
                $bodyContents = $response->getBody()->getContents();
                $cleanedBodyContents = preg_replace('/^\xEF\xBB\xBF/', '', $bodyContents); // Eliminar el carácter de BOM
                $body = json_decode($cleanedBodyContents);

                if (json_last_error() !== JSON_ERROR_NONE) {
                    // Error al decodificar el JSON
                    return response()->json([
                        'error' => 'Error al decodificar el JSON de la respuesta',
                        'bodyContents' => $bodyContents,
                        'jsonLastError' => json_last_error_msg()
                    ], 500);
                }


                $code = $response->getStatusCode(); 
                $reason = $response->getReasonPhrase(); 


                return response()->json([
                    'body' => $body,
                    'code' => $code,
                    'reason' => $reason,
                    'compruebaError' => isset($body->error) ? $body->error : null,
                    'mensaje' => isset($body->message) ? $body->message : null,
                    'iddocumento' => isset($body->iddocumento) ? $body->iddocumento : null,
                    'timestamp' => isset($body->timestamp) ? $body->timestamp : null
                ]);

                // return $response->getBody()->getContents();

            });
            
            return $promise->wait();
           
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
        $correoPersonal = $request['correoPersonal'];
        $correoCorp = $request['correoCorp'];
        $actividad = $request['actividad'];
        $fechaLimite = $request['fchLimite'];
        $fechaNotificacion = $request['fchNotif'];
        $asunto = $request['asunto'];
        $solicitante =  $request['solicitante'];
        $codigoMensaje = $request['codigoMensaje'];
        $correoDestino = '';
        $correoCC = '';

        if($codigoMensaje == '4001' || $codigoMensaje == '4002' || $codigoMensaje == '4003'  || $codigoMensaje == '1001' || $codigoMensaje == '1004'){
            $correoDestino = $correoPersonal;
            $correoCC = $correoCorp;
        }else if($codigoMensaje == '1002' || $codigoMensaje == '1003' || $codigoMensaje == '4004' || $codigoMensaje == '4005'){
            $correoDestino = $correoCorp;
            $correoCC = '';
        }else if($codigoMensaje == 'olvido'){
            $correoDestino = $correoPersonal;
            $correoCC = '';
        }

        if($codigoMensaje == 'olvido'){
            
            $controll = new FuncionesController();
            $actualiza =$controll->actualizaContrasenna($request);

            $mensaje =  $mensaje = "Estimado(a) $destinatario,<br><br>
            
            Ingrese al sistema con su DNI y la siguiente contraseña de recuperación:<br><br>
            
            Contraseña: ".$actualiza."<br><br>
            
            Puedes ingresar al intranet <a href='https://intranet.grupomuya.com.pe/intranetpe/public'>aquí</a>.<br><br>
            
            Atte.<br><br>
            
            [Razón social] - Grupo Muya";

        }else{
            
            $mensaje = "Estimado(a) $destinatario,<br><br>
            
            Tienes el siguiente mensaje por revisar en el intranet de la empresa:<br><br>
            
            Fecha de notificación: $fechaNotificacion <br>
            Fecha límite: $fechaLimite <br>
            Solicitante/responsable: $solicitante <br>
            Actividad: $actividad <br><br>
            
            Puedes ingresar al intranet <a href='https://intranet.grupomuya.com.pe/intranetpe/public'>aquí</a>.<br><br>
            
            Atte.<br><br>
            
            [Razón social] - Grupo Muya";
        }

        //return response()->json(compact('correo','clave','host','puerto','esSMTP'));
        // Configurar los datos del correo saliente
        config([
            'mail.mailers.smtp.host' => '',
            'mail.mailers.smtp.port' => 587,

            'mail.mailers.smtp.username' => '',
            'mail.mailers.smtp.password' => '',
            'mail.mailers.smtp.encryption' => 'TLS',
            'mail.mailers.smtp.auth_mode' => 'PLAIN', 
            'mail.from.address' => '',
            'mail.from.name' => 'Grupo Muya'
        ]);
    
        // Enviar el correo
        Mail::html($mensaje, function ($message) use ($correoDestino,$correoCC, $asunto) {
            $message->to($correoDestino);
            $message->subject($asunto);
            if ($correoCC != '' || $correoCC != null) {
                $message->cc($correoCC);
            }
            $message->cc('echanganaqui@kunaq.pe');
            $message->cc('mgonzalez@kunaq.pe');
            $message->cc('bgalvan@kunaq.pe');
        });

    }

    public function ObtenerColaborador(Request $request)
    {   
        $client = new Client();
        if($request['codTra'] != ''){
            $cod_trabajador = $request['codTra'] ;
        }else{
            $cod_trabajador = session('codTrabajador');
        }

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

    public function ObtenerCoincidenciaVacacionesxTrabajador(Request $request)
    {   
        $client = new Client();
        $codTra = $request['codTra'];
        $fchIni = $request['fchIni'];
        $fchFin = $request['fchFin'];
        $numSolicitud = $request['numSolicitud'];
        try {

            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ObtenerCoincidenciaVacacionesxTrabajador/20555348887/'.$codTra.'/'.$fchIni.'/'.$fchFin.'/'.$numSolicitud);
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