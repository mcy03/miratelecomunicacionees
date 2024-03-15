initOptionCategory();

const addText = document.getElementById('add-text');
addText.addEventListener('click', addTextArea);

const addImg = document.getElementById('add-img');
addImg.addEventListener('click', addInputFile);

const form = document.getElementById('form-create');

form.addEventListener('submit', generateEntrie);

function generateEntrie(e) {
    e.preventDefault();

    let titulo = document.getElementById('titulo').value;

    const archivo = document.getElementById('imagen-principal').files[0];

    const categoria = document.getElementById('select-categoria').value;

    const contentEntrie = document.getElementById('contentEntrie').childNodes;
    const contentEntrieImg = document.getElementsByClassName('inputFile');

    let index = 1;
    let contentA = [];
    contentEntrie.forEach(content => {
        if (content.className == 'textareaWrapper') {
            contentA.push(content.querySelector('textarea').value);
        }else if(content.className == 'inputFileWrapper'){
            contentA.push(content.querySelector('input[type="file"]').files[0]);
        }
        index++;
    });
    

    insertEntrie(titulo, archivo, categoria, contentA);
}

function addTextArea(e) {
    e.preventDefault();
    const textAreas = document.getElementsByClassName('textArea');
    let cantTextArea = textAreas.length;
    const contentEntrie = document.getElementById("contentEntrie");

    const textareaWrapper = document.createElement("div"); // Crear un contenedor para el textarea y el enlace
    textareaWrapper.className = 'textareaWrapper';

    const textarea = document.createElement("<textarea></textarea>");
    textarea.className = `default`;
    textarea.name = `texto-${cantTextArea}`;
    textareaWrapper.appendChild(textarea);

    const deleteLink = document.createElement("a"); // Crear el enlace para eliminar
    deleteLink.href = "#";
    deleteLink.textContent = "Eliminar";
    deleteLink.addEventListener('click', function(event) {
        event.preventDefault();
        textareaWrapper.remove(); // Eliminar el elemento padre (el contenedor)
    });
    textareaWrapper.appendChild(deleteLink);

    contentEntrie.appendChild(textareaWrapper);

    tinymce.init({
        selector: 'textarea',
        apiKey: '8si8uxohaxopw3ewmt35wkkah54gbz52yrqkugcwna7ajscw'
    });
}

function addInputFile(e) {
    e.preventDefault();
    const inputFiles = document.getElementsByClassName('inputFile');
    let cantInputFiles = inputFiles.length;

    const contentEntrie = document.getElementById("contentEntrie");

    const inputFileWrapper = document.createElement("div"); // Crear un contenedor para el input file y el enlace
    inputFileWrapper.className = 'inputFileWrapper';

    const inputFile = document.createElement("input");
    inputFile.type = "file";
    inputFile.className = `inputFile data-content`;
    inputFile.name = `file-${cantInputFiles}`;
    inputFile.id = `file-${cantInputFiles}`;
    inputFileWrapper.appendChild(inputFile);

    const deleteLink = document.createElement("a"); // Crear el enlace para eliminar
    deleteLink.href = "#";
    deleteLink.textContent = "Eliminar";
    deleteLink.addEventListener('click', function(event) {
        event.preventDefault();
        inputFileWrapper.remove(); // Eliminar el elemento padre (el contenedor)
    });
    inputFileWrapper.appendChild(deleteLink);

    contentEntrie.appendChild(inputFileWrapper);
}

async function initOptionCategory() {
    let categorias = await getCategories();
    generateOptions(categorias);
}

async function getCategories() {
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

function generateOptions(categories) {
    // Obtener el elemento select
    const selectCategoria = document.getElementById("select-categoria");
    console.log(categories);
    // Generar y agregar opciones al select
    categories.forEach(categoria => {
        const option = document.createElement("option");
        option.value = categoria.CATEGORIA_ID; // Puedes utilizar el ID de la categoría como valor
        option.textContent = categoria.NOMBRE; // Utilizamos el nombre de la categoría como texto visible
        selectCategoria.appendChild(option);
    });
    
}


async function insertEntrie(titulo, img_portada, categoria, contentA){
    let formData = new FormData();
    formData.append('accion', 'insert_entrie');
    formData.append('titulo', titulo);
    formData.append('subtitulo', 'subtitulo');
    formData.append('img_portada', img_portada);
    formData.append('categoria_id', categoria);
    formData.append('cantidad', contentA.length);
    console.log(img_portada);
    let index = 1;
    contentA.forEach(content => {
        formData.append(`contenido${index}`, content);
        index++;
    });
    

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        console.log(response.data);
    } catch (error) {
        console.error('Error:', error.message);
    }
}

