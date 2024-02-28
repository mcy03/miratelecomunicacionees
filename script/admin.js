const enlaces = Array.from(document.getElementsByClassName('enlacesMenu'));
console.log(enlaces)
enlaces.forEach(enlace => {
    enlace.addEventListener('click', function name(e) {
        e.preventDefault();
    
        let id = enlace.id;

        const contenido = document.getElementsByClassName('contenido-'+id)[0];

        contenido.style.display = 'block';
    })
});
