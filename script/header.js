document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menu-mobile-icon");
    const menuHeader = document.getElementById("menu-header");

    function handleResize() {
        if (window.innerWidth > 800) {
            // Asegurar de que el menú sea visible en pantallas grandes
            menuHeader.style.display = "block";
        } else { 
            menuHeader.style.display = "none";
        }
    }

    // Llama a la función una vez para establecer el estado inicial
    handleResize();

    // Añade el listener para el evento resize
    window.addEventListener("resize", handleResize);

    // Añade el listener para el icono del menú
    menuIcon.addEventListener("click", function () {
        if (menuHeader.style.display === "block") {
            menuHeader.style.display = "none";
        } else {
            menuHeader.style.display = "block";
        }
    });
});
