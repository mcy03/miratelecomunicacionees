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
                <td class="id-course-table"><span class="valor-id">${lab.CURSO} <br> (${lab.CURSO_ID})</span></td>
                <td class="border-center"><span class="valor-start-date">${lab.DURACION}</span></td>
                <td class="border-center"><span class="valor-end-date">${lab.PODS_AVALIABLE}</span></td>
                <td class="border-center"><span class="valor-end-date">${lab.PRICE}</span></td>
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

/*
('DCACI MULTIPOD','',5,12,600),
('DCCNX','',3,6,300),
('UCSDF','',5,6,400),
('DCIHX HYPERFLEX','',3,6,500),
('SDA','',3,3,400),
('ISESDA','',2,3,375),
('ENSDA','',3,3,400),
(SWWIDF,'',5,8,400),
(DEVIOT,'',5,2,550),
(ECMS1,'',1,8,200),
(ECMS2,'',3,8,400),
(UCCXD,'',5,8,440),
(SPRI,'',5,16,550),
(MPLS 3.0,'',5,12,400),
(MPLST 2.0,'',5,12,400);


INSERT INTO `laboratorio`(`CURSO_ID`, `DESCRIPCION_LABORTORIO`, `DURACION`, `PODS_AVALIABLE`,  `PRICE`) 
VALUES 					 (338,'',5,6,425),
						 (332,'',5,8,450),
                         (342,'',5,6,425),
                         (449,'',5,8,425),
                         (404,'',5,3,375),
                         (401,'',5,12,375),
                         (317,'',5,12,300),
                         (398,'',5,12,375),
                         (408,'',5,12,375),
                         (451,'',5,12,375),
                         (407,'',5,12,375),
                         (2,'',5,12,400),
                         (436,'',5,8,425),
                         (1,'',5,12,375),
                         (3,'',4,12,375),
                         (4,'',2,12,300),
                         (393,'',5,12,550),
                         (329,'',5,16,400),
                         (322,'',5,16,400),
                         (320,'',5,12,400),
                         (328,'',5,12,400),
                         (441,'',5,16,550),
                         (427,'',5,12,450),
                         (418,'',5,12,400),
                         (305,'',5,12,400);
*/
}
