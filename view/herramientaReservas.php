<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/reservas.css">
    <title>Reservas Mira</title>
    <!-- Favicon -->
    <link rel="icon" href="./resource/faviconMira.png" type="image/png">
</head>

<body>
    <div class="divGeneral">
        <div class="pasosReserva">
            <div id="seleccionLab">Selección de laboratorio</div>
            <hr>
            <div id="credencialesEmp">Credenciales de empresa</div>
            <hr>
            <div id="finalizarRes">Finalizar reserva</div>
        </div>
        <div class="formReserva">
            <form onsubmit="return false;" action="">
                <div id="seleccionLabSection">
                    <h1 class="tituloSeccion">SELECCIÓN DE LABORATORIO</h1>
                    <label for="laboratorios">Laboratorio:</label>
                    <select name="laboratorios" id="laboratorios" required>
                        <option value="">Seleccione un laboratorio</option>
                        <option value="1">Laboratorio 1</option>
                        <option value="2">Laboratorio 2</option>
                        <option value="3">Laboratorio 3</option>
                    </select>
                    <label for="alumnos">Número de alumnos:</label>
                    <select name="alumnos" id="alumnos" required>
                        <option value="">Seleccione número de alumnos</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <!-- Ventana emergente (modal) para la advertencia -->
                    <div id="popup" class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <p id="popup-message"></p>
                        </div>
                    </div>
                    <label for="fecha">Fechas:</label>
                    <div id="inputDate-container">
                        <div class="calendars-container">
                            <div class="calendar-widget" id="calendar1"></div>
                            <div class="calendar-widget" id="calendar2"></div>
                            <div class="calendar-widget" id="calendar3"></div>
                        </div>
                        <div id="dateButtons"></div>
                    </div>


                    <label for="pods">Número de pods:</label>
                    <select name="pods" id="pods" required>
                        <option value="">Seleccione número de pods</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div id="credencialesEmpSection">
                    <h1 class="tituloSeccion">CREDENCIALES DE EMPRESA</h1>
                    <label for="laboratorios">Laboratorio:</label>
                    <label for="alumnos">Número de alumnos:</label>
                    <label for="fecha">Fechas:</label>
                    <label for="pods">Núm pods:</label>
                </div>
                <div id="finalizarResSection">
                    <h1 class="tituloSeccion">FINALIZAR RESERVA</h1>
                </div>
                <div class="navButtons">
                    <div class="prevBtnDiv">
                        <button id="prevBtn" type="button">VOLVER</button>
                    </div>
                    <div class="nextBtnDiv">
                        <button id="nextBtn" type="button">SIGUIENTE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./config/parameters.js"></script>
    <script src="./script/reservas/herramientaReservas.js"></script>
    <script src="./script/reservas/calendars.js"></script>
    <script src="./script/reservas/loadData.js"></script>
</body>

</html>