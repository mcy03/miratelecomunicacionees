<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/courseView.css">
    

    <title>Document</title>
</head>
<body>
    <section class="banner-principal">
        <div class="title-page">
            <h1><?= $course->getNOMBRE_CURSO() ?></h1>
        </div>

        <p style="padding-top: 2%">
            <?= $course->getCOMPLETE_NAME() ?>
        </p>
    </section>

    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page" href="<?=url.'?controller=formacion'?>">Formación / </a><p class="page"><?= $course->getNOMBRE_CURSO() ?></p>
        </div>
    </section>

    <div class="row">
        <div class="col-12 content row d-flex justify-content-center">
            <section class="col-11" id="course-view">
                <div id="value-description" class="content-value">
                    <h5>Course Description</h5>
                    <div class="data">
                        <p><?= $course->getDESCRIPCION() ?></p>
                    </div>
                </div>
                <div class="data-course">
                    <div class="content-table">
                        <div class="pagination">
                            <?php if ($course->getPREREQUISITOS() != null) { ?>
                                <h5 id="title-prerequisites" class="selected-page">Course Prerequisites</h5>
                            <?php } if ($course->getJOB_ROLES() != null) { ?>
                                <h5 id="title-job-roles">Job Roles</h5>
                            <?php } if ($course->getCOURSE_CONTENT() != null) { ?>
                                <h5 id="title-content">Course Content</h5>
                            <?php } if ($course->getCOURSE_OBJECTIVE() != null) { ?>
                                <h5 id="title-objective">Course Objectives</h5>
                            <?php } if ($course->getLAB_OUTLINE() != null) { ?>
                                <h5 id="title-lab-outline">Lab Outline</h5>
                            <?php } ?>
                        </div>
                            

                        <div class="data-pagination">
                            <?php if ($course->getPREREQUISITOS() != null) { ?>
                                <div id="value-prerequisites" class="content-value">
                                    <div class="data">
                                        <?= $course->getPREREQUISITOS() ?>
                                    </div>
                                </div>
                            <?php } if ($course->getJOB_ROLES() != null) { ?>
                                <div id="value-job-roles" class="content-value hidden">
                                    <div class="data">
                                        <?= $course->getJOB_ROLES() ?>  
                                    </div>
                                </div>
                            <?php } if ($course->getCOURSE_CONTENT() != null) { ?>
                                <div id="value-content" class="content-value hidden">
                                    <div class="data">
                                        <?= $course->getCOURSE_CONTENT() ?>
                                    </div>
                                </div>
                            <?php } if ($course->getCOURSE_OBJECTIVE() != null) { ?>
                                <div id="value-objective" class="content-value hidden">
                                    <div class="data">
                                        <?= $course->getCOURSE_OBJECTIVE() ?>
                                    </div>
                                </div>
                            <?php } if ($course->getLAB_OUTLINE() != null) { ?>
                                <div id="value-lab-outline" class="content-value hidden">                    
                                    <div class="data">
                                        <?= $course->getLAB_OUTLINE() ?>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                    <div class="boxes">
                        <div class="box box-duration">
                            <h5>Duration</h5>
                            <div class="data data-box">
                                <img src="./resource/iconos/time-and-date.png" alt="">
                                
                                <p><?= $course->getDURATION() ?></p>
                            </div>
                        </div>

                        <div class="box box-clc">
                            <h5>Cisco Learning Credits (CLC)</h5>
                            <div class="data  data-box">
                                <img src="./resource/iconos/time-and-date.png" alt="">

                                <p><?= $course->getDURATION() ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="./script/curso/courseView.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
</body>
</html>