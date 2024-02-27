document.addEventListener('DOMContentLoaded', async () => {
    let contEntrada = document.getElementsByClassName('contenido-entrada')[0];
    let entradaId = document.getElementById('input-entradaId').value;

    let entrie = await getEntrieId(entradaId);
    entrie = entrie[0];
    let text = await getTextEntrie(entradaId);
    let img = await getImgEntrie(entradaId);
    

    let bannerPrincipal = document.getElementsByClassName('banner-principal')[0];
    bannerPrincipal.style.backgroundImage = 'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./resource/backgroundEjemplo.jpg)';

    // Juntar los dos arrays
    let contenido = text.concat(img);

    // Ordenar el array resultante por el campo "edad"
    contenido.sort(function(a, b) {
        return a.POSICION - b.POSICION;
    });

    contenido = contenido.filter(function(elemento) {
        return elemento.POSICION !== "0";
    });
    document.getElementsByClassName('title-page')[0].childNodes[1].innerHTML = entrie.TITULO;
    document.getElementsByClassName('page')[0].innerHTML = entrie.TITULO;

    if (entrie.DESCRIPCION != '') {
        contEntrada.innerHTML += `<h3 class="subtitle">${entrie.DESCRIPCION}</h3>`;
    }
    
    contenido.forEach(function(elemento) {
        if (elemento.hasOwnProperty("IMG_ID")) {
            // Si es una imagen
            valor = `<img src="./resource/${elemento.IMG}" alt="" class="imagen">`;
            console.log("Es una imagen:", elemento);
            // Aquí puedes realizar las operaciones específicas para manejar imágenes
        } else if (elemento.hasOwnProperty("TEXTO_ID")) {
            // Si es un texto
            valor = `<p class="text">${elemento.TEXTO}</p>`;
            console.log("Es un texto:", elemento);
            // Aquí puedes realizar las operaciones específicas para manejar texto
        }

        contEntrada.innerHTML += valor;
    });

    
})






async function getEntrieId(id){
    let formData = new FormData();
        formData.append('accion', 'get_entrie_byId');
        formData.append('id', id);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getTextEntrie(id){
    let formData = new FormData();
        formData.append('accion', 'get_text_byPubli');
        formData.append('publicacion_id', id);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function getImgEntrie(id){
    let formData = new FormData();
        formData.append('accion', 'get_img_byPubli');
        formData.append('publicacion_id', id);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiPublicacion&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}