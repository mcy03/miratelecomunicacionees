document.addEventListener('DOMContentLoaded', async () => {
    const categorias = await getCategories();
    console.log(categorias);
    listCategories(categorias);



    const entries = await getEntries();
    console.log(entries);

    listEntries(entries);
})

//----------------------
//      Function para listar cursos en la tabla de calendario, 
//----------------------
async function listCategories(categorias) {
    // Obtener el contenedor donde se colocarán los enlaces generados
    const contenedorCategorias = document.getElementById('enlaces-categorias');

    // Variable para almacenar el HTML generado
    let contenidoEnlaces = '';

    // Bucle para generar los enlaces
    categorias.forEach(categoria => {
        contenidoEnlaces += `<a class="categorias" href="#">${categoria.NOMBRE}</a>`;
    });

    // Asignar el contenido generado al contenedor
    contenedorCategorias.innerHTML += contenidoEnlaces;
}


async function listEntries(entries) {
    // Obtener el contenedor donde se colocará el contenido generado
    const contenedorEntradas = document.getElementById('entradas');

    // Variable para almacenar el HTML generado
    let contenidoEntradas = '';

    // Bucle para generar las entradas
    entries.forEach(entrie => {
        contenidoEntradas += `
            <article class="entrada">
                <div class="img-entrada"><img src="./resource/${entrie.IMG}" alt="${entrie.ALT_IMG}"></div>
                <div class="body-entrada">
                    <ul>
                        <li><img src="./resource/iconos/calendario.png" alt="">${entrie.FECHA}</li>
                        <li><img src="./resource/iconos/etiqueta.png" alt="">${entrie.CATEGORIA}</li>
                        <li><img src="./resource/iconos/usuario.png" alt="">Mira</li>
                        <li><img src="./resource/iconos/calendario.png" alt="">${entrie.cantidad}</li>
                    </ul>
                </div>
            </article>
        `;
    });

    // Asignar el contenido generado al contenedor
    contenedorEntradas.innerHTML = contenidoEntradas;
}



//----------------------
//      Function para obtener los registros de la tabla del calendario
//----------------------
async function getCategories(){
    let formData = new FormData();
        formData.append('accion', 'get_categories');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiCategoria&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getEntries(){
    let formData = new FormData();
        formData.append('accion', 'get_entries_view_blog');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}