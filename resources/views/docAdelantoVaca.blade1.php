<!DOCTYPE html>
<html>
<head>
    <style>
        @page {
            margin-left: 5cm;
            margin-right: 0;
        }
        .cuerpo{
            margin: 40rem;
        }
        .cuerpo p{
            text-align: justify;
            padding: 10vh;
        }
        .titulo{
            text-align: center;
            margin-top: 5rem;
        }
        .cajaFirma{
            width: 20rem;
        }
        .codigo{
            color:white;
        }
        .tablaFirma{
            align-items: center;
        }
        .capital{
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <div class="cuerpo"> 
        <p class="titulo"><b>CONVENIO DE ADELANTO DE VACACIONES</b></p>
        <br>
        <br>
        <p>Conste por el presente documento, el convenio de adelanto de vacaciones que celebran, de una parte, <b>INVERSIONES MUYA S.A.C.</b>, identificada con RUC N.º <b>20555348887</b>, con domicilio en <b>Av. MONTEBLANCO NRO 305. URBANIZACIÓN RINCONADA ALTA ET DOS</b>, distrito de La Molina, provincia y departamento de Lima, debidamente representada por Representante legal, identificada con DNI Nº DNI representante , a la que en adelante se denominará <b>"EL EMPLEADOR"</b>; y, de la otra parte, el señor/la señora <span class='capital'>{{$nombre}}</span>, identificado/a con DNI N° {{$dni}}, con domicilio en domicilio  del trabajador, distrito de Distrito, provincia de Provincia y departamento de Departamento, a quién en adelante se le denominará <b>“EL TRABAJADOR”</b>, en los términos y condiciones siguientes:</p>
        <br>
        <p><b>PRIMERO:</b></p>
        <p>De conformidad con el artículo 10° del Decreto legislativo N° 713, legislación sobre descansos remunerados de los trabajadores sujetos al régimen laboral de la actividad privada, se establece la posibilidad de efectuar el adelanto de días de descanso a cuenta del período vacacional que se genere a futuro mediante acuerdo escrito entre las partes.</p>
        <br>
        <p><b>SEGUNDO:</b></p>
        <p><b>EL TRABAJADOR</b> solicita a <b>EL EMPLEADOR</b> el adelanto de los días de vacaciones que se generen en proporción al número de días trabajados en el período Periodo laboral. Para tal efecto, <b>EL TRABAJADOR</b> precisará, oportunamente, mediante el intranet de la empresa, los días de vacaciones que adelantará siguiendo el procedimiento respectivo sobre adelanto de vacaciones de <b>EL EMPLEADOR</b>, para el cual <b>EL TRABAJADOR</b> ha sido debidamente capacitado.</p>
        <br>
        <p><b>TERCERO:</b></p>
        <p><b>EL EMPLEADOR</b> previa evaluación de sus necesidades empresariales otorgará o no su aprobación a cada solicitud de adelanto de vacaciones enviada por <b>EL TRABAJADOR</b>, conforme el referido procedimiento.</p>
        <br>
        <p><b>CUARTO:</b></p>
        <p><b>EL TRABAJADOR</b> y <b>EL EMPLEADOR</b> dejan expresa constancia que, en caso de extinción del vínculo laboral, los días de descanso otorgados por adelantado a <b>EL TRABAJADOR</b> serán compensados con los días de vacaciones truncas adquiridos a la fecha de cese.</p>
        <br>
        <p>Ambas partes firman el presente acuerdo, a los Días días del mes de Mes del año Año.</p>
        <br>
        <table class="tablaFirma">
            <tr>
                <td>
                    <div class="cajaFirma titulo">
                        <p class="codigo">@REPRESENTANTE1# <br>espacio </p>
                        <hr>
                        <b>EL EMPLEADOR</b>
                    </div>
                </td>
                <td><p class="codigo">espacioespacio</p></td>
                <td>
                    <div class="cajaFirma titulo">
                        <p><span class='capital'>{{$nombre}}</span><br>DNI N° {{$dni}}</p>
                        <hr>
                        <b>EL TRABAJADOR</b>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>