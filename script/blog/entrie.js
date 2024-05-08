/*
document.addEventListener('DOMContentLoaded', async () => {
    let contEntrada = document.getElementsByClassName('contenido-entrada')[0];
    let entradaId = document.getElementById('input-entradaId').value;

    let entrie = await getEntrieId(entradaId);
    entrie = entrie[0];
    
    let loader = document.getElementById('loader-entrie');
    loader.style.display = 'none';

    let bannerPrincipal = document.getElementsByClassName('banner-principal')[0];
    bannerPrincipal.style.backgroundImage = `linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./${entrie.IMG_ENTRIE})`;

    let h1Element = document.querySelector('.title-page h1');
    let page = document.getElementsByClassName('page')[0];
    h1Element.innerHTML = entrie.TITULO;
    page.innerHTML = entrie.TITULO;
});

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
*/