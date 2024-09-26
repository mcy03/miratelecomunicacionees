const confirmName = document.getElementById('confirm-name');
confirmName.addEventListener('click', () => {
    const nameEntrie = document.getElementById('input-name').value;
    
    const divTitle = document.getElementById('title-page');
    divTitle.innerHTML = `<h1>${nameEntrie}</h1>`;

    const page = document.getElementById('page');

    page.innerHTML = nameEntrie;
});

const textForm = document.getElementById('textarea-form');
const contentEntrie = document.getElementById('contentEntrie');
textForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const textoIntroducido = document.getElementsByClassName('ck-content')[0];
    contentEntrie.innerHTML += textoIntroducido.innerHTML;
});

const imgForm = document.getElementById('img-form');

const fileInput = document.getElementById('addImg');
    const messageContainer = document.getElementById('image-selected-message');

    // Escuchar el cambio en el input de archivo
    fileInput.addEventListener('change', function() {
        let fileName = fileInput.files.length ? fileInput.files[0].name : ''; // Obtener el nombre del archivo seleccionado
        if (fileName) {
            // Recortar el nombre del archivo si es mayor a 18 caracteres
            if (fileName.length > 18) {
                fileName = fileName.substring(0, 18) + '...'; // Recortar a 18 caracteres y añadir "..."
            }
            // Mostrar mensaje de archivo seleccionado
            messageContainer.textContent = `Imagen seleccionada: ${fileName}`;
        } else {
            // Si se ha deseleccionado la imagen, limpiar el mensaje
            messageContainer.textContent = '';
        }
    });
    
let archivoImagen = [];
let cantImg = 0;
imgForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const inputImagen = document.getElementById('addImg');
    
    if (inputImagen.files.length > 0) {
        archivoImagen.push(inputImagen.files[0]);
        cantImg++;
        
        const lectorImagen = new FileReader();

        const inputAnchura = document.getElementById('input-anchura');
        const inputAltura = document.getElementById('input-altura');
        const selectPosition = document.querySelector('.select-position select');
            
        let width = 300;
        let height = 300;

        if (inputAnchura.value != '') {
            width = inputAnchura.value;
        }

        if (inputAltura.value != '') {
            height = inputAltura.value;
        }

        lectorImagen.onload = function(evento) {
            const urlImagen = evento.target.result;
        
            // Crear el HTML para la imagen y el contenedor
            const html = `
                <div id="container-image" style="display: flex; justify-content: ${selectPosition.value}; ">
                    <img src="${urlImagen}" id="img-entrie-size" class="img-entrie-size" width: ${width}%; height: ${height}px;">
                </div>
        
                <div id="size-controls">
                    <label for="width-img">Ancho:</label>
                    <input type="number" id="width-img" value="${width}" min="1">
                    <label for="height-img">Alto:</label>
                    <input type="number" id="height-img" value="${height}" min="1">
                    <br>
                    <input type="submit" id="origin-size-img" value="Tamaño origen">
        
                    <input id="button-confirm-size" type="submit" value="Confirmar">
                </div>
            `;
            
            // Insertar el HTML en el contenedor
            contentEntrie.innerHTML += html;
        
            // Obtener la imagen y los inputs de ancho y alto
            let imagen = document.getElementById('img-entrie-size');
            let widthInput = document.getElementById('width-img');
            let heightInput = document.getElementById('height-img');

            // Actualizar el tamaño de la imagen cuando cambien los valores de ancho y alto
            widthInput.addEventListener('input', function() {
                imagen.style.width = widthInput.value + '%';
            });

            heightInput.addEventListener('input', function() {
                imagen.style.height = heightInput.value + 'px';
            });

            // Botón para recuperar el tamaño de origen
            let originSizeImg = document.getElementById('origin-size-img');
            originSizeImg.addEventListener('click', function() {
                // Obtener el tamaño original de la imagen
                let originalWidth = imagen.naturalWidth;
                let originalHeight = imagen.naturalHeight;

                // Actualizar los inputs con el tamaño original
                widthInput.value = originalWidth;
                heightInput.value = originalHeight;

                // Ajustar el tamaño de la imagen al original
                imagen.style.width = originalWidth + 'px';
                imagen.style.height = originalHeight + 'px';
            });

            // Botón para confirmar el tamaño
            let confirmSize = document.getElementById('button-confirm-size');

            // Evento click para confirmar el tamaño y eliminar los controles de ancho y alto
            confirmSize.addEventListener('click', function() {
                // Eliminar los controles de tamaño (el div con id "size-controls")
                let sizeControls = document.getElementById('size-controls');
                sizeControls.remove();
            });
        };
        
        lectorImagen.readAsDataURL(archivoImagen[cantImg-1]);
    }
});


let imagenBannerGuardar = '';
const formImgBanner = document.getElementById('img-entrie');
formImgBanner.addEventListener('submit', (event) => {
    event.preventDefault();

    const inputImagen = document.getElementById('addImg-banner');
    
    if (inputImagen.files.length > 0) {
        imagenBannerGuardar = inputImagen.files[0];
        
        const lector = new FileReader();

        lector.onload = function(evento) {
            const urlImagen = evento.target.result;

            const contenedor = document.getElementById('banner-principal');
            contenedor.style.backgroundImage = `url('${urlImagen}')`;
        };

        lector.readAsDataURL(imagenBannerGuardar);
    }
});

let buttonCreate = document.getElementById('button-create');

buttonCreate.addEventListener('click', async () => {
    const divTitlePage = document.getElementById('title-page');
    const h1Element = divTitlePage.querySelector('h1');
    let nameEntrie = '';
        if (h1Element !== null) {
            const h1Element = document.querySelector('#title-page h1');
            const nameEntrie = h1Element ? h1Element.textContent : '';
            const path = `./resource/publicaciones/${nameEntrie}/`;

            const imagenes = document.querySelectorAll('.img-entrie');
            const formData = new FormData();
            let aux = 0;
            imagenes.forEach((imagen, index) => {
                formData.append(`imagen-${index}`, archivoImagen[aux]);

                imagen.src = `${path}${archivoImagen[aux].name}`;
                aux++;
            });

            let description = document.getElementById('value-description').value;
            let category = document.getElementById('option-category').value;

            formData.append('accion', 'insert_entrie');
            formData.append('nombre', nameEntrie);
            formData.append('description', description);
            formData.append('imgEntrie', imagenBannerGuardar);
            formData.append('category', category);
            formData.append('content', contentEntrie.innerHTML);
            formData.append('cant_img', cantImg);
            console.log('nombre: '+ nameEntrie);
            console.log('description: '+ description);
            console.log('imgEntrie: '+ imagenBannerGuardar);
            console.log('category: '+ category);
            console.log('content: '+ contentEntrie.innerHTML);
            console.log('cant_img: '+ cantImg);
            const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

            try {
                const response = await axios.post(url, formData);
                console.log(response.data);
            } catch (error) {
                console.error('Error:', error.message);
            }

        }else{
            console.log("introduce nombre de entrada");
        }
});