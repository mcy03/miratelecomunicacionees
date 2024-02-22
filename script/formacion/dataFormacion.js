window.addEventListener("load", async function() {
    mostrarCategorias();
    mostrarCertificaciones();
    
})






//----------------------
//      Function para mostrar categorias en pagina de formacion.
//----------------------
async function mostrarCategorias(){
    const tecnologias = await getTecnologies();

    // Obtener el contenedor donde se colocará el contenido generado
    const contenedor = document.getElementById('cont-tecnologias');

    // Generar y añadir al DOM las filas de tecnologías
    tecnologias.forEach((tecnologia, index) => {
        if (index % 5 === 0) { // Inserta una nueva fila cada 5 tecnologías
            contenedor.innerHTML += generarFilaTecnologias(tecnologias.slice(index, index + 5));
        }
    });

    // Función para generar el HTML de la fila de tecnologías
    function generarFilaTecnologias(tecnologias) {
        const articulosHTML = tecnologias.map(generarArticuloTecnologia).join('');
        return `<div class="fila-tecnologias">${articulosHTML}</div>`;
    }

    // Función para generar el HTML de un artículo de tecnología
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