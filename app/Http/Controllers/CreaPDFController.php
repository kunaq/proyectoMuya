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

        return $pdfBase64;

    }

    public function enviarDocumentos(Request $request){

        $client = new Client();
        $codTrabajador = $request['codigoTabajador'];
        $fchIni = $request['fchIni'];
        $fchFin = $request['fchFin'];
        $fchRein = $request['fchReinc'];
        $cantDias = $request['cantDias'];
        $accion = $request['accion'];
        $idTransaccion = $request['idTransaccion'];
        $numDocTrabajador = session('docTrabajador');

        try {
            if ($accion =='firmar') {
                # code...
            
                $docBase64 = explode('"',CreaPDFController::generarPDF());
                $token = APIController::solicitud();
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
                    'idtransaccion'=>'200',
                    'ruc'=>'20555348887',
                    'usuario'=>'SW',
                    'codigoformato'=>'11005',
                    'codigotrabajador'=>$codTrabajador,
                    'nacionalidad'=>'PE',
                    'tipodocumento'=>'DNI',
                    'numerodocumento'=>'42928629',
                    'nombres'=>'JUAN CARLOS',
                    'apellidopaterno'=>'DAVILA',
                    'apellidomaterno'=>'FUENTES',
                    'correo'=>'mgonzalez@gmail.com',
                    'celular'=>'941172727',
                    'sede'=>'00001',
                    'periodo_m'=>'06',
                    'periodo_a'=>'2023',
                    'fechahoranotificacion'=>'2023-06-04 13:15',
                    'firmantes'=> array('firmante1' => $firmante1),
                    'FILEname'=> $docBase64[7],
                    'FILEcontent'=> $docBase64[3]
                );
            }else if($accion == 'solicitid'){

                $docBase64 = explode('"',CreaPDFController::generarPDFSolicitud($cantDias,$fchIni,$fchFin,$fchRein));
                $token = APIController::solicitud();
                $firmante1 = array( 
                    'documento'=>$numDocTrabajador,
                    'tipofirma'=>'FC',
                    'perfil'=>'GH'
                );

                $data = array( 
                    'idtransaccion'=>'200',
                    'ruc'=>'20555348887',
                    'usuario'=>'SW',
                    'codigoformato'=>'11001',
                    'codigotrabajador'=>$codTrabajador,
                    'nacionalidad'=>'PE',
                    'tipodocumento'=>'DNI',
                    'numerodocumento'=>'42928629',
                    'nombres'=>'JUAN CARLOS',
                    'apellidopaterno'=>'DAVILA',
                    'apellidomaterno'=>'FUENTES',
                    'correo'=>'mgonzalez@gmail.com',
                    'celular'=>'941172727',
                    'sede'=>'00001',
                    'periodo_m'=>'06',
                    'periodo_a'=>'2023',
                    'fechahoranotificacion'=>'2023-06-04 13:15',
                    'firmantes'=> array('firmante1' => $firmante1),
                    'FILEname'=> $docBase64[7],
                    'FILEcontent'=> $docBase64[3]
                );
            }

            $dataJson = json_encode($data);
            
            $objeto = new APIController();
            $respuesta = $objeto->generarDocumento($token,$dataJson);

            return $respuesta;

        } catch (\Exception $e) {
            // Manejo de errores en caso de que la petición falle
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }
}
