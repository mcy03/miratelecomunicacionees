window.addEventListener("load", async function() {
    await mostrarCategorias();

    let contenedorPadre = document.getElementById('cont-tecnologias');

    let contenedorCarga = contenedorPadre.querySelector('.contenedor_carga');

    contenedorCarga.style.display = 'none';

    await mostrarCertificaciones();

    contenedorPadre = document.getElementById('cont-certificaciones');

    contenedorCarga = contenedorPadre.querySelector('.contenedor_carga');
    
    contenedorCarga.style.display = 'none';

    await mostrarCertificacionesPartners();

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
async function mostrarCertificaciones(){
    const certifications = await getCertifications();
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

async function mostrarCertificacionesPartners() {
    const certifications = await getCertificationsPartner();

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
                <button class="button-red certifications-button" onclick="mostrarContenido(${certificacion.CERTIFICACION_ID})" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <span>${certificacion.NOMBRE_CERTIFICACION}</span>
                </button>
            </div>
        `;
    }
}

function mostrarContenido(certificacionId) {
    // Lógica para cargar el contenido dinámico en el modal
    console.log(`Cargando contenido para la certificación con ID: ${certificacionId}`);

    // Ejemplo: Cambiar el título del modal
    document.querySelector('#exampleModal .modal-title').innerText = `Certificación ID: ${certificacionId}`;
    
    // Ejemplo: Cambiar el cuerpo del modal
    document.querySelector('#exampleModal .modal-body p').innerText = `Contenido para la certificación ID: ${certificacionId}`;
}








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
        formData.append('accion', 'get_six_certifications');

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