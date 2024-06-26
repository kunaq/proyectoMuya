$(function() {
    listaSeguimientos();
});

function listaSeguimientos(){
    $.ajax({
        url: 'lista/ListarSeguimientos', 
        method: "GET",
        dataType: 'json',
        crossDomain: true,
        success: function(data){        
            console.log(data.list_seg.response);
            
            const container = document.getElementById("container_cards_seguimientos");
            container.innerHTML = ''; // Clear previous content

            data.list_seg.response.forEach(item => {
                const card = document.createElement('div');
                card.className = 'card';

                card.innerHTML = `
                    <div class="d-flex flex-column align-items-center">
                        <h5 class="card-title text-center">${item.dsc_cliente}</h5>
                        <p class="card-text">
                            Contrato <strong class="text_resaltado">digital</strong> ${item.flg_ctt_digital}
                            <strong class="text_resaltado">c/firma</strong> elec.
                        </p>
                        <p class="card-text">Estado: <strong class="text_resaltado">${item.status}</strong></p>
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
                                <strong>${item.dsc_email}</strong>
                            </p>
                            <p class="card-text">
                                <label class="text_resaltado">Enviado:</label>
                                <strong>${item.dsc_email}</strong>
                            </p>
                            <p class="card-text">
                                <label class="text_resaltado">Activado:</label>
                                <strong>${item.dsc_email}</strong>
                            </p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#info_1_${item.cod_contrato}">1° Titular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#info_2_${item.dsc_email}">2° Titular</a>
                                </li>
                            </ul>
                            <div class="d-flex flex-column align-items-center mt-2" id="info_1_${item.cod_contrato}">
                                <p class="card-text text_resaltado">
                                    <strong>${item.cod_contrato}</strong>
                                </p>
                                <p>
                                    <strong>${item.cod_contrato}</strong>
                                </p>
                                <p>
                                    <strong>${item.cod_contrato}</strong>
                                </p>
                                <p>
                                    <label class="text_resaltado">Notificacion Firma: </label>
                                    <strong>${item.cod_contrato}</strong>
                                </p>
                                <p>
                                    <label class="text_resaltado">Firmado:</label>
                                    <strong>${item.cod_contrato}</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                `;

                container.appendChild(card);
            });
        },
        error: function(error){
            console.log("error al cargar data " + error);
        }
    });
}
