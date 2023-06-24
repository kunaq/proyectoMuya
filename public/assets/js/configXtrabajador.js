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
