const seccion = document.getElementById('seccion-seleccionada');
if (seccion) {
    const images = document.getElementsByClassName('image');

    for (let i = 0; i < images.length; i++) {
        if (images[i].classList.contains('selected')) {
            images[i].classList.remove('selected');
        }

        if (images[i].id == seccion.value) {
            images[i].classList.add('selected');
        }

        images[i].addEventListener('mouseover', () => {
            images[i].classList.add('selected');
        });

        images[i].addEventListener('mouseout', () => {
            images[i].classList.remove('selected');
        });
    }
}
