<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class ArchivoController extends Controller
{
    public function subirArchivo(Request $request)
    {
        // Validar que se haya enviado un archivo
        $validator = Validator::make($request->all(), [
            'archivo' => 'required|mimes:xls,xlsx'
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Obtener el archivo subido
        $archivo = $request->file('archivo');

        // Cargar el archivo con PHPOffice/PhpSpreadsheet
        $spreadsheet = IOFactory::load($archivo);

        // Obtener la hoja activa (la primera hoja en este caso)
        $hoja = $spreadsheet->getActiveSheet();

        // Obtener los datos del archivo Excel y generar el arreglo
        $datos = [];
        $filas = $hoja->toArray();
        foreach ($filas as $key => $fila) {
            // Validar que ningún elemento esté vacío
            if (in_array('', $fila, true)) {
                return response()->json(['error' => 'Hay elementos vacíos en el archivo.'], 400);
            }

            // Temporalmente establecer la configuración regional a "en"
            Carbon::setLocale('en');

            // Obtener la fecha inicio y fecha fin
            $fechaInicio = Carbon::createFromFormat('Y-m-d', $fila[1]);
            $fechaFin = Carbon::createFromFormat('Y-m-d', $fila[2]);

            // Restaurar la configuración regional original
            Carbon::setLocale(config('app.locale'));

            // Validar que las fechas sean válidas
            if (!$fechaInicio || !$fechaFin) {
                return response()->json(['error' => 'Formato de fecha inválido en el archivo.'], 400);
            }

            // Validar que fecha-fin sea mayor o igual a fecha-inicio
            if ($fechaFin->lt($fechaInicio)) {
                return response()->json(['error' => 'La fecha de fin es menor a la fecha de inicio en el archivo.'], 400);
            }

            // Validar que la fila tenga la misma cantidad de elementos
            if (count($fila) !== 3) {
                return response()->json(['error' => 'La fila tiene una cantidad incorrecta de elementos.'], 400);
            }

            // Filtrar las columnas nulas en la fila
            $filaFiltrada = array_filter($fila, function ($valor) {
                return !is_null($valor);
            });

            // Validar que la fila filtrada tenga la misma cantidad de elementos
            if (count($filaFiltrada) !== 3) {
                return response()->json(['error' => 'La fila contiene columnas nulas.'], 400);
            }

            $datos[] = $fila;
        }

        // Generar el contenido JSON
        $contenidoJson = json_encode($datos);
        response()->json($contenidoJson);

        // Aquí puedes hacer lo que necesites con el archivo JSON, como enviarlo a una API

        // Devolver una respuesta adecuada
        return response()->json(['mensaje' => 'Archivo procesado correctamente', 'datos' => $datos]);
    }
}
