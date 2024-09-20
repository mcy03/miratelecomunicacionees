<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de medios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/admin/media.css">
</head>
<body>
    <div class="contenido row">
        <div class="media col-10 row">
            <div class="menu_media col-12">
                <input type="text" id="searchInput" placeholder="Buscar recurso" class="search_resource">
                <!-- Enlace para abrir modal de creación de recurso -->
                <a href="#" data-toggle="modal" data-target="#myModal" class="add_resource">
                    Crear recurso
                </a>
            </div>
            <div class="objects_media col-12 row" id="resourcesContainer">
                <?php if (!empty($recursos)) { ?>
                    <?php foreach ($recursos as $recurso) { ?>
                        <div class="object_media col-5" data-name="<?= strtolower($recurso->getNOMBRE()) ?>">
                            <div class="info_media">
                                <h3><?=$recurso->getNOMBRE()?></h3>
                                <a href="<?=$recurso->getURL_SERVER()?>"><?=substr($recurso->getURL_SERVER(), 0, 17)?>...</a>
                                <button class="copy_button" data-url="<?=$recurso->getURL_SERVER()?>">Copiar</button>
                            </div>
                            <div class="content_delete_media">
                                <!-- Formulario para eliminar el recurso -->
                                <form action="<?=url.'?controller=admin&action=delete_medio'?>" method="post" style="display:inline;">
                                    <input type="hidden" name="recurso_id" value="<?=$recurso->getRECURSO_ID()?>">
                                    <button type="submit">X</button>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <p class="not_empty">No hay recursos disponibles...</p>
                <?php } ?>
            </div>
            <p id="noResultsMessage" class="not_empty" style="display: none;">No se encontraron recursos que coincidan con la búsqueda.</p>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg-custom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Crear Recurso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?=url.'?controller=admin&action=insert_medio'?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="NOMBRE" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="DESCRIPCION" required>
                        </div>
 
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="URL" name="URL" value="<?=url.'biblioteca/'?>">
                        </div>
                        <div class="form-group">
                            <label for="archivo">Archivo:</label>
                            <input type="file" class="form-control-file" id="archivo" name="archivo" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Subir recurso</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



   <!-- jQuery (necesario para los componentes de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    // Obtener el campo de archivo por su ID
    const archivoInput = document.getElementById('archivo');

    function handleFileChange(event) {
        // Obtener el archivo del campo de entrada
        const archivo = event.target.files[0]; // Obtener el primer archivo seleccionado
        
        let inputUrl = document.getElementById('URL');
        
        if (archivo) {
            // Mostrar el nombre del archivo
            inputUrl.innerText = `http://127.0.0.1/miratelecomunicacionees/biblioteca/${archivo.name}`;
            inputUrl.value = `http://127.0.0.1/miratelecomunicacionees/biblioteca/${archivo.name}`;
        }
    }
    
    // Añadir el listener para el evento 'change' en el campo de archivo
    archivoInput.addEventListener('change', handleFileChange);

    // Función para copiar el texto al portapapeles
    function copyToClipboard(text) {
        // Crear un elemento de texto temporal
        const tempInput = document.createElement('input');
        tempInput.value = text;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand('copy');
        document.body.removeChild(tempInput);
    }

    // Añadir evento a los botones de copiar
    document.addEventListener('DOMContentLoaded', (event) => {
        const copyButtons = document.querySelectorAll('.copy_button');

        copyButtons.forEach(button => {
            button.addEventListener('click', (event) => {
                // Obtener la URL del atributo data-url del botón
                const url = event.target.getAttribute('data-url');
                if (url) {
                    copyToClipboard(url);
                    alert('URL del recurso copiada!');
                }
            });
        });
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        const searchInput = document.getElementById('searchInput');
        const resourcesContainer = document.getElementById('resourcesContainer');
        const resources = resourcesContainer.getElementsByClassName('object_media');
        const noResultsMessage = document.getElementById('noResultsMessage');

        function filterResources() {
            const searchText = searchInput.value.toLowerCase();
            let anyVisible = false;

            Array.from(resources).forEach(resource => {
                const resourceName = resource.getAttribute('data-name');
                if (resourceName.startsWith(searchText)) {
                    resource.style.display = '';
                    anyVisible = true;
                } else {
                    resource.style.display = 'none';
                }
            });

            // Muestra u oculta el mensaje de "sin resultados"
            if (anyVisible) {
                noResultsMessage.style.display = 'none';
            } else {
                noResultsMessage.style.display = 'block';
            }
        }

        searchInput.addEventListener('input', filterResources);
    });
</script>



</body>
</html>