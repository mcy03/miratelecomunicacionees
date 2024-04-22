const btnText = document.getElementById('button-text');
const btnImg = document.getElementById('button-img');
const btnResource = document.getElementById('button-resource');

const contentEntrie = document.getElementById('contentEntrie');

btnText.addEventListener('click', () => {


    contentEntrie.innerHTML += '<div class="input-content">'
        + '<div id="editor-container">'
        + "<textarea id='textarea-content' placeholder='Escribe aquí tu contenido...'></textarea>"
            + "<div id='toolbar'>"
                + "<button class='button-tag' onclick='addTag(\"<strong>\", \"</strong>\")'>Negrita</button>"
                + "<button class='button-tag' onclick='addTag(\"<em>\", \"</em>\")'>Cursiva</button>"
                + "<button class='button-tag' onclick='addTag(\"<u>\", \"</u>\")'>Subrayado</button>"
            + "</div>"
        + "</div>"
    + "<button id='confirm-button'>Confirmar</button>"
    + '</div>';
    
    const confirmButton = document.getElementById('confirm-button');
    confirmButton.addEventListener('click', () => {
        const textarea = document.getElementById('textarea-content').value;

        contentEntrie.innerHTML += '<div>';
            contentEntrie.innerHTML += textarea;
        contentEntrie.innerHTML += '</div>';

       
        const divInputContent = document.querySelector('.input-content');
        if (divInputContent) {
            divInputContent.remove();
        }
    });
});

btnImg.addEventListener('click', () => {
    contentEntrie.innerHTML += '<div class="input-img">';
        contentEntrie.innerHTML += '<input type="file" accept="image/*">';
        contentEntrie.innerHTML += "<button id='confirm-button'>Confirmar</button>";
    contentEntrie.innerHTML += '</div>';

    const confirmButtonImg = document.getElementById('confirm-button-img');
    confirmButtonImg.addEventListener('click', () => {
        const archivoImagen = document.getElementById('input-file-img').files[0];

        // Verificar si se seleccionó un archivo
        if (archivoImagen) {
            // Crear un objeto FormData para enviar el archivo
            const formData = new FormData();
            formData.append('imagen', archivoImagen);

            // Realizar una solicitud POST para subir la imagen al servidor
            fetch('/ruta-para-subir-imagen', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                // Verificar si la solicitud fue exitosa
                if (response.ok) {
                    // Mostrar la imagen en la página
                    const divImagen = document.createElement('div');
                    const img = document.createElement('img');
                    img.src = URL.createObjectURL(archivoImagen);
                    divImagen.appendChild(img);
                    contentEntrie.appendChild(divImagen);
                } else {
                    console.error('Error al subir la imagen:', response.statusText);
                }
            })
            .catch(error => {
                console.error('Error al subir la imagen:', error);
            });
        } else {
            console.error('No se seleccionó ningún archivo de imagen.');
        }
    });
});

btnResource.addEventListener('click', () => {
    contentEntrie.innerHTML += '<div class="input-file">';
        contentEntrie.innerHTML += '<input id="hipervinculo" type="text" placeholder="Texto hipervinculo">';
        contentEntrie.innerHTML += '<input id="input-file" type="file">';
        contentEntrie.innerHTML += "<button id='confirm-button'>Confirmar</button>";
    contentEntrie.innerHTML += '</div>';

    const confirmButton = document.getElementById('confirm-button');
    confirmButton.addEventListener('click', () => {
        const textoHipervinculo = document.getElementById('hipervinculo').value;
        const archivo = document.getElementById('input-file').files[0]; 


    });
});


function addTag(startTag, endTag) {
    const editor = document.getElementById('textarea-content');
    const startPos = editor.selectionStart;
    const endPos = editor.selectionEnd;
    const selectedText = editor.value.substring(startPos, endPos);
    const replacement = startTag + selectedText + endTag;
    editor.value = editor.value.substring(0, startPos) + replacement + editor.value.substring(endPos);
    editor.focus();
    editor.setSelectionRange(endPos + startTag.length, endPos + startTag.length);
  }
  