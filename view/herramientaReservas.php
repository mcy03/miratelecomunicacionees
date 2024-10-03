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

                    <div id="apartadoProovedores">
                        <label for="proovedores">Vendor:</label>
                        <select name="proovedores" id="proovedores">
                            <option value="">Select a vendor</option>
                        </select>
                    </div>

                    <div id="apartadoLab">
                        <label for="laboratorios" class="labelInputChoices">Laboratory:</label>
                        <select name="laboratorios" id="laboratorios">
                            <option value="">Select a laboratory</option>
                        </select>
                    </div>

                    <div id="apartadoPods">
                        <label for="pods" class="labelInputChoices">Number of pods:</label>
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

                    <div id="apartadoSchedule">
                        <label for="schedule" class="labelInputChoices">Schedule:</label>
                        <select name="schedule" id="schedule">
                            <option value="">Select schedule</option>
                            <option value="09:00:00,12:00:00">09:00 - 12:00</option>
                            <option value="12:00:00,14:00:00">12:00 - 14:00</option>
                            <option value="14:00:00,16:00:00">14:00 - 16:00</option>
                        </select>
                    </div>

                    <div id="apartadoZonasHorarias">
                        <label for="zonasHorarias" class="labelInputChoices">Time zone:</label>
                        <select name="zonasHorarias" id="zonasHorarias">
                            <option value="">Select time zone</option>
                        </select>
                    </div>

                    <div id="apartadoComentarios">
                        <label for="comentarios" class="labelInputChoices">Comments:</label>
                        <div class="choices__inner">
                            <textarea id="comentarios" name="comentarios" rows="5" cols="33" class="choices__input" placeholder="Aditional comments"></textarea>
                        </div>
                    </div>
                </div>
                <div id="credencialesEmpSection">
                    <h1 class="tituloSeccion">COMPANY CREDENTIALS</h1>

                    <h2 id="subtitleContactDetails" class="subTituloSeccion">Contact details</h2>
                    <div id="apartadoCompanyName">
                        <label for="companyName" class="labelInputChoices">Company name:</label>
                        <div class="choices__inner">
                            <input type="text" id="companyName" name="companyName" class="choices__input" placeholder="Company name" value="Marcilla">
                        </div>
                    </div>

                    <div id="apartadoContactName">
                        <label for="contactName" class="labelInputChoices">Contact name:</label>
                        <div class="choices__inner">
                            <input type="text" id="contactName" name="contactName" class="choices__input" placeholder="Contact name" value="Marcos Marcilla">
                        </div>
                    </div>

                    <div id="apartadoContactEmail">
                        <label for="contactEmail" class="labelInputChoices">Contact email:</label>
                        <div class="choices__inner">
                            <input type="email" id="contactEmail" name="contactEmail" class="choices__input" placeholder="Contact email" value="m.marcilla@marcilla.com">
                        </div>
                    </div>

                    <div id="apartadoAddress">
                        <label for="address" class="labelInputChoices">Address:</label>
                        <div class="choices__inner">
                            <input type="text" id="address" name="address" class="choices__input" placeholder="Address" value="C/ Del Café, 10">
                        </div>
                    </div>

                    <div id="apartadoCountry">
                        <label for="country" class="labelInputChoices">Country:</label>
                        <select name="country" id="country">
                            <option value="">Select country</option>
                        </select>
                    </div>

                    <div id="apartadoCity">
                        <label for="city" class="labelInputChoices">City:</label>
                        <select name="city" id="city">
                            <option value="">Select city</option>
                        </select>
                    </div>

                    <div id="apartadoZipCode">
                        <label for="zipCode" class="labelInputChoices">Zip code:</label>
                        <div class="choices__inner">
                            <input type="text" id="zipCode" name="zipCode" class="choices__input" placeholder="Zip code" value="80293">
                        </div>
                    </div>

                    <div id="apartadoPhone">
                        <label for="phone" class="labelInputChoices">Phone:</label>
                        <div class="choices__inner">
                            <input type="tel" id="phone" name="phone" class="choices__input" placeholder="Phone" value="678901234">
                        </div>
                    </div>

                    <h2 class="subTituloSeccion">Technical details</h2>
                    <div id="apartadoTechnicalContactName">
                        <label for="technicalContactName" class="labelInputChoices">Technical contact name:</label>
                        <div class="choices__inner">
                            <input type="text" id="technicalContactName" name="technicalContactName" class="choices__input" placeholder="Technical contact name" value="Suliban Caler">
                        </div>
                    </div>

                    <div id="apartadoTechnicalContactEmail">
                        <label for="technicalContactEmail" class="labelInputChoices">Technical contact email:</label>
                        <div class="choices__inner">
                            <input type="email" id="technicalContactEmail" name="technicalContactEmail" class="choices__input" placeholder="Technical contact email" value="s.caler@marcilla.com">
                        </div>
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
                            <div id="confirmVendor" class="confirm_param_white""></div>
                            <div id=" confirmLaboratory" class="confirm_param_gray""></div>
                            <div id=" confirmNum_pods" class="confirm_param_white""></div>
                            <div id=" confirmNum_students" class="confirm_param_gray""></div>
                            <div id=" confirmStart_date" class="confirm_param_white""></div>
                            <div id=" confirmEnd_date" class="confirm_param_gray""></div>
                            <div id=" confirmSchedule" class="confirm_param_white""></div>
                            <div id=" confirmTime_zone" class="confirm_param_gray""></div>
                        </div>

                        <div class=" confirmContainerEmp">
                                <h2 class="subtituloConfirm">Company details</h2>
                                <div id="confirmCompany_name" class="confirm_param_white""></div>
                            <div id=" confirmCompany_contact" class="confirm_param_gray""></div>
                            <div id=" confirmAddress" class="confirm_param_white""></div>
                            <div id=" confirmCountry" class="confirm_param_gray""></div>
                            <div id=" confirmCity" class="confirm_param_white""></div>
                            <div id=" confirmZip_code" class="confirm_param_gray""></div>
                            <div id=" confirmPhone" class="confirm_param_white""></div>
                            <div id=" confirmTechnical_contact" class="confirm_param_gray""></div>
                        </div>                    
                    </div>
                    <div id=" confirmComentariosSection">
                                    <h2 class="subtituloConfirm">Aditional comments</h2>
                                    <div id="confirmComentarios">

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
    <script type="module" src="./script/reservas/herramientaReservas.js"></script>
    <script type="module" src="./script/reservas/calendars.js"></script>º
    <script src="./script/reservas/loadData.js"></script>
</body>

</html>