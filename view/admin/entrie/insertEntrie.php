<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/admin/textEditor.css?1.0">   
    <link rel="stylesheet" type="text/css" href="./style/entrada.css?1.0">
    <link rel="stylesheet" type="text/css" href="./style/admin/createEntrie.css?1.0">   
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <title>Insert Entrie Admin</title>

</head>
<body>
    <section id="banner-principal" class="banner-principal" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); background-size: cover; background-position: center;">
        <div id="title-page" class="title-page">
            <input id="input-name" type="text" placeholder="Nombre de la entrada"> 
            <button id="confirm-name" class="button-tag">Confirmar</button>
        </div>
    </section>
    
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page"  href="<?=url.'?controller=blog'?>">On the Go / </a><p id="page" class="page"></p>
        </div>
        <form id="img-entrie">
            <span class="btn btn-primary btn-file">
                Imagen portada... <input id="addImg-banner" name="addImg-banner" type="file">
            </span>
            <div>
                <input class="button-tag" type="submit" value="Añadir">
            </div>
        </form>
    </section>

    <div class="contenido">
        <div class="contenido-entrada">
            <div id="contentEntrie"></div>

            <!-- Contenedor para el editor -->
            <div id="editor-container"></div>

            <div class="editor-container">
                <div class="toolbar">
                    <div class="row-opciones">
                        <select class="select-editor" id="heading-select" onchange="formatHeading()" title="Selecciona un encabezado">
                            <option value="p">Párrafo</option>
                            <option value="h1">Encabezado 1</option>
                            <option value="h2">Encabezado 2</option>
                            <option value="h3">Encabezado 3</option>
                        </select>

                        <select class="select-editor"id="color-select" onchange="changeTextColor()" title="Selecciona un color de texto">
                            <option value="">Color de texto</option>
                            <option value="#EA1C24">Rojo</option>
                            <option value="#A9A8A9">Gris</option>
                            <option value="blue">Azul</option>
                            <option value="black">Negro</option>
                        </select>

                        <button class="button-editor" onclick="formatText('bold')" title="Negrita">
                            <i class="fas fa-bold"></i>
                        </button>
                        <button class="button-editor" onclick="formatText('italic')" title="Cursiva">
                            <i class="fas fa-italic"></i>
                        </button>
                        <button class="button-editor" onclick="formatText('underline')" title="Subrayado">
                            <i class="fas fa-underline"></i>
                        </button>
                        <button class="button-editor" onclick="insertHorizontalRule()" title="Añadir línea horizontal">
                            <i class="fas fa-minus"></i>
                        </button>

                        <select class="select-editor" id="view-select" onchange="toggleView()" title="Ver HTML o Editor">
                            <option value="editor">Vista Editor</option>
                            <option value="html">Vista HTML</option>
                        </select>
                    </div>
                    <div class="row-opciones">
                        <div class="options-insert-table">
                            <!-- Formulario para agregar tabla -->
                            <input type="number" id="row-count" placeholder="Filas" min="1" />
                            <input type="number" id="col-count" placeholder="Columnas" min="1" />
                            <button class="button-editor" onclick="insertTable()" title="Insertar Tabla">
                                <i class="fas fa-table"></i>
                            </button>
                        </div>
                    </div>                    
                </div>
                <form id="textarea-form">
                    <!-- Editor de texto -->
                    <div id="editor" contenteditable="true">
                        Escribe aquí tu contenido...
                    </div>

                    <!-- Vista de código fuente HTML -->
                    <textarea id="html-view"></textarea>
                    <div class="footer-editor">
                        <!-- Input para el ancho del contenido en porcentaje -->
                        <input type="text" id="content-width" class="width-input" placeholder="Ancho (%)" />

                        <button class="submit-content-editor" title="Enviar contenido">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!--
            <div id="div-buttons-obtions" class="button-option-entrie">
                <form id="textarea-form">
                    <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea> 
                    <div id="mt-20">
                        <input class="button-tag" type="submit" value="Añadir">
                    </div>
                </form>
            </div>
            -->
            <button id="button-create">CREAR</button>
        </div>
        <div class="publi">
            <div class="last-entries">
                <form id="img-form">
                    <span class="btn btn-primary btn-file">
                        Subir imagen...<input id="addImg" name="addImg" type="file">
                    </span>
                    <div id="image-selected-message" style="margin-top: 20px; color: green;"></div>
                    <div class="inputs-size">
                        <input id="input-anchura" type="number" placeholder="Anchura (%)">
                        <input id="input-altura" type="number" placeholder="Altura (px)">
                    </div>  
                    <div class="select-position">
                        <select name="position" id="">
                            <option value="flex-start">Izquierda</option>
                            <option value="center">Centro</option>
                            <option value="flex-end">Derecha</option>
                        </select>
                    </div>  
                    <div id="mt-20">
                        <input class="button-tag" type="submit" value="Añadir">
                    </div>
                </form>

                <form id="params-entrie-form">
                    <div class="textarea-description">
                        <textarea type="text" placeholder="Breve descripción de la entrada" id="value-description"></textarea> 
                    </div>
                    <div class="select-category">
                        <select name="category" id="option-category">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?=$category->getCATEGORIA_ID()?>"><?=$category->getNOMBRE()?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>              
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
    <script src="./script/entrie/newEntrie.js"></script> 
    <!--
    <script>
        ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );
    </script>
    -->
    <script>
        // Función para aplicar formato al texto
        function formatText(command) {
            document.execCommand(command, false, null);
        }

        // Función para alternar entre las vistas de HTML y Editor
        function toggleView() {
            const editor = document.getElementById('editor');
            const htmlView = document.getElementById('html-view');
            const viewSelect = document.getElementById('view-select');

            if (viewSelect.value === 'html') {
                htmlView.style.display = 'block';
                htmlView.value = editor.innerHTML;
                editor.style.display = 'none';
            } else {
                editor.style.display = 'block';
                editor.innerHTML = htmlView.value;
                htmlView.style.display = 'none';
            }
        }

        // Función para insertar una línea horizontal (<hr>)
        function insertHorizontalRule() {
            document.execCommand('insertHorizontalRule', false, null);
        }

        // Función para aplicar el formato de encabezado seleccionado
        function formatHeading() {
            const select = document.getElementById('heading-select');
            const selectedValue = select.value;
            document.execCommand('formatBlock', false, selectedValue);
        }

        // Función para cambiar el color del texto
        function changeTextColor() {
            const colorSelect = document.getElementById('color-select');
            const selectedColor = colorSelect.value;
            document.execCommand('foreColor', false, selectedColor);
        }

        // Función para insertar una tabla
        function insertTable() {
            const rowCount = document.getElementById('row-count').value;
            const colCount = document.getElementById('col-count').value;

            if (rowCount > 0 && colCount > 0) {
                let table = '<table>';
                for (let i = 0; i < rowCount; i++) {
                    table += '<tr>';
                    for (let j = 0; j < colCount; j++) {
                        table += '<td></td>'; // Celdas vacías
                    }
                    table += '</tr>';
                }
                table += '</table>';
                document.getElementById('editor').innerHTML += table;
            } else {
                alert("Por favor, ingresa valores válidos para filas y columnas.");
            }
        }

        // Obtener el botón que ejecutará la función submitContent
        let buttonSubmitContent = document.getElementsByClassName('submit-content-editor')[0];

        // Añadir un listener al botón para ejecutar la función submitContent al hacer clic
        buttonSubmitContent.addEventListener('click', submitContent);

        // Función para enviar el contenido generado
        function submitContent(e) {
            // Prevenir el comportamiento por defecto (evitar que recargue la página si es un formulario)
            e.preventDefault();

            const editor = document.getElementById('editor');
            const displayContent = document.getElementById('contentEntrie');

            // Obtener el valor computado del ancho del elemento
            let widthContentEntrie = window.getComputedStyle(displayContent).width;

            // Obtener el ancho especificado por el usuario
            const contentWidth = document.getElementById('content-width').value;

            
            // Contar cuántos divs con la clase 'div-content-text' existen
            let countDivs = document.getElementsByClassName('div-content-text').length;

            // Crear un nuevo div
            const newDiv = document.createElement('div');
            newDiv.className = 'div-content-text';
            newDiv.id = `div-position-${countDivs + 1}`;
            newDiv.style.width = contentWidth.includes('%') ? contentWidth : contentWidth + '%'; // Ancho deseado
            newDiv.innerHTML = `${editor.innerHTML}`; // Cambia el contenido según sea necesario

            const filas = contentEntrie.getElementsByClassName('fila');
            let filaActual;

            if (filas.length === 0) {
                // Si no hay filas, crear la primera fila
                filaActual = document.createElement('div');
                filaActual.className = 'fila';
                contentEntrie.appendChild(filaActual);
            } else {
                // Si hay filas, usar la última fila
                filaActual = filas[filas.length - 1];
            }

            const divs = filaActual.getElementsByClassName('div-content-text');

            addNewDiv(displayContent, filaActual, divs, newDiv)
        }

        function addNewDiv(contentEntrie, filaActual, divs, newDiv) {
            let totalWidth;
            if(divs.length <= 0){
                totalWidth = 0;
            }else{
                // Calcular el ancho total actual de la última fila
                totalWidth = Array.from(divs).reduce((acc, div) => {
                    let width = window.getComputedStyle(div).width;
                     width = parseFloat(width.replace(/px|%/g, '')); // Convertir a número
                    return acc + width; // Sumar el ancho de cada div
                }, 0);
            }
            

            // Obtener el ancho del contenedor de la fila
            const containerWidth = parseFloat(window.getComputedStyle(filaActual).width.replace(/px/g, ''));

            // Calcular el ancho del nuevo div
            const newDivWidth = parseFloat(newDiv.style.width.replace(/%/g, ''));
            console.log(totalWidth/10 +' : '+ newDivWidth)
            // Comprobar si hay espacio suficiente para el nuevo div
            if (totalWidth/10 + newDivWidth <= 100) {
                // Si hay espacio, añadir el nuevo div a la fila actual
                filaActual.appendChild(newDiv);
            } else {
                // Si no hay espacio, crear una nueva fila y añadir el nuevo div allí
                createNewRow(contentEntrie, newDiv);
            }
        }

        function createNewRow(contentEntrie, newDiv) {
            const newRow = document.createElement('div'); // Crear una nueva fila
            newRow.className = 'fila'; // Asignar la clase de fila

            // Añadir el nuevo div a la nueva fila
            newRow.appendChild(newDiv);
            
            // Insertar la nueva fila en el DOM justo después del contenedor actual
            contentEntrie.appendChild(newRow);
        }
    </script>
</body>
</html>
