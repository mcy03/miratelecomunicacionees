window.addEventListener("load", async function() {
    const courses = await getDates();

    listCourses(courses);
    //listCourses(courses);
    
})

//----------------------
//      Function para listar cursos en la tabla de calendario, 
//----------------------
async function listCourses(courses) {
    // Obtener el elemento donde se colocará el contenido generado
    const tabla = document.getElementById('tabla-calendario');

    // Variable para almacenar el HTML generado
    let contenidoTabla = '';

    // Bucle para generar las filas de la tabla
    courses.forEach(curso => {
        contenidoTabla += `
            <tr class="body-table">
                <td><span class="valor-id">${curso.CURSO_ID}</span></td>
                <td class="border-center"><span class="valor-name">${curso.CURSO}</span></td>
                <td class="border-center"><span class="valor-start-date">${curso.FECHA_INICIO}</span></td>
                <td class="border-center"><span class="valor-end-date">${curso.FECHA_FIN}</span></td>
                <td class="border-center"><span class="valor-idioma">${curso.IDIOMA}</span></td>
                <td class="border-center"><span class="valor-timeZone">${curso.TIME_ZONE}</span></td>
                <td><span class="valor-enroll">${curso.ENROLL}</span></td>
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
        formData.append('accion', 'get_dates');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCalendario&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}