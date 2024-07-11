window.addEventListener("load", async function() {
    await mostrarCategorias();

    let contenedorPadre = document.getElementById('cont-tecnologias');

    let contenedorCarga = contenedorPadre.querySelector('.contenedor_carga');

    contenedorCarga.style.display = 'none';

    let certificaciones = await getCertifications();

    await mostrarCertificaciones(certificaciones.slice(0, 8));

    contenedorPadre = document.getElementById('cont-certificaciones');

    contenedorCarga = contenedorPadre.querySelector('.contenedor_carga');
    
    contenedorCarga.style.display = 'none';
    
    
    
    await mostrarCertificacionesPartners(certificaciones.slice(8, 11));

    contenedorPadre = document.getElementById('cont-certificaciones-partners');

    contenedorCarga = contenedorPadre.querySelector('.contenedor_carga');
    
    contenedorCarga.style.display = 'none';
    

    
})






//----------------------
//      Function para mostrar categorias en pagina de formacion.
//----------------------
async function mostrarCategorias(){
    const tecnologias = await getTecnologies();

    const contenedor = document.getElementById('cont-tecnologias');

    tecnologias.forEach((tecnologia, index) => {
        if (index % 5 === 0) {
            contenedor.innerHTML += generarFilaTecnologias(tecnologias.slice(index, index + 5));
        }
    });

    function generarFilaTecnologias(tecnologias) {
        const articulosHTML = tecnologias.map(generarArticuloTecnologia).join('');
        return `<div class="fila-tecnologias">${articulosHTML}</div>`;
    }

    function generarArticuloTecnologia(tecnologia) {
        return `
            <article class="tecnologia">
                <a href="http://127.0.0.1/miratelecomunicacionees/?controller=curso&action=select&tecnology=${tecnologia.TECNOLOGIA_ID}">
                    <div class="img-tecnologia">
                        <img src="${tecnologia.ICONO_TECNOLOGIA}" alt="">
                    </div>
                    
                    <div class="cont-nombre-tecnologia">
                        <div class="nombre-tecnologia">${tecnologia.NOMBRE_TECNOLOGIA}</div>
                    </div>
                </a>
            </article>
        `;
    }
}

//----------------------
//      Function para mostrar certificaciones en pagina de formacion.
//----------------------
async function mostrarCertificaciones(certifications){
    console.log(certifications);
    // Obtener el contenedor donde se colocará el contenido generado
    const contenedorCertificaciones = document.getElementById('cont-certificaciones');

    // Generar y añadir al DOM las filas de certificaciones
    certifications.forEach((certificacion, index) => {
        if (index % 4 === 0) { // Inserta una nueva fila cada 3 certificaciones
            contenedorCertificaciones.innerHTML += generarFilaCertificaciones(certifications.slice(index, index + 4));
        }
    });

    // Función para generar el HTML de la fila de certificaciones
    function generarFilaCertificaciones(certifications) {
        const articulosHTML = certifications.map(generarArticuloCertificacion).join('');
        return `<div class="fila-certificaciones">${articulosHTML}</div>`;
    }

    // Función para generar el HTML de un artículo de certificación
    function generarArticuloCertificacion(certificacion) {
        return `
            <article class="certificacion">
                <h3 class="name-certificacion">${certificacion.NOMBRE_CERTIFICACION}</h3>
                <p class="description-certificacion">${certificacion.DESCRIPCION}</p>
                <a href="http://127.0.0.1/miratelecomunicacionees/?controller=curso&action=select&certification=${certificacion.CERTIFICACION_ID}" class="saber-mas">Saber más...</a>
            </article>
        `;
    }
}

async function mostrarCertificacionesPartners(certifications) {
    // Obtener el contenedor donde se colocará el contenido generado
    const contenedorCertificaciones = document.getElementById('cont-certificaciones-partners');

    // Generar y añadir al DOM las filas de certificaciones
    certifications.forEach((certificacion, index) => {
        if (index % 3 === 0) { // Inserta una nueva fila cada 3 certificaciones
            contenedorCertificaciones.innerHTML += generarFilaCertificaciones(certifications.slice(index, index + 3));
        }
    });

    // Función para generar el HTML de la fila de certificaciones
    function generarFilaCertificaciones(certifications) {
        const articulosHTML = certifications.map(generarArticuloCertificacion).join('');
        return `<div class="fila-certificaciones">${articulosHTML}</div>`;
    }

    // Función para generar el HTML de un artículo de certificación
    function generarArticuloCertificacion(certificacion) {
        return `
           <div class="certification">
                <button class="button-red certifications-button" onclick="mostrarContenido('${certificacion.NOMBRE_CERTIFICACION}')" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span>${certificacion.NOMBRE_CERTIFICACION}</span>
                </button>
            </div>

        `;
    }
}

async function mostrarContenido(certificacion) {
    let title = certificacion;
    let content = '';
    let resource = '';
    if (certificacion == "SELECT") {
        content = "Obtenga informacion sobre los requisitos y registre su empresa como socio de Cisco";
        resource = "<a class='download-link-red' href='./resource/pdf/partner_resource/select-integrator-reqs.pdf' target='_blank'>Ver requisitos</a>";
    }else if (certificacion == "PREMIER") {
        content = "Genere cuevas oportunidades y recompensas con su rol de integrador Premier";
        resource = "<a class='download-link-red' href='./resource/pdf/partner_resource/premier-integrator-requirements.pdf' target='_blank'>Ver requisitos</a>";
    }else if (certificacion == "GOLD") {
        content = "Alcance al más alto nivel de reconocimiento frente a los clientes con su rol de integrador Gold partner";
        resource = "<a class='download-link-red' href='./resource/pdf/partner_resource/gold-integrator-requirements.pdf' target='_blank'>Ver requisitos</a>";
        console.log('gold');
    }

    document.querySelector('#exampleModal .modal-title').textContent = `Certificaciones ${title}`;
    document.querySelector('#exampleModal .modal-body p').textContent = `${content}`;
    document.querySelector('#exampleModal .modal-footer').innerHTML += `${resource}`;

    const modal = document.getElementById('exampleModal');

    modal.addEventListener('hidden.bs.modal', function (event) {
        // Limpiar el contenido adicional del modal
        const modalFooter = modal.querySelector('.modal-footer');
        modalFooter.innerHTML = `
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        `;
    });
}


/*
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
*/




//----------------------
//      Peticiones a api para obtener datos 
//----------------------
async function getTecnologies() {
    let formData = new FormData();
        formData.append('accion', 'get_tecnologies');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiTecnologia&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getCertifications() {
    let formData = new FormData();
        formData.append('accion', 'get_certifications');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCertificacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getCertificationByName(name) {
    let formData = new FormData();
        formData.append('accion', 'get_certifications_byName');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCertificacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getCertificationsPartner() {
    let formData = new FormData();
        formData.append('accion', 'get_certification_partner');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCertificacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getCourses() {
    let formData = new FormData();
        formData.append('accion', 'get_courses');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCurso&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}