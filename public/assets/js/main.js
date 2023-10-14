/**
* Template Name: NiceAdmin - v2.5.0
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function(e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function(e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Initiate tooltips
   */
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  /**
   * Initiate quill editors
   */
  if (select('.quill-editor-default')) {
    new Quill('.quill-editor-default', {
      theme: 'snow'
    });
  }

  if (select('.quill-editor-bubble')) {
    new Quill('.quill-editor-bubble', {
      theme: 'bubble'
    });
  }

  if (select('.quill-editor-full')) {
    new Quill(".quill-editor-full", {
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
              color: []
            },
            {
              background: []
            }
          ],
          [{
              script: "super"
            },
            {
              script: "sub"
            }
          ],
          [{
              list: "ordered"
            },
            {
              list: "bullet"
            },
            {
              indent: "-1"
            },
            {
              indent: "+1"
            }
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"]
        ]
      },
      theme: "snow"
    });
  }

  /**
   * Initiate TinyMCE Editor
   */
  // const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  // const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

  // tinymce.init({
  //   selector: 'textarea.tinymce-editor',
  //   plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
  //   editimage_cors_hosts: ['picsum.photos'],
  //   menubar: 'file edit view insert format tools table help',
  //   toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  //   toolbar_sticky: true,
  //   toolbar_sticky_offset: isSmallScreen ? 102 : 108,
  //   autosave_ask_before_unload: true,
  //   autosave_interval: '30s',
  //   autosave_prefix: '{path}{query}-{id}-',
  //   autosave_restore_when_empty: false,
  //   autosave_retention: '2m',
  //   image_advtab: true,
  //   link_list: [{
  //       title: 'My page 1',
  //       value: 'https://www.tiny.cloud'
  //     },
  //     {
  //       title: 'My page 2',
  //       value: 'http://www.moxiecode.com'
  //     }
  //   ],
  //   image_list: [{
  //       title: 'My page 1',
  //       value: 'https://www.tiny.cloud'
  //     },
  //     {
  //       title: 'My page 2',
  //       value: 'http://www.moxiecode.com'
  //     }
  //   ],
  //   image_class_list: [{
  //       title: 'None',
  //       value: ''
  //     },
  //     {
  //       title: 'Some class',
  //       value: 'class-name'
  //     }
  //   ],
  //   importcss_append: true,
  //   file_picker_callback: (callback, value, meta) => {
  //     /* Provide file and text for the link dialog */
  //     if (meta.filetype === 'file') {
  //       callback('https://www.google.com/logos/google.jpg', {
  //         text: 'My text'
  //       });
  //     }

  //     /* Provide image and alt text for the image dialog */
  //     if (meta.filetype === 'image') {
  //       callback('https://www.google.com/logos/google.jpg', {
  //         alt: 'My alt text'
  //       });
  //     }

  //     /* Provide alternative source and posted for the media dialog */
  //     if (meta.filetype === 'media') {
  //       callback('movie.mp4', {
  //         source2: 'alt.ogg',
  //         poster: 'https://www.google.com/logos/google.jpg'
  //       });
  //     }
  //   },
  //   templates: [{
  //       title: 'New Table',
  //       description: 'creates a new table',
  //       content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
  //     },
  //     {
  //       title: 'Starting my story',
  //       description: 'A cure for writers block',
  //       content: 'Once upon a time...'
  //     },
  //     {
  //       title: 'New list with dates',
  //       description: 'New List with dates',
  //       content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
  //     }
  //   ],
  //   template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  //   template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
  //   height: 600,
  //   image_caption: true,
  //   quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
  //   noneditable_class: 'mceNonEditable',
  //   toolbar_mode: 'sliding',
  //   contextmenu: 'link image table',
  //   skin: useDarkMode ? 'oxide-dark' : 'oxide',
  //   content_css: useDarkMode ? 'dark' : 'default',
  //   content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
  // });

  /**
   * Initiate Bootstrap validation check
   */
  var needsValidation = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(needsValidation)
    .forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })

  /**
   * Initiate Datatables
   */
  const datatables = select('.datatable', true)
  datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable);
  })

  /**
   * Autoresize echart charts
   */
  const mainContainer = select('#main');
  if (mainContainer) {
    setTimeout(() => {
      new ResizeObserver(function() {
        select('.echart', true).forEach(getEchart => {
          echarts.getInstanceByDom(getEchart).resize();
        })
      }).observe(mainContainer);
    }, 200);
  }

})();

// Función para formatear la fecha a "dd/mm/YYYY"
function formatDate(fecha) {
  var fecha = fecha.split('-');
  var year = fecha[0];
  var month = fecha[1];
  var day = fecha[2];
  return day + "/" + month + "/" + year;
}

// Función para obtener la fecha en formato "YYYY-mm-dd"
function obtenerFechaISO(fecha) {
  var fecha = fecha.split('-');
  var day = fecha[0];
  var month = fecha[1];
  var year = fecha[2];
  return year + "-" + month + "-" + day;
}

//-------------------------------------- Feriados-------------------------------------------

var fchaFeriado = new Date();
var annoFeriado = fchaFeriado.getFullYear();
var feriados = [];

$.ajax({
  url: 'lista/ListarFeriado',
  crossDomain: true,
  dataType: 'json',
  data:{'anno':annoFeriado},
  success: function(result){
    result['response'].forEach(element => {
      var fechaFeriado = element['fch_feriado'].replaceAll('/','-');
      feriados.push(fechaFeriado);
    });
  }
});

//-----------------envia correo e ingresa mensajes para listado------------------------------------

function enviaCorreoMensaje(codTra,codTraSolic,dscSolicitante,codMensaje,fchLimite,asunto,actividad,numSolicitud) {
  console.log('fchLimite',fchLimite)// fromato fecha limite DD/MM/YYYY
  $.ajax({
      url: 'api/ObtenerTrabajador', 
      method: "GET",
      crossDomain: true,
      dataType: 'json',
      data:{'cod_trabajador':codTra},
      success: function(respuesta){
          //console.log(respuesta);
          var dscTra = respuesta['response']['dsc_trabajador'];
          var correoTra = respuesta['response']['dsc_mail_personal'];
          var correoCorp = respuesta['response']['dsc_mail_empresa'];

          var fechaActual = new Date();
          var dia = fechaActual.getDate();
          var mes = fechaActual.getMonth() + 1;
          var anio = fechaActual.getFullYear();
          var diaFormateado = dia < 10 ? '0' + dia : dia;
          var mesFormateado = mes < 10 ? '0' + mes : mes;
          var fechaFormateada = diaFormateado + '/' + mesFormateado + '/' + anio;
          var fchBD = anio+'-'+mesFormateado+'-'+diaFormateado;
          
            $.ajax({
              url: 'api/enviarCorreo', 
              method: "post",
              crossDomain: true,
              dataType: 'json',
              data:{'destinatario':dscTra,'correoPersonal':correoTra,'correoCorp':correoCorp,'fchNotif':fechaFormateada,'asunto':asunto,'solicitante':dscSolicitante,'actividad':actividad,'fchLimite':fchLimite,'codigoMensaje':codMensaje},
              success: function(respuesta){
                  console.log(respuesta);
              },error(jqXHR, textStatus, errorThrown) {
                //console.log(jqXHR.responseJSON.message);
                  // Verificar si el error es específico de código 550
                var errorMessage = jqXHR.responseJSON.message;
                var emailPattern = /([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})/;
                var matches = errorMessage.match(emailPattern);

                if (matches && matches.length > 1) {
                  var email = matches[1];
                  var customErrorMessage = "El correo no pudo ser entregado a " + email + ", la cuenta no existe, o ha sido bloqueada.";
                  //console.log(customErrorMessage);

                  Swal.fire({
                    icon: 'warning',
                    text: customErrorMessage,
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                  });
                } else {
                  console.log(jqXHR.responseJSON.message);

                  Swal.fire({
                    icon: 'warning',
                    text: 'Ha ocurrido un error. Por favor, inténtelo nuevamente.',
                    confirmButtonText: 'Continuar',
                    confirmButtonColor: '#a18347',
                  });
                }
              }//error
            });//ajax

          var fchaLimiteFor = '';
          if(codMensaje != '4005'){
            if (fchLimite) {
              var fecha = fchLimite.split('/');
              var day = fecha[0];
              var month = fecha[1];
              var year = fecha[2];
              fchaLimiteFor = year + "-" + month + "-" + day;
            }else{
              fchaLimiteFor = '';
            }
            //console.log(fchaLimiteFor);
            data = {
              'cod_trabajador': codTra,
              'cod_trabajador_sol':codTraSolic,
              'cod_mensaje': codMensaje,
              'fch_notificacion': fchBD,
              'fch_limite': fchaLimiteFor,
              'num_item':numSolicitud
            }
            // console.log('data',data);
            
            $.ajax({
              url: 'api/InsertarMensajeTrabajador', 
              method: "put",
              crossDomain: true,
              dataType: 'json',
              data:{'data':data},
              success: function(respuesta){
                console.log(respuesta);
              },//success
              error(e){
                console.log(e.message);
              }//error
            });//ajax
          }

      },//success
      error(e){
          console.log(e.message);
      }//error
    });//ajax  
}

//----------------------------firma solicitud de vacaciones--------------------------

function enviaDocSoli(codTra,fchIni,fchFin,fchRinc,cantDias,numLinea,btn) {
  btn.setAttribute('disabled','disabled');
  $.ajax({
    url: 'api/ObtenerTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'cod_trabajador':codTra},
    success: function(respuesta){
      $.ajax({
          url: 'api/enviarDocumentos', 
          method: "get",
          crossDomain: true,
          dataType: 'json',
          data:{'cod_trabajador':codTra,'fchIni':fchIni,'fchFin':fchFin,'fchReinc':fchRinc,'cantDias':cantDias,'num_linea':numLinea,'datos':respuesta,'accion':'solicitudVaca'},
          success: function(respuesta){
              console.log(respuesta);
              Swal.fire({
                  icon: 'success',
                  text: 'Se realizó el envio satisfactoriamente. num transaccion'+respuesta['num_trx'],
                  confirmButtonText: 'Continuar',
                  confirmButtonColor: '#a18347',
              }).then((result) => {
                if (result.isConfirmed) {
                  location.reload();
                }
              })
          },//success
          error(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR.status); // Código de estado HTTP
            console.log(jqXHR.statusText); // Mensaje de estado HTTP
            numTrx = (jqXHR.responseText).split('}');
          
            Swal.fire({
              icon: 'success',
              text: 'Se realizó el envio satisfactoriamente. num Transaccion'+numTrx[2],
              confirmButtonText: 'Continuar',
              confirmButtonColor: '#a18347',
            }).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            });
          }//error
      });//ajax
    },error(jqXHR, textStatus, errorThrown) {
      console.log(jqXHR.status); // Código de estado HTTP
      console.log(jqXHR.statusText); // Mensaje de estado HTTP
    
      Swal.fire({
        icon: 'warning',
        text: 'Ha ocurrido un error. Por favor, inténtelo nuevamente.',
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#a18347',
      });
    }//error
  });//ajax obtenerTrab
}

//--------------------------firma convenio adelanto----------------------------

function firmaConvenio(codTra,docTraRRHH) {
  $.ajax({
    url: 'api/ObtenerTrabajador', 
    method: "GET",
    crossDomain: true,
    dataType: 'json',
    data:{'cod_trabajador':codTra},
    success: function(respuesta){
      $.ajax({
        url: 'api/enviarDocumentos', 
        method: "GET",
        crossDomain: true,
        dataType: 'json',
          data:{'cod_trabajador':codTra,'datos':respuesta,'docTraRRHH':docTraRRHH,'accion':'firmar'},
        success: function(resp){
            console.log(resp);
            Swal.fire({
              icon: 'success',
              text: 'Se realizó el envio satisfactoriamente.',
              confirmButtonText: 'Continuar',
              confirmButtonColor: '#a18347',
            }).then((result) => {
              if (result.isConfirmed) {
                location.reload();
              }
            })
        },//success enviar documento
        error(jqXHR, textStatus, errorThrown) {
          console.log(jqXHR.status); // Código de estado HTTP
          console.log(jqXHR.statusText); // Mensaje de estado HTTP
        
          Swal.fire({
            icon: 'success',
            text: 'Se realizó el envio satisfactoriamente.',
            confirmButtonText: 'Continuar',
            confirmButtonColor: '#a18347',
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        }//error
      });//ajax enviar documento
    },//success
    error(jqXHR, textStatus, errorThrown) {
      console.log(jqXHR.status); // Código de estado HTTP
      console.log(jqXHR.statusText); // Mensaje de estado HTTP
    
      Swal.fire({
        icon: 'warning',
        text: 'Ha ocurrido un error. Por favor, inténtelo nuevamente.',
        confirmButtonText: 'Continuar',
        confirmButtonColor: '#a18347',
      });
    }//error
  });//ajax  
}


//------------------------------Muestra PDF--------------------------


function base64ToPDF(base64String) {
  var byteCharacters = atob(base64String);
  var byteNumbers = new Array(byteCharacters.length);
  for (var i = 0; i < byteCharacters.length; i++) {
      byteNumbers[i] = byteCharacters.charCodeAt(i);
  }
  var byteArray = new Uint8Array(byteNumbers);
  var blob = new Blob([byteArray], { type: 'application/pdf' });
  
  // Crear una nueva ventana o pestaña del navegador y cargar el PDF
  var newWindow = window.open();
  var objectUrl = URL.createObjectURL(blob);
  newWindow.location.href = objectUrl;
}

function nombreMesANumero(nombreMes) {
var meses = {
  enero: 1,
  febrero: 2,
  marzo: 3,
  abril: 4,
  mayo: 5,
  junio: 6,
  julio: 7,
  agosto: 8,
  septiembre: 9,
  octubre: 10,
  noviembre: 11,
  diciembre: 12
};

// Convertir el nombre del mes a minúsculas para evitar problemas de mayúsculas
var mes = nombreMes.toLowerCase();

return meses[mes] || null;
}

function esMovil() {
  let navegador = navigator.userAgent;
    if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
        //console.log("Estás usando un dispositivo móvil!!");
        return 'SI';
    } else {
        //console.log("No estás usando un móvil");
        return 'NO';
    }
}

function muestraInfo(codTra,dscTra,tipo,dato1,dato2) {
  if (tipo == 'reprogramacion') {
    texto = '<div style="text-align: -webkit-center;"><table style="text-align: center;"><tr><td></td><td>Inicio</td><td>Fin</td><td>Cant. días</td>'+
              '</tr><tr>'+
                  '<td><b>Origen:&nbsp;</b> </td>'+
                  '<td>01/01/2023&nbsp;</td>'+
                  '<td>01/01/2023</td>'+
                  '<td>5</td>'+
              '</tr><tr>'+
                  '<td><b>Nueva: &nbsp; </b></td>'+
                  '<td>10/10/2023&nbsp;</td>'+
                  '<td>10/10/2023</td>'+
                  '<td>6</td>'+
              '</tr></table><div>';

    Swal.fire({
      icon: 'warning',
      title:dscTra,
      html: texto,
      confirmButtonText: 'Aceptar',
      confirmButtonColor: '#a18347',
    })
  }else if (tipo == 'reglas') {
    texto = '';
    if(dato1 == '' && dato2 != ''){
      texto = '<ul style="text-align:left;"><li>'+dato2+'</li></ul>';
    }else if(dato2 == '' && dato1 != ''){
      texto = '<ul style="text-align:left;"><li>'+dato1+'</li></ul>'
    }else{
      texto = '<ul style="text-align:left;"><li>'+dato1+'</li><li>'+dato2+'</li></ul>';
    }
    Swal.fire({
      icon: 'warning',
      title:dscTra,
      html: texto,
      confirmButtonText: 'Aceptar',
      confirmButtonColor: '#a18347',
    })
  }
  
}