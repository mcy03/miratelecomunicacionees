<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/admin/menuAdmin.css">
    <link rel="stylesheet" href="./style/admin/inicio.css">
    <title>Vista admin</title>
</head>
<body>
<div class="contenido">
    <section class="menuLateral">
        <nav>
            <ul>
                <a class="enlacesMenu" id="entradas" href="#"><li>Entradas</li></a>
                <a class="enlacesMenu" id="categorias" href="#"><li>Categorías</li></a>
                <a class="enlacesMenu" id="paginas" href="#"><li>Páginas</li></a>
                <a class="enlacesMenu" id="cursos" href="#"><li>Cursos</li></a>
            </ul>
            <ul>
                <a class="enlacesMenu" id="laboratorios" href="#"><li>Laboratorios</li></a>
                <a class="enlacesMenu" id="cursos" href="#"><li>Cursos</li></a>
                <a class="enlacesMenu" id="servicios" href="#"><li>Servicios IT</li></a>
                <a class="enlacesMenu" id="certificacion" href="#"><li>Certificación</li></a>
                <a class="enlacesMenu" id="tecnologias" href="#"><li>Tecnologías</li></a>
                <a class="enlacesMenu" id="calendario" href="#"><li>Fechas Calendario</li></a>
            </ul>
            <ul class="enlaces-cerrar">
                <a class="enlacesMenu" id="esconder" href="#"><li>Esconder Menú</li></a>
                <a class="enlacesMenu" id="enlaceDeloguear" href="<?=url.'?controller=admin&action=deloguear'?>"><li>Cerrar Sesión</li></a>
            </ul>
        </nav>
    </section>
    <section class="contenido-inicio">
        contenido inicio
    </section>
    <section class="contenido-entradas">
        contenido entradas
    </section>
    <section class="contenido-categorias">
        contenido categorias
    </section>
    <section class="contenido-paginas">
        contenido paginas
    </section>
    <section class="contenido-cursos">
        contenido cursos
    </section>
    
</div>
    <script src="./script/admin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>