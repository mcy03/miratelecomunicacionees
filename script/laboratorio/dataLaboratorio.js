window.addEventListener("load", async function() {
    const labs = await getLabsTable();
    
    let hr = document.getElementById('tr-loader');

    hr.style.display = 'none';

    listLabs(labs);
    
})

//----------------------
//      Function para listar cursos en la tabla de calendario, 
//----------------------
async function listLabs(labs) {
    // Obtener el elemento donde se colocará el contenido generado
    const tabla = document.getElementById('tabla-lab');

    // Variable para almacenar el HTML generado
    let contenidoTabla = '';

    // Bucle para generar las filas de la tabla
    labs.forEach(lab => {
        contenidoTabla += `
            <tr class="body-table">
                <td class="id-course-table"><span class="valor-id">${lab.CURSO_ID}</span></td>
                <td class="border-center name-course-table"><span class="valor-name">${lab.CURSO}</span></td>
                <td class="border-center"><span class="valor-start-date">${lab.DURACION}</span></td>
                <td class="border-center"><span class="valor-end-date">${lab.PODS_AVALIABLE}</span></td>
            </tr>
        `;
    });

    // Asignar el contenido generado a la tabla
    tabla.innerHTML += contenidoTabla;
}




//----------------------
//      Function para obtener los registros de la tabla del calendario
//----------------------
async function getLabsTable(){
    let formData = new FormData();
        formData.append('accion', 'get_labs_table_format');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiLaboratorio&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}