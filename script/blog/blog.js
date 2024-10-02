document.addEventListener('DOMContentLoaded', async () => {
    inicializarFiltros();

    const categorias = await getCategories();
    listCategories(categorias);

    const entries = await getEntries();
    listLastEntries(entries);
    listFechas(entries);
    listenerFiltros(entries);

    listEntries(entries);
    
    listenerEntrie();
    
    // Escuchar los cambios en el campo de búsqueda
    const buscador = document.querySelector('.buscador input');
    buscador.addEventListener('input', function() {
        let searchText = buscador.value.toLowerCase();
        let filteredEntries = entries.filter(entrie => 
            entrie.TITULO.toLowerCase().includes(searchText) || 
            entrie.CATEGORIA.toLowerCase().includes(searchText) ||
            entrie.FECHA.toLowerCase().includes(searchText)
        );
        listEntries(filteredEntries); // Mostrar las entradas filtradas
    });
});



function inicializarFiltros() {
    // Obtener el elemento del título por fecha y los enlaces
    const filtroCategorias = document.getElementById('filtro-por-categoria');
    const enlacesCategoria = document.getElementById('enlaces-categorias');

    // Agregar un evento de clic al título
    filtroCategorias.addEventListener('click', function() {
        // Alternar la visibilidad de los enlaces
        if (enlacesCategoria.style.display === 'none') {
            enlacesCategoria.style.display = 'flex';
        } else {
            enlacesCategoria.style.display = 'none';
        }
    });

    // Obtener el elemento del título por fecha y los enlaces
    const filtroUltima = document.getElementById('filtro-por-ultima');
    const enlacesUltima = document.getElementById('enlaces-last-entries');

    // Agregar un evento de clic al título
    filtroUltima.addEventListener('click', function() {
        // Alternar la visibilidad de los enlaces
        if (enlacesUltima.style.display === 'none') {
            enlacesUltima.style.display = 'flex';
        } else {
            enlacesUltima.style.display = 'none';
        }
    });

    // Obtener el elemento del título por fecha y los enlaces
    const filtroPorFecha = document.getElementById('filtro-por-fecha');
    const enlacesPorFecha = document.getElementById('enlaces-por-fecha');

    // Agregar un evento de clic al título
    filtroPorFecha.addEventListener('click', function() {
        // Alternar la visibilidad de los enlaces
        if (enlacesPorFecha.style.display === 'none') {
            enlacesPorFecha.style.display = 'flex';
        } else {
            enlacesPorFecha.style.display = 'none';
        }
    });
}

async function listenerFiltros(entries) {
    let filtrosCategorias = document.getElementsByClassName('categorias');

    entriesFilter = entries;

    for (let index = 0; index < filtrosCategorias.length; index++) {
        let categoria = filtrosCategorias[index];

        categoria.addEventListener('click', async function() {
            if (categoria.style.color === 'rgb(234, 28, 36)') {
                categoria.style.color = '#000';
            }else{
                categoria.style.color = '#EA1C24';
            }

            entriesFilter = filtrar(entries);
            listEntries(entriesFilter);
        });
    }   
    
    let filtrosLastEntrie = document.getElementsByClassName('last-entrie');

    for (let index = 0; index < filtrosLastEntrie.length; index++) {
        let entrada = filtrosLastEntrie[index];
        entrada.addEventListener('click', async function() {
            if (entrada.style.color === 'rgb(234, 28, 36)') {
                entrada.style.color = '#000';
            }else{
                let filtrosLastEntrie = document.getElementsByClassName('last-entrie');
                entrada.style.color = '#EA1C24';
            }

            entriesFilter = filtrar(entries);
            listEntries(entriesFilter);
        });
    }   
    
}

function filtrar(entries) {
    let filtrosCategorias = document.getElementsByClassName('categorias');
    let catSelected = Array.from(filtrosCategorias).filter(categoria => categoria.style.color === 'rgb(234, 28, 36)');

    let filtrosLastEntrie = document.getElementsByClassName('last-entrie');
    let lastEntrieSelected = Array.from(filtrosLastEntrie).filter(entrada => entrada.style.color === 'rgb(234, 28, 36)');

    let filtrosFechas = document.getElementsByClassName('fecha');
    let fechaSelected = Array.from(filtrosFechas).filter(fecha => fecha.style.color === 'rgb(234, 28, 36)');

    for (let index = 0; index < catSelected.length; index++) {
        entries = entries.filter(entrada => entrada.CATEGORIA === catSelected[index].innerHTML);
    }
    
    for (let index = 0; index < lastEntrieSelected.length; index++) {
        entries = entries.filter(entrada => entrada.TITULO === lastEntrieSelected[index].innerHTML);
    }
    for (let index = 0; index < fechaSelected.length; index++) {
        // Obtener el texto de la fecha seleccionada
        const fechaSeleccionada = fechaSelected[index].innerHTML;
        
        // Convertir el texto de la fecha seleccionada a un formato de rango de fechas
        let startDate, endDate;
        switch (fechaSeleccionada) {
            case "enero 2024":
                startDate = "2024-01-01";
                endDate = "2024-01-31";
                break;
            case "febrero 2024":
                startDate = "2024-02-01";
                endDate = "2024-02-29"; // Febrero tiene 29 días en 2024 (año bisiesto)
                break;
            case "marzo 2024":
                startDate = "2024-03-01";
                endDate = "2024-03-31";
                break;
            case "abril 2024":
                startDate = "2024-04-01";
                endDate = "2024-04-30";
                break;
            case "mayo 2024":
                startDate = "2024-05-01";
                endDate = "2024-05-31";
                break;
            case "junio 2024":
                startDate = "2024-06-01";
                endDate = "2024-06-30";
                break;
            case "julio 2024":
                startDate = "2024-07-01";
                endDate = "2024-07-31";
                break;
            case "agosto 2024":
                startDate = "2024-08-01";
                endDate = "2024-08-31";
                break;
            case "septiembre 2024":
                startDate = "2024-09-01";
                endDate = "2024-09-30";
                break;
            case "octubre 2024":
                startDate = "2024-10-01";
                endDate = "2024-10-31";
                break;
            case "noviembre 2024":
                startDate = "2024-11-01";
                endDate = "2024-11-30";
                break;
            case "diciembre 2024":
                startDate = "2024-12-01";
                endDate = "2024-12-31";
                break;
        }
    
        // Filtrar las entradas por el rango de fechas
        entries = entries.filter(entrada => {
            const entradaFecha = entrada.FECHA;
            return entradaFecha >= startDate && entradaFecha <= endDate;
        });
    }
    

    if (lastEntrieSelected.length > 0 || catSelected.length > 0 || fechaSelected.length > 0) {
        let dropCat = document.getElementById('quitar-categoria');
        dropCat.style.display = 'block';

        dropCat.addEventListener('click', async function() {
            const entriess = await getEntries();
            resetColours();
            listEntries(entriess);
            dropCat.style.display = 'none';
        });
    }

    return entries;
}


function resetColours() {
    let filtrosCategorias = document.getElementsByClassName('categorias');

    for (let index = 0; index < filtrosCategorias.length; index++) {
        if (filtrosCategorias[index].style.color == 'rgb(234, 28, 36)') {
            filtrosCategorias[index].style.color = '#000';
        }
    }

    let filtrosLastEntrie = document.getElementsByClassName('last-entrie');

    for (let index = 0; index < filtrosLastEntrie.length; index++) {
        if (filtrosLastEntrie[index].style.color == 'rgb(234, 28, 36)') {
            filtrosLastEntrie[index].style.color = '#000';
        }
    }
}

//----------------------
//      Function para listar cursos en la tabla de calendario, 
//----------------------
async function listCategories(categorias) {
    const contenedorCategorias = document.getElementById('enlaces-categorias');

    let contenidoEnlaces = "";

    categorias.forEach(categoria => {
        contenidoEnlaces += `<p class="categorias">${categoria.NOMBRE}</p>`;
    });

    contenedorCategorias.innerHTML += contenidoEnlaces;
}

//----------------------
//      Function para listar las ultimas entradas en el filtro del menu lateral.
//----------------------
async function listLastEntries(lastEntries) {
    // Obtener el contenedor donde se colocarán los enlaces generados
    const contenedorEntries = document.getElementById('enlaces-last-entries');

    // Variable para almacenar el HTML generado
    let contenidoEnlaces = '';

    // Bucle para generar los enlaces
    lastEntries.reverse().slice(0, 3).forEach(entrie => {
        contenidoEnlaces += `<p class="last-entrie">${entrie.TITULO}</p>`;
    });

    // Asignar el contenido generado al contenedor
    contenedorEntries.innerHTML += contenidoEnlaces;
}

function listFechas(entries) {
    // Cambiar el formato de las fechas para que coincida con 'YYYY-MM-DD'
    const valores = ["2024", "2024-02", "2024-03", "2024-04", "2024-05", "2024-06", "2024-07", "2024-08", "2024-09", "2024-10", "2024-11", "2024-12"];
    const nombresFechas = ["enero 2024", "febrero 2024", "marzo 2024", "abril 2024", "mayo 2024", "junio 2024", "julio 2024", "agosto 2024", "septiembre 2024", "octubre 2024", "noviembre 2024", "diciembre 2024"];
    
    const contenedor = document.getElementById("enlaces-por-fecha");
    let contenidoEnlaces = '';

    // Crear los enlaces con el formato adecuado
    nombresFechas.forEach((nombre, index) => {
        contenidoEnlaces += `<p class="fecha" data-fecha="${valores[index]}">${nombre}</p>`;
    });

    contenedor.innerHTML += contenidoEnlaces;

    // Agregar evento a cada fecha
    const fechas = document.getElementsByClassName('fecha');
    for (let fecha of fechas) {
        fecha.addEventListener('click', function() {
            if (fecha.style.color === 'rgb(234, 28, 36)') {
                fecha.style.color = '#000';
            } else {
                fecha.style.color = '#EA1C24';
            }

            // Filtrar entradas después de seleccionar una fecha
            entriesFilter = filtrar(entries);
            listEntries(entriesFilter);
        });
    }
}



async function listEntries(entries) {
    const contenedorEntradas = document.getElementById('entradas');
    let contenidoEntradas = '';

    const notEntries = document.getElementById('not-entrie-available')
    if(entries.length <= 0){
        notEntries.style.display = 'flex';
        contenedorEntradas.style.display = 'none';
    }else{
        notEntries.style.display = 'none';
        contenedorEntradas.style.display = 'block';

        entries.forEach(entrie => {
            contenidoEntradas += `
                <a class="enlace-entrie" href="http://127.0.0.1/miratelecomunicacionees/?controller=entrada&entrie=${entrie.PUBLICACION_ID}">
                    <article class="entrada">
                        <div class="img-entrada">
                            <input type="hidden" value="${entrie.PUBLICACION_ID}">
                            <img src="./${entrie.IMG_ENTRIE}">
                            <h4>${entrie.TITULO}</h4>
                        </div>
                        <div class="body-entrada">
                            <ul>
                                <li><img src="./resource/iconos/calendario.png" alt="">${entrie.FECHA}</li>
                                <li><img src="./resource/iconos/etiqueta.png" alt="">${entrie.CATEGORIA}</li>
                                <li><img src="./resource/iconos/usuario.png" alt="">Mira</li>
                            </ul>
                        </div>
                    </article>
                </a>`
            ;
        });
    
        contenedorEntradas.innerHTML = contenidoEntradas;
    }
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

async function getEntrieName(name){
    let formData = new FormData();
        formData.append('accion', 'get_entrie_byName');
        formData.append('name', name);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function listenerEntrie() {
    let entriesView = document.getElementsByClassName('entrada');
    for (let index = 0; index < entriesView.length; index++) {
        const element = entriesView[index];
        element.addEventListener('click', async function () {
            let titulo = element.childNodes[1];
            let entrie_id = titulo.childNodes[1].value;
            console.log(titulo.childNodes[1]);
            //window.location.href = '?controller=entrada&entrie='+entrie_id;
        });
    }
}