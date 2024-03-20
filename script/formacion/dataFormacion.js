window.addEventListener("load", async function() {
    mostrarCategorias();
    mostrarCertificaciones();
    await mostrarCertificacionesPartners();
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
                <a href="#">
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
            <article class="certificacion">
                <h3 class="name-certificacion">${certificacion.NOMBRE_CERTIFICACION}</h3>
                <p class="description-certificacion">${certificacion.DESCRIPCION}</p>
                <a href="#" class="saber-mas">Saber más...</a>
            </article>
        `;
    }
}

async function mostrarCertificacionesPartners() {
    const certifications = await getCertificationsPartner();
    console.log(certifications);
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
                <button class="button-red certifications-button" onclick="mostrarContenido(${certificacion.CERTIFICACION_ID})">
                    <span>${certificacion.NOMBRE_CERTIFICACION}</span>
                </button>
                <div id="partner-${certificacion.CERTIFICACION_ID}" class="page-certifications show">
                </div>
            </div>
        `;
    }
}

async function mostrarContenido(certificacionId) {
    const selectedPage = document.getElementById(`partner-${certificacionId}`);

    // Verificar si el contenido ya está visible
    if (selectedPage.classList.contains('show')) {
        // Si el contenido ya está visible, ocultarlo
        selectedPage.classList.remove('show');
    } else {
        // Si el contenido no está visible, mostrarlo
        const certificationsContent = `
                <p>Página 1</p>    
                <p>Página 2</p>  
                <p>Página 3</p>  
        `;

        // Ocultar todos los demás contenidos
        const allPages = document.querySelectorAll('.page-certifications');
        allPages.forEach(page => {
            page.classList.remove('show');
        });

        // Mostrar el contenido del botón seleccionado
        selectedPage.innerHTML = certificationsContent;
        selectedPage.classList.add('show');
    }
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