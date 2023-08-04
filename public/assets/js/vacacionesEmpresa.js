// ---------------valida parámetros----------------
function limitInputValue(elementId, maxValue) {
  var input = document.getElementById(elementId);
  input.addEventListener("input", function() {
      var value = parseInt(input.value);
      if (value > maxValue) {
      input.value = maxValue;
      }
  });
  }

  limitInputValue("parametroX", 30);
  limitInputValue("parametroY", 30);
// ------------------------------------------------


  $.extend(true, $.fn.dataTable.defaults, {
      searching: false,
      lengthChange: false,
  });
  $(document).ready(function () {
      $('#listaColab').DataTable({
          language: {
              url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
          },
          "order": [[4, "desc"]],

      });
  });
  $(document).ready(function () {
      $('#solAprobar').DataTable({
          language: {
              url: '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
          },
          "order": [[4, "desc"]],

      });
  });
  
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
initializeDatePickers("datepicker3", "datepicker4");  
//---------------  