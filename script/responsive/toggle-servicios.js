document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('li[id^="btn-content"]');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            // Verificar si el ancho de la pantalla es menor a 768px
            if (window.innerWidth < 768) {
                const contentClass = `.text-content${this.id.slice(-1)}`;
                const contents = document.querySelectorAll(contentClass);
                const isVisible = Array.from(contents).some(content => content.classList.contains('selected'));

                // Si algún contenido está visible, se oculta y se elimina la clase 'selected'
                if (isVisible) {
                    contents.forEach(content => {
                        content.classList.remove('selected');
                    });
                } else {
                    // Ocultar todos los elementos con la clase 'text-content' y eliminar la clase 'selected'
                    document.querySelectorAll('.text-content').forEach(content => {
                        content.classList.remove('selected');
                    });

                    // Mostrar los elementos correspondientes al botón clicado y agregar la clase 'selected'
                    contents.forEach(content => {
                        content.classList.add('selected');
                    });
                }
            }
        });
    });
});
