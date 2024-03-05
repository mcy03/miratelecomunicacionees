<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/admin/menuAdmin.css">
    <link rel="stylesheet" href="./style/admin/inicio.css">
    <link rel="stylesheet" href="./style/admin/entries.css">
    <title>Vista admin</title>
</head>
<body>
<div class="contenido">
    <section id="menuLateral" class="menuLateral">
        <nav>
            <ul>
                <a class="enlacesMenu" id="entradas" href="#"><li>Entradas</li></a>
                <a class="enlacesMenu" id="categorias" href="#"><li>Categorías</li></a>
                <a class="enlacesMenu" id="paginas" href="#"><li>Páginas</li></a>
            </ul>
            <ul>
                <a class="enlacesMenu" id="cursos" href="#"><li>Cursos</li></a>
                <a class="enlacesMenu" id="laboratorios" href="#"><li>Laboratorios</li></a>
                <a class="enlacesMenu" id="servicios" href="#"><li>Servicios IT</li></a>
                <a class="enlacesMenu" id="certificacion" href="#"><li>Certificación</li></a>
                <a class="enlacesMenu" id="tecnologias" href="#"><li>Tecnologías</li></a>
                <a class="enlacesMenu" id="calendario" href="#"><li>Fechas Calendario</li></a>
            </ul>
            <ul class="enlaces-cerrar">
                <a id="esconder" href="#"><li>Esconder Menú</li></a>
                <a id="enlaceDeloguear" href="<?=url.'?controller=admin&action=deloguear'?>"><li>Cerrar Sesión</li></a>
            </ul>
        </nav>
    </section>
    
    <section class="contenido-inicio activated">
        <div class="intro intro-admin">
            <h2>Administrador</h2>
            <p>Apartado para insertar y modificar el contenido del sitio web </p>
        </div>
        <div class="content-home-admin">
            <div class="resumes">
                <div class="info info-site">
                    <table>
                        <thead>
                            <tr>
                                <th><h3>Información del sitio web:</h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>Nombre del sitio web:</p></td>
                                <td class="data-table"><p>miratelecomunicacions.com</p></td>
                            </tr>
                            <tr>
                                <td><p>Entradas publicadas:</p></td>
                                <td class="data-table"><p>47</p></td>
                            </tr>
                            <tr>
                                <td><p>Categorías de entrada:</p></td>
                                <td class="data-table"><p>10</p></td>
                            </tr>
                            <tr>
                                <td><p>Paginas:</p></td>
                                <td class="data-table"><p>9</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="info info-database">
                    <table>
                        <thead>
                            <tr>
                                <th><h3>Información de la DDBB:</p></h3></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><p>Laboratorios:</p></td>
                                <td class="data-table"><p>15</p></td>
                            </tr>
                            <tr>
                                <td><p>Cursos:</p></td>
                                <td class="data-table"><p>20</p></td>
                            </tr>
                            <tr>
                                <td><p>Servicios IT:</p></td>
                                <td class="data-table"><p>5</p></td>
                            </tr>
                            <tr>
                                <td><p>Certificaciones:</p></td>
                                <td class="data-table"><p>25</p></td>
                            </tr>
                            <tr>
                                <td><p>Tecnologías:</p></td>
                                <td class="data-table"><p>10</p></td>
                            </tr>
                            <tr>
                                <td><p>Fechas Calendario:</p></td>
                                <td class="data-table"><p>4</p></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="quick quick-access">
                <div id="quick-entries" class="quick">
                    <div class="title-quick">
                            <img src="./resource/admin/icon-edit.png" alt="">
                        <h3>Enlaces entradas</h3>
                    </div>
                    <ul>
                        <li><a href="">Editar entrada</a></li>
                        <li><a href="">Eliminar entrada</a></li>
                        <li><a href="">Añadir entrada</a></li>
                        <li><a href="">Ver entradas</a></li>
                    </ul>
                </div>
                <div id="quick-entries" class="quick">
                    <div class="title-quick">
                            <img src="./resource/admin/icon-edit.png" alt="">
                        <h3>Enlaces rápidos contenido</h3>
                    </div>
                    <ul>
                        <li><a href="">Añadir laboratorio</a></li>
                        <li><a href="">Añadir curso</a></li>
                        <li><a href="">Añadir servicio IT</a></li>
                        <li><a href="">Añadir Certificación</a></li>
                        <li><a href="">Añadir Tecnología</a></li>
                        <li><a href="">Añadir Fecha Calendario</a></li>
                    </ul>
                </div>
                <div id="quick-entries" class="quick">
                    <div class="title-quick">
                        <img src="./resource/admin/icon-edit.png" alt="">
                        <h3>Enlaces rápidos páginas</h3>
                    </div>
                    <ul>
                        <li><a href="">Editar home</a></li>
                        <li><a href="">Editar Formación</a></li>
                        <li><a href="">Editar Calendario</a></li>
                        <li><a href="">Editar Servicios IT</a></li>
                        <li><a href="">Editar Laboratorios</a></li>
                        <li><a href="">Editar Librería Digital</a></li>
                        <li><a href="">Editar Mira</a></li>
                        <li><a href="">Editar On the Go</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contenido-entradas desactivated">
        <div class="intro intro-admin">
            <h2>Entradas</h2>
            <p>Crea, edita y gestiona las entradas de la web.</p>
        </div>
        <div class="content-page-entrie content-entries">
            <div class="filter-seeker">
                <div class="filter filter-entries">
                    <button>Publicadas</button>
                    <button>Borradores</button>
                    <button>Papelera</button>
                    <div class="button-create button-create-entrie">
                        <a href="" class="create-entrie">Nueva entrada</a>
                    </div>
                </div>
                
                <div class="seeker seeker-entries">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-entrie-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-entrie-seeker">
                    </div>
                </div>
            </div>  
            <div class="list list-entries">
                
            </div>
        </div>
    </section>

    <section class="contenido-categorias desactivated">
        <div class="intro intro-admin">
            <h2>Categorias</h2>
            <p>Crea, edita y gestiona las categorias de la web.</p>
        </div>

        <div class="content-categories">
            <div class="filter-seeker">                
                <div class="seeker-categories">
                    <div class="inputs-seeker">
                        <button type="submit" class="search-button"></button>
                        <input type="text" placeholder="Nombre de la categoria..." name="name-category-seeker">
                    </div>
                </div>
                <div class="button-create create-category">
                    <div class="button-create-category">
                        <a href="" class="create-category">Crear categoria</a>
                    </div>
                </div>
            </div>  

            <div class="list-categories">
                
            </div>
        </div>

    </section>

    <section class="contenido-paginas desactivated">
        <div class="intro intro-admin">
            <h2>Paginas</h2>
            <p>Crea, edita y gestiona las páginas de la web.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Borradores</button>
                    <button>Papelera</button>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            <div class="list list-pages">
                
            </div>
        </div>
    </section>
    

    <section class="contenido-cursos desactivated">
        <div class="intro intro-admin">
            <h2>Cursos</h2>
            <p>Crea, edita y gestiona los cursos de la base de datos.</p>
        </div>
        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-data-objects content-courses">
                
            </div>
        </div>
    </section>

    <section class="contenido-laboratorios desactivated">
        <div class="intro intro-admin">
            <h2>Laboratorios</h2>
            <p>Crea, edita y gestiona los laboratorios de la base de datos.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-table-object">
                <table class="labs-table">
                    <tr class="tr-header">
                        <th class="data-table-th">ID LAB</th>
                        <th class="data-table-th">CURSO</th>
                        <th class="data-table-th data-table-th-desc">DESCRIPCION</th>
                        <th class="data-table-th">DURACIÓN</th>
                        <th class="data-table-th">CAPACIDAD PODS</th>
                        <th class="data-table-th"></th>
                    </tr>
                    <tr class="tr-body">
                        <td class="data-table">1</td>
                        <td class="data-table">DNA</td>
                        <td class="data-table"><span>Laboratorio que se centra en la tecnologia dna center</span></td>
                        <td class="data-table">40</td>
                        <td class="data-table">4</td>
                        <td class="data-table">opciones</td>
                    </tr>
                    <tr class="tr-body">
                        <td class="data-table">2</td>
                        <td class="data-table">ACII</td>
                        <td class="data-table"><span>Laboratorio que se centra en la tecnologia acii</span></td>
                        <td class="data-table">40</td>
                        <td class="data-table">4</td>
                        <td class="data-table">opciones</td>
                    </tr>
                    <tr class="tr-body">
                        <td class="data-table">3</td>
                        <td class="data-table">DCACI</td>
                        <td class="data-table"><span>Laboratorio que se centra en la tecnologia dcaci</span></td>
                        <td class="data-table">40</td>
                        <td class="data-table">4</td>
                        <td class="data-table">opciones</td>
                    </tr>
                    <tr class="tr-body">
                        <td class="data-table">4</td>
                        <td class="data-table">SISE</td>
                        <td class="data-table"><span>Laboratorio que se centra en la tecnologia sise</span></td>
                        <td class="data-table">40</td>
                        <td class="data-table">4</td>
                        <td class="data-table">opciones</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    

    <section class="contenido-servicios desactivated">
        <div class="intro intro-admin">
            <h2>Servicios</h2>
            <p>Crea, edita y gestiona los servicios IT de la base de datos.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-data-objects content-services">
                <div class="row-objects">
                    <div class="object service">
                        <div class="object-img service-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body service-body">
                            <h4 class="id-object id-service">nombre servicio</h4>
                            <p class="name-object name-service">descripcion con nombre del servicio</p>
                        </div>

                        <div class="options-object options-service">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object service">
                        <div class="object-img service-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body service-body">
                            <h4 class="id-object id-service">nombre servicio</h4>
                            <p class="name-object name-service">descripcion con nombre del servicio</p>
                        </div>

                        <div class="options-object options-service">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
                <div class="row-objects">
                    <div class="object service">
                        <div class="object-img service-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body service-body">
                            <h4 class="id-object id-service">nombre servicio</h4>
                            <p class="name-object name-service">descripcion con nombre del servicio</p>
                        </div>

                        <div class="options-object options-service">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object service">
                            <div class="object-img service-img">
                                <img src="./resource/backgroundEjemplo.jpg" alt="">
                            </div>

                        <div class="object-body service-body">
                            <h4 class="id-object id-service">nombre servicio</h4>
                            <p class="name-object name-service">descripcion con nombre del servicio</p>
                        </div>

                        <div class="options-object options-service">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contenido-certificacion desactivated">
        <div class="intro intro-admin">
            <h2>Certificación</h2>
            <p>Crea, edita y gestiona las certificaciones de la base de datos.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-data-objects content-labs">
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                            <div class="object-img lab-img">
                                <img src="./resource/backgroundEjemplo.jpg" alt="">
                            </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contenido-tecnologias desactivated">
        <div class="intro intro-admin">
            <h2>Tecnologias</h2>
            <p>Crea, edita y gestiona las tecnologias de la base de datos.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-data-objects content-labs">
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                            <div class="object-img lab-img">
                                <img src="./resource/backgroundEjemplo.jpg" alt="">
                            </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contenido-calendario desactivated">
        <div class="intro intro-admin">
            <h2>Calendario</h2>
            <p>Crea, edita y gestiona los registros del calendario de la base de datos.</p>
        </div>

        <div class="content-page-entrie content-pages">
            <div class="filter-seeker">
                <div class="filter filter-pages">
                    <button>Publicadas</button>
                    <button>Papelera</button>
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="" class="create-category">Crear curso</a>
                        </div>
                    </div>
                </div>
                
                <div class="seeker seeker-pages">
                    <div class="icon-open-seeker">
                        <img src="./resource/lupa.png" alt="">
                    </div>
                    <div class="inputs-seeker">
                        <input type="date" name="date-page-seeker">
                        <input type="text" placeholder="Nombre de la entrada..." name="name-page-seeker">
                    </div>
                </div>
            </div>  
            
            <div class="content-data-objects content-labs">
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
                <div class="row-objects">
                    <div class="object lab">
                        <div class="object-img lab-img">
                            <img src="./resource/backgroundEjemplo.jpg" alt="">
                        </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>

                    <div class="object lab">
                            <div class="object-img lab-img">
                                <img src="./resource/backgroundEjemplo.jpg" alt="">
                            </div>

                        <div class="object-body lab-body">
                            <h4 class="id-object id-lab">nombre curso</h4>
                            <p class="name-object name-lab">descripcion con nombre del curso</p>
                        </div>

                        <div class="options-object options-lab">
                            <p>Opciones...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
    <script src="./script/admin.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
</body>
</html>