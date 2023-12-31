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

//-----Valida que la fecha final sea mayor o igual que la fecha inicial
function initializeDatePickers(inputId, outputId) {
  var inputElement = document.getElementById(inputId);
  var outputElement = document.getElementById(outputId);
  var outputPicker; // Variable para almacenar la instancia de flatpickr del outputPicker

  var onChange = function (selectedDates, dateStr) {
    // Limpiar la fecha seleccionada en el outputPicker (si existe)
    if (outputPicker) {
      outputPicker.clear();
    }

    // Habilitar el outputPicker y agregar el placeholder
    outputElement.removeAttribute('disabled');
    outputElement.setAttribute('placeholder', 'Seleccione...');

    // Crear o actualizar el outputPicker con la nueva fecha mínima
    outputPicker = flatpickr("#" + outputId, {
      locale: "es",
      dateFormat: "d-m-Y",
      minDate: dateStr,
    });
  };

  flatpickr("#" + inputId, {
    locale: "es",
    dateFormat: "d-m-Y",
    onChange: onChange,
    onReady: function (selectedDates, dateStr) {
      if (selectedDates.length > 0) {
        onChange(selectedDates, dateStr);
      }
    },
  });
}
  
  initializeDatePickers("datepicker1", "datepicker2");
  initializeDatePickers("datepickerIniDes", "datepickerFinDes");
//---------------  
