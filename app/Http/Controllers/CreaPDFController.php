<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\APIController;

class CreaPDFController extends Controller
{

    public function generarPDF()
    {   
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = Carbon::now();
        $mes = $meses[($fecha->format('n')) - 1];
        $mesNum = $fecha->format('m');
        $dia = $fecha->format('d');
        $anio = $fecha->format('Y');
        $numDocTrabajador = session('docTrabajador');

        $data = [
            'dniRepresentante' => '10525201',
            'nombreRepresentante' => strtolower('JUAN CARLOS BARROS DOMINGUEZ'),
            'dni' => $numDocTrabajador,
            'tipoDoc' => 'DNI',
            'nombre' => session('nombreTrabajador'),
            'direccion' => strtolower('DIRECCION DE PRUEBA DE TRABAJADOR'),
            'distrito' =>  strtolower('LIMA'),
            'provincia' => strtolower('LIMA'),
            'departamento' => strtolower('CHORRILLOS'),
            'dia' => $dia,
            'mes' => $mes,
            'anio' => $anio
        ];

        $nombreArchivo = '11005-'.$numDocTrabajador.'-'.$mesNum.$anio.'.pdf';

        $pdf = PDF::loadView('docAdelantoVaca', $data)->setPaper('a4', 'portrait');
        $pdfContent = $pdf->output();
    
        Storage::disk('downloads')->put($nombreArchivo, $pdfContent);
    
        $filepath = 'downloads/'.$nombreArchivo;

        // Leer el contenido del archivo PDF
        $pdfContent = file_get_contents($filepath);

        // Convertir a Base64
        $pdfBase64 = base64_encode($pdfContent);

        // Eliminar el archivo PDF
        Storage::disk('downloads')->delete($nombreArchivo);

        return response()->json(['base64' => $pdfBase64, 'nombre' => $nombreArchivo]);

    }

    public function generarPDFSolicitud($cantDias,$fchIni,$fchFin,$fchRein)
    {   
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = Carbon::now();
        $mes = $meses[($fecha->format('n')) - 1];
        $mesNum = $fecha->format('m');
        $dia = $fecha->format('d');
        $anio = $fecha->format('Y');
        $numDocTrabajador = session('docTrabajador');
        $data = [
            'dni' => $numDocTrabajador,
            'tipoDoc' => 'DNI',
            'nombre' => session('nombreTrabajador'),
            'ciudad' =>  strtolower('LIMA'),
            'dia' => $dia,
            'mes' => $mes,
            'anio' => $anio,
            'diasSolicitado' => $cantDias,
            'fechaInicioV' => $fchIni,
            'fechaFinV' => $fchFin,
            'fechaReincor' => $fchRein
        ];

        $nombreArchivo = '11006-'.$numDocTrabajador.'-'.$mesNum.$anio.'.pdf';

        $pdf = PDF::loadView('docSolicitudVaca', $data)->setPaper('a4', 'portrait');
        $pdfContent = $pdf->output();
    
        Storage::disk('downloads')->put($nombreArchivo, $pdfContent);
    
        $filepath = 'downloads/'.$nombreArchivo;

        // Leer el contenido del archivo PDF
        $pdfContent = file_get_contents($filepath);

        // Convertir a Base64
        $pdfBase64 = base64_encode($pdfContent);

        // Eliminar el archivo PDF
        Storage::disk('downloads')->delete($nombreArchivo);

        return $pdfBase64;

    }

    public function enviarDocumentos(Request $request){


        $client = new Client();
        $token = APIController::solicitud();
        $cod_trabajador = $request['cod_trabajador'];
        $fchIni = $request['fchIni'];
        $fchFin = $request['fchFin'];
        $fchRein = $request['fchReinc'];
        $cantDias = $request['cantDias'];
        $accion = $request['accion'];
        $idTransaccion = APIController::idTansaccion();
        $numDocTrabajador = session('docTrabajador');
        $tipoDocTrabajador = $request['datos']['response']['dsc_tipo_documento'];
        $nombresTrabajador = $request['datos']['response']['dsc_nombres'];
        $apellPTrabajador = $request['datos']['response']['dsc_apellido_paterno'];
        $apellMTrabajador = $request['datos']['response']['dsc_apellido_materno'];
        $correoTrabajador = $request['datos']['response']['dsc_mail_personal'];
        $celularTrabajador =($request['datos']['response']['dsc_telefono_personal'] != '') ? str_replace(' ', '',$request['datos']['response']['dsc_telefono_personal'])  : '' ;
        $sedeTrabajador = $request['datos']['response']['cod_localidad'];
        $paisTrabajador = ($request['datos']['response']['cod_pais'] == '') ? 'PE' : ['datos']['response']['cod_pais'];
        $fechActual = Carbon::now();
        $fechaCompleta = $fechActual->format('Y-m-d H:i');
        $anio =$fechActual->format('Y');
        $mes = $fechActual->format('m');
        $formato='';

        try {
            if ($accion =='firmar') {
            
                $docBase64 = explode('"',CreaPDFController::generarPDF());
                $formato = '11005';
                $firmante1 = array( 
                    'documento'=>'20555348887',
                    'tipofirma'=>'FC',
                    'perfil'=>'GH'
                );

                $firmante2 = array( 
                    'documento'=>$numDocTrabajador,
                    'tipofirma'=>'FE',
                    'perfil'=>'CO'
                );

                $data = array( 
                    'idtransaccion'=>$idTransaccion,
                    'ruc'=>'20555348887',
                    'usuario'=>$numDocTrabajador,
                    'codigoformato'=>$formato,
                    'codigotrabajador'=>$cod_trabajador,
                    'nacionalidad'=>$paisTrabajador,
                    'tipodocumento'=>$tipoDocTrabajador,
                    'numerodocumento'=>$numDocTrabajador,
                    'nombres'=>$nombresTrabajador,
                    'apellidopaterno'=>$apellPTrabajador,
                    'apellidomaterno'=>$apellMTrabajador,
                    'correo'=>'mirellyagv@gmail.com',
                    'celular'=>$celularTrabajador,
                    'sede'=>$sedeTrabajador,
                    'periodo_m'=>$mes,
                    'periodo_a'=>$anio,
                    'fechahoranotificacion'=>$fechaCompleta,
                    'firmantes'=> array('firmante1' => $firmante1,'firmante2' => $firmante2),
                    'FILEname'=> $docBase64[7],
                    'FILEcontent'=> $docBase64[3]
                );               

            }else if($accion == 'solicitudVaca'){

                $docBase64 = explode('"',CreaPDFController::generarPDFSolicitud($cantDias,$fchIni,$fchFin,$fchRein));
                $formato = '11006';
                $firmante1 = array( 
                    'documento'=>$numDocTrabajador,
                    'tipofirma'=>'FE',
                    'perfil'=>'CO'
                );

                $data = array( 
                    'idtransaccion'=>$idTransaccion,
                    'ruc'=>'20555348887',
                    'usuario'=>$numDocTrabajador,
                    'codigoformato'=>$formato,
                    'codigotrabajador'=>$cod_trabajador,
                    'nacionalidad'=>$paisTrabajador,
                    'tipodocumento'=>$tipoDocTrabajador,
                    'numerodocumento'=>$numDocTrabajador,
                    'nombres'=>$nombresTrabajador,
                    'apellidopaterno'=>$apellPTrabajador,
                    'apellidomaterno'=>$apellMTrabajador,
                    'correo'=>'mirellyagv@gmail.com',
                    'celular'=>$celularTrabajador,
                    'sede'=>$sedeTrabajador,
                    'periodo_m'=>$mes,
                    'periodo_a'=>$anio,
                    'fechahoranotificacion'=>$fechaCompleta,
                    'firmantes'=> array('firmante1' => $firmante1),
                    'FILEname'=> $docBase64[7],
                    'FILEcontent'=> $docBase64[3]
                );

                $trx = array (
                    'cod_trabajador'=> $cod_trabajador,
                    'num_linea'=> $cantDias = $request['num_linea'],
                    'num_transaccion'=> $idTransaccion
                );
                CreaPDFController::ActualizarTransaccion($trx); 
            }

            //return $data;
            $dataJson = json_encode($data);
            
            $objeto = new APIController();
            $respuesta = $objeto->generarDocumento($token,$dataJson);
            // $body = $respuesta->getData()->body;
            var_dump($respuesta->getData());
            if (property_exists($respuesta->getData(), 'iddocumento')) {
                $iddocumento = $respuesta->getData()->iddocumento;
            } else {
                echo "La propiedad 'iddocumento' no está definida en la respuesta JSON.";
            }
            if (property_exists($respuesta->getData(), 'mensaje')) {
                $mensaje = $respuesta->getData()->mensaje;
            } else {
                echo "La propiedad 'mensaje' no está definida en la respuesta JSON.";
            }
            if (property_exists($respuesta->getData(), 'compruebaError')) {
                $compruebaError = $respuesta->getData()->compruebaError;
            } else {
                echo "La propiedad 'error' no está definida en la respuesta JSON.";
            }
            // $arreglado = json_encode($respuesta);
            // var_dump($body);
            if ($compruebaError==false) {
                $estadoEnv = 'ENV';
            }else{
                $estadoEnv = 'ERR';
            }
            $tranx = array(
                'as_trabajador'=> $cod_trabajador,
                'ai_trx'=> $idTransaccion,
                'as_formato'=> $formato,
                'ai_anno'=> $anio,
                'as_mes'=> $mes,
                'as_estado'=> $estadoEnv,
                'as_usuario'=> $numDocTrabajador,
                'as_dsc_envio'=> $mensaje,
                'as_id_doc'=> $iddocumento
            );
            CreaPDFController::InsertarSeguimientoEnvio($tranx); 
            return 'OK';

        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function InsertarSeguimientoEnvio($data)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/ControlEnvio/InsertarSeguimientoEnvio/20555348887',$headers,$data);
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

    public function ActualizarTransaccion($data)
    {   
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];

        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Vacaciones/ActualizarTransaccion/20555348887',$headers,$data);
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

    public function ObtenerBase64(Request $request)
    {   
        $client = new Client();
        try {
            $cod_trabajador = $request['cod_trabajador'];
            $codDoc = $request['codDoc'];
            $anno = $request['anno'];
            $mes = $request['mes'];
            $request = new \GuzzleHttp\Psr7\Request('GET', 'https://webapiportalplanillamuya.azurewebsites.net/api/ControlEnvio/ObtenerBase64/20555348887/'.$cod_trabajador.'/'.$codDoc.'/'.$anno.'/'.$mes);
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
