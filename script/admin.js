const enlaces = Array.from(document.getElementsByClassName('enlacesMenu'));

let lastContent;
console.log(enlaces)
enlaces.forEach(enlace => {
    enlace.addEventListener('click', function name(e) {
        e.preventDefault();
        lastContent = document.getElementsByClassName('activated')[0];
        
        lastContent.classList.remove("activated");
        lastContent.classList.add("desactivated");
        console.log(lastContent);
        let id = enlace.id;
        const contenido = document.getElementsByClassName('contenido-'+id)[0];
        contenido.classList.remove("desactivated");
        contenido.classList.add("activated");
        console.log(contenido);
    })
});
