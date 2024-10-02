const nextBtn = document.getElementById('nextBtn');
const prevBtn = document.getElementById('prevBtn');
const seleccionLabText = document.getElementById('seleccionLab');
const credencialesEmpText = document.getElementById('credencialesEmp');
const policyText = document.getElementById('policy');
const finalizarResText = document.getElementById('finalizarRes');
const seleccionLabSection = document.getElementById('seleccionLabSection');
const credencialesEmpSection = document.getElementById('credencialesEmpSection');
const policySection = document.getElementById('policySection');
const finalizarResSection = document.getElementById('finalizarResSection');
const form = document.getElementById('formReserva');
const inputProovedores = document.getElementById('proovedores');
const inputLab = document.getElementById('laboratorios');
const inputAlumnos = document.getElementById('alumnos');
const inputFecha = document.getElementById('fecha');
const inputZonasHorarias = document.getElementById('zonasHorarias');
const inputSchedule = document.getElementById('schedule');
const inputPods = document.getElementById('pods');
const apartadoPods = document.getElementById('apartadoPods');
const apartadoAlumnos = document.getElementById('apartadoAlumnos');
const apartadoFechas = document.getElementById('apartadoFechas');
const apartadoSchedule = document.getElementById('apartadoSchedule');
const inputCompanyName = document.getElementById('companyName');
const inputContactName = document.getElementById('contactName');
const inputContactEmail = document.getElementById('contactEmail');
const inputAddress = document.getElementById('address');
const inputCountry = document.getElementById('country');
const inputCity = document.getElementById('city');
const inputZipCode = document.getElementById('zipCode');
const inputPhone = document.getElementById('phone');
const inputTechnicalContactName = document.getElementById('technicalContactName');
const inputTechnicalContactEmail = document.getElementById('technicalContactEmail');

// Variable para llevar el control de la sección actual
let currentSection = seleccionLabSection;

function visible(section) {
    section.style.display = 'flex';
    let sectionId = section.id.replace('Section', '');
    let sectionText = document.getElementById(sectionId);
    sectionText.classList.add('selected');
    sectionText.classList.remove('unselected');
    sectionText.classList.remove('completed');
    currentSection = section;  // Actualiza la sección actual
    if (currentSection !== seleccionLabSection) {
        prevBtn.style.display = 'block';
    } else {
        prevBtn.style.display = 'none';
    }
}

function oculto(event, section) {
    event.preventDefault();  // Prevenir la recarga de la página
    section.style.display = 'none';
    let sectionId = section.id.replace('Section', '');
    let sectionText = document.getElementById(sectionId);
    sectionText.classList.add('unselected');
    sectionText.classList.remove('selected');
}

function init() {
    // Inicializa el estado
    seleccionLabText.classList.add('selected');
    credencialesEmpText.classList.add('unselected');
    policyText.classList.add('unselected');
    finalizarResText.classList.add('unselected');
    visible(seleccionLabSection);  // Mostrar la primera sección inicialmente
    prevBtn.style.display = 'none'; // Oculto el botón anterior en la primera sección
}

init();
const validEmail = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;
const validPhone = /^\(?(\d{3})\)?[-\s]?(\d{3})[-\s]?(\d{3})$/;

nextBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === seleccionLabSection) {
        if (inputProovedores.value !== '' && inputLab.value !== '' && inputAlumnos.value !== '' && selectedDates.length !== 0 && inputZonasHorarias.value !== '' && inputSchedule !== '') {
            oculto(event, seleccionLabSection);
            seleccionLabText.classList.add('completed');
            visible(credencialesEmpSection);
        } else {
            // Si hay algún div con la clase error, lo eliminamos
            if (document.getElementsByClassName('error').length > 0) {
                let error = document.getElementsByClassName('error')[0];
                error.remove();
            }
            let error = document.createElement('div');
            error.classList.add('error');
            // Agregar un pequeño retraso para permitir la animación
            setTimeout(() => {
                error.classList.add('show'); // Añadimos la clase 'show' para activar la animación
            }, 10); // Un retraso mínimo para que la transición funcione correctamente

            if (inputProovedores.value === '') {
                let apartadoProovedores = document.getElementById('apartadoProovedores');
                error.innerHTML = 'Please select a vendor';
                apartadoProovedores.appendChild(error);

                inputProovedores.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla

                });
            } else if (inputLab.value === '') {
                let apartadoLab = document.getElementById('apartadoLab');
                error.innerHTML = 'Please select a laboratory';
                apartadoLab.appendChild(error);

                inputLab.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputAlumnos.value === '') {
                let apartadoAlumnos = document.getElementById('apartadoAlumnos');
                error.innerHTML = 'Number of students must be greater than 0';
                error.style.marginTop = '0px';
                apartadoAlumnos.appendChild(error);

                inputAlumnos.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (selectedDates.length === 0) {
                let apartadoFechas = document.getElementById('apartadoFechas');
                error.innerHTML = 'Please select a date';
                error.style.marginTop = '0px';
                apartadoFechas.appendChild(error);

            } else if (inputSchedule.value === '') {
                let apartadoSchedule = document.getElementById('apartadoSchedule');
                error.innerHTML = 'Please select a schedule';
                apartadoSchedule.appendChild(error);

                inputSchedule.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputZonasHorarias.value === '') {
                let apartadoZonasHorarias = document.getElementById('apartadoZonasHorarias');
                error.innerHTML = 'Please select a time zone';
                apartadoZonasHorarias.appendChild(error);

                inputZonasHorarias.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            }
        }
    } else if (currentSection === credencialesEmpSection) {
        if (inputCompanyName.value !== '' && inputContactName.value !== '' && inputContactEmail.value !== '' && validEmail.test(inputContactEmail.value) && inputAddress.value !== '' && inputCountry.value !== '' && inputCity.value !== '' && inputZipCode.value !== '' && inputPhone.value !== '' && validPhone.test(inputPhone.value) && validPhone.test(inputPhone.value) && inputTechnicalContactName.value !== '' && inputTechnicalContactEmail.value !== '' && validEmail.test(inputTechnicalContactEmail.value)) {
            oculto(event, credencialesEmpSection);
            credencialesEmpText.classList.add('completed');
            visible(policySection);
        } else {
            // Si hay algún div con la clase error, lo eliminamos
            if (document.getElementsByClassName('error').length > 0) {
                let error = document.getElementsByClassName('error')[0];
                error.remove();
            }
            let error = document.createElement('div');
            error.classList.add('error');
            // Agregar un pequeño retraso para permitir la animación
            setTimeout(() => {
                error.classList.add('show'); // Añadimos la clase 'show' para activar la animación
            }, 10); // Un retraso mínimo para que la transición funcione correctamente

            if (inputCompanyName.value === '') {
                let apartadoCompanyName = document.getElementById('apartadoCompanyName');
                error.innerHTML = 'Please insert a company name';
                error.style.marginTop = '0px';
                apartadoCompanyName.appendChild(error);

                inputCompanyName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla

                });
            } else if (inputContactName.value === '') {
                let apartadoContactName = document.getElementById('apartadoContactName');
                error.innerHTML = 'Please insert a contact name';
                error.style.marginTop = '0px';
                apartadoContactName.appendChild(error);

                inputContactName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputContactEmail.value === '') {
                let apartadoContactEmail = document.getElementById('apartadoContactEmail');
                error.innerHTML = 'Please insert a contact email';
                error.style.marginTop = '0px';
                apartadoContactEmail.appendChild(error);

                inputContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validEmail.test(inputContactEmail.value)) {
                let apartadoContactEmail = document.getElementById('apartadoContactEmail');
                error.innerHTML = 'Please insert a valid email';
                error.style.marginTop = '0px';
                apartadoContactEmail.appendChild(error);

                inputContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            }else if (inputAddress.value === '') {
                let apartadoAddress = document.getElementById('apartadoAddress');
                error.innerHTML = 'Please insert an address';
                error.style.marginTop = '0px';
                apartadoAddress.appendChild(error);

                inputAddress.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputCountry.value === '') {
                let apartadoCountry = document.getElementById('apartadoCountry');
                error.innerHTML = 'Please select a country';
                apartadoCountry.appendChild(error);

                inputCountry.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputCity.value === '') {
                let apartadoCity = document.getElementById('apartadoCity');
                error.innerHTML = 'Please select a city';
                apartadoCity.appendChild(error);

                inputCity.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputZipCode.value === '') {
                let apartadoZipCode = document.getElementById('apartadoZipCode');
                error.innerHTML = 'Please insert a zip code';
                error.style.marginTop = '0px';
                apartadoZipCode.appendChild(error);

                inputZipCode.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputPhone.value === '') {
                let apartadoPhone = document.getElementById('apartadoPhone');
                error.innerHTML = 'Please insert a phone number';
                error.style.marginTop = '0px';
                apartadoPhone.appendChild(error);

                inputPhone.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validPhone.test(inputPhone.value)) {
                let apartadoPhone = document.getElementById('apartadoPhone');
                error.innerHTML = 'Please insert a valid phone number';
                error.style.marginTop = '0px';
                apartadoPhone.appendChild(error);

                inputPhone.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });

            } else if (inputTechnicalContactName.value === '') {
                let apartadoTechnicalContactName = document.getElementById('apartadoTechnicalContactName');
                error.innerHTML = 'Please insert a technical contact name';
                error.style.marginTop = '0px';
                apartadoTechnicalContactName.appendChild(error);

                inputTechnicalContactName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputTechnicalContactEmail.value === '') {
                let apartadoTechnicalContactEmail = document.getElementById('apartadoTechnicalContactEmail');
                error.innerHTML = 'Please insert a technical contact email';
                error.style.marginTop = '0px';
                apartadoTechnicalContactEmail.appendChild(error);

                inputTechnicalContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validEmail.test(inputTechnicalContactEmail.value)) {
                let apartadoTechnicalContactEmail = document.getElementById('apartadoTechnicalContactEmail');
                error.innerHTML = 'Please insert a valid email';
                error.style.marginTop = '0px';
                apartadoTechnicalContactEmail.appendChild(error);

                inputTechnicalContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });

            }
        }

    } else if (currentSection === policySection) {
        oculto(event, policySection);
        policyText.classList.add('completed');
        visible(finalizarResSection);
        nextBtn.innerHTML = 'SUBMIT';
        let ghostBtn = document.getElementById('ghostBtn');
        ghostBtn.style.display = 'flex';
        nextBtn.style.fontSize = '16px';
        nextBtn.style.width = '200px'
        resumenReserva();
    } else {
        confirmacionReserva();
        form.submit();

    }
});

prevBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === finalizarResSection) {
        oculto(event, finalizarResSection);
        finalizarResText.classList.remove('completed');
        visible(policySection);
        nextBtn.innerHTML = 'NEXT';
        let ghostBtn = document.getElementById('ghostBtn');
        ghostBtn.style.display = 'none';
        nextBtn.style.fontSize = '12px';
        nextBtn.style.width = 'fit-content'
    } else if (currentSection === policySection) {
        oculto(event, policySection);
        policyText.classList.remove('completed');
        visible(credencialesEmpSection);
    } else if (currentSection === credencialesEmpSection) {
        oculto(event, credencialesEmpSection);
        credencialesEmpText.classList.remove('completed');
        visible(seleccionLabSection);
    }
});

function showPopup(message) {
    // Obtener el elemento del popup
    var popup = document.getElementById('popup');
    // Mostrar el popup
    popup.style.display = 'block';
    // Actualizar el mensaje del popup
    document.getElementById('popup-message').innerText = message;

    // Cerrar el popup al hacer clic en la "X"
    document.querySelector('.close-btn').addEventListener('click', function () {
        popup.style.display = 'none';
    });

    // Opcional: Cerrar el popup después de unos segundos
    setTimeout(function () {
        popup.style.display = 'none';
    }, 10000); // Se cierra automáticamente después de 10 segundos
}

addEventListener('change', () => {
    if (inputPods.value !== '' && inputAlumnos.value > inputPods.value) {
        showPopup('Remember that the laboratories cannot be worked on simultaneously, since they are 1:2 pod:student.');
    }
})



inputLab.addEventListener('change', () => {
    apartadoPods.style.display = 'block';
    apartadoAlumnos.style.display = 'block';
    apartadoFechas.style.display = 'block';
    apartadoSchedule.style.display = 'block';
})

async function resumenReserva() {
    let vendorSelect = document.getElementById('proovedores');
    let vendorSelectValue = vendorSelect.value;
    let vendorText = vendorSelect.selectedIndex !== -1 ? vendorSelect.options[vendorSelect.selectedIndex].text : '';

    let laboratorySelect = document.getElementById('laboratorios');
    let laboratorySelectValue = laboratorySelect.value;
    let laboratoryText = laboratorySelect.selectedIndex !== -1 ? laboratorySelect.options[laboratorySelect.selectedIndex].text : '';

    let numPods = document.getElementById('pods').value || 'N/A';
    let numStudents = document.getElementById('alumnos').value || 'N/A';

    let schedule = document.getElementById('schedule').value || 'N/A';
    schedule = schedule.split(',');

    let zonasHorarias = document.getElementById('zonasHorarias');
    let zonasHorariasValue = zonasHorarias.value;
    let timeZoneText = zonasHorarias.selectedIndex !== -1 ? zonasHorarias.options[zonasHorarias.selectedIndex].text : '';

    let comentarios = document.getElementById('comentarios').value || 'N/A';

    let companyName = document.getElementById('companyName').value || 'N/A';
    let contactName = document.getElementById('contactName').value || 'N/A';
    let contactEmail = document.getElementById('contactEmail').value || 'N/A';
    let address = document.getElementById('address').value || 'N/A';

    let countrySelect = document.getElementById('country');
    let countryText = countrySelect.selectedIndex !== -1 ? countrySelect.options[countrySelect.selectedIndex].text : '';

    let citySelect = document.getElementById('city');
    let cityText = citySelect.selectedIndex !== -1 ? citySelect.options[citySelect.selectedIndex].text : '';

    let zipCode = document.getElementById('zipCode').value || 'N/A';
    let phone = document.getElementById('phone').value || 'N/A';
    let technicalContactName = document.getElementById('technicalContactName').value || 'N/A';
    let technicalContactEmail = document.getElementById('technicalContactEmail').value || 'N/A';

    console.log(vendorText);
    console.log(laboratoryText);
    console.log(numPods);
    console.log(numStudents);
    console.log(selectedDates);
    console.log(schedule);
    console.log(timeZoneText);
    console.log(companyName);
    console.log(contactName);
    console.log(contactEmail);
    console.log(address);
    console.log(countryText);
    console.log(cityText);
    console.log(zipCode);
    console.log(phone);
    console.log(technicalContactName);
    console.log(technicalContactEmail);
    console.log(comentarios);


    // Asignar los valores obtenidos a los elementos de confirmación
    document.getElementById('confirmVendor').innerHTML = `<b>Vendor: </b>${vendorText}`;
    document.getElementById('confirmLaboratory').innerHTML = `<b>Laboratory: </b>${laboratoryText}`;
    document.getElementById('confirmNum_pods').innerHTML = `<b>Pods: </b>${numPods}`;
    document.getElementById('confirmNum_students').innerHTML = `<b>Students: </b>${numStudents}`;
    document.getElementById(`confirmStart_date`).innerHTML = `<b>Start date: </b>${selectedDates[0]}`;
    document.getElementById(`confirmEnd_date`).innerHTML = `<b>End date: </b>${selectedDates[selectedDates.length - 1]}`;
    document.getElementById(`confirmSchedule`).innerHTML = `<b>Schedule: </b>${schedule[0]} - ${schedule[1]}`;

    document.getElementById('confirmTime_zone').innerHTML = `<b>Time zone: </b>${timeZoneText}`;

    document.getElementById('confirmCompany_name').innerHTML = `<b>Company name: </b>${companyName}`;
    document.getElementById('confirmCompany_contact').innerHTML = `<b>Company contact: </b>${contactName} (${contactEmail})`;
    document.getElementById('confirmAddress').innerHTML = `<b>Address: </b>${address}`;
    document.getElementById('confirmCountry').innerHTML = `<b>Country: </b>${countryText}`;
    document.getElementById('confirmCity').innerHTML = `<b>City: </b>${cityText}`;
    document.getElementById('confirmZip_code').innerHTML = `<b>Zip code: </b>${zipCode}`;
    document.getElementById('confirmPhone').innerHTML = `<b>Phone: </b>${phone}`;
    document.getElementById('confirmTechnical_contact').innerHTML = `<b>Technical contact: </b>${technicalContactName} (${technicalContactEmail})`;

    document.getElementById('confirmComentarios').innerHTML = `<div>${comentarios}</div>`;
}

async function confirmacionReserva() {
    let clienteId = await comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail);
    console.log(await insert_reserva(vendorSelectValue, laboratorySelectValue, numPods, numStudents, selectedDates[0], selectedDates[selectedDates.length - 1], zonasHorariasValue, schedule[0], schedule[1], clienteId, comentarios));
}

async function comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail) {
    let clientes = await get_clientes();
    let clienteId = 0;
    let clienteExiste = false;

    clientes.forEach(async cliente => {
        if (cliente.EMPRESA === companyName && cliente.NOMBRE_CONTACTO === contactName && cliente.EMAIL_CONTACTO === contactEmail && cliente.DIRECCION === address && cliente.PAIS === countryText && cliente.CIUDAD === cityText && cliente.CODIGO_POSTAL === zipCode && cliente.TELEFONO === phone && cliente.NOMBRE_CONTACTO_TECH === technicalContactName && cliente.EMAIL_CONTACTO_TECH === technicalContactEmail) {
            clienteExiste = true;
            clienteId = cliente.CLIENTE_ID;
            console.log('Cliente existente');
        } else if (cliente.EMPRESA === 'N/A' || cliente.NOMBRE_CONTACTO === 'N/A' || cliente.EMAIL_CONTACTO === 'N/A' || cliente.DIRECCION === 'N/A' || cliente.PAIS === 'Select country' || cliente.CIUDAD === 'Select city' || cliente.CODIGO_POSTAL === 'N/A' || cliente.TELEFONO === 'N/A' || cliente.NOMBRE_CONTACTO_TECH === 'N/A' || cliente.EMAIL_CONTACTO_TECH === 'N/A') {
            console.log('CAMPOS SIN RELLENAR');
            console.log(cliente.EMPRESA);
            clienteExiste = true;
            alert('Make sure you fill out all fields correctly')
        }
    });

    if (clienteExiste === false) {
        clienteId = await insert_cliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail);
    }

    return clienteId;
}

//----------------------
//      Peticiones a api para obtener datos 
//----------------------
async function get_reservas() {
    let formData = new FormData();
    formData.append('accion', 'get_reservas');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function get_clientes() {
    let formData = new FormData();
    formData.append('accion', 'get_clientes');

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function insert_cliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail) {
    let formData = new FormData();
    formData.append('accion', 'insert_cliente');
    formData.append('companyName', companyName);
    formData.append('contactName', contactName);
    formData.append('contactEmail', contactEmail);
    formData.append('address', address);
    formData.append('country', countryText);
    formData.append('city', cityText);
    formData.append('zipCode', zipCode);
    formData.append('phone', phone);
    formData.append('technicalContactName', technicalContactName);
    formData.append('technicalContactEmail', technicalContactEmail);


    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}

async function insert_reserva(vendorSelectValue, laboratorySelectValue, numPods, numStudents, selectedDates, zonasHorariasValue, schedule, clienteId, comentarios) {
    let formData = new FormData();
    formData.append('accion', 'insert_reserva');
    formData.append('vendorSelectValue', vendorSelectValue);
    formData.append('laboratorySelectValue', laboratorySelectValue);
    formData.append('numPods', numPods);
    formData.append('numStudents', numStudents);
    formData.append('fechaInicio', selectedDates);
    formData.append('fechaFin', selectedDates);
    formData.append('zonasHorariasValue', zonasHorariasValue);
    formData.append('horaInicio', schedule);
    formData.append('horaFin', schedule);
    formData.append('clienteId', clienteId);
    formData.append('comentarios', comentarios);

    const url = 'http://127.0.0.1/miratelecomunicacionees/?controller=ApiReservas&action=api';

    try {
        const response = await axios.post(url, formData);

        return response.data;
    } catch (error) {
        console.error('Error:', error.message);
    }
}