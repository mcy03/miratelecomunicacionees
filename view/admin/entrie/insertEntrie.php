<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/admin/createEntrie.css">
    <title>Insert entrie</title>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div id="content-insert" class="content">
        <h1 class="title">Insertar Entrada</h1>

        <div class="form-insert-entrie">
            <form id="form-create" enctype="multipart/form-data">
                <div class="input-div cont-titulo">
                    <input id="titulo" type="text" placeholder="Nombre de la entrada" required>
                </div>
                
                <div class="input-div cont-subtitulo">
                    <input id="subtitulo" type="text" placeholder="Subtitulo de la entrada">
                </div>

                <div class="input-div valores">
                    <div class="cont-img">
                        <label for="imagen-principal">Imagen de cabecera de la entrada: </label>
                        <input type="file" id="imagen-principal" name="imagen-principal" accept="image/*" required> 
                    </div>
                    <div class="cont-cat">
                        <label for="categoria">Categoria entrada:</label>
                        <select name="categoria" id="select-categoria">
                            <option value="0">Sin categoria</option>
                        </select>
                    </div>
                </div>
                
                <div id="contentEntrie">
                    <textarea id="default">Hello, World!</textarea>
                </div>
                
                <div class="input-div add">
                    <a href="" id="add-text" class="add-button">Añadir texto</a>
                    <a href="" id="add-img" class="add-button">Añadir imagen</a>
                </div>

                

                <div class="submit">
                    <input type="submit" value="Crear">
                </div>
            </form>
        </div>
        
    </div>
    

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea#default',
            apiKey: '8si8uxohaxopw3ewmt35wkkah54gbz52yrqkugcwna7ajscw'
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="./script/entrie/insertEntrie.js"></script>
</body>
</html>