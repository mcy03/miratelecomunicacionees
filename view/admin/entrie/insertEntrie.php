<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" type="text/css" href="./style/entrada.css?1.0">
    <link rel="stylesheet" type="text/css" href="./style/admin/createEntrie.css?1.0">   
    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
    <title>Document</title>
</head>
<body>
    <section id="banner-principal" class="banner-principal">
        <div id="title-page" class="title-page">
            <input id="input-name" type="text" placeholder="Nombre de la entrada"> 
            <button id="confirm-name" class="button-tag">Confirmar</button>
        </div>
        
    </section>
    <section class="ubicacion">
        <div class="ruta-ubi">
            <a class="ruta-page" href="<?=url?>">Home / </a><a class="ruta-page"  href="<?=url.'?controller=blog'?>">On the Go / </a><p id="page" class="page"></p>
        </div>
        <form id="img-entrie">
            <span class="btn btn-primary btn-file">
                Imagen portada... <input id="addImg-banner" name="addImg-banner" type="file">
            </span>
            <div>
                <input class="button-tag" type="submit" value="Añadir">
            </div>
        </form>
    </section>

    <div class="contenido">
        <div class="contenido-entrada">
            <div id="contentEntrie"></div>
            <div id="div-buttons-obtions" class="button-option-entrie">
                <form id="textarea-form">
                    <textarea type="text" name="txtDescripcion" id="txtDescripcion"></textarea> 
                    <div id="mt-20">
                        <input class="button-tag" type="submit" value="Añadir">
                    </div>
                </form>

                
            </div>
            <button id="button-create">CREAR</button>
        </div>
        <div class="publi">
            <div class="last-entries">
                <form id="img-form">
                        <span class="btn btn-primary btn-file">
                            Subir imagen...<input id="addImg" name="addImg" type="file">
                        </span>
                    <div class="inputs-size">
                        <input id="input-anchura" type="number" placeholder="Anchura (px)">
                        <input id="input-altura" type="number" placeholder="Altura (px)">
                    </div>  
                    <div class="select-position">
                        <select name="position" id="">
                            <option value="flex-start">Izquierda</option>
                            <option value="center">Centro</option>
                            <option value="flex-end">Derecha</option>
                        </select>
                    </div>  
                    <div id="mt-20">
                        <input class="button-tag" type="submit" value="Añadir">
                    </div>
                </form>

                <form id="params-entrie-form">
                    <div class="textarea-description">
                        <textarea type="text" placeholder="Breve descripción de la entrada" id="value-description"></textarea> 
                    </div>
                    <div class="select-category">
                        <select name="category" id="option-category">
                            <?php foreach ($categories as $category): ?>
                                <option value="<?=$category->getCATEGORIA_ID()?>"><?=$category->getNOMBRE()?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
                                
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>   
    <script src="./script/entrie/newEntrie.js"></script> 

    <script>
        ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );
        </script>
</body>
</html>
