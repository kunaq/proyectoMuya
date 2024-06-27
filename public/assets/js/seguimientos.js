$(function() {
    listaSeguimientos();
});

function listaSeguimientos() {
    $.ajax({
        url: 'lista/ListarSeguimientos', 
        method: "GET",
        dataType: 'json',
        crossDomain: true,
        success: function(data) {        
            console.log(data.list_seg.response);
            
            const container = document.getElementById("container_cards_seguimientos");
            container.innerHTML = ''; // Clear previous content

            data.list_seg.forEach(item => {
                const card = document.createElement('div');
                card.className = 'card';


                //primer titular
                let fchStatusTitular = item.fch_status_firmado_titular;
                let fchAccTitular = item.fch_status_accion_titular;

                if (fchStatusTitular === "01-01-1900 00:00:00") {
                    fchStatusTitular = "-";
                }

                if(fchAccTitular === "01-01-1900 00:00:00"){
                    fchAccTitular = "-";
                }

                //segundo titular
                let data_empty = "-";
                let nomSegTitular = item.dsc_2do_cliente;
                let tlefSegTitular = item.dsc_telefono_2do_1;
                let emailSegTitular = item.dsc_email_2do;

                let fchStatusSegTitular = item.fch_status_firmado_seg_titular;
                let fchAccSegTitular = item.fch_status_accion_seg_titular;

                if (fchStatusSegTitular === "01-01-1900 00:00:00") {
                    fchStatusSegTitular = "-";
                }

                if(fchAccSegTitular === "01-01-1900 00:00:00"){
                    fchAccSegTitular = "-";
                }

                if(nomSegTitular === "" || tlefSegTitular === "" || emailSegTitular === ""){
                    nomSegTitular = "-";
                    tlefSegTitular = "-";
                    emailSegTitular = "-";
                }else{
                    nomSegTitular = item.dsc_2do_cliente;
                }

                card.innerHTML = `
                    <div class="d-flex flex-column align-items-center">
                        <h5 class="card-title text-center">${item.dsc_cliente}</h5>
                        <p class="card-text">
                            Contrato <strong class="text_resaltado">Digital</strong> ${item.cod_contrato}
                            <strong class="text_resaltado">c/firma</strong> elec.
                        </p>
                        <p class="card-text">Estado: <strong class="text_resaltado">Enviado</strong></p>
                        <div class="d-flex justify-content-space-between" style="gap: 230px">
                            <p></p>
                            <button class="btn btn-success mb-3" type="button" data-bs-toggle="collapse"
                                data-bs-target="#info_contrato_${item.cod_contrato}" aria-expanded="false"
                                aria-controls="info_contrato_${item.cod_contrato}">
                                <i class="bi bi-caret-down-fill"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body collapse mt-3" id="info_contrato_${item.cod_contrato}">
                        <div class="d-flex flex-column align-items-center">
                            <p class="card-text">
                                <label class="text_resaltado">Emitido:</label>
                                <strong>${item.fch_emision}</strong>
                            </p>
                            <p class="card-text">
                                <label class="text_resaltado">Enviado:</label>
                                <strong>${fchStatusTitular}</strong>
                            </p>
                            <p class="card-text">
                                <label class="text_resaltado">Activado:</label>
                                <strong>${fchAccTitular}</strong>
                            </p>
                            <ul class="nav nav-tabs mt-4">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" data-bs-toggle="tab" href="#info_1_${item.cod_contrato}">1° Titular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#info_2_${item.cod_contrato}">2° Titular</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-2">
                                <div class="tab-pane fade show active text-center" id="info_1_${item.cod_contrato}">
                                    <p class="card-text text_resaltado">
                                        <strong>${item.dsc_cliente}</strong>
                                    </p>
                                    <p>
                                        <strong>${item.dsc_telefono_1}</strong>
                                    </p>
                                    <p>
                                        <strong>${item.dsc_email}</strong>
                                    </p>
                                    <p>
                                        <label class="text_resaltado">Notificacion Firma: </label>
                                        <strong>${fchStatusTitular}</strong>
                                    </p>
                                    <p>
                                        <label class="text_resaltado">Firmado:</label>
                                        <strong>${fchAccTitular}</strong>
                                    </p>
                                </div>

                                <div class="tab-pane fade text-center" id="info_2_${item.cod_contrato}">
                                    <p class="card-text text_resaltado">
                                        <strong>${nomSegTitular}</strong>
                                    </p>
                                    <p>
                                        <strong>${tlefSegTitular}</strong>
                                    </p>
                                    <p>
                                        <strong>${emailSegTitular}</strong>
                                    </p>
                                    <p>
                                        <label class="text_resaltado">Notificacion Firma: </label>
                                        <strong>${fchStatusSegTitular}</strong>
                                    </p>
                                    <p>
                                        <label class="text_resaltado">Firmado:</label>
                                        <strong>${fchAccSegTitular}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                container.appendChild(card);
            });
        },
        error: function(error) {
            console.log("error al cargar data " + error);
        }
    });
}





