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
    contentEntrie.innerHTML += `<div>`
    +textoIntroducido.innerHTML
    +"</div>";
});

const imgForm = document.getElementById('img-form');

const fileInput = document.getElementById('addImg');
    const messageContainer = document.getElementById('image-selected-message');

    // Escuchar el cambio en el input de archivo
    fileInput.addEventListener('change', function() {
        const fileName = fileInput.files.length ? fileInput.files[0].name : ''; // Obtener el nombre del archivo seleccionado
        if (fileName) {
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
                <div style="display: flex; justify-content: ${selectPosition.value};">
                    <img src="${urlImagen}" id="img-entrie-size" class="img-entrie-size" style="width: ${width}px; height: ${height}px;">
                </div>

                <div>
                    <label for="width-img">Ancho:</label>
                    <input type="number" id="width-img" value="${width}" min="1">
                    <label for="height-img">Alto:</label>
                    <input type="number" id="height-img" value="${height}" min="1">

                    <input class="button-confirm-size" type="submit" value="Confirmar">
                </div>
            `;
            
            // Insertar el HTML en el contenedor
            contentEntrie.innerHTML += html;

            let imagen = document.getElementById('img-entrie-size');
            let widthInput = document.getElementById('width-img');
            let heightInput = document.getElementById('height-img');
            console.log(widthInput);

            console.log(heightInput);
            widthInput.addEventListener('input', function() {
                imagen.style.width = widthInput.value + 'px';
            });

            heightInput.addEventListener('input', function() {
                imagen.style.height = heightInput.value + 'px';
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


