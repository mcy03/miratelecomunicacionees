<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Incluir CSS de Choices.js -->
    <link rel="stylesheet" href="./style/choices.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/assets.css">
    <link rel="stylesheet" href="./style/reservas.css">
    <title>Mira Reservations</title>
    <!-- Favicon -->
    <link rel="icon" href="./resource/faviconMira.png" type="image/png">
</head>

<body>
    <div class="divGeneral">
        <div class="pasosReserva">
            <div id="seleccionLab">Laboratory selection</div>
            <hr>
            <div id="credencialesEmp">Company credentials</div>
            <hr>
            <div id="policy">Policy hightlights</div>
            <hr>
            <div id="finalizarRes">Confirm reservation</div>
        </div>
        <div class="formReserva">
            <form id="formReserva" onsubmit="return false;">
                <div id="seleccionLabSection">
                    <h1 class="tituloSeccion">LABORATORY SELECTION</h1>

                    <label for="proovedores">Vendor:</label>
                    <select name="proovedores" id="proovedores" required>
                        <option value="">Select a vendor</option>
                    </select>

                    <label for="laboratorios">Laboratory:</label>
                    <select name="laboratorios" id="laboratorios" required>
                        <option value="">Select a laboratory</option>
                    </select>

                    <div id="apartadoPods">
                        <label for="pods">Number of pods:</label>
                        <input type="text" id="pods" />
                    </div>

                    <div id="apartadoAlumnos">
                        <label for="alumnos" class="labelInputChoices">Number of students:</label>
                        <div class="choices__inner">
                            <input type="number" name="alumnos" id="alumnos" class="choices__input" placeholder="Select number of students" />
                        </div>
                    </div>

                    <!-- Ventana emergente (modal) para la advertencia -->
                    <div id="popup" class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>
                            <p id="popup-message"></p>
                        </div>
                    </div>

                    <div id="apartadoFechas">
                        <label class="labelInputChoices" for="fecha">Dates:</label>
                        <div id="inputDate-container">
                            <div class="calendars-container">
                                <div class="calendar-widget" id="calendar1"></div>
                                <div class="calendar-widget" id="calendar2"></div>
                                <div class="calendar-widget" id="calendar3"></div>
                            </div>
                            <div id="dateButtons"></div>
                        </div>
                    </div>

                    <label for="zonasHorarias">Time zone:</label>
                    <select name="zonasHorarias" id="zonasHorarias" required>
                        <option value="">Select time zone</option>
                    </select>
                </div>
                <div id="credencialesEmpSection">
                    <h1 class="tituloSeccion">COMPANY CREDENTIALS</h1>

                    <h2 id="subtitleContactDetails" class="subTituloSeccion">Contact details</h2>
                    <label for="companyName" class="labelInputChoices">Company name:</label>
                    <div class="choices__inner">
                        <input type="text" id="companyName" name="companyName" class="choices__input" placeholder="Company name" required>
                    </div>
                    <label for="contactName" class="labelInputChoices">Contact name:</label>
                    <div class="choices__inner">
                        <input type="text" id="contactName" name="contactName" class="choices__input" placeholder="Contact name" required>
                    </div>
                    <label for="contactEmail" class="labelInputChoices">Contact email:</label>
                    <div class="choices__inner">
                        <input type="email" id="contactEmail" name="contactEmail" class="choices__input" placeholder="Contact email" required>
                    </div>
                    <label for="address" class="labelInputChoices">Address:</label>
                    <div class="choices__inner">
                        <input type="text" id="address" name="address" class="choices__input" placeholder="Address" required>
                    </div>
                    <label for="country" class="labelInputChoices">Country:</label>
                    <select name="country" id="country" required>
                        <option value="">Select country</option>
                    </select>
                    <label for="city">City:</label>
                    <select name="city" id="city" required>
                        <option value="">Select city</option>
                    </select>
                    <label for="zipCode">Zip code:</label>
                    <div class="choices__inner">
                        <input type="text" id="zipCode" name="zipCode" class="choices__input" placeholder="Zip code" required>
                    </div>
                    <label for="phone" class="labelInputChoices">Phone:</label>
                    <div class="choices__inner">
                        <input type="text" id="phone" name="phone" class="choices__input" placeholder="Phone" required>
                    </div>

                    <h2 class="subTituloSeccion">Technical details</h2>
                    <label for="technicalContactName" class="labelInputChoices">Technical contact name:</label>
                    <div class="choices__inner">
                        <input type="text" id="technicalContactName" name="technicalContactName" class="choices__input" placeholder="Technical contact name" required>
                    </div>
                    <label for="technicalContactEmail" class="labelInputChoices">Technical contact email:</label>
                    <div class="choices__inner">
                        <input type="email" id="technicalContactEmail" name="technicalContactEmail" class="choices__input" placeholder="Technical contact email" required>
                    </div>

                </div>
                <div id="policySection">
                    <h1 class="tituloSeccion">POLICY HIGHTLIGHTS</h1>
                </div>
                <div id="finalizarResSection">
                    <h1 class="tituloSeccion">CONFIRM RESERVATION</h1>
                    <div class="confirmContainer">
                        <div class="confirmContainerLab">
                            <h2 class="subtituloConfirm">Laboratory details</h2>
                            <div id="vendor" class="confirm_param_white""><b>Vendor: </b></div>
                            <div id="laboratory" class="confirm_param_gray""><b>Laboratory: </b></div>
                            <div id="num_pods" class="confirm_param_white""><b>Pods: </b></div>
                            <div id="num_students" class="confirm_param_gray""><b>Students: </b></div>
                            <div id="start_date" class="confirm_param_white""><b>Start date: </b></div>
                            <div id="end_date" class="confirm_param_gray""><b>End date: </b></div>
                            <div id="schedule" class="confirm_param_white""><b>Schedule: </b></div>
                            <div id="time_zone" class="confirm_param_gray""><b>Time zone: </b></div>
                        </div>

                        <div class="confirmContainerEmp">
                            <h2 class="subtituloConfirm">Company details</h2>
                            <div id="company_name" class="confirm_param_white""><b>Company name: </b></div>
                            <div id="company_contact" class="confirm_param_gray""><b>Company contact: </b></div>º
                            <div id="address" class="confirm_param_white""><b>Adress: </b></div>
                            <div id="country" class="confirm_param_gray""><b>Country: </b></div>
                            <div id="city" class="confirm_param_white""><b>City: </b></div>
                            <div id="zip_code" class="confirm_param_gray""><b>Zip code: </b></div>
                            <div id="phone" class="confirm_param_white""><b>Phone: </b></div>
                            <div id="technical_contact" class="confirm_param_gray""><b>Technical contact: </b></div>
                        </div>                    
                    </div>
                </div>
                <div class="navButtons">
                            <div class="prevBtnDiv widthContainerButtons">
                                <button id="prevBtn" type="button">PREVIOUS</button>
                            </div>
                            <div class="nextBtnDiv widthContainerButtons">
                                <button id="nextBtn" type="button">NEXT</button>
                            </div>
                            <div id="ghostBtn" class="widthContainerButtons"></div>
                        </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Incluir JS de Choices.js -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <script src="./config/parameters.js"></script>
    <script src="./script/reservas/herramientaReservas.js"></script>
    <script src="./script/reservas/calendars.js"></script>
    <script src="./script/reservas/loadData.js"></script>
</body>

</html>