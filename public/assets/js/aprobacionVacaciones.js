$.extend(true, $.fn.dataTable.defaults, {
    searching: false,
    lengthChange: false,
});
$(document).ready(function () {
    $("#listaColab").DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
        },
        order: [[4, "desc"]],
    });
});
$(document).ready(function () {
    $("#solAprobar").DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
        },
        order: [[4, "desc"]],
    });
});

function alertaSolicitud() {
    Swal.fire({
        icon: "warning",
        html: "No cumple con los requisitos necesarios para solicitar vacaciones.</br>¿Desea continuar?",
        showCancelButton: true,
        confirmButtonText: "Continuar",
        confirmButtonColor: "#155450",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire({
                icon: "success",
                text: "Se ha registrado su solicitud con éxito",
                confirmButtonText: "Continuar",
                confirmButtonColor: "#155450",
            });
        } else if (result.isDenied) {
            /**/
        }
    });
}
$(function () {
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
    $("#datepickerIniDes").datepicker();
    $("#datepickerFinDes").datepicker();
});
