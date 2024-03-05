<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/admin/createEntrie.css">
    <title>Insert entrie</title>
</head>
<body>
    <div id="content-insert" class="content">
        <h1 class="title">Insertar Entrada</h1>

        <div class="form-insert-entrie">
            <form enctype="multipart/form-data">
                <div class="cont-titulo">
                    <input type="text" placeholder="Nombre de la entrada">
                </div>
                
                

                <div class="valores">
                    <div class="cont-img">
                        <label for="imagen-principal">Imagen de cabecera de la entrada: </label>
                        <input type="file" name="imagen-principal" accept="image/*">
                    </div>
                    <div class="cont-cat">
                        <label for="categoria">Categoria entrada:</label>
                        <select name="categoria" id="select-categoria">
                            <option value="0">Sin categoria</option>
                        </select>
                    </div>
                </div>
                
                <div id="contentEntrie">

                </div>
                <div class="add">
                    <a href="" id="add-text" class="add-button">Añadir texto</a>
                    <a href="" id="add-img" class="add-button">Añadir imagen</a>
                </div>

                <div class="submit">
                    <input type="submit" value="Crear">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>  
    <script src="./script/entrie/insertEntrie.js"></script>

    
</body>
</html>