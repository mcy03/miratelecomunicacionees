document.addEventListener('DOMContentLoaded', function() {
    // Obtener todos los elementos h5 dentro de la clase .pagination
    const h5Elements = document.querySelectorAll('.pagination h5');

    // Obtener todos los divs dentro de la clase .data-pagination
    const divElements = document.querySelectorAll('.data-pagination .content-value');

    // Iterar sobre cada elemento h5 y agregar un event listener
    h5Elements.forEach(h5 => {
        h5.addEventListener('click', function() {
            // Remover la clase selected-page de todos los elementos h5
            h5Elements.forEach(element => {
                element.classList.remove('selected-page');
            });

            // Añadir la clase selected-page al elemento h5 clickeado
            this.classList.add('selected-page');

            // Obtener el id del div correspondiente en .data-pagination
            const id = this.getAttribute('id').replace('title-', '');

            // Iterar sobre todos los divs y ocultarlos
            divElements.forEach(div => {
                div.classList.add('hidden');
            });

            // Mostrar el div correspondiente al h5 clickeado
            const divToShow = document.getElementById(`value-${id}`);
            if (divToShow) {
                divToShow.classList.remove('hidden');
            }
        });
    });
});
