document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll('.gallery-image .image');

    images.forEach(image => {
        image.addEventListener('mouseover', function () {
            // Quitar la clase 'selected' de todos los elementos y agregar 'unselected'
            images.forEach(img => {
                img.classList.remove('selected');
                img.classList.add('unselected');
                // Mostrar la imagen con la clase 'a' en todos los elementos
                const imgA = img.querySelector('img.a');
                const imgB = img.querySelector('img.b');
                if (imgA && imgB) {
                    imgA.style.display = 'block';
                    imgB.style.display = 'none';
                }
            });

            // Agregar la clase 'selected' y quitar 'unselected' al elemento actual
            image.classList.add('selected');
            image.classList.remove('unselected');

            // Mostrar la imagen con la clase 'b' en el elemento actual
            const imgA = image.querySelector('img.a');
            const imgB = image.querySelector('img.b');
            if (imgA && imgB) {
                imgA.style.display = 'none';
                imgB.style.display = 'block';
            }
        });

    });
});
