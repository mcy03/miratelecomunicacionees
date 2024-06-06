document.addEventListener('DOMContentLoaded', function () {
    const questions = document.querySelectorAll('.question');

    questions.forEach(question => {
        question.addEventListener('click', function () {
            const content = question.querySelector('.content-question');
            
            // Verificar si el contenido ya está seleccionado
            if (content.classList.contains('selected-question')) {
                // Si ya está seleccionado, quitar la clase
                content.classList.remove('selected-question');
                question.classList.remove('h3-selected');
            } else {
                // Si no está seleccionado, quitar la clase de todos los demás y agregarla al actual
                document.querySelectorAll('.content-question').forEach(content => {
                    question.classList.remove('h3-selected');
                    content.classList.remove('selected-question');
                });
                content.classList.add('selected-question');
                question.classList.add('h3-selected');
            }
        });
    });

    
});
