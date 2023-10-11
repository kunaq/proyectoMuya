<!DOCTYPE html>
<html>
<head>
    <style>
        @page {
            margin-right: 0;
            margin-bottom: 0;
            margin-top: 0;
        }
        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 2cm;
            margin-bottom: 2cm;
        }

        /** Definir las reglas del encabezado **/
        header {
            position: fixed;
            top: 0cm;
            left: 1cm;
            right: 0cm;
            height: 3cm;
            z-index: 2;
        }

        /** Definir las reglas del pie de página **/
        footer {
            position: fixed;
            bottom: 5cm;
            left: 2.5cm;
            right: 0cm;
            height: 3.5cm;
            z-index: 0;
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
            color:white;
            margin-bottom: 0.2em;
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
<header>
    <img src="{{asset('assets/img/GM.png')}}" width="35%"/>
</header>
<body>
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
                        <p class="codigo">@TRABAJADOR# <br>espacio <br> </p>
                        <br><br>
                        <hr>
                        <p><span class='capital'>{{$nombre}}<br>{{$tipoDoc}} N° {{$dni}}</span></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
<footer>
    <img src="{{asset('assets/img/footerPDF.png')}}" width="100%"/>
</footer>
</html>