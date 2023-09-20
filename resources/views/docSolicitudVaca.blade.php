<!DOCTYPE html>
<html>
<head>
    <style>
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
            color:white;
        }
        .tablaFirma{
            align-items: center;
        }
        .capital{
            text-transform: capitalize;
            font-size: 0.8em;
        }
        .fechas{
            margin-left: 1rem;
        }
    </style>
</head>
<body background="{{asset('assets/img/fondoPDF.png')}}">
    <div class="cuerpo"> 
        <p class="titulo"><b>SOLICITUD DE VACACIONES</b></p>
        <br>
        <p> {{$ciudad}}, {{$dia}} de {{$mes}} del {{$anio}} </p>

        <p>
            Señores: <br>
            <b>INVERSIONES MUYA S.A.C.</b><br>
            <u>Atención: Gestión y Desarrollo Humano</u>
        </p>

        <p>Mediante la presente, y en conformidad con lo establecido en el artículo 17º del Decreto legislativo N° 713, legislación sobre descansos remunerados de los trabajadores sujetos al régimen laboral de la actividad privada, solicito el fraccionamiento de mi descanso vacacional correspondiente al período {{$anio}}, en los términos que se indican a continuación:</p>
        <br>
        <div class="fechas">
            <p>
                Días solicitados: {{$diasSolicitado}} <br>
                Fecha de Inicio: {{$fechaInicioV}} <br>
                Fecha de Fin: {{$fechaFinV}} <br>
                Fecha de Reincorporación: {{$fechaReincor}}
            </p>
        </div>
        <br>
        <p>De contar con la aprobación de la empresa, agradeceré que en cumplimiento con lo dispuesto por el artículo 16º del Decreto legislativo N° 713, legislación sobre descansos remunerados de los trabajadores sujetos al régimen laboral de la actividad privada, se efectúe el pago de la correspondiente remuneración vacacional antes del inicio de cada descanso.</p>
        <p>Atentamente,</p>
        
        <table class="tablaFirma">
            <tr>
                <td>
                    <div class="cajaFirma titulo">
                        <p class="codigo">@TRABAJADOR# <br>espacio </p>
                        <br><br><br><br><br>
                        <hr>
                        <p><span class='capital'>{{$nombre}}<br>{{$tipoDoc}} N° {{$dni}}</span></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>