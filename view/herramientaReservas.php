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
                        <div class="scheduleContainer">
                            <div>
                                <label for="schedule" class="labelInputChoices">Start hour:</label>
                                <div class="choices__inner">
                                    <input class="choices__input" name="startHour" id="startHour" type="time"/>
                                </div>
                            </div>
                            <p class="dividerHour">-</p>
                            <div>
                                <label for="schedule" class="labelInputChoices">End hour:</label>
                                <div class="choices__inner">
                                    <input class="choices__input" name="endHour" id="endHour"type="time"/>
                                </div>
                            </div>
                        </div>
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
                    <div class="policyContainer">
                        <p>This contract is between MIRA Telecomunicacions, S.L. (MIRA) and the client, regarding the provision of laboratory rental services. By accessing or using MIRA's services, you agree to the terms described below. If you do not agree with these terms, you will not be able to access the services.</p>
                        <h3>General Terms</h3>
                        <ul>
                            <li>These Terms are governed by the laws of Spain.</li>
                            <li>If you do not agree with these terms, you must notify us immediately.</li>
                        </ul>
                        <h3>Financial Terms</h3>
                        <ul>
                            <li>All invoices will be issued in the specified currency, and the client is responsible for any currency conversion charges.</li>
                            <li>The client must pay in full before the start of the service, as follows:
                                <ul>
                                    <li><b>Laboratory rental services:</b> Full payment is required 10 days before the start date.</li>
                                    <li><b>Regular clients:</b> Please consult payment terms with Mira Telecomunicacions.</li>
                                </ul>
                            </li>
                            <li>Payments can be made via bank transfer or PayPal.</li>
                        </ul>
                        <h3>Cancellation and Modifications</h3>
                        <ul>
                            <li><b>Date modifications: </b>Any date change must be made at least 10 days before the reserved date. Changes within 10 days will incur a 35% penalty.</li>
                            <li><b>Laboratory service cancellation: </b>Cancellations made more than 10 days in advance will not incur a penalty. Cancellations within 10 days will incur a 45% penalty.</li>
                        </ul>
                        <h3>Laboratory Access and Use</h3>
                        <ul>
                            <li>MIRA provides continuous access to the contracted laboratory, but interruptions may occur due to factors beyond its control (e.g., technical issues, maintenance).</li>
                            <li>Users are responsible for ensuring they meet the required system specifications to access the courses.</li>
                            <li>The client, instructor, and students must follow the laboratory guide provided. They cannot make any changes or add configurations or tests. If any anomaly is detected, Mira Telecomunicacions reserves the right to restrict access and penalize the client for any damages caused. Our support team is available to assist during the established hours (7:00 am – 10:00 pm GMT +2). Outside of those hours, please contact mira@miratelecomunicacions.com.</li>
                        </ul>
                        <h3>Copyright and Intellectual Property</h3>
                        <ul>
                            <li>The materials provided are the property of MIRA or its partners and are for personal use only.</li>
                            <li>Users may not copy, share, or modify the laboratory content without MIRA’s express permission.</li>
                        </ul>
                        <h3>Limitation of Liability</h3>
                        <ul>
                            <li>MIRA is not responsible for any damages exceeding the laboratory fees paid. Use of the site and its content is at your own risk.</li>
                        </ul>
                        <h3>Payment Information</h3>
                        <ul>
                            <li>Payments must be made to:<ul>
                                    <li>Bank transfer to:<ul>
                                            <li><b>Beneficiary: </b>Mira Telecomunicacions, S.L.</li>
                                            <li><b>Bank: </b>Banco Santander</li>
                                            <li><b>IBAN: </b>ES9400490015042710112653</li>
                                            <li><b>SWIFT: </b>BSCHESMM</li>
                                        </ul>
                                    </li>
                                    <li>Bank receipts must be sent to: r.vazquez@miratelecomunicacions.com</li>
                                </ul>
                            </li>
                        </ul>
                        <div id="termsContainer">
                            <div class="checkbox-wrapper">
                                <input type="radio" id="agreeTerms" name="agreeTerms" value="I agree to the terms and conditions">
                                <label for="agreeTerms">I agree</label>
                            </div>
                            <div class="checkbox-wrapper">
                                <input type="radio" id="notAgreeTerms" name="agreeTerms" value="I do not agree to the terms and conditions">
                                <label for="notAgreeTerms">I do not agree</label>
                            </div>
                        </div>
                        
                         <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Policy hightlights</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        To continue with the reservation you must accept the policy highlights
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-red" data-dismiss="modal">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="finalizarResSection">
                    <h1 class="tituloSeccion">CONFIRM RESERVATION</h1>
                    <div class="confirmContainer">
                        <div class="confirmContainerLab">
                            <h2 class="subtituloConfirm">Laboratory details</h2>
                            <div id="confirmVendor" class="confirm_param_white"></div>
                            <div id="confirmLaboratory" class="confirm_param_gray"></div>
                            <div id="confirmNum_pods" class="confirm_param_white"></div>
                            <div id="confirmNum_students" class="confirm_param_gray"></div>
                            <div id="confirmStart_date" class="confirm_param_white"></div>
                            <div id="confirmEnd_date" class="confirm_param_gray"></div>
                            <div id="confirmSchedule" class="confirm_param_white"></div>
                            <div id="confirmTime_zone" class="confirm_param_gray"></div>
                        </div>

                        <div class="confirmContainerEmp">
                            <h2 class="subtituloConfirm">Company details</h2>
                            <div id="confirmCompany_name" class="confirm_param_white"></div>
                            <div id="confirmCompany_contact" class="confirm_param_gray"></div>
                            <div id="confirmAddress" class="confirm_param_white""></div>
                            <div id="confirmCountry" class="confirm_param_gray"></div>
                            <div id="confirmCity" class="confirm_param_white"></div>
                            <div id="confirmZip_code" class="confirm_param_gray"></div>
                            <div id="confirmPhone" class="confirm_param_white"></div>
                            <div id="confirmTechnical_contact" class="confirm_param_gray"></div>
                        </div>                    
                    </div>
                    <div id="confirmComentariosSection">
                        <h2 class="subtituloConfirm">Aditional comments</h2>
                        <div id="confirmComentarios" class="confirm_param_gray"></div>

                        <p class="confirmSectionText"><b>You are generating a Purchase Order. You will receive a copy by email with the details specified in the form.</b><br>
                        <b>Mira Telecomunicacions will receive a copy and will contact you to finalize the process. If you wish, you can reach out to mira@miratelecomunicaciones.com.</b></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Incluir JS de Choices.js -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>
    <script src="./config/parameters.js"></script>
    <script type="module" src="./script/reservas/herramientaReservas.js"></script>
    <script type="module" src="./script/reservas/calendars.js"></script>
    <script type="module" src="./script/reservas/loadData.js"></script>
    <script type="module" src="./script/reservas/mail/mail.js"></script>
    <script type="module" src="./script/reservas/mail/server.js"></script>
</body>

</html>