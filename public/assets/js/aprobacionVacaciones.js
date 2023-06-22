$.extend(true, $.fn.dataTable.defaults, {
    searching: false,
    lengthChange: false,
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
