<!DOCTYPE html>
<html>
<head>
    <style>
        @page {
            margin-right: 0;
            margin-bottom: 0;
        }
        .cuerpo{
            padding: 4rem;
        }
        p{
            text-align: justify;
        }
        .titulo{
            text-align: center;
        }
        .cajaFirma{
            width: 15rem;
        }
        .codigo{
            color:darkblue;
            margin-bottom: 0.2em;
        }
        .tablaFirma{
            align-items: center;
        }
        .capital{
            text-transform: capitalize;
        }
        .peq{
            font-size: 0.8em;
        }
        .LineaFirma{
            border-top: solid;
        }
        .altoFirma{
            height: 5em;
        }
    </style>
</head>
<body background="{{asset('assets/img/fondoPDF.png')}}">
    <br><br>
    <div class="cuerpo"> 
        <p class="titulo"><b>CONVENIO DE ADELANTO DE VACACIONES</b></p>
        <br>
        <br>
        <p>Conste por el presente documento, el convenio de adelanto de vacaciones que celebran, de una parte, <b>INVERSIONES MUYA S.A.C.</b>, identificada con RUC N.º <b>20555348887</b>, con domicilio en <b>Av. MONTEBLANCO NRO 305. URBANIZACIÓN RINCONADA ALTA ET DOS</b>, distrito de La Molina, provincia y departamento de Lima, debidamente representada por <span class='capital'>{{$nombreRepresentante}}</span>, identificada con DNI Nº {{$dniRepresentante}} , a la que en adelante se denominará <b>"EL EMPLEADOR"</b>; y, de la otra parte, el señor/la señora <span class='capital'>{{$nombre}}</span>, identificado/a con DNI N° {{$dni}}, con domicilio en <span class='capital'>{{$direccion}}</span>, distrito de <span class='capital'>{{$distrito}}</span>, provincia de <span class='capital'>{{$provincia}}</span> y departamento de <span class='capital'>{{$departamento}}</span>, a quién en adelante se le denominará <b>“EL TRABAJADOR”</b>, en los términos y condiciones siguientes:</p>
        <br>
        <p><b>PRIMERO:</b></p>
        <p>De conformidad con el artículo 10° del Decreto legislativo N° 713, legislación sobre descansos remunerados de los trabajadores sujetos al régimen laboral de la actividad privada, se establece la posibilidad de efectuar el adelanto de días de descanso a cuenta del período vacacional que se genere a futuro mediante acuerdo escrito entre las partes.</p>
        <br>
        <p><b>SEGUNDO:</b></p>
        <p><b>EL TRABAJADOR</b> solicita a <b>EL EMPLEADOR</b> el adelanto de los días de vacaciones que se generen en proporción al número de días trabajados en el período {{$anio}}. Para tal efecto, <b>EL TRABAJADOR</b> precisará, oportunamente, mediante el intranet de la empresa, los días de vacaciones que adelantará siguiendo el procedimiento respectivo sobre adelanto de vacaciones de <b>EL EMPLEADOR</b>, para el cual <b>EL TRABAJADOR</b> ha sido debidamente capacitado.</p>
        <br>
        <p><b>TERCERO:</b></p>
        <p><b>EL EMPLEADOR</b> previa evaluación de sus necesidades empresariales otorgará o no su aprobación a cada solicitud de adelanto de vacaciones enviada por <b>EL TRABAJADOR</b>, conforme el referido procedimiento.</p>
        <br><br>
        <p><b>CUARTO:</b></p>
        <p><b>EL TRABAJADOR</b> y <b>EL EMPLEADOR</b> dejan expresa constancia que, en caso de extinción del vínculo laboral, los días de descanso otorgados por adelantado a <b>EL TRABAJADOR</b> serán compensados con los días de vacaciones truncas adquiridos a la fecha de cese.</p>
        <br>
        <p>Ambas partes firman el presente acuerdo, a los días {{$dia}} del mes de {{$mes}} del año {{$anio}}.</p>
        <br>
        <table class="tablaFirma">
            <tr class="altoFirma">
                <td>
                    <div class="cajaFirma titulo">
                        <p class="codigo">@REPRESENTANTE1# </p>
                        <br><br><br><br>
                    </div>
                </td>
                <td><p class="codigo">espacioespacio</p></td>
                <td>
                    <div class="cajaFirma titulo">
                        <p><span class="codigo">@TRABAJADOR#</span></p>
                        <br><br><br><br>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="LineaFirma">
                    <div class="cajaFirma titulo">
                        <b>EL EMPLEADOR</b>
                    </div>
                </td>
                <td><p class="codigo">espacioespacio</p></td>
                <td class="LineaFirma">
                    <div class="cajaFirma">
                        <span class='capital peq'>{{$nombre}}<br>DNI N° {{$dni}}</span>
                        <br>
                        <p class="titulo"><b>EL TRABAJADOR</b></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>