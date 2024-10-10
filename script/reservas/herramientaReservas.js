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
// Declaración de variables globales para poder acceder a ellas desde otras funciones serán los valores de los inputs para acceder a los datos y guardarlos en la BBDD
let codificacion;
let vendorSelect;
let vendorSelectValue;
let vendorText;
let laboratorySelect;
let laboratorySelectValue;
let laboratoryText;
let numPods;
let numStudents;
let schedule = [];
let zonasHorarias;
let zonasHorariasValue;
let timeZoneText;
let comentarios;
let companyName;
let contactName;
let contactEmail;
let address;
let countrySelect;
let countryText;
let citySelect;
let cityText;
let zipCode;
let phone;
let technicalContactName;
let technicalContactEmail;

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
let isSubmited = false;

nextBtn.addEventListener('click', function (event) {
    event.preventDefault(); // Asegura que no se recargue la página

    if (currentSection === seleccionLabSection) {
        if (inputProovedores.value !== '' && inputLab.value !== '' && inputAlumnos.value !== '' && selectedDates.length !== 0 && inputZonasHorarias.value !== '' && startHour !== '' && endHour !== '') {
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

                window.scrollTo({
                    top: apartadoProovedores.offsetTop - 100,
                    behavior: 'smooth'
                });

            
                inputProovedores.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla

                });
            } else if (inputLab.value === '') {
                let apartadoLab = document.getElementById('apartadoLab');
                error.innerHTML = 'Please select a laboratory';
                apartadoLab.appendChild(error);

                window.scrollTo({
                    top: apartadoLab.offsetTop - 100,
                    behavior: 'smooth'
                });

                inputLab.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputAlumnos.value === '') {
                let apartadoAlumnos = document.getElementById('apartadoAlumnos');
                error.innerHTML = 'Number of students must be greater than 0';
                error.style.marginTop = '0px';
                apartadoAlumnos.appendChild(error);

                setTimeout(() => {
                    inputAlumnos.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputAlumnos.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (selectedDates.length === 0) {
                let apartadoFechas = document.getElementById('apartadoFechas');
                error.innerHTML = 'Please select a date';
                error.style.marginTop = '0px';
                apartadoFechas.appendChild(error);
                window.scrollTo({
                    top: apartadoFechas.offsetTop - 100,
                    behavior: 'smooth'
                });

            } else if (startHour.value === '' || endHour.value === '') {
                let apartadoSchedule = document.getElementById('apartadoSchedule');
                error.innerHTML = 'Please select a schedule';
                error.style.marginTop = '0px';
                apartadoSchedule.appendChild(error);

                window.scrollTo({
                    top: apartadoSchedule.offsetTop - 100,
                    behavior: 'smooth'
                });

                endHour.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputZonasHorarias.value === '') {
                let apartadoZonasHorarias = document.getElementById('apartadoZonasHorarias');
                error.innerHTML = 'Please select a time zone';
                apartadoZonasHorarias.appendChild(error);

                window.scrollTo({
                    top: apartadoZonasHorarias.offsetTop - 100,
                    behavior: 'smooth'
                });

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

                setTimeout(() => {
                    inputCompanyName.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputCompanyName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla

                });
            } else if (inputContactName.value === '') {
                let apartadoContactName = document.getElementById('apartadoContactName');
                error.innerHTML = 'Please insert a contact name';
                error.style.marginTop = '0px';
                apartadoContactName.appendChild(error);

                setTimeout(() => {
                    inputContactName.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputContactName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputContactEmail.value === '') {
                let apartadoContactEmail = document.getElementById('apartadoContactEmail');
                error.innerHTML = 'Please insert a contact email';
                error.style.marginTop = '0px';
                apartadoContactEmail.appendChild(error);

                setTimeout(() => {
                    inputContactEmail.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validEmail.test(inputContactEmail.value)) {
                let apartadoContactEmail = document.getElementById('apartadoContactEmail');
                error.innerHTML = 'Please insert a valid email';
                error.style.marginTop = '0px';
                apartadoContactEmail.appendChild(error);

                setTimeout(() => {
                    inputContactEmail.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputAddress.value === '') {
                let apartadoAddress = document.getElementById('apartadoAddress');
                error.innerHTML = 'Please insert an address';
                error.style.marginTop = '0px';
                apartadoAddress.appendChild(error);

                setTimeout(() => {
                    inputAddress.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputAddress.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputCountry.value === '') {
                let apartadoCountry = document.getElementById('apartadoCountry');
                error.innerHTML = 'Please select a country';
                apartadoCountry.appendChild(error);

                window.scrollTo({
                    top: apartadoCountry.offsetTop - 100,
                    behavior: 'smooth'
                });

                inputCountry.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputCity.value === '') {
                let apartadoCity = document.getElementById('apartadoCity');
                error.innerHTML = 'Please select a city';
                apartadoCity.appendChild(error);

                window.scrollTo({
                    top: apartadoCity.offsetTop - 100,
                    behavior: 'smooth'
                });

                inputCity.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputZipCode.value === '') {
                let apartadoZipCode = document.getElementById('apartadoZipCode');
                error.innerHTML = 'Please insert a zip code';
                error.style.marginTop = '0px';
                apartadoZipCode.appendChild(error);

                setTimeout(() => {
                    inputZipCode.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputZipCode.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputPhone.value === '') {
                let apartadoPhone = document.getElementById('apartadoPhone');
                error.innerHTML = 'Please insert a phone number';
                error.style.marginTop = '0px';
                apartadoPhone.appendChild(error);

                setTimeout(() => {
                    inputPhone.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputPhone.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validPhone.test(inputPhone.value)) {
                let apartadoPhone = document.getElementById('apartadoPhone');
                error.innerHTML = 'Please insert a valid phone number';
                error.style.marginTop = '0px';
                apartadoPhone.appendChild(error);

                setTimeout(() => {
                    inputPhone.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputPhone.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });

            } else if (inputTechnicalContactName.value === '') {
                let apartadoTechnicalContactName = document.getElementById('apartadoTechnicalContactName');
                error.innerHTML = 'Please insert a technical contact name';
                error.style.marginTop = '0px';
                apartadoTechnicalContactName.appendChild(error);

                setTimeout(() => {
                    inputTechnicalContactName.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputTechnicalContactName.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (inputTechnicalContactEmail.value === '') {
                let apartadoTechnicalContactEmail = document.getElementById('apartadoTechnicalContactEmail');
                error.innerHTML = 'Please insert a technical contact email';
                error.style.marginTop = '0px';
                apartadoTechnicalContactEmail.appendChild(error);

                setTimeout(() => {
                    inputTechnicalContactEmail.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputTechnicalContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });
            } else if (!validEmail.test(inputTechnicalContactEmail.value)) {
                let apartadoTechnicalContactEmail = document.getElementById('apartadoTechnicalContactEmail');
                error.innerHTML = 'Please insert a valid email';
                error.style.marginTop = '0px';
                apartadoTechnicalContactEmail.appendChild(error);

                setTimeout(() => {
                    inputTechnicalContactEmail.focus(); // Enfocar en el campo después de mostrar el error
                }, 100); // Ajusta el tiempo según sea necesario

                inputTechnicalContactEmail.addEventListener('change', () => {
                    error.classList.remove('show'); // Removemos la clase 'show' para poder volver a aplicarla
                });

            }
        }

    } else if (currentSection === policySection) {
        if (document.getElementById('agreeTerms').checked === true) {
            oculto(event, policySection);
            policyText.classList.add('completed');
            visible(finalizarResSection);
            nextBtn.innerHTML = 'SUBMIT';
            if (screen.width > 768) {
                let ghostBtn = document.getElementById('ghostBtn');
                ghostBtn.style.display = 'flex';
                nextBtn.style.fontSize = '16px';
                nextBtn.style.width = '200px';
            }

            codificacion = `LAB${new Date().getFullYear()}`

            vendorSelect = document.getElementById('proovedores');
            vendorSelectValue = parseInt(vendorSelect.value);
            vendorText = vendorSelect.selectedIndex !== -1 ? vendorSelect.options[vendorSelect.selectedIndex].text : '';

            laboratorySelect = document.getElementById('laboratorios');
            laboratorySelectValue = parseInt(laboratorySelect.value);
                        
            laboratoryText = laboratorySelect.selectedIndex !== -1 ? laboratorySelect.options[laboratorySelect.selectedIndex].text : '';

            numPods = parseInt(document.getElementById('pods').value) || 'N/A';
            numStudents = parseInt(document.getElementById('alumnos').value) || 'N/A';

            schedule.push(document.getElementById('startHour').value || 'N/A');
            schedule.push(document.getElementById('endHour').value || 'N/A');

            zonasHorarias = document.getElementById('zonasHorarias');
            zonasHorariasValue = parseInt(zonasHorarias.value);
            timeZoneText = zonasHorarias.selectedIndex !== -1 ? zonasHorarias.options[zonasHorarias.selectedIndex].text : '';

            comentarios = document.getElementById('comentarios').value || 'N/A';

            companyName = document.getElementById('companyName').value || 'N/A';
            contactName = document.getElementById('contactName').value || 'N/A';
            contactEmail = document.getElementById('contactEmail').value || 'N/A';
            address = document.getElementById('address').value || 'N/A';

            countrySelect = document.getElementById('country');
            countryText = countrySelect.selectedIndex !== -1 ? countrySelect.options[countrySelect.selectedIndex].text : '';

            citySelect = document.getElementById('city');
            cityText = citySelect.selectedIndex !== -1 ? citySelect.options[citySelect.selectedIndex].text : '';

            zipCode = document.getElementById('zipCode').value || 'N/A';
            phone = document.getElementById('phone').value || 'N/A';
            technicalContactName = document.getElementById('technicalContactName').value || 'N/A';
            technicalContactEmail = document.getElementById('technicalContactEmail').value || 'N/A';

            resumenReserva(vendorText, laboratoryText, numPods, numStudents, selectedDates, schedule, timeZoneText, companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail, comentarios);
        } else {
            $('#exampleModal').modal('show');
        }
    } else {
        confirmacionReserva(codificacion, vendorSelectValue, laboratorySelectValue, numPods, numStudents, selectedDates, schedule, zonasHorariasValue, companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail, comentarios);
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


let labDiv = document.createElement('div');
inputLab.addEventListener('change', () => {
    apartadoPods.style.display = 'block';
    apartadoAlumnos.style.display = 'block';
    apartadoFechas.style.display = 'block';
    apartadoSchedule.style.display = 'block';
    
    labDiv.id = 'labSelected';
    labDiv.style.display = 'none';
    laboratorySelectValue = document.getElementById('laboratorios').value;
    for (let lab of labsReservas) {
        if (lab.LABORATORIO_ID === laboratorySelectValue) {
            labDiv.innerHTML = lab.DURACION;
        }
    }
    document.getElementById('apartadoLab').appendChild(labDiv);
})

async function resumenReserva(vendorText, laboratoryText, numPods, numStudents, selectedDates, schedule, timeZoneText, companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail, comentarios) {
    // Asignar los valores obtenidos a los elementos de confirmación
    document.getElementById('confirmVendor').innerHTML = `<b>Vendor: </b>${vendorText}`;
    document.getElementById(`confirmLaboratory`).innerHTML = `<b>Laboratory: </b>${laboratoryText}`;
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

    document.getElementById('confirmComentarios').innerHTML = `${comentarios}`;
}

async function confirmacionReserva(codificacion, vendorSelectValue, laboratorySelectValue, numPods, numStudents, selectedDates, schedule, zonasHorariasValue, companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail, comentarios) {
    let clienteId = parseInt(await comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail));
    await insert_reserva(codificacion, vendorSelectValue, laboratorySelectValue, numPods, numStudents, selectedDates[0], selectedDates[selectedDates.length - 1], zonasHorariasValue, schedule[0], schedule[1], clienteId, comentarios);
}

async function comprobarCliente(companyName, contactName, contactEmail, address, countryText, cityText, zipCode, phone, technicalContactName, technicalContactEmail) {
    let clientes = await get_clientes();
    let clienteId = 0;
    let clienteExiste = false;

    clientes.forEach(cliente => {
        if (cliente.EMPRESA === companyName && cliente.NOMBRE_CONTACTO === contactName && cliente.EMAIL_CONTACTO === contactEmail && cliente.DIRECCION === address && cliente.PAIS === countryText && cliente.CIUDAD === cityText && cliente.CODIGO_POSTAL === zipCode && cliente.TELEFONO === phone && cliente.NOMBRE_CONTACTO_TECH === technicalContactName && cliente.EMAIL_CONTACTO_TECH === technicalContactEmail) {
            clienteExiste = true;
            clienteId = cliente.CLIENTE_ID;
        } else if (cliente.EMPRESA === 'N/A' || cliente.NOMBRE_CONTACTO === 'N/A' || cliente.EMAIL_CONTACTO === 'N/A' || cliente.DIRECCION === 'N/A' || cliente.PAIS === 'Select country' || cliente.CIUDAD === 'Select city' || cliente.CODIGO_POSTAL === 'N/A' || cliente.TELEFONO === 'N/A' || cliente.NOMBRE_CONTACTO_TECH === 'N/A' || cliente.EMAIL_CONTACTO_TECH === 'N/A') {
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

async function insert_reserva(codificacion, vendorSelectValue, laboratorySelectValue, numPods, numStudents, fechaInicio, fechaFin, zonasHorariasValue, horaInicio, horaFin, clienteId, comentarios) {
    let formData = new FormData();
    formData.append('accion', 'insert_reserva');
    formData.append('codificacion', codificacion);
    formData.append('vendorSelectValue', vendorSelectValue);
    formData.append('laboratorySelectValue', laboratorySelectValue);
    formData.append('numPods', numPods);
    formData.append('numStudents', numStudents);
    formData.append('fechaInicio', fechaInicio);
    formData.append('fechaFin', fechaFin);
    formData.append('zonasHorariasValue', zonasHorariasValue);
    formData.append('horaInicio', horaInicio);
    formData.append('horaFin', horaFin);
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