<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class ArchivoController extends Controller
{
    
    public function validarArchivo(Request $request)
    {
       // Validar que se haya enviado un archivo
       $validator = Validator::make($request->all(), [
        'archivo' => 'required|mimes:xls,xlsx'
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            // return response()->json(['error' => $validator->errors()], 400);
            return response()->json(['error' => 'El archivo que esta cargando es de un tipo diferente'], 400);
        }

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Cargar el archivo con PHPOffice/PhpSpreadsheet
        $spreadsheet = IOFactory::load($archivo);

        // Obtener la hoja activa (la primera hoja en este caso)
        $hoja = $spreadsheet->getActiveSheet();

        // Obtener los datos del archivo Excel y generar el arreglo
        $datos = [];
        $sql = '';
        $filas = $hoja->toArray();

        foreach ($filas as $key => $fila) {
            // Validar que ningún elemento esté vacío
            if (in_array('', $fila, true)) {
                return response()->json(['error' => 'Hay elementos vacíos en el archivo.'], 400);
            }

            // Temporalmente establecer la configuración regional a "en"
            Carbon::setLocale('en');

            // Obtener la fecha inicio y fecha fin
            if ($fila === reset($filas)) {
                $sql = '';
            }else{
                if ($fila[0] != '' || $fila[0] != NULL) {
                    
                    try {
                        // Verificar si las fechas no están vacías antes de intentar convertirlas
                        if (!empty($fila[1]) && !empty($fila[2])) {
                            // $fechaInicio = Carbon::createFromFormat('Y-m-d', $fila[1]);
                            $aux1 = Carbon::parse($fila[1]);
                            $fechaInicio = $aux1->format('Y-m-d');
                            // $fechaFin = Carbon::createFromFormat('Y-m-d', $fila[2]);
                            $aux2 = Carbon::parse($fila[2]);
                            $fechaFin = $aux2->format('Y-m-d');

                            // Restaurar la configuración regional original
                            Carbon::setLocale(config('app.locale'));

                            // Validar que las fechas sean válidas
                            if (!$fechaInicio || !$fechaFin) {
                                return response()->json(['error' => 'Formato inválido.'], 400);
                            }

                            // Validar que fecha-fin sea mayor o igual a fecha-inicio
                            if ($aux2->lt($aux1)) {
                                return response()->json(['error' => 'La fecha de fin es menor a la fecha de inicio en el archivo.'], 400);
                            }

                        } else {
                            // Si alguna de las fechas está vacía, asignar valores nulos o cualquier otro manejo deseado
                            $fechaInicio = null;
                            $fechaFin = null;
                        }
                    } catch (\Throwable $th) {
                        return response()->json(['error' => 'Formato inválido.'], 400);
                    }
                }else{
                    break;
                }

                // Validar que la fila tenga la misma cantidad de elementos
                if (count($fila) !== 3) {
                    return response()->json(['error' => 'La fila tiene una cantidad incorrecta de elementos.'], 400);
                }
            }
            // Filtrar las columnas nulas en la fila
            // $filaFiltrada = array_filter($fila, function ($valor) {
            //     return !is_null($valor);
            // });

            // Validar que la fila filtrada tenga la misma cantidad de elementos
            // if (count($filaFiltrada) !== 3) {
            //     return response()->json(['error' => 'La fila contiene columnas nulas.'], 400);
            // }
            $datos[] = $fila;
            if ($fila === reset($filas)) {
                $sql = '';
            }else{

                $sql .= "INSERT INTO webppm_solicitud_vacaciones_temporal (cod_trabajador,num_linea,fch_inicio,fch_fin,cod_periodo,cod_anho,cod_trabajador_registro) VALUES ('".$fila[0]."',1,'".$fechaInicio."','".$fechaFin."','".$request['periodo']."',".$request['annoIniVE'].",'".session('codTrabajador')."')";
            }
        }
        
        // Generar el contenido JSON

        // Aquí puedes hacer lo que necesites con el archivo JSON, como enviarlo a una API

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = [
            'dsc_cadena'=> $sql,
            'cod_trabajador' => session('codTrabajador'),
        ];

        $contenidoJson = json_encode($data);
        // return $contenidoJson;
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Masivo/ObtenerValidaVacaciones/20555348887',$headers,$contenidoJson);
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

        // Devolver una respuesta adecuada
        // return response()->json(['mensaje' => 'Archivo procesado correctamente', 'numTrx' => $reason]);

    }

    public function subirArchivo(Request $request)
    {
        // Validar que se haya enviado un archivo
        $validator = Validator::make($request->all(), [
            'archivo' => 'required|mimes:xls,xlsx'
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            // return response()->json(['error' => $validator->errors()], 400);
            return response()->json(['error' => 'El archivo que esta cargando es de un tipo diferente'], 400);
        }

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Cargar el archivo con PHPOffice/PhpSpreadsheet
        $spreadsheet = IOFactory::load($archivo);

        // Obtener la hoja activa (la primera hoja en este caso)
        $hoja = $spreadsheet->getActiveSheet();

        // Obtener los datos del archivo Excel y generar el arreglo
        $datos = [];
        $sql = '';
        $filas = $hoja->toArray();

        foreach ($filas as $key => $fila) {
            // Validar que ningún elemento esté vacío
            if (in_array('', $fila, true)) {
                return response()->json(['error' => 'Hay elementos vacíos en el archivo.'], 400);
            }

            // Temporalmente establecer la configuración regional a "en"
            Carbon::setLocale('en');

            // Obtener la fecha inicio y fecha fin
            if ($fila === reset($filas)) {
                $sql = '';
            }else{
                if ($fila[0] != '' || $fila[0] != NULL) {
                    
                    try {
                        // Verificar si las fechas no están vacías antes de intentar convertirlas
                        if (!empty($fila[1]) && !empty($fila[2])) {
                            // $fechaInicio = Carbon::createFromFormat('Y-m-d', $fila[1]);
                            $aux1 = Carbon::parse($fila[1]);
                            $fechaInicio = $aux1->format('Y-m-d');
                            // $fechaFin = Carbon::createFromFormat('Y-m-d', $fila[2]);
                            $aux2 = Carbon::parse($fila[2]);
                            $fechaFin = $aux2->format('Y-m-d');

                             // Restaurar la configuración regional original
                            Carbon::setLocale(config('app.locale'));

                            // Validar que las fechas sean válidas
                            if (!$fechaInicio || !$fechaFin) {
                                return response()->json(['error' => 'Formato inválido.'], 400);
                            }

                            // Validar que fecha-fin sea mayor o igual a fecha-inicio
                            if ($aux2->lt($aux1)) {
                                return response()->json(['error' => 'La fecha de fin es menor a la fecha de inicio en el archivo.'], 400);
                            }

                        } else {
                            // Si alguna de las fechas está vacía, asignar valores nulos o cualquier otro manejo deseado
                            $fechaInicio = null;
                            $fechaFin = null;
                        }
                    } catch (\Throwable $th) {
                        return response()->json(['error' => 'Formato inválido.'], 400);
                    }
                }else{
                    break;
                }

                // Validar que la fila tenga la misma cantidad de elementos
                if (count($fila) !== 3) {
                    return response()->json(['error' => 'La fila tiene una cantidad incorrecta de elementos.'], 400);
                }
            }
            // Filtrar las columnas nulas en la fila
            // $filaFiltrada = array_filter($fila, function ($valor) {
            //     return !is_null($valor);
            // });

            // Validar que la fila filtrada tenga la misma cantidad de elementos
            // if (count($filaFiltrada) !== 3) {
            //     return response()->json(['error' => 'La fila contiene columnas nulas.'], 400);
            // }
            $datos[] = $fila;
            if ($fila === reset($filas)) {
                $sql = '';
            }else{

                $sql .= "INSERT INTO webppm_solicitud_vacaciones_temporal (cod_trabajador,num_linea,fch_inicio,fch_fin,cod_periodo,cod_anho,cod_trabajador_registro) VALUES ('".$fila[0]."',1,'".$fechaInicio."','".$fechaFin."','".$request['periodo']."',".$request['annoIniVE'].",'".session('codTrabajador')."')";
            }
        }
        
        // Generar el contenido JSON

        // Aquí puedes hacer lo que necesites con el archivo JSON, como enviarlo a una API
        // return $sql;
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        if($request['apruebaAutomatico'] == 'on'){
            $flgAprueba = 'SI';
        }else{
            $flgAprueba = 'NO';
        }
        $data = [
            'dsc_cadena'=> $sql,
            'cod_trabajador' => session('codTrabajador'),
            'flg_aprueba_automatico' => $flgAprueba,
            'origen' => $request['origen'],
            'anno_ini'=> $request['annoIniVE'],
            'mes_ini'=> $request['periodo'],
            'anno_fin'=> $request['annoFinVE'],
            'mes_fin'=> $request['periodoFin']
        ];

        $contenidoJson = json_encode($data);
        // return $contenidoJson;
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Masivo/InsertarSolicitudVacacionesMasivo/20555348887',$headers,$contenidoJson);
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

        // Devolver una respuesta adecuada
        // return response()->json(['mensaje' => 'Archivo procesado correctamente', 'numTrx' => $reason]);

    }

    public function subirArchivoConfiguraciones(Request $request)
    {
        // Validar que se haya enviado un archivo
        $validator = Validator::make($request->all(), [
            'archivo' => 'required|mimes:xls,xlsx'
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            return response()->json(['error' => 'El archivo que esta cargando es de un tipo diferente'], 400);
        }

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Cargar el archivo con PHPOffice/PhpSpreadsheet
        $spreadsheet = IOFactory::load($archivo);

        // Obtener la hoja activa (la primera hoja en este caso)
        $hoja = $spreadsheet->getActiveSheet();

        // Obtener los datos del archivo Excel y generar el arreglo
        $datos = [];
        $sql = '';
        $filas = $hoja->toArray();
        foreach ($filas as $key => $fila) {
            
            if (in_array('', $fila, true)) {
                return response()->json(['error' => 'Hay elementos vacíos en el archivo.'], 400);
            }

            // Validar que la fila tenga la misma cantidad de elementos
            if (count($fila) !== 9) {
                return response()->json(['error' => 'La fila tiene una cantidad incorrecta de elementos.'], 400);
            }

            //Cambia Y y N por SI y NO
            for ($i=0; $i < 9; $i++) { 
                if($fila[$i] == 'Y'){
                    $fila[$i] = "SI";
                }else if($fila[$i] == 'N'){
                    $fila[$i] = "NO";
                }
            }

            $datos[] = $fila;
            if ($fila === reset($filas)) {
                $sql = '';
            }else{

                $sql .= "INSERT INTO gplde_grupo_vacaciones_temporal (cod_trabajador,flg_requiere_aprobacion,cod_responsable,num_ultimo_dias,flg_requiere_supervision,cod_supervisor,flg_no_cruzar,flg_no_cruzar_jefe,flg_delegar_permiso,cod_trabajador_registro ) VALUES('".$fila[0]."','".$fila[1]."','".$fila[2]."','".$fila[3]."','".$fila[4]."','".$fila[5]."','".$fila[6]."','".$fila[7]."','".$fila[8]."','".session('codTrabajador')."')";
            }
        }
        
        // Generar el contenido JSON
        // $contenidoJson = json_encode($datos);
        // response()->json($contenidoJson);
        //return $sql;
        // Aquí puedes hacer lo que necesites con el archivo JSON, como enviarlo a una API

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
        ];
        $data = [
            'dsc_cadena'=> $sql,
            'cod_trabajador' => session('codTrabajador'),
            'flg_aprueba_automatico' => '',
            'origen' => ''
        ];
        //return $data;
        $contenidoJson = json_encode($data);
        try {

            $request = new \GuzzleHttp\Psr7\Request('PUT', 'https://webapiportalplanillamuya.azurewebsites.net/api/Masivo/InsertarConfiguracionMasivo/20555348887',$headers,$contenidoJson);
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

        // Devolver una respuesta adecuada
        // return response()->json(['mensaje' => 'Archivo procesado correctamente', 'datos' => $sql]);
        //return response()->json(['mensaje' => 'Archivo procesado correctamente']);
    }
}
