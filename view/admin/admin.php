<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

    <?php if (isset($selection)) { ?>
        <input id="input-selection" type="hidden" value="<?=$selection?>">
    <?php } ?>
    
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
                                <td><p>Categorías de entrada:</p></td>
                                <td class="data-table"><p><?=$numCategories?></p></td>
                            </tr>
                            <tr>
                                <td><p>Entradas publicadas:</p></td>
                                <td class="data-table"><p><?=$numEntries?></p></td>
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
                                <td class="data-table"><p><?=$numLabs?></p></td>
                            </tr>
                            <tr>
                                <td><p>Cursos:</p></td>
                                <td class="data-table"><p><?=$numCourse?></p></td>
                            </tr>
                            <tr>
                                <td><p>Servicios IT:</p></td>
                                <td class="data-table"><p><?=$numCategories?></p></td>
                            </tr>
                            <tr>
                                <td><p>Certificaciones:</p></td>
                                <td class="data-table"><p><?=$numCertifications?></p></td>
                            </tr>
                            <tr>
                                <td><p>Tecnologías:</p></td>
                                <td class="data-table"><p><?=$numTecnologies?></p></td>
                            </tr>
                            <tr>
                                <td><p>Fechas Calendario:</p></td>
                                <td class="data-table"><p><?=$numCalendario?></p></td>
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
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Ver entradas</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Gestionar entradas</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir entrada</a></li>
                        
                    </ul>
                </div>
                <div id="quick-entries" class="quick">
                    <div class="title-quick">
                            <img src="./resource/admin/icon-edit.png" alt="">
                        <h3>Enlaces rápidos contenido</h3>
                    </div>
                    <ul>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir laboratorio</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir curso</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir servicio IT</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir Certificación</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir Tecnología</a></li>
                        <li><a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>">Añadir Fecha Calendario</a></li>
                    </ul>
                </div>
                <!--
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
                -->
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
                    <button class="public selected">Publicadas</button>
                    <button class="draft">Borradores</button>
                    <button class="trash">Papelera</button>
                    <div class="button-create button-create-entrie">
                        <a href="<?=url.'?controller=admin&action=insertEntrieAdmin'?>" class="create-entrie">Nueva entrada</a>
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
                        <a  id="modalCreateCategory" class="create-category" href="#" data-toggle="modal" data-target="#miModalCreateCategory">Crear categoría</a>
                    </div>
                </div>

            </div>  

            <div class="list-categories">
            <?php foreach ($categorias as $categoria) { ?>
                <div class="category">
                    <div class="body-category">
                        <div class="info-category">
                            <h4><?=$categoria->getNOMBRE()?></h4>
                            <p class="date-category"><?=$categoria->getFecha()?></p>
                        </div>
                        <div class="entries-category">
                            <a id="modal<?=$categoria->getCATEGORIA_ID()?>" class="enlaceEntriesCategory" href="#" data-toggle="modal" data-target="#miModal<?=$categoria->getCATEGORIA_ID()?>">
                                <p class="num-entries-category">entradas</p>
                            </a>
                        </div>
                    </div>
                    <div class="options-category">
                        <p>Opciones...</p>
                    </div>
                </div>
            <?php } ?>   

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
                            <a href="#" class="create-category" data-toggle="modal" data-target="#modalAddLab">Añadir lab</a>
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
                        <td class="data-table"></td>
                        <td class="data-table"><span>Laboratorio que se centra en la tecnologia dna center</span></td>
                        <td class="data-table">40</td>
                        <td class="data-table">4</td>
                        <td class="data-table">opciones</td>
                    </tr>

                </table>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="modalAddLab" tabindex="-1" role="dialog" aria-labelledby="modalAddLabLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddLabLabel">Añadir Nuevo Laboratorio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario -->
                    <form id="formAddLab" action="<?=url.'controller=laboratorio&action=insertLab'?>" method="POST">
                        <div class="form-group container-courses-insertLab">
                            <label for="course">Curso</label>
                            <select name="selectCourseLab" id="selectCourseLab">
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ingrese la descripción" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duración</label>
                            <input type="number" class="form-control" id="duration" name="duration" placeholder="Ingrese la duración" required>
                        </div>
                        <div class="form-group">
                            <label for="capacity">Capacidad Pods</label>
                            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Ingrese la capacidad pods" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="submitLabForm">Guardar lab</button>
                </div>
            </div>
        </div>
    </div>

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
                    <div class="button-create create-category">
                        <div class="button-create-category">
                            <a href="#" class="create-category" data-toggle="modal" data-target="#modalAddDate">Añadir fecha</a>
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
            
            <div class="content-data-objects">
                <div class="row container-table-calendar">
                    <table cellspacing="0" cellpadding="5" class="col-12" id="tableDate">
                        <thead>
                            <tr>
                                <th>Curso</th>
                                <th>Inicio</th>
                                <th>Finalización</th>
                                <th>Horario</th>
                                <th>Idioma</th>
                                <th>País</th>
                                <th>Enlace</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        
                    </table>

                </div>
            </div>
        </div>
    </section>

 <!-- Modal para Añadir Registro del Calendario -->
<div class="modal fade" id="modalAddDate" tabindex="-1" role="dialog" aria-labelledby="modalAddDateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddDateLabel">Añadir Nuevo Registro al Calendario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- ID del Registro -->
                    <div class="form-group">
                        <label for="registroId">ID Registro</label>
                        <input type="text" class="form-control" id="registroId" placeholder="Ingrese el ID del registro">
                    </div>
                    
                    <!-- Curso -->
                    <div class="form-group">
                        <label for="cursoId">ID Curso</label>
                        <select class="form-control" id="cursoId">
                            <!-- Aquí se llenará dinámicamente con los cursos disponibles -->
                        </select>
                    </div>

                    <!-- Fecha de Inicio -->
                    <div class="form-group">
                        <label for="fechaInicio">Fecha de Inicio</label>
                        <input type="date" class="form-control" id="fechaInicio">
                    </div>

                    <!-- Fecha de Fin -->
                    <div class="form-group">
                        <label for="fechaFin">Fecha de Fin</label>
                        <input type="date" class="form-control" id="fechaFin">
                    </div>

                    <!-- Idioma -->
                    <div class="form-group">
                        <label for="idioma">Idioma</label>
                        <input type="text" class="form-control" id="idioma" placeholder="Ingrese el idioma">
                    </div>

                    <!-- Zona Horaria -->
                    <div class="form-group">
                        <label for="timeZone">Zona Horaria</label>
                        <input type="text" class="form-control" id="timeZone" placeholder="Ingrese la zona horaria">
                    </div>

                    <!-- Enroll -->
                    <div class="form-group">
                        <label for="enroll">Enroll</label>
                        <input type="text" class="form-control" id="enroll" placeholder="Ingrese el enlace de inscripción">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="addDate()">Guardar Registro</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="modalModificarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalModificarLabel">Modificar Curso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formModificarCurso">
          <div class="mb-3">
            <label for="modalCursoId" class="form-label">ID del Curso</label>
            <input type="text" class="form-control" id="modalCursoId" readonly>
          </div>
          <div class="mb-3">
            <label for="modalFechaInicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="modalFechaInicio">
          </div>
          <div class="mb-3">
            <label for="modalFechaFin" class="form-label">Fecha de Fin</label>
            <input type="date" class="form-control" id="modalFechaFin">
          </div>
          <div class="mb-3">
            <label for="modalTimeZone" class="form-label">Zona Horaria</label>
            <input type="text" class="form-control" id="modalTimeZone">
          </div>
          <div class="mb-3">
            <label for="modalIdioma" class="form-label">Idioma</label>
            <input type="text" class="form-control" id="modalIdioma">
          </div>
          <div class="mb-3">
            <label for="modalPais" class="form-label">País</label>
            <input type="text" class="form-control" id="modalPais">
          </div>
          <div class="mb-3">
            <label for="modalEnroll" class="form-label">Enlace de Inscripción</label>
            <input type="text" class="form-control" id="modalEnroll">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="guardarCambios()">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Modales categorias -->
 <!-- Modal crear categoria -->
<div class="modal fade" id="miModalCreateCategory" tabindex="-1" role="dialog" aria-labelledby="miModalLabelCreateCategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="miModalLabelCreateCategory">Modal de creación de categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de Creación de Categoría -->
                <form id="createCategoryForm">
                    <div class="mb-3">
                        <label for="category-name" class="form-label">NOMBRE</label>
                        <input type="text" class="form-control" id="category-name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="category-description" class="form-label">DESCRIPCIÓN</label>
                        <textarea class="form-control" id="category-description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category-date" class="form-label">FECHA</label>
                        <input type="text" class="form-control" id="category-date" name="date" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="saveCategoryButton">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para autocompletar la fecha -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const dateField = document.getElementById("category-date");
    const today = new Date().toISOString().split('T')[0]; // Obtiene la fecha en formato YYYY-MM-DD
    dateField.value = today;
  });
</script>

<?php foreach ($categorias as $categoria) { ?>
    <!-- Modal modificación categoria <?=$categoria->getNOMBRE()?> -->
    <div class="modal fade" id="miModal<?=$categoria->getCATEGORIA_ID()?>" tabindex="-1" role="dialog" aria-labelledby="miModalLabel<?=$categoria->getCATEGORIA_ID()?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="miModalLabel<?=$categoria->getCATEGORIA_ID()?>">Modal de <?=$categoria->getNOMBRE()?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Este es el modal de <?=$categoria->getNOMBRE()?>. Puedes colocar aquí cualquier contenido que desees mostrar en el modal.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
            </div>
        </div>
    </div>
<?php } ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./script/admin.js"></script>
</body>
</html>