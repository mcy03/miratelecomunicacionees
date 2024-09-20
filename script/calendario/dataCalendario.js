window.addEventListener("load", async function() {
    const dates = await getDates();

    let hr = document.getElementById('load-hr');

    hr.style.display = 'none';

    listCourses(dates);
    
    
})
    
//----------------------
//      Function para listar cursos en la tabla de calendario, 
//----------------------
async function listCourses(dates) {
    // Obtener el elemento donde se colocará el contenido generado
    const tabla = document.getElementById('tabla-calendario');

    // Variable para almacenar el HTML generado
    let contenidoTabla = '';

    // Bucle para generar las filas de la tabla
    dates.forEach(fecha => {
        contenidoTabla += `
            <tr class="body-table">
                <td class="border-center"><span class="valor-id">${fecha.CURSO_DESC} <br> (${fecha.CURSO})</span></td>
                <td class="border-center"><span class="valor-start-date">${fecha.FECHA_INICIO}</span></td>
                <td class="border-center"><span class="valor-end-date">${fecha.FECHA_FIN}</span></td>
                <td class="border-center"><span class="valor-idioma">${fecha.IDIOMA}</span></td>
                <td class="border-center"><span class="valor-pais">${fecha.PAIS}</span></td>
                <td class="border-center"><span class="valor-timeZone">${fecha.TIME_ZONE}</span></td>
                <td><span class="valor-enroll"><a href="${fecha.ENROLL}" target="_blank">Enroll CLC</a></span></td>
            </tr>
        `;
    });

    // Asignar el contenido generado a la tabla
    tabla.innerHTML += contenidoTabla;
}

//----------------------
//      Function para obtener los registros de la tabla del calendario
//----------------------
async function getDates(){
    let formData = new FormData();
        formData.append('accion', 'get_calendario');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCalendario&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}